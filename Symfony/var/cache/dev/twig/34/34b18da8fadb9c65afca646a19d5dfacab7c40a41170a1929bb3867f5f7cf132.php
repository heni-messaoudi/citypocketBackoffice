<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_3ab67372d8e85cf7a59a038f22cb65bc8660c23e3fa8f351dd822c625b8eb6b5 extends Twig_Template
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
        $__internal_915a14430b496d2ba32b2e89cff003cdb022697bac3738a69f3672871676e330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_915a14430b496d2ba32b2e89cff003cdb022697bac3738a69f3672871676e330->enter($__internal_915a14430b496d2ba32b2e89cff003cdb022697bac3738a69f3672871676e330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_503834b013d2c33e984d3fa7a71f0168b041dfa30b972d82c733ab3d38221425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503834b013d2c33e984d3fa7a71f0168b041dfa30b972d82c733ab3d38221425->enter($__internal_503834b013d2c33e984d3fa7a71f0168b041dfa30b972d82c733ab3d38221425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_915a14430b496d2ba32b2e89cff003cdb022697bac3738a69f3672871676e330->leave($__internal_915a14430b496d2ba32b2e89cff003cdb022697bac3738a69f3672871676e330_prof);

        
        $__internal_503834b013d2c33e984d3fa7a71f0168b041dfa30b972d82c733ab3d38221425->leave($__internal_503834b013d2c33e984d3fa7a71f0168b041dfa30b972d82c733ab3d38221425_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_474bb2bfb5b0ff8c00357dfd19ede720c1c9282a5e451b3f516f4946635e0b07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_474bb2bfb5b0ff8c00357dfd19ede720c1c9282a5e451b3f516f4946635e0b07->enter($__internal_474bb2bfb5b0ff8c00357dfd19ede720c1c9282a5e451b3f516f4946635e0b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0161a610ec8277905ccfaf3d429bbeb68b3fd76654e5fbc618be1bab363c0bcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0161a610ec8277905ccfaf3d429bbeb68b3fd76654e5fbc618be1bab363c0bcb->enter($__internal_0161a610ec8277905ccfaf3d429bbeb68b3fd76654e5fbc618be1bab363c0bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0161a610ec8277905ccfaf3d429bbeb68b3fd76654e5fbc618be1bab363c0bcb->leave($__internal_0161a610ec8277905ccfaf3d429bbeb68b3fd76654e5fbc618be1bab363c0bcb_prof);

        
        $__internal_474bb2bfb5b0ff8c00357dfd19ede720c1c9282a5e451b3f516f4946635e0b07->leave($__internal_474bb2bfb5b0ff8c00357dfd19ede720c1c9282a5e451b3f516f4946635e0b07_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_215bec9a315151815a2e1a6b78b8408e3b52f7b80248aa09740967f4e1ee4ce1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_215bec9a315151815a2e1a6b78b8408e3b52f7b80248aa09740967f4e1ee4ce1->enter($__internal_215bec9a315151815a2e1a6b78b8408e3b52f7b80248aa09740967f4e1ee4ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c71e98a88501f2817a946e259adf27b856a6211c3cc5e4e0b4acfbd23fce9d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c71e98a88501f2817a946e259adf27b856a6211c3cc5e4e0b4acfbd23fce9d6d->enter($__internal_c71e98a88501f2817a946e259adf27b856a6211c3cc5e4e0b4acfbd23fce9d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c71e98a88501f2817a946e259adf27b856a6211c3cc5e4e0b4acfbd23fce9d6d->leave($__internal_c71e98a88501f2817a946e259adf27b856a6211c3cc5e4e0b4acfbd23fce9d6d_prof);

        
        $__internal_215bec9a315151815a2e1a6b78b8408e3b52f7b80248aa09740967f4e1ee4ce1->leave($__internal_215bec9a315151815a2e1a6b78b8408e3b52f7b80248aa09740967f4e1ee4ce1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9fbc69fe5577f5cce87aa7ae0ffbf19341d4a7695f67b3f2dbfe7c127f399ec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fbc69fe5577f5cce87aa7ae0ffbf19341d4a7695f67b3f2dbfe7c127f399ec0->enter($__internal_9fbc69fe5577f5cce87aa7ae0ffbf19341d4a7695f67b3f2dbfe7c127f399ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0c427b6ed14b41f77c2c0fd0aabe732a3a83e566359ed5d30660a973f7e8f405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c427b6ed14b41f77c2c0fd0aabe732a3a83e566359ed5d30660a973f7e8f405->enter($__internal_0c427b6ed14b41f77c2c0fd0aabe732a3a83e566359ed5d30660a973f7e8f405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0c427b6ed14b41f77c2c0fd0aabe732a3a83e566359ed5d30660a973f7e8f405->leave($__internal_0c427b6ed14b41f77c2c0fd0aabe732a3a83e566359ed5d30660a973f7e8f405_prof);

        
        $__internal_9fbc69fe5577f5cce87aa7ae0ffbf19341d4a7695f67b3f2dbfe7c127f399ec0->leave($__internal_9fbc69fe5577f5cce87aa7ae0ffbf19341d4a7695f67b3f2dbfe7c127f399ec0_prof);

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
