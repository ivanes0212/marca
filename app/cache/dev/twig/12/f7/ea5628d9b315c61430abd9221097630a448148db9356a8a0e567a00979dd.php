<?php

/* uniMarcaBundle:noticias:show.html.twig */
class __TwigTemplate_12f7ea5628d9b315c61430abd9221097630a448148db9356a8a0e567a00979dd extends Twig_Template
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

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 6
        echo "<table class=\"record_properties\">
        <tbody>
          
            <tr>
               
                <td><center><h1>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titulo"), "html", null, true);
        echo "</h1></center></td>
            </tr>
              
                
                
        <h6> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "autor"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaPub"), "Y-m-d"), "html", null, true);
        echo "</h6>
            
            
                
               
                
            <tr>
                
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contenido"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                
                <td><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/unimarca/imagenes/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "foto")) . "")), "html", null, true);
        echo "\" width=50% height=50%/></td>
            </tr>
          
        </tbody>
    </table>

     
            
            ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "notcoms"));
        foreach ($context['_seq'] as $context["_key"] => $context["comen"]) {
            // line 37
            echo "            
                <h5>COMENTARIOS:</h5> 
                
        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comentarios_show", array("id" => $this->getAttribute((isset($context["comen"]) ? $context["comen"] : $this->getContext($context, "comen")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comen"]) ? $context["comen"] : $this->getContext($context, "comen")), "nombreCom"), "html", null, true);
            echo "</a>
        <br>
        
         <a>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comen"]) ? $context["comen"] : $this->getContext($context, "comen")), "descCom"), "html", null, true);
            echo "</a>
         <br>
         <br>                    
                
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "  
            
            
            
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("noticias");
        echo "\">
            Volver
        </a>
        <li>
            <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticias_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">Editar</a>
        </li>
    </li>
  
";
    }

    public function getTemplateName()
    {
        return "uniMarcaBundle:noticias:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 54,  81 => 37,  53 => 18,  77 => 36,  65 => 9,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 17,  67 => 26,  63 => 15,  59 => 24,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 48,  91 => 27,  62 => 26,  49 => 14,  38 => 11,  93 => 21,  88 => 16,  78 => 7,  26 => 6,  87 => 31,  46 => 16,  21 => 2,  94 => 43,  89 => 32,  85 => 38,  75 => 6,  68 => 19,  56 => 26,  27 => 4,  44 => 12,  31 => 6,  25 => 3,  28 => 3,  24 => 1,  19 => 1,  79 => 18,  72 => 16,  69 => 5,  47 => 11,  40 => 9,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 58,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 24,  66 => 28,  55 => 22,  52 => 21,  50 => 10,  43 => 9,  41 => 9,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 42,  103 => 32,  99 => 37,  95 => 28,  92 => 42,  86 => 40,  82 => 27,  80 => 41,  73 => 19,  64 => 22,  60 => 21,  57 => 11,  54 => 13,  51 => 19,  48 => 18,  45 => 17,  42 => 10,  39 => 8,  36 => 9,  33 => 4,  30 => 5,);
    }
}
