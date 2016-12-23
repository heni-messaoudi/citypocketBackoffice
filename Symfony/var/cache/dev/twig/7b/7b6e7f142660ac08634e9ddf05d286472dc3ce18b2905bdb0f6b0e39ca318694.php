<?php

/* MisdPhoneNumberBundle:Form:tel_bootstrap.html.twig */
class __TwigTemplate_9bd37a26cb3043fdb83de7074b3b8e3f692f3f9bb1fab3f1c1024dd30c937c0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tel_widget' => array($this, 'block_tel_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91f26ca93598cdfd48cbca6088ba50d62c9dd9afdd425c8dddf155318ae368eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f26ca93598cdfd48cbca6088ba50d62c9dd9afdd425c8dddf155318ae368eb->enter($__internal_91f26ca93598cdfd48cbca6088ba50d62c9dd9afdd425c8dddf155318ae368eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MisdPhoneNumberBundle:Form:tel_bootstrap.html.twig"));

        $__internal_f672140bc340dcc47c755159b54b539e49c0095093d7301c89c9182dc62f1811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f672140bc340dcc47c755159b54b539e49c0095093d7301c89c9182dc62f1811->enter($__internal_f672140bc340dcc47c755159b54b539e49c0095093d7301c89c9182dc62f1811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MisdPhoneNumberBundle:Form:tel_bootstrap.html.twig"));

        // line 1
        $this->displayBlock('tel_widget', $context, $blocks);
        
        $__internal_91f26ca93598cdfd48cbca6088ba50d62c9dd9afdd425c8dddf155318ae368eb->leave($__internal_91f26ca93598cdfd48cbca6088ba50d62c9dd9afdd425c8dddf155318ae368eb_prof);

        
        $__internal_f672140bc340dcc47c755159b54b539e49c0095093d7301c89c9182dc62f1811->leave($__internal_f672140bc340dcc47c755159b54b539e49c0095093d7301c89c9182dc62f1811_prof);

    }

    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_ecd4db57ee174fbc938f73669254fd1d1865184a7525f0765c9cc70e8cd5406e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecd4db57ee174fbc938f73669254fd1d1865184a7525f0765c9cc70e8cd5406e->enter($__internal_ecd4db57ee174fbc938f73669254fd1d1865184a7525f0765c9cc70e8cd5406e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_884c43b7fb7941f6bae4c8cf58029898ffd132c434f1dda106bfa3674bdbb51c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884c43b7fb7941f6bae4c8cf58029898ffd132c434f1dda106bfa3674bdbb51c->enter($__internal_884c43b7fb7941f6bae4c8cf58029898ffd132c434f1dda106bfa3674bdbb51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 2
        if ((($context["widget"] ?? $this->getContext($context, "widget")) === constant("Misd\\PhoneNumberBundle\\Form\\Type\\PhoneNumberType::WIDGET_COUNTRY_CHOICE"))) {
            // line 3
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 4
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 5
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "country", array()), 'widget');
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "number", array()), 'widget');
            // line 7
            echo "</div>
    ";
        } else {
            // line 9
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_884c43b7fb7941f6bae4c8cf58029898ffd132c434f1dda106bfa3674bdbb51c->leave($__internal_884c43b7fb7941f6bae4c8cf58029898ffd132c434f1dda106bfa3674bdbb51c_prof);

        
        $__internal_ecd4db57ee174fbc938f73669254fd1d1865184a7525f0765c9cc70e8cd5406e->leave($__internal_ecd4db57ee174fbc938f73669254fd1d1865184a7525f0765c9cc70e8cd5406e_prof);

    }

    public function getTemplateName()
    {
        return "MisdPhoneNumberBundle:Form:tel_bootstrap.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  57 => 7,  55 => 6,  53 => 5,  49 => 4,  46 => 3,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block tel_widget -%}
    {% if widget is constant('Misd\\\\PhoneNumberBundle\\\\Form\\\\Type\\\\PhoneNumberType::WIDGET_COUNTRY_CHOICE') %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) %}
        <div {{ block('widget_container_attributes') }}>
            {{- form_widget(form.country) -}}
            {{- form_widget(form.number) -}}
        </div>
    {% else -%}
        {{- block('form_widget_simple') -}}
    {%- endif %}
{%- endblock tel_widget %}
", "MisdPhoneNumberBundle:Form:tel_bootstrap.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\misd\\phone-number-bundle/Resources/views/Form/tel_bootstrap.html.twig");
    }
}
