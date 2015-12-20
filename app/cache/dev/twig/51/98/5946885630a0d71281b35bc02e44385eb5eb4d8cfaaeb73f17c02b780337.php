<?php

/* SocialDrunkenBundle:Default:index.html.twig */
class __TwigTemplate_51985946885630a0d71281b35bc02e44385eb5eb4d8cfaaeb73f17c02b780337 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html ng-app=\"project\">
  <head>
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Static/js/angular.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Static/js/angular-resource.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Static/js/angular-route.min.js"), "html", null, true);
        echo "\"></script>
  </head>
  <body>
    <h2>Drunken Diaries</h2>
    <div ng-view></div>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "SocialDrunkenBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
