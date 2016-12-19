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
        $__internal_85aa9939d941035ac58e73f6b7492b651553d77f0200f9851530ddc6e4983123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85aa9939d941035ac58e73f6b7492b651553d77f0200f9851530ddc6e4983123->enter($__internal_85aa9939d941035ac58e73f6b7492b651553d77f0200f9851530ddc6e4983123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_21a728fa35889d6733a4cfb4f448fe998ac82323a7831c0aeb5d3cdfd0306128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a728fa35889d6733a4cfb4f448fe998ac82323a7831c0aeb5d3cdfd0306128->enter($__internal_21a728fa35889d6733a4cfb4f448fe998ac82323a7831c0aeb5d3cdfd0306128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85aa9939d941035ac58e73f6b7492b651553d77f0200f9851530ddc6e4983123->leave($__internal_85aa9939d941035ac58e73f6b7492b651553d77f0200f9851530ddc6e4983123_prof);

        
        $__internal_21a728fa35889d6733a4cfb4f448fe998ac82323a7831c0aeb5d3cdfd0306128->leave($__internal_21a728fa35889d6733a4cfb4f448fe998ac82323a7831c0aeb5d3cdfd0306128_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8e68a7d75ae3ae61078df11184b2b0c7eb22d84a92bf80db048431c0787973d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e68a7d75ae3ae61078df11184b2b0c7eb22d84a92bf80db048431c0787973d8->enter($__internal_8e68a7d75ae3ae61078df11184b2b0c7eb22d84a92bf80db048431c0787973d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_58aa1c3b3e3585064d0ca7f77d8957b49500dc2b40a2ec4e7cd511cc5f12e4d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58aa1c3b3e3585064d0ca7f77d8957b49500dc2b40a2ec4e7cd511cc5f12e4d6->enter($__internal_58aa1c3b3e3585064d0ca7f77d8957b49500dc2b40a2ec4e7cd511cc5f12e4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_58aa1c3b3e3585064d0ca7f77d8957b49500dc2b40a2ec4e7cd511cc5f12e4d6->leave($__internal_58aa1c3b3e3585064d0ca7f77d8957b49500dc2b40a2ec4e7cd511cc5f12e4d6_prof);

        
        $__internal_8e68a7d75ae3ae61078df11184b2b0c7eb22d84a92bf80db048431c0787973d8->leave($__internal_8e68a7d75ae3ae61078df11184b2b0c7eb22d84a92bf80db048431c0787973d8_prof);

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
