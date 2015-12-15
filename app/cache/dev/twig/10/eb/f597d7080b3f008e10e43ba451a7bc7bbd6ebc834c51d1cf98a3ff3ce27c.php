<?php

/* uniMarcaBundle::layout.html.twig */
class __TwigTemplate_10ebf597d7080b3f008e10e43ba451a7bc7bbd6ebc834c51d1cf98a3ff3ce27c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
            'menuSuperior' => array($this, 'block_menuSuperior'),
            'menuLateral' => array($this, 'block_menuLateral'),
            'central' => array($this, 'block_central'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "    
    
    
 <div id=\"menuSuperior\">
            ";
        // line 9
        $this->displayBlock('menuSuperior', $context, $blocks);
        // line 13
        echo "        </div>
        
  <div id=\"menuLateral\">
            ";
        // line 16
        $this->displayBlock('menuLateral', $context, $blocks);
        // line 19
        echo "        </div>
        
     <div id=\"central\">
            ";
        // line 22
        $this->displayBlock('central', $context, $blocks);
        // line 26
        echo "        </div>
    

    

";
    }

    // line 9
    public function block_menuSuperior($context, array $blocks = array())
    {
        // line 10
        echo "                
          
            ";
    }

    // line 16
    public function block_menuLateral($context, array $blocks = array())
    {
        // line 17
        echo "                
            ";
    }

    // line 22
    public function block_central($context, array $blocks = array())
    {
        // line 23
        echo "                
             
            ";
    }

    public function getTemplateName()
    {
        return "uniMarcaBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 23,  82 => 22,  77 => 17,  74 => 16,  68 => 10,  65 => 9,  54 => 22,  47 => 16,  40 => 9,  98 => 41,  91 => 37,  84 => 32,  70 => 24,  61 => 20,  56 => 26,  49 => 19,  42 => 13,  38 => 10,  34 => 5,  31 => 4,  28 => 4,);
    }
}
