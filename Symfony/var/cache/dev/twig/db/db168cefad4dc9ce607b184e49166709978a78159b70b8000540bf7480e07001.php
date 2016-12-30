<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_262aaccab338f24434c10893e2769214bc3d3639e92b79bb13e5de69fc599acf extends Twig_Template
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
        $__internal_cd5b8ea0c1af7ee4cd7f6d575c5a29199cd1ea93b57db46ffc8dff5369da2009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd5b8ea0c1af7ee4cd7f6d575c5a29199cd1ea93b57db46ffc8dff5369da2009->enter($__internal_cd5b8ea0c1af7ee4cd7f6d575c5a29199cd1ea93b57db46ffc8dff5369da2009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cb8bb6a9cd1f411215c8e06003128db3720d4e78a96867d26fdc112d52eb7bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb8bb6a9cd1f411215c8e06003128db3720d4e78a96867d26fdc112d52eb7bf3->enter($__internal_cb8bb6a9cd1f411215c8e06003128db3720d4e78a96867d26fdc112d52eb7bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd5b8ea0c1af7ee4cd7f6d575c5a29199cd1ea93b57db46ffc8dff5369da2009->leave($__internal_cd5b8ea0c1af7ee4cd7f6d575c5a29199cd1ea93b57db46ffc8dff5369da2009_prof);

        
        $__internal_cb8bb6a9cd1f411215c8e06003128db3720d4e78a96867d26fdc112d52eb7bf3->leave($__internal_cb8bb6a9cd1f411215c8e06003128db3720d4e78a96867d26fdc112d52eb7bf3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ac9ad88c1e128b4e6099528d9499656b8d8a9c4e58f9007cb0fe065b80d59c2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac9ad88c1e128b4e6099528d9499656b8d8a9c4e58f9007cb0fe065b80d59c2c->enter($__internal_ac9ad88c1e128b4e6099528d9499656b8d8a9c4e58f9007cb0fe065b80d59c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_850a7f2272e2d1439da3c4aa6b22ae81bdeeea5f8d289302dbd731a6fec62e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_850a7f2272e2d1439da3c4aa6b22ae81bdeeea5f8d289302dbd731a6fec62e58->enter($__internal_850a7f2272e2d1439da3c4aa6b22ae81bdeeea5f8d289302dbd731a6fec62e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_850a7f2272e2d1439da3c4aa6b22ae81bdeeea5f8d289302dbd731a6fec62e58->leave($__internal_850a7f2272e2d1439da3c4aa6b22ae81bdeeea5f8d289302dbd731a6fec62e58_prof);

        
        $__internal_ac9ad88c1e128b4e6099528d9499656b8d8a9c4e58f9007cb0fe065b80d59c2c->leave($__internal_ac9ad88c1e128b4e6099528d9499656b8d8a9c4e58f9007cb0fe065b80d59c2c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a1c0bd324e9293cae2ea79a1aa8c9509e120021cdfc59ee9401d80d253c94af2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1c0bd324e9293cae2ea79a1aa8c9509e120021cdfc59ee9401d80d253c94af2->enter($__internal_a1c0bd324e9293cae2ea79a1aa8c9509e120021cdfc59ee9401d80d253c94af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8fdac7bc22ac308fb28dd7b569a2056e42503a0106bc20180d23e803fad8cf96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fdac7bc22ac308fb28dd7b569a2056e42503a0106bc20180d23e803fad8cf96->enter($__internal_8fdac7bc22ac308fb28dd7b569a2056e42503a0106bc20180d23e803fad8cf96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8fdac7bc22ac308fb28dd7b569a2056e42503a0106bc20180d23e803fad8cf96->leave($__internal_8fdac7bc22ac308fb28dd7b569a2056e42503a0106bc20180d23e803fad8cf96_prof);

        
        $__internal_a1c0bd324e9293cae2ea79a1aa8c9509e120021cdfc59ee9401d80d253c94af2->leave($__internal_a1c0bd324e9293cae2ea79a1aa8c9509e120021cdfc59ee9401d80d253c94af2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e42de6571494dce208062326cd6a21a5ed248270b468a0334797f36f98939e8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e42de6571494dce208062326cd6a21a5ed248270b468a0334797f36f98939e8e->enter($__internal_e42de6571494dce208062326cd6a21a5ed248270b468a0334797f36f98939e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_124aaf2f8083fca5e28e731784776d5c048ca278100b22bbe2539750df7f4f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_124aaf2f8083fca5e28e731784776d5c048ca278100b22bbe2539750df7f4f9f->enter($__internal_124aaf2f8083fca5e28e731784776d5c048ca278100b22bbe2539750df7f4f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_124aaf2f8083fca5e28e731784776d5c048ca278100b22bbe2539750df7f4f9f->leave($__internal_124aaf2f8083fca5e28e731784776d5c048ca278100b22bbe2539750df7f4f9f_prof);

        
        $__internal_e42de6571494dce208062326cd6a21a5ed248270b468a0334797f36f98939e8e->leave($__internal_e42de6571494dce208062326cd6a21a5ed248270b468a0334797f36f98939e8e_prof);

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
