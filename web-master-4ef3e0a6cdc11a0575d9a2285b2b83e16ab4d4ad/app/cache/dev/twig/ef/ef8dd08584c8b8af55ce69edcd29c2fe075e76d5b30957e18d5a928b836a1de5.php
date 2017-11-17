<?php

/* EspritBackOfficeBundle:STAT:BarChart.html.twig */
class __TwigTemplate_e49aa969885514d3b10934ec511dafd9a5c0f6d15096a585403b9729810c9bd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::layout1.html.twig", "EspritBackOfficeBundle:STAT:BarChart.html.twig", 1);
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
        echo "<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>

<script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
<script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>

<script type=\"text/javascript\">
    ";
        // line 9
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["barchart"]) ? $context["barchart"] : $this->getContext($context, "barchart")));
        echo "
</script>

<div id=\"overviewchart\" style=\"min-width: 400px; height: 400px;\"></div>
    
";
    }

    public function getTemplateName()
    {
        return "EspritBackOfficeBundle:STAT:BarChart.html.twig";
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
/* {% extends "EspritFrontOfficeBundle::layout1.html.twig" %}*/
/* {%block content %}*/
/* <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>*/
/* */
/* <script src="//code.highcharts.com/4.1.8/highcharts.js"></script>*/
/* <script src="//code.highcharts.com/4.1.8/modules/exporting.js"></script>*/
/* */
/* <script type="text/javascript">*/
/*     {{ chart(barchart) }}*/
/* </script>*/
/* */
/* <div id="overviewchart" style="min-width: 400px; height: 400px;"></div>*/
/*     */
/* {%endblock%}*/
