<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ff99d43a58ba1705afdd5455b0e278be71214b33f5b503fde7bcea10d62c562a extends Twig_Template
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
        $__internal_4a15758718bb9b25a9c5772cdf66f576d6e062ecc986661d2bd2473e270b0b29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a15758718bb9b25a9c5772cdf66f576d6e062ecc986661d2bd2473e270b0b29->enter($__internal_4a15758718bb9b25a9c5772cdf66f576d6e062ecc986661d2bd2473e270b0b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_5ce28edf5c7c7819531a031933975d34064d589cbb362ef36e43948f6ae235aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ce28edf5c7c7819531a031933975d34064d589cbb362ef36e43948f6ae235aa->enter($__internal_5ce28edf5c7c7819531a031933975d34064d589cbb362ef36e43948f6ae235aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4a15758718bb9b25a9c5772cdf66f576d6e062ecc986661d2bd2473e270b0b29->leave($__internal_4a15758718bb9b25a9c5772cdf66f576d6e062ecc986661d2bd2473e270b0b29_prof);

        
        $__internal_5ce28edf5c7c7819531a031933975d34064d589cbb362ef36e43948f6ae235aa->leave($__internal_5ce28edf5c7c7819531a031933975d34064d589cbb362ef36e43948f6ae235aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
