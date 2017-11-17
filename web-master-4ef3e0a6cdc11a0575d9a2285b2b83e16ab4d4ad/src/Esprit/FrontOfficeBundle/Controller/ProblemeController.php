<?php

namespace Esprit\FrontOfficeBundle\Controller;

use Esprit\FrontOfficeBundle\Entity\Probleme;
use Esprit\FrontOfficeBundle\Form\ProblemeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DateTime;

class ProblemeController extends Controller {

    

    public function problemeAction() {
        $probleme = new Probleme();
        $form = $this->createForm(new ProblemeType(), $probleme);
        $request = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $probleme->setDatePost(new DateTime());

            $user = $this->container->get('security.context')->getToken()->getUser();
            $user->getId();

            $probleme->setIdUtilisateur($user);
            $em->persist($probleme);
            $em->flush();
            return $this->redirectToRoute('esprit_application_listeprobleme');
        }
        return $this->render('EspritFrontOfficeBundle:Probleme:Probleme.html.twig', array('f' => $form->createView()));
    }

    public function listeprobAction(\Symfony\Component\HttpFoundation\Request $request ) {
      
        $em = $this->getDoctrine()->getManager();
        $probleme = $em->getRepository("EspritFrontOfficeBundle:Probleme")->findAll();
        
        $problemes  = $this->get('knp_paginator')->paginate(
        $probleme,
        $request->query->get('page', 1)/*page number*/,
        2/*limit per page*/
                  );

        
        
        
        return $this->render("EspritFrontOfficeBundle:Probleme:listProb.html.twig", array('prb' => $problemes));
    }

    public function deleteAction($id) {
        $em = $this->getDoctrine()->getManager();
        $probleme = $em->getRepository('EspritFrontOfficeBundle:Probleme')->findOneBy(array('id' => $id));
        $em->remove($probleme);
        $em->flush();

        return $this->redirectToRoute('esprit_application_listeprobleme');
    }

    public function updateAction($id) {
        $em = $this->getDoctrine()->getManager(); //instancier l orm Doctritne ... get manager:instancier le gestionnaire de entitées
        $probleme = $em->getRepository('EspritFrontOfficeBundle:Probleme')->find($id);
        $form = $this->createForm(new ProblemeType(), $probleme);
        $request = $this->get('request');

        if ($form->handleRequest($request)->isValid()) {
            $em->persist($probleme);
            $em->flush();
            return $this->redirectToRoute('esprit_application_listeprobleme');
        }
        return $this->render('EspritFrontOfficeBundle:Probleme:updateProb.html.twig', array('f' => $form->createView()));
    }

}
