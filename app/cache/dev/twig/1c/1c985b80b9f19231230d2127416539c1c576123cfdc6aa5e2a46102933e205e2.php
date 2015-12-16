<?php

/* ::base.html.twig */
class __TwigTemplate_09e5f75828b800812bd161029240cfbd0060b7082e5eae39b83f4ef8518a57b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb394ef07a06cd35159cc4fea81336b55cdf0eab3270fa89b4a23ca758f03e4a = $this->env->getExtension("native_profiler");
        $__internal_bb394ef07a06cd35159cc4fea81336b55cdf0eab3270fa89b4a23ca758f03e4a->enter($__internal_bb394ef07a06cd35159cc4fea81336b55cdf0eab3270fa89b4a23ca758f03e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e3a81af_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3a81af_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/e3a81af_part_1_bootstrap.min_1.js");
            // line 9
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "e3a81af"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3a81af") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/e3a81af.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "        
        ";
        // line 12
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "2c8c367"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2c8c367") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/2c8c367.css");
            // line 13
            echo "             <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 15
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/estilos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        
        
    </head>
    <body>
        ";
        // line 21
        $this->loadTemplate("::header.html.twig", "::base.html.twig", 21)->display($context);
        // line 22
        echo "        
        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "
        ";
        // line 26
        $this->loadTemplate("::footer.html.twig", "::base.html.twig", 26)->display($context);
        // line 27
        echo "    </body>
</html>
";
        
        $__internal_bb394ef07a06cd35159cc4fea81336b55cdf0eab3270fa89b4a23ca758f03e4a->leave($__internal_bb394ef07a06cd35159cc4fea81336b55cdf0eab3270fa89b4a23ca758f03e4a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac650001d8724f197057e7714164bfc63cb7373bb3029d0726c93791ac548aff = $this->env->getExtension("native_profiler");
        $__internal_ac650001d8724f197057e7714164bfc63cb7373bb3029d0726c93791ac548aff->enter($__internal_ac650001d8724f197057e7714164bfc63cb7373bb3029d0726c93791ac548aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ac650001d8724f197057e7714164bfc63cb7373bb3029d0726c93791ac548aff->leave($__internal_ac650001d8724f197057e7714164bfc63cb7373bb3029d0726c93791ac548aff_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_525339bec048b34e88e4a348e53349dd248157e395b3fb248871563cdc659961 = $this->env->getExtension("native_profiler");
        $__internal_525339bec048b34e88e4a348e53349dd248157e395b3fb248871563cdc659961->enter($__internal_525339bec048b34e88e4a348e53349dd248157e395b3fb248871563cdc659961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_525339bec048b34e88e4a348e53349dd248157e395b3fb248871563cdc659961->leave($__internal_525339bec048b34e88e4a348e53349dd248157e395b3fb248871563cdc659961_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_642108e270a4a50f2d6a5097bfb19a241b20ddae0990150edc527315c1a142bd = $this->env->getExtension("native_profiler");
        $__internal_642108e270a4a50f2d6a5097bfb19a241b20ddae0990150edc527315c1a142bd->enter($__internal_642108e270a4a50f2d6a5097bfb19a241b20ddae0990150edc527315c1a142bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_642108e270a4a50f2d6a5097bfb19a241b20ddae0990150edc527315c1a142bd->leave($__internal_642108e270a4a50f2d6a5097bfb19a241b20ddae0990150edc527315c1a142bd_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_71394feea7780738a584cd4b8f20670bf32695fa1cca5321d1b989cba7d58656 = $this->env->getExtension("native_profiler");
        $__internal_71394feea7780738a584cd4b8f20670bf32695fa1cca5321d1b989cba7d58656->enter($__internal_71394feea7780738a584cd4b8f20670bf32695fa1cca5321d1b989cba7d58656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_71394feea7780738a584cd4b8f20670bf32695fa1cca5321d1b989cba7d58656->leave($__internal_71394feea7780738a584cd4b8f20670bf32695fa1cca5321d1b989cba7d58656_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 24,  136 => 23,  125 => 6,  113 => 5,  104 => 27,  102 => 26,  99 => 25,  96 => 24,  94 => 23,  91 => 22,  89 => 21,  81 => 16,  76 => 15,  69 => 13,  64 => 12,  61 => 11,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         {% javascripts '@ProductosBundle/Resources/public/js/*'  %}*/
/*             <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*         {% endjavascripts%}*/
/*         */
/*         {% stylesheets 'bundles/app/css/*' filter='cssrewrite' %}*/
/*              <link rel="stylesheet" href="{{ asset_url }}" />*/
/*         {% endstylesheets %}*/
/*         <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>*/
/*         <link href="{{asset('css/estilos.css')}}" rel="stylesheet" type="text/css"/>*/
/*         */
/*         */
/*     </head>*/
/*     <body>*/
/*         {% include '::header.html.twig' %}*/
/*         */
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/* */
/*         {% include '::footer.html.twig' %}*/
/*     </body>*/
/* </html>*/
/* */
