<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_b38cb9eb5943ab6f1676f7c3386c6da7403de36ce7f16f1eb48e4a4d45452ad3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e72d3f39fc97356e5a93e43d4ef61bf69777c1dc6bc59c8dd308a14cbd7b0be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e72d3f39fc97356e5a93e43d4ef61bf69777c1dc6bc59c8dd308a14cbd7b0be->enter($__internal_5e72d3f39fc97356e5a93e43d4ef61bf69777c1dc6bc59c8dd308a14cbd7b0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_12214385955f513e0eb87093568ab51e769281ca1d58c61818b4762744b4ca3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12214385955f513e0eb87093568ab51e769281ca1d58c61818b4762744b4ca3a->enter($__internal_12214385955f513e0eb87093568ab51e769281ca1d58c61818b4762744b4ca3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e72d3f39fc97356e5a93e43d4ef61bf69777c1dc6bc59c8dd308a14cbd7b0be->leave($__internal_5e72d3f39fc97356e5a93e43d4ef61bf69777c1dc6bc59c8dd308a14cbd7b0be_prof);

        
        $__internal_12214385955f513e0eb87093568ab51e769281ca1d58c61818b4762744b4ca3a->leave($__internal_12214385955f513e0eb87093568ab51e769281ca1d58c61818b4762744b4ca3a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f234a6c1349d63d73edde187040bd8fc3ad8ad1f64a3c5a129fabe2688781688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f234a6c1349d63d73edde187040bd8fc3ad8ad1f64a3c5a129fabe2688781688->enter($__internal_f234a6c1349d63d73edde187040bd8fc3ad8ad1f64a3c5a129fabe2688781688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a6a32c73c59fabee3a862d532cc6431b57216417362c81f0226884604c9f1f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6a32c73c59fabee3a862d532cc6431b57216417362c81f0226884604c9f1f5f->enter($__internal_a6a32c73c59fabee3a862d532cc6431b57216417362c81f0226884604c9f1f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_a6a32c73c59fabee3a862d532cc6431b57216417362c81f0226884604c9f1f5f->leave($__internal_a6a32c73c59fabee3a862d532cc6431b57216417362c81f0226884604c9f1f5f_prof);

        
        $__internal_f234a6c1349d63d73edde187040bd8fc3ad8ad1f64a3c5a129fabe2688781688->leave($__internal_f234a6c1349d63d73edde187040bd8fc3ad8ad1f64a3c5a129fabe2688781688_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
