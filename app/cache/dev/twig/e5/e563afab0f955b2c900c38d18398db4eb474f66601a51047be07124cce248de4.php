<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_aac9bfed5e2d7838a9eec2da8904855de7ff43fa82754402443fcfb45f6215db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02bca2769641b67e13340b2bc34527c782013632eebbea13b6f934d93a58756a = $this->env->getExtension("native_profiler");
        $__internal_02bca2769641b67e13340b2bc34527c782013632eebbea13b6f934d93a58756a->enter($__internal_02bca2769641b67e13340b2bc34527c782013632eebbea13b6f934d93a58756a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02bca2769641b67e13340b2bc34527c782013632eebbea13b6f934d93a58756a->leave($__internal_02bca2769641b67e13340b2bc34527c782013632eebbea13b6f934d93a58756a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0fbbf0174c61dbca46b3d3433b0d1119e6e469e7e6a7f7f7079119d4a6e6af51 = $this->env->getExtension("native_profiler");
        $__internal_0fbbf0174c61dbca46b3d3433b0d1119e6e469e7e6a7f7f7079119d4a6e6af51->enter($__internal_0fbbf0174c61dbca46b3d3433b0d1119e6e469e7e6a7f7f7079119d4a6e6af51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0fbbf0174c61dbca46b3d3433b0d1119e6e469e7e6a7f7f7079119d4a6e6af51->leave($__internal_0fbbf0174c61dbca46b3d3433b0d1119e6e469e7e6a7f7f7079119d4a6e6af51_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd39bf6ef05accf70990193890d21aab1318328c3404c409291887cfcf16e737 = $this->env->getExtension("native_profiler");
        $__internal_cd39bf6ef05accf70990193890d21aab1318328c3404c409291887cfcf16e737->enter($__internal_cd39bf6ef05accf70990193890d21aab1318328c3404c409291887cfcf16e737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cd39bf6ef05accf70990193890d21aab1318328c3404c409291887cfcf16e737->leave($__internal_cd39bf6ef05accf70990193890d21aab1318328c3404c409291887cfcf16e737_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3e2361fd583899b7d1deacf08e44cf42168f851215b8c4e12bbb22cc4d814d2 = $this->env->getExtension("native_profiler");
        $__internal_f3e2361fd583899b7d1deacf08e44cf42168f851215b8c4e12bbb22cc4d814d2->enter($__internal_f3e2361fd583899b7d1deacf08e44cf42168f851215b8c4e12bbb22cc4d814d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f3e2361fd583899b7d1deacf08e44cf42168f851215b8c4e12bbb22cc4d814d2->leave($__internal_f3e2361fd583899b7d1deacf08e44cf42168f851215b8c4e12bbb22cc4d814d2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
