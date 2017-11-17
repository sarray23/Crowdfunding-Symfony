<?php

/* EspritFrontOfficeBundle:Projet:afficheOneProjet.html.twig */
class __TwigTemplate_27c58c4a990da3195f3086ebabc712d892d441affd655d01b2a4259e3f5044e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::oneProjet.html.twig", "EspritFrontOfficeBundle:Projet:afficheOneProjet.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'image' => array($this, 'block_image'),
            'imgp' => array($this, 'block_imgp'),
            'username' => array($this, 'block_username'),
            'email' => array($this, 'block_email'),
            'tt' => array($this, 'block_tt'),
            'contacter' => array($this, 'block_contacter'),
            'container' => array($this, 'block_container'),
            'note' => array($this, 'block_note'),
            'type' => array($this, 'block_type'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritFrontOfficeBundle::oneProjet.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_titre($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["idee"]) ? $context["idee"] : $this->getContext($context, "idee")), "titre", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_image($context, array $blocks = array())
    {
        echo "<img class=\"img-desc\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/projets/" . $this->getAttribute((isset($context["idee"]) ? $context["idee"] : $this->getContext($context, "idee")), "path", array()))), "html", null, true);
        echo "\" id=\"img1\">";
    }

    // line 4
    public function block_imgp($context, array $blocks = array())
    {
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/users/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "path", array()))), "html", null, true);
        echo "\" id=\"imgp\" alt=\"\$USER_NAME\"/>";
    }

    // line 5
    public function block_username($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo " ";
    }

    // line 6
    public function block_email($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo " ";
    }

    // line 7
    public function block_tt($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["idee"]) ? $context["idee"] : $this->getContext($context, "idee")), "titre", array()), "html", null, true);
        echo " ";
    }

    // line 8
    public function block_contacter($context, array $blocks = array())
    {
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 9
            echo " <a class=\"btn btn-red\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_application_funding", array("idprojet" => $this->getAttribute((isset($context["idee"]) ? $context["idee"] : $this->getContext($context, "idee")), "id", array()))), "html", null, true);
            echo "\">Financer</a>";
        }
        echo " ";
    }

    // line 12
    public function block_container($context, array $blocks = array())
    {
        // line 13
        echo "    
    <h3>Catégorie</h3>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["idee"]) ? $context["idee"] : $this->getContext($context, "idee")), "categorie", array()), "html", null, true);
        echo "
    <h3>Canaouite</h3>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["idee"]) ? $context["idee"] : $this->getContext($context, "idee")), "canaouite", array()), "html", null, true);
        echo "
    <h3>Description</h3>   ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["idee"]) ? $context["idee"] : $this->getContext($context, "idee")), "description", array()), "html", null, true);
        echo "
";
    }

    // line 20
    public function block_note($context, array $blocks = array())
    {
        echo " ";
        $this->loadTemplate("DCSRatingBundle:Rating:control.html.twig", "EspritFrontOfficeBundle:Projet:afficheOneProjet.html.twig", 20)->display(array_merge($context, array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))));
    }

    // line 22
    public function block_type($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["idee"]) ? $context["idee"] : $this->getContext($context, "idee")), "type", array()), "html", null, true);
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Projet:afficheOneProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 22,  117 => 20,  111 => 16,  107 => 15,  103 => 14,  100 => 13,  97 => 12,  89 => 9,  85 => 8,  77 => 7,  69 => 6,  61 => 5,  53 => 4,  45 => 3,  37 => 2,  11 => 1,);
    }
}
/* {%extends "EspritFrontOfficeBundle::oneProjet.html.twig"%}*/
/* {%block titre %} {{idee.titre}} {%endblock%}*/
/* {%block image %}<img class="img-desc" src="{{asset('uploads/projets/'~idee.path)}}" id="img1">{%endblock%}*/
/* {%block imgp %}<img src="{{asset('uploads/users/'~user.path)}}" id="imgp" alt="$USER_NAME"/>{%endblock%}*/
/* {%block username %} {{user.username}} {%endblock%}*/
/* {%block email %} {{user.email}} {%endblock%}*/
/* {%block tt %} {{idee.titre}} {%endblock%}*/
/* {%block contacter %}{% if is_granted('ROLE_USER') %}*/
/*  <a class="btn btn-red" href="{{path('esprit_application_funding',{'idprojet':idee.id})}}">Financer</a>{%endif%} {%endblock%}*/
/* */
/* */
/* {%block container %}*/
/*     */
/*     <h3>Catégorie</h3>{{idee.categorie}}*/
/*     <h3>Canaouite</h3>{{idee.canaouite}}*/
/*     <h3>Description</h3>   {{idee.description}}*/
/* {%endblock%}*/
/* */
/* */
/* {%block note %} {% include 'DCSRatingBundle:Rating:control.html.twig' with {'id' : user.id } %}{%endblock%}*/
/* */
/* {%block type %}{{idee.type}}{%endblock%}*/
/*     */
/* */
