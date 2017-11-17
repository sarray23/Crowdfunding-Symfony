<?php

/* EspritFrontOfficeBundle:Idee:affiche2r.html.twig */
class __TwigTemplate_b3d6000d6c174f013e9b6f89b79d8f39f0bc546af72b3e6a9f65f027b049f4b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritApplicationBundle::layout.html.twig", "EspritFrontOfficeBundle:Idee:affiche2r.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritApplicationBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "<center><h1><a href=\"";
        echo $this->env->getExtension('routing')->getPath("esprit_application_idee_general");
        echo "\">Accueil des idées</a></h1></center>
        <center>

<form method=\"POST\">
    id Porteur De Projet : <input type=\"text\" name=\"idPorteurDeProjet\">
    <input type=\"submit\" value=\"rechercher\">
</form>
                    </center>

";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Idee:affiche2r.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "EspritApplicationBundle::layout.html.twig"%}*/
/* {%block container %}*/
/* <center><h1><a href="{{path('esprit_application_idee_general')}}">Accueil des idées</a></h1></center>*/
/*         <center>*/
/* */
/* <form method="POST">*/
/*     id Porteur De Projet : <input type="text" name="idPorteurDeProjet">*/
/*     <input type="submit" value="rechercher">*/
/* </form>*/
/*                     </center>*/
/* */
/* {%endblock%}{# empty Twig template #}*/
/* */
