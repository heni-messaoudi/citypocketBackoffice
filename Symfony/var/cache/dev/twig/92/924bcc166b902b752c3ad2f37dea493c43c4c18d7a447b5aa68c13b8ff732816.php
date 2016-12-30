<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_38e3ea7416dfe5b4fca711dd6ae93e2b50a10bd482feacf9014a3a90f9d37b6d extends Twig_Template
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
        $__internal_e08d2e598e36c51ece29811314ed5602b97a76ef984795db5ecaf6a0a930660c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e08d2e598e36c51ece29811314ed5602b97a76ef984795db5ecaf6a0a930660c->enter($__internal_e08d2e598e36c51ece29811314ed5602b97a76ef984795db5ecaf6a0a930660c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_f71be5bf494706873122d5440748c6a6633e4b1ba81b53fcc435dc9bfc9ae29e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f71be5bf494706873122d5440748c6a6633e4b1ba81b53fcc435dc9bfc9ae29e->enter($__internal_f71be5bf494706873122d5440748c6a6633e4b1ba81b53fcc435dc9bfc9ae29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_e08d2e598e36c51ece29811314ed5602b97a76ef984795db5ecaf6a0a930660c->leave($__internal_e08d2e598e36c51ece29811314ed5602b97a76ef984795db5ecaf6a0a930660c_prof);

        
        $__internal_f71be5bf494706873122d5440748c6a6633e4b1ba81b53fcc435dc9bfc9ae29e->leave($__internal_f71be5bf494706873122d5440748c6a6633e4b1ba81b53fcc435dc9bfc9ae29e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
