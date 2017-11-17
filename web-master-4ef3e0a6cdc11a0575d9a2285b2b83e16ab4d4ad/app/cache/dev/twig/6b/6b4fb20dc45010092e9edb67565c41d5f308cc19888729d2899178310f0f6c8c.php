<?php

/* EspritFrontOfficeBundle:Expert:list.html.twig */
class __TwigTemplate_a4d33bf1e93a3719a222d8cdef6a5a6d3ac23027473b5b9749dc26635bca070c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritApplicationBundle::layout.html.twig", "EspritFrontOfficeBundle:Expert:list.html.twig", 1);
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
        echo "

        <center>

<table  id=\"tableau\" border=\"1\">
    <thead>
    <tr>
        <th scope=\"col\">Id</th>
        <th scope=\"col\">Noter</th>

       
    </tr>
    </thead>
  <tfoot>
    <tr>
      <td colspan=\"5\">La liste de tous les experts</td>
    </tr>
  </tfoot>
  <tbody>
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["experts"]) ? $context["experts"] : $this->getContext($context, "experts")));
        foreach ($context['_seq'] as $context["_key"] => $context["expert"]) {
            // line 23
            echo "    <tr>
        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["expert"], "id", array()), "html", null, true);
            echo "</td>
        <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_application_aff_experts", array("id" => $this->getAttribute($context["expert"], "id", array()))), "html", null, true);
            echo "\">Afficher ses infos</a></td>
      
        
        
    </tr>
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </tbody>
</table>
        </center>


    ";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Expert:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 32,  63 => 25,  59 => 24,  56 => 23,  52 => 22,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "EspritApplicationBundle::layout.html.twig"%}*/
/* {%block container %}*/
/* */
/* */
/*         <center>*/
/* */
/* <table  id="tableau" border="1">*/
/*     <thead>*/
/*     <tr>*/
/*         <th scope="col">Id</th>*/
/*         <th scope="col">Noter</th>*/
/* */
/*        */
/*     </tr>*/
/*     </thead>*/
/*   <tfoot>*/
/*     <tr>*/
/*       <td colspan="5">La liste de tous les experts</td>*/
/*     </tr>*/
/*   </tfoot>*/
/*   <tbody>*/
/*     {% for expert in experts %}*/
/*     <tr>*/
/*         <td>{{expert.id}}</td>*/
/*         <td><a href="{{path('esprit_application_aff_experts',{'id':expert.id})}}">Afficher ses infos</a></td>*/
/*       */
/*         */
/*         */
/*     </tr>*/
/*     */
/*     {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/*         </center>*/
/* */
/* */
/*     {%endblock%}*/
/* */
/* */
/* */
