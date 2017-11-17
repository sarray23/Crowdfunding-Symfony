<?php

/* EspritBackOfficeBundle:STAT:unifiedChart.html.twig */
class __TwigTemplate_af3a77714023e6c414ea16077c5c497e66a623e93576e6730cc24d55a2c41675 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::layout1.html.twig", "EspritBackOfficeBundle:STAT:unifiedChart.html.twig", 1);
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
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["overviewchart"]) ? $context["overviewchart"] : $this->getContext($context, "overviewchart")));
        echo "
</script>

<div id=\"overviewchart\" style=\"min-width: 400px; height: 400px;\"></div>
    
";
    }

    public function getTemplateName()
    {
        return "EspritBackOfficeBundle:STAT:unifiedChart.html.twig";
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
/*     {{ chart(overviewchart) }}*/
/* </script>*/
/* */
/* <div id="overviewchart" style="min-width: 400px; height: 400px;"></div>*/
/*     */
/* {%endblock%}*/
