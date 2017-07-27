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
        $__internal_fa1be2e96bb37c0ba99cbc0b7f952cf73c4a221b11a6eebe4e7c937d6b7a5222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1be2e96bb37c0ba99cbc0b7f952cf73c4a221b11a6eebe4e7c937d6b7a5222->enter($__internal_fa1be2e96bb37c0ba99cbc0b7f952cf73c4a221b11a6eebe4e7c937d6b7a5222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_059154d2bf730376dc7a7275379e741dbfb8054e4783692edf3ac3fd7f416e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_059154d2bf730376dc7a7275379e741dbfb8054e4783692edf3ac3fd7f416e5d->enter($__internal_059154d2bf730376dc7a7275379e741dbfb8054e4783692edf3ac3fd7f416e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa1be2e96bb37c0ba99cbc0b7f952cf73c4a221b11a6eebe4e7c937d6b7a5222->leave($__internal_fa1be2e96bb37c0ba99cbc0b7f952cf73c4a221b11a6eebe4e7c937d6b7a5222_prof);

        
        $__internal_059154d2bf730376dc7a7275379e741dbfb8054e4783692edf3ac3fd7f416e5d->leave($__internal_059154d2bf730376dc7a7275379e741dbfb8054e4783692edf3ac3fd7f416e5d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e24e09bc4c4bfc68f61245c1a14555406b3b9526272b2b3d26c35a150a8c15bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e24e09bc4c4bfc68f61245c1a14555406b3b9526272b2b3d26c35a150a8c15bd->enter($__internal_e24e09bc4c4bfc68f61245c1a14555406b3b9526272b2b3d26c35a150a8c15bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9316e6174e39e90d012fb4d17e3a704198f0e2381a8ca276133a113dcddcdbb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9316e6174e39e90d012fb4d17e3a704198f0e2381a8ca276133a113dcddcdbb9->enter($__internal_9316e6174e39e90d012fb4d17e3a704198f0e2381a8ca276133a113dcddcdbb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9316e6174e39e90d012fb4d17e3a704198f0e2381a8ca276133a113dcddcdbb9->leave($__internal_9316e6174e39e90d012fb4d17e3a704198f0e2381a8ca276133a113dcddcdbb9_prof);

        
        $__internal_e24e09bc4c4bfc68f61245c1a14555406b3b9526272b2b3d26c35a150a8c15bd->leave($__internal_e24e09bc4c4bfc68f61245c1a14555406b3b9526272b2b3d26c35a150a8c15bd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa64902f085ed076167b91586255c17b3c1e1ec400fc28dadd92dd2696e885cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa64902f085ed076167b91586255c17b3c1e1ec400fc28dadd92dd2696e885cb->enter($__internal_fa64902f085ed076167b91586255c17b3c1e1ec400fc28dadd92dd2696e885cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf6dd1825ffa7afbb09d72047e5c5b9f6799ff0a6a33e63cee578dbf20a7fbad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf6dd1825ffa7afbb09d72047e5c5b9f6799ff0a6a33e63cee578dbf20a7fbad->enter($__internal_cf6dd1825ffa7afbb09d72047e5c5b9f6799ff0a6a33e63cee578dbf20a7fbad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cf6dd1825ffa7afbb09d72047e5c5b9f6799ff0a6a33e63cee578dbf20a7fbad->leave($__internal_cf6dd1825ffa7afbb09d72047e5c5b9f6799ff0a6a33e63cee578dbf20a7fbad_prof);

        
        $__internal_fa64902f085ed076167b91586255c17b3c1e1ec400fc28dadd92dd2696e885cb->leave($__internal_fa64902f085ed076167b91586255c17b3c1e1ec400fc28dadd92dd2696e885cb_prof);

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
