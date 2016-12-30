<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_f841348a1fdd5d7e8803650565907b15460f76fec33aa5329e139b4b2b880852 extends Twig_Template
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
        $__internal_0ac7f5b62126c019db399912a3bf9e0c6ce18617bf8e8a6f33d7d82b6b2f74a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ac7f5b62126c019db399912a3bf9e0c6ce18617bf8e8a6f33d7d82b6b2f74a6->enter($__internal_0ac7f5b62126c019db399912a3bf9e0c6ce18617bf8e8a6f33d7d82b6b2f74a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_906fb8bb3af15344ea47c9d58e5257baae331a31a3edd736f329ff5bb133ff40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_906fb8bb3af15344ea47c9d58e5257baae331a31a3edd736f329ff5bb133ff40->enter($__internal_906fb8bb3af15344ea47c9d58e5257baae331a31a3edd736f329ff5bb133ff40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_0ac7f5b62126c019db399912a3bf9e0c6ce18617bf8e8a6f33d7d82b6b2f74a6->leave($__internal_0ac7f5b62126c019db399912a3bf9e0c6ce18617bf8e8a6f33d7d82b6b2f74a6_prof);

        
        $__internal_906fb8bb3af15344ea47c9d58e5257baae331a31a3edd736f329ff5bb133ff40->leave($__internal_906fb8bb3af15344ea47c9d58e5257baae331a31a3edd736f329ff5bb133ff40_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
