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
        $__internal_752acc5688534d17c0c51585d55bcc34fab091e6913a93ae9650c62b16e00c9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_752acc5688534d17c0c51585d55bcc34fab091e6913a93ae9650c62b16e00c9a->enter($__internal_752acc5688534d17c0c51585d55bcc34fab091e6913a93ae9650c62b16e00c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pslieuxBundle:lieu:list.html.twig"));

        $__internal_c7da9030c82dd6b881a577acf8ebbf4fab8258249513994c6c10b9cd2c215f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7da9030c82dd6b881a577acf8ebbf4fab8258249513994c6c10b9cd2c215f9c->enter($__internal_c7da9030c82dd6b881a577acf8ebbf4fab8258249513994c6c10b9cd2c215f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pslieuxBundle:lieu:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_752acc5688534d17c0c51585d55bcc34fab091e6913a93ae9650c62b16e00c9a->leave($__internal_752acc5688534d17c0c51585d55bcc34fab091e6913a93ae9650c62b16e00c9a_prof);

        
        $__internal_c7da9030c82dd6b881a577acf8ebbf4fab8258249513994c6c10b9cd2c215f9c->leave($__internal_c7da9030c82dd6b881a577acf8ebbf4fab8258249513994c6c10b9cd2c215f9c_prof);

    }

    // line 3
    public function block_categorieBlock($context, array $blocks = array())
    {
        $__internal_09d2fdb8f33276e0a68fdac9d5b2a253656a1732cf24b75782fad12de3a14c4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09d2fdb8f33276e0a68fdac9d5b2a253656a1732cf24b75782fad12de3a14c4a->enter($__internal_09d2fdb8f33276e0a68fdac9d5b2a253656a1732cf24b75782fad12de3a14c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorieBlock"));

        $__internal_ac00e6d4be1f9cf50cc4f3c128c16a90c66b28f6678041f431acd8d52a828093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac00e6d4be1f9cf50cc4f3c128c16a90c66b28f6678041f431acd8d52a828093->enter($__internal_ac00e6d4be1f9cf50cc4f3c128c16a90c66b28f6678041f431acd8d52a828093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorieBlock"));

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
        
        $__internal_ac00e6d4be1f9cf50cc4f3c128c16a90c66b28f6678041f431acd8d52a828093->leave($__internal_ac00e6d4be1f9cf50cc4f3c128c16a90c66b28f6678041f431acd8d52a828093_prof);

        
        $__internal_09d2fdb8f33276e0a68fdac9d5b2a253656a1732cf24b75782fad12de3a14c4a->leave($__internal_09d2fdb8f33276e0a68fdac9d5b2a253656a1732cf24b75782fad12de3a14c4a_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_daa36276afa821d724d0f32f84dadd5e950ad68c8f2e2dcf95dc8511e0bb3da2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daa36276afa821d724d0f32f84dadd5e950ad68c8f2e2dcf95dc8511e0bb3da2->enter($__internal_daa36276afa821d724d0f32f84dadd5e950ad68c8f2e2dcf95dc8511e0bb3da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6c60d5bf794170e0b97fa7f8da2e1e11d09437a6b000fce4a9a7fe8cbee3f84b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c60d5bf794170e0b97fa7f8da2e1e11d09437a6b000fce4a9a7fe8cbee3f84b->enter($__internal_6c60d5bf794170e0b97fa7f8da2e1e11d09437a6b000fce4a9a7fe8cbee3f84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div class=\"table-responsive\">
        <table class=\"table table-striped\">
            <thead>
            <tr class=\"danger\">
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
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lieux"] ?? $this->getContext($context, "lieux")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
            // line 23
            echo "                <tr>
                    <td>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get", array("id" => $this->getAttribute($context["lieu"], "id", array()))), "html", null, true);
            echo "\">
                            <span class=\"glyphicon glyphicon-zoom-in\" aria-hidden=\"true\"></span>
                        </a>
                    </td>
                    <td>
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => $this->getAttribute($context["lieu"], "id", array()))), "html", null, true);
            echo "\">
                            <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>
                        </a>
                    </td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "nom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["lieu"], "categorie", array()), "pathEndIdentifier", array(), "method"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "latitude", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "longitude", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "                <tr>
                    <td>Pas d'établissements encore</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lieu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </tbody>
        </table>
        ";
        // line 46
        if (($context["next_page_token"] ?? $this->getContext($context, "next_page_token"))) {
            // line 47
            echo "            <nav>
                <ul class=\"pager\">
                    <li><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list", array("page_token" => ($context["next_page_token"] ?? $this->getContext($context, "next_page_token")))), "html", null, true);
            echo "\">More</a></li>
                </ul>
            </nav>
        ";
        } else {
            // line 53
            echo "            <nav>
                <ul class=\"pager\">
                    <li><a href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list");
            echo "\">Retour vers la première page</a></li>
                </ul>
            </nav>
        ";
        }
        // line 59
        echo "    </div>
";
        
        $__internal_6c60d5bf794170e0b97fa7f8da2e1e11d09437a6b000fce4a9a7fe8cbee3f84b->leave($__internal_6c60d5bf794170e0b97fa7f8da2e1e11d09437a6b000fce4a9a7fe8cbee3f84b_prof);

        
        $__internal_daa36276afa821d724d0f32f84dadd5e950ad68c8f2e2dcf95dc8511e0bb3da2->leave($__internal_daa36276afa821d724d0f32f84dadd5e950ad68c8f2e2dcf95dc8511e0bb3da2_prof);

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
        return array (  179 => 59,  172 => 55,  168 => 53,  161 => 49,  157 => 47,  155 => 46,  151 => 44,  142 => 40,  134 => 37,  130 => 36,  126 => 35,  122 => 34,  115 => 30,  107 => 25,  103 => 23,  98 => 22,  83 => 9,  74 => 8,  55 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
