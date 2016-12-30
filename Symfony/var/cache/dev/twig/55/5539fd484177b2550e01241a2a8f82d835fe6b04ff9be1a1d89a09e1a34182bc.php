<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_bc06382cb591c06f4a688c1535cf612d57ccd4183211f67c7867a2d8194135d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b046e57045651609e9e56915bd58e411c56b1cd390654d2ffc6a44a7047a0c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b046e57045651609e9e56915bd58e411c56b1cd390654d2ffc6a44a7047a0c9->enter($__internal_1b046e57045651609e9e56915bd58e411c56b1cd390654d2ffc6a44a7047a0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_8520cc3a49a3c61936ba126542b86fd65bbb089c31910222801e78acc35636f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8520cc3a49a3c61936ba126542b86fd65bbb089c31910222801e78acc35636f8->enter($__internal_8520cc3a49a3c61936ba126542b86fd65bbb089c31910222801e78acc35636f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b046e57045651609e9e56915bd58e411c56b1cd390654d2ffc6a44a7047a0c9->leave($__internal_1b046e57045651609e9e56915bd58e411c56b1cd390654d2ffc6a44a7047a0c9_prof);

        
        $__internal_8520cc3a49a3c61936ba126542b86fd65bbb089c31910222801e78acc35636f8->leave($__internal_8520cc3a49a3c61936ba126542b86fd65bbb089c31910222801e78acc35636f8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aa99517aa5f9f3d1ac2e5bcbdcc079b8c8711f1d48ed61ce02f1f2548c01bb89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa99517aa5f9f3d1ac2e5bcbdcc079b8c8711f1d48ed61ce02f1f2548c01bb89->enter($__internal_aa99517aa5f9f3d1ac2e5bcbdcc079b8c8711f1d48ed61ce02f1f2548c01bb89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fc6d3bf9ff45565af234b92aeb86d4ce3598fc7bc96b99f0dd88f3297b10fb4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc6d3bf9ff45565af234b92aeb86d4ce3598fc7bc96b99f0dd88f3297b10fb4b->enter($__internal_fc6d3bf9ff45565af234b92aeb86d4ce3598fc7bc96b99f0dd88f3297b10fb4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_fc6d3bf9ff45565af234b92aeb86d4ce3598fc7bc96b99f0dd88f3297b10fb4b->leave($__internal_fc6d3bf9ff45565af234b92aeb86d4ce3598fc7bc96b99f0dd88f3297b10fb4b_prof);

        
        $__internal_aa99517aa5f9f3d1ac2e5bcbdcc079b8c8711f1d48ed61ce02f1f2548c01bb89->leave($__internal_aa99517aa5f9f3d1ac2e5bcbdcc079b8c8711f1d48ed61ce02f1f2548c01bb89_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cb77ec199bdc5c509695fe76f888a7f2e8a914a3d9e47576d20f95aba3b2321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cb77ec199bdc5c509695fe76f888a7f2e8a914a3d9e47576d20f95aba3b2321->enter($__internal_2cb77ec199bdc5c509695fe76f888a7f2e8a914a3d9e47576d20f95aba3b2321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27d58785634c569cf38f40a66eeb7bf54fd986372ca216a07cf968e6889d2d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d58785634c569cf38f40a66eeb7bf54fd986372ca216a07cf968e6889d2d61->enter($__internal_27d58785634c569cf38f40a66eeb7bf54fd986372ca216a07cf968e6889d2d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_27d58785634c569cf38f40a66eeb7bf54fd986372ca216a07cf968e6889d2d61->leave($__internal_27d58785634c569cf38f40a66eeb7bf54fd986372ca216a07cf968e6889d2d61_prof);

        
        $__internal_2cb77ec199bdc5c509695fe76f888a7f2e8a914a3d9e47576d20f95aba3b2321->leave($__internal_2cb77ec199bdc5c509695fe76f888a7f2e8a914a3d9e47576d20f95aba3b2321_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
