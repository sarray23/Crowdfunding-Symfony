<?php

/* EspritBackOfficeBundle:Security:login.html.twig */
class __TwigTemplate_ac8ba3bac78d2b979e539998ceee7760643c352a6ea2f22d7b21e58e7dec2a35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::layout1.html.twig", "EspritBackOfficeBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'login' => array($this, 'block_login'),
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

    // line 4
    public function block_login($context, array $blocks = array())
    {
        // line 5
        echo "    
";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
";
        }
        // line 10
        echo "
     <div class=\"grid_4\">
            <div class=\"form login-form\">
               
              <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                     <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                   
                    <h3 class=\"rs title-form\">Login</h3>
                    <div class=\"box-white\">
                        <h4 class=\"rs title-box\">Already Have an Account?</h4>
                        <p class=\"rs\">Please log in to continue.</p>
                        <div class=\"form-action\">
                            <label for=\"txt_email_login\">
                             <input  class=\"txt fill-width\"  placeholder=\"Enter your username\" type=\"text\" id=\"username\" name=\"_username\"  required=\"required\" />   
                              </label>
                               <label for=\"txt_password_login\">
                                <input  class=\"txt fill-width\"  placeholder=\"Enter password\"  type=\"password\" id=\"password\" name=\"_password\" required=\"required\"/>
                            </label>
                        <label for=\"chk_remember\" class=\"rs pb20 clearfix\">
                                <input  type=\"checkbox\" class=\"chk-remember\"    id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                <span class=\"lbl-remember\">Remember me</span>
                            </label>        

  <p class=\"rs ta-c pb10\">
                                <button class=\"btn btn-red btn-submit\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">Login</button>
                            </p>
    
 <p class=\"rs ta-c\">
                                <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\" class=\"fc-orange\">I forgot my password</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    

   

";
    }

    public function getTemplateName()
    {
        return "EspritBackOfficeBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 38,  74 => 34,  52 => 15,  48 => 14,  42 => 10,  36 => 8,  34 => 7,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "EspritFrontOfficeBundle::layout1.html.twig" %}*/
/* */
/* */
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
/*                         <h4 class="rs title-box">Already Have an Account?</h4>*/
/*                         <p class="rs">Please log in to continue.</p>*/
/*                         <div class="form-action">*/
/*                             <label for="txt_email_login">*/
/*                              <input  class="txt fill-width"  placeholder="Enter your username" type="text" id="username" name="_username"  required="required" />   */
/*                               </label>*/
/*                                <label for="txt_password_login">*/
/*                                 <input  class="txt fill-width"  placeholder="Enter password"  type="password" id="password" name="_password" required="required"/>*/
/*                             </label>*/
/*                         <label for="chk_remember" class="rs pb20 clearfix">*/
/*                                 <input  type="checkbox" class="chk-remember"    id="remember_me" name="_remember_me" value="on"/>*/
/*                                 <span class="lbl-remember">Remember me</span>*/
/*                             </label>        */
/* */
/*   <p class="rs ta-c pb10">*/
/*                                 <button class="btn btn-red btn-submit" type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}">Login</button>*/
/*                             </p>*/
/*     */
/*  <p class="rs ta-c">*/
/*                                 <a href="{{path('fos_user_resetting_request')}}" class="fc-orange">I forgot my password</a>*/
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
