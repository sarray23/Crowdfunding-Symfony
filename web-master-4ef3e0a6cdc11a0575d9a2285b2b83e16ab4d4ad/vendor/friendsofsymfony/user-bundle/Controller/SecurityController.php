<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

class SecurityController extends Controller
{
    public function loginAction(Request $request)
    {
        /** @var $session \Symfony\Component\HttpFoundation\Session\Session */
        $session = $request->getSession();

        if (class_exists('\Symfony\Component\Security\Core\Security')) {
            $authErrorKey = Security::AUTHENTICATION_ERROR;
            $lastUsernameKey = Security::LAST_USERNAME;
        } else {
            // BC for SF < 2.6
            $authErrorKey = SecurityContextInterface::AUTHENTICATION_ERROR;
            $lastUsernameKey = SecurityContextInterface::LAST_USERNAME;
        }

        // get the error if any (works with forward and redirect -- see below)
        if ($request->attributes->has($authErrorKey)) {
            $error = $request->attributes->get($authErrorKey);
        } elseif (null !== $session && $session->has($authErrorKey)) {
            $error = $session->get($authErrorKey);
            $session->remove($authErrorKey);
        } else {
            $error = null;
        }

        if (!$error instanceof AuthenticationException) {
            $error = null; // The value does not come from the security component.
        }

        // last username entered by the user
        $lastUsername = (null === $session) ? '' : $session->get($lastUsernameKey);

        if ($this->has('security.csrf.token_manager')) {
            $csrfToken = $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue();
        } else {
            // BC for SF < 2.4
            $csrfToken = $this->has('form.csrf_provider')
                ? $this->get('form.csrf_provider')->generateCsrfToken('authenticate')
                : null;
        }
        $request = $this->get('request_stack')->getCurrentRequest();
        $em = $this->getDoctrine()->getManager();

         $query = $em->createQuery(
            'SELECT I
            FROM EspritFrontOfficeBundle:Idee I,EspritFrontOfficeBundle:Rating r 
            WHERE 10000*I.id=r.id and r.rate=(select max(v.rate) from EspritFrontOfficeBundle:Rating v)
            
                    ');
    $idees = $query->getResult();
    
        $users = $em->getRepository("EspritFrontOfficeBundle:User")->findAll();
$query = $em->createQuery(
            'SELECT r
            FROM EspritFrontOfficeBundle:Idee I,EspritFrontOfficeBundle:Rating r
            WHERE 10000*I.id= r.id
            '
                    );
            $rates = $query->getResult();
            
            
            $query = $em->createQuery(
            'SELECT p
            FROM EspritFrontOfficeBundle:Projet p
            Order by p.id desc
            '
                    );
            $projets = $query->getResult();
        
        $entities  = $this->get('knp_paginator')->paginate($projets,$request->query->get('page', 1)/*page number*/,8/*limit per page*/);
        if($idees!=null){$idee=$idees[0];}
        else
        {
        $idee= new \Esprit\FrontOfficeBundle\Entity\Idee();
        $idee->setTitre("La premiere idée de projet");
        $idee->setIdPorteurDeProjet(1);
        $idee->setType("Autre");
        $idee->setDescription("C'est une idée démo");
        }
        if($projets==null){$projets=new Esprit\FrontOfficeBundle\Entity\Projet();
        $projets->setId(1);
        $projets->setCanaouite(0);
        $projets->setTitre("Projet démo");
        $projets->setBudget(0);
        $projets->setDuree(0);
        $projets->setType("démo");
        $projets->setIdUser(1);
        $projets->setDescription("démo");
        $projets->setCategorie("rien");
        $projets->setPays("Tunisie");
        }
        return $this->renderLogin(array(
            'last_username' => $lastUsername,
            'error' => $error,
            'csrf_token' => $csrfToken,
            'idees'=>$idees,
            'users'=>$users,
            'rates'=>$rates,
            'projets'=>$projets,
            'mds'=>$entities,
        ));
    }

    /**
     * Renders the login template with the given parameters. Overwrite this function in
     * an extended controller to provide additional data for the login template.
     *
     * @param array $data
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function renderLogin(array $data)
    {
         
        
           

   
    
        return $this->render('FOSUserBundle:Security:login.html.twig',$data);

    }

    public function checkAction()
    {
        throw new \RuntimeException('You must configure the check path to be handled by the firewall using form_login in your security firewall configuration.');
    }

    public function logoutAction()
    {
        throw new \RuntimeException('You must activate the logout in your security firewall configuration.');
    }
}
