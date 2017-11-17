<?php
namespace Esprit\BackOfficeBundle\Controller;



use FOS\UserBundle\Controller\SecurityController as BaseSecurityController;

class SecurityController extends BaseSecurityController
{
    /**
     * Renders the login template with the given parameters. Overwrite this function in
     * an extended controller to provide additional data for the login template.
     *
     * @param array $data
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function Login(array $data)
    {
        return $this->container->get('templating')->renderResponse('EspritBackOfficeBundle:Security:login.html.twig', $data);
} }