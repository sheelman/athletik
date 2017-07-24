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
        $__internal_a652ab3cb34fd2902c9a402bee5ba26cd718483db64143019732640ee3346ae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a652ab3cb34fd2902c9a402bee5ba26cd718483db64143019732640ee3346ae2->enter($__internal_a652ab3cb34fd2902c9a402bee5ba26cd718483db64143019732640ee3346ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_ad228009419595f3f6a4dab18acc9c16878118b97407841647ece7c220282a56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad228009419595f3f6a4dab18acc9c16878118b97407841647ece7c220282a56->enter($__internal_ad228009419595f3f6a4dab18acc9c16878118b97407841647ece7c220282a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a652ab3cb34fd2902c9a402bee5ba26cd718483db64143019732640ee3346ae2->leave($__internal_a652ab3cb34fd2902c9a402bee5ba26cd718483db64143019732640ee3346ae2_prof);

        
        $__internal_ad228009419595f3f6a4dab18acc9c16878118b97407841647ece7c220282a56->leave($__internal_ad228009419595f3f6a4dab18acc9c16878118b97407841647ece7c220282a56_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_17795e174b24c5074c5b33372902411c15b6f10350398607b6abcf73d5692693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17795e174b24c5074c5b33372902411c15b6f10350398607b6abcf73d5692693->enter($__internal_17795e174b24c5074c5b33372902411c15b6f10350398607b6abcf73d5692693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_d687f94252ebaf2d25b69fe9c2d98e01ea750a8d9d60128a6dfdc60ba9005fd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d687f94252ebaf2d25b69fe9c2d98e01ea750a8d9d60128a6dfdc60ba9005fd8->enter($__internal_d687f94252ebaf2d25b69fe9c2d98e01ea750a8d9d60128a6dfdc60ba9005fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_d687f94252ebaf2d25b69fe9c2d98e01ea750a8d9d60128a6dfdc60ba9005fd8->leave($__internal_d687f94252ebaf2d25b69fe9c2d98e01ea750a8d9d60128a6dfdc60ba9005fd8_prof);

        
        $__internal_17795e174b24c5074c5b33372902411c15b6f10350398607b6abcf73d5692693->leave($__internal_17795e174b24c5074c5b33372902411c15b6f10350398607b6abcf73d5692693_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9c060d46d17708be5b6de06bfeab00b056dc8b87c11c247a12ef3b89e718ea3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c060d46d17708be5b6de06bfeab00b056dc8b87c11c247a12ef3b89e718ea3f->enter($__internal_9c060d46d17708be5b6de06bfeab00b056dc8b87c11c247a12ef3b89e718ea3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_624132a68721cc391299659bfe4426336668399382601bf6db3da2a41a882bb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_624132a68721cc391299659bfe4426336668399382601bf6db3da2a41a882bb0->enter($__internal_624132a68721cc391299659bfe4426336668399382601bf6db3da2a41a882bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_624132a68721cc391299659bfe4426336668399382601bf6db3da2a41a882bb0->leave($__internal_624132a68721cc391299659bfe4426336668399382601bf6db3da2a41a882bb0_prof);

        
        $__internal_9c060d46d17708be5b6de06bfeab00b056dc8b87c11c247a12ef3b89e718ea3f->leave($__internal_9c060d46d17708be5b6de06bfeab00b056dc8b87c11c247a12ef3b89e718ea3f_prof);

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
