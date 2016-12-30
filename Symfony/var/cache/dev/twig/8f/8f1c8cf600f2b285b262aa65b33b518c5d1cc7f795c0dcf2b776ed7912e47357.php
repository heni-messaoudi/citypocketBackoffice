<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_f505e868b6e79170f1c2ebd55a2c7137efeea3826ca4529db7468487af751c17 extends Twig_Template
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
        $__internal_2e81b58c2ecca4ca930a77c7cac6f03ed086e3c4100a27738ef1d3339c6f955d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e81b58c2ecca4ca930a77c7cac6f03ed086e3c4100a27738ef1d3339c6f955d->enter($__internal_2e81b58c2ecca4ca930a77c7cac6f03ed086e3c4100a27738ef1d3339c6f955d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_6aff851d828c34f270284db62596877b70e369158f03a4638b008bcc2df5674e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aff851d828c34f270284db62596877b70e369158f03a4638b008bcc2df5674e->enter($__internal_6aff851d828c34f270284db62596877b70e369158f03a4638b008bcc2df5674e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_2e81b58c2ecca4ca930a77c7cac6f03ed086e3c4100a27738ef1d3339c6f955d->leave($__internal_2e81b58c2ecca4ca930a77c7cac6f03ed086e3c4100a27738ef1d3339c6f955d_prof);

        
        $__internal_6aff851d828c34f270284db62596877b70e369158f03a4638b008bcc2df5674e->leave($__internal_6aff851d828c34f270284db62596877b70e369158f03a4638b008bcc2df5674e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
