<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_9ea2221eefecc4fad1580d18fc38f095ec2b69c9de10dcc347fab5894a7e2068 extends Twig_Template
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
        $__internal_408fbc36155ef222a1855da2655eac914543adf1e7e4c657883507bf45cbb7a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_408fbc36155ef222a1855da2655eac914543adf1e7e4c657883507bf45cbb7a6->enter($__internal_408fbc36155ef222a1855da2655eac914543adf1e7e4c657883507bf45cbb7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_f9f84695b48f1c299f28409d687b55de62dee6e817adf1fd5aba674e4a35efce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f84695b48f1c299f28409d687b55de62dee6e817adf1fd5aba674e4a35efce->enter($__internal_f9f84695b48f1c299f28409d687b55de62dee6e817adf1fd5aba674e4a35efce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_408fbc36155ef222a1855da2655eac914543adf1e7e4c657883507bf45cbb7a6->leave($__internal_408fbc36155ef222a1855da2655eac914543adf1e7e4c657883507bf45cbb7a6_prof);

        
        $__internal_f9f84695b48f1c299f28409d687b55de62dee6e817adf1fd5aba674e4a35efce->leave($__internal_f9f84695b48f1c299f28409d687b55de62dee6e817adf1fd5aba674e4a35efce_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
