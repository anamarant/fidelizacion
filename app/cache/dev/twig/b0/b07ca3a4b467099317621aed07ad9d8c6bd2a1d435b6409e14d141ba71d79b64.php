<?php

/* ::footer.html.twig */
class __TwigTemplate_a5de3e4242657af6471f0b59c0a0a36f657f00af6bd1da9512c9161a80e672cd extends Twig_Template
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
        $__internal_1d457344b50bc876a5171b6d1fd6d1d9035246abe809ce27431dab8f7a4d4fc1 = $this->env->getExtension("native_profiler");
        $__internal_1d457344b50bc876a5171b6d1fd6d1d9035246abe809ce27431dab8f7a4d4fc1->enter($__internal_1d457344b50bc876a5171b6d1fd6d1d9035246abe809ce27431dab8f7a4d4fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::footer.html.twig"));

        // line 1
        echo "<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                elkano<b>group</b> · C/Portuetxe 57 2D · San Sebastian · Gipuzkoa · ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["contact_email"]) ? $context["contact_email"] : $this->getContext($context, "contact_email")), "html", null, true);
        echo "
            </div>
        </div>
    </div>
</footer>";
        
        $__internal_1d457344b50bc876a5171b6d1fd6d1d9035246abe809ce27431dab8f7a4d4fc1->leave($__internal_1d457344b50bc876a5171b6d1fd6d1d9035246abe809ce27431dab8f7a4d4fc1_prof);

    }

    public function getTemplateName()
    {
        return "::footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  22 => 1,);
    }
}
/* <footer>*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 elkano<b>group</b> · C/Portuetxe 57 2D · San Sebastian · Gipuzkoa · {{ contact_email }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
