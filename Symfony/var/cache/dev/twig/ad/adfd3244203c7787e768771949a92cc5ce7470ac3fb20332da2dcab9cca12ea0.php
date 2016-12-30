<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_2a86eabfc58d49367f5cfa677eac76b42a2ae38bf005ef95d27054fff82752ec extends Twig_Template
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
        $__internal_6de4c9955102a9834a92c98bbfe7959c8d2b8f0bd56d73d63fa3f0fb3e066840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6de4c9955102a9834a92c98bbfe7959c8d2b8f0bd56d73d63fa3f0fb3e066840->enter($__internal_6de4c9955102a9834a92c98bbfe7959c8d2b8f0bd56d73d63fa3f0fb3e066840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_29b06f8bcc3714edb31ac9492f5644a5472895a864164fc956c23ce730570dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b06f8bcc3714edb31ac9492f5644a5472895a864164fc956c23ce730570dd4->enter($__internal_29b06f8bcc3714edb31ac9492f5644a5472895a864164fc956c23ce730570dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6de4c9955102a9834a92c98bbfe7959c8d2b8f0bd56d73d63fa3f0fb3e066840->leave($__internal_6de4c9955102a9834a92c98bbfe7959c8d2b8f0bd56d73d63fa3f0fb3e066840_prof);

        
        $__internal_29b06f8bcc3714edb31ac9492f5644a5472895a864164fc956c23ce730570dd4->leave($__internal_29b06f8bcc3714edb31ac9492f5644a5472895a864164fc956c23ce730570dd4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
