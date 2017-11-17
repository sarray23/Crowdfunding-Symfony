<?php

/* EspritFrontOfficeBundle:Competence:ajout.html.twig */
class __TwigTemplate_bbe8ae572c401a3c37e8aa9727e0d0511b424627bdd5f83890350a6eefaaddb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritBackOfficeBundle::layout.html.twig", "EspritFrontOfficeBundle:Competence:ajout.html.twig", 1);
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
    <center>

        <h1> Ajout d'une Compétence</h1> <br>


        <form method=\"POST\">
            <table class=\"features-table\">
                <tr>
                    <td>Libellé</td><td>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelleCompetence", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>Catégorie</td><td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'widget');
        echo "</td>
                </tr>
                </table>
                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enregistrer", array()), 'widget', array("attr" => array("class" => "btn btn-red btn-submit-all")));
        echo "
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                    
                  <!--  <input type=\"reset\" value=\"retour\">-->
                  <a class=\"btn btn-red btn-submit-all\" href =\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("esprit_application_listCompetences");
        echo "\">Retour </a>
                  
                    </form>
                    </center>

                ";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Competence:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 22,  58 => 19,  54 => 18,  48 => 15,  42 => 12,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "EspritBackOfficeBundle::layout.html.twig"%}*/
/* {%block container %}*/
/* */
/*     <center>*/
/* */
/*         <h1> Ajout d'une Compétence</h1> <br>*/
/* */
/* */
/*         <form method="POST">*/
/*             <table class="features-table">*/
/*                 <tr>*/
/*                     <td>Libellé</td><td>{{form_widget(form.libelleCompetence)}}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Catégorie</td><td>{{form_widget(form.categorie)}}</td>*/
/*                 </tr>*/
/*                 </table>*/
/*                     {{form_widget (form.enregistrer,{'attr':{'class' : 'btn btn-red btn-submit-all'}  }) }}*/
/*                     {{ form_row(form._token) }}*/
/*                     */
/*                   <!--  <input type="reset" value="retour">-->*/
/*                   <a class="btn btn-red btn-submit-all" href ="{{path('esprit_application_listCompetences')}}">Retour </a>*/
/*                   */
/*                     </form>*/
/*                     </center>*/
/* */
/*                 {%endblock%}*/
