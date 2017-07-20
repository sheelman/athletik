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
        $__internal_f903cd4b273d22e75cb3bae2c62152e3b8fcbf0091f43ce0db8f7123b85624ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f903cd4b273d22e75cb3bae2c62152e3b8fcbf0091f43ce0db8f7123b85624ef->enter($__internal_f903cd4b273d22e75cb3bae2c62152e3b8fcbf0091f43ce0db8f7123b85624ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_22c2addf7e672ba5d556ebf55f6c658dab56a489f5ca4ab0332f669f73a9c034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c2addf7e672ba5d556ebf55f6c658dab56a489f5ca4ab0332f669f73a9c034->enter($__internal_22c2addf7e672ba5d556ebf55f6c658dab56a489f5ca4ab0332f669f73a9c034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f903cd4b273d22e75cb3bae2c62152e3b8fcbf0091f43ce0db8f7123b85624ef->leave($__internal_f903cd4b273d22e75cb3bae2c62152e3b8fcbf0091f43ce0db8f7123b85624ef_prof);

        
        $__internal_22c2addf7e672ba5d556ebf55f6c658dab56a489f5ca4ab0332f669f73a9c034->leave($__internal_22c2addf7e672ba5d556ebf55f6c658dab56a489f5ca4ab0332f669f73a9c034_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_da8a770af4d07c4dedc088110a33bc2b390e59f87f0576c165d93ebfc4aeca80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da8a770af4d07c4dedc088110a33bc2b390e59f87f0576c165d93ebfc4aeca80->enter($__internal_da8a770af4d07c4dedc088110a33bc2b390e59f87f0576c165d93ebfc4aeca80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_56238792049138141c1f8d2f988333d8df557a5f0d8b67c01c7147f3fde63114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56238792049138141c1f8d2f988333d8df557a5f0d8b67c01c7147f3fde63114->enter($__internal_56238792049138141c1f8d2f988333d8df557a5f0d8b67c01c7147f3fde63114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_56238792049138141c1f8d2f988333d8df557a5f0d8b67c01c7147f3fde63114->leave($__internal_56238792049138141c1f8d2f988333d8df557a5f0d8b67c01c7147f3fde63114_prof);

        
        $__internal_da8a770af4d07c4dedc088110a33bc2b390e59f87f0576c165d93ebfc4aeca80->leave($__internal_da8a770af4d07c4dedc088110a33bc2b390e59f87f0576c165d93ebfc4aeca80_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4ac4324d5706796084ddb94c274e3d2b43fc19f534f42387afc57be584d382d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ac4324d5706796084ddb94c274e3d2b43fc19f534f42387afc57be584d382d2->enter($__internal_4ac4324d5706796084ddb94c274e3d2b43fc19f534f42387afc57be584d382d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_12ea9a29939d805933a8d54180431df43e3145e16e935a004c141069b685f9a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ea9a29939d805933a8d54180431df43e3145e16e935a004c141069b685f9a8->enter($__internal_12ea9a29939d805933a8d54180431df43e3145e16e935a004c141069b685f9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_12ea9a29939d805933a8d54180431df43e3145e16e935a004c141069b685f9a8->leave($__internal_12ea9a29939d805933a8d54180431df43e3145e16e935a004c141069b685f9a8_prof);

        
        $__internal_4ac4324d5706796084ddb94c274e3d2b43fc19f534f42387afc57be584d382d2->leave($__internal_4ac4324d5706796084ddb94c274e3d2b43fc19f534f42387afc57be584d382d2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d4aeed6bd96b6a75c82766aabab5907892808525896bd6cce2dbe8898b9e4678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4aeed6bd96b6a75c82766aabab5907892808525896bd6cce2dbe8898b9e4678->enter($__internal_d4aeed6bd96b6a75c82766aabab5907892808525896bd6cce2dbe8898b9e4678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9ab7a15cc1a88f053a68387ece3b470fe2b2c00e11f0277603587295bdf9e45b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ab7a15cc1a88f053a68387ece3b470fe2b2c00e11f0277603587295bdf9e45b->enter($__internal_9ab7a15cc1a88f053a68387ece3b470fe2b2c00e11f0277603587295bdf9e45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9ab7a15cc1a88f053a68387ece3b470fe2b2c00e11f0277603587295bdf9e45b->leave($__internal_9ab7a15cc1a88f053a68387ece3b470fe2b2c00e11f0277603587295bdf9e45b_prof);

        
        $__internal_d4aeed6bd96b6a75c82766aabab5907892808525896bd6cce2dbe8898b9e4678->leave($__internal_d4aeed6bd96b6a75c82766aabab5907892808525896bd6cce2dbe8898b9e4678_prof);

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
