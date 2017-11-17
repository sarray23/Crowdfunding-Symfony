<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Esprit\FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class helpController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspritFrontOfficeBundle:Default:help.html.twig');
    }
}