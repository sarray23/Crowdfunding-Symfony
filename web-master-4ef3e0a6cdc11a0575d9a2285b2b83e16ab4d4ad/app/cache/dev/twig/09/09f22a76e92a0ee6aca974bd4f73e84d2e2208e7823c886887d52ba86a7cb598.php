<?php

/* EspritFrontOfficeBundle:Projet:AjoutProjet.html.twig */
class __TwigTemplate_9c504d9268a48402fc2a3418c64134afe490719424ec4bb48fac47a431f9ad4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::layout1.html.twig", "EspritFrontOfficeBundle:Projet:AjoutProjet.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    
    
    ";
        // line 5
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 6
            echo "
 <ul>
    <li class=\"current first\">
          <a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getPath("esprit_front_office_forum_homepage");
            echo "\">forum</a>
    </li>
    <li class=\"current_ancestor\">
        <a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("esprit_front_office_liste");
            echo "\">Project list</a>
        <ul class=\"menu_level_1\">
            <li class=\"current first last\">
                <a href=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("esprit_front_office_liste");
            echo "\">Search Project</a>
            </li>
        </ul>
    </li>
</ul>

    <form  enctype=\"multipart/form-data\" method='POST'>

        <div class=\"project-tab-detail tabbable accordion\" style=\"position:relative;
             top:20px;
             left:+90px \">
            <ul class=\"nav nav-tabs clearfix\" >
                <li class=\"active\"><a href=\"#\"><h3 class=\"rs alternate-tab accordion-label\" 
                                                   > Projet</h3></a></li>
            </ul>
            <div class=\"tab-content\">
                <div>
                    <h3 class=\"rs alternate-tab accordion-label\"></h3>
                    <div class=\"tab-pane accordion-content active\" style=\"width: 50%\">
                        <div class=\"form form-profile\">

                            <div class=\"row-item clearfix\">
                                <label class=\"lbl\" for=\"txt_name1\">Titre*</label>
                                <div class=\"val\">

                                    ";
            // line 40
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "titre", array()), 'widget', array("attr" => array("class" => "txt")));
            echo "

                                </div>
                            </div>

                            <div class=\"row-item clearfix\">
                                <label class=\"lbl\" for=\"txt_name1\">Description *</label>
                                <div class=\"val\">

                                    ";
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "description", array()), 'widget', array("attr" => array("class" => "txt")));
            echo "

                                </div>
                            </div>    


                            <div class=\"row-item clearfix\">
                                <label class=\"lbl\" for=\"txt_name1\">Type * </label>
                                <div class=\"val\">

                                    ";
            // line 59
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "type", array()), 'widget', array("attr" => array("class" => "txt")));
            echo "

                                </div>
                            </div> 
                            <div class=\"row-item clearfix\">
                                <label class=\"lbl\" for=\"txt_name1\">duree*</label>
                                <div class=\"val\">

                                    ";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "duree", array()), 'widget', array("attr" => array("class" => "txt")));
            echo "

                                </div>
                            </div> 
                            
                            <div class=\"row-item clearfix\">
                                <label class=\"lbl\" for=\"txt_name1\">budget *</label>
                                <div class=\"val\">

                                    ";
            // line 76
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "budget", array()), 'widget', array("attr" => array("class" => "txt")));
            echo "

                                </div>
                                     <div class=\"row-item clearfix\">
                                <label class=\"lbl\" for=\"txt_name1\">categorie*</label>
                                <div class=\"val\">

                                    ";
            // line 83
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "categorie", array()), 'widget', array("attr" => array("class" => "txt")));
            echo "

                                </div>
                            </div> 
                                    
                                    
                                  <div class=\"row-item clearfix\">
                                <label class=\"lbl\" for=\"txt_name1\">Pays*</label>
                                <div class=\"val\">

                                    ";
            // line 93
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "pays", array()), 'widget', array("attr" => array("class" => "txt")));
            echo "

                                </div>
                            </div> 
                               <div class=\"row-item clearfix\">
                                <label class=\"lbl\" for=\"txt_name1\">Fichier*</label>
                                <div class=\"val\">

                                    ";
            // line 101
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "file", array()), 'widget', array("attr" => array("class" => "txt")));
            echo "

                                </div>
                            </div>            
                               
                                      
                            </div> 
                                    
                                 
                                    
                                    
                                    
                                    

                                    <div class=\"wrap-btn-submit rs ta-r \" >
                               
                                    ";
            // line 117
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "valider", array()), 'widget', array("attr" => array("class" => "btn btn-red btn-submit-all")));
            echo "
                                    ";
            // line 118
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "_token", array()), 'row');
            echo "
                          
                            </div>     




                        </div>      
                    </div>  
















                </div>

                <br>
                <br>

                <p></p>

            </div>
        </div>
    </div>











</div>
</form>
                                    
                                    ";
        } else {
            // line 168
            echo "    <center>
        <h2>Vous devez etre connecté pour pouvoir ajouter une idée.</h2>
    <br> 
    <a href=\"";
            // line 171
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><h1>Connecter</h1></a>
    <br>
    <a href=\"";
            // line 173
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\"><h1>S'inscrire</h1></a>
    </center>
";
        }
        // line 175
        echo "        
