<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_cc23b08e00f63f9d3b8483f2bb41eab4848e1434a71942edf6658082241f3e89 extends Twig_Template
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
        $__internal_402ccf8e997594a4aa0b94abd255aefab77ce6f6ee0fbfb6f0723eaca45ae1c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_402ccf8e997594a4aa0b94abd255aefab77ce6f6ee0fbfb6f0723eaca45ae1c9->enter($__internal_402ccf8e997594a4aa0b94abd255aefab77ce6f6ee0fbfb6f0723eaca45ae1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_d280a1f5885171fbf17543816e58674e7f7b43c597fddb4baa6cc60741e8d0de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d280a1f5885171fbf17543816e58674e7f7b43c597fddb4baa6cc60741e8d0de->enter($__internal_d280a1f5885171fbf17543816e58674e7f7b43c597fddb4baa6cc60741e8d0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_402ccf8e997594a4aa0b94abd255aefab77ce6f6ee0fbfb6f0723eaca45ae1c9->leave($__internal_402ccf8e997594a4aa0b94abd255aefab77ce6f6ee0fbfb6f0723eaca45ae1c9_prof);

        
        $__internal_d280a1f5885171fbf17543816e58674e7f7b43c597fddb4baa6cc60741e8d0de->leave($__internal_d280a1f5885171fbf17543816e58674e7f7b43c597fddb4baa6cc60741e8d0de_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
