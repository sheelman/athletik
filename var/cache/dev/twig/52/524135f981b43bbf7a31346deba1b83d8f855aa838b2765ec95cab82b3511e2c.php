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
        $__internal_eefa9a3a90d800d8a8828db1a1df6bf21e99bce3bac9402eecf8b95fbb968eeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eefa9a3a90d800d8a8828db1a1df6bf21e99bce3bac9402eecf8b95fbb968eeb->enter($__internal_eefa9a3a90d800d8a8828db1a1df6bf21e99bce3bac9402eecf8b95fbb968eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_116b45ef9b56454740cc6fed77e52077fa4b88f87d1fc027d3659b87d109ab98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_116b45ef9b56454740cc6fed77e52077fa4b88f87d1fc027d3659b87d109ab98->enter($__internal_116b45ef9b56454740cc6fed77e52077fa4b88f87d1fc027d3659b87d109ab98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eefa9a3a90d800d8a8828db1a1df6bf21e99bce3bac9402eecf8b95fbb968eeb->leave($__internal_eefa9a3a90d800d8a8828db1a1df6bf21e99bce3bac9402eecf8b95fbb968eeb_prof);

        
        $__internal_116b45ef9b56454740cc6fed77e52077fa4b88f87d1fc027d3659b87d109ab98->leave($__internal_116b45ef9b56454740cc6fed77e52077fa4b88f87d1fc027d3659b87d109ab98_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_073c7659c402b2c2c842b3fd880994111ebcbd4c510121a404829612454fc738 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_073c7659c402b2c2c842b3fd880994111ebcbd4c510121a404829612454fc738->enter($__internal_073c7659c402b2c2c842b3fd880994111ebcbd4c510121a404829612454fc738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_93357a4293aa6936d0b15033c74197098860f76d699a8fda0b955fc1fa2f7de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93357a4293aa6936d0b15033c74197098860f76d699a8fda0b955fc1fa2f7de9->enter($__internal_93357a4293aa6936d0b15033c74197098860f76d699a8fda0b955fc1fa2f7de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_93357a4293aa6936d0b15033c74197098860f76d699a8fda0b955fc1fa2f7de9->leave($__internal_93357a4293aa6936d0b15033c74197098860f76d699a8fda0b955fc1fa2f7de9_prof);

        
        $__internal_073c7659c402b2c2c842b3fd880994111ebcbd4c510121a404829612454fc738->leave($__internal_073c7659c402b2c2c842b3fd880994111ebcbd4c510121a404829612454fc738_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ef55482f8684f876b1e5c265431286d088841413839befa76759dd9d353edfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ef55482f8684f876b1e5c265431286d088841413839befa76759dd9d353edfc->enter($__internal_0ef55482f8684f876b1e5c265431286d088841413839befa76759dd9d353edfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e203d8bb29c1ad991883c38783645dfe608ba0913a29533cd4a61868b1a727e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e203d8bb29c1ad991883c38783645dfe608ba0913a29533cd4a61868b1a727e->enter($__internal_9e203d8bb29c1ad991883c38783645dfe608ba0913a29533cd4a61868b1a727e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9e203d8bb29c1ad991883c38783645dfe608ba0913a29533cd4a61868b1a727e->leave($__internal_9e203d8bb29c1ad991883c38783645dfe608ba0913a29533cd4a61868b1a727e_prof);

        
        $__internal_0ef55482f8684f876b1e5c265431286d088841413839befa76759dd9d353edfc->leave($__internal_0ef55482f8684f876b1e5c265431286d088841413839befa76759dd9d353edfc_prof);

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
