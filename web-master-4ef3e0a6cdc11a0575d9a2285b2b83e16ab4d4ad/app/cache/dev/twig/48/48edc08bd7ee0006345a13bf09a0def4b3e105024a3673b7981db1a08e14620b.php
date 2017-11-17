<?php

/* EspritFrontOfficeBundle:Idee:update.html.twig */
class __TwigTemplate_5fcb57d7b11dfa9ac0b4660f5e3a7bfe5ed9ccc99c88ddf74b638799b89ebd6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::ajoutIdee.html.twig", "EspritFrontOfficeBundle:Idee:update.html.twig", 1);
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
        echo "Modifier une idée";
    }

    // line 4
    public function block_container($context, array $blocks = array())
    {
        // line 5
        echo "    




<form   method=\"POST\" ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'enctype');
        echo ">

<div class=\"layout-2cols\">
        <div class=\"content grid_8\">
            <div class=\"project-detail\">
                <div class=\"project-tab-detail tabbable accordion\">
                    <ul class=\"nav nav-tabs clearfix\">
                      <li class=\"active\"><a href=\"#\">Modifier l'idée  </a></li>
                     </ul>
                    <div class=\"tab-content\">
                        <div>
                            <h3 class=\"rs alternate-tab accordion-label\"></h3>
                            <div class=\"tab-pane accordion-content active\">
                                <div class=\"form form-profile\">
                                    <form action=\"#\">
\t\t\t\t\t\t\t\t\t <label class=\"lbl\" for=\"txt_name1\">Titre :</label>
                                            <div class=\"val\">
                                                  ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "txt", "placeholder" => "")));
        echo "
                                               
                                                <p class=\"rs description-input\">Modifier le titre de l'idée</p>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t <label class=\"lbl\" for=\"txt_name1\">Description :</label>
                                            <div class=\"val\">
                                                  ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "txt", "placeholder" => "")));
        echo "
                                               
                                                <p class=\"rs description-input\">Modifier la description de votre idée.</p>
                                            </div>
\t\t\t\t\t\t\t\t\t <label class=\"lbl\" for=\"txt_name1\">Type:</label>
                                            <div class=\"val\">
                                                  ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget', array("attr" => array("class" => "txt", "placeholder" => "")));
        echo "
                                               
                                                <p class=\"rs description-input\">>Modifier le type de votre idée.</p>
                                            </div>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
                                            <p class=\"rs description-input\">Modifier l'image de votre idée</p>
\t\t\t\t\t\t\t\t\t</div>
                                            
                                        </div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
   
       <p class=\"wrap-btn-submit rs ta-r\">
                                            <input type=\"submit\" value=\"Modifier\" class=\"btn btn-red btn-submit-all\" />
                                             <div>
       ";
        // line 54
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
        return "EspritFrontOfficeBundle:Idee:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 54,  90 => 43,  84 => 40,  75 => 34,  65 => 27,  45 => 10,  38 => 5,  35 => 4,  29 => 2,  11 => 1,);
    }
}
/* {%extends "EspritFrontOfficeBundle::ajoutIdee.html.twig"%}*/
/* {%block title %}Modifier une idée{%endblock%}*/
/* */
/* {%block container %}*/
/*     */
/* */
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
/*                       <li class="active"><a href="#">Modifier l'idée  </a></li>*/
/*                      </ul>*/
/*                     <div class="tab-content">*/
/*                         <div>*/
/*                             <h3 class="rs alternate-tab accordion-label"></h3>*/
/*                             <div class="tab-pane accordion-content active">*/
/*                                 <div class="form form-profile">*/
/*                                     <form action="#">*/
/* 									 <label class="lbl" for="txt_name1">Titre :</label>*/
/*                                             <div class="val">*/
/*                                                   {{ form_widget(form.titre, { 'attr': {'class': 'txt', 'placeholder': "" } }) }}*/
/*                                                */
/*                                                 <p class="rs description-input">Modifier le titre de l'idée</p>*/
/*                                             </div>*/
/* 											*/
/* 											 <label class="lbl" for="txt_name1">Description :</label>*/
/*                                             <div class="val">*/
/*                                                   {{ form_widget(form.description, { 'attr': {'class': 'txt', 'placeholder': "" } }) }}*/
/*                                                */
/*                                                 <p class="rs description-input">Modifier la description de votre idée.</p>*/
/*                                             </div>*/
/* 									 <label class="lbl" for="txt_name1">Type:</label>*/
/*                                             <div class="val">*/
/*                                                   {{ form_widget(form.type, { 'attr': {'class': 'txt', 'placeholder': "" } }) }}*/
/*                                                */
/*                                                 <p class="rs description-input">>Modifier le type de votre idée.</p>*/
/*                                             </div>{{ form_widget(form.file) }}*/
/*                                             <p class="rs description-input">Modifier l'image de votre idée</p>*/
/* 									</div>*/
/*                                             */
/*                                         </div>*/
/* 									*/
/* 									*/
/*    */
/*        <p class="wrap-btn-submit rs ta-r">*/
/*                                             <input type="submit" value="Modifier" class="btn btn-red btn-submit-all" />*/
/*                                              <div>*/
/*        {{ form_end(form) }}*/
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
