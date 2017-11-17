<?php

/* EspritFrontOfficeBundle:Projet:Tableau.html.twig */
class __TwigTemplate_437b0eb2dc260f2e58bb4752eadeabd1067c536f2a7a7c10f72b63e0becb530c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::layout1.html.twig", "EspritFrontOfficeBundle:Projet:Tableau.html.twig", 1);
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
        echo "    <ul>
    <li class=\"current first\">
          <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_ajout");
        echo "\">Ajout de Projets</a>
    </li>
    <li class=\"current first\">
          <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_forum_homepage_topics");
        echo "\">Forum</a>
    </li>
    <li class=\"current_ancestor\">
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_liste");
        echo "\">Project list</a>
        <ul class=\"menu_level_1\">
            <li class=\"current first last\">
                <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_liste");
        echo "\">Recherche Projet </a>
            </li>
        </ul>
    </li>
</ul>

    
    
    
    
    
    
    
    <div>
 <br><div id=\"contenu\">
          <h2>Liste des projets</h2>
         <table  width='60%' cellspacing='0' align=\"center\" id=\"tabl\">
    <tr>
      
        <td>Titre
        </td>
        <td>Budget
        </td>
         <td>Type
        </td>
        <td> Duree
        </td>
        <td> Description
        </td>
         <td>categorie
        </td>
       <td>pays
        </td>
        <td>Supprimer</td>
         
        <td>Modifier</td>
       
        </tr>";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mds"]) ? $context["mds"] : $this->getContext($context, "mds")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 52
            echo "        
            <tr>
             
               
                <td> ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "titre", array()), "html", null, true);
            echo "
                </td>
                <td> ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "budget", array()), "html", null, true);
            echo "
                </td>
                <td> ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "type", array()), "html", null, true);
            echo "
                </td>
                <td> ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "duree", array()), "html", null, true);
            echo "
                </td>
                <td> ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "description", array()), "html", null, true);
            echo "
                </td>
                <td> ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "categorie", array()), "html", null, true);
            echo "
                </td>
                <td> ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "pays", array()), "html", null, true);
            echo "
                </td>
                 
              <td>
                  
                  ";
            // line 73
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["m"], "idUser", array()), "id", array()))) {
                echo "  <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_front_office_delete", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
                echo "\"> 
                      <img width=\"40\" height=\"40\"alt=\"\" src=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/sup.png"), "html", null, true);
                echo "\" alt=\"\$TITLE\"/></a>";
            }
            // line 75
            echo "                </td>
                <td>
               
                     
                     
                     ";
            // line 80
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["m"], "idUser", array()), "id", array()))) {
                echo "  <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_front_office_update", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
                echo "\"> 
                     Modifier</a>";
            }
            // line 82
            echo "
                </td>
                
             
              
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "       
    

        
            
            
       
    
</table>
            </div></div>

  
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
\tmargin-top:50px ;
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
        return "EspritFrontOfficeBundle:Projet:Tableau.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 89,  165 => 82,  158 => 80,  151 => 75,  147 => 74,  141 => 73,  133 => 68,  128 => 66,  123 => 64,  118 => 62,  113 => 60,  108 => 58,  103 => 56,  97 => 52,  93 => 51,  53 => 14,  47 => 11,  41 => 8,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "EspritFrontOfficeBundle::layout1.html.twig" %}*/
/* {%block content %}*/
/*     <ul>*/
/*     <li class="current first">*/
/*           <a href="{{ path('esprit_front_office_ajout') }}">Ajout de Projets</a>*/
/*     </li>*/
/*     <li class="current first">*/
/*           <a href="{{ path('esprit_front_office_forum_homepage_topics') }}">Forum</a>*/
/*     </li>*/
/*     <li class="current_ancestor">*/
/*         <a href="{{path('esprit_front_office_liste')}}">Project list</a>*/
/*         <ul class="menu_level_1">*/
/*             <li class="current first last">*/
/*                 <a href="{{path('esprit_front_office_liste')}}">Recherche Projet </a>*/
/*             </li>*/
/*         </ul>*/
/*     </li>*/
/* </ul>*/
/* */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     <div>*/
/*  <br><div id="contenu">*/
/*           <h2>Liste des projets</h2>*/
/*          <table  width='60%' cellspacing='0' align="center" id="tabl">*/
/*     <tr>*/
/*       */
/*         <td>Titre*/
/*         </td>*/
/*         <td>Budget*/
/*         </td>*/
/*          <td>Type*/
/*         </td>*/
/*         <td> Duree*/
/*         </td>*/
/*         <td> Description*/
/*         </td>*/
/*          <td>categorie*/
/*         </td>*/
/*        <td>pays*/
/*         </td>*/
/*         <td>Supprimer</td>*/
/*          */
/*         <td>Modifier</td>*/
/*        */
/*         </tr>{% for m in mds%}*/
/*         */
/*             <tr>*/
/*              */
/*                */
/*                 <td> {{ m.titre }}*/
/*                 </td>*/
/*                 <td> {{ m.budget }}*/
/*                 </td>*/
/*                 <td> {{ m.type}}*/
/*                 </td>*/
/*                 <td> {{ m.duree}}*/
/*                 </td>*/
/*                 <td> {{ m.description}}*/
/*                 </td>*/
/*                 <td> {{ m.categorie}}*/
/*                 </td>*/
/*                 <td> {{ m.pays}}*/
/*                 </td>*/
/*                  */
/*               <td>*/
/*                   */
/*                   {% if app.user.id==m.idUser.id  %}  <a href="{{path('esprit_front_office_delete',{'id':m.id})}}"> */
/*                       <img width="40" height="40"alt="" src="{{asset('images/sup.png')}}" alt="$TITLE"/></a>{% endif %}*/
/*                 </td>*/
/*                 <td>*/
/*                */
/*                      */
/*                      */
/*                      {% if app.user.id==m.idUser.id  %}  <a href="{{path('esprit_front_office_update',{'id':m.id})}}"> */
/*                      Modifier</a>{% endif %}*/
/* */
/*                 </td>*/
/*                 */
/*              */
/*               */
/*             </tr>*/
/*             {% endfor %}*/
/*        */
/*     */
/* */
/*         */
/*             */
/*             */
/*        */
/*     */
/* </table>*/
/*             </div></div>*/
/* */
/*   */
/*       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>*/
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
/* 	margin-top:50px ;*/
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
/* */
/* </style>    */
/* {%endblock%}{# empty Twig template #}*/
