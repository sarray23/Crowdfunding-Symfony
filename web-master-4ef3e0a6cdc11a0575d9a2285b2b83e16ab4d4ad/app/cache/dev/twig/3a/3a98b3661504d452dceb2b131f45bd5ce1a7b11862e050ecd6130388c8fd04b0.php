<?php

/* EspritFrontOfficeBundle:Competence:profilExpert.html.twig */
class __TwigTemplate_0e8803cc4d344dfcedf9ab7fa93018ec3c743959c0e277eec815168321d862bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontOfficeBundle::layout1.html.twig", "EspritFrontOfficeBundle:Competence:profilExpert.html.twig", 1);
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
        echo "    <form action=\"\" method=\"POST\">
        <center>
            <table align=\"center\" class=\"features-table\"> 

                <!--   <tr> 
                       <td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form1"]) ? $context["Form1"] : $this->getContext($context, "Form1")), "noteGenerale", array()), 'label');
        echo "</td> 
                       <td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form1"]) ? $context["Form1"] : $this->getContext($context, "Form1")), "noteGenerale", array()), 'widget');
        echo "</td> 
                   </tr> -->

                <tr>
                    <td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form1"]) ? $context["Form1"] : $this->getContext($context, "Form1")), "competences", array()), 'label');
        echo "</td> 
                    <td>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form1"]) ? $context["Form1"] : $this->getContext($context, "Form1")), "competences", array()), 'widget');
        echo "</td> 
                </tr>

            </table>
            <script type=\"text/javascript\">var switchTo5x = true;</script>
            <script type=\"text/javascript\" src=\"http://w.sharethis.com/button/buttons.js\"></script>
            <script type=\"text/javascript\">stLight.options({publisher: \"eafcb90b-6a0e-40c7-80c3-8ce0a4122176\", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
            <br>
           
           ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form1"]) ? $context["Form1"] : $this->getContext($context, "Form1")), "valider", array()), 'widget', array("attr" => array("class" => "btn btn-red btn-submit-all")));
        echo "
                                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form1"]) ? $context["Form1"] : $this->getContext($context, "Form1")), "_token", array()), 'row');
        echo "

        </center>
    </form>
    <center>
        <span class='st_sharethis_large' displayText='ShareThis'></span>
        <span class='st_facebook_large' displayText='Facebook'></span>
        <span class='st_twitter_large' displayText='Tweet'></span>
        <span class='st_linkedin_large' displayText='LinkedIn'></span>
        <span class='st_pinterest_large' displayText='Pinterest'></span>
        <span class='st_email_large' displayText='Email'></span>
    </center>
";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Competence:profilExpert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  65 => 23,  53 => 14,  49 => 13,  42 => 9,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "EspritFrontOfficeBundle::layout1.html.twig"%}*/
/* {%block content %}*/
/*     <form action="" method="POST">*/
/*         <center>*/
/*             <table align="center" class="features-table"> */
/* */
/*                 <!--   <tr> */
/*                        <td>{{ form_label(Form1.noteGenerale) }}</td> */
/*                        <td>{{ form_widget(Form1.noteGenerale) }}</td> */
/*                    </tr> -->*/
/* */
/*                 <tr>*/
/*                     <td>{{ form_label(Form1.competences) }}</td> */
/*                     <td>{{ form_widget(Form1.competences) }}</td> */
/*                 </tr>*/
/* */
/*             </table>*/
/*             <script type="text/javascript">var switchTo5x = true;</script>*/
/*             <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>*/
/*             <script type="text/javascript">stLight.options({publisher: "eafcb90b-6a0e-40c7-80c3-8ce0a4122176", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>*/
/*             <br>*/
/*            */
/*            {{form_widget (Form1.valider,{'attr':{'class' : 'btn btn-red btn-submit-all'}  }) }}*/
/*                                     {{ form_row(Form1._token) }}*/
/* */
/*         </center>*/
/*     </form>*/
/*     <center>*/
/*         <span class='st_sharethis_large' displayText='ShareThis'></span>*/
/*         <span class='st_facebook_large' displayText='Facebook'></span>*/
/*         <span class='st_twitter_large' displayText='Tweet'></span>*/
/*         <span class='st_linkedin_large' displayText='LinkedIn'></span>*/
/*         <span class='st_pinterest_large' displayText='Pinterest'></span>*/
/*         <span class='st_email_large' displayText='Email'></span>*/
/*     </center>*/
/* {%endblock%}*/
