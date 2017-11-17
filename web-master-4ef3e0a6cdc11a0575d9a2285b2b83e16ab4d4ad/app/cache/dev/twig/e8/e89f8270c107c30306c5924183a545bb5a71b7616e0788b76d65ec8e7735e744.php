<?php

/* EspritFrontOfficeBundle:forum:commentopic.html.twig */
class __TwigTemplate_9e00561ab767dcaed4bcfefa75339d6f9ed8bd6df5fc801ecc7abf901f56ace5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::layout1.html.twig", "EspritFrontOfficeBundle:forum:commentopic.html.twig", 2);
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        echo " 
    <ul>
    <li class=\"current first\">
          <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_tableau");
        echo "\">Gestion de Projets</a>
    </li><li class=\"current first\">
          <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_forum_homepage_topics");
        echo "\">forum</a>
    </li>
    <li class=\"current_ancestor\">
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_liste");
        echo "\">Project list</a>
        <ul class=\"menu_level_1\">
            <li class=\"current first last\">
                <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_liste");
        echo "\">Search Project</a>
            </li>
        </ul>
    </li>
</ul>

    <head>
        <script>\$(document).ready(function(){

    
    \$(\"[data-toggle=tooltip]\").tooltip();
});</script>
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fontawesome.io/assets/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\">
<style>
    body{ background: #fafafa;}
.widget-area.blank {
background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
-webkit-box-shadow: none;
-moz-box-shadow: none;
-ms-box-shadow: none;
-o-box-shadow: none;
box-shadow: none;
}
body .no-padding {
padding: 0;
}
.widget-area {
background-color: #fff;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
-webkit-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
-moz-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
-ms-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
-o-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
float: left;
margin-top: 30px;
padding: 25px 30px;
position: relative;
width: 100%;
}
.status-upload {
background: none repeat scroll 0 0 #f5f5f5;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
float: left;
width: 100%;
}
.status-upload form {
float: left;
width: 100%;
}
.status-upload form textarea {
background: none repeat scroll 0 0 #fff;
border: medium none;
-webkit-border-radius: 4px 4px 0 0;
-moz-border-radius: 4px 4px 0 0;
-ms-border-radius: 4px 4px 0 0;
-o-border-radius: 4px 4px 0 0;
border-radius: 4px 4px 0 0;
color: #777777;
float: left;
font-family: Lato;
font-size: 14px;
height: 142px;
letter-spacing: 0.3px;
padding: 20px;
width: 100%;
resize:vertical;
outline:none;
border: 1px solid #F2F2F2;
}

.status-upload ul {
float: left;
list-style: none outside none;
margin: 0;
padding: 0 0 0 15px;
width: auto;
}
.status-upload ul > li {
float: left;
}
.status-upload ul > li > a {
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
color: #777777;
float: left;
font-size: 14px;
height: 30px;
line-height: 30px;
margin: 10px 0 10px 10px;
text-align: center;
-webkit-transition: all 0.4s ease 0s;
-moz-transition: all 0.4s ease 0s;
-ms-transition: all 0.4s ease 0s;
-o-transition: all 0.4s ease 0s;
transition: all 0.4s ease 0s;
width: 30px;
cursor: pointer;
}
.status-upload ul > li > a:hover {
background: none repeat scroll 0 0 #606060;
color: #fff;
}
.status-upload form button {
border: medium none;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
color: #fff;
float: right;
font-family: Lato;
font-size: 14px;
letter-spacing: 0.3px;
margin-right: 9px;
margin-top: 9px;
padding: 6px 15px;
}
.dropdown > a > span.green:before {
border-left-color: #2dcb73;
}
.status-upload form button > i {
margin-right: 7px;
}





    .panel-shadow {
    box-shadow: rgba(0, 0, 0, 0.3) 7px 7px 7px;
}
.panel-white {
  border: 1px solid #dddddd;
}
.panel-white  .panel-heading {
  color: #333;
  background-color: #fff;
  border-color: #ddd;
}
.panel-white  .panel-footer {
  background-color: #fff;
  border-color: #ddd;
}

.post .post-heading {
  height: 95px;
  padding: 20px 15px;
}
.post .post-heading .avatar {
  width: 60px;
  height: 60px;
  display: block;
  margin-right: 15px;
}
.post .post-heading .meta .title {
  margin-bottom: 0;
}
.post .post-heading .meta .title a {
  color: black;
}
.post .post-heading .meta .title a:hover {
  color: #aaaaaa;
}
.post .post-heading .meta .time {
  margin-top: 8px;
  color: #999;
}
.post .post-image .image {
  width: 100%;
  height: auto;
}
.post .post-description {
  padding: 15px;
}
.post .post-description p {
  font-size: 14px;
}
.post .post-description .stats {
  margin-top: 20px;
}
.post .post-description .stats .stat-item {
  display: inline-block;
  margin-right: 15px;
}
.post .post-description .stats .stat-item .icon {
  margin-right: 8px;
}
.post .post-footer {
  border-top: 1px solid #ddd;
  padding: 15px;
}
.post .post-footer .input-group-addon a {
  color: #454545;
}
.post .post-footer .comments-list {
  padding: 0;
  margin-top: 20px;
  list-style-type: none;
}
.post .post-footer .comments-list .comment {
  display: block;
  width: 100%;
  margin: 20px 0;
}
.post .post-footer .comments-list .comment .avatar {
  width: 35px;
  height: 35px;
}
.post .post-footer .comments-list .comment .comment-heading {
  display: block;
  width: 100%;
}
.post .post-footer .comments-list .comment .comment-heading .user {
  font-size: 14px;
  font-weight: bold;
  display: inline;
  margin-top: 0;
  margin-right: 10px;
}
.post .post-footer .comments-list .comment .comment-heading .time {
  font-size: 12px;
  color: #aaa;
  margin-top: 0;
  display: inline;
}
.post .post-footer .comments-list .comment .comment-body {
  margin-left: 50px;
}
.post .post-footer .comments-list .comment > .comments-list {
  margin-left: 50px;
}
</style>
<link rel=\"stylesheet\" type=\"text/css\" href=\"//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\">
    </head>
    <body>
      ";
        // line 263
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            echo "  
        <table style=\"margin-left: 20px\"  width=\"400\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\" bgcolor=\"#CCCCCC\">
<tr>
    <td><table style=\"margin-left: 50px\" width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"1\" bordercolor=\"1\" bgcolor=\"#FFFFFF\">
<tr>
    
<td bgcolor=\"#F8F7F1\"><strong>Topic :<strong>";
            // line 269
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "topic", array()), "html", null, true);
            echo "</strong></td>
