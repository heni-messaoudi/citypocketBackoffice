<?php

/* pslieuxBundle:lieu:view.html.twig */
class __TwigTemplate_1e86b63896a7f624ed14c85e1c3feb425b8236dee3fad803acc5fa91da2c6196 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pslieuxBundle:lieu:view.html.twig", 1);
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
        $__internal_caac3e07e6a281171dad03fd643becafcdc836e77490ef3baf1ab90cc953c1a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caac3e07e6a281171dad03fd643becafcdc836e77490ef3baf1ab90cc953c1a8->enter($__internal_caac3e07e6a281171dad03fd643becafcdc836e77490ef3baf1ab90cc953c1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pslieuxBundle:lieu:view.html.twig"));

        $__internal_0ad61c4e43f9ab6b90052ddaf3edfc4f6c20dc291b886c60a601b53eb6d27f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad61c4e43f9ab6b90052ddaf3edfc4f6c20dc291b886c60a601b53eb6d27f31->enter($__internal_0ad61c4e43f9ab6b90052ddaf3edfc4f6c20dc291b886c60a601b53eb6d27f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pslieuxBundle:lieu:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caac3e07e6a281171dad03fd643becafcdc836e77490ef3baf1ab90cc953c1a8->leave($__internal_caac3e07e6a281171dad03fd643becafcdc836e77490ef3baf1ab90cc953c1a8_prof);

        
        $__internal_0ad61c4e43f9ab6b90052ddaf3edfc4f6c20dc291b886c60a601b53eb6d27f31->leave($__internal_0ad61c4e43f9ab6b90052ddaf3edfc4f6c20dc291b886c60a601b53eb6d27f31_prof);

    }

    // line 3
    public function block_categorieBlock($context, array $blocks = array())
    {
        $__internal_fdcc2eb6547217b856ca7ec12680d1f9fa364d59f78a41c8279713750e2fd03f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdcc2eb6547217b856ca7ec12680d1f9fa364d59f78a41c8279713750e2fd03f->enter($__internal_fdcc2eb6547217b856ca7ec12680d1f9fa364d59f78a41c8279713750e2fd03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorieBlock"));

        $__internal_f62c4ff27f06756bc3f2855c7b07bd9e32596a18765a8a8fe179ace351556ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f62c4ff27f06756bc3f2855c7b07bd9e32596a18765a8a8fe179ace351556ef9->enter($__internal_f62c4ff27f06756bc3f2855c7b07bd9e32596a18765a8a8fe179ace351556ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorieBlock"));

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
        
        $__internal_f62c4ff27f06756bc3f2855c7b07bd9e32596a18765a8a8fe179ace351556ef9->leave($__internal_f62c4ff27f06756bc3f2855c7b07bd9e32596a18765a8a8fe179ace351556ef9_prof);

        
        $__internal_fdcc2eb6547217b856ca7ec12680d1f9fa364d59f78a41c8279713750e2fd03f->leave($__internal_fdcc2eb6547217b856ca7ec12680d1f9fa364d59f78a41c8279713750e2fd03f_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_b8d45c4d67c3c2e7e8378bf6869afb46f45d32394ef9b9355f0814730182740f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8d45c4d67c3c2e7e8378bf6869afb46f45d32394ef9b9355f0814730182740f->enter($__internal_b8d45c4d67c3c2e7e8378bf6869afb46f45d32394ef9b9355f0814730182740f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_634eb79f0b444a9a548b3356c900595c1836fac1712a94a26e9ecc58b50493a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_634eb79f0b444a9a548b3356c900595c1836fac1712a94a26e9ecc58b50493a4->enter($__internal_634eb79f0b444a9a548b3356c900595c1836fac1712a94a26e9ecc58b50493a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <h1>Détails du lieu</h1>
    <div class=\"media\">
        <div class=\"media-body\">
            <h3 class=\"media-heading\">Nom : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["lieu"] ?? $this->getContext($context, "lieu")), "nom", array()), "html", null, true);
        echo "</h3>
            <p> Categorie : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["lieu"] ?? $this->getContext($context, "lieu")), "categorie", array()), "html", null, true);
        echo "</p>
            <p>Latitude : ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["lieu"] ?? $this->getContext($context, "lieu")), "latitude", array()), "html", null, true);
        echo "</p>
            <p>Longitude : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["lieu"] ?? $this->getContext($context, "lieu")), "longitude", array()), "html", null, true);
        echo "</p>
            ";
        // line 17
        if ( !twig_test_empty($this->getAttribute(($context["desc"] ?? $this->getContext($context, "desc")), "adresse", array()))) {
            // line 18
            echo "                <p>Adresse : ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["desc"] ?? $this->getContext($context, "desc")), "adresse", array()), "html", null, true);
            echo "</p>
            ";
        }
        // line 20
        echo "            ";
        if ( !twig_test_empty($this->getAttribute(($context["desc"] ?? $this->getContext($context, "desc")), "email", array()))) {
            // line 21
            echo "                <p>Email : ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["desc"] ?? $this->getContext($context, "desc")), "email", array()), "html", null, true);
            echo "</p>
            ";
        }
        // line 23
        echo "            ";
        if ( !twig_test_empty($this->getAttribute(($context["desc"] ?? $this->getContext($context, "desc")), "numTel", array()))) {
            // line 24
            echo "                <p>NumTél : ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["desc"] ?? $this->getContext($context, "desc")), "numTel", array()), "html", null, true);
            echo "</p>
            ";
        }
        // line 26
        echo "            ";
        if ( !twig_test_empty($this->getAttribute(($context["desc"] ?? $this->getContext($context, "desc")), "presentation", array()))) {
            // line 27
            echo "                <p>Présentation : ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["desc"] ?? $this->getContext($context, "desc")), "presentation", array()), "html", null, true);
            echo "</p>
            ";
        }
        // line 29
        echo "        </div>
    </div>
