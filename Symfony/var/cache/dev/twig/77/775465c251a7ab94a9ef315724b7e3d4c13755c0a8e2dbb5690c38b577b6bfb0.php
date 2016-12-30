<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_399ad8b4f6cf67af2b38f0baee42dd5d412dabb9c45b2c3c45b121aa1bd71e28 extends Twig_Template
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
        $__internal_56716a355422abb0b2611a7551208b57518f41edb55aee350c04856f233acb4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56716a355422abb0b2611a7551208b57518f41edb55aee350c04856f233acb4e->enter($__internal_56716a355422abb0b2611a7551208b57518f41edb55aee350c04856f233acb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_d0a51a89eab4560c0c14d4594f3c2311ee8c3eb332098a4341a139b1776b2130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a51a89eab4560c0c14d4594f3c2311ee8c3eb332098a4341a139b1776b2130->enter($__internal_d0a51a89eab4560c0c14d4594f3c2311ee8c3eb332098a4341a139b1776b2130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_56716a355422abb0b2611a7551208b57518f41edb55aee350c04856f233acb4e->leave($__internal_56716a355422abb0b2611a7551208b57518f41edb55aee350c04856f233acb4e_prof);

        
        $__internal_d0a51a89eab4560c0c14d4594f3c2311ee8c3eb332098a4341a139b1776b2130->leave($__internal_d0a51a89eab4560c0c14d4594f3c2311ee8c3eb332098a4341a139b1776b2130_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
