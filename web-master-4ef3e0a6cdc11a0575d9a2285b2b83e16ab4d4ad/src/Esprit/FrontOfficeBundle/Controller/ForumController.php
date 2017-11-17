<?php
namespace Esprit\FrontOfficeBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ForumController
 *
 * @author Sara
 */
class ForumController extends Controller
{
    public function addtopicAction()
    {
/////////
 $em = $this->getDoctrine()->getEntityManager();
        $request = $this->container->get('request');
        if ($request->getMethod() == 'POST') {
            $pass = new \Esprit\FrontOfficeBundle\Entity\ForumQuestion();       
            $pass->setTopic($_POST['topic']);
            $pass->setDetail($_POST['detail']);
             $pass->setDatetime(date("d/m/y h:i:s"));
            $pass->setName($_POST['name']);
            $pass->setEmail($_POST['email']);
           $em->persist($pass);
           $em->flush();
        
        
        }

////////
        
        return $this->render('EspritFrontOfficeBundle:forum:add_topic.html.twig');  /*, array('name' => $name)*/
    }
    
    
    
    
     public function viewtopicsAction()
    {
/////////
   $em = $this->getDoctrine()->getManager();
       
        $projet = $em->getRepository("EspritFrontOfficeBundle:ForumQuestion")->findAll();
        return $this->render('EspritFrontOfficeBundle:forum:accueil.html.twig', 
        array('projets' => $projet,));
   /*, array('name' => $name)*/
    }
       public function viewtopicAction($id)
    {
/////////
   $em = $this->getDoctrine()->getManager();
   
       $projet = $em->getRepository("EspritFrontOfficeBundle:ForumQuestion")->findById($id);
       $projet2 = $em->getRepository("EspritFrontOfficeBundle:ForumAnswer")->findByQuestionId($id);
        
        return $this->render('EspritFrontOfficeBundle:forum:commentopic.html.twig',
                array('projets' => $projet,'projets2' => $projet2,));
        
        
 
    } 
    
      public function addcommentAction($id)
    {
/////////
   
 $em = $this->getDoctrine()->getEntityManager();
        $request = $this->container->get('request');
        if ($request->getMethod() == 'POST') {
            $pass = new \Esprit\FrontOfficeBundle\Entity\ForumAnswer();       
         $pass->setAName("hi");
          $pass->setAEmail("em@em.com");
          $pass->setAAnswer($_POST['answer']);
          $pass->setADatetime(date("d/m/y h:i:s"));
          $pass->setQuestionId($id);
           $em->persist($pass);
           $em->flush();
           } 
            $em = $this->getDoctrine()->getManager();
      $projet = $em->getRepository("EspritFrontOfficeBundle:ForumQuestion")->findById($id);
       $projet2 = $em->getRepository("EspritFrontOfficeBundle:ForumAnswer")->findByQuestionId($id);
        
        return $this->render('EspritFrontOfficeBundle:forum:commentopic.html.twig',
                array('projets' => $projet,'projets2' => $projet2,));
    
          } 
}
