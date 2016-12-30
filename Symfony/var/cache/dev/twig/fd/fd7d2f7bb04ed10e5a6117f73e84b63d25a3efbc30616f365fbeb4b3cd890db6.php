<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_7a1a2033080321f4f301eb70c9a64722814de4c034b7ae9434ad49ffea8c91b4 extends Twig_Template
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
        $__internal_ad875688fdb0def8c77f9f72f96ed2cb6234c3b714b7b71473845dcd41015901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad875688fdb0def8c77f9f72f96ed2cb6234c3b714b7b71473845dcd41015901->enter($__internal_ad875688fdb0def8c77f9f72f96ed2cb6234c3b714b7b71473845dcd41015901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_bc8e3c22d732a685cdf05e557da8837a38e68fedf036388df4996fdaeee1f33c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc8e3c22d732a685cdf05e557da8837a38e68fedf036388df4996fdaeee1f33c->enter($__internal_bc8e3c22d732a685cdf05e557da8837a38e68fedf036388df4996fdaeee1f33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_ad875688fdb0def8c77f9f72f96ed2cb6234c3b714b7b71473845dcd41015901->leave($__internal_ad875688fdb0def8c77f9f72f96ed2cb6234c3b714b7b71473845dcd41015901_prof);

        
        $__internal_bc8e3c22d732a685cdf05e557da8837a38e68fedf036388df4996fdaeee1f33c->leave($__internal_bc8e3c22d732a685cdf05e557da8837a38e68fedf036388df4996fdaeee1f33c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
