<?php

/* base.html.twig */
class __TwigTemplate_5afac1efa19976dbe31d9c992b393688af37145366ef1c21dbe46907ec647f06 extends Twig_Template
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
        $__internal_3f83fa4c7b8901ce54e79fae39c62b84f88af683506900ac09609b6d740f201e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f83fa4c7b8901ce54e79fae39c62b84f88af683506900ac09609b6d740f201e->enter($__internal_3f83fa4c7b8901ce54e79fae39c62b84f88af683506900ac09609b6d740f201e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4fce59372e38328ac81d82e07659c22aff8def21c5599b01eaf70ffe8ed6a5ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fce59372e38328ac81d82e07659c22aff8def21c5599b01eaf70ffe8ed6a5ed->enter($__internal_4fce59372e38328ac81d82e07659c22aff8def21c5599b01eaf70ffe8ed6a5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3f83fa4c7b8901ce54e79fae39c62b84f88af683506900ac09609b6d740f201e->leave($__internal_3f83fa4c7b8901ce54e79fae39c62b84f88af683506900ac09609b6d740f201e_prof);

        
        $__internal_4fce59372e38328ac81d82e07659c22aff8def21c5599b01eaf70ffe8ed6a5ed->leave($__internal_4fce59372e38328ac81d82e07659c22aff8def21c5599b01eaf70ffe8ed6a5ed_prof);

    }

    // line 29
    public function block_categorieBlock($context, array $blocks = array())
    {
        $__internal_62777559230b4b7d535fa62dfd0fdecd845a88fc4375ee739d31873a7f51dffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62777559230b4b7d535fa62dfd0fdecd845a88fc4375ee739d31873a7f51dffb->enter($__internal_62777559230b4b7d535fa62dfd0fdecd845a88fc4375ee739d31873a7f51dffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorieBlock"));

        $__internal_e3f09a1c99c0843f06c2a456a29cc49dfcba08a0b30d77e80a97444633014676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f09a1c99c0843f06c2a456a29cc49dfcba08a0b30d77e80a97444633014676->enter($__internal_e3f09a1c99c0843f06c2a456a29cc49dfcba08a0b30d77e80a97444633014676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorieBlock"));

        
        $__internal_e3f09a1c99c0843f06c2a456a29cc49dfcba08a0b30d77e80a97444633014676->leave($__internal_e3f09a1c99c0843f06c2a456a29cc49dfcba08a0b30d77e80a97444633014676_prof);

        
        $__internal_62777559230b4b7d535fa62dfd0fdecd845a88fc4375ee739d31873a7f51dffb->leave($__internal_62777559230b4b7d535fa62dfd0fdecd845a88fc4375ee739d31873a7f51dffb_prof);

    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        $__internal_722bb2057d9c9bb3d633b39a38b5bb11e7c17959a0b9580b1c68187c7a464dc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_722bb2057d9c9bb3d633b39a38b5bb11e7c17959a0b9580b1c68187c7a464dc1->enter($__internal_722bb2057d9c9bb3d633b39a38b5bb11e7c17959a0b9580b1c68187c7a464dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_85daecad9a35c5d16921c581f590fc86637534fe5f0c89d9d6e83c3483f11e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85daecad9a35c5d16921c581f590fc86637534fe5f0c89d9d6e83c3483f11e35->enter($__internal_85daecad9a35c5d16921c581f590fc86637534fe5f0c89d9d6e83c3483f11e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_85daecad9a35c5d16921c581f590fc86637534fe5f0c89d9d6e83c3483f11e35->leave($__internal_85daecad9a35c5d16921c581f590fc86637534fe5f0c89d9d6e83c3483f11e35_prof);

        
        $__internal_722bb2057d9c9bb3d633b39a38b5bb11e7c17959a0b9580b1c68187c7a464dc1->leave($__internal_722bb2057d9c9bb3d633b39a38b5bb11e7c17959a0b9580b1c68187c7a464dc1_prof);

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
