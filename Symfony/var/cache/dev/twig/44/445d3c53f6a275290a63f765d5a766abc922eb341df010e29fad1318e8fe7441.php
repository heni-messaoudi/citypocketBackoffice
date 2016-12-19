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
        $__internal_c8645bdba60a89b7f298b12fab7429883bc5ca76e39005ad8349595996edf8f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8645bdba60a89b7f298b12fab7429883bc5ca76e39005ad8349595996edf8f1->enter($__internal_c8645bdba60a89b7f298b12fab7429883bc5ca76e39005ad8349595996edf8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a022d3630d594e6d075a9785f95deb13e9ee1cd0200dc50d0cf1560805999665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a022d3630d594e6d075a9785f95deb13e9ee1cd0200dc50d0cf1560805999665->enter($__internal_a022d3630d594e6d075a9785f95deb13e9ee1cd0200dc50d0cf1560805999665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8645bdba60a89b7f298b12fab7429883bc5ca76e39005ad8349595996edf8f1->leave($__internal_c8645bdba60a89b7f298b12fab7429883bc5ca76e39005ad8349595996edf8f1_prof);

        
        $__internal_a022d3630d594e6d075a9785f95deb13e9ee1cd0200dc50d0cf1560805999665->leave($__internal_a022d3630d594e6d075a9785f95deb13e9ee1cd0200dc50d0cf1560805999665_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_20928009db8eb6d425605fd247c1d9c9eab982e4efba13b6f402bf6eb3b78ac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20928009db8eb6d425605fd247c1d9c9eab982e4efba13b6f402bf6eb3b78ac2->enter($__internal_20928009db8eb6d425605fd247c1d9c9eab982e4efba13b6f402bf6eb3b78ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e45ee8bee893572a315051d780cfb54c7378a5a765e3128b3ece950162282ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e45ee8bee893572a315051d780cfb54c7378a5a765e3128b3ece950162282ce8->enter($__internal_e45ee8bee893572a315051d780cfb54c7378a5a765e3128b3ece950162282ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e45ee8bee893572a315051d780cfb54c7378a5a765e3128b3ece950162282ce8->leave($__internal_e45ee8bee893572a315051d780cfb54c7378a5a765e3128b3ece950162282ce8_prof);

        
        $__internal_20928009db8eb6d425605fd247c1d9c9eab982e4efba13b6f402bf6eb3b78ac2->leave($__internal_20928009db8eb6d425605fd247c1d9c9eab982e4efba13b6f402bf6eb3b78ac2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2de161b8fecd748c687ca47426843c5fe0c93d5adf147a2569fb0f279310b38c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2de161b8fecd748c687ca47426843c5fe0c93d5adf147a2569fb0f279310b38c->enter($__internal_2de161b8fecd748c687ca47426843c5fe0c93d5adf147a2569fb0f279310b38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_31fd8ba28dce8d33a2c5cc2ffac05aa451b2177039b49a91ebb807a04897e1fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31fd8ba28dce8d33a2c5cc2ffac05aa451b2177039b49a91ebb807a04897e1fb->enter($__internal_31fd8ba28dce8d33a2c5cc2ffac05aa451b2177039b49a91ebb807a04897e1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_31fd8ba28dce8d33a2c5cc2ffac05aa451b2177039b49a91ebb807a04897e1fb->leave($__internal_31fd8ba28dce8d33a2c5cc2ffac05aa451b2177039b49a91ebb807a04897e1fb_prof);

        
        $__internal_2de161b8fecd748c687ca47426843c5fe0c93d5adf147a2569fb0f279310b38c->leave($__internal_2de161b8fecd748c687ca47426843c5fe0c93d5adf147a2569fb0f279310b38c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_001e6e15acec5f723c8ffbe0dbf01e34409eb9333b2ed75bf71206ea3d66d1a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_001e6e15acec5f723c8ffbe0dbf01e34409eb9333b2ed75bf71206ea3d66d1a3->enter($__internal_001e6e15acec5f723c8ffbe0dbf01e34409eb9333b2ed75bf71206ea3d66d1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_218b76a6cf1a596c24583e1e07ca274afbbd0537ef458c6b5bd0d73f4c0b6956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_218b76a6cf1a596c24583e1e07ca274afbbd0537ef458c6b5bd0d73f4c0b6956->enter($__internal_218b76a6cf1a596c24583e1e07ca274afbbd0537ef458c6b5bd0d73f4c0b6956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_218b76a6cf1a596c24583e1e07ca274afbbd0537ef458c6b5bd0d73f4c0b6956->leave($__internal_218b76a6cf1a596c24583e1e07ca274afbbd0537ef458c6b5bd0d73f4c0b6956_prof);

        
        $__internal_001e6e15acec5f723c8ffbe0dbf01e34409eb9333b2ed75bf71206ea3d66d1a3->leave($__internal_001e6e15acec5f723c8ffbe0dbf01e34409eb9333b2ed75bf71206ea3d66d1a3_prof);

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
