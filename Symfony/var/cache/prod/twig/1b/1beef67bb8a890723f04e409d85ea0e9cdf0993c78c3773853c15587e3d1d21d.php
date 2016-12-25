<?php

/* @MisdPhoneNumber/Form/tel_widget.html.php */
class __TwigTemplate_d563f7e071418a515072659246e1cd72322625c08b6598fd1e8639fec4eacdfd extends Twig_Template
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
        // line 1
        echo "<?php if (\$widget == Misd\\PhoneNumberBundle\\Form\\Type\\PhoneNumberType::WIDGET_COUNTRY_CHOICE): ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['country']).\$view['form']->widget(\$form['number']); ?>
    </div>
<?php else: ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php endif ?>
";
    }

    public function getTemplateName()
    {
        return "@MisdPhoneNumber/Form/tel_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@MisdPhoneNumber/Form/tel_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\misd\\phone-number-bundle\\Resources\\views\\Form\\tel_widget.html.php");
    }
}
