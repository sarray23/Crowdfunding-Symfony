<?php

/* EspritBackOfficeBundle:List:idee.html.twig */
class __TwigTemplate_b90fd3d9505f62e095f05a46872f407dc6c09a36969aec73b0b89e942bb8562c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EspritBackOfficeBundle::layout.html.twig", "EspritBackOfficeBundle:List:idee.html.twig", 2);
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

    // line 3
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo " <center>

<h1> La liste des idées  </h1>

<a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("esprit_back_office_desc_idee");
        echo "\"><h2>Les plus notées</h2></a><a href=\"";
        echo $this->env->getExtension('routing')->getPath("esprit_back_office_asc_idee");
        echo "\"><h2>Les moins notées</h2></a>

<table  class=\"features-table\">
    <tr> 
    <center>
        
    <th> <center>Id</center></th>
    <th> <center>Titre</center></th>
<th><center>Description</center></th>
        
<th><center>Suprimer</center></th>
<th><center>Modifier</center></th>
    </center>
    </tr>
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mds"]) ? $context["mds"] : $this->getContext($context, "mds")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 23
            echo "    <tr>
       
        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
            echo "</td>
        <td><h5>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "titre", array()), "html", null, true);
            echo "</h5></td>
        <td >";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "description", array()), "html", null, true);
            echo "</td>
      
        <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_back_office_sup_idee", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\"><img width=\"40\" height=\"40\"alt=\"\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/sup.png"), "html", null, true);
            echo "\" alt=\"\$TITLE\"/> </a></td>
        <td>    <a  href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_back_office_edit_idee", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\"> <img width=\"40\" height=\"40\"alt=\"\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/modif.png"), "html", null, true);
            echo "\" alt=\"\$TITLE\"/></a></td>
        
        
    </tr>
   
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    
     ";
    }

    public function getTemplateName()
    {
        return "EspritBackOfficeBundle:List:idee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 36,  83 => 30,  77 => 29,  72 => 27,  68 => 26,  64 => 25,  60 => 23,  56 => 22,  37 => 8,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {%extends "EspritBackOfficeBundle::layout.html.twig"%}*/
/* {%block container %}*/
/*  <center>*/
/* */
/* <h1> La liste des idées  </h1>*/
/* */
/* <a href="{{path('esprit_back_office_desc_idee')}}"><h2>Les plus notées</h2></a><a href="{{path('esprit_back_office_asc_idee')}}"><h2>Les moins notées</h2></a>*/
/* */
/* <table  class="features-table">*/
/*     <tr> */
/*     <center>*/
/*         */
/*     <th> <center>Id</center></th>*/
/*     <th> <center>Titre</center></th>*/
/* <th><center>Description</center></th>*/
/*         */
/* <th><center>Suprimer</center></th>*/
/* <th><center>Modifier</center></th>*/
/*     </center>*/
/*     </tr>*/
/*     {% for m in mds %}*/
/*     <tr>*/
/*        */
/*         <td>{{m.id}}</td>*/
/*         <td><h5>{{m.titre}}</h5></td>*/
/*         <td >{{m.description}}</td>*/
/*       */
/*         <td><a href="{{path('esprit_back_office_sup_idee', {'id':m.id})}}"><img width="40" height="40"alt="" src="{{asset('images/sup.png')}}" alt="$TITLE"/> </a></td>*/
/*         <td>    <a  href="{{path('esprit_back_office_edit_idee', {'id':m.id})}}"> <img width="40" height="40"alt="" src="{{asset('images/modif.png')}}" alt="$TITLE"/></a></td>*/
/*         */
/*         */
/*     </tr>*/
/*    */
/*     {% endfor %}*/
/*     */
/*      {%endblock  %}*/
