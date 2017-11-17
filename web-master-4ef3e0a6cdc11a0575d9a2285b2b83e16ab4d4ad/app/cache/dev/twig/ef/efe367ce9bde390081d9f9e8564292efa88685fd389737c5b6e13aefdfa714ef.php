<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_a2df1e8df5641f4a7b3338f2c74cc68e1cc023d18e18475a4069f8ae79f64482 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::layout1.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <br> <br>
    <h4> <center>
";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</h4>
 <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "EspritFrontOfficeBundle::layout1.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block content %}*/
/*     <br> <br>*/
/*     <h4> <center>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </h4>*/
/*  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>*/
/* {% endblock %}*/
/* */
