<?php

/* @MisdPhoneNumber/Form/tel.html.twig */
class __TwigTemplate_de6d4c17e1424597fd58cee99f9ea9caceab1a9f2e239d9ebce1cd42d2bda92a extends Twig_Template
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
        $__internal_0c614d7553b2b4b9e5be98a2d8d203871e18cc6dc3f43a22133ca38c291b3e79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c614d7553b2b4b9e5be98a2d8d203871e18cc6dc3f43a22133ca38c291b3e79->enter($__internal_0c614d7553b2b4b9e5be98a2d8d203871e18cc6dc3f43a22133ca38c291b3e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MisdPhoneNumber/Form/tel.html.twig"));

        $__internal_cb344eae6385984a4ea5619575be0e53a6881efa7550e32aa7f859eade20c3b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb344eae6385984a4ea5619575be0e53a6881efa7550e32aa7f859eade20c3b3->enter($__internal_cb344eae6385984a4ea5619575be0e53a6881efa7550e32aa7f859eade20c3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MisdPhoneNumber/Form/tel.html.twig"));

        // line 1
        $this->displayBlock('tel_widget', $context, $blocks);
        
        $__internal_0c614d7553b2b4b9e5be98a2d8d203871e18cc6dc3f43a22133ca38c291b3e79->leave($__internal_0c614d7553b2b4b9e5be98a2d8d203871e18cc6dc3f43a22133ca38c291b3e79_prof);

        
        $__internal_cb344eae6385984a4ea5619575be0e53a6881efa7550e32aa7f859eade20c3b3->leave($__internal_cb344eae6385984a4ea5619575be0e53a6881efa7550e32aa7f859eade20c3b3_prof);

    }

    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_382e94ca8818f9efffff06def66a2014df5ed36488631fd7182451b7fe40df07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382e94ca8818f9efffff06def66a2014df5ed36488631fd7182451b7fe40df07->enter($__internal_382e94ca8818f9efffff06def66a2014df5ed36488631fd7182451b7fe40df07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_1efe5c8f1f092695b054b8ef14f3bba60d112c85b25c0204c4278c9061b4ddac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1efe5c8f1f092695b054b8ef14f3bba60d112c85b25c0204c4278c9061b4ddac->enter($__internal_1efe5c8f1f092695b054b8ef14f3bba60d112c85b25c0204c4278c9061b4ddac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 2
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) === constant("Misd\\PhoneNumberBundle\\Form\\Type\\PhoneNumberType::WIDGET_COUNTRY_CHOICE"))) {
            // line 3
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 4
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country", array()), 'widget');
            // line 5
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "number", array()), 'widget');
            // line 6
            echo "</div>
    ";
        } else {
            // line 8
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_1efe5c8f1f092695b054b8ef14f3bba60d112c85b25c0204c4278c9061b4ddac->leave($__internal_1efe5c8f1f092695b054b8ef14f3bba60d112c85b25c0204c4278c9061b4ddac_prof);

        
        $__internal_382e94ca8818f9efffff06def66a2014df5ed36488631fd7182451b7fe40df07->leave($__internal_382e94ca8818f9efffff06def66a2014df5ed36488631fd7182451b7fe40df07_prof);

    }

    public function getTemplateName()
    {
        return "@MisdPhoneNumber/Form/tel.html.twig";
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
", "@MisdPhoneNumber/Form/tel.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\misd\\phone-number-bundle\\Resources\\views\\Form\\tel.html.twig");
    }
}
