<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_042230821c96cc50c4b0f54a194fd9e3399325f1d547eddacf0d3fde107f4324 extends Twig_Template
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
        $__internal_487c150f58c9a36467fd096910f7bb20e146ce89e1237e8bfb4043085b25dd15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_487c150f58c9a36467fd096910f7bb20e146ce89e1237e8bfb4043085b25dd15->enter($__internal_487c150f58c9a36467fd096910f7bb20e146ce89e1237e8bfb4043085b25dd15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_3ef5a39c139272e3a3449ffad28d527ebeb93d43778722a02d6e1e84c07229df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef5a39c139272e3a3449ffad28d527ebeb93d43778722a02d6e1e84c07229df->enter($__internal_3ef5a39c139272e3a3449ffad28d527ebeb93d43778722a02d6e1e84c07229df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_487c150f58c9a36467fd096910f7bb20e146ce89e1237e8bfb4043085b25dd15->leave($__internal_487c150f58c9a36467fd096910f7bb20e146ce89e1237e8bfb4043085b25dd15_prof);

        
        $__internal_3ef5a39c139272e3a3449ffad28d527ebeb93d43778722a02d6e1e84c07229df->leave($__internal_3ef5a39c139272e3a3449ffad28d527ebeb93d43778722a02d6e1e84c07229df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
