<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ExpertController
 *
 * @author Tarek
 */

namespace Esprit\FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Esprit\FrontOfficeBundle\Entity\Expert;

class ExpertController extends Controller{

      
    public function listAction(){
       $em=$this->getDoctrine()->getManager();
       //$experts=$em->getRepository("EspritFrontOfficeBundle:Expert")->findAll();
         $request = $this->get('request_stack')->getCurrentRequest();
        

        //recherche
        if ($this->get('request_stack')->getCurrentRequest()->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();
            $libelle = $request->get('titre');
            $experts = $em->getRepository("EspritFrontOfficeBundle:User")->findBy(array('username' => $libelle));
            
        return $this->render("EspritFrontOfficeBundle:Expert:experts.html.twig",array("experts"=>$experts));
            }
        //fin recherche
         
         
         
            $query = $em->createQuery(
            'SELECT U
            FROM EspritFrontOfficeBundle:User U
                    ');

            $experts = $query->getResult();
     
            
            
        
       return $this->render("EspritFrontOfficeBundle:Expert:experts.html.twig",array("experts"=>$experts));
    } 
    
   
    
    
     
    public function affAction($id){
         $em = $this->getDoctrine()->getManager();
         $experts=$em->getRepository('EspritFrontOfficeBundle:Expert')->findById($id);
         $users=$em->getRepository('EspritFrontOfficeBundle:User')->findById($id);
         //$experts->setNoteGenerale($em->getRepository('EspritApplicationBundle:Rating')->findById($id));
       return $this->render("EspritFrontOfficeBundle:Expert:afficher.html.twig",array("experts"=>$experts,"idd"=>$id,"users"=>$users));
     }
    
     
     
     
      public function listAscAction() {
        $request = $this->get('request_stack')->getCurrentRequest();
        $em = $this->getDoctrine()->getManager();
        
        
        //recherche
        if ($this->get('request_stack')->getCurrentRequest()->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();
            $libelle = $request->get('titre');
            $experts = $em->getRepository("EspritFrontOfficeBundle:User")->findBy(array('username' => $libelle));
            
        return $this->render("EspritFrontOfficeBundle:Expert:experts.html.twig",array("experts"=>$experts));
            }
        //fin recherche
         
            $query = $em->createQuery(
            'SELECT U
            FROM EspritFrontOfficeBundle:User U,EspritFrontOfficeBundle:Rating R
           WHERE R.id=U.id
            Order By R.rate ASC'
                    );

            $experts = $query->getResult();
    
        return $this->render("EspritFrontOfficeBundle:Expert:experts.html.twig",array("experts"=>$experts));
     
        }
    
        
        public function listDscAction() {
        $request = $this->get('request_stack')->getCurrentRequest();
        $em = $this->getDoctrine()->getManager();
        
        
        //recherche
        if ($this->get('request_stack')->getCurrentRequest()->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();
            $libelle = $request->get('titre');
            $experts = $em->getRepository("EspritFrontOfficeBundle:User")->findBy(array('username' => $libelle));
            
        return $this->render("EspritFrontOfficeBundle:Expert:experts.html.twig",array("experts"=>$experts));
            }
        //fin recherche
         
            $query = $em->createQuery(
            'SELECT U
            FROM EspritFrontOfficeBundle:User U,EspritFrontOfficeBundle:Rating R
            WHERE R.id=U.id
            Order By R.rate DESC'
                    );

            $experts = $query->getResult();
    
        return $this->render("EspritFrontOfficeBundle:Expert:experts.html.twig",array("experts"=>$experts));
     
        }
     
        
        
        
        
    public function listTriAction() {
        $request = $this->get('request_stack')->getCurrentRequest();
        $em = $this->getDoctrine()->getManager();
        
        
        //recherche
        if ($this->get('request_stack')->getCurrentRequest()->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();
            $libelle = $request->get('titre');
            $experts = $em->getRepository("EspritFrontOfficeBundle:User")->findBy(array('username' => $libelle));
            
        return $this->render("EspritFrontOfficeBundle:Expert:experts.html.twig",array("experts"=>$experts));
            }
        //fin recherche
        

             $query = $em->createQuery(
            'SELECT U
            FROM EspritFrontOfficeBundle:User U
           
            Order By U.username ASC
                    ');

            $experts = $query->getResult();

            return $this->render("EspritFrontOfficeBundle:Expert:experts.html.twig",array("experts"=>$experts));
     
        }

        
     
}
