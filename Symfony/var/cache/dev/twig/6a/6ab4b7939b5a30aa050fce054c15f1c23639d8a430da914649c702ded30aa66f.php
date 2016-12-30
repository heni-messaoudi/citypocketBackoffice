<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_a62238854b6bc776e645d052da574cb34576ab48fbd85809524809252dda0e1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81729805525eff00f58742ea0fa8b22528817c457355d9f0f0b52a825284f195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81729805525eff00f58742ea0fa8b22528817c457355d9f0f0b52a825284f195->enter($__internal_81729805525eff00f58742ea0fa8b22528817c457355d9f0f0b52a825284f195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_13877e0fb2384056d6726d856fb8b196ac523ff3cea1cceeb350566d653a1809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13877e0fb2384056d6726d856fb8b196ac523ff3cea1cceeb350566d653a1809->enter($__internal_13877e0fb2384056d6726d856fb8b196ac523ff3cea1cceeb350566d653a1809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81729805525eff00f58742ea0fa8b22528817c457355d9f0f0b52a825284f195->leave($__internal_81729805525eff00f58742ea0fa8b22528817c457355d9f0f0b52a825284f195_prof);

        
        $__internal_13877e0fb2384056d6726d856fb8b196ac523ff3cea1cceeb350566d653a1809->leave($__internal_13877e0fb2384056d6726d856fb8b196ac523ff3cea1cceeb350566d653a1809_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_78f70e3a6864f2a16715da8db1946a72be05898f54b71652d709f98233a646df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78f70e3a6864f2a16715da8db1946a72be05898f54b71652d709f98233a646df->enter($__internal_78f70e3a6864f2a16715da8db1946a72be05898f54b71652d709f98233a646df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cabd3b5b91c9e15d7b2f595544acdcad254345210e6ad9177a8247ae8db527e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cabd3b5b91c9e15d7b2f595544acdcad254345210e6ad9177a8247ae8db527e5->enter($__internal_cabd3b5b91c9e15d7b2f595544acdcad254345210e6ad9177a8247ae8db527e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_cabd3b5b91c9e15d7b2f595544acdcad254345210e6ad9177a8247ae8db527e5->leave($__internal_cabd3b5b91c9e15d7b2f595544acdcad254345210e6ad9177a8247ae8db527e5_prof);

        
        $__internal_78f70e3a6864f2a16715da8db1946a72be05898f54b71652d709f98233a646df->leave($__internal_78f70e3a6864f2a16715da8db1946a72be05898f54b71652d709f98233a646df_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4dda7130db6637b9720dde41f2bb209497773cd2b5dacf86bb211ab9d02e8fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4dda7130db6637b9720dde41f2bb209497773cd2b5dacf86bb211ab9d02e8fc->enter($__internal_f4dda7130db6637b9720dde41f2bb209497773cd2b5dacf86bb211ab9d02e8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cac64b324f5389d6eeb297dda31bfab2aaac1aeefc1dce23e514c7939be3c31f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac64b324f5389d6eeb297dda31bfab2aaac1aeefc1dce23e514c7939be3c31f->enter($__internal_cac64b324f5389d6eeb297dda31bfab2aaac1aeefc1dce23e514c7939be3c31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_cac64b324f5389d6eeb297dda31bfab2aaac1aeefc1dce23e514c7939be3c31f->leave($__internal_cac64b324f5389d6eeb297dda31bfab2aaac1aeefc1dce23e514c7939be3c31f_prof);

        
        $__internal_f4dda7130db6637b9720dde41f2bb209497773cd2b5dacf86bb211ab9d02e8fc->leave($__internal_f4dda7130db6637b9720dde41f2bb209497773cd2b5dacf86bb211ab9d02e8fc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