";
        
        $__internal_634eb79f0b444a9a548b3356c900595c1836fac1712a94a26e9ecc58b50493a4->leave($__internal_634eb79f0b444a9a548b3356c900595c1836fac1712a94a26e9ecc58b50493a4_prof);

        
        $__internal_b8d45c4d67c3c2e7e8378bf6869afb46f45d32394ef9b9355f0814730182740f->leave($__internal_b8d45c4d67c3c2e7e8378bf6869afb46f45d32394ef9b9355f0814730182740f_prof);

    }

    public function getTemplateName()
    {
        return "pslieuxBundle:lieu:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 29,  133 => 27,  130 => 26,  124 => 24,  121 => 23,  115 => 21,  112 => 20,  106 => 18,  104 => 17,  100 => 16,  96 => 15,  92 => 14,  88 => 13,  83 => 10,  74 => 9,  55 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
    <h1>Détails du lieu</h1>
    <div class=\"media\">
        <div class=\"media-body\">
            <h3 class=\"media-heading\">Nom : {{ lieu.nom }}</h3>
            <p> Categorie : {{ lieu.categorie }}</p>
            <p>Latitude : {{ lieu.latitude }}</p>
            <p>Longitude : {{ lieu.longitude }}</p>
            {% if desc.adresse is not empty %}
                <p>Adresse : {{ desc.adresse }}</p>
            {% endif %}
            {% if desc.email is not empty %}
                <p>Email : {{ desc.email }}</p>
            {% endif %}
            {% if desc.numTel is not empty %}
                <p>NumTél : {{ desc.numTel }}</p>
            {% endif %}
            {% if desc.presentation is not empty %}
                <p>Présentation : {{ desc.presentation }}</p>
            {% endif %}
        </div>
    </div>
{% endblock %}
", "pslieuxBundle:lieu:view.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ps\\lieuxBundle/Resources/views/lieu/view.html.twig");
    }
}
