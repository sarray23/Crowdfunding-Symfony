<?php

/* EspritFrontOfficeBundle:Probleme:Probleme.html.twig */
class __TwigTemplate_bb762d2cce37802754cdb81935f7f18f7b86cdb08ab224a7d80f3b672aeecafc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::layout1.html.twig", "EspritFrontOfficeBundle:Probleme:Probleme.html.twig", 1);
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
    <form method='POST'>

        <div class=\"project-tab-detail tabbable accordion\" style=\"position:relative;
             top:20px;
             left:+90px \">
            <ul class=\"nav nav-tabs clearfix\" >
                <li class=\"active\"><a href=\"#\"><h3 class=\"rs alternate-tab accordion-label\" 
                                                   > Probleme</h3></a></li>
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
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "titre", array()), 'widget', array("attr" => array("class" => "txt")));
        echo "

                                </div>
                            </div>

                            <div class=\"row-item clearfix\">
                                <label class=\"lbl\" for=\"txt_name1\">Description : </label>
                                <div class=\"val\">

                                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "description", array()), 'widget', array("attr" => array("class" => "txt")));
        echo "

                                </div>
                            </div>    


                            <div class=\"row-item clearfix\">
                                <label class=\"lbl\" for=\"txt_name1\">Type : </label>
                                <div class=\"val\">

                                    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "type", array()), 'widget', array("attr" => array("class" => "txt")));
        echo "

                                </div>
                            </div> 

                                    <div class=\"wrap-btn-submit rs ta-r \" >
                               
                                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "valider", array()), 'widget', array("attr" => array("class" => "btn btn-red btn-submit-all")));
        echo "
                                    ";
        // line 50
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
        return "EspritFrontOfficeBundle:Probleme:Probleme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 50,  88 => 49,  78 => 42,  65 => 32,  53 => 23,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "EspritFrontOfficeBundle::layout1.html.twig" %}*/
/* {%block content %}*/
/* */
/*     <form method='POST'>*/
/* */
/*         <div class="project-tab-detail tabbable accordion" style="position:relative;*/
/*              top:20px;*/
/*              left:+90px ">*/
/*             <ul class="nav nav-tabs clearfix" >*/
/*                 <li class="active"><a href="#"><h3 class="rs alternate-tab accordion-label" */
/*                                                    > Probleme</h3></a></li>*/
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
/* {%endblock%}*/
