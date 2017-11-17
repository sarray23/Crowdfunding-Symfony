<?php

/* EspritBackOfficeBundle:Widgets:widgets.html.twig */
class __TwigTemplate_bc51e605cf888612417a798ea9dcabbdb85c7443d268abd8f3580ef8488bc607 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritBackOfficeBundle::layout.html.twig", "EspritBackOfficeBundle:Widgets:widgets.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritBackOfficeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"graphs\">
\t     <div class=\"widget_head\">Widgets</div>
\t\t   <div class=\"widget_1\">
\t\t \t <div class=\"col-sm-3 widget_1_box\">
                <div class=\"tile-progress bg-info\">
                    <div class=\"content\">
                        <h4><i class=\"fa fa-dashboard icon-sm\"></i> Server Load</h4>
                        <div class=\"progress\"><div class=\"progress-bar inviewport animated visible slideInLeft\" style=\"width: 40%;\"></div></div>
                        <span>40% increase</span>
                    </div>
                </div>
             </div>
             <div class=\"col-sm-3 widget_1_box\">
                <div class=\"tile-progress bg-success\">
                    <div class=\"content\">
                        <h4><i class=\"fa fa-dashboard icon-sm\"></i> Server Load</h4>
                        <div class=\"progress\"><div class=\"progress-bar inviewport animated visible slideInLeft\" style=\"width: 40%;\"></div></div>
                        <span>40% increase</span>
                    </div>
                </div>
             </div>
             <div class=\"col-sm-3 widget_1_box\">
               <div class=\"tile-progress bg-danger\">
                    <div class=\"content\">
                        <h4><i class=\"fa fa-dashboard icon-sm\"></i> Server Load</h4>
                        <div class=\"progress\"><div class=\"progress-bar inviewport animated visible slideInLeft\" style=\"width: 40%;\"></div></div>
                        <span>40% increase</span>
                    </div>
                </div>
             </div>
             <div class=\"col-sm-3 widget_1_box\">
             \t<div class=\"tile-progress bg-secondary\">
                    <div class=\"content\">
                        <h4><i class=\"fa fa-dashboard icon-sm\"></i> Server Load</h4>
                        <div class=\"progress\"><div class=\"progress-bar inviewport animated visible slideInLeft\" style=\"width: 40%;\"></div></div>
                        <span>40% increase</span>
                    </div>
                </div>
\t\t\t  </div>
              <div class=\"clearfix\"> </div>
\t\t   </div>
\t\t   <div class=\"widget_2\">
\t\t   \t  <div class=\"col-sm-3 widget_1_box\">
\t\t   \t  \t<div class=\"wid-social facebook\">
                    <div class=\"social-icon\">
                        <i class=\"fa fa-facebook text-light icon-xlg pull-right\"></i>
                    </div>
                    <div class=\"social-info\">
                        <h3 class=\"number_counter bold count text-light start_timer counted\">143K</h3>
                        <h4 class=\"counttype text-light\">Likes</h4>
                        <span class=\"percent\">5% increase from last week</span>
                    </div>
                </div>
              </div>
              <div class=\"col-sm-3 widget_1_box\">
                <div class=\"wid-social twitter\">
                    <div class=\"social-icon\">
                        <i class=\"fa fa-twitter text-light icon-xlg pull-right\"></i>
                    </div>
                    <div class=\"social-info\">
                        <h3 class=\"number_counter bold count text-light start_timer counted\">3454</h3>
                        <h4 class=\"counttype text-light\">Tweets</h4>
                        <span class=\"percent\">2% increase from last week</span>
                    </div>
                </div>
\t\t\t  </div>
              <div class=\"col-sm-3 widget_1_box\">
              \t<div class=\"wid-social google-plus\">
                    <div class=\"social-icon\">
                        <i class=\"fa fa-google-plus text-light icon-xlg pull-right\"></i>
                    </div>
                    <div class=\"social-info\">
                        <h3 class=\"number_counter bold count text-light start_timer counted\">523</h3>
                        <h4 class=\"counttype text-light\">Circles</h4>
                        <span class=\"percent\">2% increase from last week</span>
                    </div>
                </div>
