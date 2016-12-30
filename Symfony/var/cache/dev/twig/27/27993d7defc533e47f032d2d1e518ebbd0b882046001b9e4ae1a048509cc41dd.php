<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_0fa9eba54203aab3f47e5fda34bc5132120bfdfb24e7bc6a1a474dc0414b045a extends Twig_Template
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
        $__internal_c4df977a907f3063b2017c56d1b1ed07d4b557d6493891a99144446ef672b4dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4df977a907f3063b2017c56d1b1ed07d4b557d6493891a99144446ef672b4dd->enter($__internal_c4df977a907f3063b2017c56d1b1ed07d4b557d6493891a99144446ef672b4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_3e144543150456bf5439178e09e9522ba3de6e6df6d6bfc2af1e813dc74ca261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e144543150456bf5439178e09e9522ba3de6e6df6d6bfc2af1e813dc74ca261->enter($__internal_3e144543150456bf5439178e09e9522ba3de6e6df6d6bfc2af1e813dc74ca261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_c4df977a907f3063b2017c56d1b1ed07d4b557d6493891a99144446ef672b4dd->leave($__internal_c4df977a907f3063b2017c56d1b1ed07d4b557d6493891a99144446ef672b4dd_prof);

        
        $__internal_3e144543150456bf5439178e09e9522ba3de6e6df6d6bfc2af1e813dc74ca261->leave($__internal_3e144543150456bf5439178e09e9522ba3de6e6df6d6bfc2af1e813dc74ca261_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
