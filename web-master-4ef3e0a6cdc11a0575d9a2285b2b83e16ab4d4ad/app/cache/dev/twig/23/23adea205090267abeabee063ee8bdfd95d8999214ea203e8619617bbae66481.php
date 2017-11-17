<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_fca8d5f58bb2077c84885a276ea8294677e606a0b39e44b6910fd5c488e4e56b extends Twig_Template
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
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
   
<div class=\"layout-2cols\">
        <div class=\"content grid_8\">
            <div class=\"project-detail\">
                <div class=\"project-tab-detail tabbable accordion\">
                    <ul class=\"nav nav-tabs clearfix\">
                      <li class=\"active\"><a href=\"#\">Inscription</a></li>
                    
                   
                    
                    </ul>
                    <div class=\"tab-content\">
                        <div>
                            <h3 class=\"rs alternate-tab accordion-label\">Modifier le mot de passe</h3>
                            <div class=\"tab-pane accordion-content active\">
                                <div class=\"form form-profile\">
                                    <form action=\"#\">
                                        <div class=\"row-item clearfix\">
                                            <label class=\"lbl\" for=\"txt_name1\">Nouveau mot de passe:</label>
                                            <div class=\"val\">

                                      ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "txt")));
        echo "
 </div>
                                        </div>

<div class=\"row-item clearfix\">
                                            <label class=\"lbl\" for=\"txt_name1\">confirmer mot de passe:</label>
                                            <div class=\"val\">

                                      ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "txt")));
        echo "
 </div>
                                        </div>



 <p class=\"wrap-btn-submit rs ta-r\">
                                        <center><input type=\"submit\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-red btn-submit-all\" />
                                           </div>
                                                 
       
   
                                        </p>
                                    </form>
                                </div>
                                </div>
                        </div>
                       
                       
                  
                
                      </div>
            





    
";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 62,  68 => 40,  58 => 33,  47 => 25,  22 => 3,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}*/
/*    */
/* <div class="layout-2cols">*/
/*         <div class="content grid_8">*/
/*             <div class="project-detail">*/
/*                 <div class="project-tab-detail tabbable accordion">*/
/*                     <ul class="nav nav-tabs clearfix">*/
/*                       <li class="active"><a href="#">Inscription</a></li>*/
/*                     */
/*                    */
/*                     */
/*                     </ul>*/
/*                     <div class="tab-content">*/
/*                         <div>*/
/*                             <h3 class="rs alternate-tab accordion-label">Modifier le mot de passe</h3>*/
/*                             <div class="tab-pane accordion-content active">*/
/*                                 <div class="form form-profile">*/
/*                                     <form action="#">*/
/*                                         <div class="row-item clearfix">*/
/*                                             <label class="lbl" for="txt_name1">Nouveau mot de passe:</label>*/
/*                                             <div class="val">*/
/* */
/*                                       {{ form_widget(form.plainPassword.first , { 'attr': {'class': 'txt'} }) }}*/
/*  </div>*/
/*                                         </div>*/
/* */
/* <div class="row-item clearfix">*/
/*                                             <label class="lbl" for="txt_name1">confirmer mot de passe:</label>*/
/*                                             <div class="val">*/
/* */
/*                                       {{ form_widget(form.plainPassword.second , { 'attr': {'class': 'txt'} }) }}*/
/*  </div>*/
/*                                         </div>*/
/* */
/* */
/* */
/*  <p class="wrap-btn-submit rs ta-r">*/
/*                                         <center><input type="submit" value="{{ 'resetting.reset.submit'|trans }}" class="btn btn-red btn-submit-all" />*/
/*                                            </div>*/
/*                                                  */
/*        */
/*    */
/*                                         </p>*/
/*                                     </form>*/
/*                                 </div>*/
/*                                 </div>*/
/*                         </div>*/
/*                        */
/*                        */
/*                   */
/*                 */
/*                       </div>*/
/*             */
/* */
/* */
/* */
/* */
/* */
/*     */
/* {{ form_end(form) }}*/
/* */
/* */
/* */
