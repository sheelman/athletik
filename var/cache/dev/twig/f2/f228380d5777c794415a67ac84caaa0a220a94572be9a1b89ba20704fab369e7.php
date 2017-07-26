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
        $__internal_908ad7fd85004f0f0d3c814b21967f2989971fde762325ab594456a17c9dec92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_908ad7fd85004f0f0d3c814b21967f2989971fde762325ab594456a17c9dec92->enter($__internal_908ad7fd85004f0f0d3c814b21967f2989971fde762325ab594456a17c9dec92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_4f2fb1ae37e509479bd60971ef960b1ecaca0e2d3673717f3988175aa8d14c40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f2fb1ae37e509479bd60971ef960b1ecaca0e2d3673717f3988175aa8d14c40->enter($__internal_4f2fb1ae37e509479bd60971ef960b1ecaca0e2d3673717f3988175aa8d14c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_908ad7fd85004f0f0d3c814b21967f2989971fde762325ab594456a17c9dec92->leave($__internal_908ad7fd85004f0f0d3c814b21967f2989971fde762325ab594456a17c9dec92_prof);

        
        $__internal_4f2fb1ae37e509479bd60971ef960b1ecaca0e2d3673717f3988175aa8d14c40->leave($__internal_4f2fb1ae37e509479bd60971ef960b1ecaca0e2d3673717f3988175aa8d14c40_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ac743166ee427e6fe3532eb69002b9c1df8b524e58d5f07aef6e0583faa13de1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac743166ee427e6fe3532eb69002b9c1df8b524e58d5f07aef6e0583faa13de1->enter($__internal_ac743166ee427e6fe3532eb69002b9c1df8b524e58d5f07aef6e0583faa13de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0f6ca28f1ef74986daf011463eefceb61db0dd6d45bc4f5e5f18fa14559130a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f6ca28f1ef74986daf011463eefceb61db0dd6d45bc4f5e5f18fa14559130a3->enter($__internal_0f6ca28f1ef74986daf011463eefceb61db0dd6d45bc4f5e5f18fa14559130a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0f6ca28f1ef74986daf011463eefceb61db0dd6d45bc4f5e5f18fa14559130a3->leave($__internal_0f6ca28f1ef74986daf011463eefceb61db0dd6d45bc4f5e5f18fa14559130a3_prof);

        
        $__internal_ac743166ee427e6fe3532eb69002b9c1df8b524e58d5f07aef6e0583faa13de1->leave($__internal_ac743166ee427e6fe3532eb69002b9c1df8b524e58d5f07aef6e0583faa13de1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4737ddb3a7bf34b103183a031dbcf4fa4d0dfa6b4ec7fc0aa63e3aafcf264be7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4737ddb3a7bf34b103183a031dbcf4fa4d0dfa6b4ec7fc0aa63e3aafcf264be7->enter($__internal_4737ddb3a7bf34b103183a031dbcf4fa4d0dfa6b4ec7fc0aa63e3aafcf264be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d75a77b9a60be1d549848ff1e8a075cfce174ada4d6af9ea294564de5138679a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d75a77b9a60be1d549848ff1e8a075cfce174ada4d6af9ea294564de5138679a->enter($__internal_d75a77b9a60be1d549848ff1e8a075cfce174ada4d6af9ea294564de5138679a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d75a77b9a60be1d549848ff1e8a075cfce174ada4d6af9ea294564de5138679a->leave($__internal_d75a77b9a60be1d549848ff1e8a075cfce174ada4d6af9ea294564de5138679a_prof);

        
        $__internal_4737ddb3a7bf34b103183a031dbcf4fa4d0dfa6b4ec7fc0aa63e3aafcf264be7->leave($__internal_4737ddb3a7bf34b103183a031dbcf4fa4d0dfa6b4ec7fc0aa63e3aafcf264be7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_558964cfebc25d49f29161984366666a97f0cac74536f0edb14d4574ca519fc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_558964cfebc25d49f29161984366666a97f0cac74536f0edb14d4574ca519fc6->enter($__internal_558964cfebc25d49f29161984366666a97f0cac74536f0edb14d4574ca519fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a4865d572ca66a7e8b5beb8ff959412e8508b8b7121d63bb7e0b0e60a3d4c3e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4865d572ca66a7e8b5beb8ff959412e8508b8b7121d63bb7e0b0e60a3d4c3e1->enter($__internal_a4865d572ca66a7e8b5beb8ff959412e8508b8b7121d63bb7e0b0e60a3d4c3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a4865d572ca66a7e8b5beb8ff959412e8508b8b7121d63bb7e0b0e60a3d4c3e1->leave($__internal_a4865d572ca66a7e8b5beb8ff959412e8508b8b7121d63bb7e0b0e60a3d4c3e1_prof);

        
        $__internal_558964cfebc25d49f29161984366666a97f0cac74536f0edb14d4574ca519fc6->leave($__internal_558964cfebc25d49f29161984366666a97f0cac74536f0edb14d4574ca519fc6_prof);

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
