<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_d6ecf7c150db298f5b00ffdabc17a0365235f06f05cdabafc85da395761fe675 extends Twig_Template
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
        $__internal_6b8adb3aca580d09d5a5921bc4ae8e23b0ca779a0a8b55c015b552e923f8f6d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b8adb3aca580d09d5a5921bc4ae8e23b0ca779a0a8b55c015b552e923f8f6d4->enter($__internal_6b8adb3aca580d09d5a5921bc4ae8e23b0ca779a0a8b55c015b552e923f8f6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_2b0a2e3d81e1c379129db8a589901416787208b5f3f0f47986ded60a5ea11704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b0a2e3d81e1c379129db8a589901416787208b5f3f0f47986ded60a5ea11704->enter($__internal_2b0a2e3d81e1c379129db8a589901416787208b5f3f0f47986ded60a5ea11704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_6b8adb3aca580d09d5a5921bc4ae8e23b0ca779a0a8b55c015b552e923f8f6d4->leave($__internal_6b8adb3aca580d09d5a5921bc4ae8e23b0ca779a0a8b55c015b552e923f8f6d4_prof);

        
        $__internal_2b0a2e3d81e1c379129db8a589901416787208b5f3f0f47986ded60a5ea11704->leave($__internal_2b0a2e3d81e1c379129db8a589901416787208b5f3f0f47986ded60a5ea11704_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
