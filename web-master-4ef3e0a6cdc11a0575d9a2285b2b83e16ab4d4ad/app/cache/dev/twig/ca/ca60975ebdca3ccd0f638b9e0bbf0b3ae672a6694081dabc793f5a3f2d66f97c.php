<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_a3ef0d90b313c906ed411d8b91e90e8bf0e2c9bae728ab5790894633110f38a1 extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
   <div class=\"layout-2cols\">
        <div class=\"content grid_8\">
            <div class=\"project-detail\">
                <div class=\"project-tab-detail tabbable accordion\">
                    <ul class=\"nav nav-tabs clearfix\">
                      <li class=\"active\"><a href=\"#\">Mon profile </a></li>
                    
                   
                    
                    </ul>
                    <div class=\"tab-content\">
                        <div>
                            <h3 class=\"rs alternate-tab accordion-label\">Profile</h3>
                            <div class=\"tab-pane accordion-content active\">
                                <div class=\"form form-profile\">
                                    <form action=\"#\">
                                        
                                    ";
        // line 21
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo "<img src =\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/users/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "path", array()))), "html", null, true);
            echo " \"  width=\"130\" height=\"130\"alt=\"\"  > ";
        }
        // line 22
        echo "                                       <br> <br><br>
                                       <div class=\"row-item clearfix\">
                                            <label class=\"lbl\" for=\"txt_name1\">Username:</label>
                                            <div class=\"val\">
                                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "txt", "placeholder" => $this->env->getExtension('translator')->trans("form.username", array(), "FOSUserBundle"))));
        echo "
       <p class=\"rs description-input\">Votre username est affiché dans votre profil.</p>
                                            </div>
                                        </div>

<div class=\"row-item clearfix\">
                                            <label class=\"lbl\" for=\"txt_name1\">Email:</label>
                                            <div class=\"val\">
                                               
                                              ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "txt", "placeholder" => $this->env->getExtension('translator')->trans("form.username", array(), "FOSUserBundle"))));
        echo "
                                                
                                            </div>
                                        </div>    
                                              <div class=\"row-item clearfix\">
                                            <label class=\"lbl\" for=\"txt_name1\">Photo:</label>
                                            <div class=\"val\">
                                               
                                              ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget', array("attr" => array("class" => "txt", "placeholder" => $this->env->getExtension('translator')->trans("form.username", array(), "FOSUserBundle"))));
        echo "
                                                
                                            </div>
                                        </div>   
                                              <div class=\"row-item clearfix\">
                                            <label class=\"lbl\" for=\"txt_name1\">Date de naissance:</label>
                                            <div class=\"val\">
                                               
                                              ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'widget', array("attr" => array("class" => "txt", "placeholder" => $this->env->getExtension('translator')->trans("form.username", array(), "FOSUserBundle"))));
        echo "
                                                
                                            </div>
                                        </div>   
                                               <div class=\"row-item clearfix\">
                                          <label class=\"lbl\" for=\"txt_name1\">Mot de passe actuelle</label>
                                            <div class=\"val\">
                                             
                                              ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'widget');
        echo "
                                             
                                            </div>
                                        </div>   
                                              
                                              <center> <h2> <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("esprit_application_ProfilExpert");
        echo "\">Ajouter des compétences</a>    </h2>  </center> 
                                              <center><h2><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\"  > Changer votre mot de passe</a></h2></center>

    <div>
       <p class=\"wrap-btn-submit rs ta-r\">
                                        <center><input type=\"submit\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Modifier", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-red btn-submit-all\" />
                                            
  
</form>
                                </div>
                                </div>
                        </div>
                       
                       
                  
                        </div>
                      </div>
            ";
        // line 81
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                                 
            ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 81,  119 => 69,  112 => 65,  108 => 64,  100 => 59,  89 => 51,  78 => 43,  67 => 35,  55 => 26,  49 => 22,  43 => 21,  22 => 3,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}*/
/*    <div class="layout-2cols">*/
/*         <div class="content grid_8">*/
/*             <div class="project-detail">*/
/*                 <div class="project-tab-detail tabbable accordion">*/
/*                     <ul class="nav nav-tabs clearfix">*/
/*                       <li class="active"><a href="#">Mon profile </a></li>*/
/*                     */
/*                    */
/*                     */
/*                     </ul>*/
/*                     <div class="tab-content">*/
/*                         <div>*/
/*                             <h3 class="rs alternate-tab accordion-label">Profile</h3>*/
/*                             <div class="tab-pane accordion-content active">*/
/*                                 <div class="form form-profile">*/
/*                                     <form action="#">*/
/*                                         */
/*                                     {% if is_granted('IS_AUTHENTICATED_FULLY') %}<img src ="{{asset('uploads/users/'~app.user.path)}} "  width="130" height="130"alt=""  > {% endif %}*/
/*                                        <br> <br><br>*/
/*                                        <div class="row-item clearfix">*/
/*                                             <label class="lbl" for="txt_name1">Username:</label>*/
/*                                             <div class="val">*/
/*                                     {{ form_widget(form.username, { 'attr': {'class': 'txt', 'placeholder': 'form.username'|trans } }) }}*/
/*        <p class="rs description-input">Votre username est affiché dans votre profil.</p>*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/* <div class="row-item clearfix">*/
/*                                             <label class="lbl" for="txt_name1">Email:</label>*/
/*                                             <div class="val">*/
/*                                                */
/*                                               {{ form_widget(form.email, { 'attr': {'class': 'txt', 'placeholder': 'form.username'|trans } }) }}*/
/*                                                 */
/*                                             </div>*/
/*                                         </div>    */
/*                                               <div class="row-item clearfix">*/
/*                                             <label class="lbl" for="txt_name1">Photo:</label>*/
/*                                             <div class="val">*/
/*                                                */
/*                                               {{ form_widget(form.file, { 'attr': {'class': 'txt', 'placeholder': 'form.username'|trans } }) }}*/
/*                                                 */
/*                                             </div>*/
/*                                         </div>   */
/*                                               <div class="row-item clearfix">*/
/*                                             <label class="lbl" for="txt_name1">Date de naissance:</label>*/
/*                                             <div class="val">*/
/*                                                */
/*                                               {{ form_widget(form.age, { 'attr': {'class': 'txt', 'placeholder': 'form.username'|trans } }) }}*/
/*                                                 */
/*                                             </div>*/
/*                                         </div>   */
/*                                                <div class="row-item clearfix">*/
/*                                           <label class="lbl" for="txt_name1">Mot de passe actuelle</label>*/
/*                                             <div class="val">*/
/*                                              */
/*                                               {{ form_widget(form.current_password)}}*/
/*                                              */
/*                                             </div>*/
/*                                         </div>   */
/*                                               */
/*                                               <center> <h2> <a href="{{path('esprit_application_ProfilExpert')}}">Ajouter des compétences</a>    </h2>  </center> */
/*                                               <center><h2><a href="{{path('fos_user_change_password')}}"  > Changer votre mot de passe</a></h2></center>*/
/* */
/*     <div>*/
/*        <p class="wrap-btn-submit rs ta-r">*/
/*                                         <center><input type="submit" value="{{ 'Modifier'|trans }}" class="btn btn-red btn-submit-all" />*/
/*                                             */
/*   */
/* </form>*/
/*                                 </div>*/
/*                                 </div>*/
/*                         </div>*/
/*                        */
/*                        */
/*                   */
/*                         </div>*/
/*                       </div>*/
/*             {{ form_end(form)}}*/
/*                                  */
/*             */
