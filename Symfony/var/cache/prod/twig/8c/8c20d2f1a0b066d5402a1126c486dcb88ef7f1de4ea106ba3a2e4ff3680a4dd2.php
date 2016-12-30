<?php

/* pslieuxBundle:lieu:view.html.twig */
class __TwigTemplate_ac0a981209f6665f083d648c8a0957b829a88b743c9547e26aa449602d10eee6 extends Twig_Template
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
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f3b6057_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_f3b6057_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/f3b6057_description_1.css");
            // line 12
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\"/>
    ";
        } else {
            // asset "f3b6057"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_f3b6057") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/f3b6057.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "    <h1 class=\"text-center lieutitle\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lieu"]) ? $context["lieu"] : null), "nom", array()), "html", null, true);
        echo "</h1>
    </br></br>
    <h4><span class=\"desctitle\">Categorie:</span> <span> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lieu"]) ? $context["lieu"] : null), "categorie", array()), "html", null, true);
        echo "</h4>
    <h4><span class=\"desctitle\">Latitude :</span> <span> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lieu"]) ? $context["lieu"] : null), "latitude", array()), "html", null, true);
        echo "</h4>
    <h4><span class=\"desctitle\">Longitude :</span> <span> ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lieu"]) ? $context["lieu"] : null), "longitude", array()), "html", null, true);
        echo "</h4>
    ";
        // line 19
        if ( !twig_test_empty($this->getAttribute((isset($context["desc"]) ? $context["desc"] : null), "adresse", array()))) {
            // line 20
            echo "        <h4><span class=\"desctitle\">Adresse :</span> <span>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["desc"]) ? $context["desc"] : null), "adresse", array()), "html", null, true);
            echo "</span></h4>
    ";
        }
        // line 22
        echo "    ";
        if ( !twig_test_empty($this->getAttribute((isset($context["desc"]) ? $context["desc"] : null), "email", array()))) {
            // line 23
            echo "        <h4><span class=\"desctitle\">Email :</span> <span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["desc"]) ? $context["desc"] : null), "email", array()), "html", null, true);
            echo "</span></h4>
    ";
        }
        // line 25
        echo "    ";
        if ( !twig_test_empty($this->getAttribute((isset($context["desc"]) ? $context["desc"] : null), "numTel", array()))) {
            // line 26
            echo "        <h4><span class=\"desctitle\">NumTél :</span> <span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["desc"]) ? $context["desc"] : null), "numTel", array()), "html", null, true);
            echo "</span></h4>
    ";
        }
        // line 28
        echo "    ";
        if ( !twig_test_empty($this->getAttribute((isset($context["desc"]) ? $context["desc"] : null), "presentation", array()))) {
            // line 29
            echo "        <h4><span class=\"desctitle\">Présentation :</span> <span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["desc"]) ? $context["desc"] : null), "presentation", array()), "html", null, true);
            echo "</span></h4>
    ";
        }
        // line 31
        echo "    </br></br>
    <a class=\"btn btn-warning btn-block\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute((isset($context["lieu"]) ? $context["lieu"] : null), "id", array()))), "html", null, true);
        echo "\">
        <span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"> Modifier</span>
    </a>
    </br>
    <a class=\"btn btn-danger btn-block\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => $this->getAttribute((isset($context["lieu"]) ? $context["lieu"] : null), "id", array()))), "html", null, true);
        echo "\">
        <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"> Supprimer</span>
    </a>
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
        return array (  135 => 36,  128 => 32,  125 => 31,  119 => 29,  116 => 28,  110 => 26,  107 => 25,  101 => 23,  98 => 22,  92 => 20,  90 => 19,  86 => 18,  82 => 17,  78 => 16,  72 => 14,  58 => 12,  53 => 10,  50 => 9,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
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
