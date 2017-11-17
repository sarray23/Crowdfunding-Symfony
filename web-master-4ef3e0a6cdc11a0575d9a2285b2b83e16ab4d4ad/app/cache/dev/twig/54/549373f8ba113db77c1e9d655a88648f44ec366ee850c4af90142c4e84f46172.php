<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_4410204447124404cee7c21863e09ebb34c40773f01d0d4f701926b8d6ff284d extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        // line 5
        echo "

<div class=\"content grid_8\">
            <div class=\"project-detail\">
                <div class=\"project-tab-detail tabbable accordion\">
                    <ul class=\"nav nav-tabs clearfix\">
                      <li class=\"active\"><a href=\"#\">changer le mot de passe </a></li>
                    
                   
                    
                    </ul>
 <div>
                            
                            <div class=\"tab-pane accordion-content active\">
                                <div class=\"form form-profile\">
                                    <form action=\"#\">
                                       
                                                                     
 <div class=\"row-item clearfix\">
    
                                            <label class=\"lbl\" for=\"txt_name1\">Mot de passe actuelle</label>
                                            <div class=\"val\">
                                   ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'widget', array("attr" => array("class" => "txt")));
        echo "
      
                                            </div>
                                  </div>
                                   <div class=\"row-item clearfix\">
                                          <label class=\"lbl\" for=\"txt_name1\">ma nouvelle mot de passe</label>
                                            <div class=\"val\">
                                   ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "txt")));
        echo "
      
                                            </div>
                                        </div>
                                   <div class=\"row-item clearfix\">
                                          <label class=\"lbl\" for=\"txt_name1\">confirmer le mot de passe</label>
                                            <div class=\"val\">
                                   ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "txt")));
        echo "
      
                                            </div>
                                        </div>
   
    <div>
       
        <center> <input type=\"submit\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("envoyer", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-red btn-submit-all\" />
    </div>
";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</form>
                                </div>
                                </div>
                        </div>
                       
                       
                  
                
                      </div>
                
                      ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 50,  78 => 48,  68 => 41,  58 => 34,  48 => 27,  24 => 5,  22 => 3,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } */
/* */
/* }) }}*/
/* */
/* <div class="content grid_8">*/
/*             <div class="project-detail">*/
/*                 <div class="project-tab-detail tabbable accordion">*/
/*                     <ul class="nav nav-tabs clearfix">*/
/*                       <li class="active"><a href="#">changer le mot de passe </a></li>*/
/*                     */
/*                    */
/*                     */
/*                     </ul>*/
/*  <div>*/
/*                             */
/*                             <div class="tab-pane accordion-content active">*/
/*                                 <div class="form form-profile">*/
/*                                     <form action="#">*/
/*                                        */
/*                                                                      */
/*  <div class="row-item clearfix">*/
/*     */
/*                                             <label class="lbl" for="txt_name1">Mot de passe actuelle</label>*/
/*                                             <div class="val">*/
/*                                    {{ form_widget(form.current_password, { 'attr': {'class': 'txt'} }) }}*/
/*       */
/*                                             </div>*/
/*                                   </div>*/
/*                                    <div class="row-item clearfix">*/
/*                                           <label class="lbl" for="txt_name1">ma nouvelle mot de passe</label>*/
/*                                             <div class="val">*/
/*                                    {{ form_widget(form.plainPassword.first, { 'attr': {'class': 'txt' } }) }}*/
/*       */
/*                                             </div>*/
/*                                         </div>*/
/*                                    <div class="row-item clearfix">*/
/*                                           <label class="lbl" for="txt_name1">confirmer le mot de passe</label>*/
/*                                             <div class="val">*/
/*                                    {{ form_widget(form.plainPassword.second, { 'attr': {'class': 'txt' } }) }}*/
/*       */
/*                                             </div>*/
/*                                         </div>*/
/*    */
/*     <div>*/
/*        */
/*         <center> <input type="submit" value="{{ 'envoyer'|trans }}" class="btn btn-red btn-submit-all" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* </form>*/
/*                                 </div>*/
/*                                 </div>*/
/*                         </div>*/
/*                        */
/*                        */
/*                   */
/*                 */
/*                       </div>*/
/*                 */
/*                       */
