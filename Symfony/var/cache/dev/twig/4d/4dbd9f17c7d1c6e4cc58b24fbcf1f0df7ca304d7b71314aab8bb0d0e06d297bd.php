<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_a7edc5ab2fa0512cee64e3cf8ae7ffa393d42ee7cfc8848ebd2ea1ee7f0d89b3 extends Twig_Template
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
        $__internal_0fd2b2299b14cdaac27af889dc6929984ac73800a0d4375f30f1b77f2b40dd7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fd2b2299b14cdaac27af889dc6929984ac73800a0d4375f30f1b77f2b40dd7d->enter($__internal_0fd2b2299b14cdaac27af889dc6929984ac73800a0d4375f30f1b77f2b40dd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_cb5f7864adaa2b547f336f042b9f9ce99d1fba0fa26612c3b7ecd75600c13a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb5f7864adaa2b547f336f042b9f9ce99d1fba0fa26612c3b7ecd75600c13a71->enter($__internal_cb5f7864adaa2b547f336f042b9f9ce99d1fba0fa26612c3b7ecd75600c13a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_0fd2b2299b14cdaac27af889dc6929984ac73800a0d4375f30f1b77f2b40dd7d->leave($__internal_0fd2b2299b14cdaac27af889dc6929984ac73800a0d4375f30f1b77f2b40dd7d_prof);

        
        $__internal_cb5f7864adaa2b547f336f042b9f9ce99d1fba0fa26612c3b7ecd75600c13a71->leave($__internal_cb5f7864adaa2b547f336f042b9f9ce99d1fba0fa26612c3b7ecd75600c13a71_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
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
", "TwigBundle:Exception:traces.txt.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
