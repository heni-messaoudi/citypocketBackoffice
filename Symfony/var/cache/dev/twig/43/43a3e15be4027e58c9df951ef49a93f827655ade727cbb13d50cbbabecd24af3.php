<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_2d28653a75a82383f32064099fd18bec02181db1f133a82de3d45cc55e9b116b extends Twig_Template
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
        $__internal_7a7e401573006f26c0c5957cab51377237305e86d2a53595f94c7a4d13e22c92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a7e401573006f26c0c5957cab51377237305e86d2a53595f94c7a4d13e22c92->enter($__internal_7a7e401573006f26c0c5957cab51377237305e86d2a53595f94c7a4d13e22c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_17397651fb865a7b2f9b863fa3982ce96d890fe3e6455cab96d7591e49283593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17397651fb865a7b2f9b863fa3982ce96d890fe3e6455cab96d7591e49283593->enter($__internal_17397651fb865a7b2f9b863fa3982ce96d890fe3e6455cab96d7591e49283593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_7a7e401573006f26c0c5957cab51377237305e86d2a53595f94c7a4d13e22c92->leave($__internal_7a7e401573006f26c0c5957cab51377237305e86d2a53595f94c7a4d13e22c92_prof);

        
        $__internal_17397651fb865a7b2f9b863fa3982ce96d890fe3e6455cab96d7591e49283593->leave($__internal_17397651fb865a7b2f9b863fa3982ce96d890fe3e6455cab96d7591e49283593_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
