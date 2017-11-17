<?php

/* EspritFrontOfficeBundle:Idee:affiche.html.twig */
class __TwigTemplate_beadf38f8ee2702704338b132554f8a5aa768c3cadcd001d60d14df19dd2195c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::ideeAllLayout.html.twig", "EspritFrontOfficeBundle:Idee:affiche.html.twig", 1);
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
        echo "Toutes les idées";
    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        // line 6
        echo "        <div class=\"navigation\">

    ";
        // line 8
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        echo "

    
    
    
    ";
        // line 13
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
            // line 14
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
                                            <p class=\"rs tiny-desc\">Type : <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_application_type_idee", array("type" => $this->getAttribute($context["idee"], "type", array()))), "html", null, true);
            echo "\" class=\"fw-b fc-gray be-fc-orange\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "type", array()), "html", null, true);
            echo "</a></p>
                                            <p class=\"rs title-description\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "description", array()), "html", null, true);
            echo "</p>
                                            <p class=\"rs project-location\">
                                               Idée proposée par <br>";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 30
                echo "                                               <span class=\"val\">";
                if (($this->getAttribute($context["idee"], "idPorteurDeProjet", array()) == $this->getAttribute($context["user"], "id", array()))) {
                    echo " -- ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                    echo " -- ";
                }
                echo "</span>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "  
                                                
                                               
                                            </p>
                                        </div>
        
        </div>
                                </div>
                                <div class=\"bottom-project-info clearfix\">
                                    
                                        
                                    <div class=\"group-fee clearfix\">
                                        <div class=\"fee-item\">
                                            <p class=\"rs lbl\">Note actuelle</p>
                                            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rates"]) ? $context["rates"] : $this->getContext($context, "rates")));
            foreach ($context['_seq'] as $context["_key"] => $context["rate"]) {
                // line 46
                echo "                                            <span class=\"val\">";
                if (((10000 * $this->getAttribute($context["idee"], "id", array())) == $this->getAttribute($context["rate"], "id", array()))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["rate"], "rate", array()), "html", null, true);
                    echo " ";
                }
                echo "</span>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "  
                                           
                                            <p class=\"rs lbl\">Voter à cette idée</p>
                                            
                                            <span class=\"val\">
                                                ";
            // line 52
            $this->loadTemplate("DCSRatingBundle:Rating:control.html.twig", "EspritFrontOfficeBundle:Idee:affiche.html.twig", 52)->display(array_merge($context, array("id" => ($this->getAttribute($context["idee"], "id", array()) * 10000))));
            // line 53
            echo "
                                            </span>
                                            
                                        </div>
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
        // line 71
        echo "    
</div>
    
    ";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Idee:affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 71,  159 => 53,  157 => 52,  150 => 47,  137 => 46,  133 => 45,  117 => 31,  104 => 30,  100 => 29,  95 => 27,  89 => 26,  83 => 25,  77 => 22,  67 => 14,  50 => 13,  42 => 8,  38 => 6,  35 => 5,  29 => 2,  11 => 1,);
    }
}
/* {%extends "EspritFrontOfficeBundle::ideeAllLayout.html.twig"%}*/
/* {%block title %}Toutes les idées{%endblock%}*/
/* */
/* */
/* {%block container %}*/
/*         <div class="navigation">*/
/* */
/*     {{ knp_pagination_render(entities) }}*/
/* */
/*     */
/*     */
/*     */
/*     {% for idee in entities %}*/
/*             */
/* */
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
/*                                             <p class="rs tiny-desc">Type : <a href="{{path('esprit_application_type_idee',{'type':idee.type})}}" class="fw-b fc-gray be-fc-orange">{{idee.type}}</a></p>*/
/*                                             <p class="rs title-description">{{idee.description}}</p>*/
/*                                             <p class="rs project-location">*/
/*                                                Idée proposée par <br>{% for user in users %}*/
/*                                                <span class="val">{% if idee.idPorteurDeProjet==user.id %} -- {{user.username}} -- {%endif%}</span>*/
/*                                             {% endfor %}  */
/*                                                 */
/*                                                */
/*                                             </p>*/
/*                                         </div>*/
/*         */
/*         </div>*/
/*                                 </div>*/
/*                                 <div class="bottom-project-info clearfix">*/
/*                                     */
/*                                         */
/*                                     <div class="group-fee clearfix">*/
/*                                         <div class="fee-item">*/
/*                                             <p class="rs lbl">Note actuelle</p>*/
/*                                             {% for rate in rates %}*/
/*                                             <span class="val">{% if 10000*idee.id==rate.id %} {{rate.rate}} {%endif%}</span>*/
/*                                             {% endfor %}  */
/*                                            */
/*                                             <p class="rs lbl">Voter à cette idée</p>*/
/*                                             */
/*                                             <span class="val">*/
/*                                                 {% include 'DCSRatingBundle:Rating:control.html.twig' with {'id' : idee.id*10000} %}*/
/* */
/*                                             </span>*/
/*                                             */
/*                                         </div>*/
/*                                         <div class="sep"></div>*/
/*                                         */
/*                                     </div>*/
/* */
/*                                     <div class="clear"></div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*         */
/*       */
/*         */
/*         */
/*                                               */
/*     {% endfor %}*/
/*     */
/* </div>*/
/*     */
/*     {%endblock%}*/
/* */
/* */
/* */
