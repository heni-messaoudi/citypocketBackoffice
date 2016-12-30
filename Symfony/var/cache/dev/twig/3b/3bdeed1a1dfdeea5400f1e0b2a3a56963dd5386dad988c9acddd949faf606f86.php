<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_5bce82e8ef2c745b1c230561591693a4a52b7bc25f47e274abae69ebb2adda5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_eaf45980e89ac477f6fbdd14052206baaca3f97f90a85ad904e9ac83e95eb866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaf45980e89ac477f6fbdd14052206baaca3f97f90a85ad904e9ac83e95eb866->enter($__internal_eaf45980e89ac477f6fbdd14052206baaca3f97f90a85ad904e9ac83e95eb866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_993774bf329463cf614f241b5ce2e4bbb895b129d6508752673257b7be2166da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_993774bf329463cf614f241b5ce2e4bbb895b129d6508752673257b7be2166da->enter($__internal_993774bf329463cf614f241b5ce2e4bbb895b129d6508752673257b7be2166da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaf45980e89ac477f6fbdd14052206baaca3f97f90a85ad904e9ac83e95eb866->leave($__internal_eaf45980e89ac477f6fbdd14052206baaca3f97f90a85ad904e9ac83e95eb866_prof);

        
        $__internal_993774bf329463cf614f241b5ce2e4bbb895b129d6508752673257b7be2166da->leave($__internal_993774bf329463cf614f241b5ce2e4bbb895b129d6508752673257b7be2166da_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5c98a6c5660441c286545d8e3c5eccff96f79745f5623a5cc36c23c340438863 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c98a6c5660441c286545d8e3c5eccff96f79745f5623a5cc36c23c340438863->enter($__internal_5c98a6c5660441c286545d8e3c5eccff96f79745f5623a5cc36c23c340438863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_77fa4775d366b56f0783cd159b23b76278e5a550f1b559d6ac3065fb23589459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77fa4775d366b56f0783cd159b23b76278e5a550f1b559d6ac3065fb23589459->enter($__internal_77fa4775d366b56f0783cd159b23b76278e5a550f1b559d6ac3065fb23589459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_77fa4775d366b56f0783cd159b23b76278e5a550f1b559d6ac3065fb23589459->leave($__internal_77fa4775d366b56f0783cd159b23b76278e5a550f1b559d6ac3065fb23589459_prof);

        
        $__internal_5c98a6c5660441c286545d8e3c5eccff96f79745f5623a5cc36c23c340438863->leave($__internal_5c98a6c5660441c286545d8e3c5eccff96f79745f5623a5cc36c23c340438863_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7e1254d5f602b8ba3efa74c8b0093ec2d2f6215eb9d99de7aa8a66f8f270ae66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e1254d5f602b8ba3efa74c8b0093ec2d2f6215eb9d99de7aa8a66f8f270ae66->enter($__internal_7e1254d5f602b8ba3efa74c8b0093ec2d2f6215eb9d99de7aa8a66f8f270ae66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1deba6d297c41475626e8705163fe021e39da026508ee7d50c2340b53e7b78fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1deba6d297c41475626e8705163fe021e39da026508ee7d50c2340b53e7b78fb->enter($__internal_1deba6d297c41475626e8705163fe021e39da026508ee7d50c2340b53e7b78fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1deba6d297c41475626e8705163fe021e39da026508ee7d50c2340b53e7b78fb->leave($__internal_1deba6d297c41475626e8705163fe021e39da026508ee7d50c2340b53e7b78fb_prof);

        
        $__internal_7e1254d5f602b8ba3efa74c8b0093ec2d2f6215eb9d99de7aa8a66f8f270ae66->leave($__internal_7e1254d5f602b8ba3efa74c8b0093ec2d2f6215eb9d99de7aa8a66f8f270ae66_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b01cc900e6b3b38e3c192a9ee7e15afef0c90600236642fdc48521b9628575fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b01cc900e6b3b38e3c192a9ee7e15afef0c90600236642fdc48521b9628575fe->enter($__internal_b01cc900e6b3b38e3c192a9ee7e15afef0c90600236642fdc48521b9628575fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aee4c2e2e0352503b286c277ec3ce9b610cba13e796d4d335b65be0b5c1a7961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee4c2e2e0352503b286c277ec3ce9b610cba13e796d4d335b65be0b5c1a7961->enter($__internal_aee4c2e2e0352503b286c277ec3ce9b610cba13e796d4d335b65be0b5c1a7961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_aee4c2e2e0352503b286c277ec3ce9b610cba13e796d4d335b65be0b5c1a7961->leave($__internal_aee4c2e2e0352503b286c277ec3ce9b610cba13e796d4d335b65be0b5c1a7961_prof);

        
        $__internal_b01cc900e6b3b38e3c192a9ee7e15afef0c90600236642fdc48521b9628575fe->leave($__internal_b01cc900e6b3b38e3c192a9ee7e15afef0c90600236642fdc48521b9628575fe_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
