<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_87a94bf4d1f9123e9e4f39be3462e1d3719a9f3703021920556b2e358eb9f699 extends Twig_Template
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
        $__internal_0c35e1ba2a5940c632204ab3d609b775c093e0093aff786e8ce69ed63a649430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c35e1ba2a5940c632204ab3d609b775c093e0093aff786e8ce69ed63a649430->enter($__internal_0c35e1ba2a5940c632204ab3d609b775c093e0093aff786e8ce69ed63a649430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_260241d0ecd7f154a19312ccf47ca4b78e1762b9193cf605f73cc55f8d90a312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_260241d0ecd7f154a19312ccf47ca4b78e1762b9193cf605f73cc55f8d90a312->enter($__internal_260241d0ecd7f154a19312ccf47ca4b78e1762b9193cf605f73cc55f8d90a312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0c35e1ba2a5940c632204ab3d609b775c093e0093aff786e8ce69ed63a649430->leave($__internal_0c35e1ba2a5940c632204ab3d609b775c093e0093aff786e8ce69ed63a649430_prof);

        
        $__internal_260241d0ecd7f154a19312ccf47ca4b78e1762b9193cf605f73cc55f8d90a312->leave($__internal_260241d0ecd7f154a19312ccf47ca4b78e1762b9193cf605f73cc55f8d90a312_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
