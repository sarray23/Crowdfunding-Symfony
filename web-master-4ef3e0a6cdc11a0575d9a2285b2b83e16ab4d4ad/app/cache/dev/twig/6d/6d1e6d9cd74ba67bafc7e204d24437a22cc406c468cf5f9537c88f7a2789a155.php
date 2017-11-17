<?php

/* EspritFrontOfficeBundle:forum:add_topic.html.twig */
class __TwigTemplate_16582d181fed75af6286c55bec127d7c2405dc7a725d5855d4d5730da84ae621 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::layout1.html.twig", "EspritFrontOfficeBundle:forum:add_topic.html.twig", 1);
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
        echo " 
        <ul>
    <li class=\"current first\">
          <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_tableau");
        echo "\">Gestion de Projets</a>
    </li><li class=\"current first\">
          <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_forum_homepage_topics");
        echo "\">Forum</a>
    </li>
    <li class=\"current_ancestor\">
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_liste");
        echo "\">Liste de projets</a>
        <ul class=\"menu_level_1\">
            <li class=\"current first last\">
                <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_liste");
        echo "\">Recherche de Project</a>
            </li>
        </ul>
    </li>
</ul>
        <div>
<table width='60%' cellspacing='0' align=\"center\" id=\"tabl\">
<tr>
<form id=\"form1\" name=\"form1\" method=\"post\" action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_forum_homepage");
        echo "\">
<td>
<table width='60%' cellspacing='0' align=\"center\" id=\"tabl\">
<tr>
<td colspan=\"3\" bgcolor=\"#E6E6E6\"><strong>Create New Topic</strong> </td>
</tr>
<tr>
<td width=\"14%\"><strong>Topic</strong></td>
<td width=\"2%\">:</td>
<td width=\"84%\"><input name=\"topic\" type=\"text\" id=\"topic\" size=\"50\" /></td>
</tr>
<tr>
<td valign=\"top\"><strong>Detail</strong></td>
<td valign=\"top\">:</td>
<td><textarea name=\"detail\" cols=\"50\" rows=\"3\" id=\"detail\"></textarea></td>
</tr>
<tr>
<td><strong>Name</strong></td>
<td>:</td>
<td><input name=\"name\" type=\"text\" id=\"name\" size=\"50\" /></td>
</tr>
<tr>
<td><strong>Email</strong></td>
<td>:</td>
<td><input name=\"email\" type=\"text\" id=\"email\" size=\"50\" height=\"50\"/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td><td><input type=\"submit\" name=\"Submit\" value=\"Submit\" class=\"btn btn-green\" href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_forum_homepage_topics");
        echo "\" />
 </td><td><input type=\"reset\" name=\"Submit2\" value=\"Reset\" class=\"btn btn-green\"  /> </td>
</tr>
</table>
</td>
</form>
</tr>
</table>

        </div>


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
        return "EspritFrontOfficeBundle:forum:add_topic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 49,  63 => 21,  52 => 13,  46 => 10,  40 => 7,  35 => 5,  28 => 2,  11 => 1,);
    }
}
/* {% extends "EspritFrontOfficeBundle::layout1.html.twig" %}*/
/*     {% block content %} */
/*         <ul>*/
/*     <li class="current first">*/
/*           <a href="{{ path('esprit_front_office_tableau') }}">Gestion de Projets</a>*/
/*     </li><li class="current first">*/
/*           <a href="{{ path('esprit_front_office_forum_homepage_topics') }}">Forum</a>*/
/*     </li>*/
/*     <li class="current_ancestor">*/
/*         <a href="{{path('esprit_front_office_liste')}}">Liste de projets</a>*/
/*         <ul class="menu_level_1">*/
/*             <li class="current first last">*/
/*                 <a href="{{path('esprit_front_office_liste')}}">Recherche de Project</a>*/
/*             </li>*/
/*         </ul>*/
/*     </li>*/
/* </ul>*/
/*         <div>*/
/* <table width='60%' cellspacing='0' align="center" id="tabl">*/
/* <tr>*/
/* <form id="form1" name="form1" method="post" action="{{path('esprit_front_office_forum_homepage')}}">*/
/* <td>*/
/* <table width='60%' cellspacing='0' align="center" id="tabl">*/
/* <tr>*/
/* <td colspan="3" bgcolor="#E6E6E6"><strong>Create New Topic</strong> </td>*/
/* </tr>*/
/* <tr>*/
/* <td width="14%"><strong>Topic</strong></td>*/
/* <td width="2%">:</td>*/
/* <td width="84%"><input name="topic" type="text" id="topic" size="50" /></td>*/
/* </tr>*/
/* <tr>*/
/* <td valign="top"><strong>Detail</strong></td>*/
/* <td valign="top">:</td>*/
/* <td><textarea name="detail" cols="50" rows="3" id="detail"></textarea></td>*/
/* </tr>*/
/* <tr>*/
/* <td><strong>Name</strong></td>*/
/* <td>:</td>*/
/* <td><input name="name" type="text" id="name" size="50" /></td>*/
/* </tr>*/
/* <tr>*/
/* <td><strong>Email</strong></td>*/
/* <td>:</td>*/
/* <td><input name="email" type="text" id="email" size="50" height="50"/></td>*/
/* </tr>*/
/* <tr>*/
/* <td>&nbsp;</td>*/
/* <td>&nbsp;</td><td><input type="submit" name="Submit" value="Submit" class="btn btn-green" href="{{ path('esprit_front_office_forum_homepage_topics') }}" />*/
/*  </td><td><input type="reset" name="Submit2" value="Reset" class="btn btn-green"  /> </td>*/
/* </tr>*/
/* </table>*/
/* </td>*/
/* </form>*/
/* </tr>*/
/* </table>*/
/* */
/*         </div>*/
/* */
/* */
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
/*     {% endblock %}*/
