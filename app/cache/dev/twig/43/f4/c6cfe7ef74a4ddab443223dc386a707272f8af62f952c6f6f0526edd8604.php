<?php

/* uniMarcaBundle:categorias:responderCategoria.html.twig */
class __TwigTemplate_43f4c6cfe7ef74a4ddab443223dc386a707272f8af62f952c6f6f0526edd8604 extends Twig_Template
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
        echo "    
    <h1>Listado de categorias ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["nomCat"]) ? $context["nomCat"] : $this->getContext($context, "nomCat")), "html", null, true);
        echo ":</h1>
 <tbody>
        ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 8
            echo "            
            
        <h2><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorias_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreCat"), "html", null, true);
            echo "</a></h2>
              
        <h6>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descCat"), "html", null, true);
            echo " 
                
       
                <br>
                
                
                
                
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </tbody>
  

        <ul>
        <li>
            <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("noticias_new");
        echo "\">
                Create a new entry
            </a>
        </li> 
        
    </ul>
      
    
";
    }

    public function getTemplateName()
    {
        return "uniMarcaBundle:categorias:responderCategoria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 26,  69 => 21,  54 => 12,  47 => 10,  43 => 8,  39 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
