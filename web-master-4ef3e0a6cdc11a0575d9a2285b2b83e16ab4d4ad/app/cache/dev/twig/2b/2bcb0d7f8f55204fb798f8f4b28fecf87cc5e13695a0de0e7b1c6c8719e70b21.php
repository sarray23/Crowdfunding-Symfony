<?php

/* EspritBackOfficeBundle:BasicTables:basicTables.html.twig */
class __TwigTemplate_5cea21572ba05a6fcf5da924416f03a3d3640605763fe9e1e9e30758c824705a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritBackOfficeBundle::layout.html.twig", "EspritBackOfficeBundle:BasicTables:basicTables.html.twig", 1);
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
        echo "<div class=\"col-md-12 graphs\">
\t   <div class=\"xs\">
  \t <h3>Basic Tables</h3>
  \t<div class=\"bs-example4\" data-example-id=\"contextual-table\">
    <table class=\"table\">
      <thead>
        <tr>
          <th>#</th>
          <th>Column heading</th>
          <th>Column heading</th>
          <th>Column heading</th>
        </tr>
      </thead>
      <tbody>
        <tr class=\"active\">
          <th scope=\"row\">1</th>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr>
          <th scope=\"row\">2</th>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr class=\"success\">
          <th scope=\"row\">3</th>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr>
          <th scope=\"row\">4</th>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr class=\"info\">
          <th scope=\"row\">5</th>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr>
          <th scope=\"row\">6</th>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr class=\"warning\">
          <th scope=\"row\">7</th>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr>
          <th scope=\"row\">8</th>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr class=\"danger\">
          <th scope=\"row\">9</th>
          <td>Column content</td>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
      </tbody>
    </table>
   </div>
   <div class=\"panel-body1\">
   <table class=\"table\">
     <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope=\"row\">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope=\"row\">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope=\"row\">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
    </div>
    <div class=\"panel panel-warning\" data-widget=\"{&quot;draggable&quot;: &quot;false&quot;}\" data-widget-static=\"\">
\t\t\t\t<div class=\"panel-body no-padding\">
\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr class=\"warning\">
\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t<th>First Name</th>
\t\t\t\t\t\t\t\t<th>Last Name</th>
\t\t\t\t\t\t\t\t<th>Username</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t<td>Mark</td>
\t\t\t\t\t\t\t\t<td>Otto</td>
\t\t\t\t\t\t\t\t<td>@mdo</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t<td>Jacob</td>
\t\t\t\t\t\t\t\t<td>Thornton</td>
\t\t\t\t\t\t\t\t<td>@fat</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t<td>Larry</td>
\t\t\t\t\t\t\t\t<td>the Bird</td>
\t\t\t\t\t\t\t\t<td>@twitter</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t</div>
\t<div class=\"panel panel-warning\" data-widget=\"{&quot;draggable&quot;: &quot;false&quot;}\" data-widget-static=\"\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h2>Warning Table</h2>
\t\t\t\t\t<div class=\"panel-ctrls\" data-actions-container=\"\" data-action-collapse=\"{&quot;target&quot;: &quot;.panel-body&quot;}\"><span class=\"button-icon has-bg\"><i class=\"ti ti-angle-down\"></i></span></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body no-padding\" style=\"display: block;\">
\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr class=\"warning\">
\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t<th>First Name</th>
\t\t\t\t\t\t\t\t<th>Last Name</th>
\t\t\t\t\t\t\t\t<th>Username</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t<td>Mark</td>
\t\t\t\t\t\t\t\t<td>Otto</td>
\t\t\t\t\t\t\t\t<td>@mdo</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t<td>Jacob</td>
\t\t\t\t\t\t\t\t<td>Thornton</td>
\t\t\t\t\t\t\t\t<td>@fat</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t<td>Larry</td>
\t\t\t\t\t\t\t\t<td>the Bird</td>
\t\t\t\t\t\t\t\t<td>@twitter</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t<div class=\"bs-example4\" data-example-id=\"simple-responsive-table\">
    <div class=\"table-responsive\">
      <table class=\"table\">
        <thead>
          <tr>
            <th>#</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope=\"row\">1</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
          </tr>
          <tr>
            <th scope=\"row\">2</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
          </tr>
          <tr>
            <th scope=\"row\">3</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
          </tr>
        </tbody>
      </table>
    </div><!-- /.table-responsive -->
    <div class=\"table-responsive\">
      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <th>#</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope=\"row\">1</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
          </tr>
          <tr>
            <th scope=\"row\">2</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
          </tr>
          <tr>
            <th scope=\"row\">3</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
          </tr>
        </tbody>
      </table>
    </div><!-- /.table-responsive -->
  </div>
  </div>
  <div class=\"copy_layout\">
      <p>Copyright © 2015 Modern. All Rights Reserved | Design by <a href=\"http://w3layouts.com/\" target=\"_blank\">W3layouts</a> </p>
  </div>
   </div>
