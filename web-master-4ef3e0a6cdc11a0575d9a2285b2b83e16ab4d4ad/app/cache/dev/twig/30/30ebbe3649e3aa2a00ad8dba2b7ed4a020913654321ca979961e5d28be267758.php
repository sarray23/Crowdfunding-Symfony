<?php

/* EspritBackOfficeBundle:Graphs:graph_idee.html.twig */
class __TwigTemplate_761d6a3d863f455bdddc45823435b1b38b241576647c69997b8b6c710c42ab6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritBackOfficeBundle::layout.html.twig", "EspritBackOfficeBundle:Graphs:graph_idee.html.twig", 1);
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
<!-- Load MooTools from Google's CDN if needed and the highcharts adapter -->
<script src=\"https://ajax.googleapis.com/ajax/libs/mootools/1.4.2/mootools-yui-compressed.js\" type=\"text/javascript\"></script>
<script src=\"//code.highcharts.com/3.0.10/adapters/mootools-adapter.js\" type=\"text/javascript\"></script>

<script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
<script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
<script type=\"text/javascript\">
    ";
        // line 13
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")), "mootools");
        echo "
</script>
<center>
    <div id=\"piechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
 </center>

    
     ";
    }

    public function getTemplateName()
    {
        return "EspritBackOfficeBundle:Graphs:graph_idee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 13,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "EspritBackOfficeBundle::layout.html.twig"%}*/
/* {%block container %}*/
/*     */
/*     */
/*     <!-- Load jQuery from Google's CDN if needed -->*/
/* <!-- Load MooTools from Google's CDN if needed and the highcharts adapter -->*/
/* <script src="https://ajax.googleapis.com/ajax/libs/mootools/1.4.2/mootools-yui-compressed.js" type="text/javascript"></script>*/
/* <script src="//code.highcharts.com/3.0.10/adapters/mootools-adapter.js" type="text/javascript"></script>*/
/* */
/* <script src="//code.highcharts.com/4.1.8/highcharts.js"></script>*/
/* <script src="//code.highcharts.com/4.1.8/modules/exporting.js"></script>*/
/* <script type="text/javascript">*/
/*     {{ chart(chart, 'mootools') }}*/
/* </script>*/
/* <center>*/
/*     <div id="piechart" style="min-width: 400px; height: 400px; margin: 0 auto"></div>*/
/*  </center>*/
/* */
/*     */
/*      {%endblock  %}*/
