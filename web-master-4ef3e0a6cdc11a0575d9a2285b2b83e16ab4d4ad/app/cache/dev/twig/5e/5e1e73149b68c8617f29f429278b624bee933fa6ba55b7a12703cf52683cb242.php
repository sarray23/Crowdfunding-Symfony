<?php

/* EspritFrontOfficeBundle:Idee:afficheMy.html.twig */
class __TwigTemplate_0f3809616a4997ab8c89290958076601c1fc6e8e6ad3e8d20241e37a350af94b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::ideeAllLayout.html.twig", "EspritFrontOfficeBundle:Idee:afficheMy.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritFrontOfficeBundle::ideeAllLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Mes idées";
    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        // line 6
        echo "
        <div class=\"navigation\">

    ";
        // line 9
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        echo "

    
    
    
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["idee"]) {
            // line 15
            echo "        
        
   <div class=\"grid_3\">
                            <div class=\"project-short sml-thumb\">
                                <div class=\"top-project-info\">
                                    <div class=\"content-info-short clearfix\">
        <a href=\"#\" class=\"thumb-img\">
                                            <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/idee/" . $this->getAttribute($context["idee"], "path", array()))), "html", null, true);
            echo "\" id=\"img\"  >
                                        </a>
                                        <div class=\"wrap-short-detail\">
                                            <h3 class=\"rs acticle-title\"><a class=\"be-fc-orange\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_application_oneidee_idee", array("id" => $this->getAttribute($context["idee"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "titre", array()), "html", null, true);
            echo "</a></h3>
                                            <p class=\"rs tiny-desc\">Type : <a href=\"#\" class=\"fw-b fc-gray be-fc-orange\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "type", array()), "html", null, true);
            echo "</a></p>
                                            <p class=\"rs title-description\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "description", array()), "html", null, true);
            echo "</p>
                                            <p class=\"rs project-location\">
                                                <i class=\"icon iLocation\"></i>
                                                New York, NY
                                            </p>
                                        </div>
        
        </div>
                                </div>
                                <div class=\"bottom-project-info clearfix\">
                                    
                                        
                                    
                                    <div class=\"group-fee clearfix\">
                                        <div class=\"fee-item\">
                                            <p class=\"rs lbl\">Nombre de votes</p>
                                            <span class=\"val\">50%</span>
                                        
                                            <p class=\"rs lbl\"><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_application_delete_idee", array("id" => $this->getAttribute($context["idee"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></p>
                                            <span class=\"val\">
                                                <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_application_update_idee", array("id" => $this->getAttribute($context["idee"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
                                        </div>
                                        <div class=\"sep\"></div>
                                        
                                    </div>
                                    <div class=\"clear\"></div>
                                </div>
                            </div>
                        </div>
        
      
        
        

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "    
</div>
    ";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Idee:afficheMy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 62,  106 => 47,  101 => 45,  80 => 27,  76 => 26,  70 => 25,  64 => 22,  55 => 15,  51 => 14,  43 => 9,  38 => 6,  35 => 5,  29 => 2,  11 => 1,);
    }
}
/* {%extends "EspritFrontOfficeBundle::ideeAllLayout.html.twig"%}*/
/* {%block title %}Mes idées{%endblock%}*/
/* */
/* */
/* {%block container %}*/
/* */
/*         <div class="navigation">*/
/* */
/*     {{ knp_pagination_render(entities) }}*/
/* */
/*     */
/*     */
/*     */
/*     {% for idee in entities %}*/
/*         */
/*         */
/*    <div class="grid_3">*/
/*                             <div class="project-short sml-thumb">*/
/*                                 <div class="top-project-info">*/
/*                                     <div class="content-info-short clearfix">*/
/*         <a href="#" class="thumb-img">*/
/*                                             <img src="{{ asset('uploads/idee/'~idee.path)}}" id="img"  >*/
/*                                         </a>*/
/*                                         <div class="wrap-short-detail">*/
/*                                             <h3 class="rs acticle-title"><a class="be-fc-orange" href="{{path('esprit_application_oneidee_idee',{'id':idee.id})}}">{{idee.titre}}</a></h3>*/
/*                                             <p class="rs tiny-desc">Type : <a href="#" class="fw-b fc-gray be-fc-orange">{{idee.type}}</a></p>*/
/*                                             <p class="rs title-description">{{idee.description}}</p>*/
/*                                             <p class="rs project-location">*/
/*                                                 <i class="icon iLocation"></i>*/
/*                                                 New York, NY*/
/*                                             </p>*/
/*                                         </div>*/
/*         */
/*         </div>*/
/*                                 </div>*/
/*                                 <div class="bottom-project-info clearfix">*/
/*                                     */
/*                                         */
/*                                     */
/*                                     <div class="group-fee clearfix">*/
/*                                         <div class="fee-item">*/
/*                                             <p class="rs lbl">Nombre de votes</p>*/
/*                                             <span class="val">50%</span>*/
/*                                         */
/*                                             <p class="rs lbl"><a href="{{path('esprit_application_delete_idee', {'id':idee.id})}}">Supprimer</a></p>*/
/*                                             <span class="val">*/
/*                                                 <a href="{{path('esprit_application_update_idee', {'id':idee.id})}}">Modifier</a>*/
/*                                         </div>*/
/*                                         <div class="sep"></div>*/
/*                                         */
/*                                     </div>*/
/*                                     <div class="clear"></div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*         */
/*       */
/*         */
/*         */
/* */
/*     {% endfor %}*/
/*     */
/* </div>*/
/*     {%endblock%}*/
/* */
/* */
/* */
