<?php

/* EspritFrontOfficeBundle::oneIdee.html.twig */
class __TwigTemplate_3b1958532657079344c1d41bd041e559d94fca5b94f7903e58cb7647aaeddb39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tt' => array($this, 'block_tt'),
            'titre' => array($this, 'block_titre'),
            'type' => array($this, 'block_type'),
            'image' => array($this, 'block_image'),
            'container' => array($this, 'block_container'),
            'imgp' => array($this, 'block_imgp'),
            'username' => array($this, 'block_username'),
            'email' => array($this, 'block_email'),
            'nombre' => array($this, 'block_nombre'),
            'contacter' => array($this, 'block_contacter'),
            'note' => array($this, 'block_note'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 4
        $this->displayBlock('tt', $context, $blocks);
        echo "</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no\" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritfrontoffice/css/normalize.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritfrontoffice/css/jquery.sidr.light.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritfrontoffice/css/style.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dcsrating/css/rating.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritfrontoffice/css/style.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/table.css"), "html", null, true);
        echo "\"/>

    <!--[if lte IE 7]>
    <link rel=\"stylesheet\" href=\"css/ie7.css\"/>
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel=\"stylesheet\" href=\"css/ie8.css\"/>
    <![endif]-->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritfrontoffice/css/responsive.css"), "html", null, true);
        echo "\"/>
    <!--[if lt IE 9]>
    <script type=\"text/javascript\" src=\"js/html5.js\"></script>
    <![endif]-->
    <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritfrontoffice/js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritfrontoffice/js/jquery.sidr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritfrontoffice/js/jquery.tweet.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritfrontoffice/js/script.js"), "html", null, true);
        echo "\"></script>

