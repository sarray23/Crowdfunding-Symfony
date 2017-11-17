<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_fdb138c3395a869cfc2cde03ad0ec102dd3ef2bee7949b856bb9787fe48b5883 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::layout1.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        echo "

    <h1>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</h1>
    ";
        // line 9
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 10
            echo "    <h1><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></h1>
    ";
        }
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  41 => 10,  39 => 9,  35 => 8,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "EspritFrontOfficeBundle::layout1.html.twig" %}*/
/* */
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block content %}*/
/* */
/* */
/*     <h1>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</h1>*/
/*     {% if targetUrl %}*/
/*     <h1><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></h1>*/
/*     {% endif %}*/
/* */
/* {% endblock content %}*/