\t\t\t  </div>
              <div class=\"col-sm-3 widget_1_box\">
                <div class=\"wid-social dribbble\">
                    <div class=\"social-icon\">
                        <i class=\"fa fa-dribbble text-light icon-xlg pull-right\"></i>
                    </div>
                    <div class=\"social-info\">
                        <h3 class=\"number_counter bold count text-light start_timer counted\">2525</h3>
                        <h4 class=\"counttype text-light\">Subscribers</h4>
                        <span class=\"percent\">7% increase from last week</span>
                    </div>
                </div>
\t\t\t  </div>
              <div class=\"clearfix\"> </div>
\t\t   </div>
\t\t   <div class=\"widget_3\">
\t\t   \t  <div class=\"col-sm-3 widget_1_box\">
                <div class=\"wid-social linkedin\">
                    <div class=\"social-icon\">
                        <i class=\"fa fa-linkedin text-light icon-xlg pull-right\"></i>
                    </div>
                    <div class=\"social-info\">
                        <h3 class=\"number_counter bold count text-light start_timer counted\">2525</h3>
                        <h4 class=\"counttype text-light\">Connections</h4>
                        <span class=\"percent\">7% increase from last week</span>
                    </div>
                </div>
\t\t\t   </div>
               <div class=\"col-sm-3 widget_1_box\">
               \t<div class=\"wid-social youtube\">
                    <div class=\"social-icon\">
                        <i class=\"fa fa-youtube text-light icon-xlg pull-right\"></i>
                    </div>
                    <div class=\"social-info\">
                        <h3 class=\"number_counter bold count text-light start_timer counted\">1523</h3>
                        <h4 class=\"counttype text-light\">Subscribers</h4>
                        <span class=\"percent\">7% increase from last week</span>
                    </div>
                </div>
\t\t\t  </div>
              <div class=\"col-sm-3 widget_1_box\">
                <div class=\"wid-social skype\">
                    <div class=\"social-icon\">
                        <i class=\"fa fa-skype text-light icon-xlg pull-right\"></i>
                    </div>
                    <div class=\"social-info\">
                        <h3 class=\"number_counter bold count text-light start_timer counted\">2721</h3>
                        <h4 class=\"counttype text-light\">Contacts</h4>
                        <span class=\"percent\">7% increase from last week</span>
                    </div>
                </div>
\t\t\t  </div>
              <div class=\"col-sm-3 widget_1_box\">
                 <div class=\"wid-social flickr\">
                    <div class=\"social-icon\">
                        <i class=\"fa fa-flickr text-light icon-xlg pull-right\"></i>
                    </div>
                    <div class=\"social-info\">
                        <h3 class=\"number_counter bold count text-light start_timer counted\">1221</h3>
                        <h4 class=\"counttype text-light\">Media</h4>
                        <span class=\"percent\">7% increase from last week</span>
                    </div>
                </div>
               </div>
               <div class=\"clearfix\"> </div>
