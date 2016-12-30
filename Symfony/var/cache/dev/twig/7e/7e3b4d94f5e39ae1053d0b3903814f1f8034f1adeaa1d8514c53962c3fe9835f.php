<?php

/* base.html.twig */
class __TwigTemplate_ba08e68c5a9ffa568dbd74f84d70b8b23e27a13be0d33f6dcd209256defa6b82 extends Twig_Template
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
        $__internal_d7dc224e373a18078d1d657e788fb4a52346342a0e53b1ab65b6961b81990f45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7dc224e373a18078d1d657e788fb4a52346342a0e53b1ab65b6961b81990f45->enter($__internal_d7dc224e373a18078d1d657e788fb4a52346342a0e53b1ab65b6961b81990f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_638b4f5e27a3bc29eef6ddeb7478c5d3c0af3db256d123c66e04f231fb506e01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_638b4f5e27a3bc29eef6ddeb7478c5d3c0af3db256d123c66e04f231fb506e01->enter($__internal_638b4f5e27a3bc29eef6ddeb7478c5d3c0af3db256d123c66e04f231fb506e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_50cb29f_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/50cb29f_bootstrap.min_1.css");
            // line 9
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\"/>
    ";
        } else {
            // asset "50cb29f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_50cb29f") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/50cb29f.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
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
        
        $__internal_d7dc224e373a18078d1d657e788fb4a52346342a0e53b1ab65b6961b81990f45->leave($__internal_d7dc224e373a18078d1d657e788fb4a52346342a0e53b1ab65b6961b81990f45_prof);

        
        $__internal_638b4f5e27a3bc29eef6ddeb7478c5d3c0af3db256d123c66e04f231fb506e01->leave($__internal_638b4f5e27a3bc29eef6ddeb7478c5d3c0af3db256d123c66e04f231fb506e01_prof);

    }

    // line 40
    public function block_categorieBlock($context, array $blocks = array())
    {
        $__internal_8645505e05da7c5288a35cf0da406c54ffae927305ed2797853deb1781f5f92b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8645505e05da7c5288a35cf0da406c54ffae927305ed2797853deb1781f5f92b->enter($__internal_8645505e05da7c5288a35cf0da406c54ffae927305ed2797853deb1781f5f92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorieBlock"));

        $__internal_07dd1134130cf61fe0d87a106bf4d32c391a8800e895d4ce48896ce9b5168a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07dd1134130cf61fe0d87a106bf4d32c391a8800e895d4ce48896ce9b5168a2b->enter($__internal_07dd1134130cf61fe0d87a106bf4d32c391a8800e895d4ce48896ce9b5168a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorieBlock"));

        
        $__internal_07dd1134130cf61fe0d87a106bf4d32c391a8800e895d4ce48896ce9b5168a2b->leave($__internal_07dd1134130cf61fe0d87a106bf4d32c391a8800e895d4ce48896ce9b5168a2b_prof);

        
        $__internal_8645505e05da7c5288a35cf0da406c54ffae927305ed2797853deb1781f5f92b->leave($__internal_8645505e05da7c5288a35cf0da406c54ffae927305ed2797853deb1781f5f92b_prof);

    }

    // line 63
    public function block_content($context, array $blocks = array())
    {
        $__internal_9aa39fa3494bc522b58c530c63cc99c17acb3fcc25978091244e3c52c6cab14e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aa39fa3494bc522b58c530c63cc99c17acb3fcc25978091244e3c52c6cab14e->enter($__internal_9aa39fa3494bc522b58c530c63cc99c17acb3fcc25978091244e3c52c6cab14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f163260842e6fe99ba457b07bd3148fb954d74b61a616979488adb5d159f46fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f163260842e6fe99ba457b07bd3148fb954d74b61a616979488adb5d159f46fc->enter($__internal_f163260842e6fe99ba457b07bd3148fb954d74b61a616979488adb5d159f46fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_f163260842e6fe99ba457b07bd3148fb954d74b61a616979488adb5d159f46fc->leave($__internal_f163260842e6fe99ba457b07bd3148fb954d74b61a616979488adb5d159f46fc_prof);

        
        $__internal_9aa39fa3494bc522b58c530c63cc99c17acb3fcc25978091244e3c52c6cab14e->leave($__internal_9aa39fa3494bc522b58c530c63cc99c17acb3fcc25978091244e3c52c6cab14e_prof);

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
        return array (  167 => 63,  150 => 40,  138 => 68,  134 => 67,  129 => 64,  127 => 63,  114 => 53,  110 => 51,  100 => 44,  95 => 41,  93 => 40,  80 => 30,  76 => 28,  74 => 27,  66 => 22,  53 => 11,  39 => 9,  35 => 7,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <title>CityPocket</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% stylesheets filter='cssrewrite, scssphp'
    'css/bootstrap.min.css' %}
    <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\"/>
    {% endstylesheets %}
</head>
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
                <span><img src=\"{{ asset('img/logomenu_mini.png') }}\"/></span>
                City Pocket
            </span>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
            {% if is_granted('ROLE_ADMIN') %}
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"{{ path('list') }}\">
                            <span class=\"glyphicon glyphicon-th-list\" aria-hidden=\"true\"></span>
                            Liste
                        </a>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
                           aria-expanded=\"false\"><span class=\"glyphicon glyphicon-search\"></span> Categorie <span
                                    class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            {% block categorieBlock %}{% endblock %}
                        </ul>
                    </li>
                    <li>
                        <a href=\"{{ path('create') }}\">
                            <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
                            Ajouter un lieu
                        </a>
                    </li>
                </ul>
            {% endif %}
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a href=\"{{ path('logout') }}\">
                        <span class=\"glyphicon glyphicon-log-out\"></span>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class=\"container\">
    {% block content %}{% endblock %}
</div>
</body>
</html>
<script type=\"text/javascript\" src=\"{{ asset('js/jquery.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
", "base.html.twig", "C:\\wamp64\\www\\Symfony\\app\\Resources\\views\\base.html.twig");
    }
}
