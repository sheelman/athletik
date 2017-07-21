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
        $__internal_133646744a4c8e40e17317ef03c08b9160a8828ebee752d6b0fc44e6c315900c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_133646744a4c8e40e17317ef03c08b9160a8828ebee752d6b0fc44e6c315900c->enter($__internal_133646744a4c8e40e17317ef03c08b9160a8828ebee752d6b0fc44e6c315900c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_f44e263bb6191219d3a0ed762fd4a0b58e31ae0e5d63f5ab595b1c4a95b03123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f44e263bb6191219d3a0ed762fd4a0b58e31ae0e5d63f5ab595b1c4a95b03123->enter($__internal_f44e263bb6191219d3a0ed762fd4a0b58e31ae0e5d63f5ab595b1c4a95b03123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_133646744a4c8e40e17317ef03c08b9160a8828ebee752d6b0fc44e6c315900c->leave($__internal_133646744a4c8e40e17317ef03c08b9160a8828ebee752d6b0fc44e6c315900c_prof);

        
        $__internal_f44e263bb6191219d3a0ed762fd4a0b58e31ae0e5d63f5ab595b1c4a95b03123->leave($__internal_f44e263bb6191219d3a0ed762fd4a0b58e31ae0e5d63f5ab595b1c4a95b03123_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a424a58f999f1f456f1588be726420477d3ac523469d7f00ad5e6e2d2023f708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a424a58f999f1f456f1588be726420477d3ac523469d7f00ad5e6e2d2023f708->enter($__internal_a424a58f999f1f456f1588be726420477d3ac523469d7f00ad5e6e2d2023f708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_978d7cbee1a030a669aa83bd83b67cdbc280be80eaea730f05183dd1b6557d51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_978d7cbee1a030a669aa83bd83b67cdbc280be80eaea730f05183dd1b6557d51->enter($__internal_978d7cbee1a030a669aa83bd83b67cdbc280be80eaea730f05183dd1b6557d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_978d7cbee1a030a669aa83bd83b67cdbc280be80eaea730f05183dd1b6557d51->leave($__internal_978d7cbee1a030a669aa83bd83b67cdbc280be80eaea730f05183dd1b6557d51_prof);

        
        $__internal_a424a58f999f1f456f1588be726420477d3ac523469d7f00ad5e6e2d2023f708->leave($__internal_a424a58f999f1f456f1588be726420477d3ac523469d7f00ad5e6e2d2023f708_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1e6d61b9d037bc417c6cbae2139b498e958481c3b14496f3badbc42097ccc955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e6d61b9d037bc417c6cbae2139b498e958481c3b14496f3badbc42097ccc955->enter($__internal_1e6d61b9d037bc417c6cbae2139b498e958481c3b14496f3badbc42097ccc955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_be64bab8697f1ae5e5b6341ab7e25a069641d4b97bb4db8e5a28c6998e42a91e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be64bab8697f1ae5e5b6341ab7e25a069641d4b97bb4db8e5a28c6998e42a91e->enter($__internal_be64bab8697f1ae5e5b6341ab7e25a069641d4b97bb4db8e5a28c6998e42a91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_be64bab8697f1ae5e5b6341ab7e25a069641d4b97bb4db8e5a28c6998e42a91e->leave($__internal_be64bab8697f1ae5e5b6341ab7e25a069641d4b97bb4db8e5a28c6998e42a91e_prof);

        
        $__internal_1e6d61b9d037bc417c6cbae2139b498e958481c3b14496f3badbc42097ccc955->leave($__internal_1e6d61b9d037bc417c6cbae2139b498e958481c3b14496f3badbc42097ccc955_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d86f9d6930c2dedd26ca06931bdb2f1f8cc2f7c310b6be4b4f17201aed550a97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d86f9d6930c2dedd26ca06931bdb2f1f8cc2f7c310b6be4b4f17201aed550a97->enter($__internal_d86f9d6930c2dedd26ca06931bdb2f1f8cc2f7c310b6be4b4f17201aed550a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_11251474fb67b8683aac6be0b7ddc7484c740b0702eea92e301150452e9d2d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11251474fb67b8683aac6be0b7ddc7484c740b0702eea92e301150452e9d2d34->enter($__internal_11251474fb67b8683aac6be0b7ddc7484c740b0702eea92e301150452e9d2d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_11251474fb67b8683aac6be0b7ddc7484c740b0702eea92e301150452e9d2d34->leave($__internal_11251474fb67b8683aac6be0b7ddc7484c740b0702eea92e301150452e9d2d34_prof);

        
        $__internal_d86f9d6930c2dedd26ca06931bdb2f1f8cc2f7c310b6be4b4f17201aed550a97->leave($__internal_d86f9d6930c2dedd26ca06931bdb2f1f8cc2f7c310b6be4b4f17201aed550a97_prof);

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
