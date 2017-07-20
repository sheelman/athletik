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
        $__internal_ff4417349ce65d3bcfd6c59d622aa993b2585f0a5ad06cc57b01a9f8f304ee5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff4417349ce65d3bcfd6c59d622aa993b2585f0a5ad06cc57b01a9f8f304ee5d->enter($__internal_ff4417349ce65d3bcfd6c59d622aa993b2585f0a5ad06cc57b01a9f8f304ee5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_0db3de1718f5936e93a464910805be0f13ea8bc3dfe494fb073896f2733dca58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db3de1718f5936e93a464910805be0f13ea8bc3dfe494fb073896f2733dca58->enter($__internal_0db3de1718f5936e93a464910805be0f13ea8bc3dfe494fb073896f2733dca58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff4417349ce65d3bcfd6c59d622aa993b2585f0a5ad06cc57b01a9f8f304ee5d->leave($__internal_ff4417349ce65d3bcfd6c59d622aa993b2585f0a5ad06cc57b01a9f8f304ee5d_prof);

        
        $__internal_0db3de1718f5936e93a464910805be0f13ea8bc3dfe494fb073896f2733dca58->leave($__internal_0db3de1718f5936e93a464910805be0f13ea8bc3dfe494fb073896f2733dca58_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_3f311c75bcb9c804ac67f6510a04f458b3fb5f1e7429c52093387fc93ea05987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f311c75bcb9c804ac67f6510a04f458b3fb5f1e7429c52093387fc93ea05987->enter($__internal_3f311c75bcb9c804ac67f6510a04f458b3fb5f1e7429c52093387fc93ea05987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_75f36cc9aae462240b1ad3958cf1b4d628787bd16e6307ad231d16e43397ed46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75f36cc9aae462240b1ad3958cf1b4d628787bd16e6307ad231d16e43397ed46->enter($__internal_75f36cc9aae462240b1ad3958cf1b4d628787bd16e6307ad231d16e43397ed46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_75f36cc9aae462240b1ad3958cf1b4d628787bd16e6307ad231d16e43397ed46->leave($__internal_75f36cc9aae462240b1ad3958cf1b4d628787bd16e6307ad231d16e43397ed46_prof);

        
        $__internal_3f311c75bcb9c804ac67f6510a04f458b3fb5f1e7429c52093387fc93ea05987->leave($__internal_3f311c75bcb9c804ac67f6510a04f458b3fb5f1e7429c52093387fc93ea05987_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d345cf26ade7cb377be71b15ff160696c789ae62f0794371ede479253631716b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d345cf26ade7cb377be71b15ff160696c789ae62f0794371ede479253631716b->enter($__internal_d345cf26ade7cb377be71b15ff160696c789ae62f0794371ede479253631716b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ce2f8d298943e381b27c95fe55d0fd516ea50caa062f33ae25133e1a6c7085fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce2f8d298943e381b27c95fe55d0fd516ea50caa062f33ae25133e1a6c7085fb->enter($__internal_ce2f8d298943e381b27c95fe55d0fd516ea50caa062f33ae25133e1a6c7085fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_ce2f8d298943e381b27c95fe55d0fd516ea50caa062f33ae25133e1a6c7085fb->leave($__internal_ce2f8d298943e381b27c95fe55d0fd516ea50caa062f33ae25133e1a6c7085fb_prof);

        
        $__internal_d345cf26ade7cb377be71b15ff160696c789ae62f0794371ede479253631716b->leave($__internal_d345cf26ade7cb377be71b15ff160696c789ae62f0794371ede479253631716b_prof);

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
