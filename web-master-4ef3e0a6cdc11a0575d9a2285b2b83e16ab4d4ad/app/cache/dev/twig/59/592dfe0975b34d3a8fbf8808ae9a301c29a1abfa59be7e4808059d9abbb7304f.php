<?php

/* EspritFrontOfficeBundle:Projet:Funding.html.twig */
class __TwigTemplate_f41d210276a4ec86f22151ee1c9cddd63b08ce849c8725f5e76912c629125e95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::layout1.html.twig", "EspritFrontOfficeBundle:Projet:Funding.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritFrontOfficeBundle::layout1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <form action=\"\" method=\"POST\">

        <center>
            <table align=\"center\"> 

               <!-- <tr> 
                    <td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Type", array()), 'label');
        echo "</td> 
                    <td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Type", array()), 'widget');
        echo "</td> 
                </tr> -->
               <td>Type     </td> 
                    <td>DON </td>
                <tr> 
                    <td>Solde   </td> 
                    <td>";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["solde"]) ? $context["solde"] : $this->getContext($context, "solde")), "html", null, true);
        echo "</td> 
                </tr>
                <tr>
                    <td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Montant", array()), 'label');
        echo "</td> 
                    <td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Montant", array()), 'widget');
        echo "</td> 
                </tr>

            </table>

";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 26
            echo "
<div class=\"alert alert-danger\">
    <Font color=\"red\" >
    <B> ";
            // line 29
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</B>
</Font>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
          
            <br>
           ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "valider", array()), 'widget', array("attr" => array("class" => "btn btn-red btn-submit-all")));
        echo "
                                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "_token", array()), 'row');
        echo "

        </center>
    </form>
";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Projet:Funding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 38,  95 => 37,  90 => 34,  79 => 29,  74 => 26,  70 => 25,  62 => 20,  58 => 19,  52 => 16,  43 => 10,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "EspritFrontOfficeBundle::layout1.html.twig"%}*/
/* {%block content %}*/
/*     <form action="" method="POST">*/
/* */
/*         <center>*/
/*             <table align="center"> */
/* */
/*                <!-- <tr> */
/*                     <td>{{ form_label(f.Type) }}</td> */
/*                     <td>{{ form_widget(f.Type) }}</td> */
/*                 </tr> -->*/
/*                <td>Type     </td> */
/*                     <td>DON </td>*/
/*                 <tr> */
/*                     <td>Solde   </td> */
/*                     <td>{{ (solde) }}</td> */
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>{{ form_label(f.Montant) }}</td> */
/*                     <td>{{ form_widget(f.Montant) }}</td> */
/*                 </tr>*/
/* */
/*             </table>*/
/* */
/* {% for flashMessage in app.session.flashbag.get('notice') %}*/
/* */
/* <div class="alert alert-danger">*/
/*     <Font color="red" >*/
/*     <B> {{ flashMessage }}</B>*/
/* </Font>*/
/* </div>*/
/* */
/* {% endfor %}*/
/* */
/*           */
/*             <br>*/
/*            {{form_widget (f.valider,{'attr':{'class' : 'btn btn-red btn-submit-all'}  }) }}*/
/*                                     {{ form_row(f._token) }}*/
/* */
/*         </center>*/
/*     </form>*/
/* {%endblock%}*/
