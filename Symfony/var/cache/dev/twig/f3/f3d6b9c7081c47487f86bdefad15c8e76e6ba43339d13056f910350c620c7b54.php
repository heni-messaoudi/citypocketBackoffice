<?php

/* base.html.twig */
class __TwigTemplate_7254195381f38c2ce3130a9f5899c879bedef352ba87959acc7239a4b36d2a24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cb2cab8163ef6a8447545beccf6f19f41b4f1e7821c9f4e13afebbd3a155566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cb2cab8163ef6a8447545beccf6f19f41b4f1e7821c9f4e13afebbd3a155566->enter($__internal_8cb2cab8163ef6a8447545beccf6f19f41b4f1e7821c9f4e13afebbd3a155566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b1ffe8599baab162c5ed92317f92c732139809f9cbeb5387992bac8ea090947d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1ffe8599baab162c5ed92317f92c732139809f9cbeb5387992bac8ea090947d->enter($__internal_b1ffe8599baab162c5ed92317f92c732139809f9cbeb5387992bac8ea090947d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>CityPocket</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css\">
</head>
<body>
<div class=\"navbar navbar-default\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <div class=\"navbar-brand\">CityPocket</div>
        </div>
    </div>
</div>
<div class=\"container\">
    ";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "</div>
</body>
</html>
";
        
        $__internal_8cb2cab8163ef6a8447545beccf6f19f41b4f1e7821c9f4e13afebbd3a155566->leave($__internal_8cb2cab8163ef6a8447545beccf6f19f41b4f1e7821c9f4e13afebbd3a155566_prof);

        
        $__internal_b1ffe8599baab162c5ed92317f92c732139809f9cbeb5387992bac8ea090947d->leave($__internal_b1ffe8599baab162c5ed92317f92c732139809f9cbeb5387992bac8ea090947d_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_3c378223baa19048bbee4b613513db2a0af5bc9aeab379100e6e6563f007fdd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c378223baa19048bbee4b613513db2a0af5bc9aeab379100e6e6563f007fdd3->enter($__internal_3c378223baa19048bbee4b613513db2a0af5bc9aeab379100e6e6563f007fdd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_33553cb16cf89e8098f28039337ecee090ce9ed9a49270a88b596f29c2755674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33553cb16cf89e8098f28039337ecee090ce9ed9a49270a88b596f29c2755674->enter($__internal_33553cb16cf89e8098f28039337ecee090ce9ed9a49270a88b596f29c2755674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_33553cb16cf89e8098f28039337ecee090ce9ed9a49270a88b596f29c2755674->leave($__internal_33553cb16cf89e8098f28039337ecee090ce9ed9a49270a88b596f29c2755674_prof);

        
        $__internal_3c378223baa19048bbee4b613513db2a0af5bc9aeab379100e6e6563f007fdd3->leave($__internal_3c378223baa19048bbee4b613513db2a0af5bc9aeab379100e6e6563f007fdd3_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  60 => 18,  47 => 19,  45 => 18,  26 => 1,);
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
</head>
<body>
<div class=\"navbar navbar-default\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <div class=\"navbar-brand\">CityPocket</div>
        </div>
    </div>
</div>
<div class=\"container\">
    {% block content %}{% endblock %}
</div>
</body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\Symfony\\app\\Resources\\views\\base.html.twig");
    }
}
