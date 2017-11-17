<?php

/* EspritFrontOfficeBundle:Idee:ajout21.html.twig */
class __TwigTemplate_24e2f2666f3c9f7691ec123de6bced375a5368332533d3bd1494081c55105d00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::ajoutIdee.html.twig", "EspritFrontOfficeBundle:Idee:ajout21.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Ajouter une idée";
    }

    // line 4
    public function block_container($context, array $blocks = array())
    {
        // line 5
        echo "    



<form   method=\"POST\" ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'enctype');
        echo ">

<div class=\"layout-2cols\">
        <div class=\"content grid_8\">
            <div class=\"project-detail\">
                <div class=\"project-tab-detail tabbable accordion\">
                    <ul class=\"nav nav-tabs clearfix\">
                      <li class=\"active\"><a href=\"#\">Ajouter une idée </a></li>
                     </ul>
                    <div class=\"tab-content\">
                        <div>
                            <h3 class=\"rs alternate-tab accordion-label\">Registration</h3>
                            <div class=\"tab-pane accordion-content active\">
                                <div class=\"form form-profile\">
                                    <form action=\"#\">
\t\t\t\t\t\t\t\t\t <label class=\"lbl\" for=\"txt_name1\">Titre :</label>
                                            <div class=\"val\">
                                                  ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "txt", "placeholder" => "")));
        echo "
                                               
                                                <p class=\"rs description-input\">Le titre de l'idée</p>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t <label class=\"lbl\" for=\"txt_name1\">Description :</label>
                                            <div class=\"val\">
                                                  ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "txt", "placeholder" => "")));
        echo "
                                               
                                                <p class=\"rs description-input\">Décrire votre idée.</p>
                                            </div>
\t\t\t\t\t\t\t\t\t <label class=\"lbl\" for=\"txt_name1\">Type:</label>
                                            <div class=\"val\">
                                                  ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget', array("attr" => array("class" => "txt", "placeholder" => "")));
        echo "
                                               
                                                <p class=\"rs description-input\">Choisir le type de votre idée.</p>
                                           
\t\t\t\t\t\t\t\t\t</div>
                                             <label class=\"lbl\" for=\"txt_name1\">Image :</label>
                                            <div class=\"val\">
                                            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
                                               
                                                <p class=\"rs description-input\">Une image de votre idée</p>
                                            </div>      
                                        </div>
\t\t\t\t\t </div>\t\t\t\t
\t\t\t\t\t\t\t\t\t
                                         <p class=\"wrap-btn-submit rs ta-r\">
                                            <input type=\"submit\" value=\"Ajouter\" class=\"btn btn-red btn-submit-all\" />
                                             <div>
                                                   ";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    </div>
                                        </p>
                                    </form>
                                </div>
                                </div>
                        </div>
                       
                       
                  
                
                      </div>
            

";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Idee:ajout21.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 56,  93 => 46,  83 => 39,  74 => 33,  64 => 26,  44 => 9,  38 => 5,  35 => 4,  29 => 2,  11 => 1,);
    }
}
/* {%extends "EspritFrontOfficeBundle::ajoutIdee.html.twig"%}*/
/* {%block title %}Ajouter une idée{%endblock%}*/
/* */
/* {%block container %}*/
/*     */
/* */
/* */
/* */
/* <form   method="POST" {{ form_enctype(form.file) }}>*/
/* */
/* <div class="layout-2cols">*/
/*         <div class="content grid_8">*/
/*             <div class="project-detail">*/
/*                 <div class="project-tab-detail tabbable accordion">*/
/*                     <ul class="nav nav-tabs clearfix">*/
/*                       <li class="active"><a href="#">Ajouter une idée </a></li>*/
/*                      </ul>*/
/*                     <div class="tab-content">*/
/*                         <div>*/
/*                             <h3 class="rs alternate-tab accordion-label">Registration</h3>*/
/*                             <div class="tab-pane accordion-content active">*/
/*                                 <div class="form form-profile">*/
/*                                     <form action="#">*/
/* 									 <label class="lbl" for="txt_name1">Titre :</label>*/
/*                                             <div class="val">*/
/*                                                   {{ form_widget(form.titre, { 'attr': {'class': 'txt', 'placeholder': "" } }) }}*/
/*                                                */
/*                                                 <p class="rs description-input">Le titre de l'idée</p>*/
/*                                             </div>*/
/* 											*/
/* 											 <label class="lbl" for="txt_name1">Description :</label>*/
/*                                             <div class="val">*/
/*                                                   {{ form_widget(form.description, { 'attr': {'class': 'txt', 'placeholder': "" } }) }}*/
/*                                                */
/*                                                 <p class="rs description-input">Décrire votre idée.</p>*/
/*                                             </div>*/
/* 									 <label class="lbl" for="txt_name1">Type:</label>*/
/*                                             <div class="val">*/
/*                                                   {{ form_widget(form.type, { 'attr': {'class': 'txt', 'placeholder': "" } }) }}*/
/*                                                */
/*                                                 <p class="rs description-input">Choisir le type de votre idée.</p>*/
/*                                            */
/* 									</div>*/
/*                                              <label class="lbl" for="txt_name1">Image :</label>*/
/*                                             <div class="val">*/
/*                                             {{ form_widget(form.file) }}*/
/*                                                */
/*                                                 <p class="rs description-input">Une image de votre idée</p>*/
/*                                             </div>      */
/*                                         </div>*/
/* 					 </div>				*/
/* 									*/
/*                                          <p class="wrap-btn-submit rs ta-r">*/
/*                                             <input type="submit" value="Ajouter" class="btn btn-red btn-submit-all" />*/
/*                                              <div>*/
/*                                                    {{ form_end(form) }}*/
/* */
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
/* */
/* {%endblock%}*/
