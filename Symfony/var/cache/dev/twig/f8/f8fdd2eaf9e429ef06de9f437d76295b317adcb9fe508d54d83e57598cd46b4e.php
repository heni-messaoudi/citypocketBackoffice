<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_251ee65c00346a62e41a0179996b7627510553d6c63ee127be116a4cf4e273ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58b60bd0935812e2d908a860dd3ba3353a85377ab535be2555718072233cc364 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58b60bd0935812e2d908a860dd3ba3353a85377ab535be2555718072233cc364->enter($__internal_58b60bd0935812e2d908a860dd3ba3353a85377ab535be2555718072233cc364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1f5d0045fe6935d715d3b154e2d7c7cc22fe8010718904d9b2f891f6819b74c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f5d0045fe6935d715d3b154e2d7c7cc22fe8010718904d9b2f891f6819b74c8->enter($__internal_1f5d0045fe6935d715d3b154e2d7c7cc22fe8010718904d9b2f891f6819b74c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58b60bd0935812e2d908a860dd3ba3353a85377ab535be2555718072233cc364->leave($__internal_58b60bd0935812e2d908a860dd3ba3353a85377ab535be2555718072233cc364_prof);

        
        $__internal_1f5d0045fe6935d715d3b154e2d7c7cc22fe8010718904d9b2f891f6819b74c8->leave($__internal_1f5d0045fe6935d715d3b154e2d7c7cc22fe8010718904d9b2f891f6819b74c8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d1989e5f8bc933865bb13a64a28950e3289cbace3b55422a3c79bb66162119a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1989e5f8bc933865bb13a64a28950e3289cbace3b55422a3c79bb66162119a1->enter($__internal_d1989e5f8bc933865bb13a64a28950e3289cbace3b55422a3c79bb66162119a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_838c66426dcdc9f4659da3217d4ceab87fda6d59a634273bab60cd9b8a0cf54a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_838c66426dcdc9f4659da3217d4ceab87fda6d59a634273bab60cd9b8a0cf54a->enter($__internal_838c66426dcdc9f4659da3217d4ceab87fda6d59a634273bab60cd9b8a0cf54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_838c66426dcdc9f4659da3217d4ceab87fda6d59a634273bab60cd9b8a0cf54a->leave($__internal_838c66426dcdc9f4659da3217d4ceab87fda6d59a634273bab60cd9b8a0cf54a_prof);

        
        $__internal_d1989e5f8bc933865bb13a64a28950e3289cbace3b55422a3c79bb66162119a1->leave($__internal_d1989e5f8bc933865bb13a64a28950e3289cbace3b55422a3c79bb66162119a1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0023508eca5b4c525b4574868ea08f9cdaea3bf598979aab72b6347e8ef1b6e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0023508eca5b4c525b4574868ea08f9cdaea3bf598979aab72b6347e8ef1b6e4->enter($__internal_0023508eca5b4c525b4574868ea08f9cdaea3bf598979aab72b6347e8ef1b6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9cc546e3617ee651b5111c1373e446fe15c62b7e240a8802974107a3fbd6e66e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cc546e3617ee651b5111c1373e446fe15c62b7e240a8802974107a3fbd6e66e->enter($__internal_9cc546e3617ee651b5111c1373e446fe15c62b7e240a8802974107a3fbd6e66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9cc546e3617ee651b5111c1373e446fe15c62b7e240a8802974107a3fbd6e66e->leave($__internal_9cc546e3617ee651b5111c1373e446fe15c62b7e240a8802974107a3fbd6e66e_prof);

        
        $__internal_0023508eca5b4c525b4574868ea08f9cdaea3bf598979aab72b6347e8ef1b6e4->leave($__internal_0023508eca5b4c525b4574868ea08f9cdaea3bf598979aab72b6347e8ef1b6e4_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e1efd9eb5b3e7eff443bc77e355a08c04f1b851c2b6fd38e213824adf41b707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e1efd9eb5b3e7eff443bc77e355a08c04f1b851c2b6fd38e213824adf41b707->enter($__internal_2e1efd9eb5b3e7eff443bc77e355a08c04f1b851c2b6fd38e213824adf41b707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_562e212c10ec32f8905eaecde5994391968aabbb7dc0721320fc7cf35aee7eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_562e212c10ec32f8905eaecde5994391968aabbb7dc0721320fc7cf35aee7eb3->enter($__internal_562e212c10ec32f8905eaecde5994391968aabbb7dc0721320fc7cf35aee7eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_562e212c10ec32f8905eaecde5994391968aabbb7dc0721320fc7cf35aee7eb3->leave($__internal_562e212c10ec32f8905eaecde5994391968aabbb7dc0721320fc7cf35aee7eb3_prof);

        
        $__internal_2e1efd9eb5b3e7eff443bc77e355a08c04f1b851c2b6fd38e213824adf41b707->leave($__internal_2e1efd9eb5b3e7eff443bc77e355a08c04f1b851c2b6fd38e213824adf41b707_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
