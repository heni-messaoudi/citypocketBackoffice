<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0d89a69dea7b33207876c11723e8ac34689546dc0c387ed9d6d5bb85258967a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4dc6003d9376432debb5b10b1fafb80bc4f64d724664636d8869cdd6b9fa80c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dc6003d9376432debb5b10b1fafb80bc4f64d724664636d8869cdd6b9fa80c4->enter($__internal_4dc6003d9376432debb5b10b1fafb80bc4f64d724664636d8869cdd6b9fa80c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_bfe4d41e1ca568eac6afcc11760c56e31c9c157fa8e795af83f4405ba11ddd1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfe4d41e1ca568eac6afcc11760c56e31c9c157fa8e795af83f4405ba11ddd1d->enter($__internal_bfe4d41e1ca568eac6afcc11760c56e31c9c157fa8e795af83f4405ba11ddd1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dc6003d9376432debb5b10b1fafb80bc4f64d724664636d8869cdd6b9fa80c4->leave($__internal_4dc6003d9376432debb5b10b1fafb80bc4f64d724664636d8869cdd6b9fa80c4_prof);

        
        $__internal_bfe4d41e1ca568eac6afcc11760c56e31c9c157fa8e795af83f4405ba11ddd1d->leave($__internal_bfe4d41e1ca568eac6afcc11760c56e31c9c157fa8e795af83f4405ba11ddd1d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0c286fa5a358928f8ab7cf7c3d507604294b8a1fb30e0198264424eab14a63dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c286fa5a358928f8ab7cf7c3d507604294b8a1fb30e0198264424eab14a63dd->enter($__internal_0c286fa5a358928f8ab7cf7c3d507604294b8a1fb30e0198264424eab14a63dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ff2ef8e4ad2e8bd2e49a38e63e10b536f93932a9a50837f50497193d26fc2571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2ef8e4ad2e8bd2e49a38e63e10b536f93932a9a50837f50497193d26fc2571->enter($__internal_ff2ef8e4ad2e8bd2e49a38e63e10b536f93932a9a50837f50497193d26fc2571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ff2ef8e4ad2e8bd2e49a38e63e10b536f93932a9a50837f50497193d26fc2571->leave($__internal_ff2ef8e4ad2e8bd2e49a38e63e10b536f93932a9a50837f50497193d26fc2571_prof);

        
        $__internal_0c286fa5a358928f8ab7cf7c3d507604294b8a1fb30e0198264424eab14a63dd->leave($__internal_0c286fa5a358928f8ab7cf7c3d507604294b8a1fb30e0198264424eab14a63dd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_191607865bc4c5757db8d7bd498bbd6e99d92c65734d872a3230062099859707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_191607865bc4c5757db8d7bd498bbd6e99d92c65734d872a3230062099859707->enter($__internal_191607865bc4c5757db8d7bd498bbd6e99d92c65734d872a3230062099859707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f1b8d294586f04fc8fd91e1e3df9b578ba2b824a47ad61e98e28c5579f5fc1f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1b8d294586f04fc8fd91e1e3df9b578ba2b824a47ad61e98e28c5579f5fc1f8->enter($__internal_f1b8d294586f04fc8fd91e1e3df9b578ba2b824a47ad61e98e28c5579f5fc1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f1b8d294586f04fc8fd91e1e3df9b578ba2b824a47ad61e98e28c5579f5fc1f8->leave($__internal_f1b8d294586f04fc8fd91e1e3df9b578ba2b824a47ad61e98e28c5579f5fc1f8_prof);

        
        $__internal_191607865bc4c5757db8d7bd498bbd6e99d92c65734d872a3230062099859707->leave($__internal_191607865bc4c5757db8d7bd498bbd6e99d92c65734d872a3230062099859707_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9151597fa4b5d994bf4c0e868d24a55aeefee23739950e7f68378385eaa17523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9151597fa4b5d994bf4c0e868d24a55aeefee23739950e7f68378385eaa17523->enter($__internal_9151597fa4b5d994bf4c0e868d24a55aeefee23739950e7f68378385eaa17523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6c31b2e4f99e5588f5019985490be8b54939b92a1c4492118f55ea045644c6c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c31b2e4f99e5588f5019985490be8b54939b92a1c4492118f55ea045644c6c1->enter($__internal_6c31b2e4f99e5588f5019985490be8b54939b92a1c4492118f55ea045644c6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6c31b2e4f99e5588f5019985490be8b54939b92a1c4492118f55ea045644c6c1->leave($__internal_6c31b2e4f99e5588f5019985490be8b54939b92a1c4492118f55ea045644c6c1_prof);

        
        $__internal_9151597fa4b5d994bf4c0e868d24a55aeefee23739950e7f68378385eaa17523->leave($__internal_9151597fa4b5d994bf4c0e868d24a55aeefee23739950e7f68378385eaa17523_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
