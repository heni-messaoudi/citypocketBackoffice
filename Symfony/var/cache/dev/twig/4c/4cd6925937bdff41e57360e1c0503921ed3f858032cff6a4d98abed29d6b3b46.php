<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_71e6c821f256a4281228d99c2d6f4aa354a2e2d2a9ee09a50c9c204ffe22b3e7 extends Twig_Template
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
        $__internal_28fc8d3d6f853660589b991ab4ea1029295173f21217470401d6f4a43303d2f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28fc8d3d6f853660589b991ab4ea1029295173f21217470401d6f4a43303d2f1->enter($__internal_28fc8d3d6f853660589b991ab4ea1029295173f21217470401d6f4a43303d2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_654eed8139f264ece43cb3a8163075560548832efa464f500c5c8ad2dcef2c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_654eed8139f264ece43cb3a8163075560548832efa464f500c5c8ad2dcef2c22->enter($__internal_654eed8139f264ece43cb3a8163075560548832efa464f500c5c8ad2dcef2c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_28fc8d3d6f853660589b991ab4ea1029295173f21217470401d6f4a43303d2f1->leave($__internal_28fc8d3d6f853660589b991ab4ea1029295173f21217470401d6f4a43303d2f1_prof);

        
        $__internal_654eed8139f264ece43cb3a8163075560548832efa464f500c5c8ad2dcef2c22->leave($__internal_654eed8139f264ece43cb3a8163075560548832efa464f500c5c8ad2dcef2c22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
