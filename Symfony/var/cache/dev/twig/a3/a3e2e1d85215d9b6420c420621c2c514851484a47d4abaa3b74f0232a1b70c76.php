<?php

/* pslieuxBundle:lieu:list.html.twig */
class __TwigTemplate_17221f5d0df19bb11ef348daac482a39700d89915557ecacb206e265f34dc302 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pslieuxBundle:lieu:list.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3802ce9e14d5441a1d84d5b6e07c60571b042577d53238fc9ee002e527016530 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3802ce9e14d5441a1d84d5b6e07c60571b042577d53238fc9ee002e527016530->enter($__internal_3802ce9e14d5441a1d84d5b6e07c60571b042577d53238fc9ee002e527016530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pslieuxBundle:lieu:list.html.twig"));

        $__internal_dd8fb291654c6e422d87ecb4cfcc44570fce8725d6100a4815e8630cbb63618b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd8fb291654c6e422d87ecb4cfcc44570fce8725d6100a4815e8630cbb63618b->enter($__internal_dd8fb291654c6e422d87ecb4cfcc44570fce8725d6100a4815e8630cbb63618b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pslieuxBundle:lieu:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3802ce9e14d5441a1d84d5b6e07c60571b042577d53238fc9ee002e527016530->leave($__internal_3802ce9e14d5441a1d84d5b6e07c60571b042577d53238fc9ee002e527016530_prof);

        
        $__internal_dd8fb291654c6e422d87ecb4cfcc44570fce8725d6100a4815e8630cbb63618b->leave($__internal_dd8fb291654c6e422d87ecb4cfcc44570fce8725d6100a4815e8630cbb63618b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_79ee4d63ee6b4dde0844799cd66c3f662163d9a5bf1d5b841febd24296778af7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79ee4d63ee6b4dde0844799cd66c3f662163d9a5bf1d5b841febd24296778af7->enter($__internal_79ee4d63ee6b4dde0844799cd66c3f662163d9a5bf1d5b841febd24296778af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7c8e7638810840de241484139852262ae7da654b14fb051402a09d7064ed99ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c8e7638810840de241484139852262ae7da654b14fb051402a09d7064ed99ce->enter($__internal_7c8e7638810840de241484139852262ae7da654b14fb051402a09d7064ed99ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["lieux"] ?? $this->getContext($context, "lieux"))), "html", null, true);
        echo " lieux trouvés</h3>
    ";
        // line 5
        if (array_key_exists("categorie", $context)) {
            // line 6
            echo "        pour la  categorie: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["categorie"] ?? $this->getContext($context, "categorie")), "pathEndIdentifier", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 8
        echo "    <div class=\"table-responsive\">
        <table class=\"table\">
            <thead>
            <tr class=\"success\">
                <th>ID</th>
                <th>nom</th>
                <th>categorie</th>
                <th>latitude</th>
                <th>longitude</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lieux"] ?? $this->getContext($context, "lieux")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"#\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lieu"], "categorie", array()), "pathEndIdentifier", array(), "method"), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "latitude", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "longitude", array()), "html", null, true);
            echo "</td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "            <tr><td>Pas d'établissements encore</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lieu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_7c8e7638810840de241484139852262ae7da654b14fb051402a09d7064ed99ce->leave($__internal_7c8e7638810840de241484139852262ae7da654b14fb051402a09d7064ed99ce_prof);

        
        $__internal_79ee4d63ee6b4dde0844799cd66c3f662163d9a5bf1d5b841febd24296778af7->leave($__internal_79ee4d63ee6b4dde0844799cd66c3f662163d9a5bf1d5b841febd24296778af7_prof);

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
        return array (  115 => 31,  108 => 29,  100 => 26,  96 => 25,  92 => 24,  88 => 23,  84 => 22,  81 => 21,  76 => 20,  62 => 8,  56 => 6,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block content %}
    <h3>{{ lieux|length }} lieux trouvés</h3>
    {% if categorie is defined %}
        pour la  categorie: {{ categorie.pathEndIdentifier() }}
    {% endif %}
    <div class=\"table-responsive\">
        <table class=\"table\">
            <thead>
            <tr class=\"success\">
                <th>ID</th>
                <th>nom</th>
                <th>categorie</th>
                <th>latitude</th>
                <th>longitude</th>
            </tr>
            </thead>
            <tbody>
            {% for lieu in lieux %}
            <tr>
                <td><a href=\"#\">{{ lieu.id }}</a></td>
                <td>{{ lieu.nom }}</td>
                <td>{{ lieu.categorie.pathEndIdentifier() }}</td>
                <td>{{ lieu.latitude }}</td>
                <td>{{ lieu.longitude }}</td>
            </tr>
            {% else %}
            <tr><td>Pas d'établissements encore</td></tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
", "pslieuxBundle:lieu:list.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ps\\lieuxBundle/Resources/views/lieu/list.html.twig");
    }
}
