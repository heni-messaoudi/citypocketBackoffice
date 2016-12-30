<?php

/* @pslieux/lieu/view.html.twig */
class __TwigTemplate_6d45b2062db1fde6380f317c4d71fcd007f9c49d3d60f6036ba4b80224922e9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@pslieux/lieu/view.html.twig", 1);
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
        $__internal_3066ab839f4021c9059e835a67f90a6b353c7f7803fd15a1cdbe2233b64c3d95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3066ab839f4021c9059e835a67f90a6b353c7f7803fd15a1cdbe2233b64c3d95->enter($__internal_3066ab839f4021c9059e835a67f90a6b353c7f7803fd15a1cdbe2233b64c3d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@pslieux/lieu/view.html.twig"));

        $__internal_97c7f2d319b867c8ad3aaa3e40a3e2330b6f07adb8422578608ceb30e81aeb79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c7f2d319b867c8ad3aaa3e40a3e2330b6f07adb8422578608ceb30e81aeb79->enter($__internal_97c7f2d319b867c8ad3aaa3e40a3e2330b6f07adb8422578608ceb30e81aeb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@pslieux/lieu/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3066ab839f4021c9059e835a67f90a6b353c7f7803fd15a1cdbe2233b64c3d95->leave($__internal_3066ab839f4021c9059e835a67f90a6b353c7f7803fd15a1cdbe2233b64c3d95_prof);

        
        $__internal_97c7f2d319b867c8ad3aaa3e40a3e2330b6f07adb8422578608ceb30e81aeb79->leave($__internal_97c7f2d319b867c8ad3aaa3e40a3e2330b6f07adb8422578608ceb30e81aeb79_prof);

    }

    // line 3
    public function block_categorieBlock($context, array $blocks = array())
    {
        $__internal_3abfcf1c94c8f74663e62cdb0338d7775c5b2ac3651d58530cccbc9d29d84705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3abfcf1c94c8f74663e62cdb0338d7775c5b2ac3651d58530cccbc9d29d84705->enter($__internal_3abfcf1c94c8f74663e62cdb0338d7775c5b2ac3651d58530cccbc9d29d84705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorieBlock"));

        $__internal_1cde932054099ec9973d8d644a6547fda048d2a0efaf0642839c3f174fc9a584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cde932054099ec9973d8d644a6547fda048d2a0efaf0642839c3f174fc9a584->enter($__internal_1cde932054099ec9973d8d644a6547fda048d2a0efaf0642839c3f174fc9a584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorieBlock"));

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
        
        $__internal_1cde932054099ec9973d8d644a6547fda048d2a0efaf0642839c3f174fc9a584->leave($__internal_1cde932054099ec9973d8d644a6547fda048d2a0efaf0642839c3f174fc9a584_prof);

        
        $__internal_3abfcf1c94c8f74663e62cdb0338d7775c5b2ac3651d58530cccbc9d29d84705->leave($__internal_3abfcf1c94c8f74663e62cdb0338d7775c5b2ac3651d58530cccbc9d29d84705_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_862988526d9b3710d7a328ada4a2ea38bd862ff556cf25bb064e460643249868 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_862988526d9b3710d7a328ada4a2ea38bd862ff556cf25bb064e460643249868->enter($__internal_862988526d9b3710d7a328ada4a2ea38bd862ff556cf25bb064e460643249868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_77421abfb4df8f4a99b992e256ccdebbc84069c6a62eb071b326195cf857db10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77421abfb4df8f4a99b992e256ccdebbc84069c6a62eb071b326195cf857db10->enter($__internal_77421abfb4df8f4a99b992e256ccdebbc84069c6a62eb071b326195cf857db10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_77421abfb4df8f4a99b992e256ccdebbc84069c6a62eb071b326195cf857db10->leave($__internal_77421abfb4df8f4a99b992e256ccdebbc84069c6a62eb071b326195cf857db10_prof);

        
        $__internal_862988526d9b3710d7a328ada4a2ea38bd862ff556cf25bb064e460643249868->leave($__internal_862988526d9b3710d7a328ada4a2ea38bd862ff556cf25bb064e460643249868_prof);

    }

    public function getTemplateName()
    {
        return "@pslieux/lieu/view.html.twig";
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
", "@pslieux/lieu/view.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ps\\lieuxBundle\\Resources\\views\\lieu\\view.html.twig");
    }
}
