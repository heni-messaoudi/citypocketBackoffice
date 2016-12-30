<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_8a24af66397c94f899f0cf599e01431c8922411dcda3f5906f49a361d3e8f200 extends Twig_Template
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
        $__internal_d4e4e9ebe544935d089447ef619947c91dd001760a9ea19be9b3d8db47c6cc82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4e4e9ebe544935d089447ef619947c91dd001760a9ea19be9b3d8db47c6cc82->enter($__internal_d4e4e9ebe544935d089447ef619947c91dd001760a9ea19be9b3d8db47c6cc82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_3797c779f938be97036fd50da36a29fcd2b8a95643820f985526ce4a61b6f9f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3797c779f938be97036fd50da36a29fcd2b8a95643820f985526ce4a61b6f9f9->enter($__internal_3797c779f938be97036fd50da36a29fcd2b8a95643820f985526ce4a61b6f9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_d4e4e9ebe544935d089447ef619947c91dd001760a9ea19be9b3d8db47c6cc82->leave($__internal_d4e4e9ebe544935d089447ef619947c91dd001760a9ea19be9b3d8db47c6cc82_prof);

        
        $__internal_3797c779f938be97036fd50da36a29fcd2b8a95643820f985526ce4a61b6f9f9->leave($__internal_3797c779f938be97036fd50da36a29fcd2b8a95643820f985526ce4a61b6f9f9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
