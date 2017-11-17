<?php

/* EspritBackOfficeBundle:Idee:affiche.html.twig */
class __TwigTemplate_13c1b8bb26ec3ff05114a5c699466e7c8ffc7a0cf4eec8ce2ba50c215b6b1d8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritBackOfficeBundle::layout.html.twig", "EspritBackOfficeBundle:Idee:affiche.html.twig", 1);
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

<center><h1>Liste des Idées de projet</h1>

   <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("esprit_back_office_tri_idee");
        echo "\">Trier la Liste des idées</a><br>
        <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("esprit_back_office_rechercher_idee");
        echo "\">Chercher une idée</a>

</center>

        <center>

<table border=\"1\" >
    <tr>
        <th>Titre</th>
        <th>Description</th>
        <th>Type</th>
        <th>Supprimer</th>
        <th>Modifier</th>
       
    </tr>
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["idees"]) ? $context["idees"] : $this->getContext($context, "idees")));
        foreach ($context['_seq'] as $context["_key"] => $context["idee"]) {
            // line 24
            echo "    <tr>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "titre", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "description", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "type", array()), "html", null, true);
            echo "</td>
      
        <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_back_office_delete_idee", array("id" => $this->getAttribute($context["idee"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
        <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_back_office_update_idee", array("id" => $this->getAttribute($context["idee"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>
        
        
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</table>
        </center>


    ";
    }

    public function getTemplateName()
    {
        return "EspritBackOfficeBundle:Idee:affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 35,  85 => 30,  81 => 29,  76 => 27,  72 => 26,  68 => 25,  65 => 24,  61 => 23,  43 => 8,  39 => 7,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "EspritBackOfficeBundle::layout.html.twig"%}*/
/* {%block container %}*/
/* <center><h1><a href="{{path('esprit_back_office_idee_general')}}">Accueil des idées</a></h1></center>*/
/* */
/* <center><h1>Liste des Idées de projet</h1>*/
/* */
/*    <a href="{{path('esprit_back_office_tri_idee')}}">Trier la Liste des idées</a><br>*/
/*         <a href="{{path('esprit_back_office_rechercher_idee')}}">Chercher une idée</a>*/
/* */
/* </center>*/
/* */
/*         <center>*/
/* */
/* <table border="1" >*/
/*     <tr>*/
/*         <th>Titre</th>*/
/*         <th>Description</th>*/
/*         <th>Type</th>*/
/*         <th>Supprimer</th>*/
/*         <th>Modifier</th>*/
/*        */
/*     </tr>*/
/*     {% for idee in idees %}*/
/*     <tr>*/
/*         <td>{{idee.titre}}</td>*/
/*         <td>{{idee.description}}</td>*/
/*         <td>{{idee.type}}</td>*/
/*       */
/*         <td><a href="{{path('esprit_back_office_delete_idee', {'id':idee.id})}}">Supprimer</a></td>*/
/*         <td><a href="{{path('esprit_back_office_update_idee',{'id':idee.id})}}">Modifier</a></td>*/
/*         */
/*         */
/*     </tr>*/
/*     {% endfor %}*/
/* </table>*/
/*         </center>*/
/* */
/* */
/*     {%endblock%}*/
/* */
/* */
/* */
