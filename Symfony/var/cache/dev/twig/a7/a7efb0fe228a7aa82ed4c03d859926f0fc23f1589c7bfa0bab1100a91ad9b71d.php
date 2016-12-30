<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_78026bda959d3d54174fc541ccc1a368a9b845d92dff2b98a74f5b46dc1587ba extends Twig_Template
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
        $__internal_e3fd1a9a0bc842d04c36e2a6983374e539bdf550f09f7c1f8230463282e81095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3fd1a9a0bc842d04c36e2a6983374e539bdf550f09f7c1f8230463282e81095->enter($__internal_e3fd1a9a0bc842d04c36e2a6983374e539bdf550f09f7c1f8230463282e81095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_8a23f0397e741d807f4e37fabc51d212ac8d12544ab3bbe3b51049c5fd7bc415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a23f0397e741d807f4e37fabc51d212ac8d12544ab3bbe3b51049c5fd7bc415->enter($__internal_8a23f0397e741d807f4e37fabc51d212ac8d12544ab3bbe3b51049c5fd7bc415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_e3fd1a9a0bc842d04c36e2a6983374e539bdf550f09f7c1f8230463282e81095->leave($__internal_e3fd1a9a0bc842d04c36e2a6983374e539bdf550f09f7c1f8230463282e81095_prof);

        
        $__internal_8a23f0397e741d807f4e37fabc51d212ac8d12544ab3bbe3b51049c5fd7bc415->leave($__internal_8a23f0397e741d807f4e37fabc51d212ac8d12544ab3bbe3b51049c5fd7bc415_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
