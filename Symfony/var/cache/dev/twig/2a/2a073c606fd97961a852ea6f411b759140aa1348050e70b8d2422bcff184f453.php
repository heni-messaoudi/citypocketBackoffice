<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_cb767f4bca480c55ad665f25ff96f6737876677a46b6959272b4f87bfc83f677 extends Twig_Template
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
        $__internal_0f3cb856cf760b6adecfd9d662bae466c2586602f5a59ef2708e6eba3c76b190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f3cb856cf760b6adecfd9d662bae466c2586602f5a59ef2708e6eba3c76b190->enter($__internal_0f3cb856cf760b6adecfd9d662bae466c2586602f5a59ef2708e6eba3c76b190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_3f7fa9f75a5180cb87b60ad3247bffaae27f011c6edbd95a8bb28cbf9ea5bb4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7fa9f75a5180cb87b60ad3247bffaae27f011c6edbd95a8bb28cbf9ea5bb4e->enter($__internal_3f7fa9f75a5180cb87b60ad3247bffaae27f011c6edbd95a8bb28cbf9ea5bb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0f3cb856cf760b6adecfd9d662bae466c2586602f5a59ef2708e6eba3c76b190->leave($__internal_0f3cb856cf760b6adecfd9d662bae466c2586602f5a59ef2708e6eba3c76b190_prof);

        
        $__internal_3f7fa9f75a5180cb87b60ad3247bffaae27f011c6edbd95a8bb28cbf9ea5bb4e->leave($__internal_3f7fa9f75a5180cb87b60ad3247bffaae27f011c6edbd95a8bb28cbf9ea5bb4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
