<?php

/* pslieuxBundle:lieu:form.html.twig */
class __TwigTemplate_da5e2ed416592a9e757a0f757b326880c434e4a58026eaa64cf90abe655256d2 extends Twig_Template
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
        $__internal_3c6251109e033bcaa180d2d98d2a869ed75e3dcffbc5eef85537969d428331b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c6251109e033bcaa180d2d98d2a869ed75e3dcffbc5eef85537969d428331b4->enter($__internal_3c6251109e033bcaa180d2d98d2a869ed75e3dcffbc5eef85537969d428331b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pslieuxBundle:lieu:form.html.twig"));

        $__internal_72513cce5516074176cb94943d1d22a2c2a47529a708a109c81fb2ad2c7fa515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72513cce5516074176cb94943d1d22a2c2a47529a708a109c81fb2ad2c7fa515->enter($__internal_72513cce5516074176cb94943d1d22a2c2a47529a708a109c81fb2ad2c7fa515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pslieuxBundle:lieu:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c6251109e033bcaa180d2d98d2a869ed75e3dcffbc5eef85537969d428331b4->leave($__internal_3c6251109e033bcaa180d2d98d2a869ed75e3dcffbc5eef85537969d428331b4_prof);

        
        $__internal_72513cce5516074176cb94943d1d22a2c2a47529a708a109c81fb2ad2c7fa515->leave($__internal_72513cce5516074176cb94943d1d22a2c2a47529a708a109c81fb2ad2c7fa515_prof);

    }

    // line 3
    public function block_categorieBlock($context, array $blocks = array())
    {
        $__internal_5e498b4c7cbba66b737a87239ccc122163e1a6304bf82fded0d516bb1e4cfead = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e498b4c7cbba66b737a87239ccc122163e1a6304bf82fded0d516bb1e4cfead->enter($__internal_5e498b4c7cbba66b737a87239ccc122163e1a6304bf82fded0d516bb1e4cfead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorieBlock"));

        $__internal_fd63aa4d0f273bf6f806db5c6a7196b2595a24955456dcf426fe7ed9a259a9b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd63aa4d0f273bf6f806db5c6a7196b2595a24955456dcf426fe7ed9a259a9b8->enter($__internal_fd63aa4d0f273bf6f806db5c6a7196b2595a24955456dcf426fe7ed9a259a9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorieBlock"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
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
        
        $__internal_fd63aa4d0f273bf6f806db5c6a7196b2595a24955456dcf426fe7ed9a259a9b8->leave($__internal_fd63aa4d0f273bf6f806db5c6a7196b2595a24955456dcf426fe7ed9a259a9b8_prof);

        
        $__internal_5e498b4c7cbba66b737a87239ccc122163e1a6304bf82fded0d516bb1e4cfead->leave($__internal_5e498b4c7cbba66b737a87239ccc122163e1a6304bf82fded0d516bb1e4cfead_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_9f6420e7401c012e8187eb0a69315695268540bfa16e0df12425d22536fc5a2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f6420e7401c012e8187eb0a69315695268540bfa16e0df12425d22536fc5a2b->enter($__internal_9f6420e7401c012e8187eb0a69315695268540bfa16e0df12425d22536fc5a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1118ab7858242dde2402a7359d1f1fe917b033a8e0be80bf523c787214d2de5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1118ab7858242dde2402a7359d1f1fe917b033a8e0be80bf523c787214d2de5e->enter($__internal_1118ab7858242dde2402a7359d1f1fe917b033a8e0be80bf523c787214d2de5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f3b6057_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_f3b6057_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/f3b6057_description_1.css");
            // line 12
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\"/>
    ";
        } else {
            // asset "f3b6057"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_f3b6057") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/f3b6057.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "    <h3 class=\"desctitle\">";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo " d'un lieu</h3></br></br>
    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_1118ab7858242dde2402a7359d1f1fe917b033a8e0be80bf523c787214d2de5e->leave($__internal_1118ab7858242dde2402a7359d1f1fe917b033a8e0be80bf523c787214d2de5e_prof);

        
        $__internal_9f6420e7401c012e8187eb0a69315695268540bfa16e0df12425d22536fc5a2b->leave($__internal_9f6420e7401c012e8187eb0a69315695268540bfa16e0df12425d22536fc5a2b_prof);

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
        return array (  107 => 15,  102 => 14,  88 => 12,  83 => 10,  74 => 9,  55 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
    {% stylesheets filter='cssrewrite, scssphp'
    'css/description.css' %}
    <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\"/>
    {% endstylesheets %}
    <h3 class=\"desctitle\">{{ action }} d'un lieu</h3></br></br>
    {{ form(form) }}
{% endblock %}
", "pslieuxBundle:lieu:form.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ps\\lieuxBundle/Resources/views/lieu/form.html.twig");
    }
}
