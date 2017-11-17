<?php

/* EspritFrontOfficeBundle:Reclamation:rechercher.html.twig */
class __TwigTemplate_5f7bcfc43502086f11b319231c3622f12c014e3933e784c9588b57128631ca2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::layout1.html.twig", "EspritFrontOfficeBundle:Reclamation:rechercher.html.twig", 1);
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
<form method=\"POST\"> 
     
<div class=\"layout-2cols\">
        <div class=\"content grid_8\">
            <div class=\"single-page\">
                <div class=\"wrapper-box box-post-comment\">
                    <div class=\"form-search\">
                        <form action=\"#\">
                            <label for=\"sys_txt_keyword\">
                                <input id=\"sys_txt_keyword\" class=\"txt-keyword\" type=\"text\" placeholder=\"Recherche réclamation\" name=\"etat\"/>
                            </label>
                            <button class=\"btn-search\" type=\"submit\"><i class=\"icon iMagnifier\"></i></button>
                            <button class=\"btn-reset-keyword\" type=\"reset\"><i class=\"icon iXHover\"></i></button>
                        </form>
                    </div>
                    <h2 class=\"common-title\">Chercher une réclamation</h2>
                    <div class=\"box-white\">
                        <form id=\"contact-form\" class=\"clearfix\" action=\"processForm.php\" method=\"post\">
                            <center><strong>Vous pouvez effectuer une recherche sur vos reclamations selon leurs états.</strong></center>
                            <center><strong>Vous pouvez utiliser cette méthodes pour vérifier si vos réclamations sont traitées par l'administrateur.</strong></center>
                        </form>
                        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("esprit_ajout_reclamation");
        echo "\" class=\"btn btn-red btn-submit-all\" >Retour</a>
                    </div>
                </div><!--end: .box-list-comment -->
            </div>
        </div><!--end: .content -->
        <div class=\"sidebar grid_4\">
            <div class=\"box-gray\">
                <h3 class=\"title-box\">Règlement</h3>
                <p class=\"rs description pb20\">Si vous voulez signaler un problème ou vous avez une question ou bien une suggestion concernant n'importe quel détaille de notre site vous pouvez nous envoyer une réclamation.</p>
                <p class=\"rs pb20\">
                    <span class=\"fw-b\">NB</span>: vous pouvez modifier votre réclamation si elle n'est pa encore visualiser par l'administrateur, sinon vous devez ajouter une autre réclamation si vous avez une détaille à rectifier.
                </p>
            </div>
        </div><!--end: .sidebar -->
        <div class=\"clear\"></div>
    </div>
    
</form>

";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Reclamation:rechercher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 25,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "EspritFrontOfficeBundle::layout1.html.twig"%}*/
/* {%block content %}*/
/* */
/* <form method="POST"> */
/*      */
/* <div class="layout-2cols">*/
/*         <div class="content grid_8">*/
/*             <div class="single-page">*/
/*                 <div class="wrapper-box box-post-comment">*/
/*                     <div class="form-search">*/
/*                         <form action="#">*/
/*                             <label for="sys_txt_keyword">*/
/*                                 <input id="sys_txt_keyword" class="txt-keyword" type="text" placeholder="Recherche réclamation" name="etat"/>*/
/*                             </label>*/
/*                             <button class="btn-search" type="submit"><i class="icon iMagnifier"></i></button>*/
/*                             <button class="btn-reset-keyword" type="reset"><i class="icon iXHover"></i></button>*/
/*                         </form>*/
/*                     </div>*/
/*                     <h2 class="common-title">Chercher une réclamation</h2>*/
/*                     <div class="box-white">*/
/*                         <form id="contact-form" class="clearfix" action="processForm.php" method="post">*/
/*                             <center><strong>Vous pouvez effectuer une recherche sur vos reclamations selon leurs états.</strong></center>*/
/*                             <center><strong>Vous pouvez utiliser cette méthodes pour vérifier si vos réclamations sont traitées par l'administrateur.</strong></center>*/
/*                         </form>*/
/*                         <a href="{{path('esprit_ajout_reclamation')}}" class="btn btn-red btn-submit-all" >Retour</a>*/
/*                     </div>*/
/*                 </div><!--end: .box-list-comment -->*/
/*             </div>*/
/*         </div><!--end: .content -->*/
/*         <div class="sidebar grid_4">*/
/*             <div class="box-gray">*/
/*                 <h3 class="title-box">Règlement</h3>*/
/*                 <p class="rs description pb20">Si vous voulez signaler un problème ou vous avez une question ou bien une suggestion concernant n'importe quel détaille de notre site vous pouvez nous envoyer une réclamation.</p>*/
/*                 <p class="rs pb20">*/
/*                     <span class="fw-b">NB</span>: vous pouvez modifier votre réclamation si elle n'est pa encore visualiser par l'administrateur, sinon vous devez ajouter une autre réclamation si vous avez une détaille à rectifier.*/
/*                 </p>*/
/*             </div>*/
/*         </div><!--end: .sidebar -->*/
/*         <div class="clear"></div>*/
/*     </div>*/
/*     */
/* </form>*/
/* */
/* {%endblock%}*/
