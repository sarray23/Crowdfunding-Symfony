<?php

/* EspritFrontOfficeBundle::layout1.html.twig */
class __TwigTemplate_780dc31d68926c1c4700d21729863f4d96f74f8c0b800db57c11ac0c833c24c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'login' => array($this, 'block_login'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Welcome to CrowdRise</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no\" />
    <link href='";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritfrontoffice/css/normalize.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritfrontoffice/css/jquery.sidr.light.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritfrontoffice/css/animate.min.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo "bundles/espritfrontoffice/css/md-slider.css";
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritfrontoffice/css/style.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/table.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dcsrating/css/rating.css"), "html", null, true);
        echo "\" />


    <!--[if lte IE 7]>
    <link rel=\"stylesheet\" href=\"css/ie7.css\"/>
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel=\"stylesheet\" href=\"css/ie8.css\"/>
    <![endif]-->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\"/>
    <!--[if lt IE 9]>
    <script type=\"text/javascript\" src=\"js/html5.js\"></script>
    <![endif]-->
    <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/raphael-min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.touchwipe.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/md_slider.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.sidr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.tweet.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/pie.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>

</head>
<body>

    <header id=\"header\">
        <div class=\"wrap-top-menu\">
            <div class=\"container_12 clearfix\">
                <div class=\"grid_12\">
                    <nav class=\"top-menu\">
                        <ul id=\"main-menu\" class=\"nav nav-horizontal clearfix\">
                            <li class=\"active\"><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo "<img src =\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/users/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "path", array()))), "html", null, true);
            echo " \"  width=\"20\" height=\"17\"alt=\"\"  > ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        }
        echo " Home</a></li>
                            
                            <li class=\"sep\"></li>
                            <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_help");
        echo "\">Help</a></li>
                            <li class=\"sep\"></li>
                            <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_contact");
        echo "\">Contact</a></li>
                        </ul>
                        <a id=\"btn-toogle-menu\" class=\"btn-toogle-menu\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#alternate-menu"), "html", null, true);
        echo "\">
                            <span class=\"line-bar\"></span>
                            <span class=\"line-bar\"></span>
                            <span class=\"line-bar\"></span>
                        </a>
                        <div id=\"right-menu\">
                            <ul class=\"alternate-menu\">
                                <li><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Home</a></li>
                                <li><a href=\"";
        // line 61
        echo "all-pages.html";
        echo "\">All Pages</a></li>
                                <li><a href=\"";
        // line 62
        echo "how-it-work.html";
        echo "\">Help</a></li>
                                <li><a href=\"";
        // line 63
        echo "contact.html";
        echo "\">Contact us</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class=\"top-message clearfix\">
                        <i class=\"icon iFolder\"></i>
                        
                        <i class=\"icon iX\"></i>
                        <div class=\"clear\"></div>
                    </div>
                    <i id=\"sys_btn_toggle_search\" class=\"icon iBtnRed make-right\"></i>
                </div>
            </div>
        </div><!-- end: .wrap-top-menu -->
        <div class=\"container_12 clearfix\">
            <div class=\"grid_12 header-content\">
                <div id=\"sys_header_right\" class=\"header-right\">
                    <div class=\"account-panel\">
                       
                             
                            ";
        // line 83
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 84
            echo "                             <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\" class=\"btn btn-red btn-submit-all\" >Compte</a>
                             ";
        } else {
            // line 86
            echo "                       <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" class=\"btn btn-red btn-submit-all\">Register</a>
                        ";
        }
        // line 88
        echo "                        
                        ";
        // line 89
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 90
            echo "                         <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btn-red btn-submit-all\" > Logout</a>
                     ";
        } else {
            // line 92
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" class=\"btn btn-black sys_show_popup_login\"> Login</a>
                        ";
        }
        // line 94
        echo "                    </div>
                    
                </div>
                <div class=\"header-left\">
                    <h1 id=\"logo\">
                        <a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\$SITE_NAME\"/></a>
                    </h1>
                    <div class=\"main-nav clearfix\">
                        <div class=\"nav-item\">
                            <a href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_liste");
        echo "\" class=\"nav-title\">CrowdFunding</a>
                            <p class=\"rs nav-description\">Projets </p>
                        </div>
                        <span class=\"sep\"></span>
                        <div class=\"nav-item\">
                            <a href=\"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("esprit_application_afficher_idee");
        echo "\" class=\"nav-title\">CrowdSourcing</a>
                            <p class=\"rs nav-description\">Idées</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </header><!--end: #header -->
    
    ";
        // line 118
        $this->displayBlock('content', $context, $blocks);
        // line 387
        echo "     <footer id=\"footer\">
        <div class=\"container_12 main-footer\">
            <div class=\"grid_3 about-us\">
                <h3 class=\"rs title\">à propos</h3>
                <p class=\"rs description\">CrowdRise est un site web destiné au financement participatif des projets , ainsi qu'à la collecte et le partage des idées innovantes</p>
                <p class=\"rs email\"><a class=\"fc-default  be-fc-orange\" href=\"mailto:info@megadrupal.com\">info@crowdrise.com</a></p>
                <p class=\"rs\">+216 71 69 69 69</p>
            </div><!--end: .contact-info -->
            <div class=\"grid_3 recent-tweets\">
                <h3 class=\"rs title\">Réalisé par </h3>
                <p class=\"rs description\">
                    L'équipe Gat3an , un groupe d'étudiants en ingénieurie informatique à l'Esprit .     
                </p>
            </div><!--end: .recent-tweets -->
            <div class=\"clear clear-2col\"></div>
            <div class=\"grid_3 email-newsletter\">
                <h3 class=\"rs title\">Nous contacet</h3>
                <div class=\"inner\">
                    <p class=\"rs description\">Donnez vos avis vers notre boite mail</p>
                    <form action=\"#\">
                        <div class=\"form form-email\">
                            
                            <a href=\"";
        // line 409
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_contact");
        echo "\"><h2>Contacter</h2></a>
                        </div>
                    </form>
                </div>
            </div><!--end: .email-newsletter -->
            <div class=\"grid_3\">
                <h3 class=\"rs title\">Découvrir le site</h3>
                <div class=\"footer-menu\">
                    <ul class=\"rs\">
                        <li><a class=\"be-fc-orange\" href=\"";
        // line 418
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_help");
        echo "\">Qui sommes nous</a></li>
                        <li><a class=\"be-fc-orange\" href=\"";
        // line 419
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_ajout");
        echo "\">Débuter votre projet</a></li>
                        <li><a class=\"be-fc-orange\" href=\"";
        // line 420
        echo $this->env->getExtension('routing')->getPath("esprit_application_add_idee");
        echo "\">Poster votre idée</a></li>
                        <li><a class=\"be-fc-orange\" href=\"";
        // line 421
        echo $this->env->getExtension('routing')->getPath("esprit_application_list_expert");
        echo "\">Les utilisateurs</a></li>
                        <li><a class=\"be-fc-orange\" href=\"";
        // line 422
        echo $this->env->getExtension('routing')->getPath("esprit_application_listeprobleme");
        echo "\">Les problémes</a></li>
                    </ul>
                    <ul class=\"rs\">
                        <li><a class=\"be-fc-orange\" href=\"";
        // line 425
        echo $this->env->getExtension('routing')->getPath("esprit_application_ProbSoln");
        echo "\">Les solutions</a></li>
                        <li><a class=\"be-fc-orange\" href=\"";
        // line 426
        echo $this->env->getExtension('routing')->getPath("esprit_ajout_reclamation");
        echo "\">Les réclamations</a></li>
                            </ul>
                    <div class=\"clear\"></div>
                </div>
            </div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"copyright\">
            <div class=\"container_12\">
                <div class=\"grid_12\">
                    <a class=\"logo-footer\" href=\"#\"><img src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo-2.png"), "html", null, true);
        echo "\" alt=\"\$SITE_NAME\"/></a>
                    <p class=\"rs term-privacy\">
                        <a class=\"fw-b be-fc-orange\" href=\"#\">Terms & Conditions</a>
                        <span class=\"sep\">/</span>
                        <a class=\"fw-b be-fc-orange\" href=\"#\">Privacy Policy</a>
                        <span class=\"sep\">/</span>
                        <a class=\"fw-b be-fc-orange\" href=\"#\">FAQ</a>
                    </p>
                    <p class=\"rs ta-c fc-gray-dark site-copyright\">Design proposé par Gat3an .</p>
                </div>
                <div class=\"clear\"></div>
            </div>
        </div>
    </footer><!--end: #footer -->



               
 <div class=\"popup-common\" id=\"sys_popup_common\">
    <div class=\"overlay-bl-bg\"></div>
    <div class=\"container_12 pop-content\">
        <div class=\"grid_12 wrap-btn-close ta-r\">
            <i class=\"icon iBigX closePopup\"></i>
        </div>
       
        <div class=\"grid_6 prefix_1\">
            <div class=\"form login-form\">
                <form action=\"#\">
                    <h3 class=\"rs title-form\">Register</h3>
                    <div class=\"box-white\">
                        <h4 class=\"rs title-box\">Bienvenue à Crowdrise</h4>
                        <p class=\"rs\">Merci de s'inscrire</p>
                        <div class=\"form-action\">
                            <label for=\"txt_name\">
                            </label>
                            <div class=\"wrap-2col clearfix\">
                                <div class=\"col\">
                                    <label for=\"txt_email\">
                                    </label>
                                    <label for=\"txt_re_email\">
                                    </label>
                                </div>
                                <div class=\"col\">
                                    <label for=\"txt_password\">
                                    </label>
                                    <label for=\"txt_re_password\">
                                    </label>
                                </div>
                            </div>
                            <p class=\"rs pb10\"></p>
                            <p class=\"rs ta-c\">
                                 <a href=\"";
        // line 487
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-red btn-submit-all\">Register</a>
                                
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>

