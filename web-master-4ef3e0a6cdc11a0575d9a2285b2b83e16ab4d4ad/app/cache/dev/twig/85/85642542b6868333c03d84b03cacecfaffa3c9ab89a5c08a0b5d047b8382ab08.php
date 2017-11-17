<?php

/* EspritBackOfficeBundle::layout.html.twig */
class __TwigTemplate_29ecf7d27e00b384127ebbc2b1b31ea3ec75a17597acbfb10568cdaecf56e929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>
<title>CrowdRise | Admin</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"keywords\" content=\"Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" />
<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("back/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("back/css/style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("back/css/lines.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("back/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
<!-- jQuery -->
<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("back/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("back/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<!-- Metis Menu Plugin JavaScript -->
<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("back/js/metisMenu.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("back/js/custom.js"), "html", null, true);
        echo "\"></script>
<!-- Graph JavaScript -->
<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("back/js/d3.v3.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("back/js/rickshaw.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/table.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritfrontoffice/css/normalize.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritfrontoffice/css/jquery.sidr.light.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/new.css"), "html", null, true);
        echo "\"/>

</head>
<body>
<div id=\"wrapper\">
     <!-- Navigation -->
        <nav class=\"top1 navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                        <a class=\"navbar-brand\" href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\$SITE_NAME\"/></a>
            </div>
            <!-- /.navbar-header -->
            <ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t
\t\t\t    <li class=\"dropdown\">
\t        \t\t
\t        \t\t
\t      \t\t</li>
\t\t\t</ul>
\t\t\t
            <div class=\"navbar-default sidebar\" role=\"navigation\">
                <div class=\"sidebar-nav navbar-collapse\">
                    <ul class=\"nav\" id=\"side-menu\">
                        <li>
                            <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("esprit_back_office_list");
        echo "\"><i class=\"fa fa-dashboard fa-fw nav_icon\"></i>Liste des utlisateurs </a>
                         <a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("esprit_back_office_list_idee");
        echo "\"><i class=\"fa fa-dashboard fa-fw nav_icon\"></i>Liste des idées(crowsourcing)</a>
                         
                           <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("esprit_back_office_list_projet");
        echo "\"><i class=\"fa fa-dashboard fa-fw nav_icon\"></i>Liste des projets(crowdfunding) </a>
                           <a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("esprit_back_office_list_reclamation");
        echo "\"><i class=\"fa fa-dashboard fa-fw nav_icon\"></i>Liste des réclamations </a>

                        </li>
                      
                      
                      
                        
                       
                        <li>
                            <a href=\"#\"><i class=\"fa fa-dashboard fa-fw nav_icon\"></i>Compétences<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("esprit_application_listCompetences");
        echo "\">Liste des compétences</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("esprit_application_ajout_competence");
        echo "\">Ajouter une compétence</a>
                                </li>  
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href=\"#\"><i class=\"fa fa-dashboard fa-fw nav_icon\"></i>Statistiques<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("esprit_back_office_stat");
        echo "\">Utilisateurs</a>
                                </li>
                                
                                <li>
                                    <a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("esprit_back_office_stat_idee");
        echo "\">Idées</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("esprit_back_office_stat_vote");
        echo "\">Votes</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("esprit_application_statLine");
        echo "\">Problémes</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id=\"page-wrapper\">
        ";
        // line 113
        $this->displayBlock('container', $context, $blocks);
        // line 115
        echo "  
  
  
  
  
  
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("back/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    // line 113
    public function block_container($context, array $blocks = array())
    {
        // line 114
        echo "        ";
    }

    public function getTemplateName()
    {
        return "EspritBackOfficeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 114,  234 => 113,  226 => 126,  213 => 115,  211 => 113,  196 => 101,  190 => 98,  184 => 95,  177 => 91,  164 => 81,  158 => 78,  143 => 66,  139 => 65,  134 => 63,  130 => 62,  110 => 47,  93 => 33,  89 => 32,  85 => 31,  81 => 30,  77 => 29,  73 => 28,  68 => 26,  64 => 25,  59 => 23,  51 => 18,  46 => 16,  42 => 15,  37 => 13,  32 => 11,  20 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <html>*/
/* <head>*/
/* <title>CrowdRise | Admin</title>*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/* <meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, */
/* Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />*/
/* <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>*/
/*  <!-- Bootstrap Core CSS -->*/
/* <link href="{{asset('back/css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />*/
/* <!-- Custom CSS -->*/
/* <link href="{{asset('back/css/style.css')}}" rel='stylesheet' type='text/css' />*/
/* <!-- Graph CSS -->*/
/* <link href="{{asset('back/css/lines.css')}}" rel='stylesheet' type='text/css' />*/
/* <link href="{{asset('back/css/font-awesome.css')}}" rel="stylesheet"> */
/* <!-- jQuery -->*/
/* <script src="{{asset('back/js/jquery.min.js')}}"></script>*/
/* <!----webfonts--->*/
/* <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>*/
/* <!---//webfonts--->  */
/* <!-- Nav CSS -->*/
/* <link href="{{asset('back/css/custom.css')}}" rel="stylesheet">*/
/* <!-- Metis Menu Plugin JavaScript -->*/
/* <script src="{{asset('back/js/metisMenu.min.js')}}"></script>*/
/* <script src="{{asset('back/js/custom.js')}}"></script>*/
/* <!-- Graph JavaScript -->*/
/* <script src="{{asset('back/js/d3.v3.js')}}"></script>*/
/* <script src="{{asset('back/js/rickshaw.js')}}"></script>*/
/*     <link rel="stylesheet" href="{{ asset('css/table.css') }}" />*/
/* <link rel="stylesheet" href="{{asset('bundles/espritfrontoffice/css/normalize.css')}}"/>*/
/*     <link rel="stylesheet" href="{{asset('bundles/espritfrontoffice/css/jquery.sidr.light.css')}}"/>*/
/*     <link rel="stylesheet" href="{{asset('css/new.css')}}"/>*/
/* */
/* </head>*/
/* <body>*/
/* <div id="wrapper">*/
/*      <!-- Navigation -->*/
/*         <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                         <a class="navbar-brand" href="{{path('fos_user_security_login')}}"><img src="{{asset('images/logo.png')}}" alt="$SITE_NAME"/></a>*/
/*             </div>*/
/*             <!-- /.navbar-header -->*/
/*             <ul class="nav navbar-nav navbar-right">*/
/* 				*/
/* 			    <li class="dropdown">*/
/* 	        		*/
/* 	        		*/
/* 	      		</li>*/
/* 			</ul>*/
/* 			*/
/*             <div class="navbar-default sidebar" role="navigation">*/
/*                 <div class="sidebar-nav navbar-collapse">*/
/*                     <ul class="nav" id="side-menu">*/
/*                         <li>*/
/*                             <a href="{{path('esprit_back_office_list')}}"><i class="fa fa-dashboard fa-fw nav_icon"></i>Liste des utlisateurs </a>*/
/*                          <a href="{{path('esprit_back_office_list_idee')}}"><i class="fa fa-dashboard fa-fw nav_icon"></i>Liste des idées(crowsourcing)</a>*/
/*                          */
/*                            <a href="{{path('esprit_back_office_list_projet')}}"><i class="fa fa-dashboard fa-fw nav_icon"></i>Liste des projets(crowdfunding) </a>*/
/*                            <a href="{{path('esprit_back_office_list_reclamation')}}"><i class="fa fa-dashboard fa-fw nav_icon"></i>Liste des réclamations </a>*/
/* */
/*                         </li>*/
/*                       */
/*                       */
/*                       */
/*                         */
/*                        */
/*                         <li>*/
/*                             <a href="#"><i class="fa fa-dashboard fa-fw nav_icon"></i>Compétences<span class="fa arrow"></span></a>*/
/*                             <ul class="nav nav-second-level">*/
/*                                 <li>*/
/*                                     <a href="{{path('esprit_application_listCompetences')}}">Liste des compétences</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="{{path('esprit_application_ajout_competence')}}">Ajouter une compétence</a>*/
/*                                 </li>  */
/*                                 */
/*                             </ul>*/
/*                             <!-- /.nav-second-level -->*/
/*                         </li>*/
/*                          <li>*/
/*                             <a href="#"><i class="fa fa-dashboard fa-fw nav_icon"></i>Statistiques<span class="fa arrow"></span></a>*/
/*                             <ul class="nav nav-second-level">*/
/*                                 <li>*/
/*                                     <a href="{{path('esprit_back_office_stat')}}">Utilisateurs</a>*/
/*                                 </li>*/
/*                                 */
/*                                 <li>*/
/*                                     <a href="{{path('esprit_back_office_stat_idee')}}">Idées</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="{{path('esprit_back_office_stat_vote')}}">Votes</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="{{path('esprit_application_statLine')}}">Problémes</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                             <!-- /.nav-second-level -->*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <!-- /.sidebar-collapse -->*/
/*             </div>*/
/*             <!-- /.navbar-static-side -->*/
/*         </nav>*/
/*         <div id="page-wrapper">*/
/*         {%block container %}*/
/*         {%endblock%}*/
/*   */
/*   */
/*   */
/*   */
/*   */
/*   */
/*        </div>*/
/*       <!-- /#page-wrapper -->*/
/*    </div>*/
/*     <!-- /#wrapper -->*/
/*     <!-- Bootstrap Core JavaScript -->*/
/*     <script src="{{asset('back/js/bootstrap.min.js')}}"></script>*/
/* </body>*/
/* </html>*/
/* */
