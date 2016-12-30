<?php

/* pslieuxBundle:lieu:list.html.twig */
class __TwigTemplate_77f2158c7c96d340edcc15759b8a7644cb303374fd3e734a6f409e405561eafa extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_categorieBlock($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
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
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "40e784b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_40e784b_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/40e784b_mytable_1.css");
            // line 11
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" type=\"text/css\"/>
    ";
        } else {
            // asset "40e784b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_40e784b") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/40e784b.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["lieux"] ?? null));
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
        if (($context["next_page_token"] ?? null)) {
            // line 52
            echo "        <nav>
            <ul class=\"pager\">
                <li><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list", array("page_token" => ($context["next_page_token"] ?? null))), "html", null, true);
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
        return array (  165 => 60,  161 => 58,  154 => 54,  150 => 52,  148 => 51,  143 => 48,  134 => 44,  126 => 41,  122 => 40,  118 => 39,  114 => 38,  107 => 34,  101 => 31,  95 => 28,  91 => 26,  86 => 25,  72 => 13,  58 => 11,  53 => 9,  50 => 8,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "pslieuxBundle:lieu:list.html.twig", "C:\\wamp64\\www\\Symfony\\var\\cache\\prod/../../../src/ps/lieuxBundle/Resources/views/lieu/list.html.twig");
    }
}
