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
        $__internal_fef95430ac980a9fd7f625c68968a3109adbd33d5ba648f2f0f31ee0cb8d9b37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fef95430ac980a9fd7f625c68968a3109adbd33d5ba648f2f0f31ee0cb8d9b37->enter($__internal_fef95430ac980a9fd7f625c68968a3109adbd33d5ba648f2f0f31ee0cb8d9b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_41a630880b7fce4669bcfc74f74b1696c0d2e3e9deb8e8ea24ab922c4d0115d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a630880b7fce4669bcfc74f74b1696c0d2e3e9deb8e8ea24ab922c4d0115d3->enter($__internal_41a630880b7fce4669bcfc74f74b1696c0d2e3e9deb8e8ea24ab922c4d0115d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fef95430ac980a9fd7f625c68968a3109adbd33d5ba648f2f0f31ee0cb8d9b37->leave($__internal_fef95430ac980a9fd7f625c68968a3109adbd33d5ba648f2f0f31ee0cb8d9b37_prof);

        
        $__internal_41a630880b7fce4669bcfc74f74b1696c0d2e3e9deb8e8ea24ab922c4d0115d3->leave($__internal_41a630880b7fce4669bcfc74f74b1696c0d2e3e9deb8e8ea24ab922c4d0115d3_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_c9f3da479587e3e8f46ae1debb0d1584d89beaec0191630f97c8afdf2bf6db42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9f3da479587e3e8f46ae1debb0d1584d89beaec0191630f97c8afdf2bf6db42->enter($__internal_c9f3da479587e3e8f46ae1debb0d1584d89beaec0191630f97c8afdf2bf6db42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_c8263ecae72cf0673e4013cfa8d781a9fe48309e3a6fda0132b3f4f3f10bccc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8263ecae72cf0673e4013cfa8d781a9fe48309e3a6fda0132b3f4f3f10bccc5->enter($__internal_c8263ecae72cf0673e4013cfa8d781a9fe48309e3a6fda0132b3f4f3f10bccc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_c8263ecae72cf0673e4013cfa8d781a9fe48309e3a6fda0132b3f4f3f10bccc5->leave($__internal_c8263ecae72cf0673e4013cfa8d781a9fe48309e3a6fda0132b3f4f3f10bccc5_prof);

        
        $__internal_c9f3da479587e3e8f46ae1debb0d1584d89beaec0191630f97c8afdf2bf6db42->leave($__internal_c9f3da479587e3e8f46ae1debb0d1584d89beaec0191630f97c8afdf2bf6db42_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_85d05361c327fe219752eba5a3ac80616ff5f5f88af99aad19a845a52a4ec790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85d05361c327fe219752eba5a3ac80616ff5f5f88af99aad19a845a52a4ec790->enter($__internal_85d05361c327fe219752eba5a3ac80616ff5f5f88af99aad19a845a52a4ec790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ac6ac4beab3076b5ed0c0bcbec27f42200f8e93dd952435eaf61b6b938631fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac6ac4beab3076b5ed0c0bcbec27f42200f8e93dd952435eaf61b6b938631fa4->enter($__internal_ac6ac4beab3076b5ed0c0bcbec27f42200f8e93dd952435eaf61b6b938631fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_ac6ac4beab3076b5ed0c0bcbec27f42200f8e93dd952435eaf61b6b938631fa4->leave($__internal_ac6ac4beab3076b5ed0c0bcbec27f42200f8e93dd952435eaf61b6b938631fa4_prof);

        
        $__internal_85d05361c327fe219752eba5a3ac80616ff5f5f88af99aad19a845a52a4ec790->leave($__internal_85d05361c327fe219752eba5a3ac80616ff5f5f88af99aad19a845a52a4ec790_prof);

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
