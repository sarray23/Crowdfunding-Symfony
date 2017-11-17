<?php

/* EspritFrontOfficeBundle::ideeTypeLayout.html.twig */
class __TwigTemplate_04452a244d0a79df8336b8870495a2574c2190f2486e59e221e8c38031428f63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
    <title>";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no\" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritfrontoffice/css/normalize.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritfrontoffice/css/jquery.sidr.light.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritfrontoffice/css/style.css"), "html", null, true);
        echo "\"/>
    <!--[if lte IE 7]>
    <link rel=\"stylesheet\" href=\"css/ie7.css\"/>
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel=\"stylesheet\" href=\"css/ie8.css\"/>
    <![endif]-->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritfrontoffice/css/responsive.css"), "html", null, true);
        echo "\"/>
    <!--[if lt IE 9]>
    <script type=\"text/javascript\" src=\"js/html5.js\"></script>
    <![endif]-->
    <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritfrontoffice/js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritfrontoffice/js/jquery.sidr.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/espritfrontoffice/js/jquery.tweet.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 23
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
        // line 34
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Home</a></li>
                            
                            <li class=\"sep\"></li>
                            <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_help");
        echo "\">Help</a></li>
                            <li class=\"sep\"></li>
                            <li><a href=\"";
        // line 39
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
                        <span class=\"txt-message\">Nulla egestas nulla ac diam ultricies id viverra nisi adipiscing.</span>
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
        // line 69
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 70
            echo "                             <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\" class=\"btn btn-red btn-submit-all\" >Compte</a>
                             ";
        } else {
            // line 72
            echo "                       <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" class=\"btn btn-red btn-submit-all\">S'inscrire</a>
                        ";
        }
        // line 74
        echo "                        
                        ";
        // line 75
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 76
            echo "                         <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btn-red btn-submit-all\" > Logout</a>
                     ";
        } else {
            // line 78
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" class=\"btn btn-black sys_show_popup_login\"> Login</a>
                        ";
        }
        // line 80
        echo "                    </div>
                    <div class=\"form-search\">
                        <form action=\"#\">
                            <label for=\"sys_txt_keyword\">
                                <input id=\"sys_txt_keyword\" class=\"txt-keyword\" type=\"text\" placeholder=\"Search projects\"/>
                            </label>
                            <button class=\"btn-search\" type=\"reset\"><i class=\"icon iMagnifier\"></i></button>
                            <button class=\"btn-reset-keyword\" type=\"reset\"><i class=\"icon iXHover\"></i></button>
                        </form>
                    </div>
                </div>
                <div class=\"header-left\">
                    <h1 id=\"logo\">
                        <a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\$SITE_NAME\"/></a>
                    </h1>
                    <div class=\"main-nav clearfix\">
                        <div class=\"nav-item\">
                            <a href=\"#\" class=\"nav-title\">Discover</a>
                            <p class=\"rs nav-description\">Great Projects</p>
                        </div>
                        <span class=\"sep\"></span>
                        <div class=\"nav-item\">
                            <a href=\"#\" class=\"nav-title\">Start</a>
                            <p class=\"rs nav-description\">Your Project</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!--end: #header -->

    <div class=\"layout-2cols\">
        <div class=\"content grid_9\">
            <div class=\"search-result-page\">
                <div class=\"top-lbl-val\">
                    <h3 class=\"common-title\">Discover / <span class=\"fc-orange\">Comics</span></h3>
                    <div class=\"count-result\">
                        <span class=\"fw-b fc-black\">560</span> projects found in this category
                    </div>
                </div>
                <div class=\"list-project-in-category\">
                    <div class=\"lbl-type clearfix\">
                        <h4 class=\"rs title-lbl\"><a href=\"#\" class=\"be-fc-orange\">Staff picks</a></h4>
                        <a href=\"#\" class=\"view-all be-fc-orange\">View all</a>
                    </div>
                    <div class=\"list-project\">
                        ";
        // line 126
        $this->displayBlock('container', $context, $blocks);
        // line 128
        echo "                    <!--end: .grid_3 > .project-short-->
                    
                    
                    
                        <div class=\"clear\"></div>
                    </div>
                </div><!--end: .list-project-in-category -->
                <div class=\"list-project-in-category\">
                    <div class=\"lbl-type clearfix\">
                        <h4 class=\"rs title-lbl\"><a href=\"#\" class=\"be-fc-orange\">Popular this week</a></h4>
                        <a href=\"#\" class=\"view-all be-fc-orange\">View all</a>
                    </div>
                    <div id=\"list-project-ajax\" class=\"list-project\">
                        <div class=\"grid_3\">
                            <div class=\"project-short sml-thumb\">
                                <div class=\"top-project-info\">
                                    <div class=\"content-info-short clearfix\">
                                        <a href=\"#\" class=\"thumb-img\">
                                            <img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ex/th-292x204-1.jpg"), "html", null, true);
        echo "\" alt=\"\$TITLE\">
                                        </a>
                                        <div class=\"wrap-short-detail\">
                                            <h3 class=\"rs acticle-title\"><a class=\"be-fc-orange\" href=\"#\">Project title</a></h3>
                                            <p class=\"rs tiny-desc\">by <a href=\"#\" class=\"fw-b fc-gray be-fc-orange\">John Doe</a></p>
                                            <p class=\"rs title-description\">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>
                                            <p class=\"rs project-location\">
                                                <i class=\"icon iLocation\"></i>
                                                New York, NY
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"bottom-project-info clearfix\">
                                    <div class=\"line-progress\">
                                        <div class=\"bg-progress\">
                                            <span  style=\"width: 50%\"></span>
                                        </div>
                                    </div>
                                    <div class=\"group-fee clearfix\">
                                        <div class=\"fee-item\">
                                            <p class=\"rs lbl\">Funded</p>
                                            <span class=\"val\">50%</span>
                                        </div>
                                        <div class=\"sep\"></div>
                                        <div class=\"fee-item\">
                                            <p class=\"rs lbl\">Pledged</p>
                                            <span class=\"val\">\$38,000</span>
                                        </div>
                                        <div class=\"sep\"></div>
                                        <div class=\"fee-item\">
                                            <p class=\"rs lbl\">Days Left</p>
                                            <span class=\"val\">25</span>
                                        </div>
                                    </div>
                                    <div class=\"clear\"></div>
                                </div>
                            </div>
                        </div><!--end: .grid_3 > .project-short-->
                        <div class=\"grid_3\">
                            <div class=\"project-short sml-thumb\">
                                <div class=\"top-project-info\">
                                    <div class=\"content-info-short clearfix\">
                                        <a href=\"#\" class=\"thumb-img\">
                                            <img src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ex/th-192x135-1.jpg"), "html", null, true);
        echo "\" alt=\"\$TITLE\">
                                        </a>
                                        <div class=\"wrap-short-detail\">
                                            <h3 class=\"rs acticle-title\"><a class=\"be-fc-orange\" href=\"#\">Project title</a></h3>
                                            <p class=\"rs tiny-desc\">by <a href=\"#\" class=\"fw-b fc-gray be-fc-orange\">John Doe</a></p>
                                            <p class=\"rs title-description\">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>
                                            <p class=\"rs project-location\">
                                                <i class=\"icon iLocation\"></i>
                                                New York, NY
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"bottom-project-info clearfix\">
                                    <div class=\"line-progress\">
                                        <div class=\"bg-progress\">
                                            <span class=\"success\" style=\"width: 123%\"></span>
                                        </div>
                                    </div>
                                    <div class=\"group-fee clearfix\">
                                        <div class=\"fee-item\">
                                            <p class=\"rs lbl\">Funded</p>
                                            <span class=\"val\">123%</span>
                                        </div>
                                        <div class=\"sep\"></div>
                                        <div class=\"fee-item\">
                                            <p class=\"rs lbl\">Pledged</p>
                                            <span class=\"val\">\$25,000</span>
                                        </div>
                                        <div class=\"sep\"></div>
                                        <div class=\"fee-item\">
                                            <p class=\"rs lbl\">Days Left</p>
                                            <span class=\"val\">18</span>
                                        </div>
                                    </div>
                                    <div class=\"clear\"></div>
                                </div>
                            </div>
                        </div><!--end: .grid_3 > .project-short-->
                        <div class=\"grid_3\">
                            <div class=\"project-short sml-thumb\">
                                <div class=\"top-project-info\">
                                    <div class=\"content-info-short clearfix\">
                                        <a href=\"#\" class=\"thumb-img\">
                                            <img src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ex/th-192x135-2.jpg"), "html", null, true);
        echo "\" alt=\"\$TITLE\">
                                        </a>
                                        <div class=\"wrap-short-detail\">
                                            <h3 class=\"rs acticle-title\"><a class=\"be-fc-orange\" href=\"#\">Project title</a></h3>
                                            <p class=\"rs tiny-desc\">by <a href=\"#\" class=\"fw-b fc-gray be-fc-orange\">John Doe</a></p>
                                            <p class=\"rs title-description\">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>
                                            <p class=\"rs project-location\">
                                                <i class=\"icon iLocation\"></i>
                                                New York, NY
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"bottom-project-info clearfix\">
                                    <div class=\"line-progress\">
                                        <div class=\"bg-progress\">
                                            <span  style=\"width: 21%\"></span>
                                        </div>
                                    </div>
                                    <div class=\"group-fee clearfix\">
                                        <div class=\"fee-item\">
                                            <p class=\"rs lbl\">Funded</p>
                                            <span class=\"val\">21%</span>
                                        </div>
                                        <div class=\"sep\"></div>
                                        <div class=\"fee-item\">
                                            <p class=\"rs lbl\">Pledged</p>
                                            <span class=\"val\">\$850K</span>
                                        </div>
                                        <div class=\"sep\"></div>
                                        <div class=\"fee-item\">
                                            <p class=\"rs lbl\">Days Left</p>
                                            <span class=\"val\">2</span>
                                        </div>
                                    </div>
                                    <div class=\"clear\"></div>
                                </div>
                            </div>
                        </div><!--end: .grid_3 > .project-short-->
                        <div class=\"clear\"></div>
                        <div class=\"grid_3\">
                            <div class=\"project-short sml-thumb\">
                                <div class=\"top-project-info\">
                                    <div class=\"content-info-short clearfix\">
                                        <a href=\"#\" class=\"thumb-img\">
                                            <img src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ex/th-292x204-1.jpg"), "html", null, true);
        echo "\" alt=\"\$TITLE\">
                                        </a>
                                        <div class=\"wrap-short-detail\">
                                            <h3 class=\"rs acticle-title\"><a class=\"be-fc-orange\" href=\"#\">Project title</a></h3>
                                            <p class=\"rs tiny-desc\">by <a href=\"#\" class=\"fw-b fc-gray be-fc-orange\">John Doe</a></p>
                                            <p class=\"rs title-description\">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>
                                            <p class=\"rs project-location\">
                                                <i class=\"icon iLocation\"></i>
                                                New York, NY
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"bottom-project-info clearfix\">
                                    <div class=\"line-progress\">
                                        <div class=\"bg-progress\">
                                            <span  style=\"width: 50%\"></span>
                                        </div>
                                    </div>
                                    <div class=\"group-fee clearfix\">
                                        <div class=\"fee-item\">
                                            <p class=\"rs lbl\">Funded</p>
                                            <span class=\"val\">50%</span>
                                        </div>
                                        <div class=\"sep\"></div>
                                        <div class=\"fee-item\">
                                            <p class=\"rs lbl\">Pledged</p>
                                            <span class=\"val\">\$38,000</span>
                                        </div>
                                        <div class=\"sep\"></div>
                                        <div class=\"fee-item\">
                                            <p class=\"rs lbl\">Days Left</p>
                                            <span class=\"val\">25</span>
                                        </div>
                                    </div>
                                    <div class=\"clear\"></div>
                                </div>
                            </div>
                        </div><!--end: .grid_3 > .project-short-->
                        <div class=\"grid_3\">
                            <div class=\"project-short sml-thumb\">
                                <div class=\"top-project-info\">
                                    <div class=\"content-info-short clearfix\">
                                        <a href=\"#\" class=\"thumb-img\">
                                            <img src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ex/th-192x135-1.jpg"), "html", null, true);
        echo "\" alt=\"\$TITLE\">
                                        </a>
                                        <div class=\"wrap-short-detail\">
                                            <h3 class=\"rs acticle-title\"><a class=\"be-fc-orange\" href=\"#\">Project title</a></h3>
                                            <p class=\"rs tiny-desc\">by <a href=\"#\" class=\"fw-b fc-gray be-fc-orange\">John Doe</a></p>
                                            <p class=\"rs title-description\">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>
                                            <p class=\"rs project-location\">
                                                <i class=\"icon iLocation\"></i>
                                                New York, NY
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"bottom-project-info clearfix\">
                                    <div class=\"line-progress\">
                                        <div class=\"bg-progress\">
                                            <span class=\"success\" style=\"width: 123%\"></span>
                                        </div>
                                    </div>
                                    <div class=\"group-fee clearfix\">
                                        <div class=\"fee-item\">
                                            <p class=\"rs lbl\">Funded</p>
                                            <span class=\"val\">123%</span>
                                        </div>
                                        <div class=\"sep\"></div>
                                        <div class=\"fee-item\">
                                            <p class=\"rs lbl\">Pledged</p>
                                            <span class=\"val\">\$25,000</span>
                                        </div>
                                        <div class=\"sep\"></div>
                                        <div class=\"fee-item\">
                                            <p class=\"rs lbl\">Days Left</p>
                                            <span class=\"val\">18</span>
                                        </div>
                                    </div>
                                    <div class=\"clear\"></div>
                                </div>
                            </div>
                        </div><!--end: .grid_3 > .project-short-->
                        <div class=\"grid_3\">
                            <div class=\"project-short sml-thumb\">
                                <div class=\"top-project-info\">
                                    <div class=\"content-info-short clearfix\">
                                        <a href=\"#\" class=\"thumb-img\">
                                            <img src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ex/th-192x135-2.jpg"), "html", null, true);
        echo "\" alt=\"\$TITLE\">
                                        </a>
                                        <div class=\"wrap-short-detail\">
                                            <h3 class=\"rs acticle-title\"><a class=\"be-fc-orange\" href=\"#\">Project title</a></h3>
                                            <p class=\"rs tiny-desc\">by <a href=\"#\" class=\"fw-b fc-gray be-fc-orange\">John Doe</a></p>
                                            <p class=\"rs title-description\">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>
                                            <p class=\"rs project-location\">
                                                <i class=\"icon iLocation\"></i>
                                                New York, NY
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"bottom-project-info clearfix\">
                                    <div class=\"line-progress\">
                                        <div class=\"bg-progress\">
                                            <span  style=\"width: 21%\"></span>
                                        </div>
                                    </div>
                                    <div class=\"group-fee clearfix\">
                                        <div class=\"fee-item\">
                                            <p class=\"rs lbl\">Funded</p>
                                            <span class=\"val\">21%</span>
                                        </div>
                                        <div class=\"sep\"></div>
                                        <div class=\"fee-item\">
                                            <p class=\"rs lbl\">Pledged</p>
                                            <span class=\"val\">\$850K</span>
                                        </div>
                                        <div class=\"sep\"></div>
                                        <div class=\"fee-item\">
                                            <p class=\"rs lbl\">Days Left</p>
                                            <span class=\"val\">2</span>
                                        </div>
                                    </div>
                                    <div class=\"clear\"></div>
                                </div>
                            </div>
                        </div><!--end: .grid_3 > .project-short-->
                        <div class=\"clear\"></div>
                    </div>
                </div><!--end: .list-project-in-category -->
                <p class=\"rs ta-c\">
                    <a id=\"showmoreproject\" class=\"btn btn-black btn-load-more\" href=\"#\">Show more projects</a>
                </p>
            </div><!--end: .search-result-page -->
        </div><!--end: .content -->
        <div class=\"sidebar grid_3\">
            <div class=\"left-list-category\">
                <h4 class=\"rs title-nav\">Featured</h4>
                <ul class=\"rs nav nav-category\">
                    <li>
                        <a href=\"#\">
                            Staff Picks
                            <span class=\"count-val\">(12)</span>
                            <i class=\"icon iPlugGray\"></i>
                        </a>
                    </li>
                    <li class=\"active\">
                        <a href=\"#\">
                            Popular
                            <span class=\"count-val\">(2)</span>
                            <i class=\"icon iPlugGray\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            Now Launched
                            <span class=\"count-val\">(212)</span>
                            <i class=\"icon iPlugGray\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            Ending Soon
                            <span class=\"count-val\">(35)</span>
                            <i class=\"icon iPlugGray\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            Small Project
                            <span class=\"count-val\">(67)</span>
                            <i class=\"icon iPlugGray\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            Most Funded
                            <span class=\"count-val\">(23)</span>
                            <i class=\"icon iPlugGray\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            Curated Pages
                            <span class=\"count-val\">(52)</span>
                            <i class=\"icon iPlugGray\"></i>
                        </a>
                    </li>
                </ul>
            </div><!--end: .left-list-category -->
            <div class=\"left-list-category\">
                <h4 class=\"rs title-nav\">Category</h4>
                <ul class=\"rs nav nav-category\">
                    <li>
                        <a href=\"#\">
                            Art
                            <span class=\"count-val\">(12)</span>
                            <i class=\"icon iPlugGray\"></i>
                        </a>
                    </li>
                    <li class=\"active\">
                        <a href=\"#\">
                            Comics
                            <span class=\"count-val\">(12)</span>
                            <i class=\"icon iPlugGray\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            Design
                            <span class=\"count-val\">(12)</span>
                            <i class=\"icon iPlugGray\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            Fashion
                            <span class=\"count-val\">(12)</span>
                            <i class=\"icon iPlugGray\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            Film
                            <span class=\"count-val\">(12)</span>
                            <i class=\"icon iPlugGray\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            Games
                            <span class=\"count-val\">(12)</span>
                            <i class=\"icon iPlugGray\"></i>
                        </a>
                        <ul class=\"rs nav-sub-category\">
                            <li>
                                <a href=\"#\">
                                    Comedy
                                    <span class=\"count-val\">(12)</span>
                                    <i class=\"dotSquare\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Animation
                                    <span class=\"count-val\">(12)</span>
                                    <i class=\"dotSquare\"></i>
                                </a>
                            </li>
                        </ul><!--end: .nav-sub-category-->
                    </li>
                    <li>
                        <a href=\"#\">
                            Music
                            <span class=\"count-val\">(12)</span>
                            <i class=\"icon iPlugGray\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            Photography
                            <span class=\"count-val\">(35)</span>
                            <i class=\"icon iPlugGray\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            Publishing
                            <span class=\"count-val\">(92)</span>
                            <i class=\"icon iPlugGray\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            Technology
                            <span class=\"count-val\">(13)</span>
                            <i class=\"icon iPlugGray\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            Theater
                            <span class=\"count-val\">(29)</span>
                            <i class=\"icon iPlugGray\"></i>
                        </a>
                    </li>
                </ul>
            </div><!--end: .left-list-category -->
        </div><!--end: .sidebar -->
        <div class=\"clear\"></div>
    </div>
    <footer id=\"footer\">
        <div class=\"container_12 main-footer\">
            <div class=\"grid_3 about-us\">
                <h3 class=\"rs title\">About</h3>
                <p class=\"rs description\">Donec rutrum elit ac arcu bibendum rhoncus in vitae turpis. Quisque fermentum gravida eros non faucibus. Curabitur fermentum, arcu sed cursus commodo.</p>
                <p class=\"rs email\"><a class=\"fc-default  be-fc-orange\" href=\"mailto:info@megadrupal.com\">info@megadrupal.com</a></p>
                <p class=\"rs\">+1 (555) 555 - 55 - 55</p>
            </div><!--end: .contact-info -->
            <div class=\"grid_3 recent-tweets\">
                <h3 class=\"rs title\">Recent Tweets</h3>
                <div class=\"lst-tweets\" id=\"sys_lst_tweets\">
                    
                </div>
            </div><!--end: .recent-tweets -->
            <div class=\"clear clear-2col\"></div>
            <div class=\"grid_3 email-newsletter\">
                <h3 class=\"rs title\">Nous contacet</h3>
                <div class=\"inner\">
                    <p class=\"rs description\">Donnez vos avis vers notre boite mail</p>
                    <form action=\"#\">
                        <div class=\"form form-email\">
                            
                            <a href=\"";
        // line 592
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_contact");
        echo "\"><h2>Contacter</h2></a>
                        </div>
                    </form>
                </div>
            </div><!--end: .email-newsletter -->
            <div class=\"grid_3\">
                <h3 class=\"rs title\">Discover &amp; Create</h3>
                <div class=\"footer-menu\">
                    <ul class=\"rs\">
                        <li><a class=\"be-fc-orange\" href=\"";
        // line 601
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_help");
        echo "\">Qui sommes nous</a></li>
                        <li><a class=\"be-fc-orange\" href=\"#\">Débuter votre projet</a></li>
                        <li><a class=\"be-fc-orange\" href=\"";
        // line 603
        echo $this->env->getExtension('routing')->getPath("esprit_application_add_idee");
        echo "\">Poster votre idée</a></li>
                        <li><a class=\"be-fc-orange\" href=\"";
        // line 604
        echo $this->env->getExtension('routing')->getPath("esprit_application_list_expert");
        echo "\">Les utilisateurs</a></li>
                        <li><a class=\"be-fc-orange\" href=\"";
        // line 605
        echo $this->env->getExtension('routing')->getPath("esprit_application_listeprobleme");
        echo "\">Les problémes</a></li>
                    </ul>
                    <ul class=\"rs\">
                        <li><a class=\"be-fc-orange\" href=\"#\">Staff Picks</a></li>
                        <li><a class=\"be-fc-orange\" href=\"#\">Popular</a></li>
                        <li><a class=\"be-fc-orange\" href=\"#\">Recent</a></li>
                        <li><a class=\"be-fc-orange\" href=\"#\">Small Projects</a></li>
                        <li><a class=\"be-fc-orange\" href=\"#\">Most Funded</a></li>
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
        // line 622
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo-2.png"), "html", null, true);
        echo "\" alt=\"\$SITE_NAME\"/></a>
                    <p class=\"rs term-privacy\">
                        <a class=\"fw-b be-fc-orange\" href=\"#\">Terms & Conditions</a>
                        <span class=\"sep\">/</span>
                        <a class=\"fw-b be-fc-orange\" href=\"#\">Privacy Policy</a>
                        <span class=\"sep\">/</span>
                        <a class=\"fw-b be-fc-orange\" href=\"#\">FAQ</a>
                    </p>
                    <p class=\"rs ta-c fc-gray-dark site-copyright\">HTML by <a href=\"http://megadrupal.com\" title=\"Drupal Developers\" target=\"_blank\">MegaDrupal</a>. Designed by <a href=\"http://bestwebsoft.com/\" title=\"Web development company\" target=\"_blank\">BestWebSoft</a>.</p>
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
        // line 671
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-red btn-submit-all\">Register</a>
                                
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class=\"grid_4\">
            <div class=\"form login-form\">
                <form action=\"#\">
                    <h3 class=\"rs title-form\">Login</h3>
                    <div class=\"box-white\">
                        <h4 class=\"rs title-box\">Already Have an Account?</h4>
                        <p class=\"rs\">Please log in to continue.</p>
                        <div class=\"form-action\">
                            <label for=\"txt_email_login\">
                                <input id=\"txt_email_login\" class=\"txt fill-width\" type=\"email\" placeholder=\"Enter your e-mail address\"/>
                            </label>
                            <label for=\"txt_password_login\">
                                <input id=\"txt_password_login\" class=\"txt fill-width\" type=\"password\" placeholder=\"Enter password\"/>
                            </label>

                            <label for=\"chk_remember\" class=\"rs pb20 clearfix\">
                                <input id=\"chk_remember\" type=\"checkbox\" class=\"chk-remember\"/>
                                <span class=\"lbl-remember\">Remember me</span>
                            </label>
                            <p class=\"rs ta-c pb10\">
                                <button class=\"btn btn-red btn-submit\" type=\"submit\">Login</button>
                            </p>
                            <p class=\"rs ta-c\">
                                <a href=\"#\" class=\"fc-orange\">I forgot my password</a>
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Category | Kickstars";
    }

    // line 126
    public function block_container($context, array $blocks = array())
    {
        // line 127
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle::ideeTypeLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  850 => 127,  847 => 126,  841 => 3,  794 => 671,  742 => 622,  722 => 605,  718 => 604,  714 => 603,  709 => 601,  697 => 592,  469 => 367,  422 => 323,  375 => 279,  327 => 234,  280 => 190,  233 => 146,  213 => 128,  211 => 126,  173 => 93,  158 => 80,  152 => 78,  146 => 76,  144 => 75,  141 => 74,  135 => 72,  129 => 70,  127 => 69,  94 => 39,  89 => 37,  83 => 34,  69 => 23,  65 => 22,  61 => 21,  57 => 20,  50 => 16,  40 => 9,  36 => 8,  32 => 7,  25 => 3,  21 => 1,);
    }
}
/* <html>*/
/* <head>*/
/*     <title>{% block title %}Category | Kickstars{%endblock%}</title>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />*/
/*     <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>*/
/*     <link rel="stylesheet" href="{{asset('bundles/espritfrontoffice/css/normalize.css')}}"/>*/
/*     <link rel="stylesheet" href="{{asset('bundles/espritfrontoffice/css/jquery.sidr.light.css')}}"/>*/
/*     <link rel="stylesheet" href="{{asset('bundles/espritfrontoffice/css/style.css')}}"/>*/
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
/*     <header id="header">*/
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
/*                         <span class="txt-message">Nulla egestas nulla ac diam ultricies id viverra nisi adipiscing.</span>*/
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
/*                        <div class="account-panel">*/
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
/*                     <div class="form-search">*/
/*                         <form action="#">*/
/*                             <label for="sys_txt_keyword">*/
/*                                 <input id="sys_txt_keyword" class="txt-keyword" type="text" placeholder="Search projects"/>*/
/*                             </label>*/
/*                             <button class="btn-search" type="reset"><i class="icon iMagnifier"></i></button>*/
/*                             <button class="btn-reset-keyword" type="reset"><i class="icon iXHover"></i></button>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="header-left">*/
/*                     <h1 id="logo">*/
/*                         <a href="{{path('fos_user_security_login')}}"><img src="{{asset('images/logo.png')}}" alt="$SITE_NAME"/></a>*/
/*                     </h1>*/
/*                     <div class="main-nav clearfix">*/
/*                         <div class="nav-item">*/
/*                             <a href="#" class="nav-title">Discover</a>*/
/*                             <p class="rs nav-description">Great Projects</p>*/
/*                         </div>*/
/*                         <span class="sep"></span>*/
/*                         <div class="nav-item">*/
/*                             <a href="#" class="nav-title">Start</a>*/
/*                             <p class="rs nav-description">Your Project</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </header><!--end: #header -->*/
/* */
/*     <div class="layout-2cols">*/
/*         <div class="content grid_9">*/
/*             <div class="search-result-page">*/
/*                 <div class="top-lbl-val">*/
/*                     <h3 class="common-title">Discover / <span class="fc-orange">Comics</span></h3>*/
/*                     <div class="count-result">*/
/*                         <span class="fw-b fc-black">560</span> projects found in this category*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="list-project-in-category">*/
/*                     <div class="lbl-type clearfix">*/
/*                         <h4 class="rs title-lbl"><a href="#" class="be-fc-orange">Staff picks</a></h4>*/
/*                         <a href="#" class="view-all be-fc-orange">View all</a>*/
/*                     </div>*/
/*                     <div class="list-project">*/
/*                         {%block container %}*/
/*                         {%endblock%}*/
/*                     <!--end: .grid_3 > .project-short-->*/
/*                     */
/*                     */
/*                     */
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div><!--end: .list-project-in-category -->*/
/*                 <div class="list-project-in-category">*/
/*                     <div class="lbl-type clearfix">*/
/*                         <h4 class="rs title-lbl"><a href="#" class="be-fc-orange">Popular this week</a></h4>*/
/*                         <a href="#" class="view-all be-fc-orange">View all</a>*/
/*                     </div>*/
/*                     <div id="list-project-ajax" class="list-project">*/
/*                         <div class="grid_3">*/
/*                             <div class="project-short sml-thumb">*/
/*                                 <div class="top-project-info">*/
/*                                     <div class="content-info-short clearfix">*/
/*                                         <a href="#" class="thumb-img">*/
/*                                             <img src="{{asset('images/ex/th-292x204-1.jpg')}}" alt="$TITLE">*/
/*                                         </a>*/
/*                                         <div class="wrap-short-detail">*/
/*                                             <h3 class="rs acticle-title"><a class="be-fc-orange" href="#">Project title</a></h3>*/
/*                                             <p class="rs tiny-desc">by <a href="#" class="fw-b fc-gray be-fc-orange">John Doe</a></p>*/
/*                                             <p class="rs title-description">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>*/
/*                                             <p class="rs project-location">*/
/*                                                 <i class="icon iLocation"></i>*/
/*                                                 New York, NY*/
/*                                             </p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="bottom-project-info clearfix">*/
/*                                     <div class="line-progress">*/
/*                                         <div class="bg-progress">*/
/*                                             <span  style="width: 50%"></span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="group-fee clearfix">*/
/*                                         <div class="fee-item">*/
/*                                             <p class="rs lbl">Funded</p>*/
/*                                             <span class="val">50%</span>*/
/*                                         </div>*/
/*                                         <div class="sep"></div>*/
/*                                         <div class="fee-item">*/
/*                                             <p class="rs lbl">Pledged</p>*/
/*                                             <span class="val">$38,000</span>*/
/*                                         </div>*/
/*                                         <div class="sep"></div>*/
/*                                         <div class="fee-item">*/
/*                                             <p class="rs lbl">Days Left</p>*/
/*                                             <span class="val">25</span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="clear"></div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div><!--end: .grid_3 > .project-short-->*/
/*                         <div class="grid_3">*/
/*                             <div class="project-short sml-thumb">*/
/*                                 <div class="top-project-info">*/
/*                                     <div class="content-info-short clearfix">*/
/*                                         <a href="#" class="thumb-img">*/
/*                                             <img src="{{asset('images/ex/th-192x135-1.jpg')}}" alt="$TITLE">*/
/*                                         </a>*/
/*                                         <div class="wrap-short-detail">*/
/*                                             <h3 class="rs acticle-title"><a class="be-fc-orange" href="#">Project title</a></h3>*/
/*                                             <p class="rs tiny-desc">by <a href="#" class="fw-b fc-gray be-fc-orange">John Doe</a></p>*/
/*                                             <p class="rs title-description">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>*/
/*                                             <p class="rs project-location">*/
/*                                                 <i class="icon iLocation"></i>*/
/*                                                 New York, NY*/
/*                                             </p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="bottom-project-info clearfix">*/
/*                                     <div class="line-progress">*/
/*                                         <div class="bg-progress">*/
/*                                             <span class="success" style="width: 123%"></span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="group-fee clearfix">*/
/*                                         <div class="fee-item">*/
/*                                             <p class="rs lbl">Funded</p>*/
/*                                             <span class="val">123%</span>*/
/*                                         </div>*/
/*                                         <div class="sep"></div>*/
/*                                         <div class="fee-item">*/
/*                                             <p class="rs lbl">Pledged</p>*/
/*                                             <span class="val">$25,000</span>*/
/*                                         </div>*/
/*                                         <div class="sep"></div>*/
/*                                         <div class="fee-item">*/
/*                                             <p class="rs lbl">Days Left</p>*/
/*                                             <span class="val">18</span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="clear"></div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div><!--end: .grid_3 > .project-short-->*/
/*                         <div class="grid_3">*/
/*                             <div class="project-short sml-thumb">*/
/*                                 <div class="top-project-info">*/
/*                                     <div class="content-info-short clearfix">*/
/*                                         <a href="#" class="thumb-img">*/
/*                                             <img src="{{asset('images/ex/th-192x135-2.jpg')}}" alt="$TITLE">*/
/*                                         </a>*/
/*                                         <div class="wrap-short-detail">*/
/*                                             <h3 class="rs acticle-title"><a class="be-fc-orange" href="#">Project title</a></h3>*/
/*                                             <p class="rs tiny-desc">by <a href="#" class="fw-b fc-gray be-fc-orange">John Doe</a></p>*/
/*                                             <p class="rs title-description">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>*/
/*                                             <p class="rs project-location">*/
/*                                                 <i class="icon iLocation"></i>*/
/*                                                 New York, NY*/
/*                                             </p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="bottom-project-info clearfix">*/
/*                                     <div class="line-progress">*/
/*                                         <div class="bg-progress">*/
/*                                             <span  style="width: 21%"></span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="group-fee clearfix">*/
/*                                         <div class="fee-item">*/
/*                                             <p class="rs lbl">Funded</p>*/
/*                                             <span class="val">21%</span>*/
/*                                         </div>*/
/*                                         <div class="sep"></div>*/
/*                                         <div class="fee-item">*/
/*                                             <p class="rs lbl">Pledged</p>*/
/*                                             <span class="val">$850K</span>*/
/*                                         </div>*/
/*                                         <div class="sep"></div>*/
/*                                         <div class="fee-item">*/
/*                                             <p class="rs lbl">Days Left</p>*/
/*                                             <span class="val">2</span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="clear"></div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div><!--end: .grid_3 > .project-short-->*/
/*                         <div class="clear"></div>*/
/*                         <div class="grid_3">*/
/*                             <div class="project-short sml-thumb">*/
/*                                 <div class="top-project-info">*/
/*                                     <div class="content-info-short clearfix">*/
/*                                         <a href="#" class="thumb-img">*/
/*                                             <img src="{{asset('images/ex/th-292x204-1.jpg')}}" alt="$TITLE">*/
/*                                         </a>*/
/*                                         <div class="wrap-short-detail">*/
/*                                             <h3 class="rs acticle-title"><a class="be-fc-orange" href="#">Project title</a></h3>*/
/*                                             <p class="rs tiny-desc">by <a href="#" class="fw-b fc-gray be-fc-orange">John Doe</a></p>*/
/*                                             <p class="rs title-description">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>*/
/*                                             <p class="rs project-location">*/
/*                                                 <i class="icon iLocation"></i>*/
/*                                                 New York, NY*/
/*                                             </p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="bottom-project-info clearfix">*/
/*                                     <div class="line-progress">*/
/*                                         <div class="bg-progress">*/
/*                                             <span  style="width: 50%"></span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="group-fee clearfix">*/
/*                                         <div class="fee-item">*/
/*                                             <p class="rs lbl">Funded</p>*/
/*                                             <span class="val">50%</span>*/
/*                                         </div>*/
/*                                         <div class="sep"></div>*/
/*                                         <div class="fee-item">*/
/*                                             <p class="rs lbl">Pledged</p>*/
/*                                             <span class="val">$38,000</span>*/
/*                                         </div>*/
/*                                         <div class="sep"></div>*/
/*                                         <div class="fee-item">*/
/*                                             <p class="rs lbl">Days Left</p>*/
/*                                             <span class="val">25</span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="clear"></div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div><!--end: .grid_3 > .project-short-->*/
/*                         <div class="grid_3">*/
/*                             <div class="project-short sml-thumb">*/
/*                                 <div class="top-project-info">*/
/*                                     <div class="content-info-short clearfix">*/
/*                                         <a href="#" class="thumb-img">*/
/*                                             <img src="{{asset('images/ex/th-192x135-1.jpg')}}" alt="$TITLE">*/
/*                                         </a>*/
/*                                         <div class="wrap-short-detail">*/
/*                                             <h3 class="rs acticle-title"><a class="be-fc-orange" href="#">Project title</a></h3>*/
/*                                             <p class="rs tiny-desc">by <a href="#" class="fw-b fc-gray be-fc-orange">John Doe</a></p>*/
/*                                             <p class="rs title-description">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>*/
/*                                             <p class="rs project-location">*/
/*                                                 <i class="icon iLocation"></i>*/
/*                                                 New York, NY*/
/*                                             </p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="bottom-project-info clearfix">*/
/*                                     <div class="line-progress">*/
/*                                         <div class="bg-progress">*/
/*                                             <span class="success" style="width: 123%"></span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="group-fee clearfix">*/
/*                                         <div class="fee-item">*/
/*                                             <p class="rs lbl">Funded</p>*/
/*                                             <span class="val">123%</span>*/
/*                                         </div>*/
/*                                         <div class="sep"></div>*/
/*                                         <div class="fee-item">*/
/*                                             <p class="rs lbl">Pledged</p>*/
/*                                             <span class="val">$25,000</span>*/
/*                                         </div>*/
/*                                         <div class="sep"></div>*/
/*                                         <div class="fee-item">*/
/*                                             <p class="rs lbl">Days Left</p>*/
/*                                             <span class="val">18</span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="clear"></div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div><!--end: .grid_3 > .project-short-->*/
/*                         <div class="grid_3">*/
/*                             <div class="project-short sml-thumb">*/
/*                                 <div class="top-project-info">*/
/*                                     <div class="content-info-short clearfix">*/
/*                                         <a href="#" class="thumb-img">*/
/*                                             <img src="{{asset('images/ex/th-192x135-2.jpg')}}" alt="$TITLE">*/
/*                                         </a>*/
/*                                         <div class="wrap-short-detail">*/
/*                                             <h3 class="rs acticle-title"><a class="be-fc-orange" href="#">Project title</a></h3>*/
/*                                             <p class="rs tiny-desc">by <a href="#" class="fw-b fc-gray be-fc-orange">John Doe</a></p>*/
/*                                             <p class="rs title-description">Nam sit amet est sapien, a faucibus purus. Sed commodo facilisis tempus. Pellentesque placerat elementum adipiscing.</p>*/
/*                                             <p class="rs project-location">*/
/*                                                 <i class="icon iLocation"></i>*/
/*                                                 New York, NY*/
/*                                             </p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="bottom-project-info clearfix">*/
/*                                     <div class="line-progress">*/
/*                                         <div class="bg-progress">*/
/*                                             <span  style="width: 21%"></span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="group-fee clearfix">*/
/*                                         <div class="fee-item">*/
/*                                             <p class="rs lbl">Funded</p>*/
/*                                             <span class="val">21%</span>*/
/*                                         </div>*/
/*                                         <div class="sep"></div>*/
/*                                         <div class="fee-item">*/
/*                                             <p class="rs lbl">Pledged</p>*/
/*                                             <span class="val">$850K</span>*/
/*                                         </div>*/
/*                                         <div class="sep"></div>*/
/*                                         <div class="fee-item">*/
/*                                             <p class="rs lbl">Days Left</p>*/
/*                                             <span class="val">2</span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="clear"></div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div><!--end: .grid_3 > .project-short-->*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div><!--end: .list-project-in-category -->*/
/*                 <p class="rs ta-c">*/
/*                     <a id="showmoreproject" class="btn btn-black btn-load-more" href="#">Show more projects</a>*/
/*                 </p>*/
/*             </div><!--end: .search-result-page -->*/
/*         </div><!--end: .content -->*/
/*         <div class="sidebar grid_3">*/
/*             <div class="left-list-category">*/
/*                 <h4 class="rs title-nav">Featured</h4>*/
/*                 <ul class="rs nav nav-category">*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             Staff Picks*/
/*                             <span class="count-val">(12)</span>*/
/*                             <i class="icon iPlugGray"></i>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class="active">*/
/*                         <a href="#">*/
/*                             Popular*/
/*                             <span class="count-val">(2)</span>*/
/*                             <i class="icon iPlugGray"></i>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             Now Launched*/
/*                             <span class="count-val">(212)</span>*/
/*                             <i class="icon iPlugGray"></i>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             Ending Soon*/
/*                             <span class="count-val">(35)</span>*/
/*                             <i class="icon iPlugGray"></i>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             Small Project*/
/*                             <span class="count-val">(67)</span>*/
/*                             <i class="icon iPlugGray"></i>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             Most Funded*/
/*                             <span class="count-val">(23)</span>*/
/*                             <i class="icon iPlugGray"></i>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             Curated Pages*/
/*                             <span class="count-val">(52)</span>*/
/*                             <i class="icon iPlugGray"></i>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div><!--end: .left-list-category -->*/
/*             <div class="left-list-category">*/
/*                 <h4 class="rs title-nav">Category</h4>*/
/*                 <ul class="rs nav nav-category">*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             Art*/
/*                             <span class="count-val">(12)</span>*/
/*                             <i class="icon iPlugGray"></i>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class="active">*/
/*                         <a href="#">*/
/*                             Comics*/
/*                             <span class="count-val">(12)</span>*/
/*                             <i class="icon iPlugGray"></i>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             Design*/
/*                             <span class="count-val">(12)</span>*/
/*                             <i class="icon iPlugGray"></i>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             Fashion*/
/*                             <span class="count-val">(12)</span>*/
/*                             <i class="icon iPlugGray"></i>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             Film*/
/*                             <span class="count-val">(12)</span>*/
/*                             <i class="icon iPlugGray"></i>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             Games*/
/*                             <span class="count-val">(12)</span>*/
/*                             <i class="icon iPlugGray"></i>*/
/*                         </a>*/
/*                         <ul class="rs nav-sub-category">*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     Comedy*/
/*                                     <span class="count-val">(12)</span>*/
/*                                     <i class="dotSquare"></i>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     Animation*/
/*                                     <span class="count-val">(12)</span>*/
/*                                     <i class="dotSquare"></i>*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul><!--end: .nav-sub-category-->*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             Music*/
/*                             <span class="count-val">(12)</span>*/
/*                             <i class="icon iPlugGray"></i>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             Photography*/
/*                             <span class="count-val">(35)</span>*/
/*                             <i class="icon iPlugGray"></i>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             Publishing*/
/*                             <span class="count-val">(92)</span>*/
/*                             <i class="icon iPlugGray"></i>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             Technology*/
/*                             <span class="count-val">(13)</span>*/
/*                             <i class="icon iPlugGray"></i>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             Theater*/
/*                             <span class="count-val">(29)</span>*/
/*                             <i class="icon iPlugGray"></i>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div><!--end: .left-list-category -->*/
/*         </div><!--end: .sidebar -->*/
/*         <div class="clear"></div>*/
/*     </div>*/
/*     <footer id="footer">*/
/*         <div class="container_12 main-footer">*/
/*             <div class="grid_3 about-us">*/
/*                 <h3 class="rs title">About</h3>*/
/*                 <p class="rs description">Donec rutrum elit ac arcu bibendum rhoncus in vitae turpis. Quisque fermentum gravida eros non faucibus. Curabitur fermentum, arcu sed cursus commodo.</p>*/
/*                 <p class="rs email"><a class="fc-default  be-fc-orange" href="mailto:info@megadrupal.com">info@megadrupal.com</a></p>*/
/*                 <p class="rs">+1 (555) 555 - 55 - 55</p>*/
/*             </div><!--end: .contact-info -->*/
/*             <div class="grid_3 recent-tweets">*/
/*                 <h3 class="rs title">Recent Tweets</h3>*/
/*                 <div class="lst-tweets" id="sys_lst_tweets">*/
/*                     */
/*                 </div>*/
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
/*                 <h3 class="rs title">Discover &amp; Create</h3>*/
/*                 <div class="footer-menu">*/
/*                     <ul class="rs">*/
/*                         <li><a class="be-fc-orange" href="{{path('esprit_front_office_help')}}">Qui sommes nous</a></li>*/
/*                         <li><a class="be-fc-orange" href="#">Débuter votre projet</a></li>*/
/*                         <li><a class="be-fc-orange" href="{{path('esprit_application_add_idee')}}">Poster votre idée</a></li>*/
/*                         <li><a class="be-fc-orange" href="{{path('esprit_application_list_expert')}}">Les utilisateurs</a></li>*/
/*                         <li><a class="be-fc-orange" href="{{path('esprit_application_listeprobleme')}}">Les problémes</a></li>*/
/*                     </ul>*/
/*                     <ul class="rs">*/
/*                         <li><a class="be-fc-orange" href="#">Staff Picks</a></li>*/
/*                         <li><a class="be-fc-orange" href="#">Popular</a></li>*/
/*                         <li><a class="be-fc-orange" href="#">Recent</a></li>*/
/*                         <li><a class="be-fc-orange" href="#">Small Projects</a></li>*/
/*                         <li><a class="be-fc-orange" href="#">Most Funded</a></li>*/
/*                     </ul>*/
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
/*                     <p class="rs ta-c fc-gray-dark site-copyright">HTML by <a href="http://megadrupal.com" title="Drupal Developers" target="_blank">MegaDrupal</a>. Designed by <a href="http://bestwebsoft.com/" title="Web development company" target="_blank">BestWebSoft</a>.</p>*/
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
/*         <div class="grid_4">*/
/*             <div class="form login-form">*/
/*                 <form action="#">*/
/*                     <h3 class="rs title-form">Login</h3>*/
/*                     <div class="box-white">*/
/*                         <h4 class="rs title-box">Already Have an Account?</h4>*/
/*                         <p class="rs">Please log in to continue.</p>*/
/*                         <div class="form-action">*/
/*                             <label for="txt_email_login">*/
/*                                 <input id="txt_email_login" class="txt fill-width" type="email" placeholder="Enter your e-mail address"/>*/
/*                             </label>*/
/*                             <label for="txt_password_login">*/
/*                                 <input id="txt_password_login" class="txt fill-width" type="password" placeholder="Enter password"/>*/
/*                             </label>*/
/* */
/*                             <label for="chk_remember" class="rs pb20 clearfix">*/
/*                                 <input id="chk_remember" type="checkbox" class="chk-remember"/>*/
/*                                 <span class="lbl-remember">Remember me</span>*/
/*                             </label>*/
/*                             <p class="rs ta-c pb10">*/
/*                                 <button class="btn btn-red btn-submit" type="submit">Login</button>*/
/*                             </p>*/
/*                             <p class="rs ta-c">*/
/*                                 <a href="#" class="fc-orange">I forgot my password</a>*/
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
