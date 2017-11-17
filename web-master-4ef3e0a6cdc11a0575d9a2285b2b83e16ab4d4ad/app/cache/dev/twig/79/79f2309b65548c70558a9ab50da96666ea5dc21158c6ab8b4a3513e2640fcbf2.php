<?php

/* EspritFrontOfficeBundle:STAT:histogramme.html.twig */
class __TwigTemplate_464a141064d218503ac849af5968defec7ae1bfb9ef998a1be24aa467b5d5c18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritBackOfficeBundle::layout.html.twig", "EspritFrontOfficeBundle:STAT:histogramme.html.twig", 1);
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
        echo "<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" 
type=\"text/javascript\"></script>
<script src=\"//code.highcharts.com/4.0.1/highcharts.js\"></script>
<script src=\"//code.highcharts.com/4.0.1/modules/exporting.js\"></script>
<script type=\"text/javascript\">
";
        // line 8
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["histochart"]) ? $context["histochart"] : $this->getContext($context, "histochart")));
        echo "
</script>
<div id=\"container\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>";
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:STAT:histogramme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 12,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "EspritBackOfficeBundle::layout.html.twig"%}*/
/* {%block container %}*/
/* <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" */
/* type="text/javascript"></script>*/
/* <script src="//code.highcharts.com/4.0.1/highcharts.js"></script>*/
/* <script src="//code.highcharts.com/4.0.1/modules/exporting.js"></script>*/
/* <script type="text/javascript">*/
/* {{ chart(histochart) }}*/
/* </script>*/
/* <div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>{# empty */
/* Twig template #}*/
/* */
/* {%endblock%}*/
