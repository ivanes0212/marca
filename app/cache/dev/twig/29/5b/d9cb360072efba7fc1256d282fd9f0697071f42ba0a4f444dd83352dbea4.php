<?php

/* uniMarcaBundle:noticias:buscarTitulolike.html.twig */
class __TwigTemplate_295bd9cb360072efba7fc1256d282fd9f0697071f42ba0a4f444dd83352dbea4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("uniMarcaBundle::layout.html.twig");

        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "uniMarcaBundle::layout.html.twig";
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
 <br>Buscar titulo:
<form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("noticias_responder_titulolike");
        echo "\" method=\"POST\">
    <input type=\"text\" name=\"titulo\" value=\"Titulo a buscar like\">
    <input type=\"submit\" value=\"OK\">
</form>
      
    
";
    }

    public function getTemplateName()
    {
        return "uniMarcaBundle:noticias:buscarTitulolike.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 28,  53 => 18,  77 => 33,  65 => 9,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 17,  67 => 26,  63 => 15,  59 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 26,  49 => 14,  38 => 6,  93 => 21,  88 => 16,  78 => 7,  26 => 6,  87 => 31,  46 => 14,  21 => 2,  94 => 28,  89 => 20,  85 => 38,  75 => 6,  68 => 23,  56 => 26,  27 => 4,  44 => 12,  31 => 5,  25 => 3,  28 => 4,  24 => 1,  19 => 1,  79 => 18,  72 => 16,  69 => 5,  47 => 18,  40 => 9,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 24,  66 => 24,  55 => 22,  52 => 21,  50 => 10,  43 => 8,  41 => 9,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 42,  103 => 32,  99 => 37,  95 => 28,  92 => 42,  86 => 28,  82 => 22,  80 => 41,  73 => 19,  64 => 22,  60 => 21,  57 => 11,  54 => 20,  51 => 19,  48 => 18,  45 => 17,  42 => 10,  39 => 10,  36 => 9,  33 => 4,  30 => 5,);
    }
}
