<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_3acc2e467b320df396f6d1dcb26c162371767545ce62dc579a59f65b24030be1 extends Twig_Template
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
        $__internal_cb74abb0850b05fbc1063db3e6e350becf69ce0c1d1bcbbf6430bd58975ae81e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb74abb0850b05fbc1063db3e6e350becf69ce0c1d1bcbbf6430bd58975ae81e->enter($__internal_cb74abb0850b05fbc1063db3e6e350becf69ce0c1d1bcbbf6430bd58975ae81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_d29d55cfd30e8118fc241e0707671fa7044a47a83dcce4903412a63578d8292b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d29d55cfd30e8118fc241e0707671fa7044a47a83dcce4903412a63578d8292b->enter($__internal_d29d55cfd30e8118fc241e0707671fa7044a47a83dcce4903412a63578d8292b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_cb74abb0850b05fbc1063db3e6e350becf69ce0c1d1bcbbf6430bd58975ae81e->leave($__internal_cb74abb0850b05fbc1063db3e6e350becf69ce0c1d1bcbbf6430bd58975ae81e_prof);

        
        $__internal_d29d55cfd30e8118fc241e0707671fa7044a47a83dcce4903412a63578d8292b->leave($__internal_d29d55cfd30e8118fc241e0707671fa7044a47a83dcce4903412a63578d8292b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
