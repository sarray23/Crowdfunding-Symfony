<?php

/* EspritFrontOfficeBundle:Reclamation:list1.html.twig */
class __TwigTemplate_370bb04449c5acf2896ac5b31420be08ff81d192b74dd8594fb8152fbc6d1603 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::layout1.html.twig", "EspritFrontOfficeBundle:Reclamation:list1.html.twig", 1);
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
    
<div class=\"day-news\">
        
        <div class=\"layout-1cols-ceneter\">
            <div class=\"content grid_8\">
                <div class=\"project-short\">
                    <div class=\"top-project-info\">
                        <div class=\"content-info-short clearfix\">
                            <center><strong>Votre réclamation a été traitée par l'administrateur, vous ne pouvez pas la modifier!</strong></center>
                            <center><strong>Veuillez ajouter une autre réclamation si vous avez une détaille à rectifier.</strong></center>
                        </div><br>
                        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("esprit_ajout_reclamation");
        echo "\" class=\"btn btn-red btn-submit-all\" >Retour</a>
                    </div><!--end: .top-project-info -->
                </div>
            </div>
        </div>
    </div>
    

";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Reclamation:list1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 15,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "EspritFrontOfficeBundle::layout1.html.twig"%}*/
/* {%block content %}*/
/*     */
/*     */
/* <div class="day-news">*/
/*         */
/*         <div class="layout-1cols-ceneter">*/
/*             <div class="content grid_8">*/
/*                 <div class="project-short">*/
/*                     <div class="top-project-info">*/
/*                         <div class="content-info-short clearfix">*/
/*                             <center><strong>Votre réclamation a été traitée par l'administrateur, vous ne pouvez pas la modifier!</strong></center>*/
/*                             <center><strong>Veuillez ajouter une autre réclamation si vous avez une détaille à rectifier.</strong></center>*/
/*                         </div><br>*/
/*                         <a href="{{path('esprit_ajout_reclamation')}}" class="btn btn-red btn-submit-all" >Retour</a>*/
/*                     </div><!--end: .top-project-info -->*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     */
/* */
/* {%endblock%}*/
