<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_304670cb0476a2ce79a12f6033dc597dcebb3a90b2f9cf569c570dac19e1c906 extends Twig_Template
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
        $__internal_71cd66e5a13b1bab3a46c98da9969ee85a5eca1adc0ae8262664c7b6f65bee80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71cd66e5a13b1bab3a46c98da9969ee85a5eca1adc0ae8262664c7b6f65bee80->enter($__internal_71cd66e5a13b1bab3a46c98da9969ee85a5eca1adc0ae8262664c7b6f65bee80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_e1b5ef1005d32bf6ef10ca1d2e3ae5ead29d61f7ac48175372a6397d056bf3dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1b5ef1005d32bf6ef10ca1d2e3ae5ead29d61f7ac48175372a6397d056bf3dd->enter($__internal_e1b5ef1005d32bf6ef10ca1d2e3ae5ead29d61f7ac48175372a6397d056bf3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_71cd66e5a13b1bab3a46c98da9969ee85a5eca1adc0ae8262664c7b6f65bee80->leave($__internal_71cd66e5a13b1bab3a46c98da9969ee85a5eca1adc0ae8262664c7b6f65bee80_prof);

        
        $__internal_e1b5ef1005d32bf6ef10ca1d2e3ae5ead29d61f7ac48175372a6397d056bf3dd->leave($__internal_e1b5ef1005d32bf6ef10ca1d2e3ae5ead29d61f7ac48175372a6397d056bf3dd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
