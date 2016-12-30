<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_bd54311b0ea9b094041ac9c9b6e08501e1b47efbf10024523040cbae7be43465 extends Twig_Template
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
        $__internal_8d3f318e99635f7212f17192e7970224f26b8d3669efd39cf3b0233c8937828f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d3f318e99635f7212f17192e7970224f26b8d3669efd39cf3b0233c8937828f->enter($__internal_8d3f318e99635f7212f17192e7970224f26b8d3669efd39cf3b0233c8937828f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_28d45aeceeca358f84a09f64a68eef778289ce9ad7787616c8ea6b0ab497804e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28d45aeceeca358f84a09f64a68eef778289ce9ad7787616c8ea6b0ab497804e->enter($__internal_28d45aeceeca358f84a09f64a68eef778289ce9ad7787616c8ea6b0ab497804e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_8d3f318e99635f7212f17192e7970224f26b8d3669efd39cf3b0233c8937828f->leave($__internal_8d3f318e99635f7212f17192e7970224f26b8d3669efd39cf3b0233c8937828f_prof);

        
        $__internal_28d45aeceeca358f84a09f64a68eef778289ce9ad7787616c8ea6b0ab497804e->leave($__internal_28d45aeceeca358f84a09f64a68eef778289ce9ad7787616c8ea6b0ab497804e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
