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
        $__internal_7322a6ec0d6cb7839ed6b724c68772e8610f17deade2e0e9ed3085736f592a18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7322a6ec0d6cb7839ed6b724c68772e8610f17deade2e0e9ed3085736f592a18->enter($__internal_7322a6ec0d6cb7839ed6b724c68772e8610f17deade2e0e9ed3085736f592a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_2f9353d1bb488101876734dd652c5cbc28396a806c39579f32aba0dcc855894d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f9353d1bb488101876734dd652c5cbc28396a806c39579f32aba0dcc855894d->enter($__internal_2f9353d1bb488101876734dd652c5cbc28396a806c39579f32aba0dcc855894d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7322a6ec0d6cb7839ed6b724c68772e8610f17deade2e0e9ed3085736f592a18->leave($__internal_7322a6ec0d6cb7839ed6b724c68772e8610f17deade2e0e9ed3085736f592a18_prof);

        
        $__internal_2f9353d1bb488101876734dd652c5cbc28396a806c39579f32aba0dcc855894d->leave($__internal_2f9353d1bb488101876734dd652c5cbc28396a806c39579f32aba0dcc855894d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d08adf988fc18ff9d3dedfbbdbfdb32aa88c5cf71a880abf8d18141b75665835 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d08adf988fc18ff9d3dedfbbdbfdb32aa88c5cf71a880abf8d18141b75665835->enter($__internal_d08adf988fc18ff9d3dedfbbdbfdb32aa88c5cf71a880abf8d18141b75665835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bde7b4abdb70e68f7661135577d7f263f3559d2e1687aeb8541dc56dfdcea650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde7b4abdb70e68f7661135577d7f263f3559d2e1687aeb8541dc56dfdcea650->enter($__internal_bde7b4abdb70e68f7661135577d7f263f3559d2e1687aeb8541dc56dfdcea650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bde7b4abdb70e68f7661135577d7f263f3559d2e1687aeb8541dc56dfdcea650->leave($__internal_bde7b4abdb70e68f7661135577d7f263f3559d2e1687aeb8541dc56dfdcea650_prof);

        
        $__internal_d08adf988fc18ff9d3dedfbbdbfdb32aa88c5cf71a880abf8d18141b75665835->leave($__internal_d08adf988fc18ff9d3dedfbbdbfdb32aa88c5cf71a880abf8d18141b75665835_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8240415bad027969673ebf54c4d0c258e11f8325a89563497c0f5f336efcb8cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8240415bad027969673ebf54c4d0c258e11f8325a89563497c0f5f336efcb8cf->enter($__internal_8240415bad027969673ebf54c4d0c258e11f8325a89563497c0f5f336efcb8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_402ab6626b4eceae16e3e772d66bcfd985aa6d82365fc5bf51d4a63807afa886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_402ab6626b4eceae16e3e772d66bcfd985aa6d82365fc5bf51d4a63807afa886->enter($__internal_402ab6626b4eceae16e3e772d66bcfd985aa6d82365fc5bf51d4a63807afa886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_402ab6626b4eceae16e3e772d66bcfd985aa6d82365fc5bf51d4a63807afa886->leave($__internal_402ab6626b4eceae16e3e772d66bcfd985aa6d82365fc5bf51d4a63807afa886_prof);

        
        $__internal_8240415bad027969673ebf54c4d0c258e11f8325a89563497c0f5f336efcb8cf->leave($__internal_8240415bad027969673ebf54c4d0c258e11f8325a89563497c0f5f336efcb8cf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_48a9a6fb1a8a2dd78a6b0b4bd2a8e6ecf9776c5905a08e7f0b160b8619748541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48a9a6fb1a8a2dd78a6b0b4bd2a8e6ecf9776c5905a08e7f0b160b8619748541->enter($__internal_48a9a6fb1a8a2dd78a6b0b4bd2a8e6ecf9776c5905a08e7f0b160b8619748541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_34b9b71541312f3a3b7c8f9cda9299586a3bd45096b6ca21b1d3562f8b8a2569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b9b71541312f3a3b7c8f9cda9299586a3bd45096b6ca21b1d3562f8b8a2569->enter($__internal_34b9b71541312f3a3b7c8f9cda9299586a3bd45096b6ca21b1d3562f8b8a2569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_34b9b71541312f3a3b7c8f9cda9299586a3bd45096b6ca21b1d3562f8b8a2569->leave($__internal_34b9b71541312f3a3b7c8f9cda9299586a3bd45096b6ca21b1d3562f8b8a2569_prof);

        
        $__internal_48a9a6fb1a8a2dd78a6b0b4bd2a8e6ecf9776c5905a08e7f0b160b8619748541->leave($__internal_48a9a6fb1a8a2dd78a6b0b4bd2a8e6ecf9776c5905a08e7f0b160b8619748541_prof);

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
