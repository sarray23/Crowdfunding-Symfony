<?php

/* EspritFrontOfficeBundle:Projet:detailP.html.twig */
class __TwigTemplate_d4d487334e2dc7ae834981fe5b9b7c55b0b3fa5617bec46e8e9c3f2b941be2b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::layout1.html.twig", "EspritFrontOfficeBundle:Projet:detailP.html.twig", 1);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "       
        
        <div class=\"layout-2cols\">
        <div class=\"grid_12 top-info\">
            <h2 class=\"common-title big rs\"><span class=\"fc-black\">Projet</span> </h2>
        </div>
        <div class=\"content grid_8\">
            <div class=\"single-page\">
                <div class=\"box-single-content\">
                    <h3 class=\"rs single-title\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), "html", null, true);
        echo "</h3>
                    <p class=\"rs post-by\">by <a href=\"profile.html\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idUser", array()), "username", array()), "html", null, true);
        echo "</a></p>
                    <div class=\"editor-content\">
                        <p>
                            <img class=\"img-desc\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/projets/" . $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "path", array()))), "html", null, true);
        echo "\" alt=\"\$DESCRIPTION\">
                        </p><p>
                            ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), "html", null, true);
        echo "</p>
                        <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"utility-post clearfix\">
                    <div class=\"tag-cloud\">
                        <span class=\"fc-gray sep\">,</span>
                        <a href=\"#\" class=\"fc-gray be-fc-orange\">news</a><span class=\"fc-gray sep\">,</span>
                        <a href=\"#\" class=\"fc-gray be-fc-orange\">media</a><span class=\"fc-gray sep\">,</span>
                        <a href=\"#\" class=\"fc-gray be-fc-orange\">post</a>
                    </div>
                    <!-- AddThis Button BEGIN -->
                    <div class=\"social-sharing-outside\">
                        <div class=\"addthis_toolbox addthis_default_style\">
                        <a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a>
                        <a class=\"addthis_button_tweet\"></a>
                        <a class=\"addthis_button_google_plusone\" g:plusone:size=\"medium\"></a>
                        <a class=\"addthis_counter addthis_pill_style\"></a>
                        </div>
                        <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=undefined\"></script>
                    </div><!-- AddThis Button END -->
                </div><!--end: .utility-post -->
                <div class=\"wrapper-box box-list-comment\">
                    
                    </div>
                </div><!--end: .box-list-comment -->
                <!--end: .box-list-comment -->
            </div>
        </div><!--end: .content -->
        <div class=\"sidebar grid_4\">
            <div class=\"box-gray project-author\">
                <h3 class=\"title-box\">Project by</h3>
                <div class=\"media\">
                    <a href=\"profile.html\" class=\"thumb-left\">
                        <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/projets/" . $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "path", array()))), "html", null, true);
        echo "\" alt=\"\$USER_NAME\"/>
                    </a>
                    <div class=\"media-body\">
                        <h4 class=\"rs pb10\"><a href=\"profile.html\" class=\"be-fc-orange fw-b\">";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idUser", array()), "username", array()), "html", null, true);
        echo "</a></h4>
                        <p class=\"rs\">";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), "html", null, true);
        echo "</p>
                       
                    </div>
                </div>
                <div class=\"author-action\">
                    <a class=\"btn btn-red\" href=\"profile.html\">Contact me</a>
                    <a class=\"btn btn-white\" href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_liste");
        echo "\">See full projects</a>
                </div>
            </div><!--end: .project-author -->
            <div class=\"box-gray\">
                <h3 class=\"title-box\">Details</h3>
                <p class=\"rs description pb20\"> ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), "html", null, true);
        echo "</p>
                <p class=\"rs description pb20\"> ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), "html", null, true);
        echo "</p>
                 <p class=\"rs description pb20\"> ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), "html", null, true);
        echo "</p>
                <a class=\"btn bigger fill-width btn-white\" href=\"#\">Large download button</a>
                <a class=\"btn bigger fill-width btn-blue\" href=\"#\">Large download button</a>

            </div>
        </div><!--end: .sidebar -->
        <div class=\"clear\"></div>
    </div>
        
        
        ";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Projet:detailP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 70,  128 => 69,  124 => 68,  116 => 63,  107 => 57,  103 => 56,  97 => 53,  61 => 20,  57 => 19,  52 => 17,  46 => 14,  42 => 13,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "EspritFrontOfficeBundle::layout1.html.twig" %}*/
