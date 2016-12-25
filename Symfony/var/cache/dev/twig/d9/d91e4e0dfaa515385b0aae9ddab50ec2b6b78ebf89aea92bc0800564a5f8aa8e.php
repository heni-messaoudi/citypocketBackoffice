<?php

/* pslieuxBundle:lieu:list.html.twig */
class __TwigTemplate_cc7b27bc39e6f20f68b11db950daa1b8b3ed5fd2f14139cb63f61b8d5d2104f2 extends Twig_Template
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
        $__internal_645f53202918faf323daa9ef4aa833ef5f21e320d3d75e6f2e0eb224790195e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_645f53202918faf323daa9ef4aa833ef5f21e320d3d75e6f2e0eb224790195e2->enter($__internal_645f53202918faf323daa9ef4aa833ef5f21e320d3d75e6f2e0eb224790195e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pslieuxBundle:lieu:list.html.twig"));

        $__internal_eecf87dac228f03a3634719968057aa04e2204879ecb92a726bdd1925d292a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eecf87dac228f03a3634719968057aa04e2204879ecb92a726bdd1925d292a08->enter($__internal_eecf87dac228f03a3634719968057aa04e2204879ecb92a726bdd1925d292a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pslieuxBundle:lieu:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_645f53202918faf323daa9ef4aa833ef5f21e320d3d75e6f2e0eb224790195e2->leave($__internal_645f53202918faf323daa9ef4aa833ef5f21e320d3d75e6f2e0eb224790195e2_prof);

        
        $__internal_eecf87dac228f03a3634719968057aa04e2204879ecb92a726bdd1925d292a08->leave($__internal_eecf87dac228f03a3634719968057aa04e2204879ecb92a726bdd1925d292a08_prof);

    }

    // line 3
    public function block_categorieBlock($context, array $blocks = array())
    {
        $__internal_360c0fb97e72eb541538feaa903f5e03a16ca9720b31dbda0c375b5121863d37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_360c0fb97e72eb541538feaa903f5e03a16ca9720b31dbda0c375b5121863d37->enter($__internal_360c0fb97e72eb541538feaa903f5e03a16ca9720b31dbda0c375b5121863d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorieBlock"));

        $__internal_e05c2028b8eb7a7748260e3354e85e9592ebad79c3a4e4dca144dbac38406a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05c2028b8eb7a7748260e3354e85e9592ebad79c3a4e4dca144dbac38406a1e->enter($__internal_e05c2028b8eb7a7748260e3354e85e9592ebad79c3a4e4dca144dbac38406a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorieBlock"));

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
        
        $__internal_e05c2028b8eb7a7748260e3354e85e9592ebad79c3a4e4dca144dbac38406a1e->leave($__internal_e05c2028b8eb7a7748260e3354e85e9592ebad79c3a4e4dca144dbac38406a1e_prof);

        
        $__internal_360c0fb97e72eb541538feaa903f5e03a16ca9720b31dbda0c375b5121863d37->leave($__internal_360c0fb97e72eb541538feaa903f5e03a16ca9720b31dbda0c375b5121863d37_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_953b1b1a02a120597b27983b41e3aeecfb009e28715ea6236f981d289077f30e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_953b1b1a02a120597b27983b41e3aeecfb009e28715ea6236f981d289077f30e->enter($__internal_953b1b1a02a120597b27983b41e3aeecfb009e28715ea6236f981d289077f30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_bee4dd92f82f023086a71030df1b5e8b9db69d0b82cc5bb0c57f3f724a25fd59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee4dd92f82f023086a71030df1b5e8b9db69d0b82cc5bb0c57f3f724a25fd59->enter($__internal_bee4dd92f82f023086a71030df1b5e8b9db69d0b82cc5bb0c57f3f724a25fd59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div class=\"table-responsive\">
        <table class=\"table table-striped\">
            <thead>
            <tr class=\"danger\">
                <th></th>
                <th></th>
                <th></th>
                <th>nom</th>
                <th>categorie</th>
                <th>latitude</th>
                <th>longitude</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lieux"] ?? $this->getContext($context, "lieux")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
            // line 24
            echo "                <tr>
                    <td>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get", array("id" => $this->getAttribute($context["lieu"], "id", array()))), "html", null, true);
            echo "\">
                            <span class=\"glyphicon glyphicon-zoom-in\" aria-hidden=\"true\"></span>
                        </a>
                    </td>
                    <td>
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => $this->getAttribute($context["lieu"], "id", array()))), "html", null, true);
            echo "\">
                            <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>
                        </a>
                    </td>
                    <td>
                        <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute($context["lieu"], "id", array()))), "html", null, true);
            echo "\">
                            <span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span>
                        </a>
                    </td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "nom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lieu"], "categorie", array()), "pathEndIdentifier", array(), "method"), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "latitude", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "longitude", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "                <tr>
                    <td>Pas d'établissements encore</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lieu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </tbody>
        </table>
        ";
        // line 52
        if (($context["next_page_token"] ?? $this->getContext($context, "next_page_token"))) {
            // line 53
            echo "            <nav>
                <ul class=\"pager\">
                    <li><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list", array("page_token" => ($context["next_page_token"] ?? $this->getContext($context, "next_page_token")))), "html", null, true);
            echo "\">More</a></li>
                </ul>
            </nav>
        ";
        } else {
            // line 59
            echo "            <nav>
                <ul class=\"pager\">
                    <li><a href=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list");
            echo "\">Retour vers la première page</a></li>
                </ul>
            </nav>
        ";
        }
        // line 65
        echo "    </div>
