<?php

/* MisdPhoneNumberBundle:Form:tel_bootstrap.html.twig */
class __TwigTemplate_69ac551d49e775da4ec9ef6e8e8545759f31f0fa592f04acb5a3c588dca86282 extends Twig_Template
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
        $__internal_411a0ca90b46d40be50dadc3deca65f2951dee15fac11e67ac2c3b77bcbe8f1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_411a0ca90b46d40be50dadc3deca65f2951dee15fac11e67ac2c3b77bcbe8f1a->enter($__internal_411a0ca90b46d40be50dadc3deca65f2951dee15fac11e67ac2c3b77bcbe8f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MisdPhoneNumberBundle:Form:tel_bootstrap.html.twig"));

        $__internal_9d82fe88be772a9b2db727ad6d7cdb5d1bf38884c4480d9bed2516f83dd78943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d82fe88be772a9b2db727ad6d7cdb5d1bf38884c4480d9bed2516f83dd78943->enter($__internal_9d82fe88be772a9b2db727ad6d7cdb5d1bf38884c4480d9bed2516f83dd78943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MisdPhoneNumberBundle:Form:tel_bootstrap.html.twig"));

        // line 1
        $this->displayBlock('tel_widget', $context, $blocks);
        
        $__internal_411a0ca90b46d40be50dadc3deca65f2951dee15fac11e67ac2c3b77bcbe8f1a->leave($__internal_411a0ca90b46d40be50dadc3deca65f2951dee15fac11e67ac2c3b77bcbe8f1a_prof);

        
        $__internal_9d82fe88be772a9b2db727ad6d7cdb5d1bf38884c4480d9bed2516f83dd78943->leave($__internal_9d82fe88be772a9b2db727ad6d7cdb5d1bf38884c4480d9bed2516f83dd78943_prof);

    }

    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_7b6c97536cfde56d38303bbe45ae41db2702a88cca7cda017d80d7100b3836fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b6c97536cfde56d38303bbe45ae41db2702a88cca7cda017d80d7100b3836fc->enter($__internal_7b6c97536cfde56d38303bbe45ae41db2702a88cca7cda017d80d7100b3836fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_c2d3d6916e3e7b2fdc2ca578601d866edc7d40f152e841885a7e3da82640c350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2d3d6916e3e7b2fdc2ca578601d866edc7d40f152e841885a7e3da82640c350->enter($__internal_c2d3d6916e3e7b2fdc2ca578601d866edc7d40f152e841885a7e3da82640c350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

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
        
        $__internal_c2d3d6916e3e7b2fdc2ca578601d866edc7d40f152e841885a7e3da82640c350->leave($__internal_c2d3d6916e3e7b2fdc2ca578601d866edc7d40f152e841885a7e3da82640c350_prof);

        
        $__internal_7b6c97536cfde56d38303bbe45ae41db2702a88cca7cda017d80d7100b3836fc->leave($__internal_7b6c97536cfde56d38303bbe45ae41db2702a88cca7cda017d80d7100b3836fc_prof);

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
