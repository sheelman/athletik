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
        $__internal_c9d16c117b6bcad7e4b98e6c07339a627768c921a9148e74af52dd6a2546581a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9d16c117b6bcad7e4b98e6c07339a627768c921a9148e74af52dd6a2546581a->enter($__internal_c9d16c117b6bcad7e4b98e6c07339a627768c921a9148e74af52dd6a2546581a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_f74aeee7c97717d81ba27b5fd9dfefe0db4baf83b0b1539b82558b507e0fe9e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f74aeee7c97717d81ba27b5fd9dfefe0db4baf83b0b1539b82558b507e0fe9e0->enter($__internal_f74aeee7c97717d81ba27b5fd9dfefe0db4baf83b0b1539b82558b507e0fe9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9d16c117b6bcad7e4b98e6c07339a627768c921a9148e74af52dd6a2546581a->leave($__internal_c9d16c117b6bcad7e4b98e6c07339a627768c921a9148e74af52dd6a2546581a_prof);

        
        $__internal_f74aeee7c97717d81ba27b5fd9dfefe0db4baf83b0b1539b82558b507e0fe9e0->leave($__internal_f74aeee7c97717d81ba27b5fd9dfefe0db4baf83b0b1539b82558b507e0fe9e0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7eccc9dd0d6fa062cc4014cd9f687a14b255bdf08ea8abf05156f00e89b39728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eccc9dd0d6fa062cc4014cd9f687a14b255bdf08ea8abf05156f00e89b39728->enter($__internal_7eccc9dd0d6fa062cc4014cd9f687a14b255bdf08ea8abf05156f00e89b39728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ccefd102ef134af450d608aaa2e493bbef110c5c1b2e63e65163d20059868596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccefd102ef134af450d608aaa2e493bbef110c5c1b2e63e65163d20059868596->enter($__internal_ccefd102ef134af450d608aaa2e493bbef110c5c1b2e63e65163d20059868596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ccefd102ef134af450d608aaa2e493bbef110c5c1b2e63e65163d20059868596->leave($__internal_ccefd102ef134af450d608aaa2e493bbef110c5c1b2e63e65163d20059868596_prof);

        
        $__internal_7eccc9dd0d6fa062cc4014cd9f687a14b255bdf08ea8abf05156f00e89b39728->leave($__internal_7eccc9dd0d6fa062cc4014cd9f687a14b255bdf08ea8abf05156f00e89b39728_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_52221cff8ddf627c43d4e365535a712d0dd6389b62c82d535d812c534fc45eb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52221cff8ddf627c43d4e365535a712d0dd6389b62c82d535d812c534fc45eb4->enter($__internal_52221cff8ddf627c43d4e365535a712d0dd6389b62c82d535d812c534fc45eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_77a08f27d71411fa30691d29673d8f53f683491eb0e15716846fe93aa5e0c5d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a08f27d71411fa30691d29673d8f53f683491eb0e15716846fe93aa5e0c5d2->enter($__internal_77a08f27d71411fa30691d29673d8f53f683491eb0e15716846fe93aa5e0c5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_77a08f27d71411fa30691d29673d8f53f683491eb0e15716846fe93aa5e0c5d2->leave($__internal_77a08f27d71411fa30691d29673d8f53f683491eb0e15716846fe93aa5e0c5d2_prof);

        
        $__internal_52221cff8ddf627c43d4e365535a712d0dd6389b62c82d535d812c534fc45eb4->leave($__internal_52221cff8ddf627c43d4e365535a712d0dd6389b62c82d535d812c534fc45eb4_prof);

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
