<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_d545008ba3ca3394266d95ea4895feb6c1a945e3dacf312218959438c43af6d4 extends Twig_Template
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
        $__internal_9889c4583696f77a0f0e76ef3db6d4d121e173111531fac251c323e3817e115e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9889c4583696f77a0f0e76ef3db6d4d121e173111531fac251c323e3817e115e->enter($__internal_9889c4583696f77a0f0e76ef3db6d4d121e173111531fac251c323e3817e115e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_4eb45a77a87884bdc97373ad72cceefe5eca92b7913d1f81b7af9097956ac319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eb45a77a87884bdc97373ad72cceefe5eca92b7913d1f81b7af9097956ac319->enter($__internal_4eb45a77a87884bdc97373ad72cceefe5eca92b7913d1f81b7af9097956ac319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9889c4583696f77a0f0e76ef3db6d4d121e173111531fac251c323e3817e115e->leave($__internal_9889c4583696f77a0f0e76ef3db6d4d121e173111531fac251c323e3817e115e_prof);

        
        $__internal_4eb45a77a87884bdc97373ad72cceefe5eca92b7913d1f81b7af9097956ac319->leave($__internal_4eb45a77a87884bdc97373ad72cceefe5eca92b7913d1f81b7af9097956ac319_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
