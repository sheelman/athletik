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
        $__internal_64358b3d8c2b5a9942dab0cf01ba4d82e6fcb0ed5075422558bcd9f36e8645f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64358b3d8c2b5a9942dab0cf01ba4d82e6fcb0ed5075422558bcd9f36e8645f2->enter($__internal_64358b3d8c2b5a9942dab0cf01ba4d82e6fcb0ed5075422558bcd9f36e8645f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_d8726bcd9baa3257f63ef27ef23f29a2401f78d7ef214b2fe41165c5c77020ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8726bcd9baa3257f63ef27ef23f29a2401f78d7ef214b2fe41165c5c77020ed->enter($__internal_d8726bcd9baa3257f63ef27ef23f29a2401f78d7ef214b2fe41165c5c77020ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64358b3d8c2b5a9942dab0cf01ba4d82e6fcb0ed5075422558bcd9f36e8645f2->leave($__internal_64358b3d8c2b5a9942dab0cf01ba4d82e6fcb0ed5075422558bcd9f36e8645f2_prof);

        
        $__internal_d8726bcd9baa3257f63ef27ef23f29a2401f78d7ef214b2fe41165c5c77020ed->leave($__internal_d8726bcd9baa3257f63ef27ef23f29a2401f78d7ef214b2fe41165c5c77020ed_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_a35ee35601e9c9d531faad9bcb33ec92081415aa876367f3d0d67b722428408c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a35ee35601e9c9d531faad9bcb33ec92081415aa876367f3d0d67b722428408c->enter($__internal_a35ee35601e9c9d531faad9bcb33ec92081415aa876367f3d0d67b722428408c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_34ee5e00acd431f1240c096c7de7da029f869b0dedf2b454422470490aa50c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34ee5e00acd431f1240c096c7de7da029f869b0dedf2b454422470490aa50c8b->enter($__internal_34ee5e00acd431f1240c096c7de7da029f869b0dedf2b454422470490aa50c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_34ee5e00acd431f1240c096c7de7da029f869b0dedf2b454422470490aa50c8b->leave($__internal_34ee5e00acd431f1240c096c7de7da029f869b0dedf2b454422470490aa50c8b_prof);

        
        $__internal_a35ee35601e9c9d531faad9bcb33ec92081415aa876367f3d0d67b722428408c->leave($__internal_a35ee35601e9c9d531faad9bcb33ec92081415aa876367f3d0d67b722428408c_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b39f84663c825a71c5df49f2b186239be60d6ef87e2bcdd1f753f4fa8d43dc4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b39f84663c825a71c5df49f2b186239be60d6ef87e2bcdd1f753f4fa8d43dc4d->enter($__internal_b39f84663c825a71c5df49f2b186239be60d6ef87e2bcdd1f753f4fa8d43dc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_224261853f87ff4170e49936747a2039ccb35343945e0b331c45db6ddf09e47a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_224261853f87ff4170e49936747a2039ccb35343945e0b331c45db6ddf09e47a->enter($__internal_224261853f87ff4170e49936747a2039ccb35343945e0b331c45db6ddf09e47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_224261853f87ff4170e49936747a2039ccb35343945e0b331c45db6ddf09e47a->leave($__internal_224261853f87ff4170e49936747a2039ccb35343945e0b331c45db6ddf09e47a_prof);

        
        $__internal_b39f84663c825a71c5df49f2b186239be60d6ef87e2bcdd1f753f4fa8d43dc4d->leave($__internal_b39f84663c825a71c5df49f2b186239be60d6ef87e2bcdd1f753f4fa8d43dc4d_prof);

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
