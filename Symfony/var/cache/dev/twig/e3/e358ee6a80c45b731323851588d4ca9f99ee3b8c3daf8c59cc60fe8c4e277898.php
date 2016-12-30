<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_e5e84bc25a3199cacfe5604084d888b52d6da64958ef32c4198fae37514fbdca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fbc2db1aa6c82a1d00477c94b109787938b597b9b7cfd5daec3b4612ae51e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fbc2db1aa6c82a1d00477c94b109787938b597b9b7cfd5daec3b4612ae51e3d->enter($__internal_9fbc2db1aa6c82a1d00477c94b109787938b597b9b7cfd5daec3b4612ae51e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_e744c1e8b825038e16665a998ff36620b470ec1bbed3161f2675e767c85bd165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e744c1e8b825038e16665a998ff36620b470ec1bbed3161f2675e767c85bd165->enter($__internal_e744c1e8b825038e16665a998ff36620b470ec1bbed3161f2675e767c85bd165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fbc2db1aa6c82a1d00477c94b109787938b597b9b7cfd5daec3b4612ae51e3d->leave($__internal_9fbc2db1aa6c82a1d00477c94b109787938b597b9b7cfd5daec3b4612ae51e3d_prof);

        
        $__internal_e744c1e8b825038e16665a998ff36620b470ec1bbed3161f2675e767c85bd165->leave($__internal_e744c1e8b825038e16665a998ff36620b470ec1bbed3161f2675e767c85bd165_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_c2e7f7aecbdff331b9021df65c6d9844bbe12ef7aa9686c91853dac3d4f987cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2e7f7aecbdff331b9021df65c6d9844bbe12ef7aa9686c91853dac3d4f987cf->enter($__internal_c2e7f7aecbdff331b9021df65c6d9844bbe12ef7aa9686c91853dac3d4f987cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_cb344e5e2dd49ce97c669f16a40ad03cab5a23231352ef4ca3351f70eedfaa16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb344e5e2dd49ce97c669f16a40ad03cab5a23231352ef4ca3351f70eedfaa16->enter($__internal_cb344e5e2dd49ce97c669f16a40ad03cab5a23231352ef4ca3351f70eedfaa16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_cb344e5e2dd49ce97c669f16a40ad03cab5a23231352ef4ca3351f70eedfaa16->leave($__internal_cb344e5e2dd49ce97c669f16a40ad03cab5a23231352ef4ca3351f70eedfaa16_prof);

        
        $__internal_c2e7f7aecbdff331b9021df65c6d9844bbe12ef7aa9686c91853dac3d4f987cf->leave($__internal_c2e7f7aecbdff331b9021df65c6d9844bbe12ef7aa9686c91853dac3d4f987cf_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_87243ea426fcfe29958c2b754560dfe388c803eba0dd53fb625ae72a8688ed8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87243ea426fcfe29958c2b754560dfe388c803eba0dd53fb625ae72a8688ed8f->enter($__internal_87243ea426fcfe29958c2b754560dfe388c803eba0dd53fb625ae72a8688ed8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d6bb2ebe550c6e8d18919a97bdaf52669e1bb442ce07ed27648ef851fb7d5a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6bb2ebe550c6e8d18919a97bdaf52669e1bb442ce07ed27648ef851fb7d5a2e->enter($__internal_d6bb2ebe550c6e8d18919a97bdaf52669e1bb442ce07ed27648ef851fb7d5a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_d6bb2ebe550c6e8d18919a97bdaf52669e1bb442ce07ed27648ef851fb7d5a2e->leave($__internal_d6bb2ebe550c6e8d18919a97bdaf52669e1bb442ce07ed27648ef851fb7d5a2e_prof);

        
        $__internal_87243ea426fcfe29958c2b754560dfe388c803eba0dd53fb625ae72a8688ed8f->leave($__internal_87243ea426fcfe29958c2b754560dfe388c803eba0dd53fb625ae72a8688ed8f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
