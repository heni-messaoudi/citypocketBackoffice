<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_6698e9833f0c04d0a7b76689751786046ada6e6a7ab13b0117140cf060906101 extends Twig_Template
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
        $__internal_5ea47fdcdfa3efe3bb72bf88d90ec139e959649bd4ca9a468410d550e9d327b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ea47fdcdfa3efe3bb72bf88d90ec139e959649bd4ca9a468410d550e9d327b2->enter($__internal_5ea47fdcdfa3efe3bb72bf88d90ec139e959649bd4ca9a468410d550e9d327b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_2bf2a65e7aefe013846191d792114cc5a6781e880cb2fd6c553e5bdaf1d19a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bf2a65e7aefe013846191d792114cc5a6781e880cb2fd6c553e5bdaf1d19a0f->enter($__internal_2bf2a65e7aefe013846191d792114cc5a6781e880cb2fd6c553e5bdaf1d19a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_5ea47fdcdfa3efe3bb72bf88d90ec139e959649bd4ca9a468410d550e9d327b2->leave($__internal_5ea47fdcdfa3efe3bb72bf88d90ec139e959649bd4ca9a468410d550e9d327b2_prof);

        
        $__internal_2bf2a65e7aefe013846191d792114cc5a6781e880cb2fd6c553e5bdaf1d19a0f->leave($__internal_2bf2a65e7aefe013846191d792114cc5a6781e880cb2fd6c553e5bdaf1d19a0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
