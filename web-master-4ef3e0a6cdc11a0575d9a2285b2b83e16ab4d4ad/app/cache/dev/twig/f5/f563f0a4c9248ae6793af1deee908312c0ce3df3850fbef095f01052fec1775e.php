<?php

/* EspritFrontOfficeBundle:Idee:ajout.html.twig */
class __TwigTemplate_1aea074bc01b6b72e5ef75c34238996afc2d583074994ae3a65bccfe4bd804a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritApplicationBundle::layout.html.twig", "EspritFrontOfficeBundle:Idee:ajout.html.twig", 1);
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
        echo "    <center><h1><a href=\"";
        echo $this->env->getExtension('routing')->getPath("esprit_application_idee_general");
        echo "\">Accueil des idées</a></h1></center>
        <center>

<form method=\"POST\">
    <br>
    <table id=\"tableau1\" border=\"1\">
        <thead>
    <tr>
        <th scope=\"col\">Ajouter une idée</th>
        <th scope=\"col\"></th>
        
    </tr>
    </thead>
    
    <tfoot>
    <tr>
      <td colspan=\"5\">CrowdRise</td>
    </tr>
    </tfoot>
  <tbody>   
      
      <tr><td>Titre </td><td><input type=\"text\" name=\"titre\"/></td>
  <tr><td> Description</td><td> <input type=\"text\" name=\"description\"/>  </td>  
  <tr><td>Type </td><td><input type=\"text\" name=\"type\"/></td>
  <tr>
      <td></td><td><input type=\"submit\" value=\"Ajouter\" id=\"inp\"/></td></tr>
     </tbody>
</table>
</form>
        </center>

";
    }

    public function getTemplateName()
    {
        return "EspritFrontOfficeBundle:Idee:ajout.html.twig";
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
/*     <center><h1><a href="{{path('esprit_application_idee_general')}}">Accueil des idées</a></h1></center>*/
/*         <center>*/
/* */
/* <form method="POST">*/
/*     <br>*/
/*     <table id="tableau1" border="1">*/
/*         <thead>*/
/*     <tr>*/
/*         <th scope="col">Ajouter une idée</th>*/
/*         <th scope="col"></th>*/
/*         */
/*     </tr>*/
/*     </thead>*/
/*     */
/*     <tfoot>*/
/*     <tr>*/
/*       <td colspan="5">CrowdRise</td>*/
/*     </tr>*/
/*     </tfoot>*/
/*   <tbody>   */
/*       */
/*       <tr><td>Titre </td><td><input type="text" name="titre"/></td>*/
/*   <tr><td> Description</td><td> <input type="text" name="description"/>  </td>  */
/*   <tr><td>Type </td><td><input type="text" name="type"/></td>*/
/*   <tr>*/
/*       <td></td><td><input type="submit" value="Ajouter" id="inp"/></td></tr>*/
/*      </tbody>*/
/* </table>*/
/* </form>*/
/*         </center>*/
/* */
/* {%endblock%}*/
