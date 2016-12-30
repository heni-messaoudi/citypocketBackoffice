<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_840e9fc1325e8dcc410ff912bd793d76bcf9f9f8bf892207c9bdc4163808ef5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_b610186fc693df24f57220c8b49bf0226ffc56badc1e19a009499b32a149ebfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b610186fc693df24f57220c8b49bf0226ffc56badc1e19a009499b32a149ebfa->enter($__internal_b610186fc693df24f57220c8b49bf0226ffc56badc1e19a009499b32a149ebfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_79915e02991d46144ff2f50d83781b1cf0bbce0b31a8cf5f9921a5e377df1b5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79915e02991d46144ff2f50d83781b1cf0bbce0b31a8cf5f9921a5e377df1b5d->enter($__internal_79915e02991d46144ff2f50d83781b1cf0bbce0b31a8cf5f9921a5e377df1b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b610186fc693df24f57220c8b49bf0226ffc56badc1e19a009499b32a149ebfa->leave($__internal_b610186fc693df24f57220c8b49bf0226ffc56badc1e19a009499b32a149ebfa_prof);

        
        $__internal_79915e02991d46144ff2f50d83781b1cf0bbce0b31a8cf5f9921a5e377df1b5d->leave($__internal_79915e02991d46144ff2f50d83781b1cf0bbce0b31a8cf5f9921a5e377df1b5d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_93f497b7aed350851ecd4097d39b10b8409de9788be27fec094ec4352d06a5f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93f497b7aed350851ecd4097d39b10b8409de9788be27fec094ec4352d06a5f5->enter($__internal_93f497b7aed350851ecd4097d39b10b8409de9788be27fec094ec4352d06a5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3129d13d8c74f5e3c03b87963c97e89899d2af5fcea6b5ff5f1d0aabb41f74bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3129d13d8c74f5e3c03b87963c97e89899d2af5fcea6b5ff5f1d0aabb41f74bc->enter($__internal_3129d13d8c74f5e3c03b87963c97e89899d2af5fcea6b5ff5f1d0aabb41f74bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3129d13d8c74f5e3c03b87963c97e89899d2af5fcea6b5ff5f1d0aabb41f74bc->leave($__internal_3129d13d8c74f5e3c03b87963c97e89899d2af5fcea6b5ff5f1d0aabb41f74bc_prof);

        
        $__internal_93f497b7aed350851ecd4097d39b10b8409de9788be27fec094ec4352d06a5f5->leave($__internal_93f497b7aed350851ecd4097d39b10b8409de9788be27fec094ec4352d06a5f5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c6866be5ebaa3a3a848737e98028e6e1a08fb4f9b81c5b716f938bce9ab6e8e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6866be5ebaa3a3a848737e98028e6e1a08fb4f9b81c5b716f938bce9ab6e8e4->enter($__internal_c6866be5ebaa3a3a848737e98028e6e1a08fb4f9b81c5b716f938bce9ab6e8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d5c4bdd9172b74b5799d13588412182557c1a1fbae53cedbff5196d19917b804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c4bdd9172b74b5799d13588412182557c1a1fbae53cedbff5196d19917b804->enter($__internal_d5c4bdd9172b74b5799d13588412182557c1a1fbae53cedbff5196d19917b804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d5c4bdd9172b74b5799d13588412182557c1a1fbae53cedbff5196d19917b804->leave($__internal_d5c4bdd9172b74b5799d13588412182557c1a1fbae53cedbff5196d19917b804_prof);

        
        $__internal_c6866be5ebaa3a3a848737e98028e6e1a08fb4f9b81c5b716f938bce9ab6e8e4->leave($__internal_c6866be5ebaa3a3a848737e98028e6e1a08fb4f9b81c5b716f938bce9ab6e8e4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a4ee8723df482c1c626dd5427c0694519b95f61ed2509d201d47fdcdf25f5083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4ee8723df482c1c626dd5427c0694519b95f61ed2509d201d47fdcdf25f5083->enter($__internal_a4ee8723df482c1c626dd5427c0694519b95f61ed2509d201d47fdcdf25f5083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_242276a628ffb7c268091eebff4611f1b7d50cefe2df6410dc10cbb311772b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_242276a628ffb7c268091eebff4611f1b7d50cefe2df6410dc10cbb311772b4c->enter($__internal_242276a628ffb7c268091eebff4611f1b7d50cefe2df6410dc10cbb311772b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_242276a628ffb7c268091eebff4611f1b7d50cefe2df6410dc10cbb311772b4c->leave($__internal_242276a628ffb7c268091eebff4611f1b7d50cefe2df6410dc10cbb311772b4c_prof);

        
        $__internal_a4ee8723df482c1c626dd5427c0694519b95f61ed2509d201d47fdcdf25f5083->leave($__internal_a4ee8723df482c1c626dd5427c0694519b95f61ed2509d201d47fdcdf25f5083_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
