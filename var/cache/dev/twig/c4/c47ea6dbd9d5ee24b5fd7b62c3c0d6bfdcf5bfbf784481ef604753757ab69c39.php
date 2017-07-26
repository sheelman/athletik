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
        $__internal_824d5e03a1d0aae43f3838f87b97e3ce95bd00c3ac87668ded609e5ddb01c739 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_824d5e03a1d0aae43f3838f87b97e3ce95bd00c3ac87668ded609e5ddb01c739->enter($__internal_824d5e03a1d0aae43f3838f87b97e3ce95bd00c3ac87668ded609e5ddb01c739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_114f84121d95ab3250409e7f2e95a8a5a05f26a311cd98a27f30fcc960314a54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_114f84121d95ab3250409e7f2e95a8a5a05f26a311cd98a27f30fcc960314a54->enter($__internal_114f84121d95ab3250409e7f2e95a8a5a05f26a311cd98a27f30fcc960314a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_824d5e03a1d0aae43f3838f87b97e3ce95bd00c3ac87668ded609e5ddb01c739->leave($__internal_824d5e03a1d0aae43f3838f87b97e3ce95bd00c3ac87668ded609e5ddb01c739_prof);

        
        $__internal_114f84121d95ab3250409e7f2e95a8a5a05f26a311cd98a27f30fcc960314a54->leave($__internal_114f84121d95ab3250409e7f2e95a8a5a05f26a311cd98a27f30fcc960314a54_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_831dd805681665dd82316bd0890b8db360505d8342e70e97847a4cedb005f98e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_831dd805681665dd82316bd0890b8db360505d8342e70e97847a4cedb005f98e->enter($__internal_831dd805681665dd82316bd0890b8db360505d8342e70e97847a4cedb005f98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_4aeee93c430f4b54cb8114a4443266088635abbb1a955ac395d664fd9aeb9279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aeee93c430f4b54cb8114a4443266088635abbb1a955ac395d664fd9aeb9279->enter($__internal_4aeee93c430f4b54cb8114a4443266088635abbb1a955ac395d664fd9aeb9279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_4aeee93c430f4b54cb8114a4443266088635abbb1a955ac395d664fd9aeb9279->leave($__internal_4aeee93c430f4b54cb8114a4443266088635abbb1a955ac395d664fd9aeb9279_prof);

        
        $__internal_831dd805681665dd82316bd0890b8db360505d8342e70e97847a4cedb005f98e->leave($__internal_831dd805681665dd82316bd0890b8db360505d8342e70e97847a4cedb005f98e_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_685811411a52c81ac3339375583e24c85c95abed7d706d852e99062c991280a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_685811411a52c81ac3339375583e24c85c95abed7d706d852e99062c991280a0->enter($__internal_685811411a52c81ac3339375583e24c85c95abed7d706d852e99062c991280a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a9d4fed78a47c6c8eddec31b4c6c857bf05b249b599ddb5a2563480233cf9092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9d4fed78a47c6c8eddec31b4c6c857bf05b249b599ddb5a2563480233cf9092->enter($__internal_a9d4fed78a47c6c8eddec31b4c6c857bf05b249b599ddb5a2563480233cf9092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a9d4fed78a47c6c8eddec31b4c6c857bf05b249b599ddb5a2563480233cf9092->leave($__internal_a9d4fed78a47c6c8eddec31b4c6c857bf05b249b599ddb5a2563480233cf9092_prof);

        
        $__internal_685811411a52c81ac3339375583e24c85c95abed7d706d852e99062c991280a0->leave($__internal_685811411a52c81ac3339375583e24c85c95abed7d706d852e99062c991280a0_prof);

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
