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
        $__internal_0d6d69d46ccb63bb60c43543c05b267931e05ef845aab16235b4fa5fa01905ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d6d69d46ccb63bb60c43543c05b267931e05ef845aab16235b4fa5fa01905ee->enter($__internal_0d6d69d46ccb63bb60c43543c05b267931e05ef845aab16235b4fa5fa01905ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_4e7374cfb78341bbdbd61a26b6765fa1ba583b5b2a60bcf3707927c52149ed3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7374cfb78341bbdbd61a26b6765fa1ba583b5b2a60bcf3707927c52149ed3d->enter($__internal_4e7374cfb78341bbdbd61a26b6765fa1ba583b5b2a60bcf3707927c52149ed3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d6d69d46ccb63bb60c43543c05b267931e05ef845aab16235b4fa5fa01905ee->leave($__internal_0d6d69d46ccb63bb60c43543c05b267931e05ef845aab16235b4fa5fa01905ee_prof);

        
        $__internal_4e7374cfb78341bbdbd61a26b6765fa1ba583b5b2a60bcf3707927c52149ed3d->leave($__internal_4e7374cfb78341bbdbd61a26b6765fa1ba583b5b2a60bcf3707927c52149ed3d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_996496e0e7208dc5e69c33be652e02f204e0ac658a733a2e6d0e4a47f4408fa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_996496e0e7208dc5e69c33be652e02f204e0ac658a733a2e6d0e4a47f4408fa7->enter($__internal_996496e0e7208dc5e69c33be652e02f204e0ac658a733a2e6d0e4a47f4408fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ff51b89c4db3154d950a57d3ca11a0faca1baefbe37b2e4bf249c6ebea6a6b45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff51b89c4db3154d950a57d3ca11a0faca1baefbe37b2e4bf249c6ebea6a6b45->enter($__internal_ff51b89c4db3154d950a57d3ca11a0faca1baefbe37b2e4bf249c6ebea6a6b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ff51b89c4db3154d950a57d3ca11a0faca1baefbe37b2e4bf249c6ebea6a6b45->leave($__internal_ff51b89c4db3154d950a57d3ca11a0faca1baefbe37b2e4bf249c6ebea6a6b45_prof);

        
        $__internal_996496e0e7208dc5e69c33be652e02f204e0ac658a733a2e6d0e4a47f4408fa7->leave($__internal_996496e0e7208dc5e69c33be652e02f204e0ac658a733a2e6d0e4a47f4408fa7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5bf4f6dd1546db19c02c48ad3f1b6ad5824426a98b208c1969b5f0029ca63678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bf4f6dd1546db19c02c48ad3f1b6ad5824426a98b208c1969b5f0029ca63678->enter($__internal_5bf4f6dd1546db19c02c48ad3f1b6ad5824426a98b208c1969b5f0029ca63678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2fb5c8e03f8c0b61dad6b5898d0fd97e93a8b5128f135d84866c2dceb96d7ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb5c8e03f8c0b61dad6b5898d0fd97e93a8b5128f135d84866c2dceb96d7ec4->enter($__internal_2fb5c8e03f8c0b61dad6b5898d0fd97e93a8b5128f135d84866c2dceb96d7ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2fb5c8e03f8c0b61dad6b5898d0fd97e93a8b5128f135d84866c2dceb96d7ec4->leave($__internal_2fb5c8e03f8c0b61dad6b5898d0fd97e93a8b5128f135d84866c2dceb96d7ec4_prof);

        
        $__internal_5bf4f6dd1546db19c02c48ad3f1b6ad5824426a98b208c1969b5f0029ca63678->leave($__internal_5bf4f6dd1546db19c02c48ad3f1b6ad5824426a98b208c1969b5f0029ca63678_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c06669e2a1667d490583faa7438292ddddda7550e3c37bb4d267c6faf34a4016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c06669e2a1667d490583faa7438292ddddda7550e3c37bb4d267c6faf34a4016->enter($__internal_c06669e2a1667d490583faa7438292ddddda7550e3c37bb4d267c6faf34a4016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4ca83bb87cf3906083120d78fb38776cb8576ed8e856e32d7abf16ee3fdfaf97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca83bb87cf3906083120d78fb38776cb8576ed8e856e32d7abf16ee3fdfaf97->enter($__internal_4ca83bb87cf3906083120d78fb38776cb8576ed8e856e32d7abf16ee3fdfaf97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4ca83bb87cf3906083120d78fb38776cb8576ed8e856e32d7abf16ee3fdfaf97->leave($__internal_4ca83bb87cf3906083120d78fb38776cb8576ed8e856e32d7abf16ee3fdfaf97_prof);

        
        $__internal_c06669e2a1667d490583faa7438292ddddda7550e3c37bb4d267c6faf34a4016->leave($__internal_c06669e2a1667d490583faa7438292ddddda7550e3c37bb4d267c6faf34a4016_prof);

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
