<?php
namespace Esprit\BackOfficeBundle\Controller;
use Esprit\FrontOfficeBundle\Entity\User;
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
class UserController extends Controller{
    
     public function listAction(){
        $em=$this->getDoctrine()->getManager();//instantiation du gestionaire des objet
        $user=$em->getRepository('EspritFrontOfficeBundle:User')->findAll(); //get repository temchi lel une entité bien determiner
        $request=$this->getRequest();

         //recherche
        if ($this->get('request_stack')->getCurrentRequest()->getMethod() == 'POST') 
        {
            $em = $this->getDoctrine()->getManager();
            $libelle = $request->get('titre');
            $idees = $em->getRepository("EspritFrontOfficeBundle:User")->findBy(array('username' => $libelle));

            $entities  = $this->get('knp_paginator')->paginate($idees,$request->query->get('page', 1)/*page number*/,8/*limit per page*/);
            return $this->render('EspritBackOfficeBundle:List:List.html.twig',array('mds'=>$entities));
        }
        //fin recherche
        
        
        return $this->render('EspritBackOfficeBundle:List:List.html.twig',array('mds'=>$user));
    //put your code here
}
public function deleteAction($id){
         $em = $this->getDoctrine()->getManager();
         $user=$em->getRepository('EspritFrontOfficeBundle:User')->find($id);
         $em->remove($user);
         $em->flush();
         return $this->redirect($this->generateUrl('esprit_back_office_list'));
     } 
     public function blockAction($id){
      $em=$this->getDoctrine()->getManager();  
         $user=$em->getRepository('EspritFrontOfficeBundle:User')->findOneById($id);
          $user->setEnabled(0) ;
          $user->setExpired(1) ;
          $user->setLocked(1) ;
          $em->merge($user);
          $em->flush();
          return $this->redirectToRoute('esprit_back_office_list');
    }
    public function activerAction($id){
      $em=$this->getDoctrine()->getManager();  
         $user=$em->getRepository('EspritFrontOfficeBundle:User')->findOneById($id);
          $user->setEnabled(1) ;
          $user->setExpired(0) ;
          $user->setLocked(0) ;
          $em->merge($user);
          $em->flush();
          return $this->redirectToRoute('esprit_back_office_list');
    }
    
    
    public function visit(){
     
        $bdd = $this->get("database_connection");


$resultat = $bdd->fetchColumn("select count(*) from users WHERE to_char(last_login,'yyyy')=to_char(sysdate,'yyyy') AND to_char(last_login,'MM')=to_char(sysdate,'MM')");
        
        
          return $this->redirectToRoute('esprit_back_office_list');
    }
    
    
}