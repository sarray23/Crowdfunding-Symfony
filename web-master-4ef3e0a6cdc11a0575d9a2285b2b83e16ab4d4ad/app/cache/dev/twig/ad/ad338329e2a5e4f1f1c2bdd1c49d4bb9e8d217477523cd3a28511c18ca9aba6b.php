<?php

/* EspritBackOfficeBundle:Login:login.html.twig */
class __TwigTemplate_d56ab845c7c0f1c4f171f65b8a1da757e887bd080f113e6004be634d161c733e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EspritBackOfficeBundle::layout.html.twig", "EspritBackOfficeBundle:Login:login.html.twig", 2);
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

    // line 4
    public function block_container($context, array $blocks = array())
    {
        // line 5
        echo "    <h3> Espace Admin </h3>
    <div id=\"layout-view\" class=\"view view-login\">
        ";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "            <div class=\"bg-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
        ";
        }
        // line 10
        echo "        <div id=\"login-form\" class=\"col-md-4 col-md-offset-4\">

            <h1 class=\"text-center\">Blog Test</h1>

            <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("esprit_back_office_security_check");
        echo "\" method=\"post\" class=\"center-block\">

                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                <div class=\"form-group\">
                    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("email_address"), "html", null, true);
        echo "\"/>
                </div>
                <div class=\"form-group\">
                    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("password"), "html", null, true);
        echo "\"/>
                </div>
                <div class=\"form-group\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                </div>

                <input class=\"btn btn-primary btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />

            </form>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EspritBackOfficeBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 29,  75 => 26,  68 => 22,  60 => 19,  54 => 16,  49 => 14,  43 => 10,  37 => 8,  35 => 7,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends 'EspritBackOfficeBundle::layout.html.twig' %}*/
/* */
/* {% block container %}*/
/*     <h3> Espace Admin </h3>*/
/*     <div id="layout-view" class="view view-login">*/
/*         {% if error %}*/
/*             <div class="bg-danger">{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/*         {% endif %}*/
/*         <div id="login-form" class="col-md-4 col-md-offset-4">*/
/* */
/*             <h1 class="text-center">Blog Test</h1>*/
/* */
/*             <form action="{{ path("esprit_back_office_security_check") }}" method="post" class="center-block">*/
/* */
/*                 <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                 <div class="form-group">*/
/*                     <input class="form-control" type="text" id="username" name="_username" value="{{ last_username }}" required="required" placeholder="{{ 'email_address'|trans }}"/>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <input class="form-control" type="password" id="password" name="_password" required="required" placeholder="{{ 'password'|trans }}"/>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                     <label for="remember_me">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>*/
/*                 </div>*/
/* */
/*                 <input class="btn btn-primary btn-block" type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}" />*/
/* */
/*             </form>*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
