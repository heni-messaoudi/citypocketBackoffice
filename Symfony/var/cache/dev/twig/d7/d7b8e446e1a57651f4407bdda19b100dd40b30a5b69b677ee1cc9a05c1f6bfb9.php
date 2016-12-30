<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d4a9febe2839b16645c31783c9480dcdfed94a9172e1203a002c8f76cc32bc3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5617849fe6465a61f327070f8c8578a74a2d3e31b54911d1d6287629eb29c8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5617849fe6465a61f327070f8c8578a74a2d3e31b54911d1d6287629eb29c8f->enter($__internal_a5617849fe6465a61f327070f8c8578a74a2d3e31b54911d1d6287629eb29c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_1d21c014ebe800da4ce4ffe9625faf63029969b7097784f7bbe7048e6ef42998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d21c014ebe800da4ce4ffe9625faf63029969b7097784f7bbe7048e6ef42998->enter($__internal_1d21c014ebe800da4ce4ffe9625faf63029969b7097784f7bbe7048e6ef42998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a5617849fe6465a61f327070f8c8578a74a2d3e31b54911d1d6287629eb29c8f->leave($__internal_a5617849fe6465a61f327070f8c8578a74a2d3e31b54911d1d6287629eb29c8f_prof);

        
        $__internal_1d21c014ebe800da4ce4ffe9625faf63029969b7097784f7bbe7048e6ef42998->leave($__internal_1d21c014ebe800da4ce4ffe9625faf63029969b7097784f7bbe7048e6ef42998_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
