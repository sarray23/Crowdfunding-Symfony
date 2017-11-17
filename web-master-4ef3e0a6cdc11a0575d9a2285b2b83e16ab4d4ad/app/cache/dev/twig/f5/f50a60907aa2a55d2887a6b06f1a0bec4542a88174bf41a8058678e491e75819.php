<?php

/* EspritFrontOfficeBundle:Reclamation:modifier.html.twig */
class __TwigTemplate_eacb2bc72a541ebeecdf534a391e61904080508e2e86f1a3773c76536f1e3022 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::layout1.html.twig", "EspritFrontOfficeBundle:Reclamation:modifier.html.twig", 1);
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
                    <h2 class=\"common-title\">Modifier votre réclamation</h2>
                    <div class=\"box-white\">
                        <form id=\"contact-form\" class=\"clearfix\" action=\"processForm.php\" method=\"post\">
                            <div class=\"form form-post-comment\">
                                <div class=\"left-input\">
                                    <label for=\"txt_name_contact\">
                                        <input id=\"txt_name_contact\" type=\"text\" name=\"objet\" class=\"txt fill-width txt-name\" placeholder=\"Objet\" />
                                    </label>
                                </div>
                                <div class=\"right-input\">
                                    <label for=\"txt_content_contact\">
                                        <textarea name=\"description\" id=\"txt_content_contact\" cols=\"30\" rows=\"10\" class=\"txt fill-width\" placeholder=\"Message\"></textarea>
                                    </label>
                                </div>
                                <div class=\"clear\"></div>
                                <p class=\"rs ta-r clearfix\">
\t\t\t\t\t\t\t\t\t<span id=\"response\">
\t\t\t\t\t\t\t\t\t</span>
                                   <input type=\"submit\" class=\"btn btn-white btn-submit-comment\" value=\"Valider\">
                               </p>
                            </div>
                        </form>
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
        return "EspritFrontOfficeBundle:Reclamation:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "EspritFrontOfficeBundle::layout1.html.twig"%}*/
/* {%block content %}*/
/* */
/* */
/* <form method="POST">*/
/*    */
/*      */
/* <div class="layout-2cols">*/
/*         <div class="content grid_8">*/
/*             <div class="single-page">*/
/*                 <div class="wrapper-box box-post-comment">*/
/*                     <h2 class="common-title">Modifier votre réclamation</h2>*/
/*                     <div class="box-white">*/
/*                         <form id="contact-form" class="clearfix" action="processForm.php" method="post">*/
/*                             <div class="form form-post-comment">*/
/*                                 <div class="left-input">*/
/*                                     <label for="txt_name_contact">*/
/*                                         <input id="txt_name_contact" type="text" name="objet" class="txt fill-width txt-name" placeholder="Objet" />*/
/*                                     </label>*/
/*                                 </div>*/
/*                                 <div class="right-input">*/
/*                                     <label for="txt_content_contact">*/
/*                                         <textarea name="description" id="txt_content_contact" cols="30" rows="10" class="txt fill-width" placeholder="Message"></textarea>*/
/*                                     </label>*/
/*                                 </div>*/
/*                                 <div class="clear"></div>*/
/*                                 <p class="rs ta-r clearfix">*/
/* 									<span id="response">*/
/* 									</span>*/
/*                                    <input type="submit" class="btn btn-white btn-submit-comment" value="Valider">*/
/*                                </p>*/
/*                             </div>*/
/*                         </form>*/
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
/*        */
/* */
/* </form>*/
/* */
/* */
/* {%endblock%}*/
