<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_0a497dfc5944e6503fd5523e831f6b9efbad224a63527da15640327062c76468 extends Twig_Template
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
        $__internal_5fdc525bc8b7d959c8fb98cefff34ed56f8a1f76bde5d343722394a4053133b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fdc525bc8b7d959c8fb98cefff34ed56f8a1f76bde5d343722394a4053133b8->enter($__internal_5fdc525bc8b7d959c8fb98cefff34ed56f8a1f76bde5d343722394a4053133b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_00a1451ab11a1320ac7f9424dcb185d8fbb42489ecf77f52acf34c9f84a4c58c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a1451ab11a1320ac7f9424dcb185d8fbb42489ecf77f52acf34c9f84a4c58c->enter($__internal_00a1451ab11a1320ac7f9424dcb185d8fbb42489ecf77f52acf34c9f84a4c58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_5fdc525bc8b7d959c8fb98cefff34ed56f8a1f76bde5d343722394a4053133b8->leave($__internal_5fdc525bc8b7d959c8fb98cefff34ed56f8a1f76bde5d343722394a4053133b8_prof);

        
        $__internal_00a1451ab11a1320ac7f9424dcb185d8fbb42489ecf77f52acf34c9f84a4c58c->leave($__internal_00a1451ab11a1320ac7f9424dcb185d8fbb42489ecf77f52acf34c9f84a4c58c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
