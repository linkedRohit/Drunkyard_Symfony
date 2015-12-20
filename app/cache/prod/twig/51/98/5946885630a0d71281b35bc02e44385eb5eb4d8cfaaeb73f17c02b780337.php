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
    <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-resource.min.js\">
    </script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.min.js\">
   </script>
    <script src=\"https://cdn.firebase.com/js/client/2.0.4/firebase.js\"></script>
    <script src=\"https://cdn.firebase.com/libs/angularfire/0.9.0/angularfire.min.js\"></script>
    <link rel=\"stylesheet\" href=\"bootstrap.css\">
    <script src=\"project.js\"></script>
  </head>
  <body>
    <h2>JavaScript Projects</h2>
    <div ng-view></div>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "SocialDrunkenBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
