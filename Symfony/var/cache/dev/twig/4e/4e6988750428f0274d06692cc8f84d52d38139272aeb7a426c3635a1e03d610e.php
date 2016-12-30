<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_082ce83202df9846379c02143dfe7b9c853d796c84261c4f798b491dbc7bbb7c extends Twig_Template
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
        $__internal_6acc0a14a5241541a00b40a22a7afbe2eaa0e288aa1f57b53569e7a313957c61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6acc0a14a5241541a00b40a22a7afbe2eaa0e288aa1f57b53569e7a313957c61->enter($__internal_6acc0a14a5241541a00b40a22a7afbe2eaa0e288aa1f57b53569e7a313957c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_963b9ac9e13b48295918d3ad951690f554e99001f4fcb858089a0d24fff5321a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_963b9ac9e13b48295918d3ad951690f554e99001f4fcb858089a0d24fff5321a->enter($__internal_963b9ac9e13b48295918d3ad951690f554e99001f4fcb858089a0d24fff5321a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_6acc0a14a5241541a00b40a22a7afbe2eaa0e288aa1f57b53569e7a313957c61->leave($__internal_6acc0a14a5241541a00b40a22a7afbe2eaa0e288aa1f57b53569e7a313957c61_prof);

        
        $__internal_963b9ac9e13b48295918d3ad951690f554e99001f4fcb858089a0d24fff5321a->leave($__internal_963b9ac9e13b48295918d3ad951690f554e99001f4fcb858089a0d24fff5321a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
