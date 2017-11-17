<?php

/* EspritFrontOfficeBundle:Idee:ajout2.html.twig */
class __TwigTemplate_9165d0c62a23b22f72244a16d33ad96d1514b6857f66e94dddae4fdedb3c27d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::ajoutIdee.html.twig", "EspritFrontOfficeBundle:Idee:ajout2.html.twig", 1);
        $this->blocks = array(
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
    public function block_title($context, array $blocks = array())
    {
        echo "Ajouter une idée";
    }

    // line 3
    public function block_zeyed2($context, array $blocks = array())
    {
        echo " ";
    }

    // line 5
    public function block_page($context, array $blocks = array())
    {
        echo " Ajouter une idée ";
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
            echo "
<form   method=\"POST\" ";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'enctype');
            echo ">
";
            // line 13
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
<div class=\"layout-2cols\">
        <div class=\"content grid_8\">
            <div class=\"project-detail\">
                <div class=\"project-tab-detail tabbable accordion\">
                    <ul class=\"nav nav-tabs clearfix\">
                      <li class=\"active\"><a href=\"#\">Ajouter une idée  </a></li>
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
            // line 29
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "txt", "placeholder" => "")));
            echo "
                                               
                                                <p class=\"rs description-input\">Le titre de l'idée</p>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t <label class=\"lbl\" for=\"txt_name1\">Description :</label>
                                            <div class=\"val\">
                                                  ";
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "txt", "placeholder" => "")));
            echo "
                                               
                                                <p class=\"rs description-input\">Décrire votre idée.</p>
                                            </div>
\t\t\t\t\t\t\t\t\t <label class=\"lbl\" for=\"txt_name1\">Type:</label>
                                            <div class=\"val\">
                                                  ";
            // line 42
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget', array("attr" => array("class" => "txt", "placeholder" => "")));
            echo "
                                               
                                                <p class=\"rs description-input\">>Choisir le type de votre idée.</p>
                                            </div>";
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
            echo "
                                            <p class=\"rs description-input\">Une image de votre idée</p>
\t\t\t\t\t\t\t\t\t</div>
                                            
                                        </div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
   
       <p class=\"wrap-btn-submit rs ta-r\">
                                                             

                                            <input type=\"submit\" value=\"Ajouter\" class=\"btn btn-red btn-submit-all\" />
                                             <div>
";
            // line 58
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
    </div>
                                        </p>
                                    </form>
    
                                </div>
                                </div>
                        </div>
                       
                       
                  
                
                      </div>
";
        } else {
            // line 72
            echo "    <center>
        <h2>Vous devez etre connecté pour pouvoir ajouter une idée.</h2>
    <br> 
    <a href=\"";
            // line 75
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><h1>Connecter</h1></a>
    <br>
    <a href=\"";
            // line 77
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\"><h1>S'inscrire</h1></a>
    </center>
";
        }
        // line 79
        echo "        

";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Idee:ajout2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 79,  153 => 77,  148 => 75,  143 => 72,  126 => 58,  110 => 45,  104 => 42,  95 => 36,  85 => 29,  66 => 13,  62 => 12,  59 => 11,  57 => 10,  52 => 7,  49 => 6,  43 => 5,  37 => 3,  31 => 2,  11 => 1,);
    }
}
/* {%extends "EspritFrontOfficeBundle::ajoutIdee.html.twig"%}*/
/* {%block title %}Ajouter une idée{%endblock%}*/
/* {%block zeyed2 %} {%endblock%}*/
/* */
/* {%block page %} Ajouter une idée {%endblock%}*/
/* {%block container %}*/
/*     */
/* */
/* */
/* {% if is_granted('ROLE_USER') %}*/
/* */
/* <form   method="POST" {{ form_enctype(form.file) }}>*/
/* {{ form_start(form) }}*/
/* <div class="layout-2cols">*/
/*         <div class="content grid_8">*/
/*             <div class="project-detail">*/
/*                 <div class="project-tab-detail tabbable accordion">*/
/*                     <ul class="nav nav-tabs clearfix">*/
/*                       <li class="active"><a href="#">Ajouter une idée  </a></li>*/
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
/*                                                 <p class="rs description-input">>Choisir le type de votre idée.</p>*/
/*                                             </div>{{ form_widget(form.file) }}*/
/*                                             <p class="rs description-input">Une image de votre idée</p>*/
/* 									</div>*/
/*                                             */
/*                                         </div>*/
/* 									*/
/* 									*/
/*    */
/*        <p class="wrap-btn-submit rs ta-r">*/
/*                                                              */
/* */
/*                                             <input type="submit" value="Ajouter" class="btn btn-red btn-submit-all" />*/
/*                                              <div>*/
/* {{ form_end(form) }}*/
/*     </div>*/
/*                                         </p>*/
/*                                     </form>*/
/*     */
/*                                 </div>*/
/*                                 </div>*/
/*                         </div>*/
/*                        */
/*                        */
/*                   */
/*                 */
/*                       </div>*/
/* {%else%}*/
/*     <center>*/
/*         <h2>Vous devez etre connecté pour pouvoir ajouter une idée.</h2>*/
/*     <br> */
/*     <a href="{{path('fos_user_security_login')}}"><h1>Connecter</h1></a>*/
/*     <br>*/
/*     <a href="{{path('fos_user_registration_register')}}"><h1>S'inscrire</h1></a>*/
/*     </center>*/
/* {%endif%}        */
/* */
/* {%endblock%}*/
/* */
