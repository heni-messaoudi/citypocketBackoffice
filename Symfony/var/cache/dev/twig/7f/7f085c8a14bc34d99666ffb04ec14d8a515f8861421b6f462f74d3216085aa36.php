<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d626174bdbdd950353247a744debc74283c61340d2af045b4d0a6be5d28a7a10 extends Twig_Template
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
        $__internal_97abf7a21ef0fe461879d6640a750d200554e9a8df3a527f6e93f9f162bce3d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97abf7a21ef0fe461879d6640a750d200554e9a8df3a527f6e93f9f162bce3d5->enter($__internal_97abf7a21ef0fe461879d6640a750d200554e9a8df3a527f6e93f9f162bce3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_e6a87c41b36eab19af58f8f6508c5e7c5d1a4976fdad6c1969247d27b6199872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6a87c41b36eab19af58f8f6508c5e7c5d1a4976fdad6c1969247d27b6199872->enter($__internal_e6a87c41b36eab19af58f8f6508c5e7c5d1a4976fdad6c1969247d27b6199872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_97abf7a21ef0fe461879d6640a750d200554e9a8df3a527f6e93f9f162bce3d5->leave($__internal_97abf7a21ef0fe461879d6640a750d200554e9a8df3a527f6e93f9f162bce3d5_prof);

        
        $__internal_e6a87c41b36eab19af58f8f6508c5e7c5d1a4976fdad6c1969247d27b6199872->leave($__internal_e6a87c41b36eab19af58f8f6508c5e7c5d1a4976fdad6c1969247d27b6199872_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
