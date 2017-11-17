<?php

/* EspritFrontOfficeBundle:ProblemeSolution:probArea.html.twig */
class __TwigTemplate_7e23fab51a26ba17e04d73709881e98cacc0ea275785eb0c6b85c31e34296535 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::layout1.html.twig", "EspritFrontOfficeBundle:ProblemeSolution:probArea.html.twig", 1);
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
        echo " <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
    <br>

    <table width='60%' cellspacing='0' align=\"center\"  >
        <tr>
            <th><center>Titre</center></th>
                <th><center>Description</center></th>
                <th><center>Type</center></th>
                <th><center>Date du Post</center></th>

    </tr>
        
        <tr class='even'>
            <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prb"]) ? $context["prb"] : $this->getContext($context, "prb")), "titre", array()), "html", null, true);
        echo "</td>
            <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prb"]) ? $context["prb"] : $this->getContext($context, "prb")), "description", array()), "html", null, true);
        echo "</td>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prb"]) ? $context["prb"] : $this->getContext($context, "prb")), "type", array()), "html", null, true);
        echo "</td>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["prb"]) ? $context["prb"] : $this->getContext($context, "prb")), "datePost", array()), "d-m-y"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td colspan=\"4\">
                
                ";
        // line 24
        $this->loadTemplate("FOSCommentBundle:Thread:async.html.twig", "EspritFrontOfficeBundle:ProblemeSolution:probArea.html.twig", 24)->display(array_merge($context, array("id" => $this->getAttribute((isset($context["prb"]) ? $context["prb"] : $this->getContext($context, "prb")), "id", array()))));
        // line 25
        echo "               

            </td>
        </tr>
</table>
<br>

    
    
        


<br>
<style type=\"text/css\">
    .fos_comment_comment_show{
        margin: 20 px 0;
    }
    
.fos_comment_thread_show {
    margin-top: 2em;
    padding: 55em 1000px;
    width: 472px;
    background: #fdfcf0;
    box-shadow: 0 0 7px #bbb;
    -moz-box-shadow: 0 0 7px #bbb;
    -webkit-box-shadow: 0 0 7px #bbb;
    border: 1px solid #ccc;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
}
.fos_comment_thread_show h3 {
    font-size: 1.3em;
    font-weight: bold;
    margin-bottom: 1em;
    color: #a0a0a0;
}
.fos_comment_comment_show {
    color: #555;
}
.fos_comment_comment_metas {
    margin: 1.5em 0 0.5em 0;
    padding: 1em 20px;
    background: #e6e6e6;
    border: 1px solid #ccc;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    font-size: 16px;
    margin-top: 0;
    margin-bottom: 5px;
    font-weight: 500;
}
.fos_comment_comment_body {
    //line-height: 5.5em;
    width: 9px 54px;
    font-size: 14px;

    
}
.fos_comment_comments .fos_comment_comments {
    margin-left: 2em;
}
.fos_comment_comment_reply {
    text-align: right;
    margin-left: 20px ;
}
.fos_comment_comment_reply.replying {
    text-align: left;
    margin-top: 1em;
    padding: 4em 5px;
    background: #d6d6d6;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
}
.fos_comment_comment_reply_show_form {
    padding: 2px 5px;
    font-size: 0.8em;
}
.fos_comment_comment_reply.fos_comment_replying button.fos_comment_comment_reply_show_form {
    display: none;
}
.fos_comment_thread_comments {
    margin-bottom: 1.5em;
}
.fos_comment_reply_prototype {
    display: none;
}
.fos_comment_thread_show > form.fos_comment_comment_form {
    margin-bottom: 1em;
}
form.fos_comment_comment_form.processing {
    opacity: 0.5;
}
form.fos_comment_comment_form label.author_name {
    margin-top: 3px;
    float:left;
}
form.fos_comment_comment_form label.author_name input {
    padding: 2px 5px;
}
form.fos_comment_comment_form textarea {
    width: 98%;
    height: 6em;
    padding: 1%;
}
form.fos_comment_comment_form.error textarea {
    border-color: red;
}
.fos_comment_form_errors {
    color: #ff0000;
}
.fos_comment_submit {
    text-align: right;
}
.fos_comment_submit input {
    font-size: 1.2em;
    padding: 3px 12px;
    margin-top: 3px;
}
a.fos_comment_thread_feed {
    width: 16px;
    height: 16px;
    display: block;
    float: right;
}
.fos_comment_comment_voting {
    float: right;
}
.fos_comment_comment_score {
    display: inline-block;
}

    
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
        return "EspritFrontOfficeBundle:ProblemeSolution:probArea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 25,  66 => 24,  58 => 19,  54 => 18,  50 => 17,  46 => 16,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "EspritFrontOfficeBundle::layout1.html.twig" %}*/
