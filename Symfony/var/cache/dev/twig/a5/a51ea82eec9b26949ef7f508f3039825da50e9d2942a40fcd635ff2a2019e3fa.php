<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_266333d3a9e936d77d532f4b6ec5386031ad24c5961ee2a068f01e93d0a3158c extends Twig_Template
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
        $__internal_f8a37d951206ffa9730ac81b860082ac2bfbe3a2f374fcf46c1d82fe5d6a2472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8a37d951206ffa9730ac81b860082ac2bfbe3a2f374fcf46c1d82fe5d6a2472->enter($__internal_f8a37d951206ffa9730ac81b860082ac2bfbe3a2f374fcf46c1d82fe5d6a2472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_27f992442c2d29c1101ebe15e30be24064b10e6e2bd9ed1a32227f75dc692b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f992442c2d29c1101ebe15e30be24064b10e6e2bd9ed1a32227f75dc692b98->enter($__internal_27f992442c2d29c1101ebe15e30be24064b10e6e2bd9ed1a32227f75dc692b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_f8a37d951206ffa9730ac81b860082ac2bfbe3a2f374fcf46c1d82fe5d6a2472->leave($__internal_f8a37d951206ffa9730ac81b860082ac2bfbe3a2f374fcf46c1d82fe5d6a2472_prof);

        
        $__internal_27f992442c2d29c1101ebe15e30be24064b10e6e2bd9ed1a32227f75dc692b98->leave($__internal_27f992442c2d29c1101ebe15e30be24064b10e6e2bd9ed1a32227f75dc692b98_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
