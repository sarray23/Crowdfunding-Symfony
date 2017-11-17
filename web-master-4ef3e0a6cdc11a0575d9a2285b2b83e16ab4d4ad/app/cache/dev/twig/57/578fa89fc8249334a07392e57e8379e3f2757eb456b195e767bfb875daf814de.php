<?php

/* EspritFrontOfficeBundle:Default:help.html.twig */
class __TwigTemplate_0d56e8be1c695d8b8904e18c000dad4df2f554dcc99978d2e79189346abc0181 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::layout1.html.twig", "EspritFrontOfficeBundle:Default:help.html.twig", 2);
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
        // line 5
        echo "<div class=\"container_12\">
        <div class=\"how-it-work\">
            <div class=\"grid_12 short-introduce\">
                <h3 class=\"rs title\"><span class=\"fc-black\">Easy way to realize</span> your dream</h3>
                <div class=\"box-introduce\">
                    <div class=\"wrap-2col\">
                        <div class=\"left-intro\">
                            <h4 class=\"rs title-intro\">Lancez votre projet à Crowdrise </h4>
                            <p class=\"rs pb20\">Crowdrise une plaetform simple qui rend vos rêves vrai.</p>
                            <p class=\"rs pb20\">Le principe de ce site est de financer des projets et collecter des idées grâce à un réseau d'utilisateurs . Inscrivez-vous sur notre site , voter et donner de l'argent à des projets que vous aimez , même les investisseurs peuvent investir dans certains projets en communiquant avec les porteurs de projets</p>
                            <a class=\"btn btn-red btn-star-project\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("esprit_front_office_ajout");
        echo "\">
                               <span class=\"lbl\">Lancez votre projet</span>
                                
                            </a>
                           
                        </div>
                        <div class=\"right-intro\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/tunisie.jpg"), "html", null, true);
        echo "\" class=\"\" alt=\"\$DESCRIPTION\"/></div>
                        <div class=\"clear\"></div>
                    </div>
                </div>
           


    
    <footer id=\"footer\">
        <div class=\"container_12 main-footer\">
            
            
           
            
            <div class=\"clear\"></div>
        </div>
       
        
        ";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Default:help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 21,  43 => 15,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "EspritFrontOfficeBundle::layout1.html.twig" %}*/
/* */
/* {% block content %}*/
/* <div class="container_12">*/
/*         <div class="how-it-work">*/
/*             <div class="grid_12 short-introduce">*/
/*                 <h3 class="rs title"><span class="fc-black">Easy way to realize</span> your dream</h3>*/
/*                 <div class="box-introduce">*/
/*                     <div class="wrap-2col">*/
/*                         <div class="left-intro">*/
/*                             <h4 class="rs title-intro">Lancez votre projet à Crowdrise </h4>*/
/*                             <p class="rs pb20">Crowdrise une plaetform simple qui rend vos rêves vrai.</p>*/
/*                             <p class="rs pb20">Le principe de ce site est de financer des projets et collecter des idées grâce à un réseau d'utilisateurs . Inscrivez-vous sur notre site , voter et donner de l'argent à des projets que vous aimez , même les investisseurs peuvent investir dans certains projets en communiquant avec les porteurs de projets</p>*/
/*                             <a class="btn btn-red btn-star-project" href="{{path('esprit_front_office_ajout')}}">*/
/*                                <span class="lbl">Lancez votre projet</span>*/
/*                                 */
/*                             </a>*/
/*                            */
/*                         </div>*/
/*                         <div class="right-intro"><img src="{{asset('images/tunisie.jpg')}}" class="" alt="$DESCRIPTION"/></div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div>*/
/*            */
/* */
/* */
/*     */
/*     <footer id="footer">*/
/*         <div class="container_12 main-footer">*/
/*             */
/*             */
/*            */
/*             */
/*             <div class="clear"></div>*/
/*         </div>*/
/*        */
/*         */
/*         {% endblock content %}*/
/* {# empty Twig template #}*/
