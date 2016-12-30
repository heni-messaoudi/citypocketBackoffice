<?php

/* pslieuxBundle:lieu:login.html.twig */
class __TwigTemplate_0ef9214ba29a3944671c014873e2177926c273ffcdab419bb8dd245db0976b93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c49a333ccf74744900bf8eb0acca306c5ad95799253396e57f9aaa608b60364 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c49a333ccf74744900bf8eb0acca306c5ad95799253396e57f9aaa608b60364->enter($__internal_1c49a333ccf74744900bf8eb0acca306c5ad95799253396e57f9aaa608b60364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pslieuxBundle:lieu:login.html.twig"));

        $__internal_c5ecf0596051891d4540c826a0f26729dfcbd6cbf975808396cdd495a436e92e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ecf0596051891d4540c826a0f26729dfcbd6cbf975808396cdd495a436e92e->enter($__internal_c5ecf0596051891d4540c826a0f26729dfcbd6cbf975808396cdd495a436e92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pslieuxBundle:lieu:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\" xmlns=\"http://www.w3.org/1999/html\">
<head>
    <title>CityPocket</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b73ea08_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b73ea08_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/b73ea08_part_1_bootstrap-theme.min_1.css");
            // line 9
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\"/>
    ";
            // asset "b73ea08_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b73ea08_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/b73ea08_part_1_bootstrap.min_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\"/>
    ";
            // asset "b73ea08_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b73ea08_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/b73ea08_part_1_description_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\"/>
    ";
            // asset "b73ea08_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b73ea08_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/b73ea08_part_1_font-awesome_4.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\"/>
    ";
            // asset "b73ea08_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b73ea08_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/b73ea08_part_1_login_5.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\"/>
    ";
            // asset "b73ea08_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b73ea08_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/b73ea08_part_1_mytable_6.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\"/>
    ";
        } else {
            // asset "b73ea08"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b73ea08") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/b73ea08.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "</head>
<body>
";
        // line 13
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 14
            echo "    <div class=\"alert alert-danger\">
        Veuillez vérifier vos identifiants
    </div>
";
        }
        // line 18
        echo "<header class=\"myheader\">
    ";
        // line 19
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d3974a0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d3974a0_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/d3974a0_cplogo_1.png");
            // line 20
            echo "    <img class=\"imglogocenter img-responsive\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "d3974a0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d3974a0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/d3974a0.png");
            echo "    <img class=\"imglogocenter img-responsive\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 22
        echo "</header>
<div class=\"row\">
    <div class=\"col-md-offset-4 col-md-4\">
        <div class=\"form-login\">
            <h4>Connexion</h4>
            <form action=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
                <input required=\"required\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"
                       placeholder=\"Email\"
                       class=\"form-control input-sm chat-input\"/>
                </br>
                <input required=\"required\" type=\"password\" id=\"password\" name=\"_password\"
                       class=\"form-control input-sm chat-input\"
                       placeholder=\"Mot de passe\"/>
                </br>
                <div class=\"wrapper\">
                    <button class=\"btn btn-primary btn-md\" type=\"submit\">
                        <span class=\"glyphicon glyphicon-log-in\"></span>
                        Valider
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class=\"col-md-4\"></div>
</div>
";
        // line 47
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5fbc15d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5fbc15d_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5fbc15d_part_1_bootstrap.min_1.js");
            // line 49
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "5fbc15d_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5fbc15d_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5fbc15d_part_1_jquery.min_2.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "5fbc15d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5fbc15d") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5fbc15d.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 51
        echo "</body>
</html>";
        
        $__internal_1c49a333ccf74744900bf8eb0acca306c5ad95799253396e57f9aaa608b60364->leave($__internal_1c49a333ccf74744900bf8eb0acca306c5ad95799253396e57f9aaa608b60364_prof);

        
        $__internal_c5ecf0596051891d4540c826a0f26729dfcbd6cbf975808396cdd495a436e92e->leave($__internal_c5ecf0596051891d4540c826a0f26729dfcbd6cbf975808396cdd495a436e92e_prof);

    }

    public function getTemplateName()
    {
        return "pslieuxBundle:lieu:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 51,  151 => 49,  147 => 47,  125 => 28,  121 => 27,  114 => 22,  100 => 20,  96 => 19,  93 => 18,  87 => 14,  85 => 13,  81 => 11,  37 => 9,  33 => 7,  25 => 1,);
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
<html lang=\"fr\" xmlns=\"http://www.w3.org/1999/html\">
<head>
    <title>CityPocket</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% stylesheets filter='cssrewrite, scssphp'
    'css/*' %}
    <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\"/>
    {% endstylesheets %}
</head>
<body>
{% if error %}
    <div class=\"alert alert-danger\">
        Veuillez vérifier vos identifiants
    </div>
{% endif %}
<header class=\"myheader\">
    {% image 'img/cplogo.png'%}
    <img class=\"imglogocenter img-responsive\" src=\"{{ asset_url }}\" />
    {% endimage %}
</header>
<div class=\"row\">
    <div class=\"col-md-offset-4 col-md-4\">
        <div class=\"form-login\">
            <h4>Connexion</h4>
            <form action=\"{{ path('login_check') }}\" method=\"post\">
                <input required=\"required\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\"
                       placeholder=\"Email\"
                       class=\"form-control input-sm chat-input\"/>
                </br>
                <input required=\"required\" type=\"password\" id=\"password\" name=\"_password\"
                       class=\"form-control input-sm chat-input\"
                       placeholder=\"Mot de passe\"/>
                </br>
                <div class=\"wrapper\">
                    <button class=\"btn btn-primary btn-md\" type=\"submit\">
                        <span class=\"glyphicon glyphicon-log-in\"></span>
                        Valider
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class=\"col-md-4\"></div>
</div>
{% javascripts filter='jsqueeze'
'js/*' %}
<script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
{% endjavascripts %}
</body>
</html>", "pslieuxBundle:lieu:login.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ps\\lieuxBundle/Resources/views/lieu/login.html.twig");
    }
}
