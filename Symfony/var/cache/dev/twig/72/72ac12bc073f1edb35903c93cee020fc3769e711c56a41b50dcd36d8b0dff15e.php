<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_23ceea88990fa8a4ad307ccc2638a993a5e6d6769ac274a1006067cf5318b0de extends Twig_Template
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
        $__internal_5b4a0438acc8d7fefad656bba6013e3bd97d0bc29dd42f4e501f8c13715aed22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b4a0438acc8d7fefad656bba6013e3bd97d0bc29dd42f4e501f8c13715aed22->enter($__internal_5b4a0438acc8d7fefad656bba6013e3bd97d0bc29dd42f4e501f8c13715aed22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_6aaa324660149779e399bfac6d999d6c9d015c1eeaf5bdc0a8313aaa133f0bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aaa324660149779e399bfac6d999d6c9d015c1eeaf5bdc0a8313aaa133f0bd0->enter($__internal_6aaa324660149779e399bfac6d999d6c9d015c1eeaf5bdc0a8313aaa133f0bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5b4a0438acc8d7fefad656bba6013e3bd97d0bc29dd42f4e501f8c13715aed22->leave($__internal_5b4a0438acc8d7fefad656bba6013e3bd97d0bc29dd42f4e501f8c13715aed22_prof);

        
        $__internal_6aaa324660149779e399bfac6d999d6c9d015c1eeaf5bdc0a8313aaa133f0bd0->leave($__internal_6aaa324660149779e399bfac6d999d6c9d015c1eeaf5bdc0a8313aaa133f0bd0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
