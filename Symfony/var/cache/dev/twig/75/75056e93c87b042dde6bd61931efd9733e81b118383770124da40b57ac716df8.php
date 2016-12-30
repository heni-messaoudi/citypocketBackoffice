<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_3a5ccb616edc2299b682eddb747cbd17affecf59a5d80451c79d7ed4d3692730 extends Twig_Template
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
        $__internal_aa87b50b6cc7b7e61f5fe6eba02cc48eae42f9caa8ddbdcea780be74b1c45e6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa87b50b6cc7b7e61f5fe6eba02cc48eae42f9caa8ddbdcea780be74b1c45e6a->enter($__internal_aa87b50b6cc7b7e61f5fe6eba02cc48eae42f9caa8ddbdcea780be74b1c45e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_476d4147114241b9d032bb37fb5a305bfa1cd956f4df23fe2ee601b7a9cf410d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476d4147114241b9d032bb37fb5a305bfa1cd956f4df23fe2ee601b7a9cf410d->enter($__internal_476d4147114241b9d032bb37fb5a305bfa1cd956f4df23fe2ee601b7a9cf410d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_aa87b50b6cc7b7e61f5fe6eba02cc48eae42f9caa8ddbdcea780be74b1c45e6a->leave($__internal_aa87b50b6cc7b7e61f5fe6eba02cc48eae42f9caa8ddbdcea780be74b1c45e6a_prof);

        
        $__internal_476d4147114241b9d032bb37fb5a305bfa1cd956f4df23fe2ee601b7a9cf410d->leave($__internal_476d4147114241b9d032bb37fb5a305bfa1cd956f4df23fe2ee601b7a9cf410d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
