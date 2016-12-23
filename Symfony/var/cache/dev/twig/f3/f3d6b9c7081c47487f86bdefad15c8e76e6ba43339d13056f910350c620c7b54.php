<?php

/* base.html.twig */
class __TwigTemplate_7254195381f38c2ce3130a9f5899c879bedef352ba87959acc7239a4b36d2a24 extends Twig_Template
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
        $__internal_da1985a8dd4730cbe3f0ee618b3054fe38a536b6757d49cf24fd7004b0119872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da1985a8dd4730cbe3f0ee618b3054fe38a536b6757d49cf24fd7004b0119872->enter($__internal_da1985a8dd4730cbe3f0ee618b3054fe38a536b6757d49cf24fd7004b0119872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_392c7bd590d0d2a78e0b865763a34cf891163b13a02a0cfa61c68705377e916b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392c7bd590d0d2a78e0b865763a34cf891163b13a02a0cfa61c68705377e916b->enter($__internal_392c7bd590d0d2a78e0b865763a34cf891163b13a02a0cfa61c68705377e916b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>CityPocket</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
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
            <a class=\"navbar-brand\" href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list");
        echo "\">City Pocket</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list");
        echo "\">Liste</a></li>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        <span class=\"glyphicon glyphicon-search\"></span> Filtrer par categorie <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        ";
        // line 29
        $this->displayBlock('categorieBlock', $context, $blocks);
        // line 30
        echo "                    </ul>
                </li>
                <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create");
        echo "\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> Ajouter un lieu</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class=\"container\">
    ";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "</div>
</body>
</html>
";
        
        $__internal_da1985a8dd4730cbe3f0ee618b3054fe38a536b6757d49cf24fd7004b0119872->leave($__internal_da1985a8dd4730cbe3f0ee618b3054fe38a536b6757d49cf24fd7004b0119872_prof);

        
        $__internal_392c7bd590d0d2a78e0b865763a34cf891163b13a02a0cfa61c68705377e916b->leave($__internal_392c7bd590d0d2a78e0b865763a34cf891163b13a02a0cfa61c68705377e916b_prof);

    }

    // line 29
    public function block_categorieBlock($context, array $blocks = array())
    {
        $__internal_d480b9073cfd8d5dbfb3f990602a46c8a3ad454a3338b7e5b66c3e7c986058f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d480b9073cfd8d5dbfb3f990602a46c8a3ad454a3338b7e5b66c3e7c986058f5->enter($__internal_d480b9073cfd8d5dbfb3f990602a46c8a3ad454a3338b7e5b66c3e7c986058f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorieBlock"));

        $__internal_4db1eb4060e83f1b64c940f958e2814a4608e4c58b10a4d043c77e45448c4a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db1eb4060e83f1b64c940f958e2814a4608e4c58b10a4d043c77e45448c4a05->enter($__internal_4db1eb4060e83f1b64c940f958e2814a4608e4c58b10a4d043c77e45448c4a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorieBlock"));

        
        $__internal_4db1eb4060e83f1b64c940f958e2814a4608e4c58b10a4d043c77e45448c4a05->leave($__internal_4db1eb4060e83f1b64c940f958e2814a4608e4c58b10a4d043c77e45448c4a05_prof);

        
        $__internal_d480b9073cfd8d5dbfb3f990602a46c8a3ad454a3338b7e5b66c3e7c986058f5->leave($__internal_d480b9073cfd8d5dbfb3f990602a46c8a3ad454a3338b7e5b66c3e7c986058f5_prof);

    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        $__internal_c1a2414004e2aeb53a71bc25f54368d8c7cee7b2bffbec6b308baac483e86d91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1a2414004e2aeb53a71bc25f54368d8c7cee7b2bffbec6b308baac483e86d91->enter($__internal_c1a2414004e2aeb53a71bc25f54368d8c7cee7b2bffbec6b308baac483e86d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9be8ebaee5d519d85b58940f3bcb139516696e04dd22d5d763da816d92441820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9be8ebaee5d519d85b58940f3bcb139516696e04dd22d5d763da816d92441820->enter($__internal_9be8ebaee5d519d85b58940f3bcb139516696e04dd22d5d763da816d92441820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_9be8ebaee5d519d85b58940f3bcb139516696e04dd22d5d763da816d92441820->leave($__internal_9be8ebaee5d519d85b58940f3bcb139516696e04dd22d5d763da816d92441820_prof);

        
        $__internal_c1a2414004e2aeb53a71bc25f54368d8c7cee7b2bffbec6b308baac483e86d91->leave($__internal_c1a2414004e2aeb53a71bc25f54368d8c7cee7b2bffbec6b308baac483e86d91_prof);

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
        return array (  110 => 38,  93 => 29,  80 => 39,  78 => 38,  69 => 32,  65 => 30,  63 => 29,  55 => 24,  48 => 20,  27 => 1,);
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
<html lang=\"en\">
<head>
    <title>CityPocket</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
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
            <a class=\"navbar-brand\" href=\"{{ path('list') }}\">City Pocket</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"{{ path('list') }}\">Liste</a></li>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        <span class=\"glyphicon glyphicon-search\"></span> Filtrer par categorie <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        {% block categorieBlock %}{% endblock %}
                    </ul>
                </li>
                <li><a href=\"{{ path('create') }}\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> Ajouter un lieu</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class=\"container\">
    {% block content %}{% endblock %}
</div>
</body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\Symfony\\app\\Resources\\views\\base.html.twig");
    }
}
