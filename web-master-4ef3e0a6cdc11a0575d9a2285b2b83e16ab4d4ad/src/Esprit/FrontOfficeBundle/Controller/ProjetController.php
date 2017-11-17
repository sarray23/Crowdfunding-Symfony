<?php

namespace Esprit\FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Esprit\FrontOfficeBundle\Entity\Projet;

use Esprit\FrontOfficeBundle\Form\ProjetForm;



class ProjetController extends Controller
{
    //put your code here
   /* public function AjouterProjetAction( )
    {
           
        $projet = new Projet();
        $form=$this->createForm(new ProjetForm(),$projet);
        $requete=$this->get('request');
        
        if($requete->getMethod()=='POST'){
            $form->bind($requete);
            if($form->isValid())
                {               
            $em=$this->getDoctrine()->getManager();
              
                   $em->persist($projet);
                $em->flush();
                $projet=$em->getRepository('EspritFrontOfficeBundle:Projet')->findAll();
               return $this->render('EspritFrontOfficeBundle:Projet:ListeProjet.html.twig',array('f'=>$projet));

                    }
        
              }
        return $this->render("EspritFrontOfficeBundle:Projet:AjoutProjet.html.twig",array('f'=>$form->createView()));
    
    
              }*/
    public function AjouterProjetAction(Request $request)
    {
        $projet = new Projet();
        $form=$this->createForm(new ProjetForm(),$projet);
        $requete=$this->get('request');
        
        if($requete->getMethod()=='POST'){
            $form->bind($requete);
            if($form->isValid()){
                // $file stores the uploaded PDF file
                /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
                //$file = $projet->getImage();
                $user = $this->container->get('security.context')->getToken()->getUser();
                 $user->getId();
                  $projet->setIdUser($user);
                // Generate a unique name for the file before saving it
                //$fileName = md5(uniqid()).'.'.$file->guessExtension();
                // Move the file to the directory where brochures are stored
                //$brochuresDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/projets';
                //$file->move($brochuresDir, $fileName);
                $em=$this->getDoctrine()->getManager();
                // Update the 'brochure' property to store the PDF file name
                // instead of its contents
              //  $projet->setImage($file);
                $projet->upload();
                $em->persist($projet);
                $em->flush();
             //$this->redirect($this->generateUrl('...'));
            return $this->redirectToRoute('esprit_front_office_liste');
            }
        }
        return $this->render('EspritFrontOfficeBundle:Projet:AjoutProjet.html.twig',array('f'=>$form->createView()));
        
        
        
    }
    
   
    public function LiseProjetsAction(Request $request)
    {
       $em=$this->getDoctrine()->getManager();
        $projet=$em->getRepository("EspritFrontOfficeBundle:Projet")->findAll();
         $request1 = $this->get('request');
         
                if ($request1->getMethod() == 'POST') {
             $search=$request1->get('proj');    
             $projet=$em->getRepository('EspritFrontOfficeBundle:Projet')->findBy(array('titre'=>$search));
             return $this->render("EspritFrontOfficeBundle:Projet:ListeProjet.html.twig",array('mds'=>$projet)); 
    
                }
                        $users = $em->getRepository("EspritFrontOfficeBundle:User")->findAll();

                     return $this->render("EspritFrontOfficeBundle:Projet:ListeProjet.html.twig",array('mds'=>$projet,'users'=>$users));
        
       
        
        
        
        
        
        
    }
 
    
     public function DeleteAction($id){
         $em = $this->getDoctrine()->getManager();
         $projet=$em->getRepository('EspritFrontOfficeBundle:Projet')->find($id);
         $em->remove($projet);
         $em->flush();
         return $this->redirect($this->generateUrl('esprit_front_office_liste'));
     } 
      public function Lise1ProjetAction()
    {$em=$this->getDoctrine()->getManager();//getDoctrine()instancier doctrine qui est l orm de l objet, getmanager():gerer les entites
        $projet =$em->getRepository('EspritFrontOfficeBundle:Projet')->findAll();//
                            $users = $em->getRepository("EspritFrontOfficeBundle:User")->findAll();
    
        return $this->render('EspritFrontOfficeBundle:Projet:Tableau.html.twig',array('mds'=>$projet,'users'=>$users));
 
    }
    
    
    
    
     public function UpdateAction($id)
    {
         $em =$this->getDoctrine()->getManager();
         $user = $this->container->get('security.context')->getToken()->getUser();
                 $user->getId();
         $projet=$em ->getRepository('EspritFrontOfficeBundle:Projet')->find(array('id'=>$id));
                  $form=$this->createForm(new ProjetForm(),$projet);// ModeleForm
         $request=$this->get('request');//recuperation de la requette 
         if($form->handleRequest($request)->isValid())//handleRequest fonction dans createFornm, son role:si le formulaire  n est pa soumis retourner false
         { $projet->setIdUser($user);
            $em->persist($projet);
            $em->flush();
            return $this->redirectToRoute('esprit_front_office_liste');
            
             
    }return $this->render('EspritFrontOfficeBundle:Projet:Update.html.twig',array('f'=>$form->createView()));
    
         }
         
