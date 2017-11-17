<?php

/* EspritBackOfficeBundle:Idee:resultat.html.twig */
class __TwigTemplate_1f66aec71031c055f215f8bc065a76df517143ef7dd462c9a5194fc87aee2220 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritBackOfficeBundle::layout.html.twig", "EspritBackOfficeBundle:Idee:resultat.html.twig", 1);
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

<center><h1>Liste des Idées</h1>

  
</center>

        <center>

<table border=\"1\">
    <tr>
        <th>Titre</th>
        <th>Description</th>
        <th>Type</th>
        <th>Supprimer</th>
        <th>Modifier</th>
       
    </tr>
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["idees"]) ? $context["idees"] : $this->getContext($context, "idees")));
        foreach ($context['_seq'] as $context["_key"] => $context["idee"]) {
            // line 22
            echo "    <tr>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "titre", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "description", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "type", array()), "html", null, true);
            echo "</td>
      
        <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_back_office_delete_idee", array("id" => $this->getAttribute($context["idee"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
        <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_back_office_update_idee", array("id" => $this->getAttribute($context["idee"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>
        
        
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</table>
            </center>

";
    }

    public function getTemplateName()
    {
        return "EspritBackOfficeBundle:Idee:resultat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 33,  77 => 28,  73 => 27,  68 => 25,  64 => 24,  60 => 23,  57 => 22,  53 => 21,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "EspritBackOfficeBundle::layout.html.twig"%}*/
/* {%block container %}*/
/* <center><h1><a href="{{path('esprit_back_office_idee_general')}}">Accueil des idées</a></h1></center>*/
/* */
/* <center><h1>Liste des Idées</h1>*/
/* */
/*   */
/* </center>*/
/* */
/*         <center>*/
/* */
/* <table border="1">*/
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
/*             </center>*/
/* */
/* {%endblock%}*/
/* */
/* */
