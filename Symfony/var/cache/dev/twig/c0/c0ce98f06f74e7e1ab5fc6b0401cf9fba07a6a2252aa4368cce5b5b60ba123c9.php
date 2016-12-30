<?php

/* pslieuxBundle:lieu:view.html.twig */
class __TwigTemplate_fdb60c5dd11b34231af409623fe27c8d9ab935f8b39aa4eb3366fbd240c63995 extends Twig_Template
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
        $__internal_61b91147918eac14b009ab1d07586506201b9a69c9eeddafe044d55260a51ec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61b91147918eac14b009ab1d07586506201b9a69c9eeddafe044d55260a51ec3->enter($__internal_61b91147918eac14b009ab1d07586506201b9a69c9eeddafe044d55260a51ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pslieuxBundle:lieu:view.html.twig"));

        $__internal_7c9bcc3a6627b49e10fe8952e4a4e3623da17b071f9535454c7cae56839dc0d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c9bcc3a6627b49e10fe8952e4a4e3623da17b071f9535454c7cae56839dc0d2->enter($__internal_7c9bcc3a6627b49e10fe8952e4a4e3623da17b071f9535454c7cae56839dc0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pslieuxBundle:lieu:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61b91147918eac14b009ab1d07586506201b9a69c9eeddafe044d55260a51ec3->leave($__internal_61b91147918eac14b009ab1d07586506201b9a69c9eeddafe044d55260a51ec3_prof);

        
        $__internal_7c9bcc3a6627b49e10fe8952e4a4e3623da17b071f9535454c7cae56839dc0d2->leave($__internal_7c9bcc3a6627b49e10fe8952e4a4e3623da17b071f9535454c7cae56839dc0d2_prof);

    }

    // line 3
    public function block_categorieBlock($context, array $blocks = array())
    {
        $__internal_5889fa25e3afe7f689ec1256661fb00d2e435f09ffdf01d9f5a59e37c445e3ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5889fa25e3afe7f689ec1256661fb00d2e435f09ffdf01d9f5a59e37c445e3ac->enter($__internal_5889fa25e3afe7f689ec1256661fb00d2e435f09ffdf01d9f5a59e37c445e3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorieBlock"));

        $__internal_e951f2691417c73157a64f363ff851bcdca869ceea95b1b21edbae8c5075082e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e951f2691417c73157a64f363ff851bcdca869ceea95b1b21edbae8c5075082e->enter($__internal_e951f2691417c73157a64f363ff851bcdca869ceea95b1b21edbae8c5075082e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorieBlock"));

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
        
        $__internal_e951f2691417c73157a64f363ff851bcdca869ceea95b1b21edbae8c5075082e->leave($__internal_e951f2691417c73157a64f363ff851bcdca869ceea95b1b21edbae8c5075082e_prof);

        
        $__internal_5889fa25e3afe7f689ec1256661fb00d2e435f09ffdf01d9f5a59e37c445e3ac->leave($__internal_5889fa25e3afe7f689ec1256661fb00d2e435f09ffdf01d9f5a59e37c445e3ac_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_24a8cbf6b6c8299f3d63412b378e454579b73719e4c7b4ecf2ad158d42669054 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a8cbf6b6c8299f3d63412b378e454579b73719e4c7b4ecf2ad158d42669054->enter($__internal_24a8cbf6b6c8299f3d63412b378e454579b73719e4c7b4ecf2ad158d42669054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4a93363512135c9876328202d6ff01d1b12b00e1656004c0e12d9cd9b73c1aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a93363512135c9876328202d6ff01d1b12b00e1656004c0e12d9cd9b73c1aab->enter($__internal_4a93363512135c9876328202d6ff01d1b12b00e1656004c0e12d9cd9b73c1aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo "    <h1 class=\"text-center lieutitle\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lieu"]) ? $context["lieu"] : $this->getContext($context, "lieu")), "nom", array()), "html", null, true);
        echo "</h1>
    </br></br>
    <h4><span class=\"desctitle\">Categorie:</span> <span> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lieu"]) ? $context["lieu"] : $this->getContext($context, "lieu")), "categorie", array()), "html", null, true);
        echo "</h4>
    <h4><span class=\"desctitle\">Latitude :</span> <span> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lieu"]) ? $context["lieu"] : $this->getContext($context, "lieu")), "latitude", array()), "html", null, true);
        echo "</h4>
    <h4><span class=\"desctitle\">Longitude :</span> <span> ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lieu"]) ? $context["lieu"] : $this->getContext($context, "lieu")), "longitude", array()), "html", null, true);
        echo "</h4>
    ";
        // line 19
        if ( !twig_test_empty($this->getAttribute((isset($context["desc"]) ? $context["desc"] : $this->getContext($context, "desc")), "adresse", array()))) {
            // line 20
            echo "        <h4><span class=\"desctitle\">Adresse :</span> <span>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["desc"]) ? $context["desc"] : $this->getContext($context, "desc")), "adresse", array()), "html", null, true);
            echo "</span></h4>
    ";
        }
        // line 22
        echo "    ";
        if ( !twig_test_empty($this->getAttribute((isset($context["desc"]) ? $context["desc"] : $this->getContext($context, "desc")), "email", array()))) {
            // line 23
            echo "        <h4><span class=\"desctitle\">Email :</span> <span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["desc"]) ? $context["desc"] : $this->getContext($context, "desc")), "email", array()), "html", null, true);
            echo "</span></h4>
    ";
        }
        // line 25
        echo "    ";
        if ( !twig_test_empty($this->getAttribute((isset($context["desc"]) ? $context["desc"] : $this->getContext($context, "desc")), "numTel", array()))) {
            // line 26
            echo "        <h4><span class=\"desctitle\">NumTél :</span> <span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["desc"]) ? $context["desc"] : $this->getContext($context, "desc")), "numTel", array()), "html", null, true);
            echo "</span></h4>
    ";
        }
        // line 28
        echo "    ";
        if ( !twig_test_empty($this->getAttribute((isset($context["desc"]) ? $context["desc"] : $this->getContext($context, "desc")), "presentation", array()))) {
            // line 29
            echo "        <h4><span class=\"desctitle\">Présentation :</span> <span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["desc"]) ? $context["desc"] : $this->getContext($context, "desc")), "presentation", array()), "html", null, true);
            echo "</span></h4>
    ";
        }
        // line 31
        echo "    </br></br>
    <a class=\"btn btn-warning btn-block\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute((isset($context["lieu"]) ? $context["lieu"] : $this->getContext($context, "lieu")), "id", array()))), "html", null, true);
        echo "\">
        <span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"> Modifier</span>
    </a>
    </br>
    <a class=\"btn btn-danger btn-block\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => $this->getAttribute((isset($context["lieu"]) ? $context["lieu"] : $this->getContext($context, "lieu")), "id", array()))), "html", null, true);
        echo "\">
        <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"> Supprimer</span>
    </a>
