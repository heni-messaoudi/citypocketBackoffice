<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_05f2a905ddf3c37aa4d274b539ba3d3b1be2f1d2ae53a27470d9aed4e7dd7905 extends Twig_Template
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
        $__internal_7380ba105f609eea461da59766b01aab9535d54914a1467b502c4d7cb2b56839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7380ba105f609eea461da59766b01aab9535d54914a1467b502c4d7cb2b56839->enter($__internal_7380ba105f609eea461da59766b01aab9535d54914a1467b502c4d7cb2b56839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_8a9abac2872d298f105918b7d7c97278df84b2c49a29b7dec7983a493c7eecea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a9abac2872d298f105918b7d7c97278df84b2c49a29b7dec7983a493c7eecea->enter($__internal_8a9abac2872d298f105918b7d7c97278df84b2c49a29b7dec7983a493c7eecea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7380ba105f609eea461da59766b01aab9535d54914a1467b502c4d7cb2b56839->leave($__internal_7380ba105f609eea461da59766b01aab9535d54914a1467b502c4d7cb2b56839_prof);

        
        $__internal_8a9abac2872d298f105918b7d7c97278df84b2c49a29b7dec7983a493c7eecea->leave($__internal_8a9abac2872d298f105918b7d7c97278df84b2c49a29b7dec7983a493c7eecea_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
