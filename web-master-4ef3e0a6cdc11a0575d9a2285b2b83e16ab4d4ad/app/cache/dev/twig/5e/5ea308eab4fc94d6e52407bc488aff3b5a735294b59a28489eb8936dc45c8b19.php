<?php

/* EspritFrontOfficeBundle:Projet:Update.html.twig */
class __TwigTemplate_70ac0c082335250a10aeb71a4ce49c27d7ab039deb412b89a865dcd794889939 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::layout1.html.twig", "EspritFrontOfficeBundle:Projet:Update.html.twig", 2);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<ul>
    <li class=\"current first\">
          <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_tableau");
        echo "\">Gestion de Projets</a>
    </li>
    <li class=\"current_ancestor\">
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_liste");
        echo "\">Project list</a>
        <ul class=\"menu_level_1\">
            <li class=\"current first last\">
                <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_liste");
        echo "\">Search Project</a>
            </li>
        </ul>
    </li>
</ul>
    <form method='POST'>

        <div class=\"project-tab-detail table accordion\" style=\"position:relative;
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
                                <label class=\"lbl\" for=\"txt_name1\">Titre:</label>
                                <div class=\"val\">

                                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "titre", array()), 'widget', array("attr" => array("class" => "txt")));
        echo "

                                </div>
                            </div>

                            <div class=\"row-item clearfix\">
                                <label class=\"lbl\" for=\"txt_name1\">Description : </label>
                                <div class=\"val\">

                                    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "description", array()), 'widget', array("attr" => array("class" => "txt")));
        echo "

                                </div>
                            </div>    


                            <div class=\"row-item clearfix\">
                                <label class=\"lbl\" for=\"txt_name1\">Type : </label>
                                <div class=\"val\">

                                    ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "type", array()), 'widget', array("attr" => array("class" => "txt")));
        echo "

                                </div>
                            </div> 
                            <div class=\"row-item clearfix\">
                                <label class=\"lbl\" for=\"txt_name1\">duree : </label>
                                <div class=\"val\">

                                    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "duree", array()), 'widget', array("attr" => array("class" => "txt")));
        echo "

                                </div>
                            </div> 
                            
                            <div class=\"row-item clearfix\">
                                <label class=\"lbl\" for=\"txt_name1\">budget : </label>
                                <div class=\"val\">

                                    ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "budget", array()), 'widget', array("attr" => array("class" => "txt")));
        echo "

                                </div>
                                     <div class=\"row-item clearfix\">
                                <label class=\"lbl\" for=\"txt_name1\">categorie : </label>
                                <div class=\"val\">

                                    ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "categorie", array()), 'widget', array("attr" => array("class" => "txt")));
        echo "

                                </div>
                            </div> 
                                <div class=\"row-item clearfix\">
                                <label class=\"lbl\" for=\"txt_name1\">pays : </label>
                                <div class=\"val\">

                                    ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "pays", array()), 'widget', array("attr" => array("class" => "txt")));
        echo "

                                </div>
                            </div>     
                                    
                                      
                            </div> 
                                    
                                 
                                    
                                    
                                    
                                    

                                    <div class=\"wrap-btn-submit rs ta-r \" >
                                ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "valider", array()), 'widget', array("attr" => array("class" => "btn btn-red btn-submit-all")));
        echo "
                                    ";
        // line 104
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
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Projet:Update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 104,  162 => 103,  144 => 88,  133 => 80,  123 => 73,  111 => 64,  100 => 56,  87 => 46,  75 => 37,  48 => 13,  42 => 10,  36 => 7,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "EspritFrontOfficeBundle::layout1.html.twig" %}*/
/* {%block content %}*/
/* */
/* <ul>*/
/*     <li class="current first">*/
/*           <a href="{{ path('esprit_front_office_tableau') }}">Gestion de Projets</a>*/
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
/*     <form method='POST'>*/
/* */
/*         <div class="project-tab-detail table accordion" style="position:relative;*/
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
/*                                 <label class="lbl" for="txt_name1">Titre:</label>*/
/*                                 <div class="val">*/
/* */
/*                                     {{ form_widget(f.titre, { 'attr' : { 'class': 'txt' } } )  }}*/
/* */
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="row-item clearfix">*/
/*                                 <label class="lbl" for="txt_name1">Description : </label>*/
/*                                 <div class="val">*/
/* */
/*                                     {{form_widget (f.description,{'attr':{'class' : 'txt'}  }) }}*/
/* */
/*                                 </div>*/
/*                             </div>    */
/* */
/* */
/*                             <div class="row-item clearfix">*/
/*                                 <label class="lbl" for="txt_name1">Type : </label>*/
/*                                 <div class="val">*/
/* */
/*                                     {{form_widget (f.type,{'attr':{'class' : 'txt'}  }) }}*/
/* */
/*                                 </div>*/
/*                             </div> */
/*                             <div class="row-item clearfix">*/
/*                                 <label class="lbl" for="txt_name1">duree : </label>*/
/*                                 <div class="val">*/
/* */
/*                                     {{form_widget (f.duree,{'attr':{'class' : 'txt'}  }) }}*/
/* */
/*                                 </div>*/
/*                             </div> */
/*                             */
/*                             <div class="row-item clearfix">*/
/*                                 <label class="lbl" for="txt_name1">budget : </label>*/
/*                                 <div class="val">*/
/* */
/*                                     {{form_widget (f.budget,{'attr':{'class' : 'txt'}  }) }}*/
/* */
/*                                 </div>*/
/*                                      <div class="row-item clearfix">*/
/*                                 <label class="lbl" for="txt_name1">categorie : </label>*/
/*                                 <div class="val">*/
/* */
/*                                     {{form_widget (f.categorie,{'attr':{'class' : 'txt'}  }) }}*/
/* */
/*                                 </div>*/
/*                             </div> */
/*                                 <div class="row-item clearfix">*/
/*                                 <label class="lbl" for="txt_name1">pays : </label>*/
/*                                 <div class="val">*/
/* */
/*                                     {{form_widget (f.pays,{'attr':{'class' : 'txt'}  }) }}*/
/* */
/*                                 </div>*/
/*                             </div>     */
/*                                     */
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
/*                                 {{form_widget (f.valider,{'attr':{'class' : 'btn btn-red btn-submit-all'}  }) }}*/
/*                                     {{ form_row(f._token) }}*/
/*    */
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
/* {%endblock%}*/
/* */
