<?php

/* base.html.twig */
class __TwigTemplate_8b33603f0a4b23d481ba5bc37734e7f5f9f01b601414f51554f4363aba7fb2aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'categorieBlock' => array($this, 'block_categorieBlock'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <title>CityPocket</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "50cb29f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_50cb29f_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/50cb29f_bootstrap.min_1.css");
            // line 9
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" type=\"text/css\"/>
    ";
        } else {
            // asset "50cb29f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_50cb29f") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/50cb29f.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" type=\"text/css\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "</head>
<body>
<nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <span class=\"navbar-brand\">
                <span><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logomenu_mini.png"), "html", null, true);
        echo "\"/></span>
                City Pocket
            </span>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
            ";
        // line 27
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 28
            echo "                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list");
            echo "\">
                            <span class=\"glyphicon glyphicon-th-list\" aria-hidden=\"true\"></span>
                            Liste
                        </a>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
                           aria-expanded=\"false\"><span class=\"glyphicon glyphicon-search\"></span> Categorie <span
                                    class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            ";
            // line 40
            $this->displayBlock('categorieBlock', $context, $blocks);
            // line 41
            echo "                        </ul>
                    </li>
                    <li>
                        <a href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create");
            echo "\">
                            <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
                            Ajouter un lieu
                        </a>
                    </li>
                </ul>
            ";
        }
        // line 51
        echo "            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\">
                        <span class=\"glyphicon glyphicon-log-out\"></span>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class=\"container\">
    ";
        // line 63
        $this->displayBlock('content', $context, $blocks);
        // line 64
        echo "</div>
</body>
</html>
<script type=\"text/javascript\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 40
    public function block_categorieBlock($context, array $blocks = array())
    {
    }

    // line 63
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 63,  138 => 40,  132 => 68,  128 => 67,  123 => 64,  121 => 63,  108 => 53,  104 => 51,  94 => 44,  89 => 41,  87 => 40,  74 => 30,  70 => 28,  68 => 27,  60 => 22,  47 => 11,  33 => 9,  29 => 7,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "C:\\wamp64\\www\\Symfony\\app\\Resources\\views\\base.html.twig");
    }
}
