<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_067358526f943a68f10237ee6a728d9cb844ce4ec1a626c365fa34428af110b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_67ec2a30a2f16cc567e99145779fe52316f94f4d27ba8694a5470ce4b5efb530 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67ec2a30a2f16cc567e99145779fe52316f94f4d27ba8694a5470ce4b5efb530->enter($__internal_67ec2a30a2f16cc567e99145779fe52316f94f4d27ba8694a5470ce4b5efb530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a14ea35eb820050ac3cb3a76d098e2fae70c62bcbf0e55a21b984975a29b9b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a14ea35eb820050ac3cb3a76d098e2fae70c62bcbf0e55a21b984975a29b9b30->enter($__internal_a14ea35eb820050ac3cb3a76d098e2fae70c62bcbf0e55a21b984975a29b9b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67ec2a30a2f16cc567e99145779fe52316f94f4d27ba8694a5470ce4b5efb530->leave($__internal_67ec2a30a2f16cc567e99145779fe52316f94f4d27ba8694a5470ce4b5efb530_prof);

        
        $__internal_a14ea35eb820050ac3cb3a76d098e2fae70c62bcbf0e55a21b984975a29b9b30->leave($__internal_a14ea35eb820050ac3cb3a76d098e2fae70c62bcbf0e55a21b984975a29b9b30_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_94097118eb1b59ca95bad34a551e7dc9b2f5e11bee55cce472444fa6c1809cf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94097118eb1b59ca95bad34a551e7dc9b2f5e11bee55cce472444fa6c1809cf6->enter($__internal_94097118eb1b59ca95bad34a551e7dc9b2f5e11bee55cce472444fa6c1809cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_edf6f0fdab1fcae8c13da0343e47f964faae95479d3a3d75bbf2a07de4530b69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edf6f0fdab1fcae8c13da0343e47f964faae95479d3a3d75bbf2a07de4530b69->enter($__internal_edf6f0fdab1fcae8c13da0343e47f964faae95479d3a3d75bbf2a07de4530b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_edf6f0fdab1fcae8c13da0343e47f964faae95479d3a3d75bbf2a07de4530b69->leave($__internal_edf6f0fdab1fcae8c13da0343e47f964faae95479d3a3d75bbf2a07de4530b69_prof);

        
        $__internal_94097118eb1b59ca95bad34a551e7dc9b2f5e11bee55cce472444fa6c1809cf6->leave($__internal_94097118eb1b59ca95bad34a551e7dc9b2f5e11bee55cce472444fa6c1809cf6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
