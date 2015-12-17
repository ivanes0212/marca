<?php

/* uniMarcaBundle:categorias:buscarCategoria.html.twig */
class __TwigTemplate_c283389fb13b1570d5b5a5de67c7ab3ab26d5d2a0d4a05a9d7c76c9b9b025382 extends Twig_Template
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
        // line 4
        echo "  ";
        // line 5
        echo "
<script type=\"text/javascript\">
function submitform(obj) {
document.forms[\"selectCats\"].submit();
}
</script>

";
        // line 13
        echo "<br>Buscar categoria:
<form id=\"selectCats\" action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("categorias_responder_categoria");
        echo "\" method=\"POST\">
    
   <select name=\"nombre\" onChange=\"submitform(this)\">
       <option value=\"Todas\">Todas</option> 
       
       ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cats"]) ? $context["cats"] : $this->getContext($context, "cats")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 20
            echo "            <option value=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "nombreCat"), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "nombreCat"), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </select>  
    
    
   
    
</form>
      
    
";
    }

    public function getTemplateName()
    {
        return "uniMarcaBundle:categorias:buscarCategoria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  57 => 20,  53 => 19,  45 => 14,  42 => 13,  33 => 5,  31 => 4,  28 => 3,);
    }
}
