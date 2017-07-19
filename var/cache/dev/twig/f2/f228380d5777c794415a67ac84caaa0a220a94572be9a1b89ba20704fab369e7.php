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
        $__internal_49a84f48408df82d8afcf43fe25e0005f30f4d3dd9286d13dcc7a46a2d83218c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49a84f48408df82d8afcf43fe25e0005f30f4d3dd9286d13dcc7a46a2d83218c->enter($__internal_49a84f48408df82d8afcf43fe25e0005f30f4d3dd9286d13dcc7a46a2d83218c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_d4e87aae09ed17b48ec6a2988ecf00c49dd906c3ad4c709698c4e302ebfd6d4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e87aae09ed17b48ec6a2988ecf00c49dd906c3ad4c709698c4e302ebfd6d4a->enter($__internal_d4e87aae09ed17b48ec6a2988ecf00c49dd906c3ad4c709698c4e302ebfd6d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49a84f48408df82d8afcf43fe25e0005f30f4d3dd9286d13dcc7a46a2d83218c->leave($__internal_49a84f48408df82d8afcf43fe25e0005f30f4d3dd9286d13dcc7a46a2d83218c_prof);

        
        $__internal_d4e87aae09ed17b48ec6a2988ecf00c49dd906c3ad4c709698c4e302ebfd6d4a->leave($__internal_d4e87aae09ed17b48ec6a2988ecf00c49dd906c3ad4c709698c4e302ebfd6d4a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1bda711b31d3caf58e26a06b4068fa82ebf62a9a999034653bd08e3fb07cb1db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bda711b31d3caf58e26a06b4068fa82ebf62a9a999034653bd08e3fb07cb1db->enter($__internal_1bda711b31d3caf58e26a06b4068fa82ebf62a9a999034653bd08e3fb07cb1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_73820dac27e0651cd583407782e31626bb9cbbcfae2debbf570daf42cd21f3cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73820dac27e0651cd583407782e31626bb9cbbcfae2debbf570daf42cd21f3cf->enter($__internal_73820dac27e0651cd583407782e31626bb9cbbcfae2debbf570daf42cd21f3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_73820dac27e0651cd583407782e31626bb9cbbcfae2debbf570daf42cd21f3cf->leave($__internal_73820dac27e0651cd583407782e31626bb9cbbcfae2debbf570daf42cd21f3cf_prof);

        
        $__internal_1bda711b31d3caf58e26a06b4068fa82ebf62a9a999034653bd08e3fb07cb1db->leave($__internal_1bda711b31d3caf58e26a06b4068fa82ebf62a9a999034653bd08e3fb07cb1db_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d86519d1b2adb3be00883684c190b41f2cef5923d3f4181b015b93d306a9ba0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d86519d1b2adb3be00883684c190b41f2cef5923d3f4181b015b93d306a9ba0b->enter($__internal_d86519d1b2adb3be00883684c190b41f2cef5923d3f4181b015b93d306a9ba0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0c272021af9f5fc0ec3c3fc9775d1040363390bb588ed9b5560dc81e68905e3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c272021af9f5fc0ec3c3fc9775d1040363390bb588ed9b5560dc81e68905e3a->enter($__internal_0c272021af9f5fc0ec3c3fc9775d1040363390bb588ed9b5560dc81e68905e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0c272021af9f5fc0ec3c3fc9775d1040363390bb588ed9b5560dc81e68905e3a->leave($__internal_0c272021af9f5fc0ec3c3fc9775d1040363390bb588ed9b5560dc81e68905e3a_prof);

        
        $__internal_d86519d1b2adb3be00883684c190b41f2cef5923d3f4181b015b93d306a9ba0b->leave($__internal_d86519d1b2adb3be00883684c190b41f2cef5923d3f4181b015b93d306a9ba0b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5b47f70873b8f8c2867e7b789e3ef4c48e6d1a663fe60e521e587d5d38cdb84a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b47f70873b8f8c2867e7b789e3ef4c48e6d1a663fe60e521e587d5d38cdb84a->enter($__internal_5b47f70873b8f8c2867e7b789e3ef4c48e6d1a663fe60e521e587d5d38cdb84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ebe50a59cdf6e4190d79d7a27a3ada1cdf9ce6de2a632e4fa4b0f7913c079270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe50a59cdf6e4190d79d7a27a3ada1cdf9ce6de2a632e4fa4b0f7913c079270->enter($__internal_ebe50a59cdf6e4190d79d7a27a3ada1cdf9ce6de2a632e4fa4b0f7913c079270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ebe50a59cdf6e4190d79d7a27a3ada1cdf9ce6de2a632e4fa4b0f7913c079270->leave($__internal_ebe50a59cdf6e4190d79d7a27a3ada1cdf9ce6de2a632e4fa4b0f7913c079270_prof);

        
        $__internal_5b47f70873b8f8c2867e7b789e3ef4c48e6d1a663fe60e521e587d5d38cdb84a->leave($__internal_5b47f70873b8f8c2867e7b789e3ef4c48e6d1a663fe60e521e587d5d38cdb84a_prof);

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
