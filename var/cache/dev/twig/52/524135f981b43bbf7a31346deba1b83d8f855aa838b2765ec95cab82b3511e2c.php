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
        $__internal_986771856ba7258737852423d96d05731b72421faa857423b8b36d7025330644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_986771856ba7258737852423d96d05731b72421faa857423b8b36d7025330644->enter($__internal_986771856ba7258737852423d96d05731b72421faa857423b8b36d7025330644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_de09cab5f2d02e530734a517b333036afdb3aa073e6a4729da2ebec66ec6080c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de09cab5f2d02e530734a517b333036afdb3aa073e6a4729da2ebec66ec6080c->enter($__internal_de09cab5f2d02e530734a517b333036afdb3aa073e6a4729da2ebec66ec6080c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_986771856ba7258737852423d96d05731b72421faa857423b8b36d7025330644->leave($__internal_986771856ba7258737852423d96d05731b72421faa857423b8b36d7025330644_prof);

        
        $__internal_de09cab5f2d02e530734a517b333036afdb3aa073e6a4729da2ebec66ec6080c->leave($__internal_de09cab5f2d02e530734a517b333036afdb3aa073e6a4729da2ebec66ec6080c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2606f60d3fe6a14a835d99d6d26589d4c6b03c29b0faf9a8058c6fe0d7a75e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2606f60d3fe6a14a835d99d6d26589d4c6b03c29b0faf9a8058c6fe0d7a75e61->enter($__internal_2606f60d3fe6a14a835d99d6d26589d4c6b03c29b0faf9a8058c6fe0d7a75e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fb531c58d7197670fd01c1db9e6d52f60ba3abd0bf0147da306c683cbb1e9a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb531c58d7197670fd01c1db9e6d52f60ba3abd0bf0147da306c683cbb1e9a8d->enter($__internal_fb531c58d7197670fd01c1db9e6d52f60ba3abd0bf0147da306c683cbb1e9a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fb531c58d7197670fd01c1db9e6d52f60ba3abd0bf0147da306c683cbb1e9a8d->leave($__internal_fb531c58d7197670fd01c1db9e6d52f60ba3abd0bf0147da306c683cbb1e9a8d_prof);

        
        $__internal_2606f60d3fe6a14a835d99d6d26589d4c6b03c29b0faf9a8058c6fe0d7a75e61->leave($__internal_2606f60d3fe6a14a835d99d6d26589d4c6b03c29b0faf9a8058c6fe0d7a75e61_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0782ceb8409f7142df465e3e028e6f9db7593275d85db6791ab714fcc1ea24b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0782ceb8409f7142df465e3e028e6f9db7593275d85db6791ab714fcc1ea24b->enter($__internal_e0782ceb8409f7142df465e3e028e6f9db7593275d85db6791ab714fcc1ea24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0017aa8537b3bbe3b13bab03bea338351dac5b1de717673d0d70beed977d9c71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0017aa8537b3bbe3b13bab03bea338351dac5b1de717673d0d70beed977d9c71->enter($__internal_0017aa8537b3bbe3b13bab03bea338351dac5b1de717673d0d70beed977d9c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0017aa8537b3bbe3b13bab03bea338351dac5b1de717673d0d70beed977d9c71->leave($__internal_0017aa8537b3bbe3b13bab03bea338351dac5b1de717673d0d70beed977d9c71_prof);

        
        $__internal_e0782ceb8409f7142df465e3e028e6f9db7593275d85db6791ab714fcc1ea24b->leave($__internal_e0782ceb8409f7142df465e3e028e6f9db7593275d85db6791ab714fcc1ea24b_prof);

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
