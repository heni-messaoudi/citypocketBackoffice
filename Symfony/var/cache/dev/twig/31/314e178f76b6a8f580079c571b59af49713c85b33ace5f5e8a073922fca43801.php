<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_d62c1050cc210ac939baf41a960beba70df0e78aa147a4f4a7f927a51779fca4 extends Twig_Template
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
        $__internal_ea835aa4c23a36970f7af96ab49ed57f25ee7f132fffe06ae6d0d8bd5d19534b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea835aa4c23a36970f7af96ab49ed57f25ee7f132fffe06ae6d0d8bd5d19534b->enter($__internal_ea835aa4c23a36970f7af96ab49ed57f25ee7f132fffe06ae6d0d8bd5d19534b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_2f3e9edf12903bd0f3d5748bcc922728a700b93a57dac4a0c9e7df63f0c78d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f3e9edf12903bd0f3d5748bcc922728a700b93a57dac4a0c9e7df63f0c78d21->enter($__internal_2f3e9edf12903bd0f3d5748bcc922728a700b93a57dac4a0c9e7df63f0c78d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_ea835aa4c23a36970f7af96ab49ed57f25ee7f132fffe06ae6d0d8bd5d19534b->leave($__internal_ea835aa4c23a36970f7af96ab49ed57f25ee7f132fffe06ae6d0d8bd5d19534b_prof);

        
        $__internal_2f3e9edf12903bd0f3d5748bcc922728a700b93a57dac4a0c9e7df63f0c78d21->leave($__internal_2f3e9edf12903bd0f3d5748bcc922728a700b93a57dac4a0c9e7df63f0c78d21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
