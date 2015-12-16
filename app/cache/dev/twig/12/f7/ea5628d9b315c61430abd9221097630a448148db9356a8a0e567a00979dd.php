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
               
                <td><h1><text align=\"center>\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titulo"), "html", null, true);
        echo "<text></h1></td>
            </tr>
              
                
                
        <h6> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "autor"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaPub"), "Y-m-d"), "html", null, true);
        echo "</h6>
            
            
                
               
                
            <tr>
                
                <td><text align=\"center>\"><font size=\"4\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contenido"), "html", null, true);
        echo "</font></text></td>
            </tr>
            <tr>
                
                <td><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/unimarca/imagenes/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "foto")) . "")), "html", null, true);
        echo "\" width=50% height=50%/></td>
            </tr>
          
        </tbody>
    </table>

     
            <h5>COMENTARIOS:</h5> 
            ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "notcoms"));
        foreach ($context['_seq'] as $context["_key"] => $context["comen"]) {
            // line 37
            echo "            
                
                
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
             
              
             ";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "notanun"));
        foreach ($context['_seq'] as $context["_key"] => $context["anuncio"]) {
            // line 52
            echo "            
                
                 <font size=\"2\"><div align=\"right\"><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("anuncios_show", array("id" => $this->getAttribute((isset($context["anuncio"]) ? $context["anuncio"] : $this->getContext($context, "anuncio")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["anuncio"]) ? $context["anuncio"] : $this->getContext($context, "anuncio")), "nombre"), "html", null, true);
            echo "</a>
        <br>
        
        <a>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["anuncio"]) ? $context["anuncio"] : $this->getContext($context, "anuncio")), "texto"), "html", null, true);
            echo "</a> </div></font>
         <br>
         <br>                    
                
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['anuncio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "           
             
            
            
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("noticias");
        echo "\">
            Volver
        </a>
        <li>
            <a href=\"";
        // line 72
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
        return array (  152 => 72,  145 => 68,  137 => 62,  126 => 57,  118 => 54,  114 => 52,  110 => 51,  105 => 48,  94 => 43,  86 => 40,  81 => 37,  77 => 36,  66 => 28,  59 => 24,  46 => 16,  38 => 11,  31 => 6,  28 => 3,);
    }
}
