<?php

/* EspritBackOfficeBundle:List:projet.html.twig */
class __TwigTemplate_b51336e6532045214c55a9f695207e5e4f391fcfd0133dcc36bc1ea72de1606c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EspritBackOfficeBundle::layout.html.twig", "EspritBackOfficeBundle:List:projet.html.twig", 2);
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

<h1> La liste des projets  </h1>
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mds"]) ? $context["mds"] : $this->getContext($context, "mds")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 8
            echo "    <fieldset style=\" width: 320 ;\"> 
         
     <legend>  <b> ID :  </b> ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
            echo " </legend>
     <b> titre :  </b> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "titre", array()), "html", null, true);
            echo " <br>
     <b> budget en DT:  </b> ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "budget", array()), "html", null, true);
            echo " <br>
            <b> Etat :  </b> ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "etat", array()), "html", null, true);
            echo "
            <br> <br> 
            
            <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_back_office_sup_projet", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
              
            <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_back_office_refuser_projet", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\"> refuser </a>
               <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_back_office_accepter_projet", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\"> valider </a>
         </fieldset>
              <br>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "  
           
           ";
    }

    public function getTemplateName()
    {
        return "EspritBackOfficeBundle:List:projet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 22,  71 => 19,  67 => 18,  62 => 16,  56 => 13,  52 => 12,  48 => 11,  44 => 10,  40 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {%extends "EspritBackOfficeBundle::layout.html.twig"%}*/
/* {%block container %}*/
/*  <center>*/
/* */
/* <h1> La liste des projets  </h1>*/
/* {% for m in mds%}*/
/*     <fieldset style=" width: 320 ;"> */
/*          */
/*      <legend>  <b> ID :  </b> {{m.id}} </legend>*/
/*      <b> titre :  </b> {{m.titre}} <br>*/
/*      <b> budget en DT:  </b> {{m.budget}} <br>*/
/*             <b> Etat :  </b> {{m.etat}}*/
/*             <br> <br> */
/*             */
/*             <td><a href="{{path('esprit_back_office_sup_projet', {'id':m.id})}}">Supprimer</a>*/
/*               */
/*             <a href="{{path('esprit_back_office_refuser_projet',{'id' : m.id})}}"> refuser </a>*/
/*                <a href="{{path('esprit_back_office_accepter_projet',{'id' : m.id})}}"> valider </a>*/
/*          </fieldset>*/
/*               <br>*/
/*            {% endfor %}  */
/*            */
/*            {%endblock  %}{# empty Twig template #}*/
/* {# empty Twig template #}*/
/* */
