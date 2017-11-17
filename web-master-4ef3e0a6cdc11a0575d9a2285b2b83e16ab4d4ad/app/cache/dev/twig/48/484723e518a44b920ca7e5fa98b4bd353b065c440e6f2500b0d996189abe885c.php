<?php

/* EspritBackOfficeBundle:Idee:recherche.html.twig */
class __TwigTemplate_82d5d20d871c7e3cb53232364b0e47fa19ba7d863e1543a03456ef47a06e6864 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritBackOfficeBundle::layout.html.twig", "EspritBackOfficeBundle:Idee:recherche.html.twig", 1);
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
        echo "<center><h1><a href=\"";
        echo $this->env->getExtension('routing')->getPath("esprit_back_office_idee_general");
        echo "\">Accueil des idées</a></h1></center>
        <center>

<h1>Recherche Idée de projet par son titre</h1>
<form method=\"POST\">
    Titre du projet : <input type=\"text\" name=\"titre\">
    <input type=\"submit\" value=\"rechercher\">
</form>
        </center>

";
    }

    public function getTemplateName()
    {
        return "EspritBackOfficeBundle:Idee:recherche.html.twig";
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
/* {%extends "EspritBackOfficeBundle::layout.html.twig"%}*/
/* {%block container %}*/
/* <center><h1><a href="{{path('esprit_back_office_idee_general')}}">Accueil des idées</a></h1></center>*/
/*         <center>*/
/* */
/* <h1>Recherche Idée de projet par son titre</h1>*/
/* <form method="POST">*/
/*     Titre du projet : <input type="text" name="titre">*/
/*     <input type="submit" value="rechercher">*/
/* </form>*/
/*         </center>*/
/* */
/* {%endblock%}*/
