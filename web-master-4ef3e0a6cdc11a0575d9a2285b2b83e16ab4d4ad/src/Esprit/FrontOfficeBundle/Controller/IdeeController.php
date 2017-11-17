<?php

namespace Esprit\FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Esprit\FrontOfficeBundle\Entity\Idee;
use Esprit\FrontOfficeBundle\Entity\Jaime;

use Esprit\FrontOfficeBundle\Form\IdeeType;
use Symfony\Component\HttpFoundation\JsonResponse;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IdeeController
 *
 * @author Tarek
 */
class IdeeController extends Controller {

   
    public function afficherAction() {
        $em = $this->getDoctrine()->getManager();
        $request=$this->getRequest();

        
        //recherche
        if ($this->get('request_stack')->getCurrentRequest()->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();
            $libelle = $request->get('titre');
            $idees = $em->getRepository("EspritFrontOfficeBundle:Idee")->findBy(array('titre' => $libelle));

            $entities  = $this->get('knp_paginator')->paginate($idees,$request->query->get('page', 1)/*page number*/,8/*limit per page*/);
            return $this->render("EspritFrontOfficeBundle:Idee:resultat.html.twig", array('entities' => $entities));
            }
        //fin recherche
        
            $query = $em->createQuery(
            'SELECT r
            FROM EspritFrontOfficeBundle:Idee I,EspritFrontOfficeBundle:Rating r
            WHERE 10000*I.id= r.id
            '
                    );
            $rates = $query->getResult();
            
            $q = $em->createQuery(
            'SELECT U
            FROM EspritFrontOfficeBundle:Idee I,EspritFrontOfficeBundle:User U
            
            '
                    );
            $users = $query->getResult();
            
            $users=$em->getRepository("EspritFrontOfficeBundle:User")->findAll();
             
            $query = $em->createQuery(
            'SELECT r
            FROM EspritFrontOfficeBundle:Idee I,EspritFrontOfficeBundle:Rating r
            WHERE 10000*I.id= r.id
            '
                    );
            $rates = $query->getResult();
            
        
        $idees = $em->getRepository("EspritFrontOfficeBundle:Idee")->findAll();
        $entities  = $this->get('knp_paginator')->paginate($idees,$request->query->get('page', 1)/*page number*/,8/*limit per page*/);
        return $this->render("EspritFrontOfficeBundle:Idee:affiche.html.twig", array('entities' => $entities,'rates'=>$rates,'users'=>$users));
    }
 
    // affichage pour la page de modification et suppression
    public function afficher2Action() {
        $request = $this->get('request_stack')->getCurrentRequest();
        if ($request->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();
            //$idPorteurDeProjet=$request->get('idPorteurDeProjet');
            // $idPorteurDeProjet va etre remplacé par : 
            $users=$em->getRepository("EspritFrontOfficeBundle:User")->findAll();

            $user = $this->container->get('security.context')->getToken()->getUser();
            $p = $user->getId();
            // *******************


            $idees = $em->getRepository("EspritApplicationBundle:Idee")->findBy(array('idPorteurDeProjet' => $idPorteurDeProjet));
            return $this->render("EspritApplicationBundle:Idee:affiche2.html.twig", array('idees' => $idees));
        }
        $user = $this->getUser();
        $p = $user->getId();
        $em = $this->getDoctrine()->getManager();

        $idees = $em->getRepository("EspritFrontOfficeBundle:Idee")->findBy(array('idPorteurDeProjet' => $p));
        $entities  = $this->get('knp_paginator')->paginate($idees,$request->query->get('page', 1)/*page number*/,8/*limit per page*/);
        return $this->render("EspritFrontOfficeBundle:Idee:afficheMy.html.twig", array('entities' => $entities));
     
        //return $this->render("EspritApplicationBundle:Idee:affiche2r.html.twig");
    }
    
