<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_d6b61fb2d20f68e8cd06fa27f7362b10e199663e858a2dc5dcf9f7c8949edf4e extends Twig_Template
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
        $__internal_8adcb7bb875b70f20b45824ce65f08b5d390a658689db9e5acc07f6196b2e804 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8adcb7bb875b70f20b45824ce65f08b5d390a658689db9e5acc07f6196b2e804->enter($__internal_8adcb7bb875b70f20b45824ce65f08b5d390a658689db9e5acc07f6196b2e804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_ab36951ae03257b0a4f578861e32bc9daa24d4178834e33a064ec8fdc47f7d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab36951ae03257b0a4f578861e32bc9daa24d4178834e33a064ec8fdc47f7d9a->enter($__internal_ab36951ae03257b0a4f578861e32bc9daa24d4178834e33a064ec8fdc47f7d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8adcb7bb875b70f20b45824ce65f08b5d390a658689db9e5acc07f6196b2e804->leave($__internal_8adcb7bb875b70f20b45824ce65f08b5d390a658689db9e5acc07f6196b2e804_prof);

        
        $__internal_ab36951ae03257b0a4f578861e32bc9daa24d4178834e33a064ec8fdc47f7d9a->leave($__internal_ab36951ae03257b0a4f578861e32bc9daa24d4178834e33a064ec8fdc47f7d9a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
