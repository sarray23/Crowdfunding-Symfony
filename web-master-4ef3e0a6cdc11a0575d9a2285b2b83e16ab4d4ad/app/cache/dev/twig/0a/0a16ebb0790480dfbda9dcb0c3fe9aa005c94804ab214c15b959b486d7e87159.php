<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_47635c6466b425a3524476d8a874185a0ac7a479fcf98dae242fd82f368ba001 extends Twig_Template
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
        // line 1
        echo "
";
        // line 3
        echo "
";
        // line 4
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 5
            echo "    <center><h1>Vous etes déja connecté</h1></center>
";
        } else {
            // line 7
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
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
                            <h3 class=\"rs alternate-tab accordion-label\">Inscription</h3>
                            <div class=\"tab-pane accordion-content active\">
                                <div class=\"form form-profile\">
                                    <form action=\"#\">
                                        <div class=\"row-item clearfix\">
                                            <label class=\"lbl\" for=\"txt_name1\">Username:</label>
                                            <div class=\"val\">
                                                  ";
            // line 32
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "txt", "placeholder" => $this->env->getExtension('translator')->trans("form.username", array(), "FOSUserBundle"))));
            echo "
                                               
                                               
                                            </div>
                                        </div>
                                          <div class=\"row-item clearfix\">
                                            <label class=\"lbl\" for=\"txt_name1\">Email:</label>
                                            <div class=\"val\">
                                               
                                                ";
            // line 41
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "txt", "placeholder" => $this->env->getExtension('translator')->trans("exemple@exemple.com", array(), "FOSUserBundle"))));
            echo "
                                                
                                            </div>
                                        </div>      
                                        
                                        <div class=\"row-item clearfix\">
                                            <label class=\"lbl\" for=\"txt_name1\">Date de naissance :</label>
                                            <div class=\"val\">
                                               
                                              ";
            // line 50
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'widget', array("attr" => array("class" => "txt", "placeholder" => "password")));
            echo "
                                                
                                            </div>
                                        </div>
                                        
                                        <div class=\"row-item clearfix\">
                                           <label class=\"lbl\" for=\"txt_name1\">votre mot de passe :</label>
                                            <div class=\"val\">
                                               
                                              ";
            // line 59
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "txt", "placeholder" => "password")));
            echo "
                                                
                                            </div>
                                        </div>
                                                <div class=\"row-item clearfix\">
                                           <label class=\"lbl\" for=\"txt_name1\">confirmer votre mot de passe :</label>
                                            <div class=\"val\">
                                               
                                              ";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "txt", "placeholder" => "password")));
            echo "
                                                
                                            </div>
                                        </div>
                                                 
                                                 
                                      
                                            <div class=\"row-item clearfix\">
                                            <label class=\"lbl\" for=\"txt_name1\">Ajouter votre photo:</label>
                                          <div class=\"val\">
                                            ";
            // line 77
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget', array("attr" => array("class" => "txt")));
            echo "
                                        </div> </div>
                                        <p class=\"wrap-btn-submit rs ta-r\">
                                        <center><input type=\"submit\" value=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Valider", array(), "FOSUserBundle"), "html", null, true);
            echo "\" class=\"btn btn-red btn-submit-all\" />
                                           </div>
                                                 
       
   
                                        </p>
                                    </form>
                                </div>
                                </div>
                        </div>
                       
                       
                  
                
                      </div>
              ";
            // line 95
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "
      ";
        }
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 95,  125 => 80,  119 => 77,  106 => 67,  95 => 59,  83 => 50,  71 => 41,  59 => 32,  31 => 7,  27 => 5,  25 => 4,  22 => 3,  19 => 1,);
    }
}
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% if is_granted('ROLE_USER') %}*/
/*     <center><h1>Vous etes déja connecté</h1></center>*/
/* {% else %}*/
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/* */
/*    */
/* */
/* */
/* */
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
/*                             <h3 class="rs alternate-tab accordion-label">Inscription</h3>*/
/*                             <div class="tab-pane accordion-content active">*/
/*                                 <div class="form form-profile">*/
/*                                     <form action="#">*/
/*                                         <div class="row-item clearfix">*/
/*                                             <label class="lbl" for="txt_name1">Username:</label>*/
/*                                             <div class="val">*/
/*                                                   {{ form_widget(form.username, { 'attr': {'class': 'txt', 'placeholder': 'form.username'|trans } }) }}*/
/*                                                */
/*                                                */
/*                                             </div>*/
/*                                         </div>*/
/*                                           <div class="row-item clearfix">*/
/*                                             <label class="lbl" for="txt_name1">Email:</label>*/
/*                                             <div class="val">*/
/*                                                */
/*                                                 {{ form_widget(form.email, { 'attr': {'class': 'txt', 'placeholder': 'exemple@exemple.com'|trans } }) }}*/
/*                                                 */
/*                                             </div>*/
/*                                         </div>      */
/*                                         */
/*                                         <div class="row-item clearfix">*/
/*                                             <label class="lbl" for="txt_name1">Date de naissance :</label>*/
/*                                             <div class="val">*/
/*                                                */
/*                                               {{ form_widget(form.age, { 'attr': {'class': 'txt', 'placeholder': 'password' } }) }}*/
/*                                                 */
/*                                             </div>*/
/*                                         </div>*/
/*                                         */
/*                                         <div class="row-item clearfix">*/
/*                                            <label class="lbl" for="txt_name1">votre mot de passe :</label>*/
/*                                             <div class="val">*/
/*                                                */
/*                                               {{ form_widget(form.plainPassword.first, { 'attr': {'class': 'txt', 'placeholder': 'password' } }) }}*/
/*                                                 */
/*                                             </div>*/
/*                                         </div>*/
/*                                                 <div class="row-item clearfix">*/
/*                                            <label class="lbl" for="txt_name1">confirmer votre mot de passe :</label>*/
/*                                             <div class="val">*/
/*                                                */
/*                                               {{ form_widget(form.plainPassword.second, { 'attr': {'class': 'txt', 'placeholder': 'password' } }) }}*/
/*                                                 */
/*                                             </div>*/
/*                                         </div>*/
/*                                                  */
/*                                                  */
/*                                       */
/*                                             <div class="row-item clearfix">*/
/*                                             <label class="lbl" for="txt_name1">Ajouter votre photo:</label>*/
/*                                           <div class="val">*/
/*                                             {{ form_widget(form.file, { 'attr': {'class': 'txt' } }) }}*/
/*                                         </div> </div>*/
/*                                         <p class="wrap-btn-submit rs ta-r">*/
/*                                         <center><input type="submit" value="{{ 'Valider'|trans }}" class="btn btn-red btn-submit-all" />*/
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
/*               {{ form_rest(form) }}*/
/*       {%endif%}*/
