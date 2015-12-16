<?php

/* ProductosBundle:Productos:index.html.twig */
class __TwigTemplate_dade777ba0df45b48bd349c0f7a299178a569517073f496f90687429d818e5e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProductosBundle:Productos:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b32f62f27895b11153f3263566ae20bd3ad33b226bfb64ef3191fd589e53bb88 = $this->env->getExtension("native_profiler");
        $__internal_b32f62f27895b11153f3263566ae20bd3ad33b226bfb64ef3191fd589e53bb88->enter($__internal_b32f62f27895b11153f3263566ae20bd3ad33b226bfb64ef3191fd589e53bb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductosBundle:Productos:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b32f62f27895b11153f3263566ae20bd3ad33b226bfb64ef3191fd589e53bb88->leave($__internal_b32f62f27895b11153f3263566ae20bd3ad33b226bfb64ef3191fd589e53bb88_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_44fa0e273a7d784230713d0d3978b61686c314955f2e75203860fd9f7c5822fc = $this->env->getExtension("native_profiler");
        $__internal_44fa0e273a7d784230713d0d3978b61686c314955f2e75203860fd9f7c5822fc->enter($__internal_44fa0e273a7d784230713d0d3978b61686c314955f2e75203860fd9f7c5822fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\"><h1>Productos</h1></div>
        </div>
        
        <div class=\"table-responsive\">

        <table class=\"table table-hover\">
            <thead>
            <tr>                
                <td>Nombre</td>
                <td>Imagen</td>
                <td>Puntos</td>
            </tr>
            </thead>
            
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lista_productos"]) ? $context["lista_productos"] : $this->getContext($context, "lista_productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 23
            echo "                
                <tr>
                    
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "nombre", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "imagen", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "puntos", array()), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("productos_show", array("id_producto" => 1));
            echo "\"><span class=\"glyphicon-class\">Ver</span></a></td>
                </tr>                
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </table>
    
        </div>
    </div>

";
        
        $__internal_44fa0e273a7d784230713d0d3978b61686c314955f2e75203860fd9f7c5822fc->leave($__internal_44fa0e273a7d784230713d0d3978b61686c314955f2e75203860fd9f7c5822fc_prof);

    }

    public function getTemplateName()
    {
        return "ProductosBundle:Productos:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 32,  80 => 29,  76 => 28,  72 => 27,  68 => 26,  63 => 23,  59 => 22,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* */
/* {% block body %}*/
/*     */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-xs-12"><h1>Productos</h1></div>*/
/*         </div>*/
/*         */
/*         <div class="table-responsive">*/
/* */
/*         <table class="table table-hover">*/
/*             <thead>*/
/*             <tr>                */
/*                 <td>Nombre</td>*/
/*                 <td>Imagen</td>*/
/*                 <td>Puntos</td>*/
/*             </tr>*/
/*             </thead>*/
/*             */
/*             {% for producto in lista_productos %}*/
/*                 */
/*                 <tr>*/
/*                     */
/*                     <td>{{ producto.nombre }}</td>*/
/*                     <td>{{ producto.imagen }}</td>*/
/*                     <td>{{ producto.puntos }}</td>*/
/*                     <td><a href="{{ path('productos_show', {id_producto: 1 }) }}"><span class="glyphicon-class">Ver</span></a></td>*/
/*                 </tr>                */
/*             {% endfor %}*/
/*         </table>*/
/*     */
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
