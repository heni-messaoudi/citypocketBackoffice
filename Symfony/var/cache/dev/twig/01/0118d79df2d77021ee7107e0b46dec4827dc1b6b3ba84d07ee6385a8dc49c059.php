<?php

/* @pslieux/lieu/form.html.twig */
class __TwigTemplate_84e07a00b2f395a2e5e204d8328358659f66722295814ad5630528b9f9194a41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@pslieux/lieu/form.html.twig", 1);
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
        $__internal_b2bce60bd50c14e2c442734b2bb057ed071d143039c7abe320a121c79aba45db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2bce60bd50c14e2c442734b2bb057ed071d143039c7abe320a121c79aba45db->enter($__internal_b2bce60bd50c14e2c442734b2bb057ed071d143039c7abe320a121c79aba45db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@pslieux/lieu/form.html.twig"));

        $__internal_df0c881e75fe9b70d1584bf6c1884a7feaa69fa964f9b717777ac4a0b0b0ab1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0c881e75fe9b70d1584bf6c1884a7feaa69fa964f9b717777ac4a0b0b0ab1c->enter($__internal_df0c881e75fe9b70d1584bf6c1884a7feaa69fa964f9b717777ac4a0b0b0ab1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@pslieux/lieu/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2bce60bd50c14e2c442734b2bb057ed071d143039c7abe320a121c79aba45db->leave($__internal_b2bce60bd50c14e2c442734b2bb057ed071d143039c7abe320a121c79aba45db_prof);

        
        $__internal_df0c881e75fe9b70d1584bf6c1884a7feaa69fa964f9b717777ac4a0b0b0ab1c->leave($__internal_df0c881e75fe9b70d1584bf6c1884a7feaa69fa964f9b717777ac4a0b0b0ab1c_prof);

    }

    // line 3
    public function block_categorieBlock($context, array $blocks = array())
    {
        $__internal_f47b4299324fcdc54265c5bd20e4c3ff4e50c02c76082fa76f71a3a9b84b551e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f47b4299324fcdc54265c5bd20e4c3ff4e50c02c76082fa76f71a3a9b84b551e->enter($__internal_f47b4299324fcdc54265c5bd20e4c3ff4e50c02c76082fa76f71a3a9b84b551e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorieBlock"));

        $__internal_f95a34fd5283dccc3a703d9f96e4f9138e3ae73e43747b1f5fde501b694c39c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95a34fd5283dccc3a703d9f96e4f9138e3ae73e43747b1f5fde501b694c39c1->enter($__internal_f95a34fd5283dccc3a703d9f96e4f9138e3ae73e43747b1f5fde501b694c39c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorieBlock"));

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
        
        $__internal_f95a34fd5283dccc3a703d9f96e4f9138e3ae73e43747b1f5fde501b694c39c1->leave($__internal_f95a34fd5283dccc3a703d9f96e4f9138e3ae73e43747b1f5fde501b694c39c1_prof);

        
        $__internal_f47b4299324fcdc54265c5bd20e4c3ff4e50c02c76082fa76f71a3a9b84b551e->leave($__internal_f47b4299324fcdc54265c5bd20e4c3ff4e50c02c76082fa76f71a3a9b84b551e_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_12224515be718b936aa1f907c05a926a993d22d16500b03c1edc9998e9362d1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12224515be718b936aa1f907c05a926a993d22d16500b03c1edc9998e9362d1a->enter($__internal_12224515be718b936aa1f907c05a926a993d22d16500b03c1edc9998e9362d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0a8c64655139716355e9519218eaeaa639457370dea62968417b6c7e82cb1cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a8c64655139716355e9519218eaeaa639457370dea62968417b6c7e82cb1cd4->enter($__internal_0a8c64655139716355e9519218eaeaa639457370dea62968417b6c7e82cb1cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_0a8c64655139716355e9519218eaeaa639457370dea62968417b6c7e82cb1cd4->leave($__internal_0a8c64655139716355e9519218eaeaa639457370dea62968417b6c7e82cb1cd4_prof);

        
        $__internal_12224515be718b936aa1f907c05a926a993d22d16500b03c1edc9998e9362d1a->leave($__internal_12224515be718b936aa1f907c05a926a993d22d16500b03c1edc9998e9362d1a_prof);

    }

    public function getTemplateName()
    {
        return "@pslieux/lieu/form.html.twig";
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
", "@pslieux/lieu/form.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ps\\lieuxBundle\\Resources\\views\\lieu\\form.html.twig");
    }
}
