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
        $__internal_6ffbdeca2f02954658f93f480ec8eb02fd8fde981f0114ccd54dffd8b0997776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ffbdeca2f02954658f93f480ec8eb02fd8fde981f0114ccd54dffd8b0997776->enter($__internal_6ffbdeca2f02954658f93f480ec8eb02fd8fde981f0114ccd54dffd8b0997776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_f27c7a81867682d576c1ae7e902cbeb7548b2c24d61333ba15299c6e57027c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f27c7a81867682d576c1ae7e902cbeb7548b2c24d61333ba15299c6e57027c6e->enter($__internal_f27c7a81867682d576c1ae7e902cbeb7548b2c24d61333ba15299c6e57027c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ffbdeca2f02954658f93f480ec8eb02fd8fde981f0114ccd54dffd8b0997776->leave($__internal_6ffbdeca2f02954658f93f480ec8eb02fd8fde981f0114ccd54dffd8b0997776_prof);

        
        $__internal_f27c7a81867682d576c1ae7e902cbeb7548b2c24d61333ba15299c6e57027c6e->leave($__internal_f27c7a81867682d576c1ae7e902cbeb7548b2c24d61333ba15299c6e57027c6e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2121997ad2381621ada9e18eec0787e31a6be324cb11d0bd4cfd579c432aebd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2121997ad2381621ada9e18eec0787e31a6be324cb11d0bd4cfd579c432aebd2->enter($__internal_2121997ad2381621ada9e18eec0787e31a6be324cb11d0bd4cfd579c432aebd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a219faf530fd0aad4969bc26546dd56a22a160ce93ae8bf4476eee383feece89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a219faf530fd0aad4969bc26546dd56a22a160ce93ae8bf4476eee383feece89->enter($__internal_a219faf530fd0aad4969bc26546dd56a22a160ce93ae8bf4476eee383feece89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_a219faf530fd0aad4969bc26546dd56a22a160ce93ae8bf4476eee383feece89->leave($__internal_a219faf530fd0aad4969bc26546dd56a22a160ce93ae8bf4476eee383feece89_prof);

        
        $__internal_2121997ad2381621ada9e18eec0787e31a6be324cb11d0bd4cfd579c432aebd2->leave($__internal_2121997ad2381621ada9e18eec0787e31a6be324cb11d0bd4cfd579c432aebd2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8724ac10a1ff666b28b9a595055df65d8a6f6e3850da17d0582f40beddd9ffcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8724ac10a1ff666b28b9a595055df65d8a6f6e3850da17d0582f40beddd9ffcc->enter($__internal_8724ac10a1ff666b28b9a595055df65d8a6f6e3850da17d0582f40beddd9ffcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ccb68cf981bde85fcc99a71907cfb98260ac66844b3020de98a7b5ff67f0285d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccb68cf981bde85fcc99a71907cfb98260ac66844b3020de98a7b5ff67f0285d->enter($__internal_ccb68cf981bde85fcc99a71907cfb98260ac66844b3020de98a7b5ff67f0285d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ccb68cf981bde85fcc99a71907cfb98260ac66844b3020de98a7b5ff67f0285d->leave($__internal_ccb68cf981bde85fcc99a71907cfb98260ac66844b3020de98a7b5ff67f0285d_prof);

        
        $__internal_8724ac10a1ff666b28b9a595055df65d8a6f6e3850da17d0582f40beddd9ffcc->leave($__internal_8724ac10a1ff666b28b9a595055df65d8a6f6e3850da17d0582f40beddd9ffcc_prof);

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
