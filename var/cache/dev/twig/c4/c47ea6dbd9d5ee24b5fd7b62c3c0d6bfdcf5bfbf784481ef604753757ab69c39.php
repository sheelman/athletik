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
        $__internal_d6266137d5c91e32b5b7ef7436f44487ce920d25c52dd43b62c74e4690ba3d22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6266137d5c91e32b5b7ef7436f44487ce920d25c52dd43b62c74e4690ba3d22->enter($__internal_d6266137d5c91e32b5b7ef7436f44487ce920d25c52dd43b62c74e4690ba3d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_a5050af9ea00091886c89d7f00d35c1461138422c553108d9d6b2ad0b571618d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5050af9ea00091886c89d7f00d35c1461138422c553108d9d6b2ad0b571618d->enter($__internal_a5050af9ea00091886c89d7f00d35c1461138422c553108d9d6b2ad0b571618d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6266137d5c91e32b5b7ef7436f44487ce920d25c52dd43b62c74e4690ba3d22->leave($__internal_d6266137d5c91e32b5b7ef7436f44487ce920d25c52dd43b62c74e4690ba3d22_prof);

        
        $__internal_a5050af9ea00091886c89d7f00d35c1461138422c553108d9d6b2ad0b571618d->leave($__internal_a5050af9ea00091886c89d7f00d35c1461138422c553108d9d6b2ad0b571618d_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_5aeaef4604f0c20ff826a0ea6307b509aab43a5829c23b807683841ba9f76448 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aeaef4604f0c20ff826a0ea6307b509aab43a5829c23b807683841ba9f76448->enter($__internal_5aeaef4604f0c20ff826a0ea6307b509aab43a5829c23b807683841ba9f76448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_d1dfb62ce9fa06d3184f59a8b4fb6fb8ae80fbea56a4f8777d51e97e4f489ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1dfb62ce9fa06d3184f59a8b4fb6fb8ae80fbea56a4f8777d51e97e4f489ccb->enter($__internal_d1dfb62ce9fa06d3184f59a8b4fb6fb8ae80fbea56a4f8777d51e97e4f489ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_d1dfb62ce9fa06d3184f59a8b4fb6fb8ae80fbea56a4f8777d51e97e4f489ccb->leave($__internal_d1dfb62ce9fa06d3184f59a8b4fb6fb8ae80fbea56a4f8777d51e97e4f489ccb_prof);

        
        $__internal_5aeaef4604f0c20ff826a0ea6307b509aab43a5829c23b807683841ba9f76448->leave($__internal_5aeaef4604f0c20ff826a0ea6307b509aab43a5829c23b807683841ba9f76448_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_424b8c1afb0752f24fc97f977f0c27c778384e39ae23ea053ffebdd3877a7f81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_424b8c1afb0752f24fc97f977f0c27c778384e39ae23ea053ffebdd3877a7f81->enter($__internal_424b8c1afb0752f24fc97f977f0c27c778384e39ae23ea053ffebdd3877a7f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_09fb91d6f913c344c25b72d4904174bc5d7351b50a3fb3806ff529580bdb062d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09fb91d6f913c344c25b72d4904174bc5d7351b50a3fb3806ff529580bdb062d->enter($__internal_09fb91d6f913c344c25b72d4904174bc5d7351b50a3fb3806ff529580bdb062d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_09fb91d6f913c344c25b72d4904174bc5d7351b50a3fb3806ff529580bdb062d->leave($__internal_09fb91d6f913c344c25b72d4904174bc5d7351b50a3fb3806ff529580bdb062d_prof);

        
        $__internal_424b8c1afb0752f24fc97f977f0c27c778384e39ae23ea053ffebdd3877a7f81->leave($__internal_424b8c1afb0752f24fc97f977f0c27c778384e39ae23ea053ffebdd3877a7f81_prof);

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
