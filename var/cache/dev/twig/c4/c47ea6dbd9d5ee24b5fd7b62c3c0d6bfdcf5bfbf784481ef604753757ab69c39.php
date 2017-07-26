<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_ddbd517106433870c1648854a6afeadd58b2cc4e2a3d776bd94ad89ca1cd9b46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_791cc64bd1af2d78dc9225c0a2407c99076f03a43068bfe8e301e2ef4c52c937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_791cc64bd1af2d78dc9225c0a2407c99076f03a43068bfe8e301e2ef4c52c937->enter($__internal_791cc64bd1af2d78dc9225c0a2407c99076f03a43068bfe8e301e2ef4c52c937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_60bed07a6e42ca539aba1597df993f671d61ee0896411d1521daf8b5058c7519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60bed07a6e42ca539aba1597df993f671d61ee0896411d1521daf8b5058c7519->enter($__internal_60bed07a6e42ca539aba1597df993f671d61ee0896411d1521daf8b5058c7519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_791cc64bd1af2d78dc9225c0a2407c99076f03a43068bfe8e301e2ef4c52c937->leave($__internal_791cc64bd1af2d78dc9225c0a2407c99076f03a43068bfe8e301e2ef4c52c937_prof);

        
        $__internal_60bed07a6e42ca539aba1597df993f671d61ee0896411d1521daf8b5058c7519->leave($__internal_60bed07a6e42ca539aba1597df993f671d61ee0896411d1521daf8b5058c7519_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_c3d8213244a87d58ba575b2739273181f98e5b163c2af9359d99cfbc9b0ee755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3d8213244a87d58ba575b2739273181f98e5b163c2af9359d99cfbc9b0ee755->enter($__internal_c3d8213244a87d58ba575b2739273181f98e5b163c2af9359d99cfbc9b0ee755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_1f74ecf051705a58d746779354c5b182cb8d5eb4161d91f43b6a44525270bbe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f74ecf051705a58d746779354c5b182cb8d5eb4161d91f43b6a44525270bbe0->enter($__internal_1f74ecf051705a58d746779354c5b182cb8d5eb4161d91f43b6a44525270bbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_1f74ecf051705a58d746779354c5b182cb8d5eb4161d91f43b6a44525270bbe0->leave($__internal_1f74ecf051705a58d746779354c5b182cb8d5eb4161d91f43b6a44525270bbe0_prof);

        
        $__internal_c3d8213244a87d58ba575b2739273181f98e5b163c2af9359d99cfbc9b0ee755->leave($__internal_c3d8213244a87d58ba575b2739273181f98e5b163c2af9359d99cfbc9b0ee755_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9d2dc90f9d75ccc460a734b63f7d63e3bae5f9a146b3eb505fad25c8a6655f50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d2dc90f9d75ccc460a734b63f7d63e3bae5f9a146b3eb505fad25c8a6655f50->enter($__internal_9d2dc90f9d75ccc460a734b63f7d63e3bae5f9a146b3eb505fad25c8a6655f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_01a86597bcad44d570deeecc83681636dd3f7f63b1841860c8e2e798b27d7200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01a86597bcad44d570deeecc83681636dd3f7f63b1841860c8e2e798b27d7200->enter($__internal_01a86597bcad44d570deeecc83681636dd3f7f63b1841860c8e2e798b27d7200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_01a86597bcad44d570deeecc83681636dd3f7f63b1841860c8e2e798b27d7200->leave($__internal_01a86597bcad44d570deeecc83681636dd3f7f63b1841860c8e2e798b27d7200_prof);

        
        $__internal_9d2dc90f9d75ccc460a734b63f7d63e3bae5f9a146b3eb505fad25c8a6655f50->leave($__internal_9d2dc90f9d75ccc460a734b63f7d63e3bae5f9a146b3eb505fad25c8a6655f50_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
