<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_27bf68003f5a21e648440f68491403f148fc94c1bab30b6efcba5bb590743263 extends Twig_Template
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
        $__internal_b6a40511ad0e9907e64d2c1397e2a1da92e0e63f12bc2e07170cc6db24c03830 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6a40511ad0e9907e64d2c1397e2a1da92e0e63f12bc2e07170cc6db24c03830->enter($__internal_b6a40511ad0e9907e64d2c1397e2a1da92e0e63f12bc2e07170cc6db24c03830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_0c30eb3d6f89f3e5cd43eef666ffb813b1a7536e3531bfa0ce30c3e3bf84bae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c30eb3d6f89f3e5cd43eef666ffb813b1a7536e3531bfa0ce30c3e3bf84bae9->enter($__internal_0c30eb3d6f89f3e5cd43eef666ffb813b1a7536e3531bfa0ce30c3e3bf84bae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_b6a40511ad0e9907e64d2c1397e2a1da92e0e63f12bc2e07170cc6db24c03830->leave($__internal_b6a40511ad0e9907e64d2c1397e2a1da92e0e63f12bc2e07170cc6db24c03830_prof);

        
        $__internal_0c30eb3d6f89f3e5cd43eef666ffb813b1a7536e3531bfa0ce30c3e3bf84bae9->leave($__internal_0c30eb3d6f89f3e5cd43eef666ffb813b1a7536e3531bfa0ce30c3e3bf84bae9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
