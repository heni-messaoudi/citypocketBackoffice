<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_a38d90105d847d4664ff7614d9b21a0bcde3f37915d6bec8ed0808dffdf10dbb extends Twig_Template
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
        $__internal_17699eae432fc098cf12e2eab58ed05a3b0e0bb8f207a97840b002a8cbc463c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17699eae432fc098cf12e2eab58ed05a3b0e0bb8f207a97840b002a8cbc463c0->enter($__internal_17699eae432fc098cf12e2eab58ed05a3b0e0bb8f207a97840b002a8cbc463c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_274ff8ef2b5d956a73ef2e6f764889018feaa3fba92e7febe5347f1a0a12b859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_274ff8ef2b5d956a73ef2e6f764889018feaa3fba92e7febe5347f1a0a12b859->enter($__internal_274ff8ef2b5d956a73ef2e6f764889018feaa3fba92e7febe5347f1a0a12b859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_17699eae432fc098cf12e2eab58ed05a3b0e0bb8f207a97840b002a8cbc463c0->leave($__internal_17699eae432fc098cf12e2eab58ed05a3b0e0bb8f207a97840b002a8cbc463c0_prof);

        
        $__internal_274ff8ef2b5d956a73ef2e6f764889018feaa3fba92e7febe5347f1a0a12b859->leave($__internal_274ff8ef2b5d956a73ef2e6f764889018feaa3fba92e7febe5347f1a0a12b859_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