/* {%block content %}*/
/*  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>*/
/*     <br>*/
/* */
/*     <table width='60%' cellspacing='0' align="center"  >*/
/*         <tr>*/
/*             <th><center>Titre</center></th>*/
/*                 <th><center>Description</center></th>*/
/*                 <th><center>Type</center></th>*/
/*                 <th><center>Date du Post</center></th>*/
/* */
/*     </tr>*/
/*         */
/*         <tr class='even'>*/
/*             <td>{{ prb.titre }}</td>*/
/*             <td>{{ prb.description }}</td>*/
/*             <td>{{ prb.type }}</td>*/
/*             <td>{{ prb.datePost|date('d-m-y') }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td colspan="4">*/
/*                 */
/*                 {% include 'FOSCommentBundle:Thread:async.html.twig' with {'id': prb.id} %}*/
/*                */
/* */
/*             </td>*/
/*         </tr>*/
/* </table>*/
/* <br>*/
/* */
/*     */
/*     */
/*         */
/* */
/* */
/* <br>*/
/* <style type="text/css">*/
/*     .fos_comment_comment_show{*/
/*         margin: 20 px 0;*/
/*     }*/
/*     */
/* .fos_comment_thread_show {*/
/*     margin-top: 2em;*/
/*     padding: 55em 1000px;*/
/*     width: 472px;*/
/*     background: #fdfcf0;*/
/*     box-shadow: 0 0 7px #bbb;*/
/*     -moz-box-shadow: 0 0 7px #bbb;*/
/*     -webkit-box-shadow: 0 0 7px #bbb;*/
/*     border: 1px solid #ccc;*/
/*     border-radius: 5px;*/
/*     -webkit-border-radius: 5px;*/
/*     -moz-border-radius: 5px;*/
/* }*/
/* .fos_comment_thread_show h3 {*/
/*     font-size: 1.3em;*/
/*     font-weight: bold;*/
/*     margin-bottom: 1em;*/
/*     color: #a0a0a0;*/
/* }*/
/* .fos_comment_comment_show {*/
/*     color: #555;*/
/* }*/
/* .fos_comment_comment_metas {*/
/*     margin: 1.5em 0 0.5em 0;*/
/*     padding: 1em 20px;*/
/*     background: #e6e6e6;*/
/*     border: 1px solid #ccc;*/
/*     border-radius: 5px;*/
/*     -webkit-border-radius: 5px;*/
/*     -moz-border-radius: 5px;*/
/*     font-size: 16px;*/
/*     margin-top: 0;*/
/*     margin-bottom: 5px;*/
/*     font-weight: 500;*/
/* }*/
/* .fos_comment_comment_body {*/
/*     //line-height: 5.5em;*/
/*     width: 9px 54px;*/
/*     font-size: 14px;*/
/* */
/*     */
/* }*/
/* .fos_comment_comments .fos_comment_comments {*/
/*     margin-left: 2em;*/
/* }*/
/* .fos_comment_comment_reply {*/
/*     text-align: right;*/
/*     margin-left: 20px ;*/
/* }*/
/* .fos_comment_comment_reply.replying {*/
/*     text-align: left;*/
/*     margin-top: 1em;*/
/*     padding: 4em 5px;*/
/*     background: #d6d6d6;*/
/*     border-radius: 5px;*/
/*     -webkit-border-radius: 5px;*/
/*     -moz-border-radius: 5px;*/
/* }*/
/* .fos_comment_comment_reply_show_form {*/
/*     padding: 2px 5px;*/
/*     font-size: 0.8em;*/
/* }*/
/* .fos_comment_comment_reply.fos_comment_replying button.fos_comment_comment_reply_show_form {*/
/*     display: none;*/
/* }*/
/* .fos_comment_thread_comments {*/
/*     margin-bottom: 1.5em;*/
/* }*/
/* .fos_comment_reply_prototype {*/
/*     display: none;*/
/* }*/
/* .fos_comment_thread_show > form.fos_comment_comment_form {*/
/*     margin-bottom: 1em;*/
/* }*/
/* form.fos_comment_comment_form.processing {*/
/*     opacity: 0.5;*/
/* }*/
/* form.fos_comment_comment_form label.author_name {*/
/*     margin-top: 3px;*/
/*     float:left;*/
/* }*/
/* form.fos_comment_comment_form label.author_name input {*/
/*     padding: 2px 5px;*/
/* }*/
/* form.fos_comment_comment_form textarea {*/
/*     width: 98%;*/
/*     height: 6em;*/
/*     padding: 1%;*/
/* }*/
/* form.fos_comment_comment_form.error textarea {*/
/*     border-color: red;*/
/* }*/
/* .fos_comment_form_errors {*/
/*     color: #ff0000;*/
/* }*/
/* .fos_comment_submit {*/
/*     text-align: right;*/
/* }*/
/* .fos_comment_submit input {*/
/*     font-size: 1.2em;*/
/*     padding: 3px 12px;*/
/*     margin-top: 3px;*/
/* }*/
/* a.fos_comment_thread_feed {*/
/*     width: 16px;*/
/*     height: 16px;*/
/*     display: block;*/
/*     float: right;*/
/* }*/
/* .fos_comment_comment_voting {*/
/*     float: right;*/
/* }*/
/* .fos_comment_comment_score {*/
/*     display: inline-block;*/
/* }*/
/* */
/*     */
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
/* </style>*/
/* {%endblock%}*/
/* */
/* */
