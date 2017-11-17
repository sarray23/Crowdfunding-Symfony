<?php

/* EspritFrontOfficeBundle:Idee:recherche.html.twig */
class __TwigTemplate_62ef5ccb8dffbc54ebd408415b2427c27e29e64ba68f1c17a7fdc0d7e1f74fb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritApplicationBundle::layout.html.twig", "EspritFrontOfficeBundle:Idee:recherche.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritApplicationBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "<center><h1><a href=\"";
        echo $this->env->getExtension('routing')->getPath("esprit_application_idee_general");
        echo "\">Accueil des idées</a></h1></center>
        <center>

<h1>Recherche Idée de projet par son titre</h1>
<form method=\"POST\">
    <table id=\"tableau1\" border=\"1\">
        <thead>
    <tr>
        <th scope=\"col\">­</th>
        <th scope=\"col\">­</th>
        <th scope=\"col\">­</th>
</tr>
    </thead>
    
    <tfoot>
    <tr>
      <td colspan=\"5\">CrowdRise</td>
    </tr>
    </tfoot>
  <tbody>   
      
      <tr>
      <td>Titre du projet :  </td>
      <td><input type=\"text\" name=\"titre\"></td>
      <td><input type=\"submit\" value=\"rechercher\"><td>
      </tr>
     </tbody>
</table>
</form>
        </center>

";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Idee:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "EspritApplicationBundle::layout.html.twig"%}*/
/* {%block container %}*/
/* <center><h1><a href="{{path('esprit_application_idee_general')}}">Accueil des idées</a></h1></center>*/
/*         <center>*/
/* */
/* <h1>Recherche Idée de projet par son titre</h1>*/
/* <form method="POST">*/
/*     <table id="tableau1" border="1">*/
/*         <thead>*/
/*     <tr>*/
/*         <th scope="col">­</th>*/
/*         <th scope="col">­</th>*/
/*         <th scope="col">­</th>*/
/* </tr>*/
/*     </thead>*/
/*     */
/*     <tfoot>*/
/*     <tr>*/
/*       <td colspan="5">CrowdRise</td>*/
/*     </tr>*/
/*     </tfoot>*/
/*   <tbody>   */
/*       */
/*       <tr>*/
/*       <td>Titre du projet :  </td>*/
/*       <td><input type="text" name="titre"></td>*/
/*       <td><input type="submit" value="rechercher"><td>*/
/*       </tr>*/
/*      </tbody>*/
/* </table>*/
/* </form>*/
/*         </center>*/
/* */
/* {%endblock%}*/
