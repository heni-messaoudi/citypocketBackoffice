<?php

/* MisdPhoneNumberBundle:Form:tel.html.twig */
class __TwigTemplate_afc900fc81bd52dcdfa6cc620ec8d79259d00da468f935fa00c4bd9737c44f1d extends Twig_Template
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
        $__internal_807ec9a9e14b0ca8b97260059a4b287101f1570f849ecbdad500833a81c7f4c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_807ec9a9e14b0ca8b97260059a4b287101f1570f849ecbdad500833a81c7f4c7->enter($__internal_807ec9a9e14b0ca8b97260059a4b287101f1570f849ecbdad500833a81c7f4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MisdPhoneNumberBundle:Form:tel.html.twig"));

        $__internal_efedb36d91a0c819c639f73d54c846c8ed3c43088b0edcfbcefe3cb80eec6dc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efedb36d91a0c819c639f73d54c846c8ed3c43088b0edcfbcefe3cb80eec6dc0->enter($__internal_efedb36d91a0c819c639f73d54c846c8ed3c43088b0edcfbcefe3cb80eec6dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MisdPhoneNumberBundle:Form:tel.html.twig"));

        // line 1
        $this->displayBlock('tel_widget', $context, $blocks);
        
        $__internal_807ec9a9e14b0ca8b97260059a4b287101f1570f849ecbdad500833a81c7f4c7->leave($__internal_807ec9a9e14b0ca8b97260059a4b287101f1570f849ecbdad500833a81c7f4c7_prof);

        
        $__internal_efedb36d91a0c819c639f73d54c846c8ed3c43088b0edcfbcefe3cb80eec6dc0->leave($__internal_efedb36d91a0c819c639f73d54c846c8ed3c43088b0edcfbcefe3cb80eec6dc0_prof);

    }

    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_544f00ab2fcd9cf31c462aa766d2e7af1a8733a398730018439773dec5af4abb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_544f00ab2fcd9cf31c462aa766d2e7af1a8733a398730018439773dec5af4abb->enter($__internal_544f00ab2fcd9cf31c462aa766d2e7af1a8733a398730018439773dec5af4abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_88c034fce8c50f74074debe77acf1981bc9d1b2336305b78cd662bd04d4a9a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c034fce8c50f74074debe77acf1981bc9d1b2336305b78cd662bd04d4a9a06->enter($__internal_88c034fce8c50f74074debe77acf1981bc9d1b2336305b78cd662bd04d4a9a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 2
        if ((($context["widget"] ?? $this->getContext($context, "widget")) === constant("Misd\\PhoneNumberBundle\\Form\\Type\\PhoneNumberType::WIDGET_COUNTRY_CHOICE"))) {
            // line 3
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 4
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "country", array()), 'widget');
            // line 5
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "number", array()), 'widget');
            // line 6
            echo "</div>
    ";
        } else {
            // line 8
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_88c034fce8c50f74074debe77acf1981bc9d1b2336305b78cd662bd04d4a9a06->leave($__internal_88c034fce8c50f74074debe77acf1981bc9d1b2336305b78cd662bd04d4a9a06_prof);

        
        $__internal_544f00ab2fcd9cf31c462aa766d2e7af1a8733a398730018439773dec5af4abb->leave($__internal_544f00ab2fcd9cf31c462aa766d2e7af1a8733a398730018439773dec5af4abb_prof);

    }

    public function getTemplateName()
    {
        return "MisdPhoneNumberBundle:Form:tel.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  58 => 8,  54 => 6,  52 => 5,  50 => 4,  46 => 3,  44 => 2,  26 => 1,);
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
        <div {{ block('widget_container_attributes') }}>
            {{- form_widget(form.country) -}}
            {{- form_widget(form.number) -}}
        </div>
    {% else -%}
        {{- block('form_widget_simple') -}}
    {%- endif %}
{%- endblock tel_widget %}
", "MisdPhoneNumberBundle:Form:tel.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\misd\\phone-number-bundle/Resources/views/Form/tel.html.twig");
    }
}
