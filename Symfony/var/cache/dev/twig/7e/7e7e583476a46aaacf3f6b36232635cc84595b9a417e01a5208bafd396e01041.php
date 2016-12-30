<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_0df00bf7f664ef00741a61c7c2e4a9e467f49acfe414e44ff088ccfec5ad44d3 extends Twig_Template
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
        $__internal_4c7eaea6cccd4e2d7a8e77c177528b2bb1c90a381c486a6ebb292133cda17281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c7eaea6cccd4e2d7a8e77c177528b2bb1c90a381c486a6ebb292133cda17281->enter($__internal_4c7eaea6cccd4e2d7a8e77c177528b2bb1c90a381c486a6ebb292133cda17281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_f42672da99a326a63227124981c98092ba004279cae4deb2a6772836dace37c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f42672da99a326a63227124981c98092ba004279cae4deb2a6772836dace37c1->enter($__internal_f42672da99a326a63227124981c98092ba004279cae4deb2a6772836dace37c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4c7eaea6cccd4e2d7a8e77c177528b2bb1c90a381c486a6ebb292133cda17281->leave($__internal_4c7eaea6cccd4e2d7a8e77c177528b2bb1c90a381c486a6ebb292133cda17281_prof);

        
        $__internal_f42672da99a326a63227124981c98092ba004279cae4deb2a6772836dace37c1->leave($__internal_f42672da99a326a63227124981c98092ba004279cae4deb2a6772836dace37c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
