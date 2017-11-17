<?php

/* EspritFrontOfficeBundle:Projet:ListeProjet1.html.twig */
class __TwigTemplate_d3c54df406828718164917944271010b4a5c9a64f5944550cd815a120f94c910 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::projetAllLayout.html.twig", "EspritFrontOfficeBundle:Projet:ListeProjet1.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritFrontOfficeBundle::projetAllLayout.html.twig";
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
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["mds"]) ? $context["mds"] : $this->getContext($context, "mds")));
        echo "

    
    
    
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mds"]) ? $context["mds"] : $this->getContext($context, "mds")));
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
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/projets/" . $this->getAttribute($context["idee"], "path", array()))), "html", null, true);
            echo "\" id=\"img\"  >
                                        </a>
                                        <div class=\"wrap-short-detail\">
                                            <h3 class=\"rs acticle-title\"><a class=\"be-fc-orange\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_front_office_detail", array("id" => $this->getAttribute($context["idee"], "id", array()))), "html", null, true);
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
                                               Projet proposé par <br>";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 30
                echo "                                               <span class=\"val\">";
                if (($this->getAttribute($this->getAttribute($context["idee"], "idUser", array()), "id", array()) == $this->getAttribute($context["user"], "id", array()))) {
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
                                            <h4>Canaouite : ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "canaouite", array()), "html", null, true);
            echo "</h4>
                                            <center>
                                            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_application_funding", array("idprojet" => $this->getAttribute($context["idee"], "id", array()))), "html", null, true);
            echo "\"><h2>Financer</h2></a>
                                            </center>
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
        // line 63
        echo "    
</div>
    
    ";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Projet:ListeProjet1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 63,  124 => 46,  119 => 44,  104 => 31,  91 => 30,  87 => 29,  82 => 27,  76 => 26,  70 => 25,  64 => 22,  54 => 14,  50 => 13,  42 => 8,  38 => 6,  35 => 5,  29 => 2,  11 => 1,);
    }
}
/* {%extends "EspritFrontOfficeBundle::projetAllLayout.html.twig"%}*/
/* {%block title %}Toutes les idées{%endblock%}*/
/* */
/* */
/* {%block container %}*/
/*         <div class="navigation">*/
/* */
/*     {{ knp_pagination_render(mds) }}*/
/* */
/*     */
/*     */
/*     */
/*     {% for idee in mds %}*/
/*             */
/* */
/*         */
/*    <div class="grid_3">*/
/*                             <div class="project-short sml-thumb">*/
/*                                 <div class="top-project-info">*/
/*                                     <div class="content-info-short clearfix">*/
/*         <a href="#" class="thumb-img">*/
/*                                             <img src="{{ asset('uploads/projets/'~idee.path)}}" id="img"  >*/
/*                                         </a>*/
/*                                         <div class="wrap-short-detail">*/
/*                                             <h3 class="rs acticle-title"><a class="be-fc-orange" href="{{path('esprit_front_office_detail',{'id':idee.id})}}">{{idee.titre}}</a></h3>*/
/*                                             <p class="rs tiny-desc">Type : <a href="{{path('esprit_application_type_idee',{'type':idee.type})}}" class="fw-b fc-gray be-fc-orange">{{idee.type}}</a></p>*/
/*                                             <p class="rs title-description">{{idee.description}}</p>*/
/*                                             <p class="rs project-location">*/
/*                                                Projet proposé par <br>{% for user in users %}*/
/*                                                <span class="val">{% if idee.idUser.id==user.id %} -- {{user.username}} -- {%endif%}</span>*/
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
/*                                             <h4>Canaouite : {{idee.canaouite}}</h4>*/
/*                                             <center>*/
/*                                             <a href="{{path('esprit_application_funding',{'idprojet':idee.id})}}"><h2>Financer</h2></a>*/
/*                                             </center>*/
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
