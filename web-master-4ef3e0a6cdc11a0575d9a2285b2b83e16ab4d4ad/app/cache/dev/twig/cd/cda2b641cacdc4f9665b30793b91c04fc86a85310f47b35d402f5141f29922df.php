<?php

/* EspritFrontOfficeBundle:STAT:unifiedChart.html.twig */
class __TwigTemplate_95735842737eafb5129f5efa12067779189c1d0fc51e5b56df446a5e355e3cf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritBackOfficeBundle::layout.html.twig", "EspritFrontOfficeBundle:STAT:unifiedChart.html.twig", 1);
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
        echo "<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>

<script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
<script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>

<script type=\"text/javascript\">
    ";
        // line 9
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["overviewchart"]) ? $context["overviewchart"] : $this->getContext($context, "overviewchart")));
        echo "
</script>

<div id=\"overviewchart\" style=\"min-width: 400px; height: 400px;\"></div>
    
";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:STAT:unifiedChart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "EspritBackOfficeBundle::layout.html.twig"%}*/
/* {%block container %}*/
/* <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>*/
/* */
/* <script src="//code.highcharts.com/4.1.8/highcharts.js"></script>*/
/* <script src="//code.highcharts.com/4.1.8/modules/exporting.js"></script>*/
/* */
/* <script type="text/javascript">*/
/*     {{ chart(overviewchart) }}*/
/* </script>*/
/* */
/* <div id="overviewchart" style="min-width: 400px; height: 400px;"></div>*/
/*     */
/* {%endblock%}*/
