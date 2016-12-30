<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_1ec6b268f203c0d618ea72ba967332d3a0ddc01625a5741376512b8454388fa7 extends Twig_Template
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
        $__internal_88d9cd94b34e1f70a2fca6008dcff29b899f9af24b217e9ce35f03f46a3463ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88d9cd94b34e1f70a2fca6008dcff29b899f9af24b217e9ce35f03f46a3463ad->enter($__internal_88d9cd94b34e1f70a2fca6008dcff29b899f9af24b217e9ce35f03f46a3463ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_591a695badd6fc70ec15b73145eada10eeef14682e87f8f553351b21326e23b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_591a695badd6fc70ec15b73145eada10eeef14682e87f8f553351b21326e23b0->enter($__internal_591a695badd6fc70ec15b73145eada10eeef14682e87f8f553351b21326e23b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_88d9cd94b34e1f70a2fca6008dcff29b899f9af24b217e9ce35f03f46a3463ad->leave($__internal_88d9cd94b34e1f70a2fca6008dcff29b899f9af24b217e9ce35f03f46a3463ad_prof);

        
        $__internal_591a695badd6fc70ec15b73145eada10eeef14682e87f8f553351b21326e23b0->leave($__internal_591a695badd6fc70ec15b73145eada10eeef14682e87f8f553351b21326e23b0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
