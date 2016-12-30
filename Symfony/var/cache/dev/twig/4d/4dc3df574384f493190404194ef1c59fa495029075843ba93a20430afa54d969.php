<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_432d5bd320d8e399861a1628e3b80261bfe0d805831dae7e28b9edf58d1f5840 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a342c7572c07039881c2bea9a881eb8d250d5ddc9a0e336a07d0b29d55cb7c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a342c7572c07039881c2bea9a881eb8d250d5ddc9a0e336a07d0b29d55cb7c0->enter($__internal_1a342c7572c07039881c2bea9a881eb8d250d5ddc9a0e336a07d0b29d55cb7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_77803c85e3f8a6cd0eb75f1df9cf89a7bb36c0cf61da8f12d7db553956332ad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77803c85e3f8a6cd0eb75f1df9cf89a7bb36c0cf61da8f12d7db553956332ad1->enter($__internal_77803c85e3f8a6cd0eb75f1df9cf89a7bb36c0cf61da8f12d7db553956332ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a342c7572c07039881c2bea9a881eb8d250d5ddc9a0e336a07d0b29d55cb7c0->leave($__internal_1a342c7572c07039881c2bea9a881eb8d250d5ddc9a0e336a07d0b29d55cb7c0_prof);

        
        $__internal_77803c85e3f8a6cd0eb75f1df9cf89a7bb36c0cf61da8f12d7db553956332ad1->leave($__internal_77803c85e3f8a6cd0eb75f1df9cf89a7bb36c0cf61da8f12d7db553956332ad1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b283336975b6a1750b46847afd9b079d77ff573ec27e2f5bc32c360a1bdf633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b283336975b6a1750b46847afd9b079d77ff573ec27e2f5bc32c360a1bdf633->enter($__internal_5b283336975b6a1750b46847afd9b079d77ff573ec27e2f5bc32c360a1bdf633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_75835d5c982211aa2500bfa90a3c896c9e83a0034159d40f623c14f1de5797bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75835d5c982211aa2500bfa90a3c896c9e83a0034159d40f623c14f1de5797bf->enter($__internal_75835d5c982211aa2500bfa90a3c896c9e83a0034159d40f623c14f1de5797bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_75835d5c982211aa2500bfa90a3c896c9e83a0034159d40f623c14f1de5797bf->leave($__internal_75835d5c982211aa2500bfa90a3c896c9e83a0034159d40f623c14f1de5797bf_prof);

        
        $__internal_5b283336975b6a1750b46847afd9b079d77ff573ec27e2f5bc32c360a1bdf633->leave($__internal_5b283336975b6a1750b46847afd9b079d77ff573ec27e2f5bc32c360a1bdf633_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d81370c4c8c3c4cf70fed4ac8830dda44bb3d933e493dafccd80897d2e005d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d81370c4c8c3c4cf70fed4ac8830dda44bb3d933e493dafccd80897d2e005d0->enter($__internal_3d81370c4c8c3c4cf70fed4ac8830dda44bb3d933e493dafccd80897d2e005d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff32661491657088bef7455fa571405388e7b5ea7cc636ea45d4791188be40d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff32661491657088bef7455fa571405388e7b5ea7cc636ea45d4791188be40d6->enter($__internal_ff32661491657088bef7455fa571405388e7b5ea7cc636ea45d4791188be40d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ff32661491657088bef7455fa571405388e7b5ea7cc636ea45d4791188be40d6->leave($__internal_ff32661491657088bef7455fa571405388e7b5ea7cc636ea45d4791188be40d6_prof);

        
        $__internal_3d81370c4c8c3c4cf70fed4ac8830dda44bb3d933e493dafccd80897d2e005d0->leave($__internal_3d81370c4c8c3c4cf70fed4ac8830dda44bb3d933e493dafccd80897d2e005d0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
