<?php

/* ::base.html.twig */
class __TwigTemplate_a5c535d8042b61a83830a678d4ed85434bbead98a1dc546b5333abc179797333 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cabecera' => array($this, 'block_cabecera'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'pie' => array($this, 'block_pie'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
       
        
        <div id=\"cabecera\">
            ";
        // line 15
        $this->displayBlock('cabecera', $context, $blocks);
        // line 18
        echo "        </div>
       
         <div id=\"cuerpo\">
            ";
        // line 21
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 22
        echo "        </div>
        
         <div id=\"pie\">
            ";
        // line 25
        $this->displayBlock('pie', $context, $blocks);
        // line 26
        echo "        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/unimarca/css/noticias.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 15
    public function block_cabecera($context, array $blocks = array())
    {
        // line 16
        echo "                <h1>MARCA</h1>
            ";
    }

    // line 21
    public function block_cuerpo($context, array $blocks = array())
    {
        echo "NOTICIAS";
    }

    // line 25
    public function block_pie($context, array $blocks = array())
    {
        echo "By IVAN";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  93 => 21,  88 => 16,  78 => 7,  75 => 6,  69 => 5,  62 => 26,  60 => 25,  55 => 22,  53 => 21,  48 => 18,  46 => 15,  36 => 9,  30 => 5,  24 => 1,  85 => 15,  82 => 22,  77 => 17,  74 => 16,  68 => 10,  65 => 9,  54 => 22,  47 => 16,  40 => 9,  98 => 41,  91 => 37,  84 => 32,  70 => 24,  61 => 20,  56 => 26,  49 => 19,  42 => 13,  38 => 10,  34 => 6,  31 => 4,  28 => 4,);
    }
}