";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Projet:AjoutProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 175,  250 => 173,  245 => 171,  240 => 168,  187 => 118,  183 => 117,  164 => 101,  153 => 93,  140 => 83,  130 => 76,  118 => 67,  107 => 59,  94 => 49,  82 => 40,  54 => 15,  48 => 12,  42 => 9,  37 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "EspritFrontOfficeBundle::layout1.html.twig" %}*/
/* {%block content %}*/
/*     */
/*     */
/*     {% if is_granted('ROLE_USER') %}*/
/* */
/*  <ul>*/
/*     <li class="current first">*/
/*           <a href="{{ path('esprit_front_office_forum_homepage') }}">forum</a>*/
/*     </li>*/
/*     <li class="current_ancestor">*/
/*         <a href="{{path('esprit_front_office_liste')}}">Project list</a>*/
/*         <ul class="menu_level_1">*/
/*             <li class="current first last">*/
/*                 <a href="{{path('esprit_front_office_liste')}}">Search Project</a>*/
/*             </li>*/
/*         </ul>*/
/*     </li>*/
/* </ul>*/
/* */
/*     <form  enctype="multipart/form-data" method='POST'>*/
/* */
/*         <div class="project-tab-detail tabbable accordion" style="position:relative;*/
/*              top:20px;*/
/*              left:+90px ">*/
/*             <ul class="nav nav-tabs clearfix" >*/
/*                 <li class="active"><a href="#"><h3 class="rs alternate-tab accordion-label" */
/*                                                    > Projet</h3></a></li>*/
/*             </ul>*/
/*             <div class="tab-content">*/
/*                 <div>*/
/*                     <h3 class="rs alternate-tab accordion-label"></h3>*/
/*                     <div class="tab-pane accordion-content active" style="width: 50%">*/
/*                         <div class="form form-profile">*/
/* */
/*                             <div class="row-item clearfix">*/
/*                                 <label class="lbl" for="txt_name1">Titre*</label>*/
/*                                 <div class="val">*/
/* */
/*                                     {{ form_widget(f.titre, { 'attr' : { 'class': 'txt' } } )  }}*/
/* */
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="row-item clearfix">*/
/*                                 <label class="lbl" for="txt_name1">Description *</label>*/
/*                                 <div class="val">*/
/* */
/*                                     {{form_widget (f.description,{'attr':{'class' : 'txt'}  }) }}*/
/* */
/*                                 </div>*/
/*                             </div>    */
/* */
/* */
/*                             <div class="row-item clearfix">*/
/*                                 <label class="lbl" for="txt_name1">Type * </label>*/
/*                                 <div class="val">*/
/* */
/*                                     {{form_widget (f.type,{'attr':{'class' : 'txt'}  }) }}*/
/* */
/*                                 </div>*/
/*                             </div> */
/*                             <div class="row-item clearfix">*/
/*                                 <label class="lbl" for="txt_name1">duree*</label>*/
/*                                 <div class="val">*/
/* */
/*                                     {{form_widget (f.duree,{'attr':{'class' : 'txt'}  }) }}*/
/* */
/*                                 </div>*/
/*                             </div> */
/*                             */
/*                             <div class="row-item clearfix">*/
/*                                 <label class="lbl" for="txt_name1">budget *</label>*/
/*                                 <div class="val">*/
/* */
/*                                     {{form_widget (f.budget,{'attr':{'class' : 'txt'}  }) }}*/
/* */
/*                                 </div>*/
/*                                      <div class="row-item clearfix">*/
/*                                 <label class="lbl" for="txt_name1">categorie*</label>*/
/*                                 <div class="val">*/
/* */
/*                                     {{form_widget (f.categorie,{'attr':{'class' : 'txt'}  }) }}*/
/* */
/*                                 </div>*/
/*                             </div> */
/*                                     */
/*                                     */
/*                                   <div class="row-item clearfix">*/
/*                                 <label class="lbl" for="txt_name1">Pays*</label>*/
/*                                 <div class="val">*/
/* */
/*                                     {{form_widget (f.pays,{'attr':{'class' : 'txt'}  }) }}*/
/* */
/*                                 </div>*/
/*                             </div> */
/*                                <div class="row-item clearfix">*/
/*                                 <label class="lbl" for="txt_name1">Fichier*</label>*/
/*                                 <div class="val">*/
/* */
/*                                     {{form_widget (f.file,{'attr':{'class' : 'txt'}  }) }}*/
/* */
/*                                 </div>*/
/*                             </div>            */
/*                                */
/*                                       */
/*                             </div> */
/*                                     */
/*                                  */
/*                                     */
/*                                     */
/*                                     */
/*                                     */
/* */
/*                                     <div class="wrap-btn-submit rs ta-r " >*/
/*                                */
/*                                     {{form_widget (f.valider,{'attr':{'class' : 'btn btn-red btn-submit-all'}  }) }}*/
/*                                     {{ form_row(f._token) }}*/
/*                           */
/*                             </div>     */
/* */
/* */
/* */
/* */
/*                         </div>      */
/*                     </div>  */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*                 </div>*/
/* */
/*                 <br>*/
/*                 <br>*/
/* */
/*                 <p></p>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* </div>*/
/* </form>*/
/*                                     */
/*                                     {%else%}*/
/*     <center>*/
/*         <h2>Vous devez etre connecté pour pouvoir ajouter une idée.</h2>*/
/*     <br> */
/*     <a href="{{path('fos_user_security_login')}}"><h1>Connecter</h1></a>*/
/*     <br>*/
/*     <a href="{{path('fos_user_registration_register')}}"><h1>S'inscrire</h1></a>*/
/*     </center>*/
/* {%endif%}        */
/* {%endblock%}*/
/* */
