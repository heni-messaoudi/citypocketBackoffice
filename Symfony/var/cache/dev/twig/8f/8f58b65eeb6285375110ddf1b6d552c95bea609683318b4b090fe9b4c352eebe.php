<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_66b2606117928b368aba92103c86016a58f80c79b5e8b2b463a8b837540bf6ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_69bd8ada6ca6eb7fcd316e9615089cc006c4a6616040183d1ee152837f8a9956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69bd8ada6ca6eb7fcd316e9615089cc006c4a6616040183d1ee152837f8a9956->enter($__internal_69bd8ada6ca6eb7fcd316e9615089cc006c4a6616040183d1ee152837f8a9956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_1cffadb1d5e149e74699b1f6fa755a10eb3b267504dfd9787ab4da0dbdabcd6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cffadb1d5e149e74699b1f6fa755a10eb3b267504dfd9787ab4da0dbdabcd6a->enter($__internal_1cffadb1d5e149e74699b1f6fa755a10eb3b267504dfd9787ab4da0dbdabcd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69bd8ada6ca6eb7fcd316e9615089cc006c4a6616040183d1ee152837f8a9956->leave($__internal_69bd8ada6ca6eb7fcd316e9615089cc006c4a6616040183d1ee152837f8a9956_prof);

        
        $__internal_1cffadb1d5e149e74699b1f6fa755a10eb3b267504dfd9787ab4da0dbdabcd6a->leave($__internal_1cffadb1d5e149e74699b1f6fa755a10eb3b267504dfd9787ab4da0dbdabcd6a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3d2c71eaa164ed6fae44049f39c6ef90e71cae189c34a6cc7b471064bf76790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3d2c71eaa164ed6fae44049f39c6ef90e71cae189c34a6cc7b471064bf76790->enter($__internal_f3d2c71eaa164ed6fae44049f39c6ef90e71cae189c34a6cc7b471064bf76790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9512c7df7feb822776a06f11cdbc92d591f377cf4006af8f88ddb42e9101e82a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9512c7df7feb822776a06f11cdbc92d591f377cf4006af8f88ddb42e9101e82a->enter($__internal_9512c7df7feb822776a06f11cdbc92d591f377cf4006af8f88ddb42e9101e82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9512c7df7feb822776a06f11cdbc92d591f377cf4006af8f88ddb42e9101e82a->leave($__internal_9512c7df7feb822776a06f11cdbc92d591f377cf4006af8f88ddb42e9101e82a_prof);

        
        $__internal_f3d2c71eaa164ed6fae44049f39c6ef90e71cae189c34a6cc7b471064bf76790->leave($__internal_f3d2c71eaa164ed6fae44049f39c6ef90e71cae189c34a6cc7b471064bf76790_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e2d2731b333c67ccf865fcece5fa9f52df540ec7d06841c40960aeccf8cb1e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e2d2731b333c67ccf865fcece5fa9f52df540ec7d06841c40960aeccf8cb1e3->enter($__internal_6e2d2731b333c67ccf865fcece5fa9f52df540ec7d06841c40960aeccf8cb1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2cf7691368b9a1cb146d4ca02573383d0b5178492b76ceb96de6a8c39f8d1174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf7691368b9a1cb146d4ca02573383d0b5178492b76ceb96de6a8c39f8d1174->enter($__internal_2cf7691368b9a1cb146d4ca02573383d0b5178492b76ceb96de6a8c39f8d1174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2cf7691368b9a1cb146d4ca02573383d0b5178492b76ceb96de6a8c39f8d1174->leave($__internal_2cf7691368b9a1cb146d4ca02573383d0b5178492b76ceb96de6a8c39f8d1174_prof);

        
        $__internal_6e2d2731b333c67ccf865fcece5fa9f52df540ec7d06841c40960aeccf8cb1e3->leave($__internal_6e2d2731b333c67ccf865fcece5fa9f52df540ec7d06841c40960aeccf8cb1e3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