\t\t   </div>
\t\t   <div class=\"widget_4\">
\t\t   \t <div class=\"col-md-4 widget_1_box1\">
\t\t   \t \t<div class=\"coffee\">
\t\t\t\t<div class=\"coffee-top\">
\t\t\t\t\t<a href=\"#\"><img class=\"img-responsive\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic4.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t<div class=\"doe\">
\t\t\t\t\t\t<h6>Lorem Ipusm</h6>
\t\t\t\t\t\t<p>Web Designer</p>
\t\t\t\t\t</div>
\t\t\t\t\t<i></i></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"follow\">
\t\t\t\t\t<div class=\"col-xs-4 two\">
\t\t\t\t\t\t<p>Followers</p>
\t\t\t\t\t\t<span>1,367</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-4 two\">
\t\t\t\t\t\t<p>Tweets</p>
\t\t\t\t\t\t<span>967</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-4 two\">
\t\t\t\t\t\t<p>Following</p>
\t\t\t\t\t\t<span>367</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>
\t\t       </div>
\t\t   \t </div>
\t\t   \t <div class=\"col-md-4 stats-info3\"> 
\t\t   \t \t<div class=\"online\">
\t\t\t\t\t<a href=\"#\"><div class=\"online-top\">
\t\t\t\t\t\t<div class=\"top-at\">
\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/2.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"top-on\">
\t\t\t\t\t\t\t<div class=\"top-on1\">
\t\t\t\t\t\t\t\t<p>Characteristic</p>
\t\t\t\t\t\t\t\t<span>Ipsum</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label class=\"round\"> </label>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t</div></a>
\t\t\t\t\t<a href=\"#\"><div class=\"online-top\">
\t\t\t\t\t\t<div class=\"top-at\">
\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/3.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"top-on\">
\t\t\t\t\t\t\t<div class=\"top-on1\">
\t\t\t\t\t\t\t\t<p>Accompanied</p>
\t\t\t\t\t\t\t\t<span>Repet</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label class=\"round\"> </label>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t</div></a>
\t\t\t\t\t<a href=\"#\"><div class=\"online-top\">
\t\t\t\t\t\t<div class=\"top-at\">
\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/4.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"top-on\">
\t\t\t\t\t\t\t<div class=\"top-on1\">
\t\t\t\t\t\t\t\t<p>Adipiscing</p>
\t\t\t\t\t\t\t\t<span>Mistake</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label class=\"round\"> </label>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t</div></a>
\t\t\t\t\t<a href=\"#\"><div class=\"online-top online-top1\">
\t\t\t\t\t\t<div class=\"top-at\">
\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/1.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"top-on\">
\t\t\t\t\t\t\t<div class=\"top-on1\">
\t\t\t\t\t\t\t\t<p>Denouncing</p>
\t\t\t\t\t\t\t\t<span>Lorem</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label class=\"round\"> </label>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t</div></a>
\t\t\t\t</div>
\t\t   \t </div>
\t\t   \t <div class=\"col-md-4 stats-info stats-info1\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">Browser Stats</h4>
                </div>
                <div class=\"panel-body panel-body2\">
                    <ul class=\"list-unstyled\">
                        <li>Google Chrome<div class=\"text-success pull-right\">12%<i class=\"fa fa-level-up\"></i></div></li>
                        <li>Firefox<div class=\"text-success pull-right\">15%<i class=\"fa fa-level-up\"></i></div></li>
                        <li>Internet Explorer<div class=\"text-success pull-right\">18%<i class=\"fa fa-level-up\"></i></div></li>
                        <li>Safari<div class=\"text-danger pull-right\">17%<i class=\"fa fa-level-down\"></i></div></li>
                        <li>Opera<div class=\"text-danger pull-right\">10%<i class=\"fa fa-level-down\"></i></div></li>
                        <li>Mobile &amp; tablet<div class=\"text-success pull-right\">14%<i class=\"fa fa-level-up\"></i></div></li>
                        <li class=\"last\">Others<div class=\"text-success pull-right\">5%<i class=\"fa fa-level-up\"></i></div></li> 
                    </ul>
                </div>
            </div>
\t\t   \t <div class=\"clearfix\"> </div>
\t\t   </div>
\t\t   <div class=\"widget_5\">
\t\t   \t <div class=\"col-md-6 widget_1_box2\">
\t\t   \t \t<div class=\"wid_blog\">
\t\t   \t \t\t<h1>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</h1>
\t\t   \t \t</div>
\t\t   \t \t<div class=\"wid_blog-desc\">
\t\t   \t \t\t<div class=\"wid_blog-left\">
\t\t   \t \t\t\t<img src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/1.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
\t\t   \t \t\t</div>
\t\t   \t \t\t<div class=\"wid_blog-right\">
\t\t   \t \t\t\t<h2>Lorem Ipsum</h2>
\t\t   \t \t\t\t<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
\t\t   \t \t\t\t<ul class=\"list-unstyled list-inline\">
                            <li><a href=\"#\" class=\"text-muted\">12<sup>th</sup> March, 2015</a></li>
                            <li><a href=\"#\" class=\"text-muted\"><i class=\"fa fa-comment\"></i> 584</a></li>
                            <li><a href=\"#\" class=\"text-orange\"><i class=\"fa fa-heart\"></i> 12k</a></li>
                            <li><a href=\"#\" class=\"text-muted\">More</a></li>
                       </ul>
