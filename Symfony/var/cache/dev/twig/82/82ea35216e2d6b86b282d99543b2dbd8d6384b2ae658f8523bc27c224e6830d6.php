<?php

/* pslieuxBundle:lieu:form.html.twig */
class __TwigTemplate_c0eb2c5b27da526cce9c6e305d3726355d3e59c69b0e3dc54f88c156ffa5045c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pslieuxBundle:lieu:form.html.twig", 1);
        $this->blocks = array(
            'categorieBlock' => array($this, 'block_categorieBlock'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c11c6fc6669d979780a2e30f69f03678024267961547c7d8ece3be4384df391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c11c6fc6669d979780a2e30f69f03678024267961547c7d8ece3be4384df391->enter($__internal_0c11c6fc6669d979780a2e30f69f03678024267961547c7d8ece3be4384df391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pslieuxBundle:lieu:form.html.twig"));

        $__internal_9be2ed77b3ada922f40030b115b9c9481d00fa9537c3749267b9483955a06f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9be2ed77b3ada922f40030b115b9c9481d00fa9537c3749267b9483955a06f12->enter($__internal_9be2ed77b3ada922f40030b115b9c9481d00fa9537c3749267b9483955a06f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pslieuxBundle:lieu:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c11c6fc6669d979780a2e30f69f03678024267961547c7d8ece3be4384df391->leave($__internal_0c11c6fc6669d979780a2e30f69f03678024267961547c7d8ece3be4384df391_prof);

        
        $__internal_9be2ed77b3ada922f40030b115b9c9481d00fa9537c3749267b9483955a06f12->leave($__internal_9be2ed77b3ada922f40030b115b9c9481d00fa9537c3749267b9483955a06f12_prof);

    }

    // line 3
    public function block_categorieBlock($context, array $blocks = array())
    {
        $__internal_f7f96517983e3d164cd9aa89a30246bdcbb97e6fd265389b26b2216a97b3d815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7f96517983e3d164cd9aa89a30246bdcbb97e6fd265389b26b2216a97b3d815->enter($__internal_f7f96517983e3d164cd9aa89a30246bdcbb97e6fd265389b26b2216a97b3d815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorieBlock"));

        $__internal_52daa0d1efbafc8f1e45dbc5278a2b7c1fd43f9a37040b8f4e870c457943719e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52daa0d1efbafc8f1e45dbc5278a2b7c1fd43f9a37040b8f4e870c457943719e->enter($__internal_52daa0d1efbafc8f1e45dbc5278a2b7c1fd43f9a37040b8f4e870c457943719e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorieBlock"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 5
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list", array("categorie" => $context["cat"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["cat"], "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_52daa0d1efbafc8f1e45dbc5278a2b7c1fd43f9a37040b8f4e870c457943719e->leave($__internal_52daa0d1efbafc8f1e45dbc5278a2b7c1fd43f9a37040b8f4e870c457943719e_prof);

        
        $__internal_f7f96517983e3d164cd9aa89a30246bdcbb97e6fd265389b26b2216a97b3d815->leave($__internal_f7f96517983e3d164cd9aa89a30246bdcbb97e6fd265389b26b2216a97b3d815_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_e843f8cd50350174b95f30bc8f33502a70c122872f8c6c0f75c815d97cd8c638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e843f8cd50350174b95f30bc8f33502a70c122872f8c6c0f75c815d97cd8c638->enter($__internal_e843f8cd50350174b95f30bc8f33502a70c122872f8c6c0f75c815d97cd8c638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_933bd441ca63feabd38c5074cbba1975f65e23ad49437e40838ddc7135ad26d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_933bd441ca63feabd38c5074cbba1975f65e23ad49437e40838ddc7135ad26d3->enter($__internal_933bd441ca63feabd38c5074cbba1975f65e23ad49437e40838ddc7135ad26d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <h3>";
        echo twig_escape_filter($this->env, ($context["action"] ?? $this->getContext($context, "action")), "html", null, true);
        echo " d'un lieu</h3>
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_933bd441ca63feabd38c5074cbba1975f65e23ad49437e40838ddc7135ad26d3->leave($__internal_933bd441ca63feabd38c5074cbba1975f65e23ad49437e40838ddc7135ad26d3_prof);

        
        $__internal_e843f8cd50350174b95f30bc8f33502a70c122872f8c6c0f75c815d97cd8c638->leave($__internal_e843f8cd50350174b95f30bc8f33502a70c122872f8c6c0f75c815d97cd8c638_prof);

    }

    public function getTemplateName()
    {
        return "pslieuxBundle:lieu:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  83 => 10,  74 => 9,  55 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block categorieBlock %}
    {% for cat in categories %}
        <li><a href=\"{{ path('list', {'categorie' : cat}) }}\">{{ cat }}</a></li>
    {% endfor %}
{% endblock %}

{% block content %}
    <h3>{{ action }} d'un lieu</h3>
    {{ form(form) }}
{% endblock %}
", "pslieuxBundle:lieu:form.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ps\\lieuxBundle/Resources/views/lieu/form.html.twig");
    }
}