</head>
<body>
<div id=\"wrapper\">
<header id=\"header\">
        <div class=\"wrap-top-menu\">
            <div class=\"container_12 clearfix\">
                <div class=\"grid_12\">
                    <nav class=\"top-menu\">
                        <ul id=\"main-menu\" class=\"nav nav-horizontal clearfix\">
                            <li class=\"active\"><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Home</a></li>
                            
                            <li class=\"sep\"></li>
                            <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_help");
        echo "\">Help</a></li>
                            <li class=\"sep\"></li>
                            <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_contact");
        echo "\">Contact</a></li>
                        </ul>
                        <a id=\"btn-toogle-menu\" class=\"btn-toogle-menu\" href=\"#alternate-menu\">
                            <span class=\"line-bar\"></span>
                            <span class=\"line-bar\"></span>
                            <span class=\"line-bar\"></span>
                        </a>
                        <div id=\"right-menu\">
                            <ul class=\"alternate-menu\">
                                <li><a href=\"index.html\">Home</a></li>
                                <li><a href=\"all-pages.html\">All Pages</a></li>
                                <li><a href=\"how-it-work.html\">Help</a></li>
                                <li><a href=\"contact.html\">Contact us</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class=\"top-message clearfix\">
                        <i class=\"icon iFolder\"></i>
                        <span class=\"txt-message\">Bienvenue sur votre site , Crowdrise</span>
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
        // line 74
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 75
            echo "                             <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\" class=\"btn btn-red btn-submit-all\" >Compte</a>
                             ";
        } else {
            // line 77
            echo "                       <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" class=\"btn btn-red btn-submit-all\">S'inscrire</a>
                        ";
        }
        // line 79
        echo "                        
                        ";
        // line 80
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 81
            echo "                         <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btn-red btn-submit-all\" > Logout</a>
                     ";
        } else {
            // line 83
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" class=\"btn btn-black sys_show_popup_login\"> Login</a>
                        ";
        }
        // line 85
        echo "                    </div>
                    
                </div>
                <div class=\"header-left\">
                    <h1 id=\"logo\">
                        <a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\$SITE_NAME\"/></a>
                    </h1>
                    <div class=\"main-nav clearfix\">
                        <div class=\"nav-item\">
                            <a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("esprit_application_afficher_idee");
        echo "\" class=\"nav-title\">Découvrir</a>
                            <p class=\"rs nav-description\">Les idées</p>
                        </div>
                        <span class=\"sep\"></span>
                        <div class=\"nav-item\">
                            <a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("esprit_application_add_idee");
        echo "\" class=\"nav-title\">Poster</a>
                            <p class=\"rs nav-description\">Votre idée</p>
                        </div>
                        <span class=\"sep\"></span>
                         <div class=\"nav-item\">
                            <a href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_liste");
        echo "\" class=\"nav-title\">Découvrir</a>
                            <p class=\"rs nav-description\">Les projects</p>
                        </div>
                        <span class=\"sep\"></span>
                        <div class=\"nav-item\">
                            <a href=\"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_ajout");
        echo "\" class=\"nav-title\">Débuter</a>
                            <p class=\"rs nav-description\">Votre project</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!--end: #header -->

    <div class=\"layout-2cols\">
        <div class=\"grid_12 top-info\">
            <h2 class=\"common-title big rs\"><span class=\"fc-black\">Crowd</span>Rise</h2>
            
        </div>
        
        <div class=\"content grid_8\">
            
            
            
            <div class=\"single-page\">
                
                <div class=\"box-single-content\">
                     <div class=\"form-search\">
                       <form method=\"POST\">
                            <label for=\"sys_txt_keyword\">
                                <input id=\"sys_txt_keyword\" class=\"txt-keyword\" type=\"text\" placeholder=\"Chercher une idée\" name=\"titre\"/>
                            </label>
                            <button class=\"btn-search\" type=\"reset\"><i class=\"icon iMagnifier\"></i></button>
                            <button class=\"btn-reset-keyword\" type=\"reset\"><i class=\"icon iXHover\"></i></button>
                        </form>
                    </div>
                    <h3 class=\"rs single-title\">";
        // line 140
        $this->displayBlock('titre', $context, $blocks);
        echo "</h3>
                    
                    <p class=\"rs post-by\">Type ";
        // line 142
        $this->displayBlock('type', $context, $blocks);
        echo "</p>
                    <div class=\"editor-content\">
                        <p>
                            ";
        // line 145
        $this->displayBlock('image', $context, $blocks);
        // line 147
        echo "                            
                        </p>
                        <p>
                        ";
        // line 150
        $this->displayBlock('container', $context, $blocks);
        // line 152
        echo "                        </p>
                    </div>
                </div>
               ";
        // line 155
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "

                        
                
                
            </div>
        </div><!--end: .content -->
        <div class=\"sidebar grid_4\">
            <div class=\"box-gray project-author\">
                <h3 class=\"title-box\">Idée proposée par </h3>
                <div class=\"media\">
                    <a href=\"#\" class=\"thumb-left\">
                        ";
        // line 167
        $this->displayBlock('imgp', $context, $blocks);
        // line 168
        echo "                    </a>
                    <div class=\"media-body\">
                        <h4 class=\"rs pb10\"><a href=\"#\" class=\"be-fc-orange fw-b\">";
        // line 170
        $this->displayBlock('username', $context, $blocks);
        echo "</a></h4>
                        <p class=\"rs\">";
        // line 171
        $this->displayBlock('email', $context, $blocks);
        echo "</p>
                        <p class=\"rs fc-gray\">";
        // line 172
        $this->displayBlock('nombre', $context, $blocks);
        echo " idées</p>
                    </div>
                </div>
                    <center>
                <div class=\"author-action\">
                    ";
        // line 177
        $this->displayBlock('contacter', $context, $blocks);
        // line 178
        echo "                    <h4>Noter</h4> ";
        $this->displayBlock('note', $context, $blocks);
        // line 179
        echo "                </div>
                    </center>
            </div><!--end: .project-author -->
            <div class=\"box-gray\">
                <h3 class=\"title-box\">Remarque</h3>
                <p class=\"rs description pb20\">Vos avis nous concernent . Si vous avez rencontrer n'importe quel probléme , veuillez nous réclamer.</p>
                <a class=\"btn bigger fill-width btn-white\" href=\"";
        // line 185
        echo $this->env->getExtension('routing')->getPath("esprit_ajout_reclamation");
        echo "\">Ajouter une réclamation</a>

            </div>
        </div><!--end: .sidebar -->
        <div class=\"clear\"></div>
    </div>

    <footer id=\"footer\">
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
        // line 214
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_contact");
        echo "\"><h2>Contacter</h2></button></a>
                        </div>
                    </form>
                </div>
            </div><!--end: .email-newsletter -->
            <div class=\"grid_3\">
                <h3 class=\"rs title\">Découvrir le site</h3>
                 <div class=\"footer-menu\">
                    <ul class=\"rs\">
                        <li><a class=\"be-fc-orange\" href=\"";
        // line 223
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_help");
        echo "\">Qui sommes nous</a></li>
                        <li><a class=\"be-fc-orange\" href=\"";
        // line 224
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_ajout");
        echo "\">Débuter votre projet</a></li>
                        <li><a class=\"be-fc-orange\" href=\"";
        // line 225
        echo $this->env->getExtension('routing')->getPath("esprit_application_add_idee");
        echo "\">Poster votre idée</a></li>
                        <li><a class=\"be-fc-orange\" href=\"";
        // line 226
        echo $this->env->getExtension('routing')->getPath("esprit_application_list_expert");
        echo "\">Les utilisateurs</a></li>
                        <li><a class=\"be-fc-orange\" href=\"";
        // line 227
        echo $this->env->getExtension('routing')->getPath("esprit_application_listeprobleme");
        echo "\">Les problémes</a></li>
                    </ul>
                    <ul class=\"rs\">
                        <li><a class=\"be-fc-orange\" href=\"";
        // line 230
        echo $this->env->getExtension('routing')->getPath("esprit_application_ProbSoln");
        echo "\">Les solutions</a></li>
                        <li><a class=\"be-fc-orange\" href=\"";
        // line 231
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
        // line 241
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

