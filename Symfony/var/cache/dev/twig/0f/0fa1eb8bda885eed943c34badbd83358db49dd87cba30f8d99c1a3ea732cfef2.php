<?php

/* pslieuxBundle:lieu:form.html.twig */
class __TwigTemplate_f44098863f0c55bf7e6838a23daac529400772992f3942345da6200fe2b6f8e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pslieuxBundle:lieu:form.html.twig", 1);
        $this->blocks = array(
            'categorieBlock' => array($this, 'block_categorieBlock'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c228c45c827666e8f433d6acbcfcb567a86d7c454347d19930013f655c344627 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c228c45c827666e8f433d6acbcfcb567a86d7c454347d19930013f655c344627->enter($__internal_c228c45c827666e8f433d6acbcfcb567a86d7c454347d19930013f655c344627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pslieuxBundle:lieu:form.html.twig"));

        $__internal_932d36dc3249ddd25fb37cf5c250413c5656b84ba96acf71a541a68b6b2a6d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_932d36dc3249ddd25fb37cf5c250413c5656b84ba96acf71a541a68b6b2a6d86->enter($__internal_932d36dc3249ddd25fb37cf5c250413c5656b84ba96acf71a541a68b6b2a6d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pslieuxBundle:lieu:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c228c45c827666e8f433d6acbcfcb567a86d7c454347d19930013f655c344627->leave($__internal_c228c45c827666e8f433d6acbcfcb567a86d7c454347d19930013f655c344627_prof);

        
        $__internal_932d36dc3249ddd25fb37cf5c250413c5656b84ba96acf71a541a68b6b2a6d86->leave($__internal_932d36dc3249ddd25fb37cf5c250413c5656b84ba96acf71a541a68b6b2a6d86_prof);

    }

    // line 3
    public function block_categorieBlock($context, array $blocks = array())
    {
        $__internal_c026a6ee3de8554056fb39e8c65ca7c4afebca49cd6255d41f2443c72af6fc80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c026a6ee3de8554056fb39e8c65ca7c4afebca49cd6255d41f2443c72af6fc80->enter($__internal_c026a6ee3de8554056fb39e8c65ca7c4afebca49cd6255d41f2443c72af6fc80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorieBlock"));

        $__internal_b172be7313333bc3bc96307130504d30bf82bed159928da4d696eaf0fb52c48b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b172be7313333bc3bc96307130504d30bf82bed159928da4d696eaf0fb52c48b->enter($__internal_b172be7313333bc3bc96307130504d30bf82bed159928da4d696eaf0fb52c48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorieBlock"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 5
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list", array("categorie" => $context["cat"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["cat"], "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b172be7313333bc3bc96307130504d30bf82bed159928da4d696eaf0fb52c48b->leave($__internal_b172be7313333bc3bc96307130504d30bf82bed159928da4d696eaf0fb52c48b_prof);

        
        $__internal_c026a6ee3de8554056fb39e8c65ca7c4afebca49cd6255d41f2443c72af6fc80->leave($__internal_c026a6ee3de8554056fb39e8c65ca7c4afebca49cd6255d41f2443c72af6fc80_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_1eee177b4bf314561ce46592b9f77ff6acbfe120acce8ca25d34d8e8529e5033 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eee177b4bf314561ce46592b9f77ff6acbfe120acce8ca25d34d8e8529e5033->enter($__internal_1eee177b4bf314561ce46592b9f77ff6acbfe120acce8ca25d34d8e8529e5033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_bdadba17bee88c66696ce835713e08fb620867efc2b4b24ba8b19fcbda3ce620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdadba17bee88c66696ce835713e08fb620867efc2b4b24ba8b19fcbda3ce620->enter($__internal_bdadba17bee88c66696ce835713e08fb620867efc2b4b24ba8b19fcbda3ce620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <h3>";
        echo twig_escape_filter($this->env, ($context["action"] ?? $this->getContext($context, "action")), "html", null, true);
        echo " d'un lieu</h3>

    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "

";
        
        $__internal_bdadba17bee88c66696ce835713e08fb620867efc2b4b24ba8b19fcbda3ce620->leave($__internal_bdadba17bee88c66696ce835713e08fb620867efc2b4b24ba8b19fcbda3ce620_prof);

        
        $__internal_1eee177b4bf314561ce46592b9f77ff6acbfe120acce8ca25d34d8e8529e5033->leave($__internal_1eee177b4bf314561ce46592b9f77ff6acbfe120acce8ca25d34d8e8529e5033_prof);

    }

    public function getTemplateName()
    {
        return "pslieuxBundle:lieu:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 12,  83 => 10,  74 => 9,  55 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block categorieBlock %}
    {% for cat in categories %}
        <li><a href=\"{{ path('list', {'categorie' : cat}) }}\">{{ cat }}</a></li>
    {% endfor %}
{% endblock %}

{% block content %}
    <h3>{{ action }} d'un lieu</h3>

    {{ form(form) }}

{% endblock %}
", "pslieuxBundle:lieu:form.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ps\\lieuxBundle/Resources/views/lieu/form.html.twig");
    }
}