";
    }

    public function getTemplateName()
    {
        return "EspritBackOfficeBundle:BasicTables:basicTables.html.twig";
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
/* {%extends "EspritBackOfficeBundle::layout.html.twig"%}*/
/* {%block container %}*/
/* <div class="col-md-12 graphs">*/
/* 	   <div class="xs">*/
/*   	 <h3>Basic Tables</h3>*/
/*   	<div class="bs-example4" data-example-id="contextual-table">*/
/*     <table class="table">*/
/*       <thead>*/
/*         <tr>*/
/*           <th>#</th>*/
/*           <th>Column heading</th>*/
/*           <th>Column heading</th>*/
/*           <th>Column heading</th>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*         <tr class="active">*/
/*           <th scope="row">1</th>*/
/*           <td>Column content</td>*/
/*           <td>Column content</td>*/
/*           <td>Column content</td>*/
/*         </tr>*/
/*         <tr>*/
/*           <th scope="row">2</th>*/
/*           <td>Column content</td>*/
/*           <td>Column content</td>*/
/*           <td>Column content</td>*/
/*         </tr>*/
/*         <tr class="success">*/
/*           <th scope="row">3</th>*/
/*           <td>Column content</td>*/
/*           <td>Column content</td>*/
/*           <td>Column content</td>*/
/*         </tr>*/
/*         <tr>*/
/*           <th scope="row">4</th>*/
/*           <td>Column content</td>*/
/*           <td>Column content</td>*/
/*           <td>Column content</td>*/
/*         </tr>*/
/*         <tr class="info">*/
/*           <th scope="row">5</th>*/
/*           <td>Column content</td>*/
/*           <td>Column content</td>*/
/*           <td>Column content</td>*/
/*         </tr>*/
/*         <tr>*/
/*           <th scope="row">6</th>*/
/*           <td>Column content</td>*/
/*           <td>Column content</td>*/
/*           <td>Column content</td>*/
/*         </tr>*/
/*         <tr class="warning">*/
/*           <th scope="row">7</th>*/
/*           <td>Column content</td>*/
/*           <td>Column content</td>*/
/*           <td>Column content</td>*/
/*         </tr>*/
/*         <tr>*/
/*           <th scope="row">8</th>*/
/*           <td>Column content</td>*/
/*           <td>Column content</td>*/
/*           <td>Column content</td>*/
/*         </tr>*/
/*         <tr class="danger">*/
/*           <th scope="row">9</th>*/
/*           <td>Column content</td>*/
/*           <td>Column content</td>*/
/*           <td>Column content</td>*/
/*         </tr>*/
/*       </tbody>*/
/*     </table>*/
/*    </div>*/
/*    <div class="panel-body1">*/
/*    <table class="table">*/
/*      <thead>*/
/*         <tr>*/
/*           <th>#</th>*/
/*           <th>First Name</th>*/
/*           <th>Last Name</th>*/
/*           <th>Username</th>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*         <tr>*/
/*           <th scope="row">1</th>*/
/*           <td>Mark</td>*/
/*           <td>Otto</td>*/
/*           <td>@mdo</td>*/
/*         </tr>*/
/*         <tr>*/
/*           <th scope="row">2</th>*/
/*           <td>Jacob</td>*/
/*           <td>Thornton</td>*/
/*           <td>@fat</td>*/
/*         </tr>*/
/*         <tr>*/
/*           <th scope="row">3</th>*/
/*           <td>Larry</td>*/
/*           <td>the Bird</td>*/
/*           <td>@twitter</td>*/
/*         </tr>*/
/*       </tbody>*/
/*     </table>*/
/*     </div>*/
/*     <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">*/
/* 				<div class="panel-body no-padding">*/
/* 					<table class="table table-striped">*/
/* 						<thead>*/
/* 							<tr class="warning">*/
/* 								<th>#</th>*/
/* 								<th>First Name</th>*/
/* 								<th>Last Name</th>*/
/* 								<th>Username</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody>*/
/* 							<tr>*/
/* 								<td>1</td>*/
/* 								<td>Mark</td>*/
/* 								<td>Otto</td>*/
/* 								<td>@mdo</td>*/
/* 							</tr>*/
/* 							<tr>*/
/* 								<td>2</td>*/
/* 								<td>Jacob</td>*/
/* 								<td>Thornton</td>*/
/* 								<td>@fat</td>*/
/* 							</tr>*/
/* 							<tr>*/
/* 								<td>3</td>*/
/* 								<td>Larry</td>*/
/* 								<td>the Bird</td>*/
/* 								<td>@twitter</td>*/
/* 							</tr>*/
/* 						</tbody>*/
/* 					</table>*/
/* 				</div>*/
/* 	</div>*/
/* 	<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">*/
/* 				<div class="panel-heading">*/
/* 					<h2>Warning Table</h2>*/
/* 					<div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>*/
/* 				</div>*/
/* 				<div class="panel-body no-padding" style="display: block;">*/
/* 					<table class="table table-striped">*/
/* 						<thead>*/
/* 							<tr class="warning">*/
/* 								<th>#</th>*/
/* 								<th>First Name</th>*/
/* 								<th>Last Name</th>*/
/* 								<th>Username</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody>*/
/* 							<tr>*/
/* 								<td>1</td>*/
/* 								<td>Mark</td>*/
/* 								<td>Otto</td>*/
/* 								<td>@mdo</td>*/
/* 							</tr>*/
/* 							<tr>*/
/* 								<td>2</td>*/
/* 								<td>Jacob</td>*/
/* 								<td>Thornton</td>*/
/* 								<td>@fat</td>*/
/* 							</tr>*/
/* 							<tr>*/
/* 								<td>3</td>*/
/* 								<td>Larry</td>*/
/* 								<td>the Bird</td>*/
/* 								<td>@twitter</td>*/
/* 							</tr>*/
/* 						</tbody>*/
/* 					</table>*/
/* 				</div>*/
/* 			</div>*/
/* 	<div class="bs-example4" data-example-id="simple-responsive-table">*/
/*     <div class="table-responsive">*/
/*       <table class="table">*/
/*         <thead>*/
/*           <tr>*/
/*             <th>#</th>*/
/*             <th>Table heading</th>*/
/*             <th>Table heading</th>*/
/*             <th>Table heading</th>*/
/*             <th>Table heading</th>*/
/*             <th>Table heading</th>*/
/*             <th>Table heading</th>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*           <tr>*/
/*             <th scope="row">1</th>*/
/*             <td>Table cell</td>*/
/*             <td>Table cell</td>*/
/*             <td>Table cell</td>*/
/*             <td>Table cell</td>*/
/*             <td>Table cell</td>*/
/*             <td>Table cell</td>*/
/*           </tr>*/
/*           <tr>*/
/*             <th scope="row">2</th>*/
/*             <td>Table cell</td>*/
/*             <td>Table cell</td>*/
/*             <td>Table cell</td>*/
/*             <td>Table cell</td>*/
/*             <td>Table cell</td>*/
/*             <td>Table cell</td>*/
/*           </tr>*/
/*           <tr>*/
/*             <th scope="row">3</th>*/
/*             <td>Table cell</td>*/
/*             <td>Table cell</td>*/
/*             <td>Table cell</td>*/
/*             <td>Table cell</td>*/
/*             <td>Table cell</td>*/
/*             <td>Table cell</td>*/
/*           </tr>*/
/*         </tbody>*/
/*       </table>*/
/*     </div><!-- /.table-responsive -->*/
/*     <div class="table-responsive">*/
/*       <table class="table table-bordered">*/
/*         <thead>*/
/*           <tr>*/
/*             <th>#</th>*/
/*             <th>Table heading</th>*/
/*             <th>Table heading</th>*/
/*             <th>Table heading</th>*/
/*             <th>Table heading</th>*/
/*             <th>Table heading</th>*/
/*             <th>Table heading</th>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*           <tr>*/
/*             <th scope="row">1</th>*/
/*             <td>Table cell</td>*/
/*             <td>Table cell</td>*/
/*             <td>Table cell</td>*/
/*             <td>Table cell</td>*/
/*             <td>Table cell</td>*/
/*             <td>Table cell</td>*/
/*           </tr>*/
/*           <tr>*/
/*             <th scope="row">2</th>*/
/*             <td>Table cell</td>*/
/*             <td>Table cell</td>*/
/*             <td>Table cell</td>*/
/*             <td>Table cell</td>*/
/*             <td>Table cell</td>*/
/*             <td>Table cell</td>*/
/*           </tr>*/
/*           <tr>*/
/*             <th scope="row">3</th>*/
/*             <td>Table cell</td>*/
/*             <td>Table cell</td>*/
/*             <td>Table cell</td>*/
/*             <td>Table cell</td>*/
/*             <td>Table cell</td>*/
/*             <td>Table cell</td>*/
/*           </tr>*/
/*         </tbody>*/
/*       </table>*/
/*     </div><!-- /.table-responsive -->*/
/*   </div>*/
/*   </div>*/
/*   <div class="copy_layout">*/
/*       <p>Copyright © 2015 Modern. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>*/
/*   </div>*/
/*    </div>*/
/* {%endblock%}*/
