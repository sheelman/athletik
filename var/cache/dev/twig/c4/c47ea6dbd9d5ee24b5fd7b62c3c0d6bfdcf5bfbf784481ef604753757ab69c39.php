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
        $__internal_526390d38acba9d2202842ca4b6157fb0ea1530ed7331842f110fe0f848db5e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_526390d38acba9d2202842ca4b6157fb0ea1530ed7331842f110fe0f848db5e9->enter($__internal_526390d38acba9d2202842ca4b6157fb0ea1530ed7331842f110fe0f848db5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_984b73aac4b75a5393964774212817ece53fd1e0127d4c77be3ffa4fbad24a80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_984b73aac4b75a5393964774212817ece53fd1e0127d4c77be3ffa4fbad24a80->enter($__internal_984b73aac4b75a5393964774212817ece53fd1e0127d4c77be3ffa4fbad24a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_526390d38acba9d2202842ca4b6157fb0ea1530ed7331842f110fe0f848db5e9->leave($__internal_526390d38acba9d2202842ca4b6157fb0ea1530ed7331842f110fe0f848db5e9_prof);

        
        $__internal_984b73aac4b75a5393964774212817ece53fd1e0127d4c77be3ffa4fbad24a80->leave($__internal_984b73aac4b75a5393964774212817ece53fd1e0127d4c77be3ffa4fbad24a80_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_a0af725e6299de07f3ab494b6320ad4bd38939f6f2c9bf85d55d31fb2bf49956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0af725e6299de07f3ab494b6320ad4bd38939f6f2c9bf85d55d31fb2bf49956->enter($__internal_a0af725e6299de07f3ab494b6320ad4bd38939f6f2c9bf85d55d31fb2bf49956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_5eba3f345881ba05f372ba6f6c8afd08a5f6104b69f837e391760a2eb74f008f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eba3f345881ba05f372ba6f6c8afd08a5f6104b69f837e391760a2eb74f008f->enter($__internal_5eba3f345881ba05f372ba6f6c8afd08a5f6104b69f837e391760a2eb74f008f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_5eba3f345881ba05f372ba6f6c8afd08a5f6104b69f837e391760a2eb74f008f->leave($__internal_5eba3f345881ba05f372ba6f6c8afd08a5f6104b69f837e391760a2eb74f008f_prof);

        
        $__internal_a0af725e6299de07f3ab494b6320ad4bd38939f6f2c9bf85d55d31fb2bf49956->leave($__internal_a0af725e6299de07f3ab494b6320ad4bd38939f6f2c9bf85d55d31fb2bf49956_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d364d7ef6ce1ef94e06b6331efa6889e4bcdf3250459b567cb5a77b50132c9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d364d7ef6ce1ef94e06b6331efa6889e4bcdf3250459b567cb5a77b50132c9d->enter($__internal_8d364d7ef6ce1ef94e06b6331efa6889e4bcdf3250459b567cb5a77b50132c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_33597056ccbf23437c0587f0fa7db321209bd075d3f2e3d908757c72ef599979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33597056ccbf23437c0587f0fa7db321209bd075d3f2e3d908757c72ef599979->enter($__internal_33597056ccbf23437c0587f0fa7db321209bd075d3f2e3d908757c72ef599979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_33597056ccbf23437c0587f0fa7db321209bd075d3f2e3d908757c72ef599979->leave($__internal_33597056ccbf23437c0587f0fa7db321209bd075d3f2e3d908757c72ef599979_prof);

        
        $__internal_8d364d7ef6ce1ef94e06b6331efa6889e4bcdf3250459b567cb5a77b50132c9d->leave($__internal_8d364d7ef6ce1ef94e06b6331efa6889e4bcdf3250459b567cb5a77b50132c9d_prof);

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
