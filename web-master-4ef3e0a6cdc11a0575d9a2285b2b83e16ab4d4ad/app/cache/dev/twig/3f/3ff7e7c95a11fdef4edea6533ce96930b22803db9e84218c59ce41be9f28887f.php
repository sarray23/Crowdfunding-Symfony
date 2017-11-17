<?php

/* EspritFrontOfficeBundle:STAT:LineChart.html.twig */
class __TwigTemplate_538d6210021e2601f7708ea080546a199b3ec3f0f80c7775f74b20bf4d50f72d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritBackOfficeBundle::layout.html.twig", "EspritFrontOfficeBundle:STAT:LineChart.html.twig", 1);
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
<center><h1><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("esprit_application_statPie");
        echo "\">Statistiques par type<h1></a>

";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:STAT:LineChart.html.twig";
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
/* {%extends "EspritBackOfficeBundle::layout.html.twig"%}*/
/* {%block container %}*/
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
/* <center><h1><a href="{{path('esprit_application_statPie')}}">Statistiques par type<h1></a>*/
/* */
/* {%endblock%}*/
