<?php

/* EspritBackOfficeBundle:Forms:forms.html.twig */
class __TwigTemplate_e5b6a3b51d963be39462fdf4120a6ae8faf5ae173e711baaf2dd321a7c8775f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritBackOfficeBundle::layout.html.twig", "EspritBackOfficeBundle:Forms:forms.html.twig", 1);
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
        echo "<div class=\"graphs\">
\t     <div class=\"xs\">
  \t       <h3>Forms</h3>
  \t         <div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"horizontal-form\">
\t\t\t\t\t\t\t<form class=\"form-horizontal\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"focusedinput\" class=\"col-sm-2 control-label\">Focused Input</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control1\" id=\"focusedinput\" placeholder=\"Default Input\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t<p class=\"help-block\">Your help text!</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"disabledinput\" class=\"col-sm-2 control-label\">Disabled Input</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<input disabled=\"\" type=\"text\" class=\"form-control1\" id=\"disabledinput\" placeholder=\"Disabled Input\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"inputPassword\" class=\"col-sm-2 control-label\">Password</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control1\" id=\"inputPassword\" placeholder=\"Password\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"checkbox\" class=\"col-sm-2 control-label\">Checkbox</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-inline1\"><label><input type=\"checkbox\"> Unchecked</label></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-inline1\"><label><input type=\"checkbox\" checked=\"\"> Checked</label></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-inline1\"><label><input type=\"checkbox\" disabled=\"\"> Disabled Unchecked</label></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-inline1\"><label><input type=\"checkbox\" disabled=\"\" checked=\"\"> Disabled Checked</label></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"checkbox\" class=\"col-sm-2 control-label\">Checkbox Inline</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-inline\"><label><input type=\"checkbox\"> Unchecked</label></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-inline\"><label><input type=\"checkbox\" checked=\"\"> Checked</label></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-inline\"><label><input type=\"checkbox\" disabled=\"\"> Disabled Unchecked</label></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-inline\"><label><input type=\"checkbox\" disabled=\"\" checked=\"\"> Disabled Checked</label></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"selector1\" class=\"col-sm-2 control-label\">Dropdown Select</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\"><select name=\"selector1\" id=\"selector1\" class=\"form-control1\">
\t\t\t\t\t\t\t\t\t\t<option>Lorem ipsum dolor sit amet.</option>
\t\t\t\t\t\t\t\t\t\t<option>Dolore, ab unde modi est!</option>
\t\t\t\t\t\t\t\t\t\t<option>Illum, fuga minus sit eaque.</option>
\t\t\t\t\t\t\t\t\t\t<option>Consequatur ducimus maiores voluptatum minima.</option>
\t\t\t\t\t\t\t\t\t</select></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">Multiple Select</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<select multiple=\"\" class=\"form-control1\">
\t\t\t\t\t\t\t\t\t\t\t<option>Option 1</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Option 2</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Option 3</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Option 4</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Option 5</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"txtarea1\" class=\"col-sm-2 control-label\">Textarea</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\"><textarea name=\"txtarea1\" id=\"txtarea1\" cols=\"50\" rows=\"4\" class=\"form-control1\"></textarea></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"radio\" class=\"col-sm-2 control-label\">Radio</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"radio block\"><label><input type=\"radio\"> Unchecked</label></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"radio block\"><label><input type=\"radio\" checked=\"\"> Checked</label></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"radio block\"><label><input type=\"radio\" disabled=\"\"> Disabled Unchecked</label></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"radio block\"><label><input type=\"radio\" disabled=\"\" checked=\"\"> Disabled Checked</label></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"radio\" class=\"col-sm-2 control-label\">Radio Inline</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"radio-inline\"><label><input type=\"radio\"> Unchecked</label></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"radio-inline\"><label><input type=\"radio\" checked=\"\"> Checked</label></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"radio-inline\"><label><input type=\"radio\" disabled=\"\"> Disabled Unchecked</label></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"radio-inline\"><label><input type=\"radio\" disabled=\"\" checked=\"\"> Disabled Checked</label></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"smallinput\" class=\"col-sm-2 control-label label-input-sm\">Small Input</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control1 input-sm\" id=\"smallinput\" placeholder=\"Small Input\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"mediuminput\" class=\"col-sm-2 control-label\">Medium Input</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control1\" id=\"mediuminput\" placeholder=\"Medium Input\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group mb-n\">
\t\t\t\t\t\t\t\t\t<label for=\"largeinput\" class=\"col-sm-2 control-label label-input-lg\">Large Input</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control1 input-lg\" id=\"largeinput\" placeholder=\"Large Input\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"bs-example\" data-example-id=\"form-validation-states\">
    <form>
      <div class=\"form-group has-success\">
        <label class=\"control-label\" for=\"inputSuccess1\">Input with success</label>
        <input type=\"text\" class=\"form-control1\" id=\"inputSuccess1\">
      </div>
      <div class=\"form-group has-warning\">
        <label class=\"control-label\" for=\"inputWarning1\">Input with warning</label>
        <input type=\"text\" class=\"form-control1\" id=\"inputWarning1\">
      </div>
      <div class=\"form-group has-error\">
        <label class=\"control-label\" for=\"inputError1\">Input with error</label>
        <input type=\"text\" class=\"form-control1\" id=\"inputError1\">
      </div>
    </form>
  </div>
  <div class=\"panel-body\">
