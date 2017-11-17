<?php

/* EspritFrontOfficeBundle:Expert:afficher.html.twig */
class __TwigTemplate_03080e8557250d5ea6b9c4fc79693e806e1ba90090143e25005a15234bde27d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritApplicationBundle::layout.html.twig", "EspritFrontOfficeBundle:Expert:afficher.html.twig", 1);
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
        <th scope=\"col\">Nom</th>
        <th scope=\"col\">Noter</th>

       
    </tr>
    </thead>
  <tfoot>
    <tr>
      <td colspan=\"5\">Infos sur un expert</td>
    </tr>
  </tfoot>
  <tbody>
    ";
        // line 23
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
            // line 24
            echo "    <tr>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["expert"], "id", array()), "html", null, true);
            echo "</td>
            
    ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                echo "    <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "</td>     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "

        <td >";
            // line 30
            $this->loadTemplate("DCSRatingBundle:Rating:control.html.twig", "EspritFrontOfficeBundle:Expert:afficher.html.twig", 30)->display(array_merge($context, array("id" => (isset($context["idd"]) ? $context["idd"] : $this->getContext($context, "idd")))));
            echo "</td>
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
        // line 34
        echo "    </tbody>
</table>
        </center>


    ";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Expert:afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 34,  93 => 30,  89 => 28,  78 => 27,  73 => 25,  70 => 24,  53 => 23,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "EspritApplicationBundle::layout.html.twig"%}*/
/* {%block container %}*/
/* */
/* */
/* */
/*         <center>*/
/* <table  id="tableau" border="1">*/
/*     <thead>*/
/*     <tr>*/
/*         <th scope="col">Id</th>*/
/*         <th scope="col">Nom</th>*/
/*         <th scope="col">Noter</th>*/
/* */
/*        */
/*     </tr>*/
/*     </thead>*/
/*   <tfoot>*/
/*     <tr>*/
/*       <td colspan="5">Infos sur un expert</td>*/
/*     </tr>*/
/*   </tfoot>*/
/*   <tbody>*/
/*     {% for expert in experts %}*/
/*     <tr>*/
/*         <td>{{expert.id}}</td>*/
/*             */
/*     {% for user in users %}    <td>{{user.username}}</td>     {% endfor %}*/
/* */
/* */
/*         <td >{% include 'DCSRatingBundle:Rating:control.html.twig' with {'id' : idd} %}</td>*/
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