    public function ajoutAction() {
        $idee = new Idee();
        //$request = $this->get('request'); version 9dima 
        //die(var_dump($this->get('container')->get('security.contecxt')));

        
        $request = $this->get('request_stack')->getCurrentRequest(); //recupération du requete
        if ($request->getMethod() == 'POST') {
            $titre = $request->get('titre');
            $description = $request->get('description');
            $type = $request->get('titre');

            // à utiliser ulteriérement
            $user = $this->container->get('security.context')->getToken()->getUser();

            $p = $user->getId();
            // *******************
            

            $idee->setTitre($titre);
            $idee->setDescription($description);
            $idee->setType($type);
            $idee->setIdPorteurDeProjet($p);

            $em = $this->getDoctrine()->getManager();
            $em->persist($idee);
            $em->flush();
            return $this->redirectToRoute('esprit_application_afficher_idee');
        }
        return $this->render("EspritFrontOfficeBundle:Idee:ajout.html.twig");
    }

    public function ajout2Action() {
        $idee = new Idee();
        
        $Form = $this->createForm(new IdeeType(), $idee);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);
        if ($Form->isValid()) {
            try {
                $user = $this->container->get('security.context')->getToken()->getUser();
                $p = $user->getId();
                $idee->setIdPorteurDeProjet($p);
                $idee->upload();
                $em = $this->getDoctrine()->getManager();
                $em->persist($idee);
                $em->flush();
                
                
                
             $query = $em->createQuery(
            'SELECT max(U.id) as c
            FROM EspritFrontOfficeBundle:Idee U
            ' );
             $id = $query->getResult();
             $id=$id[0]['c'];
            $rating = new \Esprit\FrontOfficeBundle\Entity\Rating;
            $rating->setId(10000*$id);
            $rating->setNumVotes(0);
            $rating->setRate(0.0);
            $rating->setCreatedAt(new \DateTime('now'));
            $rating->setPermalink("http://localhost/CrowdRise_Web/web/app_dev.php/ideeaff/");
            $rating->setSecurityRole("IS_AUTHENTICATED_FULLY");
            $em->persist($rating);
            $em->flush();
             
            } catch (\Doctrine\DBAL\DBALException $e) {
                return $this->render("EspritFrontOfficeBundle:Idee:erreur.html.twig");
            }
            return $this->redirect($this->generateUrl('esprit_application_afficher_idee'));
        }
        
        return $this->render("EspritFrontOfficeBundle:Idee:ajout2.html.twig", array('form' => $Form->createView()));
        
    }

    public function deleteAction($id) {
        $em = $this->getDoctrine()->getManager();
        $idee = $em->getRepository('EspritFrontOfficeBundle:Idee')->find($id);
        $em->remove($idee);
        $em->flush();
        return $this->redirect($this->generateUrl('esprit_application_afficher_idee'));
    }
    
    public function updateAction($id) {
        
        $em = $this->getDoctrine()->getManager();
        $idee = $em->getRepository('EspritFrontOfficeBundle:Idee')->find($id);
        $Form = $this->createForm(new IdeeType(), $idee);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);

