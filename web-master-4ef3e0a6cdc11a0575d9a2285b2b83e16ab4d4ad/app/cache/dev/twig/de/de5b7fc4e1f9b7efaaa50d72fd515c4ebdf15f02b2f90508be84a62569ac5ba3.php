<?php

/* EspritFrontOfficeBundle:Idee:generale.html.twig */
class __TwigTemplate_f3ce536150581403c2e1e3c4fb40d54f83120aaced9aee47a452ad23bbc7610a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritApplicationBundle::layout.html.twig", "EspritFrontOfficeBundle:Idee:generale.html.twig", 1);
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
        echo "
<center>

   <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("esprit_application_afficher_idee");
        echo "\">Afficher toutes les idées</a><br>
   <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("esprit_application_afficher2_idee");
        echo "\">Afficher vos idées</a><br>
   <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("esprit_application_add2_idee");
        echo "\">Ajouter une idée</a><br>
   <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("esprit_application_rechercher_idee");
        echo "\">Chercher une idée</a>


</center>

    ";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Idee:generale.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  44 => 8,  40 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "EspritApplicationBundle::layout.html.twig"%}*/
/* {%block container %}*/
/* */
/* <center>*/
/* */
/*    <a href="{{path('esprit_application_afficher_idee')}}">Afficher toutes les idées</a><br>*/
/*    <a href="{{path('esprit_application_afficher2_idee')}}">Afficher vos idées</a><br>*/
/*    <a href="{{path('esprit_application_add2_idee')}}">Ajouter une idée</a><br>*/
/*    <a href="{{path('esprit_application_rechercher_idee')}}">Chercher une idée</a>*/
/* */
/* */
/* </center>*/
/* */
/*     {%endblock%}*/
/* */
/* */
/* {# empty Twig template #}*/
/* */
