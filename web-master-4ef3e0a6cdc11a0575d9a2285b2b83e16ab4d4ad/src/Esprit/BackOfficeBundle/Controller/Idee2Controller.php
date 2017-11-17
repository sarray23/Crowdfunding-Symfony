<?php
namespace Esprit\BackOfficeBundle\Controller;

use Esprit\FrontOfficeBundle\Entity\Idee;
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
class Idee2Controller extends Controller{
    
     public function listAction(){
        $em=$this->getDoctrine()->getManager();//instantiation du gestionaire des objet
        $idee=$em->getRepository('EspritFrontOfficeBundle:Idee')->findAll(); //get repository temchi lel une entité bien determiner
    return $this->render('EspritBackOfficeBundle:List:idee.html.twig',array('mds'=>$idee));
    //put your code here
}
public function accepterAction($id){
      $em=$this->getDoctrine()->getManager();  
         $idee=$em->getRepository('EspritFrontOfficeBundle:Idee')->findOneById($id);
          $idee->setEtat("validé") ;
          $em->merge($idee);
          $em->flush();
          return $this->redirectToRoute('esprit_back_office_list_idee');
    }
     public function refuserAction($id){
      $em=$this->getDoctrine()->getManager();  
         $idee=$em->getRepository('EspritFrontOfficeBundle:Idee')->findOneById($id);
          $idee->setEtat("refuser") ;
          $em->merge($idee);
          $em->flush();
          return $this->redirectToRoute('esprit_back_office_list_idee');
    }
public function deleteAction($id){
         $em = $this->getDoctrine()->getManager();
         $idee=$em->getRepository('EspritFrontOfficeBundle:Idee')->find($id);
         $em->remove($idee);
         $em->flush();
         return $this->redirect($this->generateUrl('esprit_back_office_list_idee'));
     } 
}