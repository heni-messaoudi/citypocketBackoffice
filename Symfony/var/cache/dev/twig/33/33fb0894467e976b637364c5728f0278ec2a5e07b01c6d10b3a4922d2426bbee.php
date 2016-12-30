<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1f8126a2f468c0fe08322722b23f1820a8d5094254ed12cad406874c788d45cf extends Twig_Template
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
        $__internal_4ad181dcbd09dea982cf0ff26ff6394be9eb28f3c0d76e6a6227d9e83bbaa3cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ad181dcbd09dea982cf0ff26ff6394be9eb28f3c0d76e6a6227d9e83bbaa3cc->enter($__internal_4ad181dcbd09dea982cf0ff26ff6394be9eb28f3c0d76e6a6227d9e83bbaa3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_709dc5ffaa53b09bb09116fd01cce01d404ec0cb64ac1b3dbc8072664d118ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_709dc5ffaa53b09bb09116fd01cce01d404ec0cb64ac1b3dbc8072664d118ce4->enter($__internal_709dc5ffaa53b09bb09116fd01cce01d404ec0cb64ac1b3dbc8072664d118ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ad181dcbd09dea982cf0ff26ff6394be9eb28f3c0d76e6a6227d9e83bbaa3cc->leave($__internal_4ad181dcbd09dea982cf0ff26ff6394be9eb28f3c0d76e6a6227d9e83bbaa3cc_prof);

        
        $__internal_709dc5ffaa53b09bb09116fd01cce01d404ec0cb64ac1b3dbc8072664d118ce4->leave($__internal_709dc5ffaa53b09bb09116fd01cce01d404ec0cb64ac1b3dbc8072664d118ce4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7bb5b04a2c71a0816a17255508f0a15e9ce8509c3d41014e71d83a47fec5295b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bb5b04a2c71a0816a17255508f0a15e9ce8509c3d41014e71d83a47fec5295b->enter($__internal_7bb5b04a2c71a0816a17255508f0a15e9ce8509c3d41014e71d83a47fec5295b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_19861400d92543f535699867f275cd8f807af5763fcb8b91940070fb859a89f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19861400d92543f535699867f275cd8f807af5763fcb8b91940070fb859a89f5->enter($__internal_19861400d92543f535699867f275cd8f807af5763fcb8b91940070fb859a89f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_19861400d92543f535699867f275cd8f807af5763fcb8b91940070fb859a89f5->leave($__internal_19861400d92543f535699867f275cd8f807af5763fcb8b91940070fb859a89f5_prof);

        
        $__internal_7bb5b04a2c71a0816a17255508f0a15e9ce8509c3d41014e71d83a47fec5295b->leave($__internal_7bb5b04a2c71a0816a17255508f0a15e9ce8509c3d41014e71d83a47fec5295b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_63b6b7f1a81aca07229e1265e450cb9b25f38336020ba2f8197dfe26430e5ac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63b6b7f1a81aca07229e1265e450cb9b25f38336020ba2f8197dfe26430e5ac3->enter($__internal_63b6b7f1a81aca07229e1265e450cb9b25f38336020ba2f8197dfe26430e5ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_889a0418d11644d165ebe5f5287e9fb98ba073a415dbbf44dfb7bfb3134ac94a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_889a0418d11644d165ebe5f5287e9fb98ba073a415dbbf44dfb7bfb3134ac94a->enter($__internal_889a0418d11644d165ebe5f5287e9fb98ba073a415dbbf44dfb7bfb3134ac94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_889a0418d11644d165ebe5f5287e9fb98ba073a415dbbf44dfb7bfb3134ac94a->leave($__internal_889a0418d11644d165ebe5f5287e9fb98ba073a415dbbf44dfb7bfb3134ac94a_prof);

        
        $__internal_63b6b7f1a81aca07229e1265e450cb9b25f38336020ba2f8197dfe26430e5ac3->leave($__internal_63b6b7f1a81aca07229e1265e450cb9b25f38336020ba2f8197dfe26430e5ac3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_df8057603f2569e5e2a1d1e8e9e701999630a2196a3315c260b711388ff8383b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df8057603f2569e5e2a1d1e8e9e701999630a2196a3315c260b711388ff8383b->enter($__internal_df8057603f2569e5e2a1d1e8e9e701999630a2196a3315c260b711388ff8383b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_52197db972a4692e58d4b0c1dbbd282dfe279d754801c152f17b1239c32f3ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52197db972a4692e58d4b0c1dbbd282dfe279d754801c152f17b1239c32f3ee1->enter($__internal_52197db972a4692e58d4b0c1dbbd282dfe279d754801c152f17b1239c32f3ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_52197db972a4692e58d4b0c1dbbd282dfe279d754801c152f17b1239c32f3ee1->leave($__internal_52197db972a4692e58d4b0c1dbbd282dfe279d754801c152f17b1239c32f3ee1_prof);

        
        $__internal_df8057603f2569e5e2a1d1e8e9e701999630a2196a3315c260b711388ff8383b->leave($__internal_df8057603f2569e5e2a1d1e8e9e701999630a2196a3315c260b711388ff8383b_prof);

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
