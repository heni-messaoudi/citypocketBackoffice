<?php

/* @MisdPhoneNumber/Form/tel_bootstrap.html.twig */
class __TwigTemplate_ffa6532ecb5edaa6860ba9119077baa0d36947492045f4fa02dbe9bd573ca042 extends Twig_Template
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
        // line 1
        $this->displayBlock('tel_widget', $context, $blocks);
    }

    public function block_tel_widget($context, array $blocks = array())
    {
        // line 2
        if (((isset($context["widget"]) ? $context["widget"] : null) === constant("Misd\\PhoneNumberBundle\\Form\\Type\\PhoneNumberType::WIDGET_COUNTRY_CHOICE"))) {
            // line 3
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 4
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 5
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "country", array()), 'widget');
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "number", array()), 'widget');
            // line 7
            echo "</div>
    ";
        } else {
            // line 9
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    public function getTemplateName()
    {
        return "@MisdPhoneNumber/Form/tel_bootstrap.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  39 => 7,  37 => 6,  35 => 5,  31 => 4,  28 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@MisdPhoneNumber/Form/tel_bootstrap.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\misd\\phone-number-bundle\\Resources\\views\\Form\\tel_bootstrap.html.twig");
    }
}
