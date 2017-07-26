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
        $__internal_896a2014452b2ff2fcca49dcbfa47aa2cfc1e5d8a4521413eca11292c3994548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_896a2014452b2ff2fcca49dcbfa47aa2cfc1e5d8a4521413eca11292c3994548->enter($__internal_896a2014452b2ff2fcca49dcbfa47aa2cfc1e5d8a4521413eca11292c3994548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_9964adc3c26a4da4b922dbdbf8ee44ac966fea61e7d80b8077f066370df9df23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9964adc3c26a4da4b922dbdbf8ee44ac966fea61e7d80b8077f066370df9df23->enter($__internal_9964adc3c26a4da4b922dbdbf8ee44ac966fea61e7d80b8077f066370df9df23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_896a2014452b2ff2fcca49dcbfa47aa2cfc1e5d8a4521413eca11292c3994548->leave($__internal_896a2014452b2ff2fcca49dcbfa47aa2cfc1e5d8a4521413eca11292c3994548_prof);

        
        $__internal_9964adc3c26a4da4b922dbdbf8ee44ac966fea61e7d80b8077f066370df9df23->leave($__internal_9964adc3c26a4da4b922dbdbf8ee44ac966fea61e7d80b8077f066370df9df23_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4e6a76e45bb6a3aec64e2dca2503924bd209bfd6e3817c29891268f106cd2d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4e6a76e45bb6a3aec64e2dca2503924bd209bfd6e3817c29891268f106cd2d2->enter($__internal_e4e6a76e45bb6a3aec64e2dca2503924bd209bfd6e3817c29891268f106cd2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_250691cba637931f217e0c9b767ad18242d77bd22e7192a97b8c30ad982f873d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250691cba637931f217e0c9b767ad18242d77bd22e7192a97b8c30ad982f873d->enter($__internal_250691cba637931f217e0c9b767ad18242d77bd22e7192a97b8c30ad982f873d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_250691cba637931f217e0c9b767ad18242d77bd22e7192a97b8c30ad982f873d->leave($__internal_250691cba637931f217e0c9b767ad18242d77bd22e7192a97b8c30ad982f873d_prof);

        
        $__internal_e4e6a76e45bb6a3aec64e2dca2503924bd209bfd6e3817c29891268f106cd2d2->leave($__internal_e4e6a76e45bb6a3aec64e2dca2503924bd209bfd6e3817c29891268f106cd2d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_87e5fc88c1031d8260ac061e7768f3d03037b28611ed0912aaf2e550ed56df00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87e5fc88c1031d8260ac061e7768f3d03037b28611ed0912aaf2e550ed56df00->enter($__internal_87e5fc88c1031d8260ac061e7768f3d03037b28611ed0912aaf2e550ed56df00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df882a38b7b4ecac4c1a9e993884d9294798a264fd3b950d47be64eabdbcaff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df882a38b7b4ecac4c1a9e993884d9294798a264fd3b950d47be64eabdbcaff2->enter($__internal_df882a38b7b4ecac4c1a9e993884d9294798a264fd3b950d47be64eabdbcaff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_df882a38b7b4ecac4c1a9e993884d9294798a264fd3b950d47be64eabdbcaff2->leave($__internal_df882a38b7b4ecac4c1a9e993884d9294798a264fd3b950d47be64eabdbcaff2_prof);

        
        $__internal_87e5fc88c1031d8260ac061e7768f3d03037b28611ed0912aaf2e550ed56df00->leave($__internal_87e5fc88c1031d8260ac061e7768f3d03037b28611ed0912aaf2e550ed56df00_prof);

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
