<?php

/* EspritFrontOfficeBundle:Reclamation:ajout.html.twig */
class __TwigTemplate_3c18dfb7380209450031c4a26562256ab1bd41e0eeb8b819860ae83e96f625b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::layout1.html.twig", "EspritFrontOfficeBundle:Reclamation:ajout.html.twig", 1);
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
        // line 4
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 5
            echo "<form method=\"POST\"> 
<div class=\"layout-2cols\">
        <div class=\"content grid_8\">
            <div class=\"single-page\">
                <div class=\"wrapper-box box-post-comment\">
                    <h2 class=\"common-title\">Ajouter une réclamation</h2>                           
                    <div class=\"box-white\">
                        <form id=\"contact-form\" class=\"clearfix\" action=\"processForm.php\" method=\"post\">
                            <div class=\"form form-post-comment\">
                                <div class=\"left-input\">
                                    <label for=\"txt_name_contact\">
                                        <input id=\"txt_name_contact\" type=\"text\" name=\"objet\" class=\"txt fill-width txt-name\" placeholder=\"Objet\"/>
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
                                    <input type=\"submit\" class=\"btn btn-white btn-submit-comment\" value=\"Envoyer\">
                               </p>
                                <form action=\"#\">
                                        <a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("esprit_list_reclamation");
            echo "\" class=\"btn btn-red btn-submit-all\" >Mes réclamations</a>
                                        <a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("esprit_rechercher_reclamation");
            echo "\" class=\"btn btn-red btn-submit-all\" >Rechercher</a>
                                </form>
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
        } else {
            // line 54
            echo "    <h1>Vous devez etre connecté pour ajouter une reclamation</h1>
    ";
        }
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Reclamation:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 54,  68 => 32,  64 => 31,  36 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "EspritFrontOfficeBundle::layout1.html.twig"%}*/
/* {%block content %}*/
/* */
/* {% if is_granted('ROLE_USER') %}*/
/* <form method="POST"> */
/* <div class="layout-2cols">*/
/*         <div class="content grid_8">*/
/*             <div class="single-page">*/
/*                 <div class="wrapper-box box-post-comment">*/
/*                     <h2 class="common-title">Ajouter une réclamation</h2>                           */
/*                     <div class="box-white">*/
/*                         <form id="contact-form" class="clearfix" action="processForm.php" method="post">*/
/*                             <div class="form form-post-comment">*/
/*                                 <div class="left-input">*/
/*                                     <label for="txt_name_contact">*/
/*                                         <input id="txt_name_contact" type="text" name="objet" class="txt fill-width txt-name" placeholder="Objet"/>*/
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
/*                                     <input type="submit" class="btn btn-white btn-submit-comment" value="Envoyer">*/
/*                                </p>*/
/*                                 <form action="#">*/
/*                                         <a href="{{path('esprit_list_reclamation')}}" class="btn btn-red btn-submit-all" >Mes réclamations</a>*/
/*                                         <a href="{{path('esprit_rechercher_reclamation')}}" class="btn btn-red btn-submit-all" >Rechercher</a>*/
/*                                 </form>*/
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
/*     */
/* </form>*/
/* {%else%}*/
/*     <h1>Vous devez etre connecté pour ajouter une reclamation</h1>*/
/*     {%endif%}*/
/* {%endblock%}*/
