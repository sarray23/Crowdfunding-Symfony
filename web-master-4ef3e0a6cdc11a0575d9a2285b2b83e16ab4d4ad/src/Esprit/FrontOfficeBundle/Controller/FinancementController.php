<?php

namespace Esprit\FrontOfficeBundle\Controller;

use Esprit\FrontOfficeBundle\Entity\Financement;
use Esprit\FrontOfficeBundle\Form\FinancementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Description of FinancementController
 *
 * @author Sourour-PC
 */
class FinancementController extends Controller {

    public function fundAction($idprojet) {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $id = $user->getId();
        $sold = $user->getSolde();
        $em = $this->getDoctrine()->getManager();

        $fund = new Financement();
        $fund->setIdUtilisateur($user);
        echo ' user ' . $id;
        $p = $em->getRepository('EspritFrontOfficeBundle:Projet')->findOneById($idprojet);
        $fund->setIdprojet($p);
        echo ' projet ' . $idprojet;

        if (empty($user)) {
            throw new NotFoundHttpException("L'annonce d'id " . $user . " n'existe pas.");
        }
        $fund->setMontant(0);
        $form = $this->createForm(new FinancementType(), $fund);
        $request = $this->get('request');
        $form->handleRequest($request);

        if (($form->isValid())) {
            echo ' mt  ' . $fund->getMontant();
            $fund->setType("DON");
            if ($sold >= $fund->getMontant()) {
                              if($p->getCanaouite()==$p->getbudget()) {
                   
                $this->get('session')->getFlashBag()->add(
                        'notice', 'Projet a  atteind le budget demandé !');
               }else{
                $user->setSolde($sold - $fund->getMontant());
                $p->setCanaouite($p->getCanaouite()+$fund->getMontant());
                $em->persist($fund);
                $em->flush();
                //retourne vers liste projets
               return $this->redirectToRoute('esprit_front_office_liste');
            }}
            else {
                $this->get('session')->getFlashBag()->add(
                        'notice', 'Solde insufisant!');
                // $fund->setMontant(0);
            }
        }
        $fund->setMontant(0);
        return $this->render('EspritFrontOfficeBundle:Projet:Funding.html.twig', array('f' => $form->createView(), 'solde' => $sold));
    }

}
