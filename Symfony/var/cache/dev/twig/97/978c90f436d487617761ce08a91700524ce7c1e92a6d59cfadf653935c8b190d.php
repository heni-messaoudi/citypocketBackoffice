<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9524e5d29c3286ea30c582599ffee52b9032a640d15bfabddd0166dc30b2788e extends Twig_Template
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
        $__internal_e6401910f9746372dbd07ee517e1883c6b1a35c7cdcaaa2969da20ff5f3a461d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6401910f9746372dbd07ee517e1883c6b1a35c7cdcaaa2969da20ff5f3a461d->enter($__internal_e6401910f9746372dbd07ee517e1883c6b1a35c7cdcaaa2969da20ff5f3a461d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_5295bda579cd81459e74625b4e019d247f40983d7338f4878336692db8997fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5295bda579cd81459e74625b4e019d247f40983d7338f4878336692db8997fc3->enter($__internal_5295bda579cd81459e74625b4e019d247f40983d7338f4878336692db8997fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6401910f9746372dbd07ee517e1883c6b1a35c7cdcaaa2969da20ff5f3a461d->leave($__internal_e6401910f9746372dbd07ee517e1883c6b1a35c7cdcaaa2969da20ff5f3a461d_prof);

        
        $__internal_5295bda579cd81459e74625b4e019d247f40983d7338f4878336692db8997fc3->leave($__internal_5295bda579cd81459e74625b4e019d247f40983d7338f4878336692db8997fc3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_644561af577313413c5877e01fb7208181c10fcc2446088aaa4b6c54784ee4d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_644561af577313413c5877e01fb7208181c10fcc2446088aaa4b6c54784ee4d5->enter($__internal_644561af577313413c5877e01fb7208181c10fcc2446088aaa4b6c54784ee4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3fd6cdb052e3e86c63429f403817c3063daab88ef456e3e4d1952cdfdd5ef24d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd6cdb052e3e86c63429f403817c3063daab88ef456e3e4d1952cdfdd5ef24d->enter($__internal_3fd6cdb052e3e86c63429f403817c3063daab88ef456e3e4d1952cdfdd5ef24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3fd6cdb052e3e86c63429f403817c3063daab88ef456e3e4d1952cdfdd5ef24d->leave($__internal_3fd6cdb052e3e86c63429f403817c3063daab88ef456e3e4d1952cdfdd5ef24d_prof);

        
        $__internal_644561af577313413c5877e01fb7208181c10fcc2446088aaa4b6c54784ee4d5->leave($__internal_644561af577313413c5877e01fb7208181c10fcc2446088aaa4b6c54784ee4d5_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf5e6d87dde08821b2687b9016e355f8677e659cd84293fef4a7922794952f63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf5e6d87dde08821b2687b9016e355f8677e659cd84293fef4a7922794952f63->enter($__internal_cf5e6d87dde08821b2687b9016e355f8677e659cd84293fef4a7922794952f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_149018a81dda71ec09abf79b82bb536560382ad8a44d3a8b74161160dcc8d793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_149018a81dda71ec09abf79b82bb536560382ad8a44d3a8b74161160dcc8d793->enter($__internal_149018a81dda71ec09abf79b82bb536560382ad8a44d3a8b74161160dcc8d793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_149018a81dda71ec09abf79b82bb536560382ad8a44d3a8b74161160dcc8d793->leave($__internal_149018a81dda71ec09abf79b82bb536560382ad8a44d3a8b74161160dcc8d793_prof);

        
        $__internal_cf5e6d87dde08821b2687b9016e355f8677e659cd84293fef4a7922794952f63->leave($__internal_cf5e6d87dde08821b2687b9016e355f8677e659cd84293fef4a7922794952f63_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3f94e8f1d4ff3f504959cdd031bb53ab0f6fca74a07738cc1dcdc9ebb4410db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3f94e8f1d4ff3f504959cdd031bb53ab0f6fca74a07738cc1dcdc9ebb4410db->enter($__internal_b3f94e8f1d4ff3f504959cdd031bb53ab0f6fca74a07738cc1dcdc9ebb4410db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba39d70b80ef8f84f68597fb5ed8b26dd99887f457154ea6113217914b00a143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba39d70b80ef8f84f68597fb5ed8b26dd99887f457154ea6113217914b00a143->enter($__internal_ba39d70b80ef8f84f68597fb5ed8b26dd99887f457154ea6113217914b00a143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ba39d70b80ef8f84f68597fb5ed8b26dd99887f457154ea6113217914b00a143->leave($__internal_ba39d70b80ef8f84f68597fb5ed8b26dd99887f457154ea6113217914b00a143_prof);

        
        $__internal_b3f94e8f1d4ff3f504959cdd031bb53ab0f6fca74a07738cc1dcdc9ebb4410db->leave($__internal_b3f94e8f1d4ff3f504959cdd031bb53ab0f6fca74a07738cc1dcdc9ebb4410db_prof);

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