";
        // line 496
        $this->displayBlock('login', $context, $blocks);
        // line 499
        echo "<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-20585382-5', 'megadrupal.com');
  ga('send', 'pageview');

</script>
</body>
</html>";
    }

    // line 118
    public function block_content($context, array $blocks = array())
    {
        // line 119
        echo "      <center><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/gif1.gif"), "html", null, true);
        echo "\"></center>

    
    <div class=\"home-feature-category\">
        <div class=\"container_12 clearfix\">
            <div class=\"grid_4 left-lst-category\">
                <div class=\"wrap-lst-category\">
                    <h3 class=\"title-welcome rs\">Bienvenue à Crowdrise!</h3>
                    <p class=\"description rs\">Découvre les idées innovantes posté par les utilisateurs de notre plateforme , et poster votre idée ...</p>
                    <nav class=\"lst-category\">
                        <ul class=\"rs nav nav-category\">
                            <li>
                                <a href=\"";
        // line 131
        echo $this->env->getExtension('routing')->getPath("esprit_application_type_idee", array("type" => "Musique"));
        echo "\">
                                    Musique
                                    <span class=\"count-val\"></span>
                                    <i class=\"icon iPlugGray\"></i>
                                </a>
                            </li>
                            <li >
                                <a href=\"";
        // line 138
        echo $this->env->getExtension('routing')->getPath("esprit_application_type_idee", array("type" => "Sports"));
        echo "\">
                                    Sports
                                    <span class=\"count-val\"></span>
                                    <i class=\"icon iPlugGray\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 145
        echo $this->env->getExtension('routing')->getPath("esprit_application_type_idee", array("type" => "Technologie"));
        echo "\">
                                    Technologie
                                    <span class=\"count-val\"></span>
                                    <i class=\"icon iPlugGray\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 152
        echo $this->env->getExtension('routing')->getPath("esprit_application_type_idee", array("type" => "Santé"));
        echo "\">
                                    Santé
                                    <span class=\"count-val\"></span>
                                    <i class=\"icon iPlugGray\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 159
        echo $this->env->getExtension('routing')->getPath("esprit_application_type_idee", array("type" => "Culture"));
        echo "\">
                                    Culture
                                    <span class=\"count-val\"></span>
                                    <i class=\"icon iPlugGray\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 166
        echo $this->env->getExtension('routing')->getPath("esprit_application_type_idee", array("type" => "Affaires"));
        echo "\">
                                    Affaires
                                    <span class=\"count-val\"></span>
                                    <i class=\"icon iPlugGray\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 173
        echo $this->env->getExtension('routing')->getPath("esprit_application_type_idee", array("type" => "Photographie"));
        echo "\">
                                    Photographie
                                    <span class=\"count-val\"></span>
                                    <i class=\"icon iPlugGray\"></i>
                                </a>
                            </li>
                        </ul>
                        <p class=\"rs view-all-category\">
                            <a href=\"";
        // line 181
        echo $this->env->getExtension('routing')->getPath("esprit_application_afficher_idee");
        echo "\" class=\"be-fc-orange\">+ Voir tous les types</a>
                        </p><br>
                    </nav><!--end: .lst-category -->
                </div>
            </div><!--end: .left-lst-category -->
            <div class=\"grid_8 marked-category\">
                <div class=\"wrap-title clearfix\">
                    <h2 class=\"title-mark rs\">Top : <span class=\"fc-orange\">Idées</span></h2>
                    <a href=\"";
        // line 189
        echo $this->env->getExtension('routing')->getPath("esprit_application_afficher_idee");
        echo "\" class=\"count-project be-fc-orange\">Voir toutes les idées <span class=\"fw-b\">24</span> Comics projects</a>
                </div>
                <div class=\"box-marked-project project-short\">
                    <div class=\"top-project-info\">
                        <div class=\"content-info-short clearfix\">
                            <a href=\"#\" class=\"thumb-img\">
                                ";
        // line 195
        $context["val"] = 0;
        // line 196
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["idees"]) ? $context["idees"] : $this->getContext($context, "idees")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 197
            echo "                                    ";
            $context["val"] = ((isset($context["val"]) ? $context["val"] : $this->getContext($context, "val")) + 1);
            // line 198
            echo "                                    ";
            if (((isset($context["val"]) ? $context["val"] : $this->getContext($context, "val")) == 1)) {
                // line 199
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/idee/" . $this->getAttribute($context["i"], "path", array()))), "html", null, true);
                echo "\" alt=\"\$TITLE\">
                                
                            </a>
                            <div class=\"wrap-short-detail\">
                                <h3 class=\"rs acticle-title\"><a class=\"be-fc-orange\" href=\"";
                // line 203
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("project.html"), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "titre", array()), "html", null, true);
                echo "</a></h3>
                                <p class=\"rs tiny-desc\">Type <a href=\"";
                // line 204
                echo "profile.html";
                echo "\" class=\"fw-b fc-gray be-fc-orange\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "type", array()), "html", null, true);
                echo "</a></p>
                                <p class=\"rs title-description\"> ";
                // line 205
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "description", array()), "html", null, true);
                echo "</p>
                            </div><br><br>
                            <center>
                            <p class=\"rs clearfix comment-view\"><br><br><br>
                             ";
                // line 209
                $this->loadTemplate("DCSRatingBundle:Rating:control.html.twig", "EspritFrontOfficeBundle::layout1.html.twig", 209)->display(array_merge($context, array("id" => ($this->getAttribute($context["i"], "id", array()) * 10000))));
                // line 210
                echo "
                            </p>
                            </center>
                        </div>
                              
                    </div><!--end: .top-project-info -->
                    <div class=\"bottom-project-info clearfix\">
                        <div class=\"project-progress sys_circle_progress\" data-percent=\"";
                // line 217
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["rates"]) ? $context["rates"] : $this->getContext($context, "rates")));
                foreach ($context['_seq'] as $context["_key"] => $context["rate"]) {
                    // line 218
                    echo "                                            ";
                    if (((10000 * $this->getAttribute($context["i"], "id", array())) == $this->getAttribute($context["rate"], "id", array()))) {
                        echo " ";
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["rate"], "rate", array()) * 20), "html", null, true);
                    }
                    // line 219
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rate'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "  \">
                            <div class=\"sys_holder_sector\"></div>
                        </div>
                        <div class=\"group-fee clearfix\">
                            <div class=\"fee-item\">
                                <p class=\"rs lbl\">Proposée par</p>
                                <span class=\"val\">";
                // line 225
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    if (($this->getAttribute($context["i"], "idPorteurDeProjet", array()) == $this->getAttribute($context["user"], "id", array()))) {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</span>
                                
                                </div>
                            <div class=\"sep\"></div>
                            <div class=\"fee-item\">
                                <p class=\"rs lbl\">Note actuelle</p>
                                            ";
                // line 231
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["rates"]) ? $context["rates"] : $this->getContext($context, "rates")));
                foreach ($context['_seq'] as $context["_key"] => $context["rate"]) {
                    // line 232
                    echo "                                            <span class=\"val\">";
                    if (((10000 * $this->getAttribute($context["i"], "id", array())) == $this->getAttribute($context["rate"], "id", array()))) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rate"], "rate", array()), "html", null, true);
                        echo " ";
                    }
                    echo "</span>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rate'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 233
                echo "                            </div>
                            <div class=\"sep\"></div>
                            
                        </div>
                            ";
            }
            // line 238
            echo "                                 ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        echo "                        <div class=\"clear\"></div>
                    </div>
                </div>
            </div><!--end: .marked-category -->
            <div class=\"clear\"></div>
        </div>
    </div><!--end: .home-feature-category -->
    <div class=\"home-popular-project\">
        <div class=\"container_12\">
            <div class=\"grid_12 wrap-title\">
                <h2 class=\"common-title\">Projets</h2>
                <a class=\"be-fc-orange\" href=\"";
        // line 250
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_liste");
        echo "\">Voir tous</a>
                
                  <div class=\"navigation\">

        ";
        // line 254
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["mds"]) ? $context["mds"] : $this->getContext($context, "mds")));
        echo "

    
    ";
        // line 257
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["idee"]) {
            // line 258
            echo "            

        
   <div class=\"grid_3\">
                            <div class=\"project-short sml-thumb\">
                                <div class=\"top-project-info\">
                                    <div class=\"content-info-short clearfix\">
        <a href=\"#\" class=\"thumb-img\">
                                            <img src=\"";
            // line 266
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/projets/" . $this->getAttribute($context["idee"], "path", array()))), "html", null, true);
            echo "\" id=\"img\"  >
                                        </a>
                                        <div class=\"wrap-short-detail\">
                                            <h3 class=\"rs acticle-title\"><a class=\"be-fc-orange\" href=\"";
            // line 269
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_front_office_detail", array("id" => $this->getAttribute($context["idee"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "titre", array()), "html", null, true);
            echo "</a></h3>
                                            <p class=\"rs tiny-desc\">Type : <a href=\"";
            // line 270
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_application_type_idee", array("type" => $this->getAttribute($context["idee"], "type", array()))), "html", null, true);
            echo "\" class=\"fw-b fc-gray be-fc-orange\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "type", array()), "html", null, true);
            echo "</a></p>
                                            <p class=\"rs title-description\">";
            // line 271
            echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "description", array()), "html", null, true);
            echo "</p>
                                            <p class=\"rs project-location\">
                                               Projet proposé par <br>
                                               <span class=\"val\">
                                               ";
            // line 275
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                if (($this->getAttribute($this->getAttribute($context["idee"], "idUser", array()), "id", array()) == $this->getAttribute($context["user"], "id", array()))) {
                    echo " -- ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                    echo " -- ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 276
            echo "                                               </span>
                                              
                                                
                                               
                                            </p>
                                        </div>
        
        </div>
                                </div>
                                <div class=\"bottom-project-info clearfix\">
                                    
                                        
                                    <div class=\"group-fee clearfix\">
                                        <div class=\"fee-item\">
                                            <h4>Canaouite : ";
            // line 290
            echo twig_escape_filter($this->env, $this->getAttribute($context["idee"], "canaouite", array()), "html", null, true);
            echo "</h4>
                                            <center>
                                            <a href=\"";
            // line 292
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_application_funding", array("idprojet" => $this->getAttribute($context["idee"], "id", array()))), "html", null, true);
            echo "\"><h2>Financer</h2></a>
                                            </center>
                                        </div>
                                        <div class=\"sep\"></div>
                                        
                                    </div>

                                    <div class=\"clear\"></div>
                                </div>
                            </div>
                        </div>
        
      
        
        
                                              
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 309
        echo "    
</div>
                
                
            </div>
            <div class=\"clear\"></div>
            <div class=\"lst-popular-project clearfix\">
                <div class=\"grid_3\">
                    <div class=\"project-short sml-thumb\">
                        
                    </div>
                </div><!--end: .grid_3 > .project-short-->
                <div class=\"grid_3\">
                    <div class=\"project-short sml-thumb\">
                        
                    </div>
                </div><!--end: .grid_3 > .project-short-->
                <div class=\"grid_3\">
                    <div class=\"project-short sml-thumb\">
                        
                    </div>
                </div><!--end: .grid_3 > .project-short-->
                <div class=\"grid_3\">
                    <div class=\"project-short sml-thumb\">
                        
                    </div>
                </div><!--end: .grid_3 > .project-short-->
            </div>
        </div>
    </div><!--end: .home-popular-project -->
    <div class=\"home-discover-friends\">
        <div class=\"container_12\">
            <div class=\"row-friends\">
                <a class=\"thumb-avatar\" href=\"#\"><img src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ex/th-119x119-1.jpg"), "html", null, true);
        echo "\" alt=\"\$USER_NAME\"/></a>
                <a class=\"thumb-avatar\" href=\"#\"><img src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ex/th-119x119-2.jpg"), "html", null, true);
        echo "\" alt=\"\$USER_NAME\"/></a>
                <a class=\"thumb-avatar\" href=\"#\"><img src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ex/th-119x119-3.jpg"), "html", null, true);
        echo "\" alt=\"\$USER_NAME\"/></a>
                <a class=\"thumb-avatar\" href=\"#\"><img src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ex/th-119x119-4.jpg"), "html", null, true);
        echo "\" alt=\"\$USER_NAME\"/></a>
                <a class=\"thumb-avatar\" href=\"#\"><img src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ex/th-119x119-5.jpg"), "html", null, true);
        echo "\" alt=\"\$USER_NAME\"/></a>
                <a class=\"thumb-avatar\" href=\"#\"><img src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ex/th-119x119-6.jpg"), "html", null, true);
        echo "\" alt=\"\$USER_NAME\"/></a>
                <a class=\"thumb-avatar\" href=\"#\"><img src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ex/th-119x119-7.jpg"), "html", null, true);
        echo "\" alt=\"\$USER_NAME\"/></a>
                <a class=\"thumb-avatar\" href=\"#\"><img src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ex/th-119x119-8.jpg"), "html", null, true);
        echo "\" alt=\"\$USER_NAME\"/></a>
                <div class=\"clear\"></div>
            </div>
            <div class=\"row-friends row-connect-fb\">
                <a class=\"thumb-avatar t-first\" href=\"#\"><img src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ex/th-119x119-17.jpg"), "html", null, true);
        echo "\" alt=\"\$USER_NAME\"/></a>
                <div class=\"connect-fb\">
                    <p class=\"rs description\">Découvre qui ont posé des idées et des projets!</p>
                    <a href=\"";
        // line 356
        echo $this->env->getExtension('routing')->getPath("esprit_application_list_expert");
        echo "\" class=\"btn btn-fb\">Découvre les CrowdRisers </a>
                </div>
                <a class=\"thumb-avatar t-last\" href=\"#\"><img src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ex/th-119x119-1.jpg"), "html", null, true);
        echo "\" alt=\"\$USER_NAME\"/></a>
                <div class=\"clear\"></div>
            </div>
            <div class=\"row-friends\">
                <a class=\"thumb-avatar\" href=\"#\"><img src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ex/th-119x119-9.jpg"), "html", null, true);
        echo "\" alt=\"\$USER_NAME\"/></a>
                <a class=\"thumb-avatar\" href=\"#\"><img src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ex/th-119x119-10.jpg"), "html", null, true);
        echo "\" alt=\"\$USER_NAME\"/></a>
                <a class=\"thumb-avatar\" href=\"#\"><img src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ex/th-119x119-11.jpg"), "html", null, true);
        echo "\" alt=\"\$USER_NAME\"/></a>
                <a class=\"thumb-avatar\" href=\"#\"><img src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ex/th-119x119-12.jpg"), "html", null, true);
        echo "\" alt=\"\$USER_NAME\"/></a>
                <a class=\"thumb-avatar\" href=\"#\"><img src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ex/th-119x119-13.jpg"), "html", null, true);
        echo "\" alt=\"\$USER_NAME\"/></a>
                <a class=\"thumb-avatar\" href=\"#\"><img src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ex/th-119x119-14.jpg"), "html", null, true);
        echo "\" alt=\"\$USER_NAME\"/></a>
                <a class=\"thumb-avatar\" href=\"#\"><img src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ex/th-119x119-15.jpg"), "html", null, true);
        echo "\" alt=\"\$USER_NAME\"/></a>
                <a class=\"thumb-avatar\" href=\"#\"><img src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ex/th-119x119-16.jpg"), "html", null, true);
        echo "\" alt=\"\$USER_NAME\"/></a>
                <div class=\"clear\"></div>
            </div>
        </div>
    </div><!--end: .home-discover-friends -->

    <div class=\"additional-info-line\">
        <div class=\"container_12\">
            <div class=\"grid_9\">On vise la satisfaction de notre clientelle , c'est notre source d'inspiration et de continuation</h2>
                <p class=\"rs description\">Dans le cas d'un probléme , merci de nous réclamer</p>
            </div>
            <div class=\"grid_3 ta-r\">
                <a class=\"btn bigger btn-red\" href=\"";
        // line 381
        echo $this->env->getExtension('routing')->getPath("esprit_ajout_reclamation");
        echo "\">Réclamation</a>
            </div>
            <div class=\"clear\"></div>
        </div>
    </div><!--end: .additional-info-line -->
    ";
    }

    // line 496
    public function block_login($context, array $blocks = array())
    {
        // line 497
        echo "        
";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle::layout1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  937 => 497,  934 => 496,  924 => 381,  909 => 369,  905 => 368,  901 => 367,  897 => 366,  893 => 365,  889 => 364,  885 => 363,  881 => 362,  874 => 358,  869 => 356,  863 => 353,  856 => 349,  852 => 348,  848 => 347,  844 => 346,  840 => 345,  836 => 344,  832 => 343,  828 => 342,  793 => 309,  770 => 292,  765 => 290,  749 => 276,  736 => 275,  729 => 271,  723 => 270,  717 => 269,  711 => 266,  701 => 258,  697 => 257,  691 => 254,  684 => 250,  671 => 239,  657 => 238,  650 => 233,  637 => 232,  633 => 231,  615 => 225,  602 => 219,  596 => 218,  592 => 217,  583 => 210,  581 => 209,  574 => 205,  568 => 204,  562 => 203,  554 => 199,  551 => 198,  548 => 197,  530 => 196,  528 => 195,  519 => 189,  508 => 181,  497 => 173,  487 => 166,  477 => 159,  467 => 152,  457 => 145,  447 => 138,  437 => 131,  421 => 119,  418 => 118,  403 => 499,  401 => 496,  389 => 487,  335 => 436,  322 => 426,  318 => 425,  312 => 422,  308 => 421,  304 => 420,  300 => 419,  296 => 418,  284 => 409,  260 => 387,  258 => 118,  245 => 108,  237 => 103,  228 => 99,  221 => 94,  215 => 92,  209 => 90,  207 => 89,  204 => 88,  198 => 86,  192 => 84,  190 => 83,  167 => 63,  163 => 62,  159 => 61,  155 => 60,  145 => 53,  140 => 51,  135 => 49,  122 => 46,  108 => 35,  104 => 34,  100 => 33,  96 => 32,  92 => 31,  88 => 30,  84 => 29,  80 => 28,  76 => 27,  69 => 23,  57 => 14,  53 => 13,  49 => 12,  45 => 11,  41 => 10,  37 => 9,  33 => 8,  29 => 7,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <title>Welcome to CrowdRise</title>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />*/
/*     <link href='{{asset('http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300')}}' rel='stylesheet' type='text/css'>*/
/*     <link rel="stylesheet" href="{{asset('bundles/espritfrontoffice/css/normalize.css')}}"/>*/
/*     <link rel="stylesheet" href="{{asset('bundles/espritfrontoffice/css/jquery.sidr.light.css')}}"/>*/
/* 	<link rel="stylesheet" href="{{asset('bundles/espritfrontoffice/css/animate.min.css')}}"/>*/
/* 	<link rel="stylesheet" href="{{('bundles/espritfrontoffice/css/md-slider.css')}}"/>*/
/*     <link rel="stylesheet" href="{{asset('bundles/espritfrontoffice/css/style.css')}}"/>*/
/*         <link rel="stylesheet" href="{{asset('css/table.css')}}"/>*/
/*             <link rel="stylesheet" href="{{ asset('bundles/dcsrating/css/rating.css') }}" />*/
/* */
/* */
/*     <!--[if lte IE 7]>*/
/*     <link rel="stylesheet" href="css/ie7.css"/>*/
/*     <![endif]-->*/
/*     <!--[if lte IE 8]>*/
/*     <link rel="stylesheet" href="css/ie8.css"/>*/
/*     <![endif]-->*/
/*     <link rel="stylesheet" href="{{asset('css/responsive.css')}}"/>*/
/*     <!--[if lt IE 9]>*/
/*     <script type="text/javascript" src="js/html5.js"></script>*/
/*     <![endif]-->*/
/*     <script type="text/javascript" src="{{asset('js/raphael-min.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('js/jquery-1.9.1.min.js')}}"></script>*/
/* 	<script type="text/javascript" src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('js/jquery.touchwipe.min.js')}}"></script>*/
/* 	<script type="text/javascript" src="{{asset('js/md_slider.min.js')}}"></script>*/
/* 	<script type="text/javascript" src="{{asset('js/jquery.sidr.min.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('js/jquery.tweet.min.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('js/pie.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('js/script.js')}}"></script>*/
/* */
/* </head>*/
/* <body>*/
/* */
/*     <header id="header">*/
/*         <div class="wrap-top-menu">*/
/*             <div class="container_12 clearfix">*/
/*                 <div class="grid_12">*/
/*                     <nav class="top-menu">*/
/*                         <ul id="main-menu" class="nav nav-horizontal clearfix">*/
/*                             <li class="active"><a href="{{path('fos_user_security_login')}}">{% if is_granted('IS_AUTHENTICATED_FULLY') %}<img src ="{{asset('uploads/users/'~app.user.path)}} "  width="20" height="17"alt=""  > {{app.user.username}}{% endif %} Home</a></li>*/
/*                             */
/*                             <li class="sep"></li>*/
/*                             <li><a href="{{path('esprit_front_office_help')}}">Help</a></li>*/
/*                             <li class="sep"></li>*/
/*                             <li><a href="{{path('esprit_front_office_contact')}}">Contact</a></li>*/
/*                         </ul>*/
/*                         <a id="btn-toogle-menu" class="btn-toogle-menu" href="{{asset('#alternate-menu')}}">*/
/*                             <span class="line-bar"></span>*/
/*                             <span class="line-bar"></span>*/
/*                             <span class="line-bar"></span>*/
/*                         </a>*/
/*                         <div id="right-menu">*/
/*                             <ul class="alternate-menu">*/
/*                                 <li><a href="{{path('fos_user_security_login')}}">Home</a></li>*/
/*                                 <li><a href="{{('all-pages.html')}}">All Pages</a></li>*/
/*                                 <li><a href="{{('how-it-work.html')}}">Help</a></li>*/
/*                                 <li><a href="{{('contact.html')}}">Contact us</a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </nav>*/
/*                     <div class="top-message clearfix">*/
/*                         <i class="icon iFolder"></i>*/
/*                         */
/*                         <i class="icon iX"></i>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                     <i id="sys_btn_toggle_search" class="icon iBtnRed make-right"></i>*/
/*                 </div>*/
/*             </div>*/
/*         </div><!-- end: .wrap-top-menu -->*/
/*         <div class="container_12 clearfix">*/
/*             <div class="grid_12 header-content">*/
/*                 <div id="sys_header_right" class="header-right">*/
/*                     <div class="account-panel">*/
/*                        */
/*                              */
/*                             {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                              <a href="{{path('fos_user_profile_edit')}}" class="btn btn-red btn-submit-all" >Compte</a>*/
/*                              {% else %}*/
/*                        <a href="{{path('fos_user_registration_register')}}" class="btn btn-red btn-submit-all">Register</a>*/
/*                         {%endif%}*/
/*                         */
/*                         {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                          <a href="{{path('fos_user_security_logout')}}" class="btn btn-red btn-submit-all" > Logout</a>*/
/*                      {% else %}*/
/*                         <a href="{{path('fos_user_security_login')}}" class="btn btn-black sys_show_popup_login"> Login</a>*/
/*                         {%endif%}*/
/*                     </div>*/
/*                     */
/*                 </div>*/
/*                 <div class="header-left">*/
/*                     <h1 id="logo">*/
/*                         <a href="{{path('fos_user_security_login')}}"><img src="{{asset('images/logo.png')}}" alt="$SITE_NAME"/></a>*/
/*                     </h1>*/
/*                     <div class="main-nav clearfix">*/
/*                         <div class="nav-item">*/
/*                             <a href="{{path('esprit_front_office_liste')}}" class="nav-title">CrowdFunding</a>*/
/*                             <p class="rs nav-description">Projets </p>*/
/*                         </div>*/
/*                         <span class="sep"></span>*/
/*                         <div class="nav-item">*/
/*                             <a href="{{path('esprit_application_afficher_idee')}}" class="nav-title">CrowdSourcing</a>*/
/*                             <p class="rs nav-description">Idées</p>*/
/*                         </div>*/
/*                         */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </header><!--end: #header -->*/
/*     */
/*     {% block content %}*/
/*       <center><img src="{{asset('images/gif1.gif')}}"></center>*/
/* */
/*     */
/*     <div class="home-feature-category">*/
/*         <div class="container_12 clearfix">*/
/*             <div class="grid_4 left-lst-category">*/
/*                 <div class="wrap-lst-category">*/
/*                     <h3 class="title-welcome rs">Bienvenue à Crowdrise!</h3>*/
/*                     <p class="description rs">Découvre les idées innovantes posté par les utilisateurs de notre plateforme , et poster votre idée ...</p>*/
/*                     <nav class="lst-category">*/
/*                         <ul class="rs nav nav-category">*/
/*                             <li>*/
/*                                 <a href="{{path('esprit_application_type_idee',{'type':'Musique'})}}">*/
/*                                     Musique*/
/*                                     <span class="count-val"></span>*/
/*                                     <i class="icon iPlugGray"></i>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li >*/
/*                                 <a href="{{path('esprit_application_type_idee',{'type':'Sports'})}}">*/
/*                                     Sports*/
/*                                     <span class="count-val"></span>*/
/*                                     <i class="icon iPlugGray"></i>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{path('esprit_application_type_idee',{'type':'Technologie'})}}">*/
/*                                     Technologie*/
/*                                     <span class="count-val"></span>*/
/*                                     <i class="icon iPlugGray"></i>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{path('esprit_application_type_idee',{'type':'Santé'})}}">*/
/*                                     Santé*/
/*                                     <span class="count-val"></span>*/
/*                                     <i class="icon iPlugGray"></i>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{path('esprit_application_type_idee',{'type':'Culture'})}}">*/
/*                                     Culture*/
/*                                     <span class="count-val"></span>*/
/*                                     <i class="icon iPlugGray"></i>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{path('esprit_application_type_idee',{'type':'Affaires'})}}">*/
/*                                     Affaires*/
/*                                     <span class="count-val"></span>*/
/*                                     <i class="icon iPlugGray"></i>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{path('esprit_application_type_idee',{'type':'Photographie'})}}">*/
/*                                     Photographie*/
/*                                     <span class="count-val"></span>*/
/*                                     <i class="icon iPlugGray"></i>*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/*                         <p class="rs view-all-category">*/
/*                             <a href="{{path('esprit_application_afficher_idee')}}" class="be-fc-orange">+ Voir tous les types</a>*/
/*                         </p><br>*/
/*                     </nav><!--end: .lst-category -->*/
/*                 </div>*/
/*             </div><!--end: .left-lst-category -->*/
/*             <div class="grid_8 marked-category">*/
/*                 <div class="wrap-title clearfix">*/
/*                     <h2 class="title-mark rs">Top : <span class="fc-orange">Idées</span></h2>*/
/*                     <a href="{{path('esprit_application_afficher_idee')}}" class="count-project be-fc-orange">Voir toutes les idées <span class="fw-b">24</span> Comics projects</a>*/
/*                 </div>*/
/*                 <div class="box-marked-project project-short">*/
/*                     <div class="top-project-info">*/
/*                         <div class="content-info-short clearfix">*/
/*                             <a href="#" class="thumb-img">*/
/*                                 {% set val=0 %}*/
/*                                 {%for i in idees%}*/
/*                                     {% set val = val+1 %}*/
/*                                     {%if val==1 %}*/
/*                                 <img src="{{ asset('uploads/idee/'~i.path)}}" alt="$TITLE">*/
/*                                 */
/*                             </a>*/
/*                             <div class="wrap-short-detail">*/
/*                                 <h3 class="rs acticle-title"><a class="be-fc-orange" href="{{asset('project.html')}}"> {{i.titre}}</a></h3>*/
/*                                 <p class="rs tiny-desc">Type <a href="{{('profile.html')}}" class="fw-b fc-gray be-fc-orange"> {{i.type}}</a></p>*/
/*                                 <p class="rs title-description"> {{i.description}}</p>*/
/*                             </div><br><br>*/
/*                             <center>*/
/*                             <p class="rs clearfix comment-view"><br><br><br>*/
/*                              {% include 'DCSRatingBundle:Rating:control.html.twig' with {'id' : i.id*10000} %}*/
/* */
/*                             </p>*/
/*                             </center>*/
/*                         </div>*/
/*                               */
/*                     </div><!--end: .top-project-info -->*/
/*                     <div class="bottom-project-info clearfix">*/
/*                         <div class="project-progress sys_circle_progress" data-percent="{% for rate in rates %}*/
/*                                             {% if 10000*i.id==rate.id %} {{(rate.rate)*20}}{%endif%}*/
/*                                             {% endfor %}  ">*/
/*                             <div class="sys_holder_sector"></div>*/
/*                         </div>*/
/*                         <div class="group-fee clearfix">*/
/*                             <div class="fee-item">*/
/*                                 <p class="rs lbl">Proposée par</p>*/
/*                                 <span class="val">{% for user in users %}{% if i.idPorteurDeProjet==user.id %}{{user.username}}{%endif%}{%endfor%}</span>*/
/*                                 */
/*                                 </div>*/
/*                             <div class="sep"></div>*/
/*                             <div class="fee-item">*/
/*                                 <p class="rs lbl">Note actuelle</p>*/
/*                                             {% for rate in rates %}*/
/*                                             <span class="val">{% if 10000*i.id==rate.id %} {{rate.rate}} {%endif%}</span>*/
/*                                             {% endfor %}                            </div>*/
/*                             <div class="sep"></div>*/
/*                             */
/*                         </div>*/
/*                             {%endif%}*/
/*                                  {%endfor%}*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div><!--end: .marked-category -->*/
/*             <div class="clear"></div>*/
/*         </div>*/
/*     </div><!--end: .home-feature-category -->*/
/*     <div class="home-popular-project">*/
/*         <div class="container_12">*/
/*             <div class="grid_12 wrap-title">*/
/*                 <h2 class="common-title">Projets</h2>*/
/*                 <a class="be-fc-orange" href="{{path('esprit_front_office_liste')}}">Voir tous</a>*/
/*                 */
/*                   <div class="navigation">*/
/* */
/*         {{ knp_pagination_render(mds) }}*/
/* */
/*     */
/*     {% for idee in projets %}*/
/*             */
/* */
/*         */
/*    <div class="grid_3">*/
/*                             <div class="project-short sml-thumb">*/
/*                                 <div class="top-project-info">*/
/*                                     <div class="content-info-short clearfix">*/
/*         <a href="#" class="thumb-img">*/
/*                                             <img src="{{ asset('uploads/projets/'~idee.path)}}" id="img"  >*/
/*                                         </a>*/
/*                                         <div class="wrap-short-detail">*/
/*                                             <h3 class="rs acticle-title"><a class="be-fc-orange" href="{{path('esprit_front_office_detail',{'id':idee.id})}}">{{idee.titre}}</a></h3>*/
/*                                             <p class="rs tiny-desc">Type : <a href="{{path('esprit_application_type_idee',{'type':idee.type})}}" class="fw-b fc-gray be-fc-orange">{{idee.type}}</a></p>*/
/*                                             <p class="rs title-description">{{idee.description}}</p>*/
/*                                             <p class="rs project-location">*/
/*                                                Projet proposé par <br>*/
/*                                                <span class="val">*/
/*                                                {% for user in users %}{% if idee.idUser.id==user.id %} -- {{user.username}} -- {%endif%}{% endfor %}*/
/*                                                </span>*/
/*                                               */
/*                                                 */
/*                                                */
/*                                             </p>*/
/*                                         </div>*/
/*         */
/*         </div>*/
/*                                 </div>*/
/*                                 <div class="bottom-project-info clearfix">*/
/*                                     */
/*                                         */
/*                                     <div class="group-fee clearfix">*/
/*                                         <div class="fee-item">*/
/*                                             <h4>Canaouite : {{idee.canaouite}}</h4>*/
/*                                             <center>*/
/*                                             <a href="{{path('esprit_application_funding',{'idprojet':idee.id})}}"><h2>Financer</h2></a>*/
/*                                             </center>*/
/*                                         </div>*/
/*                                         <div class="sep"></div>*/
/*                                         */
/*                                     </div>*/
/* */
/*                                     <div class="clear"></div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*         */
/*       */
/*         */
/*         */
/*                                               */
/*     {% endfor %}*/
/*     */
/* </div>*/
/*                 */
/*                 */
/*             </div>*/
/*             <div class="clear"></div>*/
/*             <div class="lst-popular-project clearfix">*/
/*                 <div class="grid_3">*/
/*                     <div class="project-short sml-thumb">*/
/*                         */
/*                     </div>*/
/*                 </div><!--end: .grid_3 > .project-short-->*/
/*                 <div class="grid_3">*/
/*                     <div class="project-short sml-thumb">*/
/*                         */
/*                     </div>*/
/*                 </div><!--end: .grid_3 > .project-short-->*/
/*                 <div class="grid_3">*/
/*                     <div class="project-short sml-thumb">*/
/*                         */
/*                     </div>*/
/*                 </div><!--end: .grid_3 > .project-short-->*/
/*                 <div class="grid_3">*/
/*                     <div class="project-short sml-thumb">*/
/*                         */
/*                     </div>*/
/*                 </div><!--end: .grid_3 > .project-short-->*/
/*             </div>*/
/*         </div>*/
/*     </div><!--end: .home-popular-project -->*/
/*     <div class="home-discover-friends">*/
/*         <div class="container_12">*/
/*             <div class="row-friends">*/
/*                 <a class="thumb-avatar" href="#"><img src="{{asset('images/ex/th-119x119-1.jpg')}}" alt="$USER_NAME"/></a>*/
/*                 <a class="thumb-avatar" href="#"><img src="{{asset('images/ex/th-119x119-2.jpg')}}" alt="$USER_NAME"/></a>*/
/*                 <a class="thumb-avatar" href="#"><img src="{{asset('images/ex/th-119x119-3.jpg')}}" alt="$USER_NAME"/></a>*/
/*                 <a class="thumb-avatar" href="#"><img src="{{asset('images/ex/th-119x119-4.jpg')}}" alt="$USER_NAME"/></a>*/
/*                 <a class="thumb-avatar" href="#"><img src="{{asset('images/ex/th-119x119-5.jpg')}}" alt="$USER_NAME"/></a>*/
/*                 <a class="thumb-avatar" href="#"><img src="{{asset('images/ex/th-119x119-6.jpg')}}" alt="$USER_NAME"/></a>*/
/*                 <a class="thumb-avatar" href="#"><img src="{{asset('images/ex/th-119x119-7.jpg')}}" alt="$USER_NAME"/></a>*/
/*                 <a class="thumb-avatar" href="#"><img src="{{asset('images/ex/th-119x119-8.jpg')}}" alt="$USER_NAME"/></a>*/
/*                 <div class="clear"></div>*/
/*             </div>*/
/*             <div class="row-friends row-connect-fb">*/
/*                 <a class="thumb-avatar t-first" href="#"><img src="{{asset('images/ex/th-119x119-17.jpg')}}" alt="$USER_NAME"/></a>*/
/*                 <div class="connect-fb">*/
/*                     <p class="rs description">Découvre qui ont posé des idées et des projets!</p>*/
/*                     <a href="{{path('esprit_application_list_expert')}}" class="btn btn-fb">Découvre les CrowdRisers </a>*/
/*                 </div>*/
/*                 <a class="thumb-avatar t-last" href="#"><img src="{{asset('images/ex/th-119x119-1.jpg')}}" alt="$USER_NAME"/></a>*/
/*                 <div class="clear"></div>*/
/*             </div>*/
/*             <div class="row-friends">*/
/*                 <a class="thumb-avatar" href="#"><img src="{{asset('images/ex/th-119x119-9.jpg')}}" alt="$USER_NAME"/></a>*/
/*                 <a class="thumb-avatar" href="#"><img src="{{asset('images/ex/th-119x119-10.jpg')}}" alt="$USER_NAME"/></a>*/
/*                 <a class="thumb-avatar" href="#"><img src="{{asset('images/ex/th-119x119-11.jpg')}}" alt="$USER_NAME"/></a>*/
/*                 <a class="thumb-avatar" href="#"><img src="{{asset('images/ex/th-119x119-12.jpg')}}" alt="$USER_NAME"/></a>*/
/*                 <a class="thumb-avatar" href="#"><img src="{{asset('images/ex/th-119x119-13.jpg')}}" alt="$USER_NAME"/></a>*/
/*                 <a class="thumb-avatar" href="#"><img src="{{asset('images/ex/th-119x119-14.jpg')}}" alt="$USER_NAME"/></a>*/
/*                 <a class="thumb-avatar" href="#"><img src="{{asset('images/ex/th-119x119-15.jpg')}}" alt="$USER_NAME"/></a>*/
/*                 <a class="thumb-avatar" href="#"><img src="{{asset('images/ex/th-119x119-16.jpg')}}" alt="$USER_NAME"/></a>*/
/*                 <div class="clear"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div><!--end: .home-discover-friends -->*/
/* */
/*     <div class="additional-info-line">*/
/*         <div class="container_12">*/
/*             <div class="grid_9">On vise la satisfaction de notre clientelle , c'est notre source d'inspiration et de continuation</h2>*/
/*                 <p class="rs description">Dans le cas d'un probléme , merci de nous réclamer</p>*/
/*             </div>*/
/*             <div class="grid_3 ta-r">*/
/*                 <a class="btn bigger btn-red" href="{{path('esprit_ajout_reclamation')}}">Réclamation</a>*/
/*             </div>*/
/*             <div class="clear"></div>*/
/*         </div>*/
/*     </div><!--end: .additional-info-line -->*/
/*     {% endblock content %}*/
/*      <footer id="footer">*/
/*         <div class="container_12 main-footer">*/
/*             <div class="grid_3 about-us">*/
/*                 <h3 class="rs title">à propos</h3>*/
/*                 <p class="rs description">CrowdRise est un site web destiné au financement participatif des projets , ainsi qu'à la collecte et le partage des idées innovantes</p>*/
/*                 <p class="rs email"><a class="fc-default  be-fc-orange" href="mailto:info@megadrupal.com">info@crowdrise.com</a></p>*/
/*                 <p class="rs">+216 71 69 69 69</p>*/
/*             </div><!--end: .contact-info -->*/
/*             <div class="grid_3 recent-tweets">*/
/*                 <h3 class="rs title">Réalisé par </h3>*/
/*                 <p class="rs description">*/
/*                     L'équipe Gat3an , un groupe d'étudiants en ingénieurie informatique à l'Esprit .     */
/*                 </p>*/
/*             </div><!--end: .recent-tweets -->*/
/*             <div class="clear clear-2col"></div>*/
/*             <div class="grid_3 email-newsletter">*/
/*                 <h3 class="rs title">Nous contacet</h3>*/
/*                 <div class="inner">*/
/*                     <p class="rs description">Donnez vos avis vers notre boite mail</p>*/
/*                     <form action="#">*/
/*                         <div class="form form-email">*/
/*                             */
/*                             <a href="{{path('esprit_front_office_contact')}}"><h2>Contacter</h2></a>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div><!--end: .email-newsletter -->*/
/*             <div class="grid_3">*/
/*                 <h3 class="rs title">Découvrir le site</h3>*/
/*                 <div class="footer-menu">*/
/*                     <ul class="rs">*/
/*                         <li><a class="be-fc-orange" href="{{path('esprit_front_office_help')}}">Qui sommes nous</a></li>*/
/*                         <li><a class="be-fc-orange" href="{{path('esprit_front_office_ajout')}}">Débuter votre projet</a></li>*/
/*                         <li><a class="be-fc-orange" href="{{path('esprit_application_add_idee')}}">Poster votre idée</a></li>*/
/*                         <li><a class="be-fc-orange" href="{{path('esprit_application_list_expert')}}">Les utilisateurs</a></li>*/
/*                         <li><a class="be-fc-orange" href="{{path('esprit_application_listeprobleme')}}">Les problémes</a></li>*/
/*                     </ul>*/
/*                     <ul class="rs">*/
/*                         <li><a class="be-fc-orange" href="{{path('esprit_application_ProbSoln')}}">Les solutions</a></li>*/
/*                         <li><a class="be-fc-orange" href="{{path('esprit_ajout_reclamation')}}">Les réclamations</a></li>*/
/*                             </ul>*/
/*                     <div class="clear"></div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="clear"></div>*/
/*         </div>*/
/*         <div class="copyright">*/
/*             <div class="container_12">*/
/*                 <div class="grid_12">*/
/*                     <a class="logo-footer" href="#"><img src="{{asset('images/logo-2.png')}}" alt="$SITE_NAME"/></a>*/
/*                     <p class="rs term-privacy">*/
/*                         <a class="fw-b be-fc-orange" href="#">Terms & Conditions</a>*/
/*                         <span class="sep">/</span>*/
/*                         <a class="fw-b be-fc-orange" href="#">Privacy Policy</a>*/
/*                         <span class="sep">/</span>*/
/*                         <a class="fw-b be-fc-orange" href="#">FAQ</a>*/
/*                     </p>*/
/*                     <p class="rs ta-c fc-gray-dark site-copyright">Design proposé par Gat3an .</p>*/
/*                 </div>*/
/*                 <div class="clear"></div>*/
/*             </div>*/
/*         </div>*/
/*     </footer><!--end: #footer -->*/
/* */
/* */
/* */
/*                */
/*  <div class="popup-common" id="sys_popup_common">*/
/*     <div class="overlay-bl-bg"></div>*/
/*     <div class="container_12 pop-content">*/
/*         <div class="grid_12 wrap-btn-close ta-r">*/
/*             <i class="icon iBigX closePopup"></i>*/
/*         </div>*/
/*        */
/*         <div class="grid_6 prefix_1">*/
/*             <div class="form login-form">*/
/*                 <form action="#">*/
/*                     <h3 class="rs title-form">Register</h3>*/
/*                     <div class="box-white">*/
/*                         <h4 class="rs title-box">Bienvenue à Crowdrise</h4>*/
/*                         <p class="rs">Merci de s'inscrire</p>*/
/*                         <div class="form-action">*/
/*                             <label for="txt_name">*/
/*                             </label>*/
/*                             <div class="wrap-2col clearfix">*/
/*                                 <div class="col">*/
/*                                     <label for="txt_email">*/
/*                                     </label>*/
/*                                     <label for="txt_re_email">*/
/*                                     </label>*/
/*                                 </div>*/
/*                                 <div class="col">*/
/*                                     <label for="txt_password">*/
/*                                     </label>*/
/*                                     <label for="txt_re_password">*/
/*                                     </label>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <p class="rs pb10"></p>*/
/*                             <p class="rs ta-c">*/
/*                                  <a href="{{path('fos_user_registration_register')}}" class="btn btn-red btn-submit-all">Register</a>*/
/*                                 */
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/* */
/* {% block login %}*/
/*         */
/* {% endblock login %}*/
/* <script>*/
/*   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){*/
/*   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),*/
/*   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)*/
/*   })(window,document,'script','//www.google-analytics.com/analytics.js','ga');*/
/* */
/*   ga('create', 'UA-20585382-5', 'megadrupal.com');*/
/*   ga('send', 'pageview');*/
/* */
/* </script>*/
/* </body>*/
/* </html>{# empty Twig template #}*/
/* */
