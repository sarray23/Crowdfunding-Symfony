<?php

namespace Esprit\FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
         $request = $this->get('request_stack')->getCurrentRequest();
        $em = $this->getDoctrine()->getManager();
        
            $query = $em->createQuery(
            'SELECT I
            FROM EspritFrontOfficeBundle:Idee I,EspritFrontOfficeBundle:Rating r
            WHERE 10000*I.id= r.id and r.rate=(select max(r.rate) from EspritFrontOfficeBundle:Rating r)
            Order By r.rate DESC'
                    );
    $idees = $query->getResult();
    $users = $em->getRepository("EspritFrontOfficeBundle:Idee")->findBy(array('id'=>1));

        return $this->render('EspritFrontOfficeBundle:Default:index.html.twig', array('name' => $name,'idees'=>$users));
    }
    
    
    
    public function dscBackAction() {
        $request = $this->get('request_stack')->getCurrentRequest();
        $em = $this->getDoctrine()->getManager();
        
            $query = $em->createQuery(
            'SELECT I
            FROM EspritFrontOfficeBundle:Idee I,EspritFrontOfficeBundle:Rating r
            WHERE 10000*I.id= r.id and r.rate=(select max(r.rate) from EspritFrontOfficeBundle:Rating r)
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
