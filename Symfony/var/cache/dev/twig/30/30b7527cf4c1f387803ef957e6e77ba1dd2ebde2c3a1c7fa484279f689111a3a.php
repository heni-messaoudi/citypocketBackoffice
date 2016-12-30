<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_3a806ce212e4827cb2716dd7697c954555ed6311772c8fbff479b7d67aba0a89 extends Twig_Template
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
        $__internal_e75764d0c52f334d48c1bf57bf459436e3eccad2b558d9d3b3c66c8d3e3b63d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e75764d0c52f334d48c1bf57bf459436e3eccad2b558d9d3b3c66c8d3e3b63d1->enter($__internal_e75764d0c52f334d48c1bf57bf459436e3eccad2b558d9d3b3c66c8d3e3b63d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_16f219f52bb0c9c1bc0112ef19e4ca4dad5e3a1bc1b27988f8b703a32fff1b0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16f219f52bb0c9c1bc0112ef19e4ca4dad5e3a1bc1b27988f8b703a32fff1b0c->enter($__internal_16f219f52bb0c9c1bc0112ef19e4ca4dad5e3a1bc1b27988f8b703a32fff1b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_e75764d0c52f334d48c1bf57bf459436e3eccad2b558d9d3b3c66c8d3e3b63d1->leave($__internal_e75764d0c52f334d48c1bf57bf459436e3eccad2b558d9d3b3c66c8d3e3b63d1_prof);

        
        $__internal_16f219f52bb0c9c1bc0112ef19e4ca4dad5e3a1bc1b27988f8b703a32fff1b0c->leave($__internal_16f219f52bb0c9c1bc0112ef19e4ca4dad5e3a1bc1b27988f8b703a32fff1b0c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
