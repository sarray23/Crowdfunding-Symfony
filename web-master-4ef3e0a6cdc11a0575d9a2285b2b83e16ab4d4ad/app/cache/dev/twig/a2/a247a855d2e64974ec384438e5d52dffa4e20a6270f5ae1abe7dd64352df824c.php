<?php

/* EspritBackOfficeBundle:Idee:ajout.html.twig */
class __TwigTemplate_f605cc575967334f650e3be089ab67fd2c52e14a020842833d68b86bedc4438f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritBackOfficeBundle::layout.html.twig", "EspritBackOfficeBundle:Idee:ajout.html.twig", 1);
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
        echo "<h1> Ajout d'une idée de projet</h1> <br>


<form method=\"POST\">
    <table>
        <tr>
            <td>Titre</td><td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget');
        echo "</td>
        </tr>
        <tr>
            <td>Description</td><td>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "</td>
        </tr><tr>
            <td>Type</td><td>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget');
        echo "</td>
        </tr>
        <table>
";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</form>

";
    }

    public function getTemplateName()
    {
        return "EspritBackOfficeBundle:Idee:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 17,  50 => 14,  45 => 12,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "EspritBackOfficeBundle::layout.html.twig"%}*/
/* {%block container %}*/
/* <h1> Ajout d'une idée de projet</h1> <br>*/
/* */
/* */
/* <form method="POST">*/
/*     <table>*/
/*         <tr>*/
/*             <td>Titre</td><td>{{form_widget(form.titre)}}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>Description</td><td>{{form_widget(form.description)}}</td>*/
/*         </tr><tr>*/
/*             <td>Type</td><td>{{form_widget(form.type)}}</td>*/
/*         </tr>*/
/*         <table>*/
/* {{form(form)}}*/
/* </form>*/
/* */
/* {%endblock%}*/
