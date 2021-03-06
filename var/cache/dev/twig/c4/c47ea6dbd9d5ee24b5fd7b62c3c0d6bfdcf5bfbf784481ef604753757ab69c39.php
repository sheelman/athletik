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
        $__internal_7b3ed91b4bd453199e51062e97d4149d957d10f25683c552b8a61e4c661be303 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b3ed91b4bd453199e51062e97d4149d957d10f25683c552b8a61e4c661be303->enter($__internal_7b3ed91b4bd453199e51062e97d4149d957d10f25683c552b8a61e4c661be303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_298f21a0abb63f768d65d0d4c6593f50e8833398145561bb6cee44ddb3a22ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_298f21a0abb63f768d65d0d4c6593f50e8833398145561bb6cee44ddb3a22ae9->enter($__internal_298f21a0abb63f768d65d0d4c6593f50e8833398145561bb6cee44ddb3a22ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b3ed91b4bd453199e51062e97d4149d957d10f25683c552b8a61e4c661be303->leave($__internal_7b3ed91b4bd453199e51062e97d4149d957d10f25683c552b8a61e4c661be303_prof);

        
        $__internal_298f21a0abb63f768d65d0d4c6593f50e8833398145561bb6cee44ddb3a22ae9->leave($__internal_298f21a0abb63f768d65d0d4c6593f50e8833398145561bb6cee44ddb3a22ae9_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_ad592a25f0d5fcdb63db91fa0aee8ce9e7a4884ba2696e59d23bbd84bb7e6dce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad592a25f0d5fcdb63db91fa0aee8ce9e7a4884ba2696e59d23bbd84bb7e6dce->enter($__internal_ad592a25f0d5fcdb63db91fa0aee8ce9e7a4884ba2696e59d23bbd84bb7e6dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_51a2c716445f0af860b6b295d909d886cebd755c39cb7944b65a2a24565b4d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a2c716445f0af860b6b295d909d886cebd755c39cb7944b65a2a24565b4d95->enter($__internal_51a2c716445f0af860b6b295d909d886cebd755c39cb7944b65a2a24565b4d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_51a2c716445f0af860b6b295d909d886cebd755c39cb7944b65a2a24565b4d95->leave($__internal_51a2c716445f0af860b6b295d909d886cebd755c39cb7944b65a2a24565b4d95_prof);

        
        $__internal_ad592a25f0d5fcdb63db91fa0aee8ce9e7a4884ba2696e59d23bbd84bb7e6dce->leave($__internal_ad592a25f0d5fcdb63db91fa0aee8ce9e7a4884ba2696e59d23bbd84bb7e6dce_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9fad9bed397394f6f7a4b79e5506a9f8e4d89270efe4eaa4ef0b4b1b7d329fda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fad9bed397394f6f7a4b79e5506a9f8e4d89270efe4eaa4ef0b4b1b7d329fda->enter($__internal_9fad9bed397394f6f7a4b79e5506a9f8e4d89270efe4eaa4ef0b4b1b7d329fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9c733815e16c3e26dd3a7ebb62ebc29a967a99f55f75d45ac3de232da3c3aad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c733815e16c3e26dd3a7ebb62ebc29a967a99f55f75d45ac3de232da3c3aad2->enter($__internal_9c733815e16c3e26dd3a7ebb62ebc29a967a99f55f75d45ac3de232da3c3aad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_9c733815e16c3e26dd3a7ebb62ebc29a967a99f55f75d45ac3de232da3c3aad2->leave($__internal_9c733815e16c3e26dd3a7ebb62ebc29a967a99f55f75d45ac3de232da3c3aad2_prof);

        
        $__internal_9fad9bed397394f6f7a4b79e5506a9f8e4d89270efe4eaa4ef0b4b1b7d329fda->leave($__internal_9fad9bed397394f6f7a4b79e5506a9f8e4d89270efe4eaa4ef0b4b1b7d329fda_prof);

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
