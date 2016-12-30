<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_21fdf5c13d24dccedab0b9c8c703efbf5cf43250b4e61de03f11903fbada0dec extends Twig_Template
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
        $__internal_0ccf103d72f21f138183280082891fcf9e2bf86ccf9593a5d8abdebb0868e93e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ccf103d72f21f138183280082891fcf9e2bf86ccf9593a5d8abdebb0868e93e->enter($__internal_0ccf103d72f21f138183280082891fcf9e2bf86ccf9593a5d8abdebb0868e93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_d6d0d2c602e9fb017280c9de9003d3c3d2007a4ee8bc84f891957ea3fa1d905f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d0d2c602e9fb017280c9de9003d3c3d2007a4ee8bc84f891957ea3fa1d905f->enter($__internal_d6d0d2c602e9fb017280c9de9003d3c3d2007a4ee8bc84f891957ea3fa1d905f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_0ccf103d72f21f138183280082891fcf9e2bf86ccf9593a5d8abdebb0868e93e->leave($__internal_0ccf103d72f21f138183280082891fcf9e2bf86ccf9593a5d8abdebb0868e93e_prof);

        
        $__internal_d6d0d2c602e9fb017280c9de9003d3c3d2007a4ee8bc84f891957ea3fa1d905f->leave($__internal_d6d0d2c602e9fb017280c9de9003d3c3d2007a4ee8bc84f891957ea3fa1d905f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