       public function detailP1Action($id)
         {
           $em=$this->getDoctrine()->getManager();//getDoctrine()instancier doctrine qui est l orm de l objet, getmanager():gerer les entites
        $projet =$em->getRepository('EspritFrontOfficeBundle:Projet')->find(array('id'=>$id));//
        $users = $em->getRepository("EspritFrontOfficeBundle:User")->findAll();
         
        return $this->render('EspritFrontOfficeBundle:Projet:detailP.html.twig',array('form'=>$projet,'users'=>$users));
                       
                     
                 }    
         
         
                            
                 
        public function detailPAction() {
            $request=$this->getRequest();
            $em = $this->getDoctrine()->getManager();
            $id = $request->get('id');
                        $users=$em->getRepository("EspritFrontOfficeBundle:User")->findAll();

            //recherche
            if ($this->get('request_stack')->getCurrentRequest()->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();
            $libelle = $request->get('titre');
            $idees = $em->getRepository("EspritFrontOfficeBundle:Projet")->findBy(array('titre' => $libelle));
            $entities  = $this->get('knp_paginator')->paginate($idees,$request->query->get('page', 1)/*page number*/,8/*limit per page*/);
            return $this->render("EspritFrontOfficeBundle:Idee:resultat.html.twig", array('entities' => $entities));
            }
            //fin recherche
            
            $idee = $em->getRepository("EspritFrontOfficeBundle:Projet")->findOneBy(array('id' => $id));
            $user = $em->getRepository("EspritFrontOfficeBundle:User")->findOneBy(array('id' => $idee->getIdUser()));
            
            $ideep = $em->getRepository("EspritFrontOfficeBundle:Projet")->findBy(array('idUser' => $idee->getIdUser()));

        
        //$entities  = $this->get('knp_paginator')->paginate($idees,$request->query->get('page', 1)/*page number*/,8/*limit per page*/);
        return $this->render("EspritFrontOfficeBundle:Projet:afficheOneProjet.html.twig", array('idee' => $idee,'user'=>$user,'nbr'=>$ideep));
       
    }
    
                 
                 
                 
             public function LiseProjetAction() {
        $em = $this->getDoctrine()->getManager();
        $request=$this->getRequest();

        
        //recherche
        if ($this->get('request_stack')->getCurrentRequest()->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();
            $libelle = $request->get('titre');
            $idees = $em->getRepository("EspritFrontOfficeBundle:Projet")->findBy(array('titre' => $libelle));

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
            
        
        $idees = $em->getRepository("EspritFrontOfficeBundle:Projet")->findAll();
        $entities  = $this->get('knp_paginator')->paginate($idees,$request->query->get('page', 1)/*page number*/,8/*limit per page*/);
        return $this->render("EspritFrontOfficeBundle:Projet:ListeProjet1.html.twig",array('mds'=>$entities,'users'=>$users));
    } 
         
         
    
    
    
    
    
    
    
     public function myProjetsAction() {
        $request = $this->get('request_stack')->getCurrentRequest();
        if ($request->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();
            //$idPorteurDeProjet=$request->get('idPorteurDeProjet');
            // $idPorteurDeProjet va etre remplacé par : 
            $users=$em->getRepository("EspritFrontOfficeBundle:User")->findAll();

            $user = $this->container->get('security.context')->getToken()->getUser();
            $p = $user->getId();
            // *******************


            $idees = $em->getRepository("EspritApplicationBundle:Projet")->findBy(array('idPorteurDeProjet' => $idPorteurDeProjet));
            return $this->render("EspritApplicationBundle:Projet:affiche2.html.twig", array('idees' => $idees));
        }
        $user = $this->getUser();
        $p = $user->getId();
        $em = $this->getDoctrine()->getManager();

        $idees = $em->getRepository("EspritFrontOfficeBundle:Projet")->findBy(array('idUser' => $p));
        $entities  = $this->get('knp_paginator')->paginate($idees,$request->query->get('page', 1)/*page number*/,8/*limit per page*/);
        return $this->render("EspritFrontOfficeBundle:Projet:afficheMy.html.twig", array('entities' => $entities));
     
        //return $this->render("EspritApplicationBundle:Idee:affiche2r.html.twig");
    }
    

}
