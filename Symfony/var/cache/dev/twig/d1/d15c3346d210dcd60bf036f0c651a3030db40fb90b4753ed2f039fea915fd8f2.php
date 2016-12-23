<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_e91793966c470da3f724f4a3accd7ec0f86e77c67c52bdce68e693790c47e6f5 extends Twig_Template
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
        $__internal_6250bf81a67034acbcac940df5159115468cfd0a741ddcb2c29ff49559646443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6250bf81a67034acbcac940df5159115468cfd0a741ddcb2c29ff49559646443->enter($__internal_6250bf81a67034acbcac940df5159115468cfd0a741ddcb2c29ff49559646443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_9a3e68439b20c744f725d5b8c6b6e24d6444a12aa90a9bb755438679dab5e482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a3e68439b20c744f725d5b8c6b6e24d6444a12aa90a9bb755438679dab5e482->enter($__internal_9a3e68439b20c744f725d5b8c6b6e24d6444a12aa90a9bb755438679dab5e482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6250bf81a67034acbcac940df5159115468cfd0a741ddcb2c29ff49559646443->leave($__internal_6250bf81a67034acbcac940df5159115468cfd0a741ddcb2c29ff49559646443_prof);

        
        $__internal_9a3e68439b20c744f725d5b8c6b6e24d6444a12aa90a9bb755438679dab5e482->leave($__internal_9a3e68439b20c744f725d5b8c6b6e24d6444a12aa90a9bb755438679dab5e482_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d8aa61cdf668098802d152529ed3de92282702b6ee14adc8eb0fdde7a1f11819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8aa61cdf668098802d152529ed3de92282702b6ee14adc8eb0fdde7a1f11819->enter($__internal_d8aa61cdf668098802d152529ed3de92282702b6ee14adc8eb0fdde7a1f11819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_21203bed0e148bc63139f678217f3d0aedab98c230b26c0e19d5d240d9fefe86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21203bed0e148bc63139f678217f3d0aedab98c230b26c0e19d5d240d9fefe86->enter($__internal_21203bed0e148bc63139f678217f3d0aedab98c230b26c0e19d5d240d9fefe86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_21203bed0e148bc63139f678217f3d0aedab98c230b26c0e19d5d240d9fefe86->leave($__internal_21203bed0e148bc63139f678217f3d0aedab98c230b26c0e19d5d240d9fefe86_prof);

        
        $__internal_d8aa61cdf668098802d152529ed3de92282702b6ee14adc8eb0fdde7a1f11819->leave($__internal_d8aa61cdf668098802d152529ed3de92282702b6ee14adc8eb0fdde7a1f11819_prof);

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
