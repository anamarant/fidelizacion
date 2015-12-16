<?php

/* ProductosBundle:Productos:show.html.twig */
class __TwigTemplate_3bb1b580fc7e98f3c3965a389b24b2f7f45c09d30bfad7c2b199f4bb4bcce35f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProductosBundle:Productos:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09978217e806a693a88412e1dfdf8b6e1b3141d437a34bb2974a177146041587 = $this->env->getExtension("native_profiler");
        $__internal_09978217e806a693a88412e1dfdf8b6e1b3141d437a34bb2974a177146041587->enter($__internal_09978217e806a693a88412e1dfdf8b6e1b3141d437a34bb2974a177146041587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductosBundle:Productos:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09978217e806a693a88412e1dfdf8b6e1b3141d437a34bb2974a177146041587->leave($__internal_09978217e806a693a88412e1dfdf8b6e1b3141d437a34bb2974a177146041587_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c58384aeb9bc2c849d6950b2d3ae35fe6a47523a55b87ab10842626e601048f6 = $this->env->getExtension("native_profiler");
        $__internal_c58384aeb9bc2c849d6950b2d3ae35fe6a47523a55b87ab10842626e601048f6->enter($__internal_c58384aeb9bc2c849d6950b2d3ae35fe6a47523a55b87ab10842626e601048f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombre", array()), "html", null, true);
        echo " ";
        
        $__internal_c58384aeb9bc2c849d6950b2d3ae35fe6a47523a55b87ab10842626e601048f6->leave($__internal_c58384aeb9bc2c849d6950b2d3ae35fe6a47523a55b87ab10842626e601048f6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_99f8f0587ac925b9d0678e5882d9d0e012c899f19b45b609dc68a3869e3262fe = $this->env->getExtension("native_profiler");
        $__internal_99f8f0587ac925b9d0678e5882d9d0e012c899f19b45b609dc68a3869e3262fe->enter($__internal_99f8f0587ac925b9d0678e5882d9d0e012c899f19b45b609dc68a3869e3262fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\"><h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombre", array()), "html", null, true);
        echo "</h1></div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12\"><h2>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "puntos", array()), "html", null, true);
        echo "</h2></div>
        </div>
        
    </div>

";
        
        $__internal_99f8f0587ac925b9d0678e5882d9d0e012c899f19b45b609dc68a3869e3262fe->leave($__internal_99f8f0587ac925b9d0678e5882d9d0e012c899f19b45b609dc68a3869e3262fe_prof);

    }

    public function getTemplateName()
    {
        return "ProductosBundle:Productos:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  60 => 9,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %} {{ producto.nombre }} {% endblock %}*/
/* */
/* {% block body %}*/
/*     */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-xs-12"><h1>{{producto.nombre}}</h1></div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-xs-12"><h2>{{producto.puntos}}</h2></div>*/
/*         </div>*/
/*         */
/*     </div>*/
/* */
/* {% endblock %}*/
