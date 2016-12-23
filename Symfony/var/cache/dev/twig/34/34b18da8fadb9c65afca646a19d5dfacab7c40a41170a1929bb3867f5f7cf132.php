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
        $__internal_8873b497b717b4220dab7f3572acfc6659bdf3760d180e287a7cbf143a9a5ca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8873b497b717b4220dab7f3572acfc6659bdf3760d180e287a7cbf143a9a5ca7->enter($__internal_8873b497b717b4220dab7f3572acfc6659bdf3760d180e287a7cbf143a9a5ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_101120c6c9cbc901021f4da38f1060621b73cbd9d91bd31cdd2948c50c464a81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_101120c6c9cbc901021f4da38f1060621b73cbd9d91bd31cdd2948c50c464a81->enter($__internal_101120c6c9cbc901021f4da38f1060621b73cbd9d91bd31cdd2948c50c464a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8873b497b717b4220dab7f3572acfc6659bdf3760d180e287a7cbf143a9a5ca7->leave($__internal_8873b497b717b4220dab7f3572acfc6659bdf3760d180e287a7cbf143a9a5ca7_prof);

        
        $__internal_101120c6c9cbc901021f4da38f1060621b73cbd9d91bd31cdd2948c50c464a81->leave($__internal_101120c6c9cbc901021f4da38f1060621b73cbd9d91bd31cdd2948c50c464a81_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ba15be26e50be847da64e261b261dd37474245926a3a91412c0cab525a2b47fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba15be26e50be847da64e261b261dd37474245926a3a91412c0cab525a2b47fe->enter($__internal_ba15be26e50be847da64e261b261dd37474245926a3a91412c0cab525a2b47fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e5e6dde89b27f76f9bffe56c07dd244590635522483ba3ace1106a5fab898cb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e6dde89b27f76f9bffe56c07dd244590635522483ba3ace1106a5fab898cb5->enter($__internal_e5e6dde89b27f76f9bffe56c07dd244590635522483ba3ace1106a5fab898cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e5e6dde89b27f76f9bffe56c07dd244590635522483ba3ace1106a5fab898cb5->leave($__internal_e5e6dde89b27f76f9bffe56c07dd244590635522483ba3ace1106a5fab898cb5_prof);

        
        $__internal_ba15be26e50be847da64e261b261dd37474245926a3a91412c0cab525a2b47fe->leave($__internal_ba15be26e50be847da64e261b261dd37474245926a3a91412c0cab525a2b47fe_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a10e980784e96af0f2f709bec055511600d21aa7ee13279594aee396da4f22c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a10e980784e96af0f2f709bec055511600d21aa7ee13279594aee396da4f22c1->enter($__internal_a10e980784e96af0f2f709bec055511600d21aa7ee13279594aee396da4f22c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d08119f1e1cefe90ea5b6c71870d8945ca2221786b586f278cf9ef1864f8cc73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d08119f1e1cefe90ea5b6c71870d8945ca2221786b586f278cf9ef1864f8cc73->enter($__internal_d08119f1e1cefe90ea5b6c71870d8945ca2221786b586f278cf9ef1864f8cc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d08119f1e1cefe90ea5b6c71870d8945ca2221786b586f278cf9ef1864f8cc73->leave($__internal_d08119f1e1cefe90ea5b6c71870d8945ca2221786b586f278cf9ef1864f8cc73_prof);

        
        $__internal_a10e980784e96af0f2f709bec055511600d21aa7ee13279594aee396da4f22c1->leave($__internal_a10e980784e96af0f2f709bec055511600d21aa7ee13279594aee396da4f22c1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5792866cfb9cf44d1fa94c5d3036338d50d7ca62310c5258da96894f01e4537e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5792866cfb9cf44d1fa94c5d3036338d50d7ca62310c5258da96894f01e4537e->enter($__internal_5792866cfb9cf44d1fa94c5d3036338d50d7ca62310c5258da96894f01e4537e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_28062350aba3174007fd946faeb10083a0a4b17a14fdaddd94722d9a7206b1c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28062350aba3174007fd946faeb10083a0a4b17a14fdaddd94722d9a7206b1c6->enter($__internal_28062350aba3174007fd946faeb10083a0a4b17a14fdaddd94722d9a7206b1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_28062350aba3174007fd946faeb10083a0a4b17a14fdaddd94722d9a7206b1c6->leave($__internal_28062350aba3174007fd946faeb10083a0a4b17a14fdaddd94722d9a7206b1c6_prof);

        
        $__internal_5792866cfb9cf44d1fa94c5d3036338d50d7ca62310c5258da96894f01e4537e->leave($__internal_5792866cfb9cf44d1fa94c5d3036338d50d7ca62310c5258da96894f01e4537e_prof);

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
