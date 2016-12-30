<?php

/* @pslieux/lieu/list.html.twig */
class __TwigTemplate_c6fa29d5b5a8b8bf724845b663bd288af970e2d06efbd3a0ecf724974daf327a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@pslieux/lieu/list.html.twig", 1);
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
        $__internal_a605447fd4ecf49bfca6b32812b04c177c2258f14395b33718393a59230d2168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a605447fd4ecf49bfca6b32812b04c177c2258f14395b33718393a59230d2168->enter($__internal_a605447fd4ecf49bfca6b32812b04c177c2258f14395b33718393a59230d2168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@pslieux/lieu/list.html.twig"));

        $__internal_8c5739f53d7a593fe77677970fdda5da48918f1b5d65eb2798360fa06a0c6330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c5739f53d7a593fe77677970fdda5da48918f1b5d65eb2798360fa06a0c6330->enter($__internal_8c5739f53d7a593fe77677970fdda5da48918f1b5d65eb2798360fa06a0c6330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@pslieux/lieu/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a605447fd4ecf49bfca6b32812b04c177c2258f14395b33718393a59230d2168->leave($__internal_a605447fd4ecf49bfca6b32812b04c177c2258f14395b33718393a59230d2168_prof);

        
        $__internal_8c5739f53d7a593fe77677970fdda5da48918f1b5d65eb2798360fa06a0c6330->leave($__internal_8c5739f53d7a593fe77677970fdda5da48918f1b5d65eb2798360fa06a0c6330_prof);

    }

    // line 3
    public function block_categorieBlock($context, array $blocks = array())
    {
        $__internal_6c5cb7819791fac0ee3356bfcf541873264efcc67d145ffd6d68b15ad43be0bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c5cb7819791fac0ee3356bfcf541873264efcc67d145ffd6d68b15ad43be0bc->enter($__internal_6c5cb7819791fac0ee3356bfcf541873264efcc67d145ffd6d68b15ad43be0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorieBlock"));

        $__internal_f7b21c11f166da4f097001fdc638e60c2dfa2faae7e216289e778af77aa90062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b21c11f166da4f097001fdc638e60c2dfa2faae7e216289e778af77aa90062->enter($__internal_f7b21c11f166da4f097001fdc638e60c2dfa2faae7e216289e778af77aa90062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorieBlock"));

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
        
        $__internal_f7b21c11f166da4f097001fdc638e60c2dfa2faae7e216289e778af77aa90062->leave($__internal_f7b21c11f166da4f097001fdc638e60c2dfa2faae7e216289e778af77aa90062_prof);

        
        $__internal_6c5cb7819791fac0ee3356bfcf541873264efcc67d145ffd6d68b15ad43be0bc->leave($__internal_6c5cb7819791fac0ee3356bfcf541873264efcc67d145ffd6d68b15ad43be0bc_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_3238024ab309f351ae66fb55a07515ecfb3b600b0713fc13cc4c699f97aaf083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3238024ab309f351ae66fb55a07515ecfb3b600b0713fc13cc4c699f97aaf083->enter($__internal_3238024ab309f351ae66fb55a07515ecfb3b600b0713fc13cc4c699f97aaf083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_807339446a0e729167f089c63577b05a6aac45f46601e011ea6d2d8d1ab251c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_807339446a0e729167f089c63577b05a6aac45f46601e011ea6d2d8d1ab251c4->enter($__internal_807339446a0e729167f089c63577b05a6aac45f46601e011ea6d2d8d1ab251c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_807339446a0e729167f089c63577b05a6aac45f46601e011ea6d2d8d1ab251c4->leave($__internal_807339446a0e729167f089c63577b05a6aac45f46601e011ea6d2d8d1ab251c4_prof);

        
        $__internal_3238024ab309f351ae66fb55a07515ecfb3b600b0713fc13cc4c699f97aaf083->leave($__internal_3238024ab309f351ae66fb55a07515ecfb3b600b0713fc13cc4c699f97aaf083_prof);

    }

    public function getTemplateName()
    {
        return "@pslieux/lieu/list.html.twig";
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
", "@pslieux/lieu/list.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ps\\lieuxBundle\\Resources\\views\\lieu\\list.html.twig");
    }
}
