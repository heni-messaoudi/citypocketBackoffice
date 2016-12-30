<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_aa97c35fd47acd1c2a5034b83f72796079ceca75ead2bf3ff34c8af50a9c238c extends Twig_Template
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
        $__internal_eaf8043d06ef04343d198b5a6f83f462156ab9420259d66fd15138325f273047 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaf8043d06ef04343d198b5a6f83f462156ab9420259d66fd15138325f273047->enter($__internal_eaf8043d06ef04343d198b5a6f83f462156ab9420259d66fd15138325f273047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d6449e84644eb2b0a4bb3ef4a742b9d82804574f6bd5625c3ce391c15c21035c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6449e84644eb2b0a4bb3ef4a742b9d82804574f6bd5625c3ce391c15c21035c->enter($__internal_d6449e84644eb2b0a4bb3ef4a742b9d82804574f6bd5625c3ce391c15c21035c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaf8043d06ef04343d198b5a6f83f462156ab9420259d66fd15138325f273047->leave($__internal_eaf8043d06ef04343d198b5a6f83f462156ab9420259d66fd15138325f273047_prof);

        
        $__internal_d6449e84644eb2b0a4bb3ef4a742b9d82804574f6bd5625c3ce391c15c21035c->leave($__internal_d6449e84644eb2b0a4bb3ef4a742b9d82804574f6bd5625c3ce391c15c21035c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dc0d685d62842a713da4ac4e85aa9592e38250653aff36ae160a0b8ff56c571f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc0d685d62842a713da4ac4e85aa9592e38250653aff36ae160a0b8ff56c571f->enter($__internal_dc0d685d62842a713da4ac4e85aa9592e38250653aff36ae160a0b8ff56c571f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a68f0d26d55b16678aeb10f1dcaaad575fdd78b5051351b0a0621c9453e8603f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a68f0d26d55b16678aeb10f1dcaaad575fdd78b5051351b0a0621c9453e8603f->enter($__internal_a68f0d26d55b16678aeb10f1dcaaad575fdd78b5051351b0a0621c9453e8603f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_a68f0d26d55b16678aeb10f1dcaaad575fdd78b5051351b0a0621c9453e8603f->leave($__internal_a68f0d26d55b16678aeb10f1dcaaad575fdd78b5051351b0a0621c9453e8603f_prof);

        
        $__internal_dc0d685d62842a713da4ac4e85aa9592e38250653aff36ae160a0b8ff56c571f->leave($__internal_dc0d685d62842a713da4ac4e85aa9592e38250653aff36ae160a0b8ff56c571f_prof);

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
