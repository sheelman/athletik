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
        $__internal_0ff6493a29d29b95475abdddab1512d111076b9c9cbeed4b4066b6e19804fc03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ff6493a29d29b95475abdddab1512d111076b9c9cbeed4b4066b6e19804fc03->enter($__internal_0ff6493a29d29b95475abdddab1512d111076b9c9cbeed4b4066b6e19804fc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_b43aec50857262ea833fdfc92c605a5988852874834068d6daba148eeb2baff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b43aec50857262ea833fdfc92c605a5988852874834068d6daba148eeb2baff4->enter($__internal_b43aec50857262ea833fdfc92c605a5988852874834068d6daba148eeb2baff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ff6493a29d29b95475abdddab1512d111076b9c9cbeed4b4066b6e19804fc03->leave($__internal_0ff6493a29d29b95475abdddab1512d111076b9c9cbeed4b4066b6e19804fc03_prof);

        
        $__internal_b43aec50857262ea833fdfc92c605a5988852874834068d6daba148eeb2baff4->leave($__internal_b43aec50857262ea833fdfc92c605a5988852874834068d6daba148eeb2baff4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8d6ee07704702e37e79a6013a55a952499afc181eb411786698fd72323ab36c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d6ee07704702e37e79a6013a55a952499afc181eb411786698fd72323ab36c4->enter($__internal_8d6ee07704702e37e79a6013a55a952499afc181eb411786698fd72323ab36c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7625ae88087a6ded54f2c29e47be8522290ac9711a91bfc9128f8d1808885745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7625ae88087a6ded54f2c29e47be8522290ac9711a91bfc9128f8d1808885745->enter($__internal_7625ae88087a6ded54f2c29e47be8522290ac9711a91bfc9128f8d1808885745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7625ae88087a6ded54f2c29e47be8522290ac9711a91bfc9128f8d1808885745->leave($__internal_7625ae88087a6ded54f2c29e47be8522290ac9711a91bfc9128f8d1808885745_prof);

        
        $__internal_8d6ee07704702e37e79a6013a55a952499afc181eb411786698fd72323ab36c4->leave($__internal_8d6ee07704702e37e79a6013a55a952499afc181eb411786698fd72323ab36c4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5eb2e97f9513f6a7e6a5dfd2b6abd7f3d80aa96f8f84c410899e0cead583ee86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eb2e97f9513f6a7e6a5dfd2b6abd7f3d80aa96f8f84c410899e0cead583ee86->enter($__internal_5eb2e97f9513f6a7e6a5dfd2b6abd7f3d80aa96f8f84c410899e0cead583ee86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_80460f4af42f2467c175e5ab85fd38d0ba8d74642c6880e99e3b618fa694d0b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80460f4af42f2467c175e5ab85fd38d0ba8d74642c6880e99e3b618fa694d0b8->enter($__internal_80460f4af42f2467c175e5ab85fd38d0ba8d74642c6880e99e3b618fa694d0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_80460f4af42f2467c175e5ab85fd38d0ba8d74642c6880e99e3b618fa694d0b8->leave($__internal_80460f4af42f2467c175e5ab85fd38d0ba8d74642c6880e99e3b618fa694d0b8_prof);

        
        $__internal_5eb2e97f9513f6a7e6a5dfd2b6abd7f3d80aa96f8f84c410899e0cead583ee86->leave($__internal_5eb2e97f9513f6a7e6a5dfd2b6abd7f3d80aa96f8f84c410899e0cead583ee86_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6d5381d7429c24809fe733b150b88e0df4461ecff1839c54ddc8571a9e2090a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d5381d7429c24809fe733b150b88e0df4461ecff1839c54ddc8571a9e2090a6->enter($__internal_6d5381d7429c24809fe733b150b88e0df4461ecff1839c54ddc8571a9e2090a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3d78ea381aa5343171f92a72a83d42a924141e76fcc16dab9e84a728aa25a016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d78ea381aa5343171f92a72a83d42a924141e76fcc16dab9e84a728aa25a016->enter($__internal_3d78ea381aa5343171f92a72a83d42a924141e76fcc16dab9e84a728aa25a016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3d78ea381aa5343171f92a72a83d42a924141e76fcc16dab9e84a728aa25a016->leave($__internal_3d78ea381aa5343171f92a72a83d42a924141e76fcc16dab9e84a728aa25a016_prof);

        
        $__internal_6d5381d7429c24809fe733b150b88e0df4461ecff1839c54ddc8571a9e2090a6->leave($__internal_6d5381d7429c24809fe733b150b88e0df4461ecff1839c54ddc8571a9e2090a6_prof);

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