";
        
        $__internal_4a93363512135c9876328202d6ff01d1b12b00e1656004c0e12d9cd9b73c1aab->leave($__internal_4a93363512135c9876328202d6ff01d1b12b00e1656004c0e12d9cd9b73c1aab_prof);

        
        $__internal_24a8cbf6b6c8299f3d63412b378e454579b73719e4c7b4ecf2ad158d42669054->leave($__internal_24a8cbf6b6c8299f3d63412b378e454579b73719e4c7b4ecf2ad158d42669054_prof);

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
        return array (  165 => 36,  158 => 32,  155 => 31,  149 => 29,  146 => 28,  140 => 26,  137 => 25,  131 => 23,  128 => 22,  122 => 20,  120 => 19,  116 => 18,  112 => 17,  108 => 16,  102 => 14,  88 => 12,  83 => 10,  74 => 9,  55 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
    <h1 class=\"text-center lieutitle\">{{ lieu.nom }}</h1>
    </br></br>
    <h4><span class=\"desctitle\">Categorie:</span> <span> {{ lieu.categorie }}</h4>
    <h4><span class=\"desctitle\">Latitude :</span> <span> {{ lieu.latitude }}</h4>
    <h4><span class=\"desctitle\">Longitude :</span> <span> {{ lieu.longitude }}</h4>
    {% if desc.adresse is not empty %}
        <h4><span class=\"desctitle\">Adresse :</span> <span>{{ desc.adresse }}</span></h4>
    {% endif %}
    {% if desc.email is not empty %}
        <h4><span class=\"desctitle\">Email :</span> <span> {{ desc.email }}</span></h4>
    {% endif %}
    {% if desc.numTel is not empty %}
        <h4><span class=\"desctitle\">NumTél :</span> <span> {{ desc.numTel }}</span></h4>
    {% endif %}
    {% if desc.presentation is not empty %}
        <h4><span class=\"desctitle\">Présentation :</span> <span> {{ desc.presentation }}</span></h4>
    {% endif %}
    </br></br>
    <a class=\"btn btn-warning btn-block\" href=\"{{ path('edit', {'id' : lieu.id }) }}\">
        <span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"> Modifier</span>
    </a>
    </br>
    <a class=\"btn btn-danger btn-block\" href=\"{{ path('delete', {'id' : lieu.id }) }}\">
        <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"> Supprimer</span>
    </a>
{% endblock %}
", "pslieuxBundle:lieu:view.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ps\\lieuxBundle/Resources/views/lieu/view.html.twig");
    }
}
