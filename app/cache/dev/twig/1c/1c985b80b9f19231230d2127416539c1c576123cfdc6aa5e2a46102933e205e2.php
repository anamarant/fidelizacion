<?php

/* base.html.twig */
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
        $__internal_ef9dfcb6f51eecd7eeeebecc5474a294161a833ed642cd9e68208f582514fdf5 = $this->env->getExtension("native_profiler");
        $__internal_ef9dfcb6f51eecd7eeeebecc5474a294161a833ed642cd9e68208f582514fdf5->enter($__internal_ef9dfcb6f51eecd7eeeebecc5474a294161a833ed642cd9e68208f582514fdf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ef9dfcb6f51eecd7eeeebecc5474a294161a833ed642cd9e68208f582514fdf5->leave($__internal_ef9dfcb6f51eecd7eeeebecc5474a294161a833ed642cd9e68208f582514fdf5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c82fbe88664a5a51bd9499f3f74193a9c64cf5b19b63b4e609375724c5147433 = $this->env->getExtension("native_profiler");
        $__internal_c82fbe88664a5a51bd9499f3f74193a9c64cf5b19b63b4e609375724c5147433->enter($__internal_c82fbe88664a5a51bd9499f3f74193a9c64cf5b19b63b4e609375724c5147433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c82fbe88664a5a51bd9499f3f74193a9c64cf5b19b63b4e609375724c5147433->leave($__internal_c82fbe88664a5a51bd9499f3f74193a9c64cf5b19b63b4e609375724c5147433_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c08371f90e41465acb920baa4af34915be7201ab673d0e685674772ecd962906 = $this->env->getExtension("native_profiler");
        $__internal_c08371f90e41465acb920baa4af34915be7201ab673d0e685674772ecd962906->enter($__internal_c08371f90e41465acb920baa4af34915be7201ab673d0e685674772ecd962906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c08371f90e41465acb920baa4af34915be7201ab673d0e685674772ecd962906->leave($__internal_c08371f90e41465acb920baa4af34915be7201ab673d0e685674772ecd962906_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_011cc32b5c8109d035abb1d322381da50457909baa56a3ad276ded7e1b743d41 = $this->env->getExtension("native_profiler");
        $__internal_011cc32b5c8109d035abb1d322381da50457909baa56a3ad276ded7e1b743d41->enter($__internal_011cc32b5c8109d035abb1d322381da50457909baa56a3ad276ded7e1b743d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_011cc32b5c8109d035abb1d322381da50457909baa56a3ad276ded7e1b743d41->leave($__internal_011cc32b5c8109d035abb1d322381da50457909baa56a3ad276ded7e1b743d41_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e63ae9f341f0727465120140034bed5f9f03b6ed885dd3568ba18019f6760236 = $this->env->getExtension("native_profiler");
        $__internal_e63ae9f341f0727465120140034bed5f9f03b6ed885dd3568ba18019f6760236->enter($__internal_e63ae9f341f0727465120140034bed5f9f03b6ed885dd3568ba18019f6760236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e63ae9f341f0727465120140034bed5f9f03b6ed885dd3568ba18019f6760236->leave($__internal_e63ae9f341f0727465120140034bed5f9f03b6ed885dd3568ba18019f6760236_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
