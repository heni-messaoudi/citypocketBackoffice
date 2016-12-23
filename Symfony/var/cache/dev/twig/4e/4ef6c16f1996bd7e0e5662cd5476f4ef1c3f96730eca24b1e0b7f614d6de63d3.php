<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ec1f344120184b67b973dac0f23948016261f5008d8f5ac029c64d51a91a23e2 extends Twig_Template
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
        $__internal_228941946dd4647b158ed22ffdfb26809d98ab20458c2921880ef86b0bb19062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_228941946dd4647b158ed22ffdfb26809d98ab20458c2921880ef86b0bb19062->enter($__internal_228941946dd4647b158ed22ffdfb26809d98ab20458c2921880ef86b0bb19062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_92dd0500924a50084cf11d7a019a95f11afcc220fa703eed02fa2c27645379c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92dd0500924a50084cf11d7a019a95f11afcc220fa703eed02fa2c27645379c1->enter($__internal_92dd0500924a50084cf11d7a019a95f11afcc220fa703eed02fa2c27645379c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_228941946dd4647b158ed22ffdfb26809d98ab20458c2921880ef86b0bb19062->leave($__internal_228941946dd4647b158ed22ffdfb26809d98ab20458c2921880ef86b0bb19062_prof);

        
        $__internal_92dd0500924a50084cf11d7a019a95f11afcc220fa703eed02fa2c27645379c1->leave($__internal_92dd0500924a50084cf11d7a019a95f11afcc220fa703eed02fa2c27645379c1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e0275c2f48dc0b3917ba98042859d1907ceff65f523a6afaafcd93bdc3972bd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0275c2f48dc0b3917ba98042859d1907ceff65f523a6afaafcd93bdc3972bd0->enter($__internal_e0275c2f48dc0b3917ba98042859d1907ceff65f523a6afaafcd93bdc3972bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b5d34e8da3035ebbb50e03b07d93980a44b0a4876f48c751220881afca0c034b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d34e8da3035ebbb50e03b07d93980a44b0a4876f48c751220881afca0c034b->enter($__internal_b5d34e8da3035ebbb50e03b07d93980a44b0a4876f48c751220881afca0c034b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b5d34e8da3035ebbb50e03b07d93980a44b0a4876f48c751220881afca0c034b->leave($__internal_b5d34e8da3035ebbb50e03b07d93980a44b0a4876f48c751220881afca0c034b_prof);

        
        $__internal_e0275c2f48dc0b3917ba98042859d1907ceff65f523a6afaafcd93bdc3972bd0->leave($__internal_e0275c2f48dc0b3917ba98042859d1907ceff65f523a6afaafcd93bdc3972bd0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_98ae40a02f138367c90ef6995e6f355049929879c20f0c155c8b288c11f4c766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98ae40a02f138367c90ef6995e6f355049929879c20f0c155c8b288c11f4c766->enter($__internal_98ae40a02f138367c90ef6995e6f355049929879c20f0c155c8b288c11f4c766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2b2c9b709f84e37a55a50e2c85d136867b20a3ad70b05b183e837147e2c1a477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b2c9b709f84e37a55a50e2c85d136867b20a3ad70b05b183e837147e2c1a477->enter($__internal_2b2c9b709f84e37a55a50e2c85d136867b20a3ad70b05b183e837147e2c1a477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2b2c9b709f84e37a55a50e2c85d136867b20a3ad70b05b183e837147e2c1a477->leave($__internal_2b2c9b709f84e37a55a50e2c85d136867b20a3ad70b05b183e837147e2c1a477_prof);

        
        $__internal_98ae40a02f138367c90ef6995e6f355049929879c20f0c155c8b288c11f4c766->leave($__internal_98ae40a02f138367c90ef6995e6f355049929879c20f0c155c8b288c11f4c766_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b8294962ce967ea33d0da089cf60a5b68d5abd58c8a2b2a7fbd03fb8099a556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b8294962ce967ea33d0da089cf60a5b68d5abd58c8a2b2a7fbd03fb8099a556->enter($__internal_6b8294962ce967ea33d0da089cf60a5b68d5abd58c8a2b2a7fbd03fb8099a556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b29bbfb8fa8988b7f51c6aeb1852a6aa29976ef9d0e5a64547538880958bd467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b29bbfb8fa8988b7f51c6aeb1852a6aa29976ef9d0e5a64547538880958bd467->enter($__internal_b29bbfb8fa8988b7f51c6aeb1852a6aa29976ef9d0e5a64547538880958bd467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_b29bbfb8fa8988b7f51c6aeb1852a6aa29976ef9d0e5a64547538880958bd467->leave($__internal_b29bbfb8fa8988b7f51c6aeb1852a6aa29976ef9d0e5a64547538880958bd467_prof);

        
        $__internal_6b8294962ce967ea33d0da089cf60a5b68d5abd58c8a2b2a7fbd03fb8099a556->leave($__internal_6b8294962ce967ea33d0da089cf60a5b68d5abd58c8a2b2a7fbd03fb8099a556_prof);

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
