<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_be8096cc5e92ad8897a9d7ea9d62f99a6b281f4881b92ebef9ad93afcd55a112 extends Twig_Template
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
        $__internal_5d873bfda9d524176e88a52da60efb4a83f32921cad418aaa4cd98069078963c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d873bfda9d524176e88a52da60efb4a83f32921cad418aaa4cd98069078963c->enter($__internal_5d873bfda9d524176e88a52da60efb4a83f32921cad418aaa4cd98069078963c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_b1c4a5d46ac717cb329eda1ce2e2c12a6625865db2ae33fb264be0dcca06360e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c4a5d46ac717cb329eda1ce2e2c12a6625865db2ae33fb264be0dcca06360e->enter($__internal_b1c4a5d46ac717cb329eda1ce2e2c12a6625865db2ae33fb264be0dcca06360e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5d873bfda9d524176e88a52da60efb4a83f32921cad418aaa4cd98069078963c->leave($__internal_5d873bfda9d524176e88a52da60efb4a83f32921cad418aaa4cd98069078963c_prof);

        
        $__internal_b1c4a5d46ac717cb329eda1ce2e2c12a6625865db2ae33fb264be0dcca06360e->leave($__internal_b1c4a5d46ac717cb329eda1ce2e2c12a6625865db2ae33fb264be0dcca06360e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