</div>

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
                        <h4 class=\"rs title-box\">New to Kickstars?</h4>
                        <p class=\"rs\">A Kickstars account is required to continue.</p>
                        <div class=\"form-action\">
                            <label for=\"txt_name\">
                                <input id=\"txt_name\" class=\"txt fill-width\" type=\"text\" placeholder=\"Enter full name\"/>
                            </label>
                            <div class=\"wrap-2col clearfix\">
                                <div class=\"col\">
                                    <label for=\"txt_email\">
                                        <input id=\"txt_email\" class=\"txt fill-width\" type=\"email\" placeholder=\"Enter your e-mail address\"/>
                                    </label>
                                    <label for=\"txt_re_email\">
                                        <input id=\"txt_re_email\" class=\"txt fill-width\" type=\"email\" placeholder=\"Re-enter your e-mail adress\"/>
                                    </label>
                                </div>
                                <div class=\"col\">
                                    <label for=\"txt_password\">
                                        <input id=\"txt_password\" class=\"txt fill-width\" type=\"password\" placeholder=\"Enter password\"/>
                                    </label>
                                    <label for=\"txt_re_password\">
                                        <input id=\"txt_re_password\" class=\"txt fill-width\" type=\"password\" placeholder=\"Re-enter password\"/>
                                    </label>
                                </div>
                            </div>
                            <p class=\"rs pb10\">By signing up, you agree to our <a href=\"#\" class=\"fc-orange\">terms of use</a> and <a href=\"#\" class=\"fc-orange\">privacy policy</a>.</p>
                            <p class=\"rs ta-c\">
                                <button class=\"btn btn-red btn-submit\" type=\"submit\">Register</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class=\"grid_4\">
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
        // line 328
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-red btn-submit-all\">Register</a>
                                
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class=\"clear\"></div>
    </div>
