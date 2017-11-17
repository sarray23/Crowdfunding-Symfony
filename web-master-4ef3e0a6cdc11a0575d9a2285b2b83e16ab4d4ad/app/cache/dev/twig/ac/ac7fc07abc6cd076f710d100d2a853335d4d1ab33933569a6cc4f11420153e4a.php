<?php

/* EspritFrontOfficeBundle:Projet:ListeProjet.html.twig */
class __TwigTemplate_237c0347025a9953f08e0a45680cd15efe164c6abcbbd3e6bf372de9d2d7192c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::layout1.html.twig", "EspritFrontOfficeBundle:Projet:ListeProjet.html.twig", 2);
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
        echo " 
    
      <div class=\"form-search\">
                        <form method=\"POST\">

                            <label for=\"sys_txt_keyword\">
                                
                                <input id=\"sys_txt_keyword\" class=\"txt-keyword\" name=\"proj\" type=\"text\" placeholder=\"Search projects\">
                            </label>
                            <button class=\"btn-search\" type=\"reset\"><i class=\"icon iMagnifier\"></i></button>
                            <button class=\"btn-reset-keyword\" type=\"reset\"><i class=\"icon iXHover\"></i></button>
                        </form>
                        
                        
                    </div>
    <ul>
    <li class=\"current first\">
          <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_tableau");
        echo "\">Gestion de Projets</a>
    </li>
     <li class=\"current first\">
          <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_forum_homepage_topics");
        echo "\">Forum</a>
    </li>
    <li class=\"current_ancestor\">
        <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_liste");
        echo "\">liste de projets</a>
        <ul class=\"menu_level_1\">
          

            <li class=\"current first last\">
                <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_liste");
        echo "\">Rechercher projet</a>
            </li>
        </ul>
    </li>
</ul>

     <div class=\"top-lbl-val\">
                    <h3 class=\"common-title\">Découvrir / <span class=\"fc-orange\">Projets</span></h3>
                    <div class=\"count-result\">
                       
                    </div>
    </div>
     
   
     
     <div class=\"list-project-in-category\">
                    <div class=\"lbl-type clearfix\">
                        <h4 class=\"rs title-lbl\"><a href=\"#\" class=\"be-fc-orange\">Liste de Projets</a></h4>
                        <br><br>
                        <div class=\"list-project\">
                            
                        </div>";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mds"]) ? $context["mds"] : $this->getContext($context, "mds")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 53
            echo "                        


                        <div class=\"grid_3\">
                            <div class=\"project-short sml-thumb\">
                                <div class=\"top-project-info\">
                                    <div class=\"content-info-short clearfix\">
                                        <a href=\"#\" class=\"thumb-img\">
                                             <img src =\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/projets/" . $this->getAttribute($context["m"], "path", array()))), "html", null, true);
            echo "\"  width=\"450\" height=\"250\"alt=\"\"  > 
                                        </a>
                                        <div class=\"wrap-short-detail\">
                                            <h3 class=\"rs acticle-title\"><a class=\"be-fc-orange\" href=\"#\"><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_front_office_detail", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "titre", array()), "html", null, true);
            echo "</h3>
                                            <p class=\"rs tiny-desc\">Par <a href=\"#\" class=\"fw-b fc-gray be-fc-orange\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["m"], "idUser", array()), "username", array()), "html", null, true);
            echo "</a></p>
                                            <p class=\"rs title-description\">type ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "type", array()), "html", null, true);
            echo "</p>
                                            <p class=\"rs project-location\">
                                                <i class=\"icon iLocation\">pays : ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "pays", array()), "html", null, true);
            echo "</i>
                                                  
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div><!--end: .grid_3 > .project-short-->";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                        <!--end: .grid_3 > .project-short-->

                       <!--end: .grid_3 > .project-short-->
                        <div class=\"clear\"></div>
                    </div>
                </div>
        
        
        

        
        
        
        
