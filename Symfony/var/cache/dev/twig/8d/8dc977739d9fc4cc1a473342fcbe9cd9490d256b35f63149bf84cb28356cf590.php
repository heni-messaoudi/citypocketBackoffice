<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_8e21a129330f0cfe3191f0b41ecc19ece178c98c61af6e8bb1606c2f01b6e7a5 extends Twig_Template
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
        $__internal_a7bc8e0f737b50b68f4c6d5ee021f0eb9cfba7e931d5b5e4b3851a8f9bfa2bdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7bc8e0f737b50b68f4c6d5ee021f0eb9cfba7e931d5b5e4b3851a8f9bfa2bdf->enter($__internal_a7bc8e0f737b50b68f4c6d5ee021f0eb9cfba7e931d5b5e4b3851a8f9bfa2bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_5ee39538833ff365c40642eea046e948ec2253b19eef2e34f78b6991af4448bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee39538833ff365c40642eea046e948ec2253b19eef2e34f78b6991af4448bd->enter($__internal_5ee39538833ff365c40642eea046e948ec2253b19eef2e34f78b6991af4448bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_a7bc8e0f737b50b68f4c6d5ee021f0eb9cfba7e931d5b5e4b3851a8f9bfa2bdf->leave($__internal_a7bc8e0f737b50b68f4c6d5ee021f0eb9cfba7e931d5b5e4b3851a8f9bfa2bdf_prof);

        
        $__internal_5ee39538833ff365c40642eea046e948ec2253b19eef2e34f78b6991af4448bd->leave($__internal_5ee39538833ff365c40642eea046e948ec2253b19eef2e34f78b6991af4448bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
