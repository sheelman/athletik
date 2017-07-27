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
        $__internal_beb177865a0b88ecc0d8c95296d2434ef2cec9b3ea5b6573d2bf8de1cdc2b0e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beb177865a0b88ecc0d8c95296d2434ef2cec9b3ea5b6573d2bf8de1cdc2b0e4->enter($__internal_beb177865a0b88ecc0d8c95296d2434ef2cec9b3ea5b6573d2bf8de1cdc2b0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_592e0b53aff620dd6a4b319e5a64fbb3be99912adb63a55d5f5a1d66730d8979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_592e0b53aff620dd6a4b319e5a64fbb3be99912adb63a55d5f5a1d66730d8979->enter($__internal_592e0b53aff620dd6a4b319e5a64fbb3be99912adb63a55d5f5a1d66730d8979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_beb177865a0b88ecc0d8c95296d2434ef2cec9b3ea5b6573d2bf8de1cdc2b0e4->leave($__internal_beb177865a0b88ecc0d8c95296d2434ef2cec9b3ea5b6573d2bf8de1cdc2b0e4_prof);

        
        $__internal_592e0b53aff620dd6a4b319e5a64fbb3be99912adb63a55d5f5a1d66730d8979->leave($__internal_592e0b53aff620dd6a4b319e5a64fbb3be99912adb63a55d5f5a1d66730d8979_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fa4e3b69ad1b26e0a0390b1edcc93b9abac4b5a124ba1c9296888e435b0dab71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa4e3b69ad1b26e0a0390b1edcc93b9abac4b5a124ba1c9296888e435b0dab71->enter($__internal_fa4e3b69ad1b26e0a0390b1edcc93b9abac4b5a124ba1c9296888e435b0dab71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_869ba0f43b74a8e42571e0ad203f0342c5b15d9873f4b85af52d1bd437119f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869ba0f43b74a8e42571e0ad203f0342c5b15d9873f4b85af52d1bd437119f55->enter($__internal_869ba0f43b74a8e42571e0ad203f0342c5b15d9873f4b85af52d1bd437119f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_869ba0f43b74a8e42571e0ad203f0342c5b15d9873f4b85af52d1bd437119f55->leave($__internal_869ba0f43b74a8e42571e0ad203f0342c5b15d9873f4b85af52d1bd437119f55_prof);

        
        $__internal_fa4e3b69ad1b26e0a0390b1edcc93b9abac4b5a124ba1c9296888e435b0dab71->leave($__internal_fa4e3b69ad1b26e0a0390b1edcc93b9abac4b5a124ba1c9296888e435b0dab71_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_47b41cc2d0e641cff19d9ca4887d2939bea950130c967e68a0a6b4125606381e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47b41cc2d0e641cff19d9ca4887d2939bea950130c967e68a0a6b4125606381e->enter($__internal_47b41cc2d0e641cff19d9ca4887d2939bea950130c967e68a0a6b4125606381e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_aa1f68a362bd5305b3155109734d5b7e03b0b7dbe4b8e18ee339189e055f0001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa1f68a362bd5305b3155109734d5b7e03b0b7dbe4b8e18ee339189e055f0001->enter($__internal_aa1f68a362bd5305b3155109734d5b7e03b0b7dbe4b8e18ee339189e055f0001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aa1f68a362bd5305b3155109734d5b7e03b0b7dbe4b8e18ee339189e055f0001->leave($__internal_aa1f68a362bd5305b3155109734d5b7e03b0b7dbe4b8e18ee339189e055f0001_prof);

        
        $__internal_47b41cc2d0e641cff19d9ca4887d2939bea950130c967e68a0a6b4125606381e->leave($__internal_47b41cc2d0e641cff19d9ca4887d2939bea950130c967e68a0a6b4125606381e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dfae55d64271c321657eacda5dd2a702e7190df89a7ab81e456984cfc6fe6d07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfae55d64271c321657eacda5dd2a702e7190df89a7ab81e456984cfc6fe6d07->enter($__internal_dfae55d64271c321657eacda5dd2a702e7190df89a7ab81e456984cfc6fe6d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b3f12f685ed807a398644f90bc015fdb33372fa75b1dfcec67cbac30b9a79d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3f12f685ed807a398644f90bc015fdb33372fa75b1dfcec67cbac30b9a79d1a->enter($__internal_b3f12f685ed807a398644f90bc015fdb33372fa75b1dfcec67cbac30b9a79d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b3f12f685ed807a398644f90bc015fdb33372fa75b1dfcec67cbac30b9a79d1a->leave($__internal_b3f12f685ed807a398644f90bc015fdb33372fa75b1dfcec67cbac30b9a79d1a_prof);

        
        $__internal_dfae55d64271c321657eacda5dd2a702e7190df89a7ab81e456984cfc6fe6d07->leave($__internal_dfae55d64271c321657eacda5dd2a702e7190df89a7ab81e456984cfc6fe6d07_prof);

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
