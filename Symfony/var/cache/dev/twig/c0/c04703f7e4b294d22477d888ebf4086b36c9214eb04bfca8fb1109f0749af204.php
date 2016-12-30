<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_6df0c8beb57086076f54b8616c12c634b501ea2cfce5c3e1f09544f37bd0d50e extends Twig_Template
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
        $__internal_8eec12ae85ce1129aa212326de42575178ccc21b6ef7ca42c29aed13ff71de65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eec12ae85ce1129aa212326de42575178ccc21b6ef7ca42c29aed13ff71de65->enter($__internal_8eec12ae85ce1129aa212326de42575178ccc21b6ef7ca42c29aed13ff71de65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_7582b54441065d4e2940c5f17bcbaef550417abb0737ee4181edc5f1341c26fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7582b54441065d4e2940c5f17bcbaef550417abb0737ee4181edc5f1341c26fa->enter($__internal_7582b54441065d4e2940c5f17bcbaef550417abb0737ee4181edc5f1341c26fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_8eec12ae85ce1129aa212326de42575178ccc21b6ef7ca42c29aed13ff71de65->leave($__internal_8eec12ae85ce1129aa212326de42575178ccc21b6ef7ca42c29aed13ff71de65_prof);

        
        $__internal_7582b54441065d4e2940c5f17bcbaef550417abb0737ee4181edc5f1341c26fa->leave($__internal_7582b54441065d4e2940c5f17bcbaef550417abb0737ee4181edc5f1341c26fa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
