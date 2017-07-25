<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_02d845a49bdd57a4be066814fe8a9768b23f387ad2777b19ef633ba46046768f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e60e23ca69a6b2fe6c30c9aaa49ca6854332b6a2f1edf6927abc87f861cc9782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e60e23ca69a6b2fe6c30c9aaa49ca6854332b6a2f1edf6927abc87f861cc9782->enter($__internal_e60e23ca69a6b2fe6c30c9aaa49ca6854332b6a2f1edf6927abc87f861cc9782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_3fed03027c79578e0e6ea6c60aa8c930a4566d566bd124f86292d5ea967623c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fed03027c79578e0e6ea6c60aa8c930a4566d566bd124f86292d5ea967623c0->enter($__internal_3fed03027c79578e0e6ea6c60aa8c930a4566d566bd124f86292d5ea967623c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e60e23ca69a6b2fe6c30c9aaa49ca6854332b6a2f1edf6927abc87f861cc9782->leave($__internal_e60e23ca69a6b2fe6c30c9aaa49ca6854332b6a2f1edf6927abc87f861cc9782_prof);

        
        $__internal_3fed03027c79578e0e6ea6c60aa8c930a4566d566bd124f86292d5ea967623c0->leave($__internal_3fed03027c79578e0e6ea6c60aa8c930a4566d566bd124f86292d5ea967623c0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd10d1b180f895417b22822498c4d139dedd0062984509cb43278c655c0f206b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd10d1b180f895417b22822498c4d139dedd0062984509cb43278c655c0f206b->enter($__internal_cd10d1b180f895417b22822498c4d139dedd0062984509cb43278c655c0f206b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_704ccbb1c0b5af28c1f11bd6bea26406104c400eae245c554e640cf26c294af7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_704ccbb1c0b5af28c1f11bd6bea26406104c400eae245c554e640cf26c294af7->enter($__internal_704ccbb1c0b5af28c1f11bd6bea26406104c400eae245c554e640cf26c294af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_704ccbb1c0b5af28c1f11bd6bea26406104c400eae245c554e640cf26c294af7->leave($__internal_704ccbb1c0b5af28c1f11bd6bea26406104c400eae245c554e640cf26c294af7_prof);

        
        $__internal_cd10d1b180f895417b22822498c4d139dedd0062984509cb43278c655c0f206b->leave($__internal_cd10d1b180f895417b22822498c4d139dedd0062984509cb43278c655c0f206b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5664888d15c75bc6cbbdcb5f20fb04762e4337111161cbfc5bff781b21efb2bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5664888d15c75bc6cbbdcb5f20fb04762e4337111161cbfc5bff781b21efb2bf->enter($__internal_5664888d15c75bc6cbbdcb5f20fb04762e4337111161cbfc5bff781b21efb2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f13bf1ae9b6cf924c5ea3dfeca63e0a98b01d611b604d0f4e1a7626892247ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f13bf1ae9b6cf924c5ea3dfeca63e0a98b01d611b604d0f4e1a7626892247ac->enter($__internal_5f13bf1ae9b6cf924c5ea3dfeca63e0a98b01d611b604d0f4e1a7626892247ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5f13bf1ae9b6cf924c5ea3dfeca63e0a98b01d611b604d0f4e1a7626892247ac->leave($__internal_5f13bf1ae9b6cf924c5ea3dfeca63e0a98b01d611b604d0f4e1a7626892247ac_prof);

        
        $__internal_5664888d15c75bc6cbbdcb5f20fb04762e4337111161cbfc5bff781b21efb2bf->leave($__internal_5664888d15c75bc6cbbdcb5f20fb04762e4337111161cbfc5bff781b21efb2bf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
