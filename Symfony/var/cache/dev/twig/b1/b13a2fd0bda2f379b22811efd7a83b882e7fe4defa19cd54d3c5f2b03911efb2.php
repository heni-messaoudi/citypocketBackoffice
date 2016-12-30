<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_9d5b57fd0595f50df7d175a07351bd4ef44bfb720af7dfe7cd211e8facb6560c extends Twig_Template
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
        $__internal_952d8bf52572e2760081c016eac8b11110426b50f3111cccbcebf40b82deb064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_952d8bf52572e2760081c016eac8b11110426b50f3111cccbcebf40b82deb064->enter($__internal_952d8bf52572e2760081c016eac8b11110426b50f3111cccbcebf40b82deb064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_7666005f4b46db52a15c5febcfdeb7fd6c5168037d543fd40633affc2473a603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7666005f4b46db52a15c5febcfdeb7fd6c5168037d543fd40633affc2473a603->enter($__internal_7666005f4b46db52a15c5febcfdeb7fd6c5168037d543fd40633affc2473a603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_952d8bf52572e2760081c016eac8b11110426b50f3111cccbcebf40b82deb064->leave($__internal_952d8bf52572e2760081c016eac8b11110426b50f3111cccbcebf40b82deb064_prof);

        
        $__internal_7666005f4b46db52a15c5febcfdeb7fd6c5168037d543fd40633affc2473a603->leave($__internal_7666005f4b46db52a15c5febcfdeb7fd6c5168037d543fd40633affc2473a603_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
