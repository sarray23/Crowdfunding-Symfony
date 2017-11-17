<?php

/* EspritFrontOfficeBundle:Idee:resultat.html.twig */
class __TwigTemplate_139c70c6cd7078f704fd24e4731f524ad1dab336fbf2b18372e0de3721319000 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::ideeAllLayout.html.twig", "EspritFrontOfficeBundle:Idee:resultat.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page' => array($this, 'block_page'),
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
        echo "Résultat de la recherche";
    }

    // line 3
    public function block_page($context, array $blocks = array())
    {
        echo "Résultat de la recherche";
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
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
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
            echo "\" id=\"img\" alt=\"\$TITLE\">
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
                                        
                                            <p class=\"rs lbl\">Voter à cette idée</p>
                                            <span class=\"val\"></span>
                                            ";
            // line 45
            $this->loadTemplate("DCSRatingBundle:Rating:control.html.twig", "EspritFrontOfficeBundle:Idee:resultat.html.twig", 45)->display(array_merge($context, array("id" => ($this->getAttribute($context["idee"], "id", array()) * 10000))));
            // line 46
            echo "                                        </div>
                                        <div class=\"sep\"></div>
                                        
                                    </div>
                                    <div class=\"clear\"></div>
                                </div>
                            </div>
                        </div>
        
      
        
        

    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "    
</div>
    ";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Idee:resultat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 60,  123 => 46,  121 => 45,  100 => 27,  96 => 26,  90 => 25,  84 => 22,  75 => 15,  58 => 14,  50 => 9,  45 => 6,  42 => 5,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {%extends "EspritFrontOfficeBundle::ideeAllLayout.html.twig"%}*/
/* {%block title %}Résultat de la recherche{%endblock%}*/
/* {%block page %}Résultat de la recherche{%endblock%}*/
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
/*                                             <img src="{{asset('uploads/idee/'~idee.path)}}" id="img" alt="$TITLE">*/
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
/*                                     <div class="group-fee clearfix">*/
/*                                         <div class="fee-item">*/
/*                                             <p class="rs lbl">Nombre de votes</p>*/
/*                                             <span class="val">50%</span>*/
/*                                         */
/*                                             <p class="rs lbl">Voter à cette idée</p>*/
/*                                             <span class="val"></span>*/
/*                                             {% include 'DCSRatingBundle:Rating:control.html.twig' with {'id' : idee.id*10000} %}*/
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
