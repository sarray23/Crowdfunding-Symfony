<?php

/* EspritFrontOfficeBundle:Competence:usersByC.html.twig */
class __TwigTemplate_841e64ac4b9ab65f5c566c01f54fe47005f87e13a8399655ddf0eba4a23290cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::layout1.html.twig", "EspritFrontOfficeBundle:Competence:usersByC.html.twig", 1);
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
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dcsrating/css/rating.css"), "html", null, true);
        echo "\" />

    <center><h1>Liste des utilisateurs ayant une Compétence Professionnelle</h1> </center>
    <form method=\"POST\">
        <input type=\"search\" name=\"search\" />
        <input type=\"submit\" value=\"rechercher\" class=\"btn btn-red btn-submit-all\" />

        </br>
        <div  class=\"tbl-header\" >
        <table border=\"2\" width=\"150\">
            <tr>

                <td>Pseudo</td>
                <td>Email</td>
                <td>Competences</td>
                <td>Note</td> 
            </tr>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usr"]) ? $context["usr"] : $this->getContext($context, "usr")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 21
            echo "
                <tr>
                    
                    <td>    ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "username", array()), "html", null, true);
            echo "     </td>
                    <td>    ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "email", array()), "html", null, true);
            echo "     </td>
                    <td>  
                        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["v"], "competences", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 28
                echo "                            
                            ";
                // line 29
                if (($this->getAttribute($context["c"], "libelleCompetence", array()) == (isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")))) {
                    // line 30
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "libelleCompetence", array()), "html", null, true);
                    echo "  ,  
                            ";
                }
                // line 32
                echo "                            
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                    </td>

        <td>";
            // line 36
            $this->loadTemplate("DCSRatingBundle:Rating:control.html.twig", "EspritFrontOfficeBundle:Competence:usersByC.html.twig", 36)->display(array_merge($context, array("id" => $this->getAttribute($context["v"], "id", array()))));
            echo "</td>
                </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </table>
        </div>
    </form>

    <center>
        <span class='st_sharethis_large' displayText='ShareThis'></span>
        <span class='st_facebook_large' displayText='Facebook'></span>
        <span class='st_twitter_large' displayText='Tweet'></span>
        <span class='st_linkedin_large' displayText='LinkedIn'></span>
        <span class='st_pinterest_large' displayText='Pinterest'></span>
        <span class='st_email_large' displayText='Email'></span>
    </center>
";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Competence:usersByC.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 39,  109 => 36,  105 => 34,  98 => 32,  92 => 30,  90 => 29,  87 => 28,  83 => 27,  78 => 25,  74 => 24,  69 => 21,  52 => 20,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "EspritFrontOfficeBundle::layout1.html.twig"%}*/
/* {%block content %}*/
/*     <link rel="stylesheet" href="{{asset('bundles/dcsrating/css/rating.css') }}" />*/
/* */
/*     <center><h1>Liste des utilisateurs ayant une Compétence Professionnelle</h1> </center>*/
/*     <form method="POST">*/
/*         <input type="search" name="search" />*/
/*         <input type="submit" value="rechercher" class="btn btn-red btn-submit-all" />*/
/* */
/*         </br>*/
/*         <div  class="tbl-header" >*/
/*         <table border="2" width="150">*/
/*             <tr>*/
/* */
/*                 <td>Pseudo</td>*/
/*                 <td>Email</td>*/
/*                 <td>Competences</td>*/
/*                 <td>Note</td> */
/*             </tr>*/
/*             {% for v in usr %}*/
/* */
/*                 <tr>*/
/*                     */
/*                     <td>    {{ v.username }}     </td>*/
/*                     <td>    {{ v.email }}     </td>*/
/*                     <td>  */
/*                         {% for c in v.competences %}*/
/*                             */
/*                             {% if c.libelleCompetence == s %}*/
/*                                 {{ c.libelleCompetence }}  ,  */
/*                             {% endif %}*/
/*                             */
/*                         {% endfor %}*/
/*                     </td>*/
/* */
/*         <td>{% include 'DCSRatingBundle:Rating:control.html.twig' with {'id' : v.id } %}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </table>*/
/*         </div>*/
/*     </form>*/
/* */
/*     <center>*/
/*         <span class='st_sharethis_large' displayText='ShareThis'></span>*/
/*         <span class='st_facebook_large' displayText='Facebook'></span>*/
/*         <span class='st_twitter_large' displayText='Tweet'></span>*/
/*         <span class='st_linkedin_large' displayText='LinkedIn'></span>*/
/*         <span class='st_pinterest_large' displayText='Pinterest'></span>*/
/*         <span class='st_email_large' displayText='Email'></span>*/
/*     </center>*/
/* {%endblock%}*/
