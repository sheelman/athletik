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
        $__internal_5f55e8eeea96c1074289842f8ed68c110c828bffa526c15cb12914506a3b452d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f55e8eeea96c1074289842f8ed68c110c828bffa526c15cb12914506a3b452d->enter($__internal_5f55e8eeea96c1074289842f8ed68c110c828bffa526c15cb12914506a3b452d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_e46908217e5ee9b021feda214ca5ca17a170035f7b0cb339b6df9d44ea2d6d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e46908217e5ee9b021feda214ca5ca17a170035f7b0cb339b6df9d44ea2d6d7a->enter($__internal_e46908217e5ee9b021feda214ca5ca17a170035f7b0cb339b6df9d44ea2d6d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f55e8eeea96c1074289842f8ed68c110c828bffa526c15cb12914506a3b452d->leave($__internal_5f55e8eeea96c1074289842f8ed68c110c828bffa526c15cb12914506a3b452d_prof);

        
        $__internal_e46908217e5ee9b021feda214ca5ca17a170035f7b0cb339b6df9d44ea2d6d7a->leave($__internal_e46908217e5ee9b021feda214ca5ca17a170035f7b0cb339b6df9d44ea2d6d7a_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_7cf5f4f0d99065efba3a5516ed3fedc1fe59c75f51da6540b7dfccd4df0dedbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cf5f4f0d99065efba3a5516ed3fedc1fe59c75f51da6540b7dfccd4df0dedbb->enter($__internal_7cf5f4f0d99065efba3a5516ed3fedc1fe59c75f51da6540b7dfccd4df0dedbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_fabedd3560e1316fe0013dcaf64fef2d8609298f0ec3393535b7fbca8ebeb030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fabedd3560e1316fe0013dcaf64fef2d8609298f0ec3393535b7fbca8ebeb030->enter($__internal_fabedd3560e1316fe0013dcaf64fef2d8609298f0ec3393535b7fbca8ebeb030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_fabedd3560e1316fe0013dcaf64fef2d8609298f0ec3393535b7fbca8ebeb030->leave($__internal_fabedd3560e1316fe0013dcaf64fef2d8609298f0ec3393535b7fbca8ebeb030_prof);

        
        $__internal_7cf5f4f0d99065efba3a5516ed3fedc1fe59c75f51da6540b7dfccd4df0dedbb->leave($__internal_7cf5f4f0d99065efba3a5516ed3fedc1fe59c75f51da6540b7dfccd4df0dedbb_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d41cfd0492bdb8433e5264dded87a9871d83cbe64b7de2e52aaee561eafd822c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d41cfd0492bdb8433e5264dded87a9871d83cbe64b7de2e52aaee561eafd822c->enter($__internal_d41cfd0492bdb8433e5264dded87a9871d83cbe64b7de2e52aaee561eafd822c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_68222df498bea902d604a770e827fd3c13113b5df51a2dc7aed605ad611b76d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68222df498bea902d604a770e827fd3c13113b5df51a2dc7aed605ad611b76d0->enter($__internal_68222df498bea902d604a770e827fd3c13113b5df51a2dc7aed605ad611b76d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_68222df498bea902d604a770e827fd3c13113b5df51a2dc7aed605ad611b76d0->leave($__internal_68222df498bea902d604a770e827fd3c13113b5df51a2dc7aed605ad611b76d0_prof);

        
        $__internal_d41cfd0492bdb8433e5264dded87a9871d83cbe64b7de2e52aaee561eafd822c->leave($__internal_d41cfd0492bdb8433e5264dded87a9871d83cbe64b7de2e52aaee561eafd822c_prof);

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
