<?php

/* ::header.html.twig */
class __TwigTemplate_5fecc252d0a6d507a8e714d13b503ba7c7c87cacd4dcbd3fc38236e84aa2cc23 extends Twig_Template
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
        $__internal_55c5f45040c3dbcd42fba93ac07b2a547d560d5f4a96e7c7f6fa2b649f76bfa1 = $this->env->getExtension("native_profiler");
        $__internal_55c5f45040c3dbcd42fba93ac07b2a547d560d5f4a96e7c7f6fa2b649f76bfa1->enter($__internal_55c5f45040c3dbcd42fba93ac07b2a547d560d5f4a96e7c7f6fa2b649f76bfa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::header.html.twig"));

        // line 1
        echo "<header>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-4\">
                <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/elkanogroup-logo.png"), "html", null, true);
        echo "\" alt=\"elkangroup\" />                
            </div>
            
            <div class=\"col-xs-8\">
                
            </div>
        </div>
    </div>
</header>";
        
        $__internal_55c5f45040c3dbcd42fba93ac07b2a547d560d5f4a96e7c7f6fa2b649f76bfa1->leave($__internal_55c5f45040c3dbcd42fba93ac07b2a547d560d5f4a96e7c7f6fa2b649f76bfa1_prof);

    }

    public function getTemplateName()
    {
        return "::header.html.twig";
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
/* <header>*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-xs-4">*/
/*                 <img src="{{asset('images/elkanogroup-logo.png')}}" alt="elkangroup" />                */
/*             </div>*/
/*             */
/*             <div class="col-xs-8">*/
/*                 */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </header>*/
