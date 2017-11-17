<?php

/* EspritFrontOfficeBundle:Reclamation:resultat.html.twig */
class __TwigTemplate_14a12b69f85e914dba6c1938c68813ffdadd87f965e52ef04a76091378aa30c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::layout1.html.twig", "EspritFrontOfficeBundle:Reclamation:resultat.html.twig", 1);
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) ? $context["reclamations"] : $this->getContext($context, "reclamations")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 5
            echo "    
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 7
            echo "    <div class=\"day-news\">
        
        <div class=\"layout-1cols-ceneter\">
            <div class=\"content grid_8\">
                <div class=\"project-short\">
                    <div class=\"top-project-info\">
                        <div class=\"content-info-short clearfix\">
                            <center><strong>La liste de vos reclamations est vide</strong></center>
                        </div>
                    </div><!--end: .top-project-info -->
                </div>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</ul>


    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) ? $context["reclamations"] : $this->getContext($context, "reclamations")));
        foreach ($context['_seq'] as $context["_key"] => $context["rec"]) {
            // line 26
            echo "    <div class=\"day-news\">
        <div class=\"layout-1cols-ceneter\">
            <div class=\"content grid_8\">
                <div class=\"project-short\">
                                <div class=\"top-project-info\">
                                    <div class=\"content-info-short clearfix\">
                                        
                                        <div class=\"wrap-short-detail\">
                                            <h3 class=\"rs acticle-title\"><a class=\"be-fc-orange\" href=\"#\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["rec"], "objet", array()), "html", null, true);
            echo "</a></h3>
                                            <p class=\"rs tiny-desc\">";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rec"], "dateReclamation", array()), "d/m/Y"), "html", null, true);
            echo "</p>
                                            <p class=\"rs title-description\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["rec"], "description", array()), "html", null, true);
            echo "</p><br>
                                                                            <p class=\"rs tiny-desc\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["rec"], "etat", array()), "html", null, true);
            echo "</p>
                                        </div>
                                        <p class=\"rs clearfix comment-view\">
                                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_modifier_reclamation", array("id" => $this->getAttribute($context["rec"], "id", array()))), "html", null, true);
            echo "\" class=\"fc-gray be-fc-orange\">Modifier</a>
                                            <span class=\"sep\">|</span>
                                            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_supprimer_reclamation", array("id" => $this->getAttribute($context["rec"], "id", array()))), "html", null, true);
            echo "\" class=\"fc-gray be-fc-orange\">Supprimer</a>
                                        </p>
                                    </div>
                                </div><!--end: .top-project-info -->
                            </div>
                        </div>
                    </div>
                </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    <center>  <a href=\"";
        echo $this->env->getExtension('routing')->getPath("esprit_ajout_reclamation");
        echo "\" class=\"btn btn-red btn-submit-all\" >Retour</a></center>


";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Reclamation:resultat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 51,  107 => 42,  102 => 40,  96 => 37,  92 => 36,  88 => 35,  84 => 34,  74 => 26,  70 => 25,  65 => 22,  45 => 7,  39 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "EspritFrontOfficeBundle::layout1.html.twig"%}*/
/* {%block content %}*/
/* */
/* {% for r in reclamations %}*/
/*     */
/* {% else %}*/
/*     <div class="day-news">*/
/*         */
/*         <div class="layout-1cols-ceneter">*/
/*             <div class="content grid_8">*/
/*                 <div class="project-short">*/
/*                     <div class="top-project-info">*/
/*                         <div class="content-info-short clearfix">*/
/*                             <center><strong>La liste de vos reclamations est vide</strong></center>*/
/*                         </div>*/
/*                     </div><!--end: .top-project-info -->*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endfor %}*/
/* </ul>*/
/* */
/* */
/*     {% for rec in reclamations %}*/
/*     <div class="day-news">*/
/*         <div class="layout-1cols-ceneter">*/
/*             <div class="content grid_8">*/
/*                 <div class="project-short">*/
/*                                 <div class="top-project-info">*/
/*                                     <div class="content-info-short clearfix">*/
/*                                         */
/*                                         <div class="wrap-short-detail">*/
/*                                             <h3 class="rs acticle-title"><a class="be-fc-orange" href="#">{{rec.objet}}</a></h3>*/
/*                                             <p class="rs tiny-desc">{{rec.dateReclamation|date('d/m/Y')}}</p>*/
/*                                             <p class="rs title-description">{{rec.description}}</p><br>*/
/*                                                                             <p class="rs tiny-desc">{{rec.etat}}</p>*/
/*                                         </div>*/
/*                                         <p class="rs clearfix comment-view">*/
/*                                             <a href="{{path('esprit_modifier_reclamation',{'id' : rec.id})}}" class="fc-gray be-fc-orange">Modifier</a>*/
/*                                             <span class="sep">|</span>*/
/*                                             <a href="{{path('esprit_supprimer_reclamation',{'id' : rec.id})}}" class="fc-gray be-fc-orange">Supprimer</a>*/
/*                                         </p>*/
/*                                     </div>*/
/*                                 </div><!--end: .top-project-info -->*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*     {% endfor %}*/
/*     <center>  <a href="{{path('esprit_ajout_reclamation')}}" class="btn btn-red btn-submit-all" >Retour</a></center>*/
/* */
/* */
/* {%endblock%}*/