";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Projet:ListeProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 77,  128 => 68,  123 => 66,  119 => 65,  113 => 64,  107 => 61,  97 => 53,  93 => 52,  69 => 31,  61 => 26,  55 => 23,  49 => 20,  28 => 3,  11 => 2,);
    }
}
/*     */
/* {% extends "EspritFrontOfficeBundle::layout1.html.twig" %}*/
/* {% block content %} */
/*     */
/*       <div class="form-search">*/
/*                         <form method="POST">*/
/* */
/*                             <label for="sys_txt_keyword">*/
/*                                 */
/*                                 <input id="sys_txt_keyword" class="txt-keyword" name="proj" type="text" placeholder="Search projects">*/
/*                             </label>*/
/*                             <button class="btn-search" type="reset"><i class="icon iMagnifier"></i></button>*/
/*                             <button class="btn-reset-keyword" type="reset"><i class="icon iXHover"></i></button>*/
/*                         </form>*/
/*                         */
/*                         */
/*                     </div>*/
/*     <ul>*/
/*     <li class="current first">*/
/*           <a href="{{ path('esprit_front_office_tableau') }}">Gestion de Projets</a>*/
/*     </li>*/
/*      <li class="current first">*/
/*           <a href="{{ path('esprit_front_office_forum_homepage_topics') }}">Forum</a>*/
/*     </li>*/
/*     <li class="current_ancestor">*/
/*         <a href="{{path('esprit_front_office_liste')}}">liste de projets</a>*/
/*         <ul class="menu_level_1">*/
/*           */
/* */
/*             <li class="current first last">*/
/*                 <a href="{{path('esprit_front_office_liste')}}">Rechercher projet</a>*/
/*             </li>*/
/*         </ul>*/
/*     </li>*/
/* </ul>*/
/* */
/*      <div class="top-lbl-val">*/
/*                     <h3 class="common-title">Découvrir / <span class="fc-orange">Projets</span></h3>*/
/*                     <div class="count-result">*/
/*                        */
/*                     </div>*/
/*     </div>*/
/*      */
/*    */
/*      */
/*      <div class="list-project-in-category">*/
/*                     <div class="lbl-type clearfix">*/
/*                         <h4 class="rs title-lbl"><a href="#" class="be-fc-orange">Liste de Projets</a></h4>*/
/*                         <br><br>*/
/*                         <div class="list-project">*/
/*                             */
/*                         </div>{% for m in mds %}*/
/*                         */
/* */
/* */
/*                         <div class="grid_3">*/
/*                             <div class="project-short sml-thumb">*/
/*                                 <div class="top-project-info">*/
/*                                     <div class="content-info-short clearfix">*/
/*                                         <a href="#" class="thumb-img">*/
/*                                              <img src ="{{asset('uploads/projets/'~m.path) }}"  width="450" height="250"alt=""  > */
/*                                         </a>*/
/*                                         <div class="wrap-short-detail">*/
/*                                             <h3 class="rs acticle-title"><a class="be-fc-orange" href="#"><a href="{{path('esprit_front_office_detail', {'id':m.id})}}"> {{ m.titre}}</h3>*/
/*                                             <p class="rs tiny-desc">Par <a href="#" class="fw-b fc-gray be-fc-orange">{{m.idUser.username}}</a></p>*/
/*                                             <p class="rs title-description">type {{m.type}}</p>*/
/*                                             <p class="rs project-location">*/
/*                                                 <i class="icon iLocation">pays : {{m.pays}}</i>*/
/*                                                   */
/*                                             </p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 */
/*                             </div>*/
/*                         </div><!--end: .grid_3 > .project-short-->{% endfor %}*/
/*                         <!--end: .grid_3 > .project-short-->*/
/* */
/*                        <!--end: .grid_3 > .project-short-->*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div>*/
/*         */
/*         */
/*         */
/* */
/*         */
/*         */
/*         */
/*         */
/* {%endblock%}*/
/* */
/* */
