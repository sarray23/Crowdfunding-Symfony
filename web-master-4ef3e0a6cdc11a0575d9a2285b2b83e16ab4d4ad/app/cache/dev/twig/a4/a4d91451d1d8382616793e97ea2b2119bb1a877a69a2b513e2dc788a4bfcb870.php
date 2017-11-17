<?php

/* EspritFrontOfficeBundle:Projet:SupprimerProjet.html.twig */
class __TwigTemplate_82bcf0891e4448306377102374c6d773803df6a4df37b8a127847c2701468ca7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::layout1.html.twig", "EspritFrontOfficeBundle:Projet:SupprimerProjet.html.twig", 1);
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

    <br>

    <table width='60%' cellspacing='0' align=\"center\" >
        <tr>
            <th><center>Titre</center></th>
                <th><center>Description</center></th>
                <th><center>Type</center></th>
                <th><center>duree</center></th>
  <th><center>budge</center></th>
        <th></th>
    </tr>
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 17
            echo "    <tr>
        <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "titre", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "description", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "budget", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "type", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "duree", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "categorie", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "pays", array()), "html", null, true);
            echo "</td>
        <td> <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Delete", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\" >Supprimer</a>";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form', array("attr" => array("onclick" => "return confirm(\"Are you sure?\")")));
            echo "
        
        </td>
      
        
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</table>