</tr>

<tr>
<td bgcolor=\"#F8F7F1\"><strong>Details :</strong>";
            // line 273
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "detail", array()), "html", null, true);
            echo "</td>
</tr>

<tr>
<td bgcolor=\"#F8F7F1\"><strong>By :</strong> ";
            // line 277
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "name", array()), "html", null, true);
            echo " <strong>Email : </strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "email", array()), "html", null, true);
            echo "</td>
</tr>

<tr>
<td bgcolor=\"#F8F7F1\"><strong>Date/time : ";
            // line 281
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "datetime", array()), "html", null, true);
            echo " </strong></td>
</tr>
</table></td>
</tr>

</table>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 287
        echo "<BR>
      
<div class=\"container\" style=\"height: 10px ; width: 700px  \">
    <div class=\"row\">
       ";
        // line 291
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets2"]) ? $context["projets2"] : $this->getContext($context, "projets2")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet2"]) {
            echo "  
        <div class=\"col-sm-8\">
            <div class=\"panel panel-white post panel-shadow\">
                <div class=\"post-heading\">
                    <div class=\"pull-left image\">
                        <img src=\"";
            // line 296
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://bootdey.com/img/Content/user_1.jpg"), "html", null, true);
            echo "\" class=\"img-circle avatar\" alt=\"user profile image\">
                    </div>
                    <div class=\"pull-left meta\" >
                        <div class=\"title h5\" >
                            <a href=\"#\"><b>";
            // line 300
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet2"], "aEmail", array()), "html", null, true);
            echo "</b></a>
                            made a post.
                        </div>
                        <h6 class=\"text-muted time\" >";
            // line 303
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet2"], "aDatetime", array()), "html", null, true);
            echo "</h6>
                    </div>
                </div> 
                <div class=\"post-description\"> 
                    <p>";
            // line 307
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet2"], "aAnswer", array()), "html", null, true);
            echo "</p>
                    <div class=\"stats\">
                        <a href=\"#\" class=\"btn btn-default stat-item\">
                            <i class=\"fa fa-thumbs-up icon\"></i>2
                        </a>
                        <a href=\"#\" class=\"btn btn-default stat-item\">
                            <i class=\"fa fa-thumbs-down icon\"></i>12
                        </a>
                    </div>
             
            </div>
        </div>
                             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 320
        echo "    </div>
</div></div>
    </br>   </br>  </br>  </br>  </br>          
    <div class=\"container\">
\t
\t
    
    <div class=\"row\">
    
    <div class=\"col-md-6\">
    \t\t\t\t\t\t<div class=\"widget-area no-padding blank\">
\t\t\t\t\t\t\t\t<div class=\"status-upload\">
                                                                   ";
        // line 332
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            echo " <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fesprit_front_office_orum_homepage_add_response", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\">";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 333
        echo "\t\t\t\t\t\t\t\t\t\t<textarea name=\"answer\" id=\"answer\" placeholder=\"tape your answer her...\" ></textarea>
\t\t\t\t\t\t\t\t\t\t
                                                                                <button type=\"submit\" style=\"background-color: green\" class=\"btn btn-success green\"><i class=\"fa fa-share\"></i> Share</button>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div><!-- Status Upload  -->
\t\t\t\t\t\t\t</div><!-- Widget Area -->
\t\t\t\t\t\t</div>
        
    </div>
</div>
    </body>
</html>




";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:forum:commentopic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  432 => 333,  421 => 332,  407 => 320,  388 => 307,  381 => 303,  375 => 300,  368 => 296,  358 => 291,  352 => 287,  340 => 281,  331 => 277,  324 => 273,  317 => 269,  306 => 263,  67 => 27,  52 => 15,  46 => 12,  40 => 9,  35 => 7,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "EspritFrontOfficeBundle::layout1.html.twig" %}*/
/*    */
/* {% block content %} */
/*     <ul>*/
/*     <li class="current first">*/
/*           <a href="{{ path('esprit_front_office_tableau') }}">Gestion de Projets</a>*/
/*     </li><li class="current first">*/
/*           <a href="{{ path('esprit_front_office_forum_homepage_topics') }}">forum</a>*/
/*     </li>*/
/*     <li class="current_ancestor">*/
/*         <a href="{{path('esprit_front_office_liste')}}">Project list</a>*/
/*         <ul class="menu_level_1">*/
/*             <li class="current first last">*/
/*                 <a href="{{path('esprit_front_office_liste')}}">Search Project</a>*/
/*             </li>*/
/*         </ul>*/
/*     </li>*/
/* </ul>*/
/* */
/*     <head>*/
/*         <script>$(document).ready(function(){*/
/* */
/*     */
/*     $("[data-toggle=tooltip]").tooltip();*/
/* });</script>*/
/*         <link rel="stylesheet" href="{{asset('http://fontawesome.io/assets/font-awesome/css/font-awesome.css')}}">*/
/* <style>*/
/*     body{ background: #fafafa;}*/
/* .widget-area.blank {*/
/* background: none repeat scroll 0 0 rgba(0, 0, 0, 0);*/
/* -webkit-box-shadow: none;*/
/* -moz-box-shadow: none;*/
/* -ms-box-shadow: none;*/
/* -o-box-shadow: none;*/
/* box-shadow: none;*/
/* }*/
/* body .no-padding {*/
/* padding: 0;*/
/* }*/
/* .widget-area {*/
/* background-color: #fff;*/
/* -webkit-border-radius: 4px;*/
/* -moz-border-radius: 4px;*/
/* -ms-border-radius: 4px;*/
/* -o-border-radius: 4px;*/
/* border-radius: 4px;*/
/* -webkit-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);*/
/* -moz-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);*/
/* -ms-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);*/
/* -o-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);*/
/* box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);*/
/* float: left;*/
/* margin-top: 30px;*/
/* padding: 25px 30px;*/
/* position: relative;*/
/* width: 100%;*/
/* }*/
/* .status-upload {*/
/* background: none repeat scroll 0 0 #f5f5f5;*/
/* -webkit-border-radius: 4px;*/
/* -moz-border-radius: 4px;*/
/* -ms-border-radius: 4px;*/
/* -o-border-radius: 4px;*/
/* border-radius: 4px;*/
/* float: left;*/
/* width: 100%;*/
/* }*/
/* .status-upload form {*/
/* float: left;*/
/* width: 100%;*/
/* }*/
/* .status-upload form textarea {*/
/* background: none repeat scroll 0 0 #fff;*/
/* border: medium none;*/
/* -webkit-border-radius: 4px 4px 0 0;*/
/* -moz-border-radius: 4px 4px 0 0;*/
/* -ms-border-radius: 4px 4px 0 0;*/
/* -o-border-radius: 4px 4px 0 0;*/
/* border-radius: 4px 4px 0 0;*/
/* color: #777777;*/
/* float: left;*/
/* font-family: Lato;*/
/* font-size: 14px;*/
/* height: 142px;*/
/* letter-spacing: 0.3px;*/
/* padding: 20px;*/
/* width: 100%;*/
/* resize:vertical;*/
/* outline:none;*/
/* border: 1px solid #F2F2F2;*/
/* }*/
/* */
/* .status-upload ul {*/
/* float: left;*/
/* list-style: none outside none;*/
/* margin: 0;*/
/* padding: 0 0 0 15px;*/
/* width: auto;*/
/* }*/
/* .status-upload ul > li {*/
/* float: left;*/
/* }*/
/* .status-upload ul > li > a {*/
/* -webkit-border-radius: 4px;*/
/* -moz-border-radius: 4px;*/
/* -ms-border-radius: 4px;*/
/* -o-border-radius: 4px;*/
/* border-radius: 4px;*/
/* color: #777777;*/
/* float: left;*/
/* font-size: 14px;*/
/* height: 30px;*/
/* line-height: 30px;*/
/* margin: 10px 0 10px 10px;*/
/* text-align: center;*/
/* -webkit-transition: all 0.4s ease 0s;*/
/* -moz-transition: all 0.4s ease 0s;*/
/* -ms-transition: all 0.4s ease 0s;*/
/* -o-transition: all 0.4s ease 0s;*/
/* transition: all 0.4s ease 0s;*/
/* width: 30px;*/
/* cursor: pointer;*/
/* }*/
/* .status-upload ul > li > a:hover {*/
/* background: none repeat scroll 0 0 #606060;*/
/* color: #fff;*/
/* }*/
/* .status-upload form button {*/
/* border: medium none;*/
/* -webkit-border-radius: 4px;*/
/* -moz-border-radius: 4px;*/
/* -ms-border-radius: 4px;*/
/* -o-border-radius: 4px;*/
/* border-radius: 4px;*/
/* color: #fff;*/
/* float: right;*/
/* font-family: Lato;*/
/* font-size: 14px;*/
/* letter-spacing: 0.3px;*/
/* margin-right: 9px;*/
/* margin-top: 9px;*/
/* padding: 6px 15px;*/
/* }*/
/* .dropdown > a > span.green:before {*/
/* border-left-color: #2dcb73;*/
/* }*/
/* .status-upload form button > i {*/
/* margin-right: 7px;*/
/* }*/
/* */
/* */
/* */
/* */
/* */
/*     .panel-shadow {*/
/*     box-shadow: rgba(0, 0, 0, 0.3) 7px 7px 7px;*/
/* }*/
/* .panel-white {*/
/*   border: 1px solid #dddddd;*/
/* }*/
/* .panel-white  .panel-heading {*/
/*   color: #333;*/
/*   background-color: #fff;*/
/*   border-color: #ddd;*/
/* }*/
/* .panel-white  .panel-footer {*/
/*   background-color: #fff;*/
/*   border-color: #ddd;*/
/* }*/
/* */
/* .post .post-heading {*/
/*   height: 95px;*/
/*   padding: 20px 15px;*/
/* }*/
/* .post .post-heading .avatar {*/
/*   width: 60px;*/
/*   height: 60px;*/
/*   display: block;*/
/*   margin-right: 15px;*/
/* }*/
/* .post .post-heading .meta .title {*/
/*   margin-bottom: 0;*/
/* }*/
/* .post .post-heading .meta .title a {*/
/*   color: black;*/
/* }*/
/* .post .post-heading .meta .title a:hover {*/
/*   color: #aaaaaa;*/
/* }*/
/* .post .post-heading .meta .time {*/
/*   margin-top: 8px;*/
/*   color: #999;*/
/* }*/
/* .post .post-image .image {*/
/*   width: 100%;*/
/*   height: auto;*/
/* }*/
/* .post .post-description {*/
/*   padding: 15px;*/
/* }*/
/* .post .post-description p {*/
/*   font-size: 14px;*/
/* }*/
/* .post .post-description .stats {*/
/*   margin-top: 20px;*/
/* }*/
/* .post .post-description .stats .stat-item {*/
/*   display: inline-block;*/
/*   margin-right: 15px;*/
/* }*/
/* .post .post-description .stats .stat-item .icon {*/
/*   margin-right: 8px;*/
/* }*/
/* .post .post-footer {*/
/*   border-top: 1px solid #ddd;*/
/*   padding: 15px;*/
/* }*/
/* .post .post-footer .input-group-addon a {*/
/*   color: #454545;*/
/* }*/
/* .post .post-footer .comments-list {*/
/*   padding: 0;*/
/*   margin-top: 20px;*/
/*   list-style-type: none;*/
/* }*/
/* .post .post-footer .comments-list .comment {*/
/*   display: block;*/
/*   width: 100%;*/
/*   margin: 20px 0;*/
/* }*/
/* .post .post-footer .comments-list .comment .avatar {*/
/*   width: 35px;*/
/*   height: 35px;*/
/* }*/
/* .post .post-footer .comments-list .comment .comment-heading {*/
/*   display: block;*/
/*   width: 100%;*/
/* }*/
/* .post .post-footer .comments-list .comment .comment-heading .user {*/
/*   font-size: 14px;*/
/*   font-weight: bold;*/
/*   display: inline;*/
/*   margin-top: 0;*/
/*   margin-right: 10px;*/
/* }*/
/* .post .post-footer .comments-list .comment .comment-heading .time {*/
/*   font-size: 12px;*/
/*   color: #aaa;*/
/*   margin-top: 0;*/
/*   display: inline;*/
/* }*/
/* .post .post-footer .comments-list .comment .comment-body {*/
/*   margin-left: 50px;*/
/* }*/
/* .post .post-footer .comments-list .comment > .comments-list {*/
/*   margin-left: 50px;*/
/* }*/
/* </style>*/
/* <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">*/
/*     </head>*/
/*     <body>*/
/*       {%for projet in projets%}  */
/*         <table style="margin-left: 20px"  width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">*/
/* <tr>*/
/*     <td><table style="margin-left: 50px" width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF">*/
/* <tr>*/
/*     */
/* <td bgcolor="#F8F7F1"><strong>Topic :<strong>{{projet.topic}}</strong></td>*/
/* </tr>*/
/* */
/* <tr>*/
/* <td bgcolor="#F8F7F1"><strong>Details :</strong>{{projet.detail}}</td>*/
/* </tr>*/
/* */
/* <tr>*/
/* <td bgcolor="#F8F7F1"><strong>By :</strong> {{projet.name}} <strong>Email : </strong>{{projet.email}}</td>*/
/* </tr>*/
/* */
/* <tr>*/
/* <td bgcolor="#F8F7F1"><strong>Date/time : {{projet.datetime}} </strong></td>*/
/* </tr>*/
/* </table></td>*/
/* </tr>*/
/* */
/* </table>{%endfor%}*/
/* <BR>*/
/*       */
/* <div class="container" style="height: 10px ; width: 700px  ">*/
/*     <div class="row">*/
/*        {%for projet2 in projets2%}  */
/*         <div class="col-sm-8">*/
/*             <div class="panel panel-white post panel-shadow">*/
/*                 <div class="post-heading">*/
/*                     <div class="pull-left image">*/
/*                         <img src="{{asset('http://bootdey.com/img/Content/user_1.jpg')}}" class="img-circle avatar" alt="user profile image">*/
/*                     </div>*/
/*                     <div class="pull-left meta" >*/
/*                         <div class="title h5" >*/
/*                             <a href="#"><b>{{projet2.aEmail}}</b></a>*/
/*                             made a post.*/
/*                         </div>*/
/*                         <h6 class="text-muted time" >{{projet2.aDatetime}}</h6>*/
/*                     </div>*/
/*                 </div> */
/*                 <div class="post-description"> */
/*                     <p>{{projet2.aAnswer}}</p>*/
/*                     <div class="stats">*/
/*                         <a href="#" class="btn btn-default stat-item">*/
/*                             <i class="fa fa-thumbs-up icon"></i>2*/
/*                         </a>*/
/*                         <a href="#" class="btn btn-default stat-item">*/
/*                             <i class="fa fa-thumbs-down icon"></i>12*/
/*                         </a>*/
/*                     </div>*/
/*              */
/*             </div>*/
/*         </div>*/
/*                              {%endfor%}*/
/*     </div>*/
/* </div></div>*/
/*     </br>   </br>  </br>  </br>  </br>          */
/*     <div class="container">*/
/* 	*/
/* 	*/
/*     */
/*     <div class="row">*/
/*     */
/*     <div class="col-md-6">*/
/*     						<div class="widget-area no-padding blank">*/
/* 								<div class="status-upload">*/
/*                                                                    {%for projet in projets%} <form method="post" action="{{path('fesprit_front_office_orum_homepage_add_response',{'id':projet.id})}}">{% endfor %}*/
/* 										<textarea name="answer" id="answer" placeholder="tape your answer her..." ></textarea>*/
/* 										*/
/*                                                                                 <button type="submit" style="background-color: green" class="btn btn-success green"><i class="fa fa-share"></i> Share</button>*/
/* 									</form>*/
/* 								</div><!-- Status Upload  -->*/
/* 							</div><!-- Widget Area -->*/
/* 						</div>*/
/*         */
/*     </div>*/
/* </div>*/
/*     </body>*/
/* </html>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
