<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_93af6c6d28b6970220d8d60e95d5f5f7a79935c02cd4cc024cb6c8d41545107c extends Twig_Template
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
        $__internal_e1accd5cbb453961fbcf5ce94938215d681407fad09de908a96e832e10cbdfb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1accd5cbb453961fbcf5ce94938215d681407fad09de908a96e832e10cbdfb2->enter($__internal_e1accd5cbb453961fbcf5ce94938215d681407fad09de908a96e832e10cbdfb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_2a7aea62da0a827bd0c8d370072d6af963d086d14f5fe3e82e2d78e099715733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a7aea62da0a827bd0c8d370072d6af963d086d14f5fe3e82e2d78e099715733->enter($__internal_2a7aea62da0a827bd0c8d370072d6af963d086d14f5fe3e82e2d78e099715733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_e1accd5cbb453961fbcf5ce94938215d681407fad09de908a96e832e10cbdfb2->leave($__internal_e1accd5cbb453961fbcf5ce94938215d681407fad09de908a96e832e10cbdfb2_prof);

        
        $__internal_2a7aea62da0a827bd0c8d370072d6af963d086d14f5fe3e82e2d78e099715733->leave($__internal_2a7aea62da0a827bd0c8d370072d6af963d086d14f5fe3e82e2d78e099715733_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