\t\t\t\t\t<form role=\"form\" class=\"form-horizontal\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-md-2 control-label\">Email Address</label>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control1\" placeholder=\"Email Address\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-md-2 control-label\">Password</label>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-key\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control1\" id=\"exampleInputPassword1\" placeholder=\"Password\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-md-2 control-label\">Email Address</label>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"input-group input-icon right\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input id=\"email\" class=\"form-control1\" type=\"text\" placeholder=\"Email Address\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<p class=\"help-block\">With tooltip</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-md-2 control-label\">Password</label>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"input-group input-icon right\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-key\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control1\" placeholder=\"Password\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<p class=\"help-block\">With tooltip</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group has-success\">
\t\t\t\t\t\t\t<label class=\"col-md-2 control-label\">Input Addon Success</label>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"input-group input-icon right\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t    <input id=\"email\" class=\"form-control1\" type=\"text\" placeholder=\"Email Address\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<p class=\"help-block\">Email is valid!</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group has-error\">
\t\t\t\t\t\t\t<label class=\"col-md-2 control-label\">Input Addon Error</label>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"input-group input-icon right\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-key\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control1\" placeholder=\"Password\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<p class=\"help-block\">Error!</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-md-2 control-label\">Checkbox Addon</label>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group-addon\"><input type=\"checkbox\"></div>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control1\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-md-2 control-label\">Checkbox Addon</label>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control1\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group-addon\"><input type=\"checkbox\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<p class=\"help-block\">Checkbox on right</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-md-2 control-label\">Radio Addon</label>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group-addon\"><input type=\"radio\"></div>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control1\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-md-2 control-label\">Radio Addon</label>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control1\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group-addon\"><input type=\"radio\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<p class=\"help-block\">Radio on right</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-md-2 control-label\">Input Processing</label>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"input-icon right spinner\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-spin fa-spinner\"></i>
\t\t\t\t\t\t\t\t\t<input id=\"email\" class=\"form-control1\" type=\"text\" placeholder=\"Processing...\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<p class=\"help-block\">Processing right</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-md-2 control-label\">Static Paragraph</label>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<p class=\"form-control1 m-n\">email@example.com</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group mb-n\">
\t\t\t\t\t\t\t<label class=\"col-md-2 control-label\">Readonly</label>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control1\" placeholder=\"Readonly\" readonly=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t</div>
\t<div class=\"bs-example\" data-example-id=\"form-validation-states-with-icons\">
    <form>
      <div class=\"form-group has-success has-feedback\">
        <label class=\"control-label\" for=\"inputSuccess2\">Input with success</label>
        <input type=\"text\" class=\"form-control1\" id=\"inputSuccess2\" aria-describedby=\"inputSuccess2Status\">
        <span class=\"glyphicon glyphicon-ok form-control-feedback\" aria-hidden=\"true\"></span>
        <span id=\"inputSuccess2Status\" class=\"sr-only\">(success)</span>
      </div>
      <div class=\"form-group has-warning has-feedback\">
        <label class=\"control-label\" for=\"inputWarning2\">Input with warning</label>
        <input type=\"text\" class=\"form-control1\" id=\"inputWarning2\" aria-describedby=\"inputWarning2Status\">
        <span class=\"glyphicon glyphicon-warning-sign form-control-feedback\" aria-hidden=\"true\"></span>
        <span id=\"inputWarning2Status\" class=\"sr-only\">(warning)</span>
      </div>
      <div class=\"form-group has-error has-feedback\">
        <label class=\"control-label\" for=\"inputError2\">Input with error</label>
        <input type=\"text\" class=\"form-control1\" id=\"inputError2\" aria-describedby=\"inputError2Status\">
        <span class=\"glyphicon glyphicon-remove form-control-feedback\" aria-hidden=\"true\"></span>
        <span id=\"inputError2Status\" class=\"sr-only\">(error)</span>
      </div>
      <div class=\"form-group has-success has-feedback\">
        <label class=\"control-label\" for=\"inputGroupSuccess1\">Input group with success</label>
        <div class=\"input-group\">
          <span class=\"input-group-addon\">@</span>
          <input type=\"text\" class=\"form-control1\" id=\"inputGroupSuccess1\" aria-describedby=\"inputGroupSuccess1Status\">
        </div>
        <span class=\"glyphicon glyphicon-ok form-control-feedback\" aria-hidden=\"true\"></span>
        <span id=\"inputGroupSuccess1Status\" class=\"sr-only\">(success)</span>
      </div>
      <div class=\"form-group\">
        <label for=\"exampleInputFile\">File input</label>
        <input type=\"file\" id=\"exampleInputFile\">
        <p class=\"help-block\">Example block-level help text here.</p>
      </div>
      <div class=\"panel-footer\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-8 col-sm-offset-2\">
