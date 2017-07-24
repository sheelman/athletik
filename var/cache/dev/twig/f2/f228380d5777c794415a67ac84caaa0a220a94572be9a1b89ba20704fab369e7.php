<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1f5052017c5a71ed8e610f1b12472a67926fe1c6d430b33fc9e49b9e90555d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1f5052017c5a71ed8e610f1b12472a67926fe1c6d430b33fc9e49b9e90555d8->enter($__internal_c1f5052017c5a71ed8e610f1b12472a67926fe1c6d430b33fc9e49b9e90555d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_b100ccb47ea5d3da08d5257c7f57eb163692e0636086c363e24133ad33c71790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b100ccb47ea5d3da08d5257c7f57eb163692e0636086c363e24133ad33c71790->enter($__internal_b100ccb47ea5d3da08d5257c7f57eb163692e0636086c363e24133ad33c71790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1f5052017c5a71ed8e610f1b12472a67926fe1c6d430b33fc9e49b9e90555d8->leave($__internal_c1f5052017c5a71ed8e610f1b12472a67926fe1c6d430b33fc9e49b9e90555d8_prof);

        
        $__internal_b100ccb47ea5d3da08d5257c7f57eb163692e0636086c363e24133ad33c71790->leave($__internal_b100ccb47ea5d3da08d5257c7f57eb163692e0636086c363e24133ad33c71790_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ffe1895cc11eff8770e8e71bf7aa04cbad6d4b7b18d3a0e8588035146ec988ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffe1895cc11eff8770e8e71bf7aa04cbad6d4b7b18d3a0e8588035146ec988ad->enter($__internal_ffe1895cc11eff8770e8e71bf7aa04cbad6d4b7b18d3a0e8588035146ec988ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6d7025a8ffacdc68c6f2f91d3f7b7ab64fa4a732ac12d82f76996cdf2bccce40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d7025a8ffacdc68c6f2f91d3f7b7ab64fa4a732ac12d82f76996cdf2bccce40->enter($__internal_6d7025a8ffacdc68c6f2f91d3f7b7ab64fa4a732ac12d82f76996cdf2bccce40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6d7025a8ffacdc68c6f2f91d3f7b7ab64fa4a732ac12d82f76996cdf2bccce40->leave($__internal_6d7025a8ffacdc68c6f2f91d3f7b7ab64fa4a732ac12d82f76996cdf2bccce40_prof);

        
        $__internal_ffe1895cc11eff8770e8e71bf7aa04cbad6d4b7b18d3a0e8588035146ec988ad->leave($__internal_ffe1895cc11eff8770e8e71bf7aa04cbad6d4b7b18d3a0e8588035146ec988ad_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b11a7307edfa987e703407f868166f2a52b47d06fb8fc1264961cebe3f0e7ab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b11a7307edfa987e703407f868166f2a52b47d06fb8fc1264961cebe3f0e7ab6->enter($__internal_b11a7307edfa987e703407f868166f2a52b47d06fb8fc1264961cebe3f0e7ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ca63abd5276b3897887939380b9815a0a5216f1a155d4d33b7c00582d961abc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca63abd5276b3897887939380b9815a0a5216f1a155d4d33b7c00582d961abc4->enter($__internal_ca63abd5276b3897887939380b9815a0a5216f1a155d4d33b7c00582d961abc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ca63abd5276b3897887939380b9815a0a5216f1a155d4d33b7c00582d961abc4->leave($__internal_ca63abd5276b3897887939380b9815a0a5216f1a155d4d33b7c00582d961abc4_prof);

        
        $__internal_b11a7307edfa987e703407f868166f2a52b47d06fb8fc1264961cebe3f0e7ab6->leave($__internal_b11a7307edfa987e703407f868166f2a52b47d06fb8fc1264961cebe3f0e7ab6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_29599c368e09f25fd424fd7a8b60b8656ad45f676c5d23a6bc3e5e2466902d01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29599c368e09f25fd424fd7a8b60b8656ad45f676c5d23a6bc3e5e2466902d01->enter($__internal_29599c368e09f25fd424fd7a8b60b8656ad45f676c5d23a6bc3e5e2466902d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_35e02e4fc19360a5691465180915aaaded58d6f92543b1f3bf8647d6ca47655b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35e02e4fc19360a5691465180915aaaded58d6f92543b1f3bf8647d6ca47655b->enter($__internal_35e02e4fc19360a5691465180915aaaded58d6f92543b1f3bf8647d6ca47655b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_35e02e4fc19360a5691465180915aaaded58d6f92543b1f3bf8647d6ca47655b->leave($__internal_35e02e4fc19360a5691465180915aaaded58d6f92543b1f3bf8647d6ca47655b_prof);

        
        $__internal_29599c368e09f25fd424fd7a8b60b8656ad45f676c5d23a6bc3e5e2466902d01->leave($__internal_29599c368e09f25fd424fd7a8b60b8656ad45f676c5d23a6bc3e5e2466902d01_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
