<?php
namespace Esprit\BackOfficeBundle\Controller;

use Esprit\FrontOfficeBundle\Entity\Projet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author oussama
 */
class ProjetController extends Controller{
    
     public function listAction(){
        $em=$this->getDoctrine()->getManager();//instantiation du gestionaire des objet
        $projet=$em->getRepository('EspritFrontOfficeBundle:Projet')->findAll(); //get repository temchi lel une entité bien determiner
    return $this->render('EspritBackOfficeBundle:List:projet.html.twig',array('mds'=>$projet));
    //put your code here
}
public function accepterAction($id){
      $em=$this->getDoctrine()->getManager();  
         $projet=$em->getRepository('EspritFrontOfficeBundle:Projet')->findOneById($id);
          $projet->setEtat("validé") ;
          $em->merge($projet);
          $em->flush();
          return $this->redirectToRoute('esprit_back_office_list_projet');
    }
     public function refuserAction($id){
      $em=$this->getDoctrine()->getManager();  
         $projet=$em->getRepository('EspritFrontOfficeBundle:Projet')->findOneById($id);
          $projet->setEtat("refuser") ;
          $em->merge($projet);
          $em->flush();
          return $this->redirectToRoute('esprit_back_office_list_projet');
    }
public function deleteAction($id){
         $em = $this->getDoctrine()->getManager();
         $projet=$em->getRepository('EspritFrontOfficeBundle:Projet')->find($id);
         $em->remove($projet);
         $em->flush();
         return $this->redirect($this->generateUrl('esprit_back_office_list_projet'));
     } 
}