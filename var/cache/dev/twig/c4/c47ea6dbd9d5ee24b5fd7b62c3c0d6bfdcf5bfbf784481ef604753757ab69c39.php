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
        $__internal_9f27a5a31c02e6f8a4f68a57932de8b6a36b471af15184fd28176434c4c614a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f27a5a31c02e6f8a4f68a57932de8b6a36b471af15184fd28176434c4c614a7->enter($__internal_9f27a5a31c02e6f8a4f68a57932de8b6a36b471af15184fd28176434c4c614a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_0ee433e12aa00e996dec3baaee0236f9bc2f0ec36c7e819156831e094a89d0cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee433e12aa00e996dec3baaee0236f9bc2f0ec36c7e819156831e094a89d0cd->enter($__internal_0ee433e12aa00e996dec3baaee0236f9bc2f0ec36c7e819156831e094a89d0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f27a5a31c02e6f8a4f68a57932de8b6a36b471af15184fd28176434c4c614a7->leave($__internal_9f27a5a31c02e6f8a4f68a57932de8b6a36b471af15184fd28176434c4c614a7_prof);

        
        $__internal_0ee433e12aa00e996dec3baaee0236f9bc2f0ec36c7e819156831e094a89d0cd->leave($__internal_0ee433e12aa00e996dec3baaee0236f9bc2f0ec36c7e819156831e094a89d0cd_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_8d75ea4ab5ab934259119145520f17f8d6a6c8b19a755b64c8ec4532e7102476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d75ea4ab5ab934259119145520f17f8d6a6c8b19a755b64c8ec4532e7102476->enter($__internal_8d75ea4ab5ab934259119145520f17f8d6a6c8b19a755b64c8ec4532e7102476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_138c5705bcbfb1a3563196b54d482f550f65ad21e83987c8622143cf2f8a0119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_138c5705bcbfb1a3563196b54d482f550f65ad21e83987c8622143cf2f8a0119->enter($__internal_138c5705bcbfb1a3563196b54d482f550f65ad21e83987c8622143cf2f8a0119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_138c5705bcbfb1a3563196b54d482f550f65ad21e83987c8622143cf2f8a0119->leave($__internal_138c5705bcbfb1a3563196b54d482f550f65ad21e83987c8622143cf2f8a0119_prof);

        
        $__internal_8d75ea4ab5ab934259119145520f17f8d6a6c8b19a755b64c8ec4532e7102476->leave($__internal_8d75ea4ab5ab934259119145520f17f8d6a6c8b19a755b64c8ec4532e7102476_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_171b3168675e781abb5dfe37534fdf176db746ee7c1e91ddec3ad60644005cf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_171b3168675e781abb5dfe37534fdf176db746ee7c1e91ddec3ad60644005cf3->enter($__internal_171b3168675e781abb5dfe37534fdf176db746ee7c1e91ddec3ad60644005cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_46a8f0d06ab6b371ac99fa81b1fb02a39db0203a2441a8934cc25cf0295623e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46a8f0d06ab6b371ac99fa81b1fb02a39db0203a2441a8934cc25cf0295623e2->enter($__internal_46a8f0d06ab6b371ac99fa81b1fb02a39db0203a2441a8934cc25cf0295623e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_46a8f0d06ab6b371ac99fa81b1fb02a39db0203a2441a8934cc25cf0295623e2->leave($__internal_46a8f0d06ab6b371ac99fa81b1fb02a39db0203a2441a8934cc25cf0295623e2_prof);

        
        $__internal_171b3168675e781abb5dfe37534fdf176db746ee7c1e91ddec3ad60644005cf3->leave($__internal_171b3168675e781abb5dfe37534fdf176db746ee7c1e91ddec3ad60644005cf3_prof);

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
