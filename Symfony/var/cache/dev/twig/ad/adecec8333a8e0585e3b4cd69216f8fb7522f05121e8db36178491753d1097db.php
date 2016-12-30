<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_5a786d13931a08a2a5d416b3beae453b584bc6be7899d15170dd5572e759e6ed extends Twig_Template
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
        $__internal_135caf28d3890a5970d7b7e436a2e3a0ad38a963b3d9568d8c273e902db39de4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_135caf28d3890a5970d7b7e436a2e3a0ad38a963b3d9568d8c273e902db39de4->enter($__internal_135caf28d3890a5970d7b7e436a2e3a0ad38a963b3d9568d8c273e902db39de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_d2ac27a23a062e3a25d27c5791b74d029ceb33dcd43a7f974ddfca5aa723f86e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2ac27a23a062e3a25d27c5791b74d029ceb33dcd43a7f974ddfca5aa723f86e->enter($__internal_d2ac27a23a062e3a25d27c5791b74d029ceb33dcd43a7f974ddfca5aa723f86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_135caf28d3890a5970d7b7e436a2e3a0ad38a963b3d9568d8c273e902db39de4->leave($__internal_135caf28d3890a5970d7b7e436a2e3a0ad38a963b3d9568d8c273e902db39de4_prof);

        
        $__internal_d2ac27a23a062e3a25d27c5791b74d029ceb33dcd43a7f974ddfca5aa723f86e->leave($__internal_d2ac27a23a062e3a25d27c5791b74d029ceb33dcd43a7f974ddfca5aa723f86e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
