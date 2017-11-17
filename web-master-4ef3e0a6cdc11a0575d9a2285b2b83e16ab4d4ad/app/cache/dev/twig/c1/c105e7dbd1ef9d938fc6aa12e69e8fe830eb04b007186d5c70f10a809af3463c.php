<?php

/* EspritBackOfficeBundle:List:List.html.twig */
class __TwigTemplate_6e6d230d89a95866c5a88129cb50ed787c9b861eae11d01012a0a0f235a529e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EspritBackOfficeBundle::layout.html.twig", "EspritBackOfficeBundle:List:List.html.twig", 2);
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
     <form method=\"POST\">
<input id=\"sys_txt_keyword\" class=\"txt-keyword\" type=\"text\" placeholder=\"Chercher un utilisateur\" name=\"titre\"/>
     </form>
<h2> La liste des utilisateurs </h2>

<table  class=\"features-table\">
    <tr> 
    <center>
        
    <th> <center>Photo</center></th>
    <th> <center>Username</center></th>
<th><center>Email</center></th>
        
<th><center>Suprimer</center></th>
<th><center>Blocker</center></th>
<th><center>Activer</center></th>
    </center>
    </tr>
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mds"]) ? $context["mds"] : $this->getContext($context, "mds")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 24
            echo "    <tr>
       
        <td><img src =\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/users/" . $this->getAttribute($context["m"], "path", array()))), "html", null, true);
            echo " \"  width=\"80\" height=\"70\"alt=\"\"  ></td>
        <td><h5>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "username", array()), "html", null, true);
            echo "</h5></td>
        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "email", array()), "html", null, true);
            echo "</td>
      
        <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_back_office_sup", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\"><img width=\"40\" height=\"40\"alt=\"\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/sup.png"), "html", null, true);
            echo "\" alt=\"\$TITLE\"/> </a></td>
        <td>    <a  href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_back_office_block", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\"> <img width=\"40\" height=\"40\"alt=\"\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/b.png"), "html", null, true);
            echo "\" alt=\"\$TITLE\"/></a></td>
        <td>  <a  href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_back_office_activer", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\"> <img width=\"40\" height=\"40\"alt=\"\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/yes.png"), "html", null, true);
            echo "\" alt=\"\$TITLE\"/></a></td>
        
        
    </tr>
   
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    
     ";
    }

    public function getTemplateName()
    {
        return "EspritBackOfficeBundle:List:List.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 38,  85 => 32,  79 => 31,  73 => 30,  68 => 28,  64 => 27,  60 => 26,  56 => 24,  52 => 23,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {%extends "EspritBackOfficeBundle::layout.html.twig"%}*/
/* {%block container %}*/
/*  <center>*/
/*      <form method="POST">*/
/* <input id="sys_txt_keyword" class="txt-keyword" type="text" placeholder="Chercher un utilisateur" name="titre"/>*/
/*      </form>*/
/* <h2> La liste des utilisateurs </h2>*/
/* */
/* <table  class="features-table">*/
/*     <tr> */
/*     <center>*/
/*         */
/*     <th> <center>Photo</center></th>*/
/*     <th> <center>Username</center></th>*/
/* <th><center>Email</center></th>*/
/*         */
/* <th><center>Suprimer</center></th>*/
/* <th><center>Blocker</center></th>*/
/* <th><center>Activer</center></th>*/
/*     </center>*/
/*     </tr>*/
/*     {% for m in mds %}*/
/*     <tr>*/
/*        */
/*         <td><img src ="{{asset('uploads/users/'~m.path)}} "  width="80" height="70"alt=""  ></td>*/
/*         <td><h5>{{m.username}}</h5></td>*/
/*         <td>{{m.email}}</td>*/
/*       */
/*         <td><a href="{{path('esprit_back_office_sup', {'id':m.id})}}"><img width="40" height="40"alt="" src="{{asset('images/sup.png')}}" alt="$TITLE"/> </a></td>*/
/*         <td>    <a  href="{{path('esprit_back_office_block', {'id':m.id})}}"> <img width="40" height="40"alt="" src="{{asset('images/b.png')}}" alt="$TITLE"/></a></td>*/
/*         <td>  <a  href="{{path('esprit_back_office_activer', {'id':m.id})}}"> <img width="40" height="40"alt="" src="{{asset('images/yes.png')}}" alt="$TITLE"/></a></td>*/
/*         */
/*         */
/*     </tr>*/
/*    */
/*     {% endfor %}*/
/*     */
/*      {%endblock  %}*/
