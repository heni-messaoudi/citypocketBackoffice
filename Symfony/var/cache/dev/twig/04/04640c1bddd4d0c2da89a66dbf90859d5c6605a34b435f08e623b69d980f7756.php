<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_ac9f2b2ec665a2e6a4d2e5aa2832519ada21663653c073d6f2796800b26294d8 extends Twig_Template
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
        $__internal_751f351d69de1176b24454d7bc0b41254c2e0ec1cce3b5108ec355dfc37d5926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_751f351d69de1176b24454d7bc0b41254c2e0ec1cce3b5108ec355dfc37d5926->enter($__internal_751f351d69de1176b24454d7bc0b41254c2e0ec1cce3b5108ec355dfc37d5926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_23cfa6ed532672f682150bfd09384b44d3197d1907c948cf91f84ac4e88091dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23cfa6ed532672f682150bfd09384b44d3197d1907c948cf91f84ac4e88091dd->enter($__internal_23cfa6ed532672f682150bfd09384b44d3197d1907c948cf91f84ac4e88091dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_751f351d69de1176b24454d7bc0b41254c2e0ec1cce3b5108ec355dfc37d5926->leave($__internal_751f351d69de1176b24454d7bc0b41254c2e0ec1cce3b5108ec355dfc37d5926_prof);

        
        $__internal_23cfa6ed532672f682150bfd09384b44d3197d1907c948cf91f84ac4e88091dd->leave($__internal_23cfa6ed532672f682150bfd09384b44d3197d1907c948cf91f84ac4e88091dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
