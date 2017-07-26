<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c73a916adef90294612b3e613cdcdd32c28385911d292c192a5857bfa5acb0c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_562afa3d541d826dadd373bda418422d779ec8310b0a0bf2fda4cec1ac47e323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562afa3d541d826dadd373bda418422d779ec8310b0a0bf2fda4cec1ac47e323->enter($__internal_562afa3d541d826dadd373bda418422d779ec8310b0a0bf2fda4cec1ac47e323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_3579b800e58aaaab5f081a1a8a59f59a06ea0feeba790d5ff447cd92aa18467a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3579b800e58aaaab5f081a1a8a59f59a06ea0feeba790d5ff447cd92aa18467a->enter($__internal_3579b800e58aaaab5f081a1a8a59f59a06ea0feeba790d5ff447cd92aa18467a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_562afa3d541d826dadd373bda418422d779ec8310b0a0bf2fda4cec1ac47e323->leave($__internal_562afa3d541d826dadd373bda418422d779ec8310b0a0bf2fda4cec1ac47e323_prof);

        
        $__internal_3579b800e58aaaab5f081a1a8a59f59a06ea0feeba790d5ff447cd92aa18467a->leave($__internal_3579b800e58aaaab5f081a1a8a59f59a06ea0feeba790d5ff447cd92aa18467a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8cc55dbb691f02552f28fe214adf4336787b1927b0b352094ead88d6fa3accbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cc55dbb691f02552f28fe214adf4336787b1927b0b352094ead88d6fa3accbd->enter($__internal_8cc55dbb691f02552f28fe214adf4336787b1927b0b352094ead88d6fa3accbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c613a8eeab04b09bc7e593ab4336cd845abc45044efc305891d51b8888de779c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c613a8eeab04b09bc7e593ab4336cd845abc45044efc305891d51b8888de779c->enter($__internal_c613a8eeab04b09bc7e593ab4336cd845abc45044efc305891d51b8888de779c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c613a8eeab04b09bc7e593ab4336cd845abc45044efc305891d51b8888de779c->leave($__internal_c613a8eeab04b09bc7e593ab4336cd845abc45044efc305891d51b8888de779c_prof);

        
        $__internal_8cc55dbb691f02552f28fe214adf4336787b1927b0b352094ead88d6fa3accbd->leave($__internal_8cc55dbb691f02552f28fe214adf4336787b1927b0b352094ead88d6fa3accbd_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fb1ccc96b82336ab1a22af423c054799c8d2911bd49d28bf0f9e990bd33d2fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fb1ccc96b82336ab1a22af423c054799c8d2911bd49d28bf0f9e990bd33d2fb->enter($__internal_1fb1ccc96b82336ab1a22af423c054799c8d2911bd49d28bf0f9e990bd33d2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_719a4d1ad7fd91b9d759048d37919d4232b76a95f8e9a832ee605b5968f64cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_719a4d1ad7fd91b9d759048d37919d4232b76a95f8e9a832ee605b5968f64cf7->enter($__internal_719a4d1ad7fd91b9d759048d37919d4232b76a95f8e9a832ee605b5968f64cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_719a4d1ad7fd91b9d759048d37919d4232b76a95f8e9a832ee605b5968f64cf7->leave($__internal_719a4d1ad7fd91b9d759048d37919d4232b76a95f8e9a832ee605b5968f64cf7_prof);

        
        $__internal_1fb1ccc96b82336ab1a22af423c054799c8d2911bd49d28bf0f9e990bd33d2fb->leave($__internal_1fb1ccc96b82336ab1a22af423c054799c8d2911bd49d28bf0f9e990bd33d2fb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