";
        
        $__internal_bee4dd92f82f023086a71030df1b5e8b9db69d0b82cc5bb0c57f3f724a25fd59->leave($__internal_bee4dd92f82f023086a71030df1b5e8b9db69d0b82cc5bb0c57f3f724a25fd59_prof);

        
        $__internal_953b1b1a02a120597b27983b41e3aeecfb009e28715ea6236f981d289077f30e->leave($__internal_953b1b1a02a120597b27983b41e3aeecfb009e28715ea6236f981d289077f30e_prof);

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
        return array (  188 => 65,  181 => 61,  177 => 59,  170 => 55,  166 => 53,  164 => 52,  160 => 50,  151 => 46,  143 => 43,  139 => 42,  135 => 41,  131 => 40,  124 => 36,  116 => 31,  108 => 26,  104 => 24,  99 => 23,  83 => 9,  74 => 8,  55 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
    <div class=\"table-responsive\">
        <table class=\"table table-striped\">
            <thead>
            <tr class=\"danger\">
                <th></th>
                <th></th>
                <th></th>
                <th>nom</th>
                <th>categorie</th>
                <th>latitude</th>
                <th>longitude</th>
            </tr>
            </thead>
            <tbody>
            {% for lieu in lieux %}
                <tr>
                    <td>
                        <a href=\"{{ path('get', {'id' : lieu.id }) }}\">
                            <span class=\"glyphicon glyphicon-zoom-in\" aria-hidden=\"true\"></span>
                        </a>
                    </td>
                    <td>
                        <a href=\"{{ path('delete', {'id' : lieu.id }) }}\">
                            <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>
                        </a>
                    </td>
                    <td>
                        <a href=\"{{ path('edit', {'id' : lieu.id }) }}\">
                            <span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span>
                        </a>
                    </td>
                    <td>{{ lieu.nom }}</td>
                    <td>{{ lieu.categorie.pathEndIdentifier() }}</td>
                    <td>{{ lieu.latitude }}</td>
                    <td>{{ lieu.longitude }}</td>
                </tr>
            {% else %}
                <tr>
                    <td>Pas d'établissements encore</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
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
    </div>
{% endblock %}
", "pslieuxBundle:lieu:list.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ps\\lieuxBundle/Resources/views/lieu/list.html.twig");
    }
}