        if ($Form->isValid()) {
            $idee->upload();
            $em->persist($idee);
            $em->flush();
            return $this->redirect($this->generateUrl('esprit_application_afficher_idee'));
        }
        return $this->render("EspritFrontOfficeBundle:Idee:update.html.twig", array('form' => $Form->createView()));
    }
    
    public function triAction() {
        $request = $this->get('request_stack')->getCurrentRequest();
        $em = $this->getDoctrine()->getManager();
        
                    $users=$em->getRepository("EspritFrontOfficeBundle:User")->findAll();

        //recherche
        if ($this->get('request_stack')->getCurrentRequest()->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();
            $libelle = $request->get('titre');
            $idees = $em->getRepository("EspritFrontOfficeBundle:Idee")->findBy(array('titre' => $libelle));
            
            $entities  = $this->get('knp_paginator')->paginate($idees,$request->query->get('page', 1)/*page number*/,8/*limit per page*/);
            return $this->render("EspritFrontOfficeBundle:Idee:resultat.html.twig", array('entities' => $entities));
            }
        //fin recherche
         $query = $em->createQuery(
            'SELECT r
            FROM EspritFrontOfficeBundle:Idee I,EspritFrontOfficeBundle:Rating r
            WHERE 10000*I.id= r.id
            '
                    );
            $rates = $query->getResult();
            

        $idees = $em->getRepository("EspritFrontOfficeBundle:Idee")->findBy(array(), array('titre' => 'asc'));     
        $entities  = $this->get('knp_paginator')->paginate($idees,$request->query->get('page', 1)/*page number*/,8/*limit per page*/);
        return $this->render("EspritFrontOfficeBundle:Idee:affiche.html.twig", array('entities' => $entities,'users'=>$users,'rates'=>$rates ));
     
        }
    public function rechAction() {
        $request = $this->get('request_stack')->getCurrentRequest();
        if ($request->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();
            $libelle = $request->get('titre');
            $idees = $em->getRepository("EspritFrontOfficeBundle:Idee")->findBy(array('titre' => $libelle));
            return $this->render("EspritFrontOfficeBundle:Idee:resultat.html.twig", array('idees' => $idees));
        }
        return $this->render("EspritFrontOfficeBundle:Idee:recherche.html.twig");
    }
    
    public function rechTypeAction() {
                $request=$this->getRequest();
            $em = $this->getDoctrine()->getManager();
            
            
            //recherche
        if ($this->get('request_stack')->getCurrentRequest()->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();
            $libelle = $request->get('titre');
            $idees = $em->getRepository("EspritFrontOfficeBundle:Idee")->findBy(array('titre' => $libelle));
            $entities  = $this->get('knp_paginator')->paginate($idees,$request->query->get('page', 1)/*page number*/,8/*limit per page*/);
            return $this->render("EspritFrontOfficeBundle:Idee:resultat.html.twig", array('entities' => $entities));
            }
        //fin recherche
            
                        $users=$em->getRepository("EspritFrontOfficeBundle:User")->findAll();
 $query = $em->createQuery(
            'SELECT r
            FROM EspritFrontOfficeBundle:Idee I,EspritFrontOfficeBundle:Rating r
            WHERE 10000*I.id= r.id
            '
                    );
            $rates = $query->getResult();
                        
            $type = $request->get('type');
            $idees = $em->getRepository("EspritFrontOfficeBundle:Idee")->findBy(array('type' => $type));
        $entities  = $this->get('knp_paginator')->paginate($idees,$request->query->get('page', 1)/*page number*/,8/*limit per page*/);
        return $this->render("EspritFrontOfficeBundle:Idee:affiche.html.twig", array('entities' => $entities,'users'=>$users,'rates'=>$rates));
       
    }
    
    public function oneIdeeAction() {
            $request=$this->getRequest();
            $em = $this->getDoctrine()->getManager();
            $id = $request->get('id');
                        $users=$em->getRepository("EspritFrontOfficeBundle:User")->findAll();

            //recherche
            if ($this->get('request_stack')->getCurrentRequest()->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();
            $libelle = $request->get('titre');
            $idees = $em->getRepository("EspritFrontOfficeBundle:Idee")->findBy(array('titre' => $libelle));
            $entities  = $this->get('knp_paginator')->paginate($idees,$request->query->get('page', 1)/*page number*/,8/*limit per page*/);
            return $this->render("EspritFrontOfficeBundle:Idee:resultat.html.twig", array('entities' => $entities));
            }
            //fin recherche
            
            $idee = $em->getRepository("EspritFrontOfficeBundle:Idee")->findOneBy(array('id' => $id));
            $user = $em->getRepository("EspritFrontOfficeBundle:User")->findOneBy(array('id' => $idee->getIdPorteurDeProjet()));
            
            $ideep = $em->getRepository("EspritFrontOfficeBundle:Idee")->findBy(array('idPorteurDeProjet' => $idee->getIdPorteurDeProjet()));

        
        //$entities  = $this->get('knp_paginator')->paginate($idees,$request->query->get('page', 1)/*page number*/,8/*limit per page*/);
        return $this->render("EspritFrontOfficeBundle:Idee:afficheOneIdee.html.twig", array('idee' => $idee,'user'=>$user,'nbr'=>$ideep));
       
    }
    
   
    public function contacterAction($id) {
        $em = $this->getDoctrine()->getManager();
         $user = $this->container->get('security.context')->getToken()->getUser();
         $p = $user->getEmail();
    
    $transport = $this->get('mailer')->getTransport();            
    $ext = $transport->getExtensionHandlers();
    $auth_handler = $ext[0];            
    $auth_handler->setUserName($p);
    //$auth_handler->setPassword("sticl1d2013");
    $u = $em->getRepository("EspritFrontOfficeBundle:User")->findOneBy(array('id' => $id));
    
$request = $this->get('request_stack')->getCurrentRequest(); //recupération du requete
        if ($request->getMethod() == 'POST') {
            $pwd = $request->get('pwd');
            $subject = $request->get('subject');
            $body = $request->get('body');
            $auth_handler->setPassword($pwd);
            // send an email to the affiliate
            $message = \Swift_Message::newInstance()
                ->setSubject($subject)
                ->setFrom($p)
                ->setTo($u->getEmail())
                ->setBody($body);

            $this->get('mailer')->send($message);
        return $this->redirectToRoute('esprit_application_afficher_idee');
        }
    
        return $this->render("EspritFrontOfficeBundle:Idee:contacter.html.twig");
    }

    
    
       
    public function contacterAdminAction() {
        $em = $this->getDoctrine()->getManager();
         $user = $this->container->get('security.context')->getToken()->getUser();
         $p = $user->getEmail();
    $transport = $this->get('mailer')->getTransport();            
    $ext = $transport->getExtensionHandlers();
    $auth_handler = $ext[0];            
    $auth_handler->setUserName($p);
    
    $request = $this->get('request_stack')->getCurrentRequest(); //recupération du requete
        if ($request->getMethod() == 'POST') {
            $pwd = $request->get('pwd');
            $subject = $request->get('subject');
            $body = $request->get('body');
            $auth_handler->setPassword($pwd);
            $message = \Swift_Message::newInstance()
                ->setSubject($subject)
                ->setFrom($p)
                ->setTo("faidioussama94@gmail.com")
                ->setBody($body);
            $this->get('mailer')->send($message);
        return $this->redirectToRoute('esprit_application_afficher_idee');
        }
        return $this->render("EspritFrontOfficeBundle:Idee:contacter.html.twig");
    }

    public function mailAction() {
        $em = $this->getDoctrine()->getManager();
$transport = Swift_SmtpTransport::newInstance("smtp.gmail.comm", 587);
$transport->setUsername("tarek.benidriss@esprit.tn");
$transport->setPassword("qsdfq464");

// Create the message
$message = Swift_Message::newInstance();
$message->setTo("bendriss.tarek.1993@gmail.com");
$message->setCc(array("another@fake.com" => "Aurelio De Rosa"));
$message->setBcc(array("boss@bank.com" => "Bank Boss"));
$message->setSubject("This email is sent using Swift Mailer");
$message->setBody("You're our best client ever.");
$message->setFrom("tarek.benidriss@esprit.tn", "Your bank");

// Send the email
$mailer = Swift_Mailer::newInstance($transport);
$mailer->send($message, $failedRecipients);

// Show failed recipients


        return $this->redirect($this->generateUrl('esprit_application_afficher_idee'));
    }
   
    public function postulerAction($id) {
        $em = $this->getDoctrine()->getManager();
        $i = $em->getRepository("EspritFrontOfficeBundle:Idee")->findOneBy(array('id' => $id));

    $u = $em->getRepository("EspritFrontOfficeBundle:User")->findOneBy(array('id' => $i->getIdPorteurDeProjet()));


        // send an email to the affiliate
        $message = \Swift_Message::newInstance()
                ->setSubject('Postulat')
                ->setFrom('faidioussama94@gmail.com')
                ->setTo($u->getEmail())
                ->setBody('L utilisateur '.$u->getUsername().' a postuler a votre idée');

        $this->get('mailer')->send($message);


        return $this->redirect($this->generateUrl('esprit_application_afficher_idee'));
    }

  
    public function maillAction() {
        $em = $this->getDoctrine()->getManager();
$transport = Swift_SmtpTransport::newInstance("smtp.gmail.comm", 587);
$transport->setUsername("tarek.benidriss@esprit.tn");
$transport->setPassword("kkk");

// Create the message
$message = Swift_Message::newInstance();
$message->setTo("bendriss.tarek.1993@gmail.com");
$message->setCc(array("another@fake.com" => "Aurelio De Rosa"));
$message->setBcc(array("boss@bank.com" => "Bank Boss"));
$message->setSubject("This email is sent using Swift Mailer");
$message->setBody("You're our best client ever.");
$message->setFrom("tarek.benidriss@esprit.tn", "Your bank");

// Send the email
$mailer = Swift_Mailer::newInstance($transport);
$mailer->send($message, $failedRecipients);

// Show failed recipients


        return $this->redirect($this->generateUrl('esprit_application_afficher_idee'));
    }
    
  

    public function triVoteDESCAction() {
        $request = $this->get('request_stack')->getCurrentRequest();
        $em = $this->getDoctrine()->getManager();
        
        
        //recherche
        if ($this->get('request_stack')->getCurrentRequest()->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();
            $libelle = $request->get('titre');
            $idees = $em->getRepository("EspritFrontOfficeBundle:Idee")->findBy(array('titre' => $libelle));
            
            $entities  = $this->get('knp_paginator')->paginate($idees,$request->query->get('page', 1)/*page number*/,8/*limit per page*/);
            return $this->render("EspritFrontOfficeBundle:Idee:resultat.html.twig", array('entities' => $entities));
            }
        //fin recherche
          
            $query = $em->createQuery(
            'SELECT I
            FROM EspritFrontOfficeBundle:Idee I,EspritFrontOfficeBundle:Rating r
            WHERE 10000*I.id= r.id
            Order By r.rate DESC'
                    );

            $idees = $query->getResult();
            
            
      $query = $em->createQuery(
            'SELECT r
            FROM EspritFrontOfficeBundle:Idee I,EspritFrontOfficeBundle:Rating r
            WHERE 10000*I.id= r.id
            '
                    );
            $rates = $query->getResult();
            
            $users = $em->getRepository("EspritFrontOfficeBundle:User")->findAll();
            
            
        $entities  = $this->get('knp_paginator')->paginate($idees,$request->query->get('page', 1)/*page number*/,8/*limit per page*/);
        return $this->render("EspritFrontOfficeBundle:Idee:affiche.html.twig", array('entities' => $entities ,'users'=>$users,'rates'=>$rates));
     
        }
     
    public function triVoteASCAction() {
        $request = $this->get('request_stack')->getCurrentRequest();
        $em = $this->getDoctrine()->getManager();
        
        
        //recherche
        if ($this->get('request_stack')->getCurrentRequest()->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();
            $libelle = $request->get('titre');
            $idees = $em->getRepository("EspritFrontOfficeBundle:Idee")->findBy(array('titre' => $libelle));
            
            $entities  = $this->get('knp_paginator')->paginate($idees,$request->query->get('page', 1)/*page number*/,8/*limit per page*/);
            return $this->render("EspritFrontOfficeBundle:Idee:resultat.html.twig", array('entities' => $entities));
            }
        //fin recherche
         
            $query = $em->createQuery(
            'SELECT I
            FROM EspritFrontOfficeBundle:Idee I,EspritFrontOfficeBundle:Rating r
            WHERE 10000*I.id= r.id
            Order By r.rate ASC'
                    );

            $idees = $query->getResult();
     
             $query = $em->createQuery(
            'SELECT r
            FROM EspritFrontOfficeBundle:Idee I,EspritFrontOfficeBundle:Rating r
            WHERE 10000*I.id= r.id
            '
                    );
            $rates = $query->getResult();
            
          $query = $em->createQuery(
            'SELECT r
            FROM EspritFrontOfficeBundle:Idee I,EspritFrontOfficeBundle:Rating r
            WHERE 10000*I.id= r.id
            '
                    );
            $rates = $query->getResult();
               
                  $users = $em->getRepository("EspritFrontOfficeBundle:User")->findAll();
      
        $entities  = $this->get('knp_paginator')->paginate($idees,$request->query->get('page', 1)/*page number*/,8/*limit per page*/);
        return $this->render("EspritFrontOfficeBundle:Idee:affiche.html.twig", array('entities' => $entities ,'users'=>$users,'rates'=>$rates));
     
        }
 
        
        public function updateBackAction($id) {
        
        $em = $this->getDoctrine()->getManager();
        $idee = $em->getRepository('EspritFrontOfficeBundle:Idee')->find($id);
        $Form = $this->createForm(new IdeeType(), $idee);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);

        if ($Form->isValid()) {
            $idee->upload();
            $em->persist($idee);
            $em->flush();
            return $this->redirect($this->generateUrl('esprit_back_office_list_idee'));
        }
        return $this->render("EspritBackOfficeBundle:Idee:update.html.twig", array('form' => $Form->createView()));
    }
   
    public function ascBackAction() {
        $request = $this->get('request_stack')->getCurrentRequest();
        $em = $this->getDoctrine()->getManager();
        
        
        
         
            $query = $em->createQuery(
            'SELECT I
            FROM EspritFrontOfficeBundle:Idee I,EspritFrontOfficeBundle:Rating r
            WHERE 10000*I.id= r.id
            Order By r.rate ASC'
                    );

            $idees = $query->getResult();
     
             $query = $em->createQuery(
            'SELECT r
            FROM EspritFrontOfficeBundle:Idee I,EspritFrontOfficeBundle:Rating r
            WHERE 10000*I.id= r.id
            '
                    );
            $rates = $query->getResult();
            
          $query = $em->createQuery(
            'SELECT r
            FROM EspritFrontOfficeBundle:Idee I,EspritFrontOfficeBundle:Rating r
            WHERE 10000*I.id= r.id
            '
                    );
            $rates = $query->getResult();
               
                  $users = $em->getRepository("EspritFrontOfficeBundle:User")->findAll();
      
        $entities  = $this->get('knp_paginator')->paginate($idees,$request->query->get('page', 1)/*page number*/,8/*limit per page*/);
        return $this->render("EspritBackOfficeBundle:List:idee.html.twig", array('entities' => $entities ,'mds'=>$idees,'rates'=>$rates));
     
        }

    
     public function dscBackAction() {
        $request = $this->get('request_stack')->getCurrentRequest();
        $em = $this->getDoctrine()->getManager();
        
            $query = $em->createQuery(
            'SELECT I
            FROM EspritFrontOfficeBundle:Idee I,EspritFrontOfficeBundle:Rating r
            WHERE 10000*I.id= r.id
            Order By r.rate DESC'
                    );
    $idees = $query->getResult();
     
             $query = $em->createQuery(
            'SELECT r
            FROM EspritFrontOfficeBundle:Idee I,EspritFrontOfficeBundle:Rating r
            WHERE 10000*I.id= r.id
            '
                    );
            $rates = $query->getResult();
            
          $query = $em->createQuery(
            'SELECT r
            FROM EspritFrontOfficeBundle:Idee I,EspritFrontOfficeBundle:Rating r
            WHERE 10000*I.id= r.id
            '
                    );
            $rates = $query->getResult();
               
                  $users = $em->getRepository("EspritFrontOfficeBundle:User")->findAll();
      
        $entities  = $this->get('knp_paginator')->paginate($idees,$request->query->get('page', 1)/*page number*/,8/*limit per page*/);
        return $this->render("EspritBackOfficeBundle:List:idee.html.twig", array('entities' => $entities ,'mds'=>$idees,'rates'=>$rates));
     
        }
    
    
        
        
        
       
        
        
}