/* */
/*     {% block content %}*/
/*        */
/*         */
/*         <div class="layout-2cols">*/
/*         <div class="grid_12 top-info">*/
/*             <h2 class="common-title big rs"><span class="fc-black">Projet</span> </h2>*/
/*         </div>*/
/*         <div class="content grid_8">*/
/*             <div class="single-page">*/
/*                 <div class="box-single-content">*/
/*                     <h3 class="rs single-title">{{form.titre}}</h3>*/
/*                     <p class="rs post-by">by <a href="profile.html">{{form.idUser.username}}</a></p>*/
/*                     <div class="editor-content">*/
/*                         <p>*/
/*                             <img class="img-desc" src="{{asset('uploads/projets/'~form.path) }}" alt="$DESCRIPTION">*/
/*                         </p><p>*/
/*                             {{form.description}}</p>*/
/*                         <p>{{form.description}}</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="utility-post clearfix">*/
/*                     <div class="tag-cloud">*/
/*                         <span class="fc-gray sep">,</span>*/
/*                         <a href="#" class="fc-gray be-fc-orange">news</a><span class="fc-gray sep">,</span>*/
/*                         <a href="#" class="fc-gray be-fc-orange">media</a><span class="fc-gray sep">,</span>*/
/*                         <a href="#" class="fc-gray be-fc-orange">post</a>*/
/*                     </div>*/
/*                     <!-- AddThis Button BEGIN -->*/
/*                     <div class="social-sharing-outside">*/
/*                         <div class="addthis_toolbox addthis_default_style">*/
/*                         <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>*/
/*                         <a class="addthis_button_tweet"></a>*/
/*                         <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>*/
/*                         <a class="addthis_counter addthis_pill_style"></a>*/
/*                         </div>*/
/*                         <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=undefined"></script>*/
/*                     </div><!-- AddThis Button END -->*/
/*                 </div><!--end: .utility-post -->*/
/*                 <div class="wrapper-box box-list-comment">*/
/*                     */
/*                     </div>*/
/*                 </div><!--end: .box-list-comment -->*/
/*                 <!--end: .box-list-comment -->*/
/*             </div>*/
/*         </div><!--end: .content -->*/
/*         <div class="sidebar grid_4">*/
/*             <div class="box-gray project-author">*/
/*                 <h3 class="title-box">Project by</h3>*/
/*                 <div class="media">*/
/*                     <a href="profile.html" class="thumb-left">*/
/*                         <img src="{{asset('uploads/projets/'~form.path) }}" alt="$USER_NAME"/>*/
/*                     </a>*/
/*                     <div class="media-body">*/
/*                         <h4 class="rs pb10"><a href="profile.html" class="be-fc-orange fw-b">{{form.idUser.username}}</a></h4>*/
/*                         <p class="rs">{{form.pays}}</p>*/
/*                        */
/*                     </div>*/
/*                 </div>*/
/*                 <div class="author-action">*/
/*                     <a class="btn btn-red" href="profile.html">Contact me</a>*/
/*                     <a class="btn btn-white" href="{{path('esprit_front_office_liste')}}">See full projects</a>*/
/*                 </div>*/
/*             </div><!--end: .project-author -->*/
/*             <div class="box-gray">*/
/*                 <h3 class="title-box">Details</h3>*/
/*                 <p class="rs description pb20"> {{form.pays}}</p>*/
/*                 <p class="rs description pb20"> {{form.type}}</p>*/
/*                  <p class="rs description pb20"> {{form.categorie}}</p>*/
/*                 <a class="btn bigger fill-width btn-white" href="#">Large download button</a>*/
/*                 <a class="btn bigger fill-width btn-blue" href="#">Large download button</a>*/
/* */
/*             </div>*/
/*         </div><!--end: .sidebar -->*/
/*         <div class="clear"></div>*/
/*     </div>*/
/*         */
/*         */
/*         {%endblock%}*/