\t\t   \t \t\t</div>
\t\t   \t \t\t<div class=\"clearfix\"> </div>
\t\t   \t \t</div>
             </div>
             <div class=\"col-md-6 widget_1_box2\">
\t\t   \t \t<div class=\"widget-body\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control1 input-lg\" placeholder=\"Enter title ...\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"editor\">
\t\t\t\t\t\t<div class=\"editor-toolbar\">
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-link link1\"><span class=\"fa fa-code\"></span></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-link link1\"><span class=\"fa fa-font\"></span></button>
\t\t\t\t\t\t\t\t<button class=\"btn btn-link link1\"><span class=\"fa fa-paragraph\"></span></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-link link1\"><span class=\"fa fa-bold\"></span></button>
\t\t\t\t\t\t\t\t<button class=\"btn btn-link link1\"><span class=\"fa fa-italic\"></span></button>
\t\t\t\t\t\t\t\t<button class=\"btn btn-link link1\"><span class=\"fa fa-underline\"></span></button>
\t\t\t\t\t\t\t\t<button class=\"btn btn-link link1\"><span class=\"fa fa-strikethrough\"></span></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-link link1 active\"><span class=\"fa fa-align-left\"></span></button>
\t\t\t\t\t\t\t\t<button class=\"btn btn-link link1\"><span class=\"fa fa-align-center\"></span></button>
\t\t\t\t\t\t\t\t<button class=\"btn btn-link link1\"><span class=\"fa fa-align-right\"></span></button>
\t\t\t\t\t\t\t\t<button class=\"btn btn-link link1\"><span class=\"fa fa-align-justify\"></span></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-link link1\"><span class=\"fa fa-list-ul\"></span></button>
\t\t\t\t\t\t\t\t<button class=\"btn btn-link link1\"><span class=\"fa fa-list-ol\"></span></button>
\t\t\t\t\t\t\t\t<button class=\"btn btn-link link1\"><span class=\"fa fa-outdent\"></span></button>
\t\t\t\t\t\t\t\t<button class=\"btn btn-link link1\"><span class=\"fa fa-indent\"></span></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-link link1\"><span class=\"fa fa-table\"></span></button>
\t\t\t\t\t\t\t\t<button class=\"btn btn-link link1\"><span class=\"fa fa-th\"></span></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"editor-content ng-isolate-scope\" mb-scrollbar=\"contentScrollbar\">
\t\t\t\t\t\t\t<div class=\"editor-input ng-scope\" contenteditable=\"true\">
\t\t\t\t\t\t\t\t<h1>Header #1</h1>
\t\t\t\t\t\t\t\t<h2>Header #2</h2>
\t\t\t\t\t\t\t\t<h3>Header #3</h3>
\t\t\t\t\t\t\t\t<h4>Header #4</h4>
\t\t\t\t\t\t\t\t<h5>Header #5</h5>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error dolorem dolorum minima libero, officiis iure, ea? Dicta alias, tempora maxime illum nostrum ea atque eos vel. Aliquid ducimus culpa ut.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
             </div>
\t\t     <div class=\"clearfix\"> </div>
\t\t   </div>
\t\t   <div class=\"copy_layout\">
            <p>Copyright © 2015 Modern. All Rights Reserved | Design by <a href=\"http://w3layouts.com/\" target=\"_blank\">W3layouts</a> </p>
           </div>
