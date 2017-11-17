<?php

/* EspritFrontOfficeBundle:Competence:liste.html.twig */
class __TwigTemplate_421b41b9c634ac86d3cd9076ec84a831c9fd23fba8923788fc31e51b72a541e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritBackOfficeBundle::layout.html.twig", "EspritFrontOfficeBundle:Competence:liste.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritBackOfficeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "
    <center><h1>Liste des Compétences Professionnelles</h1>


    </center>
    <center>
        <table   class=\"features-table\">
            <thead>
                <tr>
                    <th scope=\"col\">Catégorie</th>
                    <th scope=\"col\">Libellé</th>
                    <th scope=\"col\">Modification</th>

                    <th scope=\"col\">Suppression</th>

                </tr>
            </thead>
            <tbody>

                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comps"]) ? $context["comps"] : $this->getContext($context, "comps")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 23
            echo "                    <tr>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "categorie", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "libelleCompetence", array()), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_application_update_competence", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>
                        <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_application_delete_competence", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></td>


                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </tbody>

        </table>
    </center>

";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Competence:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 32,  71 => 27,  67 => 26,  63 => 25,  59 => 24,  56 => 23,  52 => 22,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "EspritBackOfficeBundle::layout.html.twig"%}*/
/* {%block container %}*/
/* */
/*     <center><h1>Liste des Compétences Professionnelles</h1>*/
/* */
/* */
/*     </center>*/
/*     <center>*/
/*         <table   class="features-table">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th scope="col">Catégorie</th>*/
/*                     <th scope="col">Libellé</th>*/
/*                     <th scope="col">Modification</th>*/
/* */
/*                     <th scope="col">Suppression</th>*/
/* */
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/* */
/*                 {% for c in comps %}*/
/*                     <tr>*/
/*                         <td>{{c.categorie}}</td>*/
/*                         <td>{{c.libelleCompetence}}</td>*/
/*                         <td><a href="{{path('esprit_application_update_competence', {'id':c.id})}}">Modifier</a></td>*/
/*                         <td><a href="{{path('esprit_application_delete_competence',{'id':c.id})}}">Supprimer</a></td>*/
/* */
/* */
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </tbody>*/
/* */
/*         </table>*/
/*     </center>*/
/* */
/* {%endblock%}*/
/* */
/* */
/* */
