<?php

/* pslieuxBundle:lieu:view.html.twig */
class __TwigTemplate_2c55b2a5d5339a21c8ac5770bbbf6b5ce70b7bcd1744425379ab43bbefd598e7 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_categorieBlock($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
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

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    <h1>Détails du lieu</h1>
    <div class=\"media\">
        <div class=\"media-body\">
            <h3 class=\"media-heading\">Nom : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lieu"]) ? $context["lieu"] : null), "nom", array()), "html", null, true);
        echo "</h3>
            <p> Categorie : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lieu"]) ? $context["lieu"] : null), "categorie", array()), "html", null, true);
        echo "</p>
            <p>Latitude : ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lieu"]) ? $context["lieu"] : null), "latitude", array()), "html", null, true);
        echo "</p>
            <p>Longitude : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lieu"]) ? $context["lieu"] : null), "longitude", array()), "html", null, true);
        echo "</p>
            ";
        // line 17
        if ( !twig_test_empty($this->getAttribute((isset($context["desc"]) ? $context["desc"] : null), "adresse", array()))) {
            // line 18
            echo "                <p>Adresse : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["desc"]) ? $context["desc"] : null), "adresse", array()), "html", null, true);
            echo "</p>
            ";
        }
        // line 20
        echo "            ";
        if ( !twig_test_empty($this->getAttribute((isset($context["desc"]) ? $context["desc"] : null), "email", array()))) {
            // line 21
            echo "                <p>Email : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["desc"]) ? $context["desc"] : null), "email", array()), "html", null, true);
            echo "</p>
            ";
        }
        // line 23
        echo "            ";
        if ( !twig_test_empty($this->getAttribute((isset($context["desc"]) ? $context["desc"] : null), "numTel", array()))) {
            // line 24
            echo "                <p>NumTél : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["desc"]) ? $context["desc"] : null), "numTel", array()), "html", null, true);
            echo "</p>
            ";
        }
        // line 26
        echo "            ";
        if ( !twig_test_empty($this->getAttribute((isset($context["desc"]) ? $context["desc"] : null), "presentation", array()))) {
            // line 27
            echo "                <p>Présentation : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["desc"]) ? $context["desc"] : null), "presentation", array()), "html", null, true);
            echo "</p>
            ";
        }
        // line 29
        echo "        </div>
    </div>
";
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
        return array (  109 => 29,  103 => 27,  100 => 26,  94 => 24,  91 => 23,  85 => 21,  82 => 20,  76 => 18,  74 => 17,  70 => 16,  66 => 15,  62 => 14,  58 => 13,  53 => 10,  50 => 9,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "pslieuxBundle:lieu:view.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ps\\lieuxBundle/Resources/views/lieu/view.html.twig");
    }
}
