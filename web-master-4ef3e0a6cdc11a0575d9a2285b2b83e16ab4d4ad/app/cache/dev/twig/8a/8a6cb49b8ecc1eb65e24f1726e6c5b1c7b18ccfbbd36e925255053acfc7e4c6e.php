<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_31238f242d193462f105700d42f477c3ccfa8b1de279e9158101d8acdf926914 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <center>
              <center><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/gif1.gif"), "html", null, true);
        echo "\"></center>

    <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo " , Ton compte a été modifié avec succée </h1> 
    <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"  > <h3>retourner à la page d'accueil </h3></a>
    
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 8,  29 => 7,  24 => 5,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <center>*/
/*               <center><img src="{{asset('images/gif1.gif')}}"></center>*/
/* */
/*     <h1>{{ user.username }} , Ton compte a été modifié avec succée </h1> */
/*     <a href="{{path('fos_user_security_login')}}"  > <h3>retourner à la page d'accueil </h3></a>*/
/*     */
/* </div>*/
/* */
