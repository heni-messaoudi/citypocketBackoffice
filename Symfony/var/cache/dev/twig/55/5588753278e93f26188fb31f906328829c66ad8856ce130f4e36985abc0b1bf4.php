<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e87c86e3dfb6a1fa9f9cccf47732c52c0483238fa9a54e367d52730a7e7c317d extends Twig_Template
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
        $__internal_65f460436c639f59c462ae92e3d2399530ccd26189bc165d5d2664a061f254c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65f460436c639f59c462ae92e3d2399530ccd26189bc165d5d2664a061f254c2->enter($__internal_65f460436c639f59c462ae92e3d2399530ccd26189bc165d5d2664a061f254c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_1dec8d1ba0130c5ead25f664db2126eca74853bee1008d4e819c8520cf00a6ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dec8d1ba0130c5ead25f664db2126eca74853bee1008d4e819c8520cf00a6ed->enter($__internal_1dec8d1ba0130c5ead25f664db2126eca74853bee1008d4e819c8520cf00a6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_65f460436c639f59c462ae92e3d2399530ccd26189bc165d5d2664a061f254c2->leave($__internal_65f460436c639f59c462ae92e3d2399530ccd26189bc165d5d2664a061f254c2_prof);

        
        $__internal_1dec8d1ba0130c5ead25f664db2126eca74853bee1008d4e819c8520cf00a6ed->leave($__internal_1dec8d1ba0130c5ead25f664db2126eca74853bee1008d4e819c8520cf00a6ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
