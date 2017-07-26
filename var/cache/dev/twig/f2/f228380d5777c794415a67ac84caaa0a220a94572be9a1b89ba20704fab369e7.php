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
        $__internal_b47e01efbb5ad6c80d59e00fad8e9cfde564b5e7d8ead06350e6a273575ef16e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b47e01efbb5ad6c80d59e00fad8e9cfde564b5e7d8ead06350e6a273575ef16e->enter($__internal_b47e01efbb5ad6c80d59e00fad8e9cfde564b5e7d8ead06350e6a273575ef16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_033e1bfeb4f784fb7810faba7f790c0dc926397646f83e9a1c8e519c1cfe45a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_033e1bfeb4f784fb7810faba7f790c0dc926397646f83e9a1c8e519c1cfe45a3->enter($__internal_033e1bfeb4f784fb7810faba7f790c0dc926397646f83e9a1c8e519c1cfe45a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b47e01efbb5ad6c80d59e00fad8e9cfde564b5e7d8ead06350e6a273575ef16e->leave($__internal_b47e01efbb5ad6c80d59e00fad8e9cfde564b5e7d8ead06350e6a273575ef16e_prof);

        
        $__internal_033e1bfeb4f784fb7810faba7f790c0dc926397646f83e9a1c8e519c1cfe45a3->leave($__internal_033e1bfeb4f784fb7810faba7f790c0dc926397646f83e9a1c8e519c1cfe45a3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_be4d20452fd78272229b641149086498b5e82652ec63f8a1a538022feeb912df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be4d20452fd78272229b641149086498b5e82652ec63f8a1a538022feeb912df->enter($__internal_be4d20452fd78272229b641149086498b5e82652ec63f8a1a538022feeb912df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_58727c6e55444338a97bde31db859c79da4cd38a2949b73d76a872fb11ae3d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58727c6e55444338a97bde31db859c79da4cd38a2949b73d76a872fb11ae3d34->enter($__internal_58727c6e55444338a97bde31db859c79da4cd38a2949b73d76a872fb11ae3d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_58727c6e55444338a97bde31db859c79da4cd38a2949b73d76a872fb11ae3d34->leave($__internal_58727c6e55444338a97bde31db859c79da4cd38a2949b73d76a872fb11ae3d34_prof);

        
        $__internal_be4d20452fd78272229b641149086498b5e82652ec63f8a1a538022feeb912df->leave($__internal_be4d20452fd78272229b641149086498b5e82652ec63f8a1a538022feeb912df_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_876f1794273fc9082ba6d79d396ba3c554e45072ca7d329758b9fcf68a0379f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_876f1794273fc9082ba6d79d396ba3c554e45072ca7d329758b9fcf68a0379f2->enter($__internal_876f1794273fc9082ba6d79d396ba3c554e45072ca7d329758b9fcf68a0379f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_da3f37e0f6298f73481c16c399e8fc0d42593e51dccc309a51eaa0a10ca046fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da3f37e0f6298f73481c16c399e8fc0d42593e51dccc309a51eaa0a10ca046fa->enter($__internal_da3f37e0f6298f73481c16c399e8fc0d42593e51dccc309a51eaa0a10ca046fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_da3f37e0f6298f73481c16c399e8fc0d42593e51dccc309a51eaa0a10ca046fa->leave($__internal_da3f37e0f6298f73481c16c399e8fc0d42593e51dccc309a51eaa0a10ca046fa_prof);

        
        $__internal_876f1794273fc9082ba6d79d396ba3c554e45072ca7d329758b9fcf68a0379f2->leave($__internal_876f1794273fc9082ba6d79d396ba3c554e45072ca7d329758b9fcf68a0379f2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_49772d56f5d2fdae7902e67531af836ad54d3b080e56e0bed2e8aa15113e7a01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49772d56f5d2fdae7902e67531af836ad54d3b080e56e0bed2e8aa15113e7a01->enter($__internal_49772d56f5d2fdae7902e67531af836ad54d3b080e56e0bed2e8aa15113e7a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d72c29952662fbe65dfc190e11f8d0b29b69fa97dbd18ab8a74dc646dd2c7aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d72c29952662fbe65dfc190e11f8d0b29b69fa97dbd18ab8a74dc646dd2c7aea->enter($__internal_d72c29952662fbe65dfc190e11f8d0b29b69fa97dbd18ab8a74dc646dd2c7aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d72c29952662fbe65dfc190e11f8d0b29b69fa97dbd18ab8a74dc646dd2c7aea->leave($__internal_d72c29952662fbe65dfc190e11f8d0b29b69fa97dbd18ab8a74dc646dd2c7aea_prof);

        
        $__internal_49772d56f5d2fdae7902e67531af836ad54d3b080e56e0bed2e8aa15113e7a01->leave($__internal_49772d56f5d2fdae7902e67531af836ad54d3b080e56e0bed2e8aa15113e7a01_prof);

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
