<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_3f8fcfd17e48d5e97fa9a68e92e258ec3275e09332bbd056ce214f62b5cb9e30 extends Twig_Template
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
        $__internal_b2df9452fd089aae9c89b0065b12e347aeec23b56384ee9ea0c75a1b842ca189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2df9452fd089aae9c89b0065b12e347aeec23b56384ee9ea0c75a1b842ca189->enter($__internal_b2df9452fd089aae9c89b0065b12e347aeec23b56384ee9ea0c75a1b842ca189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_2baae1eb7e12fcd845aaad9cccc9ba7bfc0813e4736c8941c22ae675731a3e25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2baae1eb7e12fcd845aaad9cccc9ba7bfc0813e4736c8941c22ae675731a3e25->enter($__internal_2baae1eb7e12fcd845aaad9cccc9ba7bfc0813e4736c8941c22ae675731a3e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_b2df9452fd089aae9c89b0065b12e347aeec23b56384ee9ea0c75a1b842ca189->leave($__internal_b2df9452fd089aae9c89b0065b12e347aeec23b56384ee9ea0c75a1b842ca189_prof);

        
        $__internal_2baae1eb7e12fcd845aaad9cccc9ba7bfc0813e4736c8941c22ae675731a3e25->leave($__internal_2baae1eb7e12fcd845aaad9cccc9ba7bfc0813e4736c8941c22ae675731a3e25_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
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
", "@Twig/Exception/error.xml.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
