<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_d81aa937c1eb3c990208ac66e18ff75060e9eeaf33957b51e613cf0be1a59c2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85d963d5bc4f8e8d3e836d605aa145495f4b538f27bee33009ea4e148b5add55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85d963d5bc4f8e8d3e836d605aa145495f4b538f27bee33009ea4e148b5add55->enter($__internal_85d963d5bc4f8e8d3e836d605aa145495f4b538f27bee33009ea4e148b5add55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_c40f9bf6f9743559295cd0952cbe2710b47c15dfc892f36ba95213942ed8c541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c40f9bf6f9743559295cd0952cbe2710b47c15dfc892f36ba95213942ed8c541->enter($__internal_c40f9bf6f9743559295cd0952cbe2710b47c15dfc892f36ba95213942ed8c541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_85d963d5bc4f8e8d3e836d605aa145495f4b538f27bee33009ea4e148b5add55->leave($__internal_85d963d5bc4f8e8d3e836d605aa145495f4b538f27bee33009ea4e148b5add55_prof);

        
        $__internal_c40f9bf6f9743559295cd0952cbe2710b47c15dfc892f36ba95213942ed8c541->leave($__internal_c40f9bf6f9743559295cd0952cbe2710b47c15dfc892f36ba95213942ed8c541_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_98bbd68d32c4f9dd5392a644f542a022f579656fe5fc1a0c5348cf3110beaf4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98bbd68d32c4f9dd5392a644f542a022f579656fe5fc1a0c5348cf3110beaf4a->enter($__internal_98bbd68d32c4f9dd5392a644f542a022f579656fe5fc1a0c5348cf3110beaf4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f12ddd89e6575dacb7bcdb1a3dfc37c274b51e2a005a1e8e04611b999c23d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f12ddd89e6575dacb7bcdb1a3dfc37c274b51e2a005a1e8e04611b999c23d6a->enter($__internal_6f12ddd89e6575dacb7bcdb1a3dfc37c274b51e2a005a1e8e04611b999c23d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6f12ddd89e6575dacb7bcdb1a3dfc37c274b51e2a005a1e8e04611b999c23d6a->leave($__internal_6f12ddd89e6575dacb7bcdb1a3dfc37c274b51e2a005a1e8e04611b999c23d6a_prof);

        
        $__internal_98bbd68d32c4f9dd5392a644f542a022f579656fe5fc1a0c5348cf3110beaf4a->leave($__internal_98bbd68d32c4f9dd5392a644f542a022f579656fe5fc1a0c5348cf3110beaf4a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
