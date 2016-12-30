<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_53138449f2da84deb5932104e193956895065e030efeecc8f91862b24613e80e extends Twig_Template
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
        $__internal_d5c934c7a9d906de73d33c4ee4a64efae037b77fcea34994a8a597abbb275467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5c934c7a9d906de73d33c4ee4a64efae037b77fcea34994a8a597abbb275467->enter($__internal_d5c934c7a9d906de73d33c4ee4a64efae037b77fcea34994a8a597abbb275467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_85c370c5807a407adb6b86fe3bc58f6b51bf7f412fd3570713fa289f328312c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c370c5807a407adb6b86fe3bc58f6b51bf7f412fd3570713fa289f328312c4->enter($__internal_85c370c5807a407adb6b86fe3bc58f6b51bf7f412fd3570713fa289f328312c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_d5c934c7a9d906de73d33c4ee4a64efae037b77fcea34994a8a597abbb275467->leave($__internal_d5c934c7a9d906de73d33c4ee4a64efae037b77fcea34994a8a597abbb275467_prof);

        
        $__internal_85c370c5807a407adb6b86fe3bc58f6b51bf7f412fd3570713fa289f328312c4->leave($__internal_85c370c5807a407adb6b86fe3bc58f6b51bf7f412fd3570713fa289f328312c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
