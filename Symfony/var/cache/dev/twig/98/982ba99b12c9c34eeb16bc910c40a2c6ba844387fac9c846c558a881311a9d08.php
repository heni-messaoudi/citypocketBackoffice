<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_ecf24be5060054b068835ec0879b8d65f4ae67b502b8101e27d682ce442bb8cc extends Twig_Template
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
        $__internal_1fe0c0982a07b46e2e92d07bd299f16dadbb7bb19fb6844c116522d81603fd9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fe0c0982a07b46e2e92d07bd299f16dadbb7bb19fb6844c116522d81603fd9e->enter($__internal_1fe0c0982a07b46e2e92d07bd299f16dadbb7bb19fb6844c116522d81603fd9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_cb4da97da91491df0edd3dce94705a7be6338aa91a9500327c44f89d9ab7888f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb4da97da91491df0edd3dce94705a7be6338aa91a9500327c44f89d9ab7888f->enter($__internal_cb4da97da91491df0edd3dce94705a7be6338aa91a9500327c44f89d9ab7888f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_1fe0c0982a07b46e2e92d07bd299f16dadbb7bb19fb6844c116522d81603fd9e->leave($__internal_1fe0c0982a07b46e2e92d07bd299f16dadbb7bb19fb6844c116522d81603fd9e_prof);

        
        $__internal_cb4da97da91491df0edd3dce94705a7be6338aa91a9500327c44f89d9ab7888f->leave($__internal_cb4da97da91491df0edd3dce94705a7be6338aa91a9500327c44f89d9ab7888f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
