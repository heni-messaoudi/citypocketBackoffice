<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c18560e88533f8053921ed5f415756b49d8020be65b652d5b3dde3f1dc8ac879 extends Twig_Template
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
        $__internal_2f8015b039d147ced060dd89de48062ab9ba54ab5410ed8831869d78e01b6a68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f8015b039d147ced060dd89de48062ab9ba54ab5410ed8831869d78e01b6a68->enter($__internal_2f8015b039d147ced060dd89de48062ab9ba54ab5410ed8831869d78e01b6a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_80adbe1daa9841c98b28096e5f50a2dd2f33e9744cb484468e0ed9bdee8448d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80adbe1daa9841c98b28096e5f50a2dd2f33e9744cb484468e0ed9bdee8448d0->enter($__internal_80adbe1daa9841c98b28096e5f50a2dd2f33e9744cb484468e0ed9bdee8448d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2f8015b039d147ced060dd89de48062ab9ba54ab5410ed8831869d78e01b6a68->leave($__internal_2f8015b039d147ced060dd89de48062ab9ba54ab5410ed8831869d78e01b6a68_prof);

        
        $__internal_80adbe1daa9841c98b28096e5f50a2dd2f33e9744cb484468e0ed9bdee8448d0->leave($__internal_80adbe1daa9841c98b28096e5f50a2dd2f33e9744cb484468e0ed9bdee8448d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
