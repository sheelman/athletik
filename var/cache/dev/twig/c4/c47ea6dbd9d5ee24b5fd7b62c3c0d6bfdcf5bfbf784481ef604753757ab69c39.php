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
        $__internal_812ec505f45e539a784cc04c988d0aae69c7064e5073bb6d464c204476dcf827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_812ec505f45e539a784cc04c988d0aae69c7064e5073bb6d464c204476dcf827->enter($__internal_812ec505f45e539a784cc04c988d0aae69c7064e5073bb6d464c204476dcf827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_32d3c7a2cec13a7006074a21d411964acc3618a07e64117d0d4578f70b39d354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32d3c7a2cec13a7006074a21d411964acc3618a07e64117d0d4578f70b39d354->enter($__internal_32d3c7a2cec13a7006074a21d411964acc3618a07e64117d0d4578f70b39d354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_812ec505f45e539a784cc04c988d0aae69c7064e5073bb6d464c204476dcf827->leave($__internal_812ec505f45e539a784cc04c988d0aae69c7064e5073bb6d464c204476dcf827_prof);

        
        $__internal_32d3c7a2cec13a7006074a21d411964acc3618a07e64117d0d4578f70b39d354->leave($__internal_32d3c7a2cec13a7006074a21d411964acc3618a07e64117d0d4578f70b39d354_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_9ade5c06fb9afaaaecbad5ef97c05d21a3cc75e17d2efeb2debab07ad1b77e42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ade5c06fb9afaaaecbad5ef97c05d21a3cc75e17d2efeb2debab07ad1b77e42->enter($__internal_9ade5c06fb9afaaaecbad5ef97c05d21a3cc75e17d2efeb2debab07ad1b77e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_b47ccde477bd327c165ed27ffb76716252345b316403c6b1ce488ebf500e8205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b47ccde477bd327c165ed27ffb76716252345b316403c6b1ce488ebf500e8205->enter($__internal_b47ccde477bd327c165ed27ffb76716252345b316403c6b1ce488ebf500e8205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_b47ccde477bd327c165ed27ffb76716252345b316403c6b1ce488ebf500e8205->leave($__internal_b47ccde477bd327c165ed27ffb76716252345b316403c6b1ce488ebf500e8205_prof);

        
        $__internal_9ade5c06fb9afaaaecbad5ef97c05d21a3cc75e17d2efeb2debab07ad1b77e42->leave($__internal_9ade5c06fb9afaaaecbad5ef97c05d21a3cc75e17d2efeb2debab07ad1b77e42_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d3629f06ceac72b4d473a014ecda1443108cd7ca0982bfdef8bc77e564d90523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3629f06ceac72b4d473a014ecda1443108cd7ca0982bfdef8bc77e564d90523->enter($__internal_d3629f06ceac72b4d473a014ecda1443108cd7ca0982bfdef8bc77e564d90523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_394db4f632f18320d6088ecb99f07dda256ddabeb437aecc26e778a5ecc66ab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_394db4f632f18320d6088ecb99f07dda256ddabeb437aecc26e778a5ecc66ab1->enter($__internal_394db4f632f18320d6088ecb99f07dda256ddabeb437aecc26e778a5ecc66ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_394db4f632f18320d6088ecb99f07dda256ddabeb437aecc26e778a5ecc66ab1->leave($__internal_394db4f632f18320d6088ecb99f07dda256ddabeb437aecc26e778a5ecc66ab1_prof);

        
        $__internal_d3629f06ceac72b4d473a014ecda1443108cd7ca0982bfdef8bc77e564d90523->leave($__internal_d3629f06ceac72b4d473a014ecda1443108cd7ca0982bfdef8bc77e564d90523_prof);

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
