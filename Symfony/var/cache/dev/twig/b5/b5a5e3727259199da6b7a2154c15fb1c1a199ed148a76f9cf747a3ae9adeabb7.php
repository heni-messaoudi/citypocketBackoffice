<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b0ffd13294ebccdf0f5300242cf6e1b2ac8564d6b919a365cbddcf1e9c445bdc extends Twig_Template
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
        $__internal_8f761c550f601b45803d410f4dbe47768aaf1be86903b28811eb082309c942d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f761c550f601b45803d410f4dbe47768aaf1be86903b28811eb082309c942d7->enter($__internal_8f761c550f601b45803d410f4dbe47768aaf1be86903b28811eb082309c942d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_0134bc27abec0f09a8b3f6198d3a9a2b0ab341ab5729675f1a1079beadbc971e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0134bc27abec0f09a8b3f6198d3a9a2b0ab341ab5729675f1a1079beadbc971e->enter($__internal_0134bc27abec0f09a8b3f6198d3a9a2b0ab341ab5729675f1a1079beadbc971e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_8f761c550f601b45803d410f4dbe47768aaf1be86903b28811eb082309c942d7->leave($__internal_8f761c550f601b45803d410f4dbe47768aaf1be86903b28811eb082309c942d7_prof);

        
        $__internal_0134bc27abec0f09a8b3f6198d3a9a2b0ab341ab5729675f1a1079beadbc971e->leave($__internal_0134bc27abec0f09a8b3f6198d3a9a2b0ab341ab5729675f1a1079beadbc971e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
