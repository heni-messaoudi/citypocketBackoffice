<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9846f74e3349d63c687228ff3ddab4fd90f91f122eef474e0386b0e86c6e1f95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62e2d762686b6d749bb63b702187e4281d4c0a22f9dac406deeae55f5d9ee4ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62e2d762686b6d749bb63b702187e4281d4c0a22f9dac406deeae55f5d9ee4ca->enter($__internal_62e2d762686b6d749bb63b702187e4281d4c0a22f9dac406deeae55f5d9ee4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e5dfebbb9dd670881734934dc3a81ca796e6920f0a600be0f49f9270deb042f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5dfebbb9dd670881734934dc3a81ca796e6920f0a600be0f49f9270deb042f2->enter($__internal_e5dfebbb9dd670881734934dc3a81ca796e6920f0a600be0f49f9270deb042f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62e2d762686b6d749bb63b702187e4281d4c0a22f9dac406deeae55f5d9ee4ca->leave($__internal_62e2d762686b6d749bb63b702187e4281d4c0a22f9dac406deeae55f5d9ee4ca_prof);

        
        $__internal_e5dfebbb9dd670881734934dc3a81ca796e6920f0a600be0f49f9270deb042f2->leave($__internal_e5dfebbb9dd670881734934dc3a81ca796e6920f0a600be0f49f9270deb042f2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7fb00a5f9961f9474a8280bc8158a3bd49781fcec28b89fc40d3ce46c8826bf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fb00a5f9961f9474a8280bc8158a3bd49781fcec28b89fc40d3ce46c8826bf4->enter($__internal_7fb00a5f9961f9474a8280bc8158a3bd49781fcec28b89fc40d3ce46c8826bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7206d0399cb63a34c7de40123faca37680c0a2698f9c2bf3ac96d4bc78e5a330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7206d0399cb63a34c7de40123faca37680c0a2698f9c2bf3ac96d4bc78e5a330->enter($__internal_7206d0399cb63a34c7de40123faca37680c0a2698f9c2bf3ac96d4bc78e5a330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7206d0399cb63a34c7de40123faca37680c0a2698f9c2bf3ac96d4bc78e5a330->leave($__internal_7206d0399cb63a34c7de40123faca37680c0a2698f9c2bf3ac96d4bc78e5a330_prof);

        
        $__internal_7fb00a5f9961f9474a8280bc8158a3bd49781fcec28b89fc40d3ce46c8826bf4->leave($__internal_7fb00a5f9961f9474a8280bc8158a3bd49781fcec28b89fc40d3ce46c8826bf4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b3dbc6a4f71c7df485abc8e9e60e614aee8c00b4ea6987fc61e9b755f2b99990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3dbc6a4f71c7df485abc8e9e60e614aee8c00b4ea6987fc61e9b755f2b99990->enter($__internal_b3dbc6a4f71c7df485abc8e9e60e614aee8c00b4ea6987fc61e9b755f2b99990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_80101883dc97d3880cd2b0ae705777090195c578031ed7b905201c38bd8837a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80101883dc97d3880cd2b0ae705777090195c578031ed7b905201c38bd8837a5->enter($__internal_80101883dc97d3880cd2b0ae705777090195c578031ed7b905201c38bd8837a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_80101883dc97d3880cd2b0ae705777090195c578031ed7b905201c38bd8837a5->leave($__internal_80101883dc97d3880cd2b0ae705777090195c578031ed7b905201c38bd8837a5_prof);

        
        $__internal_b3dbc6a4f71c7df485abc8e9e60e614aee8c00b4ea6987fc61e9b755f2b99990->leave($__internal_b3dbc6a4f71c7df485abc8e9e60e614aee8c00b4ea6987fc61e9b755f2b99990_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_47634a80e01d6f98ebe354e86b1217a8b71378eae647f07101efb8dde2f9c606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47634a80e01d6f98ebe354e86b1217a8b71378eae647f07101efb8dde2f9c606->enter($__internal_47634a80e01d6f98ebe354e86b1217a8b71378eae647f07101efb8dde2f9c606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8d0be70a9c8a313f5d7013601571db50db8d415fc082c16242a6c8b7e24f9558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d0be70a9c8a313f5d7013601571db50db8d415fc082c16242a6c8b7e24f9558->enter($__internal_8d0be70a9c8a313f5d7013601571db50db8d415fc082c16242a6c8b7e24f9558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8d0be70a9c8a313f5d7013601571db50db8d415fc082c16242a6c8b7e24f9558->leave($__internal_8d0be70a9c8a313f5d7013601571db50db8d415fc082c16242a6c8b7e24f9558_prof);

        
        $__internal_47634a80e01d6f98ebe354e86b1217a8b71378eae647f07101efb8dde2f9c606->leave($__internal_47634a80e01d6f98ebe354e86b1217a8b71378eae647f07101efb8dde2f9c606_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
