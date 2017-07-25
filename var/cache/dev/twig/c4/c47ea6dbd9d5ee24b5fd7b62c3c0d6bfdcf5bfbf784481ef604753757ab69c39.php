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
        $__internal_ce98e6bb1b02f0b457bb23ec0ed1dcae3f8d5898e321d7367aa2337c864514ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce98e6bb1b02f0b457bb23ec0ed1dcae3f8d5898e321d7367aa2337c864514ba->enter($__internal_ce98e6bb1b02f0b457bb23ec0ed1dcae3f8d5898e321d7367aa2337c864514ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_cb45d06e54c45c138705a2f6b27ea52a511c690b3f86aedf2a487b3b89dbc7e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb45d06e54c45c138705a2f6b27ea52a511c690b3f86aedf2a487b3b89dbc7e7->enter($__internal_cb45d06e54c45c138705a2f6b27ea52a511c690b3f86aedf2a487b3b89dbc7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce98e6bb1b02f0b457bb23ec0ed1dcae3f8d5898e321d7367aa2337c864514ba->leave($__internal_ce98e6bb1b02f0b457bb23ec0ed1dcae3f8d5898e321d7367aa2337c864514ba_prof);

        
        $__internal_cb45d06e54c45c138705a2f6b27ea52a511c690b3f86aedf2a487b3b89dbc7e7->leave($__internal_cb45d06e54c45c138705a2f6b27ea52a511c690b3f86aedf2a487b3b89dbc7e7_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_519d8c4e18cfbab490b0501159c62f37d08c701b0df5258bfa396a9acc674e06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_519d8c4e18cfbab490b0501159c62f37d08c701b0df5258bfa396a9acc674e06->enter($__internal_519d8c4e18cfbab490b0501159c62f37d08c701b0df5258bfa396a9acc674e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_b15ef85860a2c2eea1d1295fba3acb9fd23be81c674417ff58d9cf424d8f3a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b15ef85860a2c2eea1d1295fba3acb9fd23be81c674417ff58d9cf424d8f3a88->enter($__internal_b15ef85860a2c2eea1d1295fba3acb9fd23be81c674417ff58d9cf424d8f3a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_b15ef85860a2c2eea1d1295fba3acb9fd23be81c674417ff58d9cf424d8f3a88->leave($__internal_b15ef85860a2c2eea1d1295fba3acb9fd23be81c674417ff58d9cf424d8f3a88_prof);

        
        $__internal_519d8c4e18cfbab490b0501159c62f37d08c701b0df5258bfa396a9acc674e06->leave($__internal_519d8c4e18cfbab490b0501159c62f37d08c701b0df5258bfa396a9acc674e06_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_02ede17b6cfb793691637c449f0551383640d91b3ad5127a0c61b6ef4e9305dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ede17b6cfb793691637c449f0551383640d91b3ad5127a0c61b6ef4e9305dd->enter($__internal_02ede17b6cfb793691637c449f0551383640d91b3ad5127a0c61b6ef4e9305dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4f2ebd5bc579a157ab39305440013a0f6685569555a2d974ad0344d20d3ed07d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f2ebd5bc579a157ab39305440013a0f6685569555a2d974ad0344d20d3ed07d->enter($__internal_4f2ebd5bc579a157ab39305440013a0f6685569555a2d974ad0344d20d3ed07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_4f2ebd5bc579a157ab39305440013a0f6685569555a2d974ad0344d20d3ed07d->leave($__internal_4f2ebd5bc579a157ab39305440013a0f6685569555a2d974ad0344d20d3ed07d_prof);

        
        $__internal_02ede17b6cfb793691637c449f0551383640d91b3ad5127a0c61b6ef4e9305dd->leave($__internal_02ede17b6cfb793691637c449f0551383640d91b3ad5127a0c61b6ef4e9305dd_prof);

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
