<?php

/* pslieuxBundle:lieu:list.html.twig */
class __TwigTemplate_2fb60193b82342b8a0e0c19a731e30b45c8be59780e70131d7d7323cd7d09ffe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pslieuxBundle:lieu:list.html.twig", 1);
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
        $__internal_8f978b88310e51935845685e7f5200f2aca904f08088efe076bb1ccdf5325035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f978b88310e51935845685e7f5200f2aca904f08088efe076bb1ccdf5325035->enter($__internal_8f978b88310e51935845685e7f5200f2aca904f08088efe076bb1ccdf5325035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pslieuxBundle:lieu:list.html.twig"));

        $__internal_d2df63d182b6edd67aa7566dd02c12ed39cd102cf1ad438390279311086377f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2df63d182b6edd67aa7566dd02c12ed39cd102cf1ad438390279311086377f9->enter($__internal_d2df63d182b6edd67aa7566dd02c12ed39cd102cf1ad438390279311086377f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pslieuxBundle:lieu:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f978b88310e51935845685e7f5200f2aca904f08088efe076bb1ccdf5325035->leave($__internal_8f978b88310e51935845685e7f5200f2aca904f08088efe076bb1ccdf5325035_prof);

        
        $__internal_d2df63d182b6edd67aa7566dd02c12ed39cd102cf1ad438390279311086377f9->leave($__internal_d2df63d182b6edd67aa7566dd02c12ed39cd102cf1ad438390279311086377f9_prof);

    }

    // line 3
    public function block_categorieBlock($context, array $blocks = array())
    {
        $__internal_64f18b0966aef6f9561a922bb8428cabf4618f999798fc28ba48759dbadafb8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64f18b0966aef6f9561a922bb8428cabf4618f999798fc28ba48759dbadafb8c->enter($__internal_64f18b0966aef6f9561a922bb8428cabf4618f999798fc28ba48759dbadafb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorieBlock"));

        $__internal_596cd42915e66d1ad87630905b5fd68f924fe74f27b2888ab081408da3620d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596cd42915e66d1ad87630905b5fd68f924fe74f27b2888ab081408da3620d03->enter($__internal_596cd42915e66d1ad87630905b5fd68f924fe74f27b2888ab081408da3620d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorieBlock"));

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
        
        $__internal_596cd42915e66d1ad87630905b5fd68f924fe74f27b2888ab081408da3620d03->leave($__internal_596cd42915e66d1ad87630905b5fd68f924fe74f27b2888ab081408da3620d03_prof);

        
        $__internal_64f18b0966aef6f9561a922bb8428cabf4618f999798fc28ba48759dbadafb8c->leave($__internal_64f18b0966aef6f9561a922bb8428cabf4618f999798fc28ba48759dbadafb8c_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_613d9719a50353b82e43d3da542b182eea83a3cb3ffe9c3b0553e8f97d62cf65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_613d9719a50353b82e43d3da542b182eea83a3cb3ffe9c3b0553e8f97d62cf65->enter($__internal_613d9719a50353b82e43d3da542b182eea83a3cb3ffe9c3b0553e8f97d62cf65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0225a550e7b276614b4558ab59f159404e9f9a947643b394f29bb01354c88c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0225a550e7b276614b4558ab59f159404e9f9a947643b394f29bb01354c88c06->enter($__internal_0225a550e7b276614b4558ab59f159404e9f9a947643b394f29bb01354c88c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "40e784b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_40e784b_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/40e784b_mytable_1.css");
            // line 11
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\"/>
    ";
        } else {
            // asset "40e784b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_40e784b") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/40e784b.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "    <div class=\"wrapper\">
        <table id=\"acrylic\">
            <thead>
            <tr>
                <th></th>
                <th>Nom</th>
                <th>Categorie</th>
                <th>Latitude</th>
                <th>Longitude</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lieux"]) ? $context["lieux"] : $this->getContext($context, "lieux")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
            // line 26
            echo "                <tr>
                    <td>
                        <a class=\"btn btn-success btn-sm\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get", array("id" => $this->getAttribute($context["lieu"], "id", array()))), "html", null, true);
            echo "\">
                            <span class=\"glyphicon glyphicon-zoom-in\" aria-hidden=\"true\"></span>Détails
                        </a>
                        <a class=\"btn btn-warning btn-sm\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute($context["lieu"], "id", array()))), "html", null, true);
            echo "\">
                            <span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\">Modifier</span>
                        </a>
                        <a class=\"btn btn-danger btn-sm\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => $this->getAttribute($context["lieu"], "id", array()))), "html", null, true);
            echo "\">
                            <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\">Supprimer</span>
                        </a>
                    </td>
                    <td data-label=\"Nom\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "nom", array()), "html", null, true);
            echo "</td>
                    <td data-label=\"Categorie\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lieu"], "categorie", array()), "pathEndIdentifier", array(), "method"), "html", null, true);
            echo "</td>
                    <td data-label=\"Latitude\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "latitude", array()), "html", null, true);
            echo "</td>
                    <td data-label=\"Longitude\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "longitude", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "                <tr>
                    <td>Pas d'établissements encore</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lieu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            </tbody>
        </table>
    </div>
    ";
        // line 51
        if ((isset($context["next_page_token"]) ? $context["next_page_token"] : $this->getContext($context, "next_page_token"))) {
            // line 52
            echo "        <nav>
            <ul class=\"pager\">
                <li><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list", array("page_token" => (isset($context["next_page_token"]) ? $context["next_page_token"] : $this->getContext($context, "next_page_token")))), "html", null, true);
            echo "\">More</a></li>
            </ul>
        </nav>
    ";
        } else {
            // line 58
            echo "        <nav>
            <ul class=\"pager\">
                <li><a href=\"";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list");
            echo "\">Retour vers la première page</a></li>
            </ul>
        </nav>
    ";
        }
        
        $__internal_0225a550e7b276614b4558ab59f159404e9f9a947643b394f29bb01354c88c06->leave($__internal_0225a550e7b276614b4558ab59f159404e9f9a947643b394f29bb01354c88c06_prof);

        
        $__internal_613d9719a50353b82e43d3da542b182eea83a3cb3ffe9c3b0553e8f97d62cf65->leave($__internal_613d9719a50353b82e43d3da542b182eea83a3cb3ffe9c3b0553e8f97d62cf65_prof);

    }

    public function getTemplateName()
    {
        return "pslieuxBundle:lieu:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 60,  191 => 58,  184 => 54,  180 => 52,  178 => 51,  173 => 48,  164 => 44,  156 => 41,  152 => 40,  148 => 39,  144 => 38,  137 => 34,  131 => 31,  125 => 28,  121 => 26,  116 => 25,  102 => 13,  88 => 11,  83 => 9,  74 => 8,  55 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
    'css/mytable.css' %}
    <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\"/>
    {% endstylesheets %}
    <div class=\"wrapper\">
        <table id=\"acrylic\">
            <thead>
            <tr>
                <th></th>
                <th>Nom</th>
                <th>Categorie</th>
                <th>Latitude</th>
                <th>Longitude</th>
            </tr>
            </thead>
            <tbody>
            {% for lieu in lieux %}
                <tr>
                    <td>
                        <a class=\"btn btn-success btn-sm\" href=\"{{ path('get', {'id' : lieu.id }) }}\">
                            <span class=\"glyphicon glyphicon-zoom-in\" aria-hidden=\"true\"></span>Détails
                        </a>
                        <a class=\"btn btn-warning btn-sm\" href=\"{{ path('edit', {'id' : lieu.id }) }}\">
                            <span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\">Modifier</span>
                        </a>
                        <a class=\"btn btn-danger btn-sm\" href=\"{{ path('delete', {'id' : lieu.id }) }}\">
                            <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\">Supprimer</span>
                        </a>
                    </td>
                    <td data-label=\"Nom\">{{ lieu.nom }}</td>
                    <td data-label=\"Categorie\">{{ lieu.categorie.pathEndIdentifier() }}</td>
                    <td data-label=\"Latitude\">{{ lieu.latitude }}</td>
                    <td data-label=\"Longitude\">{{ lieu.longitude }}</td>
                </tr>
            {% else %}
                <tr>
                    <td>Pas d'établissements encore</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
    {% if next_page_token %}
        <nav>
            <ul class=\"pager\">
                <li><a href=\"{{ path('list', {'page_token' : next_page_token}) }}\">More</a></li>
            </ul>
        </nav>
    {% else %}
        <nav>
            <ul class=\"pager\">
                <li><a href=\"{{ path('list') }}\">Retour vers la première page</a></li>
            </ul>
        </nav>
    {% endif %}
{% endblock %}
", "pslieuxBundle:lieu:list.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ps\\lieuxBundle/Resources/views/lieu/list.html.twig");
    }
}
