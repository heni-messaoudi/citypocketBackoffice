<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_c866871429cb8e9bfd892483f705857db543db9b7a1288a9dfbe933c72a54ff4 extends Twig_Template
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
        $__internal_c2666c322e10daca42e620eaa3308dc670f43ff73d25c2c2a4195bca2e6f112e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2666c322e10daca42e620eaa3308dc670f43ff73d25c2c2a4195bca2e6f112e->enter($__internal_c2666c322e10daca42e620eaa3308dc670f43ff73d25c2c2a4195bca2e6f112e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_eb04c3875154edf25994c7de569753fc8a1a5722cfd74bb012ef61b6b3e6ec35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb04c3875154edf25994c7de569753fc8a1a5722cfd74bb012ef61b6b3e6ec35->enter($__internal_eb04c3875154edf25994c7de569753fc8a1a5722cfd74bb012ef61b6b3e6ec35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_c2666c322e10daca42e620eaa3308dc670f43ff73d25c2c2a4195bca2e6f112e->leave($__internal_c2666c322e10daca42e620eaa3308dc670f43ff73d25c2c2a4195bca2e6f112e_prof);

        
        $__internal_eb04c3875154edf25994c7de569753fc8a1a5722cfd74bb012ef61b6b3e6ec35->leave($__internal_eb04c3875154edf25994c7de569753fc8a1a5722cfd74bb012ef61b6b3e6ec35_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
