<?php

/* EspritBackOfficeBundle:STAT:LineChart.html.twig */
class __TwigTemplate_9c57ba95e60859cf922e26c9c1cadaf22e7b536e5893cc997b0715bb3b0e19f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::layout1.html.twig", "EspritBackOfficeBundle:STAT:LineChart.html.twig", 1);
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
        echo "    
<!-- Load jQuery from Google's CDN if needed -->
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
 
<script src=\"//code.highcharts.com/4.0.1/highcharts.js\"></script>
<script src=\"//code.highcharts.com/4.0.1/modules/exporting.js\"></script>
<script type=\"text/javascript\">
    ";
        // line 10
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["linechart"]) ? $context["linechart"] : $this->getContext($context, "linechart")));
        echo "
</script>
 
<div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
<a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("esprit_application_statPie");
        echo "\">par type</a>

";
    }

    public function getTemplateName()
    {
        return "EspritBackOfficeBundle:STAT:LineChart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 14,  40 => 10,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "EspritFrontOfficeBundle::layout1.html.twig" %}*/
/* {%block content %}*/
/*     */
/* <!-- Load jQuery from Google's CDN if needed -->*/
/* <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>*/
/*  */
/* <script src="//code.highcharts.com/4.0.1/highcharts.js"></script>*/
/* <script src="//code.highcharts.com/4.0.1/modules/exporting.js"></script>*/
/* <script type="text/javascript">*/
/*     {{ chart(linechart) }}*/
/* </script>*/
/*  */
/* <div id="linechart" style="min-width: 400px; height: 400px; margin: 0 auto"></div>*/
/* <a href="{{path('esprit_application_statPie')}}">par type</a>*/
/* */
/* {%endblock%}*/
