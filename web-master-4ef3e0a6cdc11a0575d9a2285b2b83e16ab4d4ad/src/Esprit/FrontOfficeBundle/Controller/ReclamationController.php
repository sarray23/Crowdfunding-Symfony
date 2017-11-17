<?php

namespace Esprit\FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Esprit\FrontOfficeBundle\Entity\Reclamation;

class ReclamationController extends Controller{
    
    public function ajoutAction(){
        $reclamation = new Reclamation();
        
        $request = $this->get('request_stack')->getCurrentRequest();//recupération du requete
        if ($request->getMethod() == 'POST') {
            $objet=$request ->get('objet');
            $description=$request ->get('description');
            $etat="en cours";
             
            $user = $this->container->get('security.context')->getToken()->getUser();
            $p=$user->getId();
   
            $reclamation ->setObjet($objet);
            $reclamation ->setDescription($description);
            $reclamation ->setDateReclamation(new \DateTime());
            $reclamation ->setEtat($etat);
            $reclamation ->setIdP($p);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($reclamation);
            $em->flush();
            return $this->redirectToRoute('esprit_ajout_reclamation');
        }
        return $this->render("EspritFrontOfficeBundle:Reclamation:ajout.html.twig");
    }
    
    public function listAction(){
        $request= $this->get('request_stack')->getCurrentRequest();
        if($request->getMethod()=='POST'){
            $em = $this->getDoctrine()->getManager();
         
            $user = $this->container->get('security.context')->getToken()->getUser();
            $p=$user->getId();
         
            $reclamations=$em->getRepository("EspritFrontOfficeBundle:Reclamation")->findBy(array('idP'=>$p));
            return $this->render("EspritFrontOfficeBundle:Reclamation:list.html.twig",array('reclamations'=>$reclamations));
        }
        $user = $this->getUser();
        $p = $user->getId();
        $em = $this->getDoctrine()->getManager();

        $reclamations = $em->getRepository("EspritFrontOfficeBundle:Reclamation")->findBy(array('idP' => $p));

        $users = $em->getRepository("EspritFrontOfficeBundle:User")->findAll();

        return $this->render("EspritFrontOfficeBundle:Reclamation:list.html.twig", array('reclamations' => $reclamations,'users'=>$users));
    }
    
    public function list1Action(){
        return $this->render("EspritFrontOfficeBundle:Reclamation:list1.html.twig");
    }
   
    public function supprimerAction($id){
        $em = $this->getDoctrine()->getManager();
        $reclamation = $em->getRepository('EspritFrontOfficeBundle:Reclamation')->findOneById($id);
        $em ->remove($reclamation);
        $em ->flush();
        return $this->redirectToRoute('esprit_list_reclamation');
    }
    
    public function modifierAction($id){
        $em = $this->getDoctrine()->getManager();
        $reclamation =$em->getRepository('EspritFrontOfficeBundle:Reclamation')->find($id);
        $request = $this->get('request_stack')->getCurrentRequest();
        if($reclamation->getEtat()=="en cours"){
            if ($request->getMethod() == 'POST'){
                $objet=$request ->get('objet');
                $description=$request ->get('description');
                
                
   
                $reclamation ->setObjet($objet);
                $reclamation ->setDescription($description);
                $reclamation ->setDateReclamation(new \DateTime());
                
            
                $em = $this->getDoctrine()->getManager();
                
                $em->persist($reclamation);
                $em->flush();
                
                return $this->redirectToRoute('esprit_list_reclamation');
            }
            return $this->render('EspritFrontOfficeBundle:Reclamation:modifier.html.twig');
        }
        return $this->render('EspritFrontOfficeBundle:Reclamation:list1.html.twig');
    }
    
    public function rechercherAction(){
        $request= $this->get('request_stack')->getCurrentRequest();
        if($request->getMethod()=='POST'){
            $em = $this->getDoctrine()->getManager();
            $etat=$request->get('etat');
            $reclamations=$em->getRepository("EspritFrontOfficeBundle:Reclamation")->findBy(array('etat'=>$etat));
            return $this->render("EspritFrontOfficeBundle:Reclamation:resultat.html.twig",array('reclamations'=>$reclamations));
        }
        return $this->render("EspritFrontOfficeBundle:Reclamation:rechercher.html.twig");
    }
    
}
