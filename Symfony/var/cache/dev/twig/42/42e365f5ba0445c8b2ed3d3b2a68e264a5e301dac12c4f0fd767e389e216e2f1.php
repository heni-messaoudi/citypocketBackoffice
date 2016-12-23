<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_24c737d7bd116c6a24c06fd5b2173a53b2644eb1275c7416b6ec93d93d66500e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_700e881f78a0211fbebd43e3773ae2b97365b926967b64390b0085cc7665ae29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_700e881f78a0211fbebd43e3773ae2b97365b926967b64390b0085cc7665ae29->enter($__internal_700e881f78a0211fbebd43e3773ae2b97365b926967b64390b0085cc7665ae29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c2ddfac8b3224648fb09b948fdb7845f9849024f16294257a40d788c05b7ae34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2ddfac8b3224648fb09b948fdb7845f9849024f16294257a40d788c05b7ae34->enter($__internal_c2ddfac8b3224648fb09b948fdb7845f9849024f16294257a40d788c05b7ae34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_700e881f78a0211fbebd43e3773ae2b97365b926967b64390b0085cc7665ae29->leave($__internal_700e881f78a0211fbebd43e3773ae2b97365b926967b64390b0085cc7665ae29_prof);

        
        $__internal_c2ddfac8b3224648fb09b948fdb7845f9849024f16294257a40d788c05b7ae34->leave($__internal_c2ddfac8b3224648fb09b948fdb7845f9849024f16294257a40d788c05b7ae34_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a30cc89c07145b4b487d97c9ed7e8e3607a7b7a62fb530a46f10e407b583cf53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a30cc89c07145b4b487d97c9ed7e8e3607a7b7a62fb530a46f10e407b583cf53->enter($__internal_a30cc89c07145b4b487d97c9ed7e8e3607a7b7a62fb530a46f10e407b583cf53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e337bc392cbb5fc56b3c6aa8a12a16b62788e59e32241c4f3eb8f2d0baa56abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e337bc392cbb5fc56b3c6aa8a12a16b62788e59e32241c4f3eb8f2d0baa56abd->enter($__internal_e337bc392cbb5fc56b3c6aa8a12a16b62788e59e32241c4f3eb8f2d0baa56abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e337bc392cbb5fc56b3c6aa8a12a16b62788e59e32241c4f3eb8f2d0baa56abd->leave($__internal_e337bc392cbb5fc56b3c6aa8a12a16b62788e59e32241c4f3eb8f2d0baa56abd_prof);

        
        $__internal_a30cc89c07145b4b487d97c9ed7e8e3607a7b7a62fb530a46f10e407b583cf53->leave($__internal_a30cc89c07145b4b487d97c9ed7e8e3607a7b7a62fb530a46f10e407b583cf53_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ae1d7cb7391bfad44fa083e9ee2180c2f91cb0679a57d3ef58e4ad7c857dbfc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae1d7cb7391bfad44fa083e9ee2180c2f91cb0679a57d3ef58e4ad7c857dbfc6->enter($__internal_ae1d7cb7391bfad44fa083e9ee2180c2f91cb0679a57d3ef58e4ad7c857dbfc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fa5469ab3938ad1f97f1740daaf6aea180caf2a47382b25f7492403e6a3517b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa5469ab3938ad1f97f1740daaf6aea180caf2a47382b25f7492403e6a3517b2->enter($__internal_fa5469ab3938ad1f97f1740daaf6aea180caf2a47382b25f7492403e6a3517b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_fa5469ab3938ad1f97f1740daaf6aea180caf2a47382b25f7492403e6a3517b2->leave($__internal_fa5469ab3938ad1f97f1740daaf6aea180caf2a47382b25f7492403e6a3517b2_prof);

        
        $__internal_ae1d7cb7391bfad44fa083e9ee2180c2f91cb0679a57d3ef58e4ad7c857dbfc6->leave($__internal_ae1d7cb7391bfad44fa083e9ee2180c2f91cb0679a57d3ef58e4ad7c857dbfc6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d880466dcbaad985c07c10aad0f12f03cab69dd128bd7d799c8586d487d7fba6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d880466dcbaad985c07c10aad0f12f03cab69dd128bd7d799c8586d487d7fba6->enter($__internal_d880466dcbaad985c07c10aad0f12f03cab69dd128bd7d799c8586d487d7fba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_20184349be7aa9c45885db9a4cda628fab520a3bd2dda8d693bca958dbc86ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20184349be7aa9c45885db9a4cda628fab520a3bd2dda8d693bca958dbc86ff5->enter($__internal_20184349be7aa9c45885db9a4cda628fab520a3bd2dda8d693bca958dbc86ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_20184349be7aa9c45885db9a4cda628fab520a3bd2dda8d693bca958dbc86ff5->leave($__internal_20184349be7aa9c45885db9a4cda628fab520a3bd2dda8d693bca958dbc86ff5_prof);

        
        $__internal_d880466dcbaad985c07c10aad0f12f03cab69dd128bd7d799c8586d487d7fba6->leave($__internal_d880466dcbaad985c07c10aad0f12f03cab69dd128bd7d799c8586d487d7fba6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
