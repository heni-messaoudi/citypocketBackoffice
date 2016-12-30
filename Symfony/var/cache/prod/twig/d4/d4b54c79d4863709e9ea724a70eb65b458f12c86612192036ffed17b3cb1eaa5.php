<?php

/* MisdPhoneNumberBundle:Form:tel.html.twig */
class __TwigTemplate_615b8bb4bd44b5ef43baecdde54966e8e2a38e8fcb7068b7009b60fcc72e83d0 extends Twig_Template
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
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 4
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "country", array()), 'widget');
            // line 5
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "number", array()), 'widget');
            // line 6
            echo "</div>
    ";
        } else {
            // line 8
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    public function getTemplateName()
    {
        return "MisdPhoneNumberBundle:Form:tel.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  36 => 6,  34 => 5,  32 => 4,  28 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MisdPhoneNumberBundle:Form:tel.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\misd\\phone-number-bundle/Resources/views/Form/tel.html.twig");
    }
}
