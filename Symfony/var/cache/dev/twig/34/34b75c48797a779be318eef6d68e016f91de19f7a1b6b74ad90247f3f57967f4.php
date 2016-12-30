<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_0936b37e29e54319fade1e94c2bca3db74902e4f67e099351c3aa4c4c79fdb96 extends Twig_Template
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
        $__internal_2c9004bacf78ed34aad146bbff2eec6322fb5a1c475b8a791274d11dac6c3747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c9004bacf78ed34aad146bbff2eec6322fb5a1c475b8a791274d11dac6c3747->enter($__internal_2c9004bacf78ed34aad146bbff2eec6322fb5a1c475b8a791274d11dac6c3747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_0fb29bb1a13ff3e1187b6ec918ec7c93cfde5a445237ed2561766bd9ae192d28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb29bb1a13ff3e1187b6ec918ec7c93cfde5a445237ed2561766bd9ae192d28->enter($__internal_0fb29bb1a13ff3e1187b6ec918ec7c93cfde5a445237ed2561766bd9ae192d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_2c9004bacf78ed34aad146bbff2eec6322fb5a1c475b8a791274d11dac6c3747->leave($__internal_2c9004bacf78ed34aad146bbff2eec6322fb5a1c475b8a791274d11dac6c3747_prof);

        
        $__internal_0fb29bb1a13ff3e1187b6ec918ec7c93cfde5a445237ed2561766bd9ae192d28->leave($__internal_0fb29bb1a13ff3e1187b6ec918ec7c93cfde5a445237ed2561766bd9ae192d28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
