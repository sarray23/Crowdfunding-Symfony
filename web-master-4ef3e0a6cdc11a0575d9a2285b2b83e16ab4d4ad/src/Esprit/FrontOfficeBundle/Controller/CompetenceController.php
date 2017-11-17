<?php

namespace Esprit\FrontOfficeBundle\Controller;

use Esprit\FrontOfficeBundle\Entity\Competence;
use Esprit\FrontOfficeBundle\Form\CompetenceType;
use Esprit\FrontOfficeBundle\Form\ExpertType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Description of CompetenceController
 *
 * @author Sourour-PC
 */
class CompetenceController extends Controller {

    public function listeAction() {
        $em = $this->getDoctrine()->getManager();
        $comps = $em->getRepository("EspritFrontOfficeBundle:Competence")->findBy(array(), array('categorie' => 'asc'));
        return $this->render("EspritFrontOfficeBundle:Competence:liste.html.twig", array("comps" => $comps));
    }

    public function ajoutAction() {
        $comp = new Competence();
        $Form = $this->createForm(new CompetenceType(), $comp);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);
        if ($Form->isValid()) {

            $em = $this->getDoctrine()->getManager();

            $em->persist($comp);
            $em->flush();
          return  $this->redirectToRoute('esprit_application_listCompetences');
        }

        return $this->render("EspritFrontOfficeBundle:Competence:ajout.html.twig", array('form' => $Form->createView()));
    }

    public function updateAction($id) {
        $em = $this->getDoctrine()->getManager();
        $comp = $em->getRepository('EspritFrontOfficeBundle:Competence')->findOneById($id);
        $Form = $this->createForm(new CompetenceType(), $comp);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);

        if ($Form->isValid()) {

            $em->persist($comp);
            $em->flush();
           return $this->redirectToRoute('esprit_application_listCompetences');
        }
        return $this->render("EspritFrontOfficeBundle:Competence:update.html.twig", array('Form' => $Form->createView()));
    }

    public function deleteAction($id) {
        $em = $this->getDoctrine()->getManager();
        $comp = $em->getRepository('EspritFrontOfficeBundle:Competence')->findOneById($id);
        $em->remove($comp);
        $em->flush();
        return $this->redirectToRoute('esprit_application_listCompetences');
    }


    
    //affecte les Compétences
    public function CompetenceAction() {
        //recuperer user courant
        // $user=3;
        $user = $this->container->get('security.context')->getToken()->getUser();
        $id = $user->getId();

        if (empty($user)) {
            throw new NotFoundHttpException("L'annonce d'id " . $user . " n'existe pas.");
        }
        $form = $this->createForm(new ExpertType(), $user);
        $request = $this->get('request');
        $form->handleRequest($request);
        if (($form->isValid())) {

            $em = $this->getDoctrine()->getManager();

            $em->persist($user);
            $em->flush();
        }
        return $this->render('EspritFrontOfficeBundle:Competence:profilExpert.html.twig', array('Form1' => $form->createView()));
    }
    
    
    
    public function rechercheAction() {
        $em = $this->getDoctrine()->getManager();
        $user=$em->getRepository('EspritFrontOfficeBundle:User')->findAll();
        $request = $this->get('request');
        $s = $request->get('search');
        if ($request->getMethod() == "POST") {
            
             $user = $em->getRepository('EspritFrontOfficeBundle:User')->usersDQL();
             var_dump($user[0]['username']);

        }
        
                 return $this->render('EspritFrontOfficeBundle:Competence:usersByC.html.twig', array('usr' => $user, 's' => $s));

    }
    
    
}
