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
        $__internal_386287cf543b42d9831d115461e87c9a79a5fb9339f0c429e5abe703513d8dd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_386287cf543b42d9831d115461e87c9a79a5fb9339f0c429e5abe703513d8dd4->enter($__internal_386287cf543b42d9831d115461e87c9a79a5fb9339f0c429e5abe703513d8dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_7a4b029376b9cf7576896a65b7c0f89f96f9b93c2dac71dc689dc08df33d2e38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a4b029376b9cf7576896a65b7c0f89f96f9b93c2dac71dc689dc08df33d2e38->enter($__internal_7a4b029376b9cf7576896a65b7c0f89f96f9b93c2dac71dc689dc08df33d2e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_386287cf543b42d9831d115461e87c9a79a5fb9339f0c429e5abe703513d8dd4->leave($__internal_386287cf543b42d9831d115461e87c9a79a5fb9339f0c429e5abe703513d8dd4_prof);

        
        $__internal_7a4b029376b9cf7576896a65b7c0f89f96f9b93c2dac71dc689dc08df33d2e38->leave($__internal_7a4b029376b9cf7576896a65b7c0f89f96f9b93c2dac71dc689dc08df33d2e38_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_73bf090dae0348d02f2b836252f60bb8afca6ca8022bb39ee3ddc702650a1c48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73bf090dae0348d02f2b836252f60bb8afca6ca8022bb39ee3ddc702650a1c48->enter($__internal_73bf090dae0348d02f2b836252f60bb8afca6ca8022bb39ee3ddc702650a1c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e9f5e3a0de47d94957448a044b294c868703c4040d5bf7dad3d120f70b297a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9f5e3a0de47d94957448a044b294c868703c4040d5bf7dad3d120f70b297a49->enter($__internal_e9f5e3a0de47d94957448a044b294c868703c4040d5bf7dad3d120f70b297a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e9f5e3a0de47d94957448a044b294c868703c4040d5bf7dad3d120f70b297a49->leave($__internal_e9f5e3a0de47d94957448a044b294c868703c4040d5bf7dad3d120f70b297a49_prof);

        
        $__internal_73bf090dae0348d02f2b836252f60bb8afca6ca8022bb39ee3ddc702650a1c48->leave($__internal_73bf090dae0348d02f2b836252f60bb8afca6ca8022bb39ee3ddc702650a1c48_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_60f8af5acb2ce37cdef7a4b4d6ca9f03aae9b330e6cbda05a2cb285d5337b581 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60f8af5acb2ce37cdef7a4b4d6ca9f03aae9b330e6cbda05a2cb285d5337b581->enter($__internal_60f8af5acb2ce37cdef7a4b4d6ca9f03aae9b330e6cbda05a2cb285d5337b581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_30b8f71551f06d10ae8e619a40cda98392323498c2719c7cad806c1fe4d23832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b8f71551f06d10ae8e619a40cda98392323498c2719c7cad806c1fe4d23832->enter($__internal_30b8f71551f06d10ae8e619a40cda98392323498c2719c7cad806c1fe4d23832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_30b8f71551f06d10ae8e619a40cda98392323498c2719c7cad806c1fe4d23832->leave($__internal_30b8f71551f06d10ae8e619a40cda98392323498c2719c7cad806c1fe4d23832_prof);

        
        $__internal_60f8af5acb2ce37cdef7a4b4d6ca9f03aae9b330e6cbda05a2cb285d5337b581->leave($__internal_60f8af5acb2ce37cdef7a4b4d6ca9f03aae9b330e6cbda05a2cb285d5337b581_prof);

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
