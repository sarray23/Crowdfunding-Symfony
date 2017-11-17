<?php

/* EspritFrontOfficeBundle:Idee:contacter.html.twig */
class __TwigTemplate_36d41e407bfea3e79c9347d724b1cb8aee8e624710d35d76c8877524e7223886 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::ajoutIdee.html.twig", "EspritFrontOfficeBundle:Idee:contacter.html.twig", 1);
        $this->blocks = array(
            'zeyed' => array($this, 'block_zeyed'),
            'title' => array($this, 'block_title'),
            'zeyed2' => array($this, 'block_zeyed2'),
            'page' => array($this, 'block_page'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritFrontOfficeBundle::ajoutIdee.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_zeyed($context, array $blocks = array())
    {
        echo " ";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Contacter ";
    }

    // line 4
    public function block_zeyed2($context, array $blocks = array())
    {
        echo " ";
    }

    // line 5
    public function block_page($context, array $blocks = array())
    {
        echo " Contacter ";
    }

    // line 6
    public function block_container($context, array $blocks = array())
    {
        // line 7
        echo "   


";
        // line 10
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 11
            echo "    <form method=\"POST\">
    
    <div class=\"layout-2cols\">
        <div class=\"content grid_8\">
            <div class=\"project-detail\">
                <div class=\"project-tab-detail tabbable accordion\">
                    <ul class=\"nav nav-tabs clearfix\">
                      <li class=\"active\"><a href=\"#\">Contacter  </a></li>
                     </ul>
                    <div class=\"tab-content\">
                        <div>
                            <h3 class=\"rs alternate-tab accordion-label\"></h3>
                            <div class=\"tab-pane accordion-content active\">
                                <div class=\"form form-profile\">
                                    <form action=\"#\">
\t\t\t\t\t\t\t\t\t <label class=\"lbl\" for=\"txt_name1\">Mot de passe :</label>
                                            <div class=\"val\">
                                                <input type=\"password\" name=\"pwd\"/>                                               
                                                <p class=\"rs description-input\"></p>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t <label class=\"lbl\" for=\"txt_name1\">Sujet</label>
                                            <div class=\"val\">
                                                    <input type=\"text\" name=\"subject\"/>                                               
                                                <p class=\"rs description-input\"></p>
                                            </div>
\t\t\t\t\t\t\t\t\t <label class=\"lbl\" for=\"txt_name1\">Corps du mail</label>
                                            <div class=\"val\">
                                                <textarea rows=\"10\" cols=\"50\" name=\"body\"/> </textarea>                                              
                                                <p class=\"rs description-input\"></p>
                                            </div>
\t\t\t\t\t\t\t\t\t</div>
                                            
                                        </div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
   
       <p class=\"wrap-btn-submit rs ta-r\">
                                                             

                                            <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-red btn-submit-all\" />
                                             <div>
    </div>
                                        </p>
                                    </form>
                                </div>
                                </div>
                        </div>
                       
                       
                  
                
                      </div>
            
    
    
    
    
   
</form>
      </center>
      
      
";
        } else {
            // line 75
            echo "    <center>
        <h2>Vous devez etre connecté.</h2>
    <br> 
    <a href=\"";
            // line 78
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><h1>Connecter</h1></a>
    <br>
    <a href=\"";
            // line 80
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\"><h1>S'inscrire</h1></a>
    </center>
";
        }
        // line 82
        echo "        
      

";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Idee:contacter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 82,  142 => 80,  137 => 78,  132 => 75,  66 => 11,  64 => 10,  59 => 7,  56 => 6,  50 => 5,  44 => 4,  38 => 3,  32 => 2,  11 => 1,);
    }
}
/* {%extends "EspritFrontOfficeBundle::ajoutIdee.html.twig"%}*/
/* {%block zeyed %} {%endblock%}*/
/* {%block title %} Contacter {%endblock%}*/
/* {%block zeyed2 %} {%endblock%}*/
/* {%block page %} Contacter {%endblock%}*/
/* {%block container %}*/
/*    */
/* */
/* */
/* {% if is_granted('ROLE_USER') %}*/
/*     <form method="POST">*/
/*     */
/*     <div class="layout-2cols">*/
/*         <div class="content grid_8">*/
/*             <div class="project-detail">*/
/*                 <div class="project-tab-detail tabbable accordion">*/
/*                     <ul class="nav nav-tabs clearfix">*/
/*                       <li class="active"><a href="#">Contacter  </a></li>*/
/*                      </ul>*/
/*                     <div class="tab-content">*/
/*                         <div>*/
/*                             <h3 class="rs alternate-tab accordion-label"></h3>*/
/*                             <div class="tab-pane accordion-content active">*/
/*                                 <div class="form form-profile">*/
/*                                     <form action="#">*/
/* 									 <label class="lbl" for="txt_name1">Mot de passe :</label>*/
/*                                             <div class="val">*/
/*                                                 <input type="password" name="pwd"/>                                               */
/*                                                 <p class="rs description-input"></p>*/
/*                                             </div>*/
/* 											*/
/* 											 <label class="lbl" for="txt_name1">Sujet</label>*/
/*                                             <div class="val">*/
/*                                                     <input type="text" name="subject"/>                                               */
/*                                                 <p class="rs description-input"></p>*/
/*                                             </div>*/
/* 									 <label class="lbl" for="txt_name1">Corps du mail</label>*/
/*                                             <div class="val">*/
/*                                                 <textarea rows="10" cols="50" name="body"/> </textarea>                                              */
/*                                                 <p class="rs description-input"></p>*/
/*                                             </div>*/
/* 									</div>*/
/*                                             */
/*                                         </div>*/
/* 									*/
/* 									*/
/*    */
/*        <p class="wrap-btn-submit rs ta-r">*/
/*                                                              */
/* */
/*                                             <input type="submit" value="Envoyer" class="btn btn-red btn-submit-all" />*/
/*                                              <div>*/
/*     </div>*/
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
/*     */
/*     */
/*     */
/*     */
/*    */
/* </form>*/
/*       </center>*/
/*       */
/*       */
/* {%else%}*/
/*     <center>*/
/*         <h2>Vous devez etre connecté.</h2>*/
/*     <br> */
/*     <a href="{{path('fos_user_security_login')}}"><h1>Connecter</h1></a>*/
/*     <br>*/
/*     <a href="{{path('fos_user_registration_register')}}"><h1>S'inscrire</h1></a>*/
/*     </center>*/
/* {%endif%}        */
/*       */
/* */
/* {%endblock%}*/
