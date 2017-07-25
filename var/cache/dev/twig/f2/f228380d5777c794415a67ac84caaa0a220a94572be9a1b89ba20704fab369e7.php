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
        $__internal_b6ed807dc27fbfd5088f38a5631968b2be48de8f2f09510acaa17c8a10ec6cd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6ed807dc27fbfd5088f38a5631968b2be48de8f2f09510acaa17c8a10ec6cd4->enter($__internal_b6ed807dc27fbfd5088f38a5631968b2be48de8f2f09510acaa17c8a10ec6cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_42a9685f3d76f5c98c576f5b946b68405a9cd6cded32cc767fa24fdaca0fc783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a9685f3d76f5c98c576f5b946b68405a9cd6cded32cc767fa24fdaca0fc783->enter($__internal_42a9685f3d76f5c98c576f5b946b68405a9cd6cded32cc767fa24fdaca0fc783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6ed807dc27fbfd5088f38a5631968b2be48de8f2f09510acaa17c8a10ec6cd4->leave($__internal_b6ed807dc27fbfd5088f38a5631968b2be48de8f2f09510acaa17c8a10ec6cd4_prof);

        
        $__internal_42a9685f3d76f5c98c576f5b946b68405a9cd6cded32cc767fa24fdaca0fc783->leave($__internal_42a9685f3d76f5c98c576f5b946b68405a9cd6cded32cc767fa24fdaca0fc783_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6b2c9391aebab09bbf78285ba48347d1ce6c659c0802b3cda18c9774b1e4feac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b2c9391aebab09bbf78285ba48347d1ce6c659c0802b3cda18c9774b1e4feac->enter($__internal_6b2c9391aebab09bbf78285ba48347d1ce6c659c0802b3cda18c9774b1e4feac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_147b049ea3e8fbde03a36d6af023a65e6e88a7b92355d3bbb2d60795ac4c9ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147b049ea3e8fbde03a36d6af023a65e6e88a7b92355d3bbb2d60795ac4c9ebe->enter($__internal_147b049ea3e8fbde03a36d6af023a65e6e88a7b92355d3bbb2d60795ac4c9ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_147b049ea3e8fbde03a36d6af023a65e6e88a7b92355d3bbb2d60795ac4c9ebe->leave($__internal_147b049ea3e8fbde03a36d6af023a65e6e88a7b92355d3bbb2d60795ac4c9ebe_prof);

        
        $__internal_6b2c9391aebab09bbf78285ba48347d1ce6c659c0802b3cda18c9774b1e4feac->leave($__internal_6b2c9391aebab09bbf78285ba48347d1ce6c659c0802b3cda18c9774b1e4feac_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_34965dada77f94a42660faed1ea131d6d4990af3e9b23d5a0aea60c459a6a3b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34965dada77f94a42660faed1ea131d6d4990af3e9b23d5a0aea60c459a6a3b1->enter($__internal_34965dada77f94a42660faed1ea131d6d4990af3e9b23d5a0aea60c459a6a3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9fe2491061dbb8c15f26dcf8c527318e8a74430575c85fc23e051743b80b26c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe2491061dbb8c15f26dcf8c527318e8a74430575c85fc23e051743b80b26c5->enter($__internal_9fe2491061dbb8c15f26dcf8c527318e8a74430575c85fc23e051743b80b26c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9fe2491061dbb8c15f26dcf8c527318e8a74430575c85fc23e051743b80b26c5->leave($__internal_9fe2491061dbb8c15f26dcf8c527318e8a74430575c85fc23e051743b80b26c5_prof);

        
        $__internal_34965dada77f94a42660faed1ea131d6d4990af3e9b23d5a0aea60c459a6a3b1->leave($__internal_34965dada77f94a42660faed1ea131d6d4990af3e9b23d5a0aea60c459a6a3b1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f0603005be480807854580669cfe516e3d128b24c26eb76efbcd4ff594158f3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0603005be480807854580669cfe516e3d128b24c26eb76efbcd4ff594158f3d->enter($__internal_f0603005be480807854580669cfe516e3d128b24c26eb76efbcd4ff594158f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3d7ab1b74cf5b26ce40768c0dc4bd57732d91cd9702e055fada3a3d2a2538723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d7ab1b74cf5b26ce40768c0dc4bd57732d91cd9702e055fada3a3d2a2538723->enter($__internal_3d7ab1b74cf5b26ce40768c0dc4bd57732d91cd9702e055fada3a3d2a2538723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3d7ab1b74cf5b26ce40768c0dc4bd57732d91cd9702e055fada3a3d2a2538723->leave($__internal_3d7ab1b74cf5b26ce40768c0dc4bd57732d91cd9702e055fada3a3d2a2538723_prof);

        
        $__internal_f0603005be480807854580669cfe516e3d128b24c26eb76efbcd4ff594158f3d->leave($__internal_f0603005be480807854580669cfe516e3d128b24c26eb76efbcd4ff594158f3d_prof);

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
