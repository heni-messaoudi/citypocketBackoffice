<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_bb4c5359e826b907e2dcf1ef09f8d4337125b84f0c937e8406465797f9fe26d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58949b36059e9d5890ea65a9f1b7264faf705386f755e93fea60798f308afe96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58949b36059e9d5890ea65a9f1b7264faf705386f755e93fea60798f308afe96->enter($__internal_58949b36059e9d5890ea65a9f1b7264faf705386f755e93fea60798f308afe96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_00de3e3b39d2c7512c9b86d370cb29b49176b663d82c4e1233aa0a3f2daf9a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00de3e3b39d2c7512c9b86d370cb29b49176b663d82c4e1233aa0a3f2daf9a05->enter($__internal_00de3e3b39d2c7512c9b86d370cb29b49176b663d82c4e1233aa0a3f2daf9a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_58949b36059e9d5890ea65a9f1b7264faf705386f755e93fea60798f308afe96->leave($__internal_58949b36059e9d5890ea65a9f1b7264faf705386f755e93fea60798f308afe96_prof);

        
        $__internal_00de3e3b39d2c7512c9b86d370cb29b49176b663d82c4e1233aa0a3f2daf9a05->leave($__internal_00de3e3b39d2c7512c9b86d370cb29b49176b663d82c4e1233aa0a3f2daf9a05_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b64c35b401b0260dd68ec36d46ddea86e4731f70e5d0fef27fa23689d5b6ba2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b64c35b401b0260dd68ec36d46ddea86e4731f70e5d0fef27fa23689d5b6ba2a->enter($__internal_b64c35b401b0260dd68ec36d46ddea86e4731f70e5d0fef27fa23689d5b6ba2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8c64a754ff2e1c8f39ca39df444b591d745edc77e3c5db13076c0f4512c33396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c64a754ff2e1c8f39ca39df444b591d745edc77e3c5db13076c0f4512c33396->enter($__internal_8c64a754ff2e1c8f39ca39df444b591d745edc77e3c5db13076c0f4512c33396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8c64a754ff2e1c8f39ca39df444b591d745edc77e3c5db13076c0f4512c33396->leave($__internal_8c64a754ff2e1c8f39ca39df444b591d745edc77e3c5db13076c0f4512c33396_prof);

        
        $__internal_b64c35b401b0260dd68ec36d46ddea86e4731f70e5d0fef27fa23689d5b6ba2a->leave($__internal_b64c35b401b0260dd68ec36d46ddea86e4731f70e5d0fef27fa23689d5b6ba2a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
