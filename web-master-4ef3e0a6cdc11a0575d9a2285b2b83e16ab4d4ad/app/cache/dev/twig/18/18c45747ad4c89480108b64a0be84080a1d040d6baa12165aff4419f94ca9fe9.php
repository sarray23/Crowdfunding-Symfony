<?php

/* EspritFrontOfficeBundle:Idee:afficheOneIdee.html.twig */
class __TwigTemplate_cbc30298db93ffd94f0aa9ef7e7d694e631b7ee911a156f3d03780499791abb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::oneIdee.html.twig", "EspritFrontOfficeBundle:Idee:afficheOneIdee.html.twig", 1);
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
            'nombre' => array($this, 'block_nombre'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritFrontOfficeBundle::oneIdee.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 21
        $context["myVal"] = 0;
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 23
            $context["myVal"] = ((isset($context["myVal"]) ? $context["myVal"] : $this->getContext($context, "myVal")) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/idee/" . $this->getAttribute((isset($context["idee"]) ? $context["idee"] : $this->getContext($context, "idee")), "path", array()))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_application_post_expert", array("id" => $this->getAttribute((isset($context["idee"]) ? $context["idee"] : $this->getContext($context, "idee")), "id", array()))), "html", null, true);
            echo "\">Postuler</a>";
        }
        echo " ";
    }

    // line 12
    public function block_container($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["idee"]) ? $context["idee"] : $this->getContext($context, "idee")), "description", array()), "html", null, true);
        echo "
";
        // line 13
        $this->loadTemplate("DCSRatingBundle:Rating:control.html.twig", "EspritFrontOfficeBundle:Idee:afficheOneIdee.html.twig", 13)->display(array_merge($context, array("id" => ($this->getAttribute((isset($context["idee"]) ? $context["idee"] : $this->getContext($context, "idee")), "id", array()) * 10000))));
    }

    // line 17
    public function block_note($context, array $blocks = array())
    {
        echo " ";
        $this->loadTemplate("DCSRatingBundle:Rating:control.html.twig", "EspritFrontOfficeBundle:Idee:afficheOneIdee.html.twig", 17)->display(array_merge($context, array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))));
    }

    // line 19
    public function block_type($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["idee"]) ? $context["idee"] : $this->getContext($context, "idee")), "type", array()), "html", null, true);
    }

    // line 26
    public function block_nombre($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["myVal"]) ? $context["myVal"] : $this->getContext($context, "myVal")), "html", null, true);
        echo " ";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Idee:afficheOneIdee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 26,  128 => 19,  121 => 17,  117 => 13,  111 => 12,  103 => 9,  99 => 8,  91 => 7,  83 => 6,  75 => 5,  67 => 4,  59 => 3,  51 => 2,  47 => 1,  41 => 23,  37 => 22,  35 => 21,  11 => 1,);
    }
}
/* {%extends "EspritFrontOfficeBundle::oneIdee.html.twig"%}*/
/* {%block titre %} {{idee.titre}} {%endblock%}*/
/* {%block image %}<img class="img-desc" src="{{asset('uploads/idee/'~idee.path)}}" id="img1">{%endblock%}*/
/* {%block imgp %}<img src="{{asset('uploads/users/'~user.path)}}" id="imgp" alt="$USER_NAME"/>{%endblock%}*/
/* {%block username %} {{user.username}} {%endblock%}*/
/* {%block email %} {{user.email}} {%endblock%}*/
/* {%block tt %} {{idee.titre}} {%endblock%}*/
/* {%block contacter %}{% if is_granted('ROLE_USER') %}*/
/*  <a class="btn btn-red" href="{{path('esprit_application_post_expert',{'id':idee.id})}}">Postuler</a>{%endif%} {%endblock%}*/
/* */
/* */
/* {%block container %}{{idee.description}}*/
/* {% include 'DCSRatingBundle:Rating:control.html.twig' with {'id' : idee.id*10000} %}*/
/* {%endblock%}*/
/* */
/* */
/* {%block note %} {% include 'DCSRatingBundle:Rating:control.html.twig' with {'id' : user.id } %}{%endblock%}*/
/* */
/* {%block type %}{{idee.type}}{%endblock%}*/
/*     */
/* {% set myVal = 0 %}*/
/* {% for n in nbr %}*/
/*      {% set myVal = myVal + 1 %}*/
/* {%endfor%}*/
/* */
/* {%block nombre %} {{myVal}} {%endblock%}*/
/* */
/* */
