<?php

/* EspritBackOfficeBundle:Idee:general.html.twig */
class __TwigTemplate_bc4949d43071d5748b77890b3f10560cdfa8d9b932f7ff30613ba8e25992fe9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritBackOfficeBundle::layout.html.twig", "EspritBackOfficeBundle:Idee:general.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritBackOfficeBundle::layout.html.twig";
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
        echo $this->env->getExtension('routing')->getPath("esprit_back_office_afficher_idee");
        echo "\">Afficher toutes les idées</a><br>
   <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("esprit_back_office_rechercher_idee");
        echo "\">Chercher une idée</a>


</center>

    ";
    }

    public function getTemplateName()
    {
        return "EspritBackOfficeBundle:Idee:general.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "EspritBackOfficeBundle::layout.html.twig"%}*/
/* {%block container %}*/
/* */
/* <center>*/
/* */
/*    <a href="{{path('esprit_back_office_afficher_idee')}}">Afficher toutes les idées</a><br>*/
/*    <a href="{{path('esprit_back_office_rechercher_idee')}}">Chercher une idée</a>*/
/* */
/* */
/* </center>*/
/* */
/*     {%endblock%}*/
/* */
/* */
/* {# empty Twig template #}*/
/* */