\t\t\t\t<button class=\"btn-success btn\">Submit</button>
\t\t\t\t<button class=\"btn-default btn\">Cancel</button>
\t\t\t\t<button class=\"btn-inverse btn\">Reset</button>
\t\t\t</div>
\t\t</div>
\t </div>
    </form>
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
        return "EspritBackOfficeBundle:Forms:forms.html.twig";
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
/* <div class="graphs">*/
/* 	     <div class="xs">*/
/*   	       <h3>Forms</h3>*/
/*   	         <div class="tab-content">*/
/* 						<div class="tab-pane active" id="horizontal-form">*/
/* 							<form class="form-horizontal">*/
/* 								<div class="form-group">*/
/* 									<label for="focusedinput" class="col-sm-2 control-label">Focused Input</label>*/
/* 									<div class="col-sm-8">*/
/* 										<input type="text" class="form-control1" id="focusedinput" placeholder="Default Input">*/
/* 									</div>*/
/* 									<div class="col-sm-2">*/
/* 										<p class="help-block">Your help text!</p>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label for="disabledinput" class="col-sm-2 control-label">Disabled Input</label>*/
/* 									<div class="col-sm-8">*/
/* 										<input disabled="" type="text" class="form-control1" id="disabledinput" placeholder="Disabled Input">*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label for="inputPassword" class="col-sm-2 control-label">Password</label>*/
/* 									<div class="col-sm-8">*/
/* 										<input type="password" class="form-control1" id="inputPassword" placeholder="Password">*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label for="checkbox" class="col-sm-2 control-label">Checkbox</label>*/
/* 									<div class="col-sm-8">*/
/* 										<div class="checkbox-inline1"><label><input type="checkbox"> Unchecked</label></div>*/
/* 										<div class="checkbox-inline1"><label><input type="checkbox" checked=""> Checked</label></div>*/
/* 										<div class="checkbox-inline1"><label><input type="checkbox" disabled=""> Disabled Unchecked</label></div>*/
/* 										<div class="checkbox-inline1"><label><input type="checkbox" disabled="" checked=""> Disabled Checked</label></div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label for="checkbox" class="col-sm-2 control-label">Checkbox Inline</label>*/
/* 									<div class="col-sm-8">*/
/* 										<div class="checkbox-inline"><label><input type="checkbox"> Unchecked</label></div>*/
/* 										<div class="checkbox-inline"><label><input type="checkbox" checked=""> Checked</label></div>*/
/* 										<div class="checkbox-inline"><label><input type="checkbox" disabled=""> Disabled Unchecked</label></div>*/
/* 										<div class="checkbox-inline"><label><input type="checkbox" disabled="" checked=""> Disabled Checked</label></div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label for="selector1" class="col-sm-2 control-label">Dropdown Select</label>*/
/* 									<div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">*/
/* 										<option>Lorem ipsum dolor sit amet.</option>*/
/* 										<option>Dolore, ab unde modi est!</option>*/
/* 										<option>Illum, fuga minus sit eaque.</option>*/
/* 										<option>Consequatur ducimus maiores voluptatum minima.</option>*/
/* 									</select></div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="col-sm-2 control-label">Multiple Select</label>*/
/* 									<div class="col-sm-8">*/
/* 										<select multiple="" class="form-control1">*/
/* 											<option>Option 1</option>*/
/* 											<option>Option 2</option>*/
/* 											<option>Option 3</option>*/
/* 											<option>Option 4</option>*/
/* 											<option>Option 5</option>*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label for="txtarea1" class="col-sm-2 control-label">Textarea</label>*/
/* 									<div class="col-sm-8"><textarea name="txtarea1" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea></div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label for="radio" class="col-sm-2 control-label">Radio</label>*/
/* 									<div class="col-sm-8">*/
/* 										<div class="radio block"><label><input type="radio"> Unchecked</label></div>*/
/* 										<div class="radio block"><label><input type="radio" checked=""> Checked</label></div>*/
/* 										<div class="radio block"><label><input type="radio" disabled=""> Disabled Unchecked</label></div>*/
/* 										<div class="radio block"><label><input type="radio" disabled="" checked=""> Disabled Checked</label></div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label for="radio" class="col-sm-2 control-label">Radio Inline</label>*/
/* 									<div class="col-sm-8">*/
/* 										<div class="radio-inline"><label><input type="radio"> Unchecked</label></div>*/
/* 										<div class="radio-inline"><label><input type="radio" checked=""> Checked</label></div>*/
/* 										<div class="radio-inline"><label><input type="radio" disabled=""> Disabled Unchecked</label></div>*/
/* 										<div class="radio-inline"><label><input type="radio" disabled="" checked=""> Disabled Checked</label></div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label for="smallinput" class="col-sm-2 control-label label-input-sm">Small Input</label>*/
/* 									<div class="col-sm-8">*/
/* 										<input type="text" class="form-control1 input-sm" id="smallinput" placeholder="Small Input">*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label for="mediuminput" class="col-sm-2 control-label">Medium Input</label>*/
/* 									<div class="col-sm-8">*/
/* 										<input type="text" class="form-control1" id="mediuminput" placeholder="Medium Input">*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group mb-n">*/
/* 									<label for="largeinput" class="col-sm-2 control-label label-input-lg">Large Input</label>*/
/* 									<div class="col-sm-8">*/
/* 										<input type="text" class="form-control1 input-lg" id="largeinput" placeholder="Large Input">*/
/* 									</div>*/
/* 								</div>*/
/* 							</form>*/
/* 						</div>*/
/* 					</div>*/
/* 					*/
/* 					<div class="bs-example" data-example-id="form-validation-states">*/
/*     <form>*/
/*       <div class="form-group has-success">*/
/*         <label class="control-label" for="inputSuccess1">Input with success</label>*/
/*         <input type="text" class="form-control1" id="inputSuccess1">*/
/*       </div>*/
/*       <div class="form-group has-warning">*/
/*         <label class="control-label" for="inputWarning1">Input with warning</label>*/
/*         <input type="text" class="form-control1" id="inputWarning1">*/
/*       </div>*/
/*       <div class="form-group has-error">*/
/*         <label class="control-label" for="inputError1">Input with error</label>*/
/*         <input type="text" class="form-control1" id="inputError1">*/
/*       </div>*/
/*     </form>*/
/*   </div>*/
/*   <div class="panel-body">*/
/* 					<form role="form" class="form-horizontal">*/
/* 						<div class="form-group">*/
/* 							<label class="col-md-2 control-label">Email Address</label>*/
/* 							<div class="col-md-8">*/
/* 								<div class="input-group">							*/
/* 									<span class="input-group-addon">*/
/* 										<i class="fa fa-envelope-o"></i>*/
/* 									</span>*/
/* 									<input type="text" class="form-control1" placeholder="Email Address">*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-md-2 control-label">Password</label>*/
/* 							<div class="col-md-8">*/
/* 								<div class="input-group">*/
/* 									<span class="input-group-addon">*/
/* 										<i class="fa fa-key"></i>*/
/* 									</span>*/
/* 									<input type="password" class="form-control1" id="exampleInputPassword1" placeholder="Password">*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-md-2 control-label">Email Address</label>*/
/* 							<div class="col-md-8">*/
/* 								<div class="input-group input-icon right">*/
/* 									<span class="input-group-addon">*/
/* 										<i class="fa fa-envelope-o"></i>*/
/* 									</span>*/
/* 									<input id="email" class="form-control1" type="text" placeholder="Email Address">*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-2">*/
/* 								<p class="help-block">With tooltip</p>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-md-2 control-label">Password</label>*/
/* 							<div class="col-md-8">*/
/* 								<div class="input-group input-icon right">*/
/* 									<span class="input-group-addon">*/
/* 										<i class="fa fa-key"></i>*/
/* 									</span>*/
/* 									<input type="password" class="form-control1" placeholder="Password">*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-2">*/
/* 								<p class="help-block">With tooltip</p>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group has-success">*/
/* 							<label class="col-md-2 control-label">Input Addon Success</label>*/
/* 							<div class="col-md-8">*/
/* 								<div class="input-group input-icon right">*/
/* 									<span class="input-group-addon">*/
/* 										<i class="fa fa-envelope-o"></i>*/
/* 									</span>*/
/* 								    <input id="email" class="form-control1" type="text" placeholder="Email Address">*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-2">*/
/* 								<p class="help-block">Email is valid!</p>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group has-error">*/
/* 							<label class="col-md-2 control-label">Input Addon Error</label>*/
/* 							<div class="col-md-8">*/
/* 								<div class="input-group input-icon right">*/
/* 									<span class="input-group-addon">*/
/* 										<i class="fa fa-key"></i>*/
/* 									</span>*/
/* 									<input type="password" class="form-control1" placeholder="Password">*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-2">*/
/* 								<p class="help-block">Error!</p>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-md-2 control-label">Checkbox Addon</label>*/
/* 							<div class="col-md-8">*/
/* 								<div class="input-group">*/
/* 									<div class="input-group-addon"><input type="checkbox"></div>*/
/* 									<input type="text" class="form-control1">*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-md-2 control-label">Checkbox Addon</label>*/
/* 							<div class="col-md-8">*/
/* 								<div class="input-group">*/
/* 									<input type="text" class="form-control1">*/
/* 									<div class="input-group-addon"><input type="checkbox"></div>*/
/* 									*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-2">*/
/* 								<p class="help-block">Checkbox on right</p>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-md-2 control-label">Radio Addon</label>*/
/* 							<div class="col-md-8">*/
/* 								<div class="input-group">*/
/* 									<div class="input-group-addon"><input type="radio"></div>*/
/* 									<input type="text" class="form-control1">*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-md-2 control-label">Radio Addon</label>*/
/* 							<div class="col-md-8">*/
/* 								<div class="input-group">*/
/* 									<input type="text" class="form-control1">*/
/* 									<div class="input-group-addon"><input type="radio"></div>*/
/* 									*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-2">*/
/* 								<p class="help-block">Radio on right</p>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-md-2 control-label">Input Processing</label>*/
/* 							<div class="col-md-8">*/
/* 								<div class="input-icon right spinner">*/
/* 									<i class="fa fa-fw fa-spin fa-spinner"></i>*/
/* 									<input id="email" class="form-control1" type="text" placeholder="Processing...">*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-2">*/
/* 								<p class="help-block">Processing right</p>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-md-2 control-label">Static Paragraph</label>*/
/* 							<div class="col-md-8">*/
/* 								<p class="form-control1 m-n">email@example.com</p>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group mb-n">*/
/* 							<label class="col-md-2 control-label">Readonly</label>*/
/* 							<div class="col-md-8">*/
/* 								<input type="text" class="form-control1" placeholder="Readonly" readonly="">*/
/* 							</div>*/
/* 						</div>*/
/* 					</form>*/
/* 	</div>*/
/* 	<div class="bs-example" data-example-id="form-validation-states-with-icons">*/
/*     <form>*/
/*       <div class="form-group has-success has-feedback">*/
/*         <label class="control-label" for="inputSuccess2">Input with success</label>*/
/*         <input type="text" class="form-control1" id="inputSuccess2" aria-describedby="inputSuccess2Status">*/
/*         <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>*/
/*         <span id="inputSuccess2Status" class="sr-only">(success)</span>*/
/*       </div>*/
/*       <div class="form-group has-warning has-feedback">*/
/*         <label class="control-label" for="inputWarning2">Input with warning</label>*/
/*         <input type="text" class="form-control1" id="inputWarning2" aria-describedby="inputWarning2Status">*/
/*         <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>*/
/*         <span id="inputWarning2Status" class="sr-only">(warning)</span>*/
/*       </div>*/
/*       <div class="form-group has-error has-feedback">*/
/*         <label class="control-label" for="inputError2">Input with error</label>*/
/*         <input type="text" class="form-control1" id="inputError2" aria-describedby="inputError2Status">*/
/*         <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>*/
/*         <span id="inputError2Status" class="sr-only">(error)</span>*/
/*       </div>*/
/*       <div class="form-group has-success has-feedback">*/
/*         <label class="control-label" for="inputGroupSuccess1">Input group with success</label>*/
/*         <div class="input-group">*/
/*           <span class="input-group-addon">@</span>*/
/*           <input type="text" class="form-control1" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">*/
/*         </div>*/
/*         <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>*/
/*         <span id="inputGroupSuccess1Status" class="sr-only">(success)</span>*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <label for="exampleInputFile">File input</label>*/
/*         <input type="file" id="exampleInputFile">*/
/*         <p class="help-block">Example block-level help text here.</p>*/
/*       </div>*/
/*       <div class="panel-footer">*/
/* 		<div class="row">*/
/* 			<div class="col-sm-8 col-sm-offset-2">*/
/* 				<button class="btn-success btn">Submit</button>*/
/* 				<button class="btn-default btn">Cancel</button>*/
/* 				<button class="btn-inverse btn">Reset</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	 </div>*/
/*     </form>*/
/*   </div>*/
/*   </div>*/
/*   <div class="copy_layout">*/
/*       <p>Copyright © 2015 Modern. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>*/
/*   </div>*/
/*   </div>*/
/* {%endblock%}*/
