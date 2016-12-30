<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_40751729a50f4f44e0a4eafe9ee9f9fc9870cd8b3611014a255623cefcaa5cc3 extends Twig_Template
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
        $__internal_0088202170c67fde0d78f852c6a9b3489d10f25439ac88ae62abcaf02d495c45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0088202170c67fde0d78f852c6a9b3489d10f25439ac88ae62abcaf02d495c45->enter($__internal_0088202170c67fde0d78f852c6a9b3489d10f25439ac88ae62abcaf02d495c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_3ad2950848fe143d25b419e2e219162139ff09240b946f57cc0757e7ca23933b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad2950848fe143d25b419e2e219162139ff09240b946f57cc0757e7ca23933b->enter($__internal_3ad2950848fe143d25b419e2e219162139ff09240b946f57cc0757e7ca23933b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0088202170c67fde0d78f852c6a9b3489d10f25439ac88ae62abcaf02d495c45->leave($__internal_0088202170c67fde0d78f852c6a9b3489d10f25439ac88ae62abcaf02d495c45_prof);

        
        $__internal_3ad2950848fe143d25b419e2e219162139ff09240b946f57cc0757e7ca23933b->leave($__internal_3ad2950848fe143d25b419e2e219162139ff09240b946f57cc0757e7ca23933b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
