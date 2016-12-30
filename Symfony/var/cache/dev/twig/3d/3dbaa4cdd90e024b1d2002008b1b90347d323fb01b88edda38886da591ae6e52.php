<?php

/* @MisdPhoneNumber/Form/tel_widget.html.php */
class __TwigTemplate_ea082dd875e225eb749d4bba421f73f4f340b50ef678231df07fa58fc6df5717 extends Twig_Template
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
        $__internal_ca38a4e97028a7632803a9d3b3f86dd7813b4c44cef496a315c7a9a3cd48967c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca38a4e97028a7632803a9d3b3f86dd7813b4c44cef496a315c7a9a3cd48967c->enter($__internal_ca38a4e97028a7632803a9d3b3f86dd7813b4c44cef496a315c7a9a3cd48967c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MisdPhoneNumber/Form/tel_widget.html.php"));

        $__internal_71f78b59f27da992bef8315988d5453c1b888bb9089b7186db6393e6f0e4a0bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f78b59f27da992bef8315988d5453c1b888bb9089b7186db6393e6f0e4a0bb->enter($__internal_71f78b59f27da992bef8315988d5453c1b888bb9089b7186db6393e6f0e4a0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MisdPhoneNumber/Form/tel_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == Misd\\PhoneNumberBundle\\Form\\Type\\PhoneNumberType::WIDGET_COUNTRY_CHOICE): ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['country']).\$view['form']->widget(\$form['number']); ?>
    </div>
<?php else: ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php endif ?>
";
        
        $__internal_ca38a4e97028a7632803a9d3b3f86dd7813b4c44cef496a315c7a9a3cd48967c->leave($__internal_ca38a4e97028a7632803a9d3b3f86dd7813b4c44cef496a315c7a9a3cd48967c_prof);

        
        $__internal_71f78b59f27da992bef8315988d5453c1b888bb9089b7186db6393e6f0e4a0bb->leave($__internal_71f78b59f27da992bef8315988d5453c1b888bb9089b7186db6393e6f0e4a0bb_prof);

    }

    public function getTemplateName()
    {
        return "@MisdPhoneNumber/Form/tel_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == Misd\\PhoneNumberBundle\\Form\\Type\\PhoneNumberType::WIDGET_COUNTRY_CHOICE): ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['country']).\$view['form']->widget(\$form['number']); ?>
    </div>
<?php else: ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php endif ?>
", "@MisdPhoneNumber/Form/tel_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\misd\\phone-number-bundle\\Resources\\views\\Form\\tel_widget.html.php");
    }
}