<br>
<br>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js\"></script>
<style type=\"text/css\">
a:link {
\tcolor: #666;
\tfont-weight: bold;
\ttext-decoration:none;
}
a:visited {
\tcolor: #666;
\tfont-weight:bold;
\ttext-decoration:none;
}
a:active,
a:hover {
\tcolor: #bd5a35;
\ttext-decoration:underline;
}
table a:link {
\tcolor: #666;
\tfont-weight: bold;
\ttext-decoration:none;
}
table a:visited {
\tcolor: #999999;
\tfont-weight:bold;
\ttext-decoration:none;
}
table a:active,
table a:hover {
\tcolor: #bd5a35;
\ttext-decoration:underline;
}
table {
    
        font-family:Arial, Helvetica, sans-serif;
\tcolor:#666;
\tfont-size:12px;
\ttext-shadow: 1px 1px 0px #fff;
\tbackground:#eaebec;
\tmargin:auto;
\tborder:#ccc 1px solid;

\t-moz-border-radius:3px;
\t-webkit-border-radius:3px;
\tborder-radius:3px;

\t-moz-box-shadow: 0 1px 2px #d1d1d1;
\t-webkit-box-shadow: 0 1px 2px #d1d1d1;
\tbox-shadow: 1 1px 2px #d1d1d1;
}
table th {
\tpadding:21px 25px 22px 25px;
\tborder-top:1px solid #fafafa;
\tborder-bottom:1px solid #e0e0e0;

\tbackground: #ededed;
\tbackground: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
\tbackground: -moz-linear-gradient(top,  #ededed,  #ebebeb);
}
table th:first-child{
\ttext-align: left;
\tpadding-left:20px;
}
table tr:first-child th:first-child{
\t-moz-border-radius-topleft:3px;
\t-webkit-border-top-left-radius:3px;
\tborder-top-left-radius:3px;
}
table tr:first-child th:last-child{
\t-moz-border-radius-topright:3px;
\t-webkit-border-top-right-radius:3px;
\tborder-top-right-radius:3px;
}
table tr{
\ttext-align: center;
\tpadding-left:20px;
}
table tr td:first-child{
\ttext-align: left;
\tpadding-left:20px;
\tborder-left: 0;
}
table tr td {
\tpadding:18px;
\tborder-top: 1px solid #ffffff;
\tborder-bottom:1px solid #e0e0e0;
\tborder-left: 1px solid #e0e0e0;
\t
\tbackground: #fafafa;
\tbackground: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
\tbackground: -moz-linear-gradient(top,  #fbfbfb,  #fafafa);
}
table tr.even td{
\tbackground: #f6f6f6;
\tbackground: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
\tbackground: -moz-linear-gradient(top,  #f8f8f8,  #f6f6f6);
}
table tr:last-child td{
\tborder-bottom:0;
}
table tr:last-child td:first-child{
\t-moz-border-radius-bottomleft:3px;
\t-webkit-border-bottom-left-radius:3px;
\tborder-bottom-left-radius:3px;
}
table tr:last-child td:last-child{
\t-moz-border-radius-bottomright:3px;
\t-webkit-border-bottom-right-radius:3px;
\tborder-bottom-right-radius:3px;
}
table tr:hover td{
\tbackground: #f2f2f2;
\tbackground: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
\tbackground: -moz-linear-gradient(top,  #f2f2f2,  #f0f0f0);\t
}

</style>    
";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Projet:SupprimerProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 33,  85 => 26,  81 => 25,  77 => 24,  73 => 23,  69 => 22,  65 => 21,  61 => 20,  57 => 19,  53 => 18,  50 => 17,  46 => 16,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "EspritFrontOfficeBundle::layout1.html.twig" %}*/
/* {%block content %}*/
/* */
/* */
/*     <br>*/
/* */
/*     <table width='60%' cellspacing='0' align="center" >*/
/*         <tr>*/
/*             <th><center>Titre</center></th>*/
/*                 <th><center>Description</center></th>*/
/*                 <th><center>Type</center></th>*/
/*                 <th><center>duree</center></th>*/
/*   <th><center>budge</center></th>*/
/*         <th></th>*/
/*     </tr>*/
/*     {% for m in modeles %}*/
/*     <tr>*/
/*         <td>{{m.id}}</td>*/
/*         <td>{{m.titre}}</td>*/
/*         <td>{{m.description}}</td>*/
/*         <td>{{m.budget}}</td>*/
/*         <td>{{m.type}}</td>*/
/*         <td>{{m.duree}}</td>*/
/*         <td>{{m.categorie}}</td>*/
/*         <td>{{m.pays}}</td>*/
/*         <td> <a href="{{path('Delete', {'id':m.id})}}" >Supprimer</a>{{ form(delete_form, {'attr': {'onclick': 'return confirm("Are you sure?")'}}) }}*/
/*         */
/*         </td>*/
/*       */
/*         */
/*     </tr>*/
/*     {% endfor %}*/
/* </table>*/
/* */
/* <br>*/
/* <br>*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>*/
/* <style type="text/css">*/
/* a:link {*/
/* 	color: #666;*/
/* 	font-weight: bold;*/
/* 	text-decoration:none;*/
/* }*/
/* a:visited {*/
/* 	color: #666;*/
/* 	font-weight:bold;*/
/* 	text-decoration:none;*/
/* }*/
/* a:active,*/
/* a:hover {*/
/* 	color: #bd5a35;*/
/* 	text-decoration:underline;*/
/* }*/
/* table a:link {*/
/* 	color: #666;*/
/* 	font-weight: bold;*/
/* 	text-decoration:none;*/
/* }*/
/* table a:visited {*/
/* 	color: #999999;*/
/* 	font-weight:bold;*/
/* 	text-decoration:none;*/
/* }*/
/* table a:active,*/
/* table a:hover {*/
/* 	color: #bd5a35;*/
/* 	text-decoration:underline;*/
/* }*/
/* table {*/
/*     */
/*         font-family:Arial, Helvetica, sans-serif;*/
/* 	color:#666;*/
/* 	font-size:12px;*/
/* 	text-shadow: 1px 1px 0px #fff;*/
/* 	background:#eaebec;*/
/* 	margin:auto;*/
/* 	border:#ccc 1px solid;*/
/* */
/* 	-moz-border-radius:3px;*/
/* 	-webkit-border-radius:3px;*/
/* 	border-radius:3px;*/
/* */
/* 	-moz-box-shadow: 0 1px 2px #d1d1d1;*/
/* 	-webkit-box-shadow: 0 1px 2px #d1d1d1;*/
/* 	box-shadow: 1 1px 2px #d1d1d1;*/
/* }*/
/* table th {*/
/* 	padding:21px 25px 22px 25px;*/
/* 	border-top:1px solid #fafafa;*/
/* 	border-bottom:1px solid #e0e0e0;*/
/* */
/* 	background: #ededed;*/
/* 	background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));*/
/* 	background: -moz-linear-gradient(top,  #ededed,  #ebebeb);*/
/* }*/
/* table th:first-child{*/
/* 	text-align: left;*/
/* 	padding-left:20px;*/
/* }*/
/* table tr:first-child th:first-child{*/
/* 	-moz-border-radius-topleft:3px;*/
/* 	-webkit-border-top-left-radius:3px;*/
/* 	border-top-left-radius:3px;*/
/* }*/
/* table tr:first-child th:last-child{*/
/* 	-moz-border-radius-topright:3px;*/
/* 	-webkit-border-top-right-radius:3px;*/
/* 	border-top-right-radius:3px;*/
/* }*/
/* table tr{*/
/* 	text-align: center;*/
/* 	padding-left:20px;*/
/* }*/
/* table tr td:first-child{*/
/* 	text-align: left;*/
/* 	padding-left:20px;*/
/* 	border-left: 0;*/
/* }*/
/* table tr td {*/
/* 	padding:18px;*/
/* 	border-top: 1px solid #ffffff;*/
/* 	border-bottom:1px solid #e0e0e0;*/
/* 	border-left: 1px solid #e0e0e0;*/
/* 	*/
/* 	background: #fafafa;*/
/* 	background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));*/
/* 	background: -moz-linear-gradient(top,  #fbfbfb,  #fafafa);*/
/* }*/
/* table tr.even td{*/
/* 	background: #f6f6f6;*/
/* 	background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));*/
/* 	background: -moz-linear-gradient(top,  #f8f8f8,  #f6f6f6);*/
/* }*/
/* table tr:last-child td{*/
/* 	border-bottom:0;*/
/* }*/
/* table tr:last-child td:first-child{*/
/* 	-moz-border-radius-bottomleft:3px;*/
/* 	-webkit-border-bottom-left-radius:3px;*/
/* 	border-bottom-left-radius:3px;*/
/* }*/
/* table tr:last-child td:last-child{*/
/* 	-moz-border-radius-bottomright:3px;*/
/* 	-webkit-border-bottom-right-radius:3px;*/
/* 	border-bottom-right-radius:3px;*/
/* }*/
/* table tr:hover td{*/
/* 	background: #f2f2f2;*/
/* 	background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));*/
/* 	background: -moz-linear-gradient(top,  #f2f2f2,  #f0f0f0);	*/
/* }*/
/* */
/* </style>    */
/* {%endblock%}*/
/* */
