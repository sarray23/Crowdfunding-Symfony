<?php

/* EspritFrontOfficeBundle:Projet:affiche2.html.twig */
class __TwigTemplate_040ec46b0c42aa0d180a2258d8e2d8d89ce89331e80bb0af9119872406feb1e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritApplicationBundle::layout.html.twig", "EspritFrontOfficeBundle:Projet:affiche2.html.twig", 1);
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
        echo "    <center><h1><a href=\"";
        echo $this->env->getExtension('routing')->getPath("esprit_application_idee_general");
        echo "\">Accueil des idées</a></h1></center>

<center><h1>Liste des projets</h1>

   <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("esprit_application_tri_idee");
        echo "\">Trier la Liste des idées</a><br>
        <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("esprit_application_rechercher_idee");
        echo "\">Chercher une idée</a>

</center>

        <center>
<table  id=\"tableau\" border=\"1\">
    <thead>
    <tr>
        <th scope=\"col\">Titre</th>
        <th scope=\"col\">Description</th>
        <th scope=\"col\">Type</th>
        <th scope=\"col\">Supprimer</th>
        <th scope=\"col\">Modifier</th>
       
    </tr>
     </thead>
  <tfoot>
    <tr>
      <td colspan=\"5\">La liste de vos idées</td>
    </tr>
  </tfoot>
    <tbody>

    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["idees"]) ? $context["idees"] : $this->getContext($context, "idees")));
        foreach ($context['_seq'] as $context["_key"] => $context["idee"]) {
            // line 32
            echo "    <tr>
        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "titre", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "description", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "type", array()), "html", null, true);
            echo "</td>
      
        <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_application_delete_idee", array("id" => $this->getAttribute($context["idee"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
        <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_application_update_idee", array("id" => $this->getAttribute($context["idee"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>
        
        
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "      </tbody>

</table>
        </center>

    ";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Projet:affiche2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 43,  93 => 38,  89 => 37,  84 => 35,  80 => 34,  76 => 33,  73 => 32,  69 => 31,  43 => 8,  39 => 7,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "EspritApplicationBundle::layout.html.twig"%}*/
/* {%block container %}*/
/*     <center><h1><a href="{{path('esprit_application_idee_general')}}">Accueil des idées</a></h1></center>*/
/* */
/* <center><h1>Liste des projets</h1>*/
/* */
/*    <a href="{{path('esprit_application_tri_idee')}}">Trier la Liste des idées</a><br>*/
/*         <a href="{{path('esprit_application_rechercher_idee')}}">Chercher une idée</a>*/
/* */
/* </center>*/
/* */
/*         <center>*/
/* <table  id="tableau" border="1">*/
/*     <thead>*/
/*     <tr>*/
/*         <th scope="col">Titre</th>*/
/*         <th scope="col">Description</th>*/
/*         <th scope="col">Type</th>*/
/*         <th scope="col">Supprimer</th>*/
/*         <th scope="col">Modifier</th>*/
/*        */
/*     </tr>*/
/*      </thead>*/
/*   <tfoot>*/
/*     <tr>*/
/*       <td colspan="5">La liste de vos idées</td>*/
/*     </tr>*/
/*   </tfoot>*/
/*     <tbody>*/
/* */
/*     {% for idee in idees %}*/
/*     <tr>*/
/*         <td>{{idee.titre}}</td>*/
/*         <td>{{idee.description}}</td>*/
/*         <td>{{idee.type}}</td>*/
/*       */
/*         <td><a href="{{path('esprit_application_delete_idee', {'id':idee.id})}}">Supprimer</a></td>*/
/*         <td><a href="{{path('esprit_application_update_idee',{'id':idee.id})}}">Modifier</a></td>*/
/*         */
/*         */
/*     </tr>*/
/*     {% endfor %}*/
/*       </tbody>*/
/* */
/* </table>*/
/*         </center>*/
/* */
/*     {%endblock%}*/
/* */
/* */
/* */
