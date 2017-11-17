<?php

namespace Esprit\BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class Reclamation2Controller extends Controller{
    
    public function listAction(){
        $em=$this->getDoctrine()->getManager();
        $reclamations=$em->getRepository('EspritFrontOfficeBundle:Reclamation')->findAll();
        $users=$em->getRepository('EspritFrontOfficeBundle:User')->findAll();

        return $this->render('EspritBackOfficeBundle:Reclamation:list.html.twig', array('reclamations' => $reclamations,'users'=>$users));
    }
        
   
    
    public function accepterAction($id){
        $em=$this->getDoctrine()->getManager();  
        $reclamation=$em->getRepository('EspritFrontOfficeBundle:Reclamation')->findOneById($id);
        $reclamation->setEtat("traitée") ;
        $em->merge($reclamation);
        $em->flush();
        return $this->redirectToRoute('esprit_back_office_list_reclamation');
    }
    
    public function supprimerAction($id){
        $em = $this->getDoctrine()->getManager();
        $reclamation=$em->getRepository('EspritFrontOfficeBundle:Reclamation')->find($id);
        $em->remove($reclamation);
        $em->flush();
        return $this->redirect($this->generateUrl('esprit_back_office_list_reclamation'));
    } 
}
