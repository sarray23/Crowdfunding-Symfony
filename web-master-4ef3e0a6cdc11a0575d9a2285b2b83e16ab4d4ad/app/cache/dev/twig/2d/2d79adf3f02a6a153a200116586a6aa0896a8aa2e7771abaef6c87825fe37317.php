<?php

/* EspritFrontOfficeBundle:Competence:update.html.twig */
class __TwigTemplate_520fc21c8e7f91193e014c5526f7dc0aa303c20762d5818069a8187f7a8dc4f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritBackOfficeBundle::layout.html.twig", "EspritFrontOfficeBundle:Competence:update.html.twig", 1);
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
        echo "        <center>

<h1>Modifier une Compétence </h1>
<form method=\"POST\">
            <table>
                <tr>
                    <td>Libellé</td><td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "libelleCompetence", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>Catégorie</td><td>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "categorie", array()), 'widget');
        echo "</td>
                </tr>
                </table>
                    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "enregistrer", array()), 'widget', array("attr" => array("class" => "btn btn-red btn-submit-all")));
        echo "
                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "_token", array()), 'row');
        echo "
                    
                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'errors');
        echo "

    </form>
        </center>

";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Competence:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 18,  55 => 16,  51 => 15,  45 => 12,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "EspritBackOfficeBundle::layout.html.twig"%}*/
/* {%block container %}*/
/*         <center>*/
/* */
/* <h1>Modifier une Compétence </h1>*/
/* <form method="POST">*/
/*             <table>*/
/*                 <tr>*/
/*                     <td>Libellé</td><td>{{form_widget(Form.libelleCompetence)}}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Catégorie</td><td>{{form_widget(Form.categorie)}}</td>*/
/*                 </tr>*/
/*                 </table>*/
/*                     {{form_widget (Form.enregistrer,{'attr':{'class' : 'btn btn-red btn-submit-all'}  }) }}*/
/*                     {{ form_row(Form._token) }}*/
/*                     */
/*                     {{form_errors(Form)}}*/
/* */
/*     </form>*/
/*         </center>*/
/* */
/* {%endblock%}*/
/* */
/* */
