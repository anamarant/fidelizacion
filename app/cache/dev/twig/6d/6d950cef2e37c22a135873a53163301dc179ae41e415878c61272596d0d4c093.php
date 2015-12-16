<?php

/* ProductosBundle:Default:index.html.twig */
class __TwigTemplate_b2d2019e06d9ad831673f501fa96b20b38dbec08e6ff539f31521eb1f2a85edb extends Twig_Template
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
        $__internal_50973fb00e097dcf14fccf56ebc54eba75ce53c5415108f3f57933fc57c3207f = $this->env->getExtension("native_profiler");
        $__internal_50973fb00e097dcf14fccf56ebc54eba75ce53c5415108f3f57933fc57c3207f->enter($__internal_50973fb00e097dcf14fccf56ebc54eba75ce53c5415108f3f57933fc57c3207f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductosBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_50973fb00e097dcf14fccf56ebc54eba75ce53c5415108f3f57933fc57c3207f->leave($__internal_50973fb00e097dcf14fccf56ebc54eba75ce53c5415108f3f57933fc57c3207f_prof);

    }

    public function getTemplateName()
    {
        return "ProductosBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
