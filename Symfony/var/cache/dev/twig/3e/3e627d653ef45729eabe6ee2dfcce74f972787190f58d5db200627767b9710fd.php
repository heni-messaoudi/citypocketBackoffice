<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ad0c6d185b9d9f4f6058a82673e4cd9e6f4ef144d97b44ce2a64619d6fc4bfd1 extends Twig_Template
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
        $__internal_a6466dc1e3cb9a448fab8bb56bdb6c556904dd73c56cd91a1691f8621072dddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6466dc1e3cb9a448fab8bb56bdb6c556904dd73c56cd91a1691f8621072dddf->enter($__internal_a6466dc1e3cb9a448fab8bb56bdb6c556904dd73c56cd91a1691f8621072dddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_e6807e39242d34ad6d31266ebb440fc2c469819c7d65271c6b81383d4e81caef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6807e39242d34ad6d31266ebb440fc2c469819c7d65271c6b81383d4e81caef->enter($__internal_e6807e39242d34ad6d31266ebb440fc2c469819c7d65271c6b81383d4e81caef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a6466dc1e3cb9a448fab8bb56bdb6c556904dd73c56cd91a1691f8621072dddf->leave($__internal_a6466dc1e3cb9a448fab8bb56bdb6c556904dd73c56cd91a1691f8621072dddf_prof);

        
        $__internal_e6807e39242d34ad6d31266ebb440fc2c469819c7d65271c6b81383d4e81caef->leave($__internal_e6807e39242d34ad6d31266ebb440fc2c469819c7d65271c6b81383d4e81caef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
