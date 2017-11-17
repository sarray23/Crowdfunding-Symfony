<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_bfa9d4aa772e524b6f35ca756cdd47440313b5e761618db6a42b7729a3fe3aca extends Twig_Template
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
        echo "<center>
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    
        
   <div class=\"layout-2cols\">
        <div class=\"content grid_8\">
            <div class=\"project-detail\">
                <div class=\"project-tab-detail tabbable accordion\">
                    <ul class=\"nav nav-tabs clearfix\">
                      <li class=\"active\"><a href=\"#\">Changer le mot de passe </a></li>
                   
                    
                    </ul>
                    
 <div class=\"tab-content\">
                        <div>
                            <h3 class=\"rs alternate-tab accordion-label\">Inscription</h3>
                            <div class=\"tab-pane accordion-content active\">
                                <div class=\"form form-profile\">
                                    <form action=\"#\">
                                        <div class=\"row-item clearfix\">
                                       
                                                                     
 <div class=\"row-item clearfix\">
    
                                            
                                            
        ";
        // line 29
        if (array_key_exists("invalid_username", $context)) {
            // line 30
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
        ";
        }
        // line 32
        echo "         <div class=\"row-item clearfix\">
        <label class=\"lbl\" for=\"txt_name1\">Mail ou username</label>
         <div class=\"val\">
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" class=\"txt\" />
        </div>
    </div>
    <div>
        <center> <input type=\"submit\"  class=\"btn btn-red btn-submit-all\" />
 </div>

                                </div>
                                </div>
                        </div>
                       
                       
                
                      </div>
                        </div>
 </div>
         </div></div></div></div>
                </form>

</center>                     ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 32,  53 => 30,  51 => 29,  22 => 3,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <center>*/
/* <form action="{{ path('fos_user_resetting_send_email') }}" method="POST" class="fos_user_resetting_request">*/
/*     */
/*         */
/*    <div class="layout-2cols">*/
/*         <div class="content grid_8">*/
/*             <div class="project-detail">*/
/*                 <div class="project-tab-detail tabbable accordion">*/
/*                     <ul class="nav nav-tabs clearfix">*/
/*                       <li class="active"><a href="#">Changer le mot de passe </a></li>*/
/*                    */
/*                     */
/*                     </ul>*/
/*                     */
/*  <div class="tab-content">*/
/*                         <div>*/
/*                             <h3 class="rs alternate-tab accordion-label">Inscription</h3>*/
/*                             <div class="tab-pane accordion-content active">*/
/*                                 <div class="form form-profile">*/
/*                                     <form action="#">*/
/*                                         <div class="row-item clearfix">*/
/*                                        */
/*                                                                      */
/*  <div class="row-item clearfix">*/
/*     */
/*                                             */
/*                                             */
/*         {% if invalid_username is defined %}*/
/*             <p>{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}) }}</p>*/
/*         {% endif %}*/
/*          <div class="row-item clearfix">*/
/*         <label class="lbl" for="txt_name1">Mail ou username</label>*/
/*          <div class="val">*/
/*         <input type="text" id="username" name="username" required="required" class="txt" />*/
/*         </div>*/
/*     </div>*/
/*     <div>*/
/*         <center> <input type="submit"  class="btn btn-red btn-submit-all" />*/
/*  </div>*/
/* */
/*                                 </div>*/
/*                                 </div>*/
/*                         </div>*/
/*                        */
/*                        */
/*                 */
/*                       </div>*/
/*                         </div>*/
/*  </div>*/
/*          </div></div></div></div>*/
/*                 </form>*/
/* */
/* </center>                     */
