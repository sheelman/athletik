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
        $__internal_4fdcbe8cafc009c0aa9c6eba953fb9e3e3e480fec597371a64117ae6bde0d84e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fdcbe8cafc009c0aa9c6eba953fb9e3e3e480fec597371a64117ae6bde0d84e->enter($__internal_4fdcbe8cafc009c0aa9c6eba953fb9e3e3e480fec597371a64117ae6bde0d84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_441c07678cba721f1226657458bd41b189df4d4bb3dbb1fd5c47b81aff00297d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441c07678cba721f1226657458bd41b189df4d4bb3dbb1fd5c47b81aff00297d->enter($__internal_441c07678cba721f1226657458bd41b189df4d4bb3dbb1fd5c47b81aff00297d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fdcbe8cafc009c0aa9c6eba953fb9e3e3e480fec597371a64117ae6bde0d84e->leave($__internal_4fdcbe8cafc009c0aa9c6eba953fb9e3e3e480fec597371a64117ae6bde0d84e_prof);

        
        $__internal_441c07678cba721f1226657458bd41b189df4d4bb3dbb1fd5c47b81aff00297d->leave($__internal_441c07678cba721f1226657458bd41b189df4d4bb3dbb1fd5c47b81aff00297d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ed2a53d337411345c6d21c8756c70fb037e3458d6124e2fec01c278c27e1af59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed2a53d337411345c6d21c8756c70fb037e3458d6124e2fec01c278c27e1af59->enter($__internal_ed2a53d337411345c6d21c8756c70fb037e3458d6124e2fec01c278c27e1af59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e099d37736988120c90e61e4e906e96955521f4780ffd02e0dd60f15c64c607a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e099d37736988120c90e61e4e906e96955521f4780ffd02e0dd60f15c64c607a->enter($__internal_e099d37736988120c90e61e4e906e96955521f4780ffd02e0dd60f15c64c607a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e099d37736988120c90e61e4e906e96955521f4780ffd02e0dd60f15c64c607a->leave($__internal_e099d37736988120c90e61e4e906e96955521f4780ffd02e0dd60f15c64c607a_prof);

        
        $__internal_ed2a53d337411345c6d21c8756c70fb037e3458d6124e2fec01c278c27e1af59->leave($__internal_ed2a53d337411345c6d21c8756c70fb037e3458d6124e2fec01c278c27e1af59_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dac8846efe166fd5f2dbbc1c93771644e6870b1e06d9447ec2715bef8286ef84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dac8846efe166fd5f2dbbc1c93771644e6870b1e06d9447ec2715bef8286ef84->enter($__internal_dac8846efe166fd5f2dbbc1c93771644e6870b1e06d9447ec2715bef8286ef84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a5bed8e93b0113eacda9793a00de78e2abf2f01c32b89aa2ffce062c9af793b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5bed8e93b0113eacda9793a00de78e2abf2f01c32b89aa2ffce062c9af793b2->enter($__internal_a5bed8e93b0113eacda9793a00de78e2abf2f01c32b89aa2ffce062c9af793b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a5bed8e93b0113eacda9793a00de78e2abf2f01c32b89aa2ffce062c9af793b2->leave($__internal_a5bed8e93b0113eacda9793a00de78e2abf2f01c32b89aa2ffce062c9af793b2_prof);

        
        $__internal_dac8846efe166fd5f2dbbc1c93771644e6870b1e06d9447ec2715bef8286ef84->leave($__internal_dac8846efe166fd5f2dbbc1c93771644e6870b1e06d9447ec2715bef8286ef84_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1aa5989b19ab42267cc9c3fcc3f74aebedecbaa42cdd976711749f71d7cd719a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aa5989b19ab42267cc9c3fcc3f74aebedecbaa42cdd976711749f71d7cd719a->enter($__internal_1aa5989b19ab42267cc9c3fcc3f74aebedecbaa42cdd976711749f71d7cd719a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ef2c4823a5a4ec53a3b246377b52346d8f1298c4bfd58bb0b35640a449596c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef2c4823a5a4ec53a3b246377b52346d8f1298c4bfd58bb0b35640a449596c5e->enter($__internal_ef2c4823a5a4ec53a3b246377b52346d8f1298c4bfd58bb0b35640a449596c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ef2c4823a5a4ec53a3b246377b52346d8f1298c4bfd58bb0b35640a449596c5e->leave($__internal_ef2c4823a5a4ec53a3b246377b52346d8f1298c4bfd58bb0b35640a449596c5e_prof);

        
        $__internal_1aa5989b19ab42267cc9c3fcc3f74aebedecbaa42cdd976711749f71d7cd719a->leave($__internal_1aa5989b19ab42267cc9c3fcc3f74aebedecbaa42cdd976711749f71d7cd719a_prof);

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
