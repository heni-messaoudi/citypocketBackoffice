<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_090131af062821fa3f65069f473e90526274e08563c97abc885ae90256b2f947 extends Twig_Template
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
        $__internal_a3a2f34ed5594ed5b579192bc5b035c0e0663b41c8ee2420e3a6c40c9425d62b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3a2f34ed5594ed5b579192bc5b035c0e0663b41c8ee2420e3a6c40c9425d62b->enter($__internal_a3a2f34ed5594ed5b579192bc5b035c0e0663b41c8ee2420e3a6c40c9425d62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_9b714dab2313fa3ce750dada479c656ae44ff3bc8b9aa975e62f981deb643d31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b714dab2313fa3ce750dada479c656ae44ff3bc8b9aa975e62f981deb643d31->enter($__internal_9b714dab2313fa3ce750dada479c656ae44ff3bc8b9aa975e62f981deb643d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_a3a2f34ed5594ed5b579192bc5b035c0e0663b41c8ee2420e3a6c40c9425d62b->leave($__internal_a3a2f34ed5594ed5b579192bc5b035c0e0663b41c8ee2420e3a6c40c9425d62b_prof);

        
        $__internal_9b714dab2313fa3ce750dada479c656ae44ff3bc8b9aa975e62f981deb643d31->leave($__internal_9b714dab2313fa3ce750dada479c656ae44ff3bc8b9aa975e62f981deb643d31_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
