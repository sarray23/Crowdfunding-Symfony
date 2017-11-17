<?php

/* EspritBackOfficeBundle:Reclamation:list.html.twig */
class __TwigTemplate_ffdc629670744d90bef1b49b7de58332826390327a264e67fbd9d787824f5d69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritBackOfficeBundle::layout.html.twig", "EspritBackOfficeBundle:Reclamation:list.html.twig", 1);
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
        echo " <center>

<h1> La liste des réclamations  </h1>


<table  class=\"features-table\">
    <tr> 
    <center>
         <th> <center>Photo</center></th>
    <th> <center>Objet</center></th>
    <th> <center>Description</center></th>
<th><center>Date</center></th>
        
<th><center>Etat</center></th>
<th><center>Porteur</center></th>
        
<th><center>Accepter</center></th>
<th><center>Supprimer</center></th>
    </center>
    </tr>
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) ? $context["reclamations"] : $this->getContext($context, "reclamations")));
        foreach ($context['_seq'] as $context["_key"] => $context["rec"]) {
            // line 24
            echo "    <tr>
        <td>";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                if (($this->getAttribute($context["user"], "id", array()) == $this->getAttribute($context["rec"], "idP", array()))) {
                    echo "<img src =\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/users/" . $this->getAttribute($context["user"], "path", array()))), "html", null, true);
                    echo " \"  width=\"80\" height=\"70\"alt=\"\"  >";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["rec"], "objet", array()), "html", null, true);
            echo "</td>
        <td><h5>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["rec"], "description", array()), "html", null, true);
            echo "</h5></td>
        <td >";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rec"], "dateReclamation", array()), "d/m/Y"), "html", null, true);
            echo "</td>
      
        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["rec"], "etat", array()), "html", null, true);
            echo "</td>
        <td>            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                echo " ";
                if (($this->getAttribute($context["rec"], "idP", array()) == $this->getAttribute($context["user"], "id", array()))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                    echo " ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
            <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_back_office_accepter_reclamation", array("id" => $this->getAttribute($context["rec"], "id", array()))), "html", null, true);
            echo "\"><img width=\"40\" height=\"40\"alt=\"\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/yes.png"), "html", null, true);
            echo "\" alt=\"\$TITLE\"/></a></td>
        <td>                   <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_back_office_supprimer_reclamation", array("id" => $this->getAttribute($context["rec"], "id", array()))), "html", null, true);
            echo "\"><img width=\"40\" height=\"40\"alt=\"\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/sup.png"), "html", null, true);
            echo "\" alt=\"\$TITLE\"/></a>
</td>
        
    </tr>
   
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    
     ";
    }

    public function getTemplateName()
    {
        return "EspritBackOfficeBundle:Reclamation:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 39,  114 => 33,  108 => 32,  92 => 31,  88 => 30,  83 => 28,  79 => 27,  75 => 26,  60 => 25,  57 => 24,  53 => 23,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "EspritBackOfficeBundle::layout.html.twig"%}*/
/* {%block container %}*/
/*  <center>*/
/* */
/* <h1> La liste des réclamations  </h1>*/
/* */
/* */
/* <table  class="features-table">*/
/*     <tr> */
/*     <center>*/
/*          <th> <center>Photo</center></th>*/
/*     <th> <center>Objet</center></th>*/
/*     <th> <center>Description</center></th>*/
/* <th><center>Date</center></th>*/
/*         */
/* <th><center>Etat</center></th>*/
/* <th><center>Porteur</center></th>*/
/*         */
/* <th><center>Accepter</center></th>*/
/* <th><center>Supprimer</center></th>*/
/*     </center>*/
/*     </tr>*/
/*     {% for rec in reclamations%}*/
/*     <tr>*/
/*         <td>{% for user in users %}{% if user.id == rec.idP %}<img src ="{{asset('uploads/users/'~user.path)}} "  width="80" height="70"alt=""  >{% endif %}{%endfor%}</td>*/
/*         <td>{{rec.objet}}</td>*/
/*         <td><h5>{{rec.description}}</h5></td>*/
/*         <td >{{rec.dateReclamation|date('d/m/Y')}}</td>*/
/*       */
/*         <td>{{rec.etat}}</td>*/
/*         <td>            {% for user in users%} {% if rec.idP == user.id %} {{user.username}} {%endif%}{%endfor%}</td>*/
/*             <td><a href="{{path('esprit_back_office_accepter_reclamation',{'id' : rec.id})}}"><img width="40" height="40"alt="" src="{{asset('images/yes.png')}}" alt="$TITLE"/></a></td>*/
/*         <td>                   <a href="{{path('esprit_back_office_supprimer_reclamation', {'id':rec.id})}}"><img width="40" height="40"alt="" src="{{asset('images/sup.png')}}" alt="$TITLE"/></a>*/
/* </td>*/
/*         */
/*     </tr>*/
/*    */
/*     {% endfor %}*/
/*     */
/*      {%endblock  %}*/
