<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Esprit\FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Description of ProblemeSolutionController
 *
 * @author HOUCEM-pc
 */
class ProblemeSolutionController extends Controller {
    
    public function affichAction(){
    $em=$this->getDoctrine()->getManager();
        $probleme=$em->getRepository("EspritFrontOfficeBundle:Probleme")->findAll();
        return $this->render("EspritFrontOfficeBundle:ProblemeSolution:ListProbSol.html.twig",array('prb'=>$probleme));
    
    }
    
    
    public function affich1Action(\Symfony\Component\HttpFoundation\Request $request){
    $em=$this->getDoctrine()->getManager();
        $probleme=$em->getRepository("EspritFrontOfficeBundle:Probleme")->findAll();
         $request1 = $this->get('request');
         
                if ($request1->getMethod() == 'POST') {
             $search=$request1->get('prob');    
             $probleme=$em->getRepository('EspritFrontOfficeBundle:Probleme')->findBy(array('titre'=>$search));
             return $this->render("EspritFrontOfficeBundle:ProblemeSolution:rechProbSol.html.twig",array('prb'=>$probleme)); 
             }
          
      
        
        $probleme  = $this->get('knp_paginator')->paginate(
        $probleme,
        $request->query->get('page', 1)/*page number*/,
        2/*limit per page*/
                  ); 
     
        
        
        return $this->render("EspritFrontOfficeBundle:ProblemeSolution:ListProbSol1.html.twig",array('prb'=>$probleme));
    
    }
    public function affichOneAction($id){
        $em=$this->getDoctrine()->getManager();
        $probleme=$em->getRepository("EspritFrontOfficeBundle:Probleme")->findOneBy(array('id'=>$id));
        return $this->render("EspritFrontOfficeBundle:ProblemeSolution:probArea.html.twig",array('prb'=>$probleme));
        
    }
    /*
       public function chercherAction(){
            $em=  $this->getDoctrine()->getManager();
             $request = $this->get('request');
            // $Modele=$em->getRepository('EspritParcBundle:Modele')->findAll($request);
             
             if ($request->getMethod() == 'POST') {
             $search=$request->get('aaa');    
             $probleme=$em->getRepository('EspritFrontOfficeBundle:Prbleme')->findByTitre($search);            
             }
             return $this->render("EspritFrontOfficeBundle:ProblemeSolution:rechProbSol.html.twig",array('prb'=>$probleme));
    } */ 
    
}
