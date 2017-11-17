<?php

/* EspritFrontOfficeBundle:Idee:erreur.html.twig */
class __TwigTemplate_d828a86709b517c8ee541684248917adc054ad7e926e02a739f419ca97ec224a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::ideeAllLayout.html.twig", "EspritFrontOfficeBundle:Idee:erreur.html.twig", 1);
        $this->blocks = array(
            'login' => array($this, 'block_login'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritFrontOfficeBundle::ideeAllLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_login($context, array $blocks = array())
    {
        // line 3
        echo "    
";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
";
        }
        // line 8
        echo "
     <div class=\"grid_4\">
            <div class=\"form login-form\">
               
              <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                     <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                   
                    <h3 class=\"rs title-form\">Login</h3>
                    <div class=\"box-white\">
                        <h4 class=\"rs title-box\">avez vous déja un compte ?</h4>
                        <p class=\"rs\">SVP log in pour continuer.</p>
                        <div class=\"form-action\">
                            <label for=\"txt_email_login\">
                             <input  class=\"txt fill-width\"  placeholder=\"taper votre username\" type=\"text\" id=\"username\" name=\"_username\"  required=\"required\" />   
                              </label>
                               <label for=\"txt_password_login\">
                                <input  class=\"txt fill-width\"  placeholder=\"taper votre password\"  type=\"password\" id=\"password\" name=\"_password\" required=\"required\"/>
                            </label>
                        <label for=\"chk_remember\" class=\"rs pb20 clearfix\">
                                <input  type=\"checkbox\" class=\"chk-remember\"    id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                <span class=\"lbl-remember\">se seviendre de moi </span>
                            </label>        

  <p class=\"rs ta-c pb10\">
                                <button class=\"btn btn-red btn-submit\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">Login</button>
                            </p>
    
 <p class=\"rs ta-c\">
                                <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\" class=\"fc-orange\">Mot de passe oublié</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    

   

";
    }

    // line 50
    public function block_container($context, array $blocks = array())
    {
        // line 51
        echo "Erreur D'ajout";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Idee:erreur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 51,  99 => 50,  82 => 36,  75 => 32,  53 => 13,  49 => 12,  43 => 8,  37 => 6,  35 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {%extends "EspritFrontOfficeBundle::ideeAllLayout.html.twig"%}*/
/* {% block login %}*/
/*     */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% if error %}*/
/*     {{ error.messageKey|trans(error.messageData, 'security') }}*/
/* {% endif %}*/
/* */
/*      <div class="grid_4">*/
/*             <div class="form login-form">*/
/*                */
/*               <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                      <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                    */
/*                     <h3 class="rs title-form">Login</h3>*/
/*                     <div class="box-white">*/
/*                         <h4 class="rs title-box">avez vous déja un compte ?</h4>*/
/*                         <p class="rs">SVP log in pour continuer.</p>*/
/*                         <div class="form-action">*/
/*                             <label for="txt_email_login">*/
/*                              <input  class="txt fill-width"  placeholder="taper votre username" type="text" id="username" name="_username"  required="required" />   */
/*                               </label>*/
/*                                <label for="txt_password_login">*/
/*                                 <input  class="txt fill-width"  placeholder="taper votre password"  type="password" id="password" name="_password" required="required"/>*/
/*                             </label>*/
/*                         <label for="chk_remember" class="rs pb20 clearfix">*/
/*                                 <input  type="checkbox" class="chk-remember"    id="remember_me" name="_remember_me" value="on"/>*/
/*                                 <span class="lbl-remember">se seviendre de moi </span>*/
/*                             </label>        */
/* */
/*   <p class="rs ta-c pb10">*/
/*                                 <button class="btn btn-red btn-submit" type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}">Login</button>*/
/*                             </p>*/
/*     */
/*  <p class="rs ta-c">*/
/*                                 <a href="{{path('fos_user_resetting_request')}}" class="fc-orange">Mot de passe oublié</a>*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*         */
/*     */
/* */
/*    */
/* */
/* {% endblock login %}*/
/* */
/* {%block container %}*/
/* Erreur D'ajout{%endblock%}*/
