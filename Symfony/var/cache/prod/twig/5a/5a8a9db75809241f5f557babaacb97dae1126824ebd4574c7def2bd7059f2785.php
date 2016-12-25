<?php

/* pslieuxBundle:lieu:list.html.twig */
class __TwigTemplate_ffcf96a5e700a2a7e34663a1e8e247837ab0265d78aaaca71b9e4c2e42aec558 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable(($context["lieux"] ?? null));
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
        if (($context["next_page_token"] ?? null)) {
            // line 53
            echo "            <nav>
                <ul class=\"pager\">
                    <li><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list", array("page_token" => ($context["next_page_token"] ?? null))), "html", null, true);
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
        return array (  158 => 65,  151 => 61,  147 => 59,  140 => 55,  136 => 53,  134 => 52,  130 => 50,  121 => 46,  113 => 43,  109 => 42,  105 => 41,  101 => 40,  94 => 36,  86 => 31,  78 => 26,  74 => 24,  69 => 23,  53 => 9,  50 => 8,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
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
