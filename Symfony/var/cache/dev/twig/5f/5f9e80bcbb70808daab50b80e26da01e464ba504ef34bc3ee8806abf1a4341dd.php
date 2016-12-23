<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_877409c7a6de079d6c3e5371c8257face31b39d2c4a0168f558cb960ecccd664 extends Twig_Template
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
        $__internal_32c303a19ebd939826f01ccc210c4207cde23c115b610d4fecd33572fa058712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32c303a19ebd939826f01ccc210c4207cde23c115b610d4fecd33572fa058712->enter($__internal_32c303a19ebd939826f01ccc210c4207cde23c115b610d4fecd33572fa058712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_b2c0104db5f8d64c20c337286d1d63475a26b0e9f3d1d4d9601b8cc2376e5b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2c0104db5f8d64c20c337286d1d63475a26b0e9f3d1d4d9601b8cc2376e5b65->enter($__internal_b2c0104db5f8d64c20c337286d1d63475a26b0e9f3d1d4d9601b8cc2376e5b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_32c303a19ebd939826f01ccc210c4207cde23c115b610d4fecd33572fa058712->leave($__internal_32c303a19ebd939826f01ccc210c4207cde23c115b610d4fecd33572fa058712_prof);

        
        $__internal_b2c0104db5f8d64c20c337286d1d63475a26b0e9f3d1d4d9601b8cc2376e5b65->leave($__internal_b2c0104db5f8d64c20c337286d1d63475a26b0e9f3d1d4d9601b8cc2376e5b65_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
