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
        $__internal_b70a988bf1b0a82e6a259a8c57e2e59319d0e34623c983b99bc89ed59d2bbcfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b70a988bf1b0a82e6a259a8c57e2e59319d0e34623c983b99bc89ed59d2bbcfb->enter($__internal_b70a988bf1b0a82e6a259a8c57e2e59319d0e34623c983b99bc89ed59d2bbcfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_3cf34a7b2162780dc8fc77f8e0ef7429321a4f716b53d986e1fb0fce8e3c983b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf34a7b2162780dc8fc77f8e0ef7429321a4f716b53d986e1fb0fce8e3c983b->enter($__internal_3cf34a7b2162780dc8fc77f8e0ef7429321a4f716b53d986e1fb0fce8e3c983b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b70a988bf1b0a82e6a259a8c57e2e59319d0e34623c983b99bc89ed59d2bbcfb->leave($__internal_b70a988bf1b0a82e6a259a8c57e2e59319d0e34623c983b99bc89ed59d2bbcfb_prof);

        
        $__internal_3cf34a7b2162780dc8fc77f8e0ef7429321a4f716b53d986e1fb0fce8e3c983b->leave($__internal_3cf34a7b2162780dc8fc77f8e0ef7429321a4f716b53d986e1fb0fce8e3c983b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7f8e97c73c2eb7b67e0090a050b4cc468dbe423d65be8a1ede7cf25c3f6aa852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f8e97c73c2eb7b67e0090a050b4cc468dbe423d65be8a1ede7cf25c3f6aa852->enter($__internal_7f8e97c73c2eb7b67e0090a050b4cc468dbe423d65be8a1ede7cf25c3f6aa852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_de45e2380807b05784712a36c3e889ba040d0146e9db87d8bcb4396f5b9b993d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de45e2380807b05784712a36c3e889ba040d0146e9db87d8bcb4396f5b9b993d->enter($__internal_de45e2380807b05784712a36c3e889ba040d0146e9db87d8bcb4396f5b9b993d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_de45e2380807b05784712a36c3e889ba040d0146e9db87d8bcb4396f5b9b993d->leave($__internal_de45e2380807b05784712a36c3e889ba040d0146e9db87d8bcb4396f5b9b993d_prof);

        
        $__internal_7f8e97c73c2eb7b67e0090a050b4cc468dbe423d65be8a1ede7cf25c3f6aa852->leave($__internal_7f8e97c73c2eb7b67e0090a050b4cc468dbe423d65be8a1ede7cf25c3f6aa852_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_22131a17d80a3d9b9d3a34e3c537b5d6efa890003643070ea1095ce5d99ab740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22131a17d80a3d9b9d3a34e3c537b5d6efa890003643070ea1095ce5d99ab740->enter($__internal_22131a17d80a3d9b9d3a34e3c537b5d6efa890003643070ea1095ce5d99ab740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f73991d8e8b2358e0ec5f643fb84e03763c1152193b7f3941c0ecc0a68abb8b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f73991d8e8b2358e0ec5f643fb84e03763c1152193b7f3941c0ecc0a68abb8b9->enter($__internal_f73991d8e8b2358e0ec5f643fb84e03763c1152193b7f3941c0ecc0a68abb8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f73991d8e8b2358e0ec5f643fb84e03763c1152193b7f3941c0ecc0a68abb8b9->leave($__internal_f73991d8e8b2358e0ec5f643fb84e03763c1152193b7f3941c0ecc0a68abb8b9_prof);

        
        $__internal_22131a17d80a3d9b9d3a34e3c537b5d6efa890003643070ea1095ce5d99ab740->leave($__internal_22131a17d80a3d9b9d3a34e3c537b5d6efa890003643070ea1095ce5d99ab740_prof);

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
