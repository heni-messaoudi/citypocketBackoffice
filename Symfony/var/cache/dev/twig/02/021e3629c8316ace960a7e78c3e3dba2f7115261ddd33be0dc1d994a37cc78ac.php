<?php

/* @MisdPhoneNumber/Form/tel_bootstrap.html.twig */
class __TwigTemplate_c36789d364db59582fda13505d8c188b3392f363b2fff78d1e4cad46842a3dc4 extends Twig_Template
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
        $__internal_8c3c89bf2bd52e10ba54c8cdae9f26ea028b89789d7f55d18c1545d2736489e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c3c89bf2bd52e10ba54c8cdae9f26ea028b89789d7f55d18c1545d2736489e3->enter($__internal_8c3c89bf2bd52e10ba54c8cdae9f26ea028b89789d7f55d18c1545d2736489e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MisdPhoneNumber/Form/tel_bootstrap.html.twig"));

        $__internal_17cb9833fa26a8b01377cf7fa697b724c14de0ec7227c5b33b1b54bdd63b6430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17cb9833fa26a8b01377cf7fa697b724c14de0ec7227c5b33b1b54bdd63b6430->enter($__internal_17cb9833fa26a8b01377cf7fa697b724c14de0ec7227c5b33b1b54bdd63b6430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MisdPhoneNumber/Form/tel_bootstrap.html.twig"));

        // line 1
        $this->displayBlock('tel_widget', $context, $blocks);
        
        $__internal_8c3c89bf2bd52e10ba54c8cdae9f26ea028b89789d7f55d18c1545d2736489e3->leave($__internal_8c3c89bf2bd52e10ba54c8cdae9f26ea028b89789d7f55d18c1545d2736489e3_prof);

        
        $__internal_17cb9833fa26a8b01377cf7fa697b724c14de0ec7227c5b33b1b54bdd63b6430->leave($__internal_17cb9833fa26a8b01377cf7fa697b724c14de0ec7227c5b33b1b54bdd63b6430_prof);

    }

    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_2d0ce080d38dc140a96071ed2c8e014a0b8adb165efff0ef3748382d6647c1bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d0ce080d38dc140a96071ed2c8e014a0b8adb165efff0ef3748382d6647c1bd->enter($__internal_2d0ce080d38dc140a96071ed2c8e014a0b8adb165efff0ef3748382d6647c1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_34261db2764d0f387a9b9a2d64535338f9ea23cc3be1b95eed682508b640dc40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34261db2764d0f387a9b9a2d64535338f9ea23cc3be1b95eed682508b640dc40->enter($__internal_34261db2764d0f387a9b9a2d64535338f9ea23cc3be1b95eed682508b640dc40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 2
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) === constant("Misd\\PhoneNumberBundle\\Form\\Type\\PhoneNumberType::WIDGET_COUNTRY_CHOICE"))) {
            // line 3
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 4
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 5
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country", array()), 'widget');
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "number", array()), 'widget');
            // line 7
            echo "</div>
    ";
        } else {
            // line 9
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_34261db2764d0f387a9b9a2d64535338f9ea23cc3be1b95eed682508b640dc40->leave($__internal_34261db2764d0f387a9b9a2d64535338f9ea23cc3be1b95eed682508b640dc40_prof);

        
        $__internal_2d0ce080d38dc140a96071ed2c8e014a0b8adb165efff0ef3748382d6647c1bd->leave($__internal_2d0ce080d38dc140a96071ed2c8e014a0b8adb165efff0ef3748382d6647c1bd_prof);

    }

    public function getTemplateName()
    {
        return "@MisdPhoneNumber/Form/tel_bootstrap.html.twig";
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
", "@MisdPhoneNumber/Form/tel_bootstrap.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\misd\\phone-number-bundle\\Resources\\views\\Form\\tel_bootstrap.html.twig");
    }
}
