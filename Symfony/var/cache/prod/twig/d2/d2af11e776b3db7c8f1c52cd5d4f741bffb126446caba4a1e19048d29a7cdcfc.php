<?php

/* @pslieux/lieu/list.html.twig */
class __TwigTemplate_4f88ce86292b7a6f227db2cae743fd169254b0e1a63a985b24f52949f5b9b7de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@pslieux/lieu/list.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["lieux"]) ? $context["lieux"] : null)), "html", null, true);
        echo " lieux trouvés</h3>
    ";
        // line 5
        if (array_key_exists("categorie", $context)) {
            // line 6
            echo "        pour la  categorie: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "pathEndIdentifier", array(), "method"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["lieux"]) ? $context["lieux"] : null));
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
        return array (  97 => 31,  90 => 29,  82 => 26,  78 => 25,  74 => 24,  70 => 23,  66 => 22,  63 => 21,  58 => 20,  44 => 8,  38 => 6,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@pslieux/lieu/list.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ps\\lieuxBundle\\Resources\\views\\lieu\\list.html.twig");
    }
}