\t  </div>
";
    }

    public function getTemplateName()
    {
        return "EspritBackOfficeBundle:Widgets:widgets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 259,  262 => 220,  245 => 206,  228 => 192,  211 => 178,  180 => 150,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "EspritBackOfficeBundle::layout.html.twig"%}*/
/* {%block container %}*/
/* <div class="graphs">*/
/* 	     <div class="widget_head">Widgets</div>*/
/* 		   <div class="widget_1">*/
/* 		 	 <div class="col-sm-3 widget_1_box">*/
/*                 <div class="tile-progress bg-info">*/
/*                     <div class="content">*/
/*                         <h4><i class="fa fa-dashboard icon-sm"></i> Server Load</h4>*/
/*                         <div class="progress"><div class="progress-bar inviewport animated visible slideInLeft" style="width: 40%;"></div></div>*/
/*                         <span>40% increase</span>*/
/*                     </div>*/
/*                 </div>*/
/*              </div>*/
/*              <div class="col-sm-3 widget_1_box">*/
/*                 <div class="tile-progress bg-success">*/
/*                     <div class="content">*/
/*                         <h4><i class="fa fa-dashboard icon-sm"></i> Server Load</h4>*/
/*                         <div class="progress"><div class="progress-bar inviewport animated visible slideInLeft" style="width: 40%;"></div></div>*/
/*                         <span>40% increase</span>*/
/*                     </div>*/
/*                 </div>*/
/*              </div>*/
/*              <div class="col-sm-3 widget_1_box">*/
/*                <div class="tile-progress bg-danger">*/
/*                     <div class="content">*/
/*                         <h4><i class="fa fa-dashboard icon-sm"></i> Server Load</h4>*/
/*                         <div class="progress"><div class="progress-bar inviewport animated visible slideInLeft" style="width: 40%;"></div></div>*/
/*                         <span>40% increase</span>*/
/*                     </div>*/
/*                 </div>*/
/*              </div>*/
/*              <div class="col-sm-3 widget_1_box">*/
/*              	<div class="tile-progress bg-secondary">*/
/*                     <div class="content">*/
/*                         <h4><i class="fa fa-dashboard icon-sm"></i> Server Load</h4>*/
/*                         <div class="progress"><div class="progress-bar inviewport animated visible slideInLeft" style="width: 40%;"></div></div>*/
/*                         <span>40% increase</span>*/
/*                     </div>*/
/*                 </div>*/
/* 			  </div>*/
/*               <div class="clearfix"> </div>*/
/* 		   </div>*/
/* 		   <div class="widget_2">*/
/* 		   	  <div class="col-sm-3 widget_1_box">*/
/* 		   	  	<div class="wid-social facebook">*/
/*                     <div class="social-icon">*/
/*                         <i class="fa fa-facebook text-light icon-xlg pull-right"></i>*/
/*                     </div>*/
/*                     <div class="social-info">*/
/*                         <h3 class="number_counter bold count text-light start_timer counted">143K</h3>*/
/*                         <h4 class="counttype text-light">Likes</h4>*/
/*                         <span class="percent">5% increase from last week</span>*/
/*                     </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="col-sm-3 widget_1_box">*/
/*                 <div class="wid-social twitter">*/
/*                     <div class="social-icon">*/
/*                         <i class="fa fa-twitter text-light icon-xlg pull-right"></i>*/
/*                     </div>*/
/*                     <div class="social-info">*/
/*                         <h3 class="number_counter bold count text-light start_timer counted">3454</h3>*/
/*                         <h4 class="counttype text-light">Tweets</h4>*/
/*                         <span class="percent">2% increase from last week</span>*/
/*                     </div>*/
/*                 </div>*/
/* 			  </div>*/
/*               <div class="col-sm-3 widget_1_box">*/
/*               	<div class="wid-social google-plus">*/
/*                     <div class="social-icon">*/
/*                         <i class="fa fa-google-plus text-light icon-xlg pull-right"></i>*/
/*                     </div>*/
/*                     <div class="social-info">*/
/*                         <h3 class="number_counter bold count text-light start_timer counted">523</h3>*/
/*                         <h4 class="counttype text-light">Circles</h4>*/
/*                         <span class="percent">2% increase from last week</span>*/
/*                     </div>*/
/*                 </div>*/
/* 			  </div>*/
/*               <div class="col-sm-3 widget_1_box">*/
/*                 <div class="wid-social dribbble">*/
/*                     <div class="social-icon">*/
/*                         <i class="fa fa-dribbble text-light icon-xlg pull-right"></i>*/
/*                     </div>*/
/*                     <div class="social-info">*/
/*                         <h3 class="number_counter bold count text-light start_timer counted">2525</h3>*/
/*                         <h4 class="counttype text-light">Subscribers</h4>*/
/*                         <span class="percent">7% increase from last week</span>*/
/*                     </div>*/
/*                 </div>*/
/* 			  </div>*/
/*               <div class="clearfix"> </div>*/
/* 		   </div>*/
/* 		   <div class="widget_3">*/
/* 		   	  <div class="col-sm-3 widget_1_box">*/
/*                 <div class="wid-social linkedin">*/
/*                     <div class="social-icon">*/
/*                         <i class="fa fa-linkedin text-light icon-xlg pull-right"></i>*/
/*                     </div>*/
/*                     <div class="social-info">*/
/*                         <h3 class="number_counter bold count text-light start_timer counted">2525</h3>*/
/*                         <h4 class="counttype text-light">Connections</h4>*/
/*                         <span class="percent">7% increase from last week</span>*/
/*                     </div>*/
/*                 </div>*/
/* 			   </div>*/
/*                <div class="col-sm-3 widget_1_box">*/
/*                	<div class="wid-social youtube">*/
/*                     <div class="social-icon">*/
/*                         <i class="fa fa-youtube text-light icon-xlg pull-right"></i>*/
/*                     </div>*/
/*                     <div class="social-info">*/
/*                         <h3 class="number_counter bold count text-light start_timer counted">1523</h3>*/
/*                         <h4 class="counttype text-light">Subscribers</h4>*/
/*                         <span class="percent">7% increase from last week</span>*/
/*                     </div>*/
/*                 </div>*/
/* 			  </div>*/
/*               <div class="col-sm-3 widget_1_box">*/
/*                 <div class="wid-social skype">*/
/*                     <div class="social-icon">*/
/*                         <i class="fa fa-skype text-light icon-xlg pull-right"></i>*/
/*                     </div>*/
/*                     <div class="social-info">*/
/*                         <h3 class="number_counter bold count text-light start_timer counted">2721</h3>*/
/*                         <h4 class="counttype text-light">Contacts</h4>*/
/*                         <span class="percent">7% increase from last week</span>*/
/*                     </div>*/
/*                 </div>*/
/* 			  </div>*/
/*               <div class="col-sm-3 widget_1_box">*/
/*                  <div class="wid-social flickr">*/
/*                     <div class="social-icon">*/
/*                         <i class="fa fa-flickr text-light icon-xlg pull-right"></i>*/
/*                     </div>*/
/*                     <div class="social-info">*/
/*                         <h3 class="number_counter bold count text-light start_timer counted">1221</h3>*/
/*                         <h4 class="counttype text-light">Media</h4>*/
/*                         <span class="percent">7% increase from last week</span>*/
/*                     </div>*/
/*                 </div>*/
/*                </div>*/
/*                <div class="clearfix"> </div>*/
/* 		   </div>*/
/* 		   <div class="widget_4">*/
/* 		   	 <div class="col-md-4 widget_1_box1">*/
/* 		   	 	<div class="coffee">*/
/* 				<div class="coffee-top">*/
/* 					<a href="#"><img class="img-responsive" src="{{asset('images/pic4.jpg')}}" alt="">*/
/* 					<div class="doe">*/
/* 						<h6>Lorem Ipusm</h6>*/
/* 						<p>Web Designer</p>*/
/* 					</div>*/
/* 					<i></i></a>*/
/* 				</div>*/
/* 				<div class="follow">*/
/* 					<div class="col-xs-4 two">*/
/* 						<p>Followers</p>*/
/* 						<span>1,367</span>*/
/* 					</div>*/
/* 					<div class="col-xs-4 two">*/
/* 						<p>Tweets</p>*/
/* 						<span>967</span>*/
/* 					</div>*/
/* 					<div class="col-xs-4 two">*/
/* 						<p>Following</p>*/
/* 						<span>367</span>*/
/* 					</div>*/
/* 					<div class="clearfix"> </div>*/
/* 				</div>*/
/* 		       </div>*/
/* 		   	 </div>*/
/* 		   	 <div class="col-md-4 stats-info3"> */
/* 		   	 	<div class="online">*/
/* 					<a href="#"><div class="online-top">*/
/* 						<div class="top-at">*/
/* 							<img class="img-responsive" src="{{asset('images/2.png')}}" alt="">*/
/* 						</div>*/
/* 						<div class="top-on">*/
/* 							<div class="top-on1">*/
/* 								<p>Characteristic</p>*/
/* 								<span>Ipsum</span>*/
/* 							</div>*/
/* 							<label class="round"> </label>*/
/* 							<div class="clearfix"> </div>*/
/* 						</div>*/
/* 						<div class="clearfix"> </div>*/
/* 					</div></a>*/
/* 					<a href="#"><div class="online-top">*/
/* 						<div class="top-at">*/
/* 							<img class="img-responsive" src="{{asset('images/3.png')}}" alt="">*/
/* 						</div>*/
/* 						<div class="top-on">*/
/* 							<div class="top-on1">*/
/* 								<p>Accompanied</p>*/
/* 								<span>Repet</span>*/
/* 							</div>*/
/* 							<label class="round"> </label>*/
/* 							<div class="clearfix"> </div>*/
/* 						</div>*/
/* 						<div class="clearfix"> </div>*/
/* 					</div></a>*/
/* 					<a href="#"><div class="online-top">*/
/* 						<div class="top-at">*/
/* 							<img class="img-responsive" src="{{asset('images/4.png')}}" alt="">*/
/* 						</div>*/
/* 						<div class="top-on">*/
/* 							<div class="top-on1">*/
/* 								<p>Adipiscing</p>*/
/* 								<span>Mistake</span>*/
/* 							</div>*/
/* 							<label class="round"> </label>*/
/* 							<div class="clearfix"> </div>*/
/* 						</div>*/
/* 						<div class="clearfix"> </div>*/
/* 					</div></a>*/
/* 					<a href="#"><div class="online-top online-top1">*/
/* 						<div class="top-at">*/
/* 							<img class="img-responsive" src="{{asset('images/1.png')}}" alt="">*/
/* 						</div>*/
/* 						<div class="top-on">*/
/* 							<div class="top-on1">*/
/* 								<p>Denouncing</p>*/
/* 								<span>Lorem</span>*/
/* 							</div>*/
/* 							<label class="round"> </label>*/
/* 							<div class="clearfix"> </div>*/
/* 						</div>*/
/* 						<div class="clearfix"> </div>*/
/* 					</div></a>*/
/* 				</div>*/
/* 		   	 </div>*/
/* 		   	 <div class="col-md-4 stats-info stats-info1">*/
/*                 <div class="panel-heading">*/
/*                     <h4 class="panel-title">Browser Stats</h4>*/
/*                 </div>*/
/*                 <div class="panel-body panel-body2">*/
/*                     <ul class="list-unstyled">*/
/*                         <li>Google Chrome<div class="text-success pull-right">12%<i class="fa fa-level-up"></i></div></li>*/
/*                         <li>Firefox<div class="text-success pull-right">15%<i class="fa fa-level-up"></i></div></li>*/
/*                         <li>Internet Explorer<div class="text-success pull-right">18%<i class="fa fa-level-up"></i></div></li>*/
/*                         <li>Safari<div class="text-danger pull-right">17%<i class="fa fa-level-down"></i></div></li>*/
/*                         <li>Opera<div class="text-danger pull-right">10%<i class="fa fa-level-down"></i></div></li>*/
/*                         <li>Mobile &amp; tablet<div class="text-success pull-right">14%<i class="fa fa-level-up"></i></div></li>*/
/*                         <li class="last">Others<div class="text-success pull-right">5%<i class="fa fa-level-up"></i></div></li> */
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/* 		   	 <div class="clearfix"> </div>*/
/* 		   </div>*/
/* 		   <div class="widget_5">*/
/* 		   	 <div class="col-md-6 widget_1_box2">*/
/* 		   	 	<div class="wid_blog">*/
/* 		   	 		<h1>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</h1>*/
/* 		   	 	</div>*/
/* 		   	 	<div class="wid_blog-desc">*/
/* 		   	 		<div class="wid_blog-left">*/
/* 		   	 			<img src="{{asset('images/1.png')}}" class="img-responsive" alt="">*/
/* 		   	 		</div>*/
/* 		   	 		<div class="wid_blog-right">*/
/* 		   	 			<h2>Lorem Ipsum</h2>*/
/* 		   	 			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>*/
/* 		   	 			<ul class="list-unstyled list-inline">*/
/*                             <li><a href="#" class="text-muted">12<sup>th</sup> March, 2015</a></li>*/
/*                             <li><a href="#" class="text-muted"><i class="fa fa-comment"></i> 584</a></li>*/
/*                             <li><a href="#" class="text-orange"><i class="fa fa-heart"></i> 12k</a></li>*/
/*                             <li><a href="#" class="text-muted">More</a></li>*/
/*                        </ul>*/
/* 		   	 		</div>*/
/* 		   	 		<div class="clearfix"> </div>*/
/* 		   	 	</div>*/
/*              </div>*/
/*              <div class="col-md-6 widget_1_box2">*/
/* 		   	 	<div class="widget-body">*/
/* 					<div class="form-group">*/
/* 						<input type="text" class="form-control1 input-lg" placeholder="Enter title ...">*/
/* 					</div>*/
/* 					<div class="editor">*/
/* 						<div class="editor-toolbar">*/
/* 							<div class="btn-group">*/
/* 								<button class="btn btn-link link1"><span class="fa fa-code"></span></button>*/
/* 							</div>*/
/* 							<div class="btn-group">*/
/* 								<button class="btn btn-link link1"><span class="fa fa-font"></span></button>*/
/* 								<button class="btn btn-link link1"><span class="fa fa-paragraph"></span></button>*/
/* 							</div>*/
/* 							<div class="btn-group">*/
/* 								<button class="btn btn-link link1"><span class="fa fa-bold"></span></button>*/
/* 								<button class="btn btn-link link1"><span class="fa fa-italic"></span></button>*/
/* 								<button class="btn btn-link link1"><span class="fa fa-underline"></span></button>*/
/* 								<button class="btn btn-link link1"><span class="fa fa-strikethrough"></span></button>*/
/* 							</div>*/
/* 							<div class="btn-group">*/
/* 								<button class="btn btn-link link1 active"><span class="fa fa-align-left"></span></button>*/
/* 								<button class="btn btn-link link1"><span class="fa fa-align-center"></span></button>*/
/* 								<button class="btn btn-link link1"><span class="fa fa-align-right"></span></button>*/
/* 								<button class="btn btn-link link1"><span class="fa fa-align-justify"></span></button>*/
/* 							</div>*/
/* 							<div class="btn-group">*/
/* 								<button class="btn btn-link link1"><span class="fa fa-list-ul"></span></button>*/
/* 								<button class="btn btn-link link1"><span class="fa fa-list-ol"></span></button>*/
/* 								<button class="btn btn-link link1"><span class="fa fa-outdent"></span></button>*/
/* 								<button class="btn btn-link link1"><span class="fa fa-indent"></span></button>*/
/* 							</div>*/
/* 							<div class="btn-group">*/
/* 								<button class="btn btn-link link1"><span class="fa fa-table"></span></button>*/
/* 								<button class="btn btn-link link1"><span class="fa fa-th"></span></button>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="editor-content ng-isolate-scope" mb-scrollbar="contentScrollbar">*/
/* 							<div class="editor-input ng-scope" contenteditable="true">*/
/* 								<h1>Header #1</h1>*/
/* 								<h2>Header #2</h2>*/
/* 								<h3>Header #3</h3>*/
/* 								<h4>Header #4</h4>*/
/* 								<h5>Header #5</h5>*/
/* 								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error dolorem dolorum minima libero, officiis iure, ea? Dicta alias, tempora maxime illum nostrum ea atque eos vel. Aliquid ducimus culpa ut.</p>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/*              </div>*/
/* 		     <div class="clearfix"> </div>*/
/* 		   </div>*/
/* 		   <div class="copy_layout">*/
/*             <p>Copyright © 2015 Modern. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>*/
/*            </div>*/
/* 	  </div>*/
/* {%endblock%}*/
