<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_17dd708f48ed0fa97482345879a8af4e7259a0db0e75a02594877243d1f0c38b extends Twig_Template
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
        $__internal_e697a64767f906b598bc9d502ca8977b48b13a77ec7be648a475a4a1f53c7a01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e697a64767f906b598bc9d502ca8977b48b13a77ec7be648a475a4a1f53c7a01->enter($__internal_e697a64767f906b598bc9d502ca8977b48b13a77ec7be648a475a4a1f53c7a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_4549ff8ea77198ffd0978d1fdcba2192feac8e89b9f8a3e3a9810a4b8a7b93fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4549ff8ea77198ffd0978d1fdcba2192feac8e89b9f8a3e3a9810a4b8a7b93fe->enter($__internal_4549ff8ea77198ffd0978d1fdcba2192feac8e89b9f8a3e3a9810a4b8a7b93fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e697a64767f906b598bc9d502ca8977b48b13a77ec7be648a475a4a1f53c7a01->leave($__internal_e697a64767f906b598bc9d502ca8977b48b13a77ec7be648a475a4a1f53c7a01_prof);

        
        $__internal_4549ff8ea77198ffd0978d1fdcba2192feac8e89b9f8a3e3a9810a4b8a7b93fe->leave($__internal_4549ff8ea77198ffd0978d1fdcba2192feac8e89b9f8a3e3a9810a4b8a7b93fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
