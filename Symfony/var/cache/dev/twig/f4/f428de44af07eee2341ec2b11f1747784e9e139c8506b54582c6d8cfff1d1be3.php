<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_0f2525c9a19846c7ea1c75635594692e792bcb98204f8281ce616436e0c1902d extends Twig_Template
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
        $__internal_2a3158203a25c6138bb44c57eee6610a634911881f5ba261e6913909460f7462 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a3158203a25c6138bb44c57eee6610a634911881f5ba261e6913909460f7462->enter($__internal_2a3158203a25c6138bb44c57eee6610a634911881f5ba261e6913909460f7462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_4f1c3f8978b43914c692028886154e5bce0b282a1c29a1c8d93a9267e11ad159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1c3f8978b43914c692028886154e5bce0b282a1c29a1c8d93a9267e11ad159->enter($__internal_4f1c3f8978b43914c692028886154e5bce0b282a1c29a1c8d93a9267e11ad159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_2a3158203a25c6138bb44c57eee6610a634911881f5ba261e6913909460f7462->leave($__internal_2a3158203a25c6138bb44c57eee6610a634911881f5ba261e6913909460f7462_prof);

        
        $__internal_4f1c3f8978b43914c692028886154e5bce0b282a1c29a1c8d93a9267e11ad159->leave($__internal_4f1c3f8978b43914c692028886154e5bce0b282a1c29a1c8d93a9267e11ad159_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
