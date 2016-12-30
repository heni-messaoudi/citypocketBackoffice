<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_1495fcfa6a17be62e90414e98c5fb47f803a0760befb1c73e9be409309ea4442 extends Twig_Template
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
        $__internal_041ac247ddc5d359208eebd6c86b7b6e54feb2b4035c1ae44a09200813cd4e79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_041ac247ddc5d359208eebd6c86b7b6e54feb2b4035c1ae44a09200813cd4e79->enter($__internal_041ac247ddc5d359208eebd6c86b7b6e54feb2b4035c1ae44a09200813cd4e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_697a0e024c26e11a9016aaccc7a33981af0142afc483ef3bed8ccd4283465ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_697a0e024c26e11a9016aaccc7a33981af0142afc483ef3bed8ccd4283465ae7->enter($__internal_697a0e024c26e11a9016aaccc7a33981af0142afc483ef3bed8ccd4283465ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_041ac247ddc5d359208eebd6c86b7b6e54feb2b4035c1ae44a09200813cd4e79->leave($__internal_041ac247ddc5d359208eebd6c86b7b6e54feb2b4035c1ae44a09200813cd4e79_prof);

        
        $__internal_697a0e024c26e11a9016aaccc7a33981af0142afc483ef3bed8ccd4283465ae7->leave($__internal_697a0e024c26e11a9016aaccc7a33981af0142afc483ef3bed8ccd4283465ae7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
