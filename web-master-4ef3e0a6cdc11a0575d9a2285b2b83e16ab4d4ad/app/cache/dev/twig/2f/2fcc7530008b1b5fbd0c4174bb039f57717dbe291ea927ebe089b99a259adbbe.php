<?php

/* EspritFrontOfficeBundle:Reclamation:list.html.twig */
class __TwigTemplate_57d9dbeddc19b894bd517475739029269fe2e5616a4c08e2b4668ac8230bbb56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::layout1.html.twig", "EspritFrontOfficeBundle:Reclamation:list.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'retour' => array($this, 'block_retour'),
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
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 5
            echo "    
";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
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
                        </div><br>
                        ";
            // line 16
            $this->displayBlock('retour', $context, $blocks);
            // line 17
            echo "                    </div><!--end: .top-project-info -->
                </div>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</ul>
<br><br><br>
    </center>";
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
                                        <a href=\"#\" class=\"thumb-img\">
                                            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 34
                echo "                                                ";
                if (($this->getAttribute($context["user"], "id", array()) == $this->getAttribute($context["rec"], "idP", array()))) {
                    // line 35
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/users/" . $this->getAttribute($context["user"], "path", array()))), "html", null, true);
                    echo "\" alt=\"\$TITLE\">
                                                ";
                }
                // line 37
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                                        </a>
                                        <div class=\"wrap-short-detail\">
                                            <h3 class=\"rs acticle-title\"><a class=\"be-fc-orange\" href=\"#\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["rec"], "objet", array()), "html", null, true);
            echo "</a></h3>
                                            <p class=\"rs tiny-desc\">";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rec"], "dateReclamation", array()), "d/m/Y"), "html", null, true);
            echo "</p>
                                            <p class=\"rs title-description\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["rec"], "description", array()), "html", null, true);
            echo "</p><br>
                                                                            <p class=\"rs tiny-desc\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["rec"], "etat", array()), "html", null, true);
            echo "</p>
                                        </div>
                                        <p class=\"rs clearfix comment-view\">
                                            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_modifier_reclamation", array("id" => $this->getAttribute($context["rec"], "id", array()))), "html", null, true);
            echo "\" class=\"fc-gray be-fc-orange\">Modifier</a>
                                            <span class=\"sep\">|</span>
                                            <a href=\"";
            // line 48
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
        // line 57
        echo "    

";
    }

    // line 16
    public function block_retour($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("esprit_ajout_reclamation");
        echo "\" class=\"btn btn-red btn-submit-all\" >Retour</a>";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Reclamation:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 16,  169 => 57,  154 => 48,  149 => 46,  143 => 43,  139 => 42,  135 => 41,  131 => 40,  127 => 38,  121 => 37,  115 => 35,  112 => 34,  108 => 33,  99 => 26,  95 => 25,  91 => 23,  80 => 17,  78 => 16,  67 => 7,  53 => 5,  35 => 4,  32 => 3,  29 => 2,  11 => 1,);
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
/*                         </div><br>*/
/*                         {%block retour %}<a href="{{path('esprit_ajout_reclamation')}}" class="btn btn-red btn-submit-all" >Retour</a>{%endblock%}*/
/*                     </div><!--end: .top-project-info -->*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endfor %}*/
/* </ul>*/
/* <br><br><br>*/
/*     </center>{% for rec in reclamations %}*/
/*     <div class="day-news">*/
/*         <div class="layout-1cols-ceneter">*/
/*             <div class="content grid_8">*/
/*                 <div class="project-short">*/
/*                                 <div class="top-project-info">*/
/*                                     <div class="content-info-short clearfix">*/
/*                                         <a href="#" class="thumb-img">*/
/*                                             {% for user in users %}*/
/*                                                 {% if user.id == rec.idP %}*/
/*                                             <img src="{{ asset('uploads/users/'~user.path)}}" alt="$TITLE">*/
/*                                                 {% endif %}*/
/*                                             {%endfor%}*/
/*                                         </a>*/
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
/*     */
/* */
/* {%endblock%}*/