</div>
</body>
</html>";
    }

    // line 4
    public function block_tt($context, array $blocks = array())
    {
    }

    // line 140
    public function block_titre($context, array $blocks = array())
    {
        echo " ";
    }

    // line 142
    public function block_type($context, array $blocks = array())
    {
        echo " ";
    }

    // line 145
    public function block_image($context, array $blocks = array())
    {
        // line 146
        echo "                            ";
    }

    // line 150
    public function block_container($context, array $blocks = array())
    {
        // line 151
        echo "                        ";
    }

    // line 167
    public function block_imgp($context, array $blocks = array())
    {
        echo " ";
    }

    // line 170
    public function block_username($context, array $blocks = array())
    {
    }

    // line 171
    public function block_email($context, array $blocks = array())
    {
    }

    // line 172
    public function block_nombre($context, array $blocks = array())
    {
    }

    // line 177
    public function block_contacter($context, array $blocks = array())
    {
        echo " ";
    }

    // line 178
    public function block_note($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle::oneIdee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  578 => 178,  572 => 177,  567 => 172,  562 => 171,  557 => 170,  551 => 167,  547 => 151,  544 => 150,  540 => 146,  537 => 145,  531 => 142,  525 => 140,  520 => 4,  503 => 328,  413 => 241,  400 => 231,  396 => 230,  390 => 227,  386 => 226,  382 => 225,  378 => 224,  374 => 223,  362 => 214,  330 => 185,  322 => 179,  319 => 178,  317 => 177,  309 => 172,  305 => 171,  301 => 170,  297 => 168,  295 => 167,  280 => 155,  275 => 152,  273 => 150,  268 => 147,  266 => 145,  260 => 142,  255 => 140,  221 => 109,  213 => 104,  205 => 99,  197 => 94,  188 => 90,  181 => 85,  175 => 83,  169 => 81,  167 => 80,  164 => 79,  158 => 77,  152 => 75,  150 => 74,  117 => 44,  112 => 42,  106 => 39,  92 => 28,  88 => 27,  84 => 26,  80 => 25,  73 => 21,  62 => 13,  58 => 12,  54 => 11,  50 => 10,  46 => 9,  42 => 8,  35 => 4,  30 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <title>{% block tt %}{%endblock%}</title>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />*/
/*     <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>*/
/*     <link rel="stylesheet" href="{{asset('bundles/espritfrontoffice/css/normalize.css')}}"/>*/
/*     <link rel="stylesheet" href="{{asset('bundles/espritfrontoffice/css/jquery.sidr.light.css')}}"/>*/
/*     <link rel="stylesheet" href="{{asset('bundles/espritfrontoffice/css/style.css')}}"/>*/
/*     <link rel="stylesheet" href="{{asset('bundles/dcsrating/css/rating.css') }}" />*/
/*         <link rel="stylesheet" href="{{asset('bundles/espritfrontoffice/css/style.css')}}"/>*/
/*         <link rel="stylesheet" href="{{asset('css/table.css')}}"/>*/
/* */
/*     <!--[if lte IE 7]>*/
/*     <link rel="stylesheet" href="css/ie7.css"/>*/
/*     <![endif]-->*/
/*     <!--[if lte IE 8]>*/
/*     <link rel="stylesheet" href="css/ie8.css"/>*/
/*     <![endif]-->*/
/*     <link rel="stylesheet" href="{{asset('bundles/espritfrontoffice/css/responsive.css')}}"/>*/
/*     <!--[if lt IE 9]>*/
/*     <script type="text/javascript" src="js/html5.js"></script>*/
/*     <![endif]-->*/
/*     <script type="text/javascript" src="{{asset('bundles/espritfrontoffice/js/jquery-1.9.1.min.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('bundles/espritfrontoffice/js/jquery.sidr.min.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('bundles/espritfrontoffice/js/jquery.tweet.min.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('bundles/espritfrontoffice/js/script.js')}}"></script>*/
/* */
/* </head>*/
/* <body>*/
/* <div id="wrapper">*/
/* <header id="header">*/
/*         <div class="wrap-top-menu">*/
/*             <div class="container_12 clearfix">*/
/*                 <div class="grid_12">*/
/*                     <nav class="top-menu">*/
/*                         <ul id="main-menu" class="nav nav-horizontal clearfix">*/
/*                             <li class="active"><a href="{{path('fos_user_security_login')}}">Home</a></li>*/
/*                             */
/*                             <li class="sep"></li>*/
/*                             <li><a href="{{path('esprit_front_office_help')}}">Help</a></li>*/
/*                             <li class="sep"></li>*/
/*                             <li><a href="{{path('esprit_front_office_contact')}}">Contact</a></li>*/
/*                         </ul>*/
/*                         <a id="btn-toogle-menu" class="btn-toogle-menu" href="#alternate-menu">*/
/*                             <span class="line-bar"></span>*/
/*                             <span class="line-bar"></span>*/
/*                             <span class="line-bar"></span>*/
/*                         </a>*/
/*                         <div id="right-menu">*/
/*                             <ul class="alternate-menu">*/
/*                                 <li><a href="index.html">Home</a></li>*/
/*                                 <li><a href="all-pages.html">All Pages</a></li>*/
/*                                 <li><a href="how-it-work.html">Help</a></li>*/
/*                                 <li><a href="contact.html">Contact us</a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </nav>*/
/*                     <div class="top-message clearfix">*/
/*                         <i class="icon iFolder"></i>*/
/*                         <span class="txt-message">Bienvenue sur votre site , Crowdrise</span>*/
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
/*                         {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                              <a href="{{path('fos_user_profile_edit')}}" class="btn btn-red btn-submit-all" >Compte</a>*/
/*                              {% else %}*/
/*                        <a href="{{path('fos_user_registration_register')}}" class="btn btn-red btn-submit-all">S'inscrire</a>*/
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
/*                             <a href="{{path('esprit_application_afficher_idee')}}" class="nav-title">Découvrir</a>*/
/*                             <p class="rs nav-description">Les idées</p>*/
/*                         </div>*/
/*                         <span class="sep"></span>*/
/*                         <div class="nav-item">*/
/*                             <a href="{{path('esprit_application_add_idee')}}" class="nav-title">Poster</a>*/
/*                             <p class="rs nav-description">Votre idée</p>*/
/*                         </div>*/
/*                         <span class="sep"></span>*/
/*                          <div class="nav-item">*/
/*                             <a href="{{path('esprit_front_office_liste')}}" class="nav-title">Découvrir</a>*/
/*                             <p class="rs nav-description">Les projects</p>*/
/*                         </div>*/
/*                         <span class="sep"></span>*/
/*                         <div class="nav-item">*/
/*                             <a href="{{path('esprit_front_office_ajout')}}" class="nav-title">Débuter</a>*/
/*                             <p class="rs nav-description">Votre project</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </header><!--end: #header -->*/
/* */
/*     <div class="layout-2cols">*/
/*         <div class="grid_12 top-info">*/
/*             <h2 class="common-title big rs"><span class="fc-black">Crowd</span>Rise</h2>*/
/*             */
/*         </div>*/
/*         */
/*         <div class="content grid_8">*/
/*             */
/*             */
/*             */
/*             <div class="single-page">*/
/*                 */
/*                 <div class="box-single-content">*/
/*                      <div class="form-search">*/
/*                        <form method="POST">*/
/*                             <label for="sys_txt_keyword">*/
/*                                 <input id="sys_txt_keyword" class="txt-keyword" type="text" placeholder="Chercher une idée" name="titre"/>*/
/*                             </label>*/
/*                             <button class="btn-search" type="reset"><i class="icon iMagnifier"></i></button>*/
/*                             <button class="btn-reset-keyword" type="reset"><i class="icon iXHover"></i></button>*/
/*                         </form>*/
/*                     </div>*/
/*                     <h3 class="rs single-title">{%block titre %} {%endblock%}</h3>*/
/*                     */
/*                     <p class="rs post-by">Type {%block type %} {%endblock%}</p>*/
/*                     <div class="editor-content">*/
/*                         <p>*/
/*                             {%block image %}*/
/*                             {%endblock%}*/
/*                             */
/*                         </p>*/
/*                         <p>*/
/*                         {%block container %}*/
/*                         {%endblock%}*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*                {{ socialButtons() }}*/
/* */
/*                         */
/*                 */
/*                 */
/*             </div>*/
/*         </div><!--end: .content -->*/
/*         <div class="sidebar grid_4">*/
/*             <div class="box-gray project-author">*/
/*                 <h3 class="title-box">Idée proposée par </h3>*/
/*                 <div class="media">*/
/*                     <a href="#" class="thumb-left">*/
/*                         {%block imgp %} {%endblock%}*/
/*                     </a>*/
/*                     <div class="media-body">*/
/*                         <h4 class="rs pb10"><a href="#" class="be-fc-orange fw-b">{%block username %}{%endblock%}</a></h4>*/
/*                         <p class="rs">{%block email %}{%endblock%}</p>*/
/*                         <p class="rs fc-gray">{%block nombre %}{%endblock%} idées</p>*/
/*                     </div>*/
/*                 </div>*/
/*                     <center>*/
/*                 <div class="author-action">*/
/*                     {%block contacter %} {%endblock%}*/
/*                     <h4>Noter</h4> {%block note %} {%endblock%}*/
/*                 </div>*/
/*                     </center>*/
/*             </div><!--end: .project-author -->*/
/*             <div class="box-gray">*/
/*                 <h3 class="title-box">Remarque</h3>*/
/*                 <p class="rs description pb20">Vos avis nous concernent . Si vous avez rencontrer n'importe quel probléme , veuillez nous réclamer.</p>*/
/*                 <a class="btn bigger fill-width btn-white" href="{{path('esprit_ajout_reclamation')}}">Ajouter une réclamation</a>*/
/* */
/*             </div>*/
/*         </div><!--end: .sidebar -->*/
/*         <div class="clear"></div>*/
/*     </div>*/
/* */
/*     <footer id="footer">*/
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
/*                             <a href="{{path('esprit_front_office_contact')}}"><h2>Contacter</h2></button></a>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div><!--end: .email-newsletter -->*/
/*             <div class="grid_3">*/
/*                 <h3 class="rs title">Découvrir le site</h3>*/
/*                  <div class="footer-menu">*/
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
/* </div>*/
/* */
/* <div class="popup-common" id="sys_popup_common">*/
/*     <div class="overlay-bl-bg"></div>*/
/*     <div class="container_12 pop-content">*/
/*         <div class="grid_12 wrap-btn-close ta-r">*/
/*             <i class="icon iBigX closePopup"></i>*/
/*         </div>*/
/*         <div class="grid_6 prefix_1">*/
/*             <div class="form login-form">*/
/*                 <form action="#">*/
/*                     <h3 class="rs title-form">Register</h3>*/
/*                     <div class="box-white">*/
/*                         <h4 class="rs title-box">New to Kickstars?</h4>*/
/*                         <p class="rs">A Kickstars account is required to continue.</p>*/
/*                         <div class="form-action">*/
/*                             <label for="txt_name">*/
/*                                 <input id="txt_name" class="txt fill-width" type="text" placeholder="Enter full name"/>*/
/*                             </label>*/
/*                             <div class="wrap-2col clearfix">*/
/*                                 <div class="col">*/
/*                                     <label for="txt_email">*/
/*                                         <input id="txt_email" class="txt fill-width" type="email" placeholder="Enter your e-mail address"/>*/
/*                                     </label>*/
/*                                     <label for="txt_re_email">*/
/*                                         <input id="txt_re_email" class="txt fill-width" type="email" placeholder="Re-enter your e-mail adress"/>*/
/*                                     </label>*/
/*                                 </div>*/
/*                                 <div class="col">*/
/*                                     <label for="txt_password">*/
/*                                         <input id="txt_password" class="txt fill-width" type="password" placeholder="Enter password"/>*/
/*                                     </label>*/
/*                                     <label for="txt_re_password">*/
/*                                         <input id="txt_re_password" class="txt fill-width" type="password" placeholder="Re-enter password"/>*/
/*                                     </label>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <p class="rs pb10">By signing up, you agree to our <a href="#" class="fc-orange">terms of use</a> and <a href="#" class="fc-orange">privacy policy</a>.</p>*/
/*                             <p class="rs ta-c">*/
/*                                 <button class="btn btn-red btn-submit" type="submit">Register</button>*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*         <div class="grid_4">*/
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
/*         <div class="clear"></div>*/
/*     </div>*/
/* </div>*/
/* </body>*/
/* </html>*/
