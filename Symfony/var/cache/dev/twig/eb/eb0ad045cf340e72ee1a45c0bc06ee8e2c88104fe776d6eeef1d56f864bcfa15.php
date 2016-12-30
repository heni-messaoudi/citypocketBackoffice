<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_49b28bda95e18ba6c0644db4fe8884d4b4815630e81c580cdb09bb0e1cf92f2d extends Twig_Template
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
        $__internal_f61bfa09f40e43c9585eef039247e5bf86e7180c5165e9bffaeeb5a12299c92e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f61bfa09f40e43c9585eef039247e5bf86e7180c5165e9bffaeeb5a12299c92e->enter($__internal_f61bfa09f40e43c9585eef039247e5bf86e7180c5165e9bffaeeb5a12299c92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_e2bc18d8989841efdf023379b7d1369da341e3c27d761d8fc6285fa70287973d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2bc18d8989841efdf023379b7d1369da341e3c27d761d8fc6285fa70287973d->enter($__internal_e2bc18d8989841efdf023379b7d1369da341e3c27d761d8fc6285fa70287973d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_f61bfa09f40e43c9585eef039247e5bf86e7180c5165e9bffaeeb5a12299c92e->leave($__internal_f61bfa09f40e43c9585eef039247e5bf86e7180c5165e9bffaeeb5a12299c92e_prof);

        
        $__internal_e2bc18d8989841efdf023379b7d1369da341e3c27d761d8fc6285fa70287973d->leave($__internal_e2bc18d8989841efdf023379b7d1369da341e3c27d761d8fc6285fa70287973d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
