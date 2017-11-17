<?php

/* EspritFrontOfficeBundle:Expert:experts.html.twig */
class __TwigTemplate_d99178564ff582392e1f6d8c37f533daf35cf6c609bae66f3d054a18823a82b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::expertLayout.html.twig", "EspritFrontOfficeBundle:Expert:experts.html.twig", 1);
        $this->blocks = array(
            'page' => array($this, 'block_page'),
            'title' => array($this, 'block_title'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritFrontOfficeBundle::expertLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_page($context, array $blocks = array())
    {
        echo " Les utilisateurs de CrowdRise";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Utilisatuers ";
    }

    // line 4
    public function block_container($context, array $blocks = array())
    {
        // line 5
        echo "    
    
    
    ";
        // line 8
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 9
            echo "
    
<section> <!--for demo wrap-->
<h1>La liste des utilisatuers</h1>  
<div  class=\"tbl-header\">
<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
  <thead>
    <tr>
      <th>Photo</th>
      <th>Code</th>
      <th>Nom</th>
      <th>Voter</th>
      <th>Contacter</th>
    </tr>
  </thead>
</table>
</div>
<div  class=\"tbl-content\">
<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
  <tbody>
      ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["experts"]) ? $context["experts"] : $this->getContext($context, "experts")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["expert"]) {
                // line 30
                echo "    <tr>
        <td><img src=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/users/" . $this->getAttribute($context["expert"], "path", array()))), "html", null, true);
                echo "\" id=\"circularimg\"  ></td>
            
        <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["expert"], "id", array()), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["expert"], "username", array()), "html", null, true);
                echo "</td>

        <td>";
                // line 35
                $this->loadTemplate("DCSRatingBundle:Rating:control.html.twig", "EspritFrontOfficeBundle:Expert:experts.html.twig", 35)->display(array_merge($context, array("id" => $this->getAttribute($context["expert"], "id", array()))));
                echo "</td>
        <td><a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_application_mail", array("id" => $this->getAttribute($context["expert"], "id", array()))), "html", null, true);
                echo "\"> <input type=\"submit\" value=\"Contacter\" class=\"btn btn-red btn-submit-all\" /></a></td>
    </tr>
    
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expert'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "    
  </tbody>
</table>
</div>
</section>

    ";
        } else {
            // line 47
            echo "    <center>
        <h2>Vous devez etre connecté pour pouvoir ajouter une idée.</h2>
    <br> 
    <a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><h1>Connecter</h1></a>
    <br>
    <a href=\"";
            // line 52
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\"><h1>S'inscrire</h1></a>
    </center>
";
        }
        // line 54
        echo "    
    
    
";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Expert:experts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 54,  147 => 52,  142 => 50,  137 => 47,  128 => 40,  110 => 36,  106 => 35,  99 => 33,  94 => 31,  91 => 30,  74 => 29,  52 => 9,  50 => 8,  45 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {%extends "EspritFrontOfficeBundle::expertLayout.html.twig"%}*/
/* {%block page %} Les utilisateurs de CrowdRise{%endblock%}*/
/* {%block title %} Utilisatuers {%endblock%}*/
/* {%block container %}*/
/*     */
/*     */
/*     */
/*     {% if is_granted('ROLE_USER') %}*/
/* */
/*     */
/* <section> <!--for demo wrap-->*/
/* <h1>La liste des utilisatuers</h1>  */
/* <div  class="tbl-header">*/
/* <table cellpadding="0" cellspacing="0" border="0">*/
/*   <thead>*/
/*     <tr>*/
/*       <th>Photo</th>*/
/*       <th>Code</th>*/
/*       <th>Nom</th>*/
/*       <th>Voter</th>*/
/*       <th>Contacter</th>*/
/*     </tr>*/
/*   </thead>*/
/* </table>*/
/* </div>*/
/* <div  class="tbl-content">*/
/* <table cellpadding="0" cellspacing="0" border="0">*/
/*   <tbody>*/
/*       {% for expert in experts %}*/
/*     <tr>*/
/*         <td><img src="{{ asset('uploads/users/'~expert.path)}}" id="circularimg"  ></td>*/
/*             */
/*         <td>{{expert.id}}</td><td>{{expert.username}}</td>*/
/* */
/*         <td>{% include 'DCSRatingBundle:Rating:control.html.twig' with {'id' : expert.id } %}</td>*/
/*         <td><a href="{{path('esprit_application_mail',{'id':expert.id})}}"> <input type="submit" value="Contacter" class="btn btn-red btn-submit-all" /></a></td>*/
/*     </tr>*/
/*     */
/*     {% endfor %}*/
/*     */
/*   </tbody>*/
/* </table>*/
/* </div>*/
/* </section>*/
/* */
/*     {%else%}*/
/*     <center>*/
/*         <h2>Vous devez etre connecté pour pouvoir ajouter une idée.</h2>*/
/*     <br> */
/*     <a href="{{path('fos_user_security_login')}}"><h1>Connecter</h1></a>*/
/*     <br>*/
/*     <a href="{{path('fos_user_registration_register')}}"><h1>S'inscrire</h1></a>*/
/*     </center>*/
/* {%endif%}    */
/*     */
/*     */
/* {%endblock%}*/
/* */
/* */
/* */
/* */
/* */
