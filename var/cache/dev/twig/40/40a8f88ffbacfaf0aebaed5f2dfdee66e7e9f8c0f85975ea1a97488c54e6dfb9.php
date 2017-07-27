<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c9f81f4c183ecd75a3a5e252f8219ba9f50bcf897c797426adbf97e24f24b9eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9f81f4c183ecd75a3a5e252f8219ba9f50bcf897c797426adbf97e24f24b9eb->enter($__internal_c9f81f4c183ecd75a3a5e252f8219ba9f50bcf897c797426adbf97e24f24b9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_85f36c60fbbfda7a626630b95a5b7e30c211a69b6bfaa6aef07f0d287714a921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85f36c60fbbfda7a626630b95a5b7e30c211a69b6bfaa6aef07f0d287714a921->enter($__internal_85f36c60fbbfda7a626630b95a5b7e30c211a69b6bfaa6aef07f0d287714a921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9f81f4c183ecd75a3a5e252f8219ba9f50bcf897c797426adbf97e24f24b9eb->leave($__internal_c9f81f4c183ecd75a3a5e252f8219ba9f50bcf897c797426adbf97e24f24b9eb_prof);

        
        $__internal_85f36c60fbbfda7a626630b95a5b7e30c211a69b6bfaa6aef07f0d287714a921->leave($__internal_85f36c60fbbfda7a626630b95a5b7e30c211a69b6bfaa6aef07f0d287714a921_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_416b819938f2389b1114a57b3faee3d78141d399b89cb900cbde931de1a5c395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_416b819938f2389b1114a57b3faee3d78141d399b89cb900cbde931de1a5c395->enter($__internal_416b819938f2389b1114a57b3faee3d78141d399b89cb900cbde931de1a5c395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_61191add4f5d7e1453bec2c3670061a78fde7fdec6fa90c00dab2a6ff7a898eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61191add4f5d7e1453bec2c3670061a78fde7fdec6fa90c00dab2a6ff7a898eb->enter($__internal_61191add4f5d7e1453bec2c3670061a78fde7fdec6fa90c00dab2a6ff7a898eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_61191add4f5d7e1453bec2c3670061a78fde7fdec6fa90c00dab2a6ff7a898eb->leave($__internal_61191add4f5d7e1453bec2c3670061a78fde7fdec6fa90c00dab2a6ff7a898eb_prof);

        
        $__internal_416b819938f2389b1114a57b3faee3d78141d399b89cb900cbde931de1a5c395->leave($__internal_416b819938f2389b1114a57b3faee3d78141d399b89cb900cbde931de1a5c395_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_189010fd6cca275d5b159d32df59e5795eb12d90afdd594c746dcec5624a133a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_189010fd6cca275d5b159d32df59e5795eb12d90afdd594c746dcec5624a133a->enter($__internal_189010fd6cca275d5b159d32df59e5795eb12d90afdd594c746dcec5624a133a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b0cf700ca36e55155998f6a36eadc84f18fbd0cb48534ba266f2ef19734fc5f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0cf700ca36e55155998f6a36eadc84f18fbd0cb48534ba266f2ef19734fc5f3->enter($__internal_b0cf700ca36e55155998f6a36eadc84f18fbd0cb48534ba266f2ef19734fc5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b0cf700ca36e55155998f6a36eadc84f18fbd0cb48534ba266f2ef19734fc5f3->leave($__internal_b0cf700ca36e55155998f6a36eadc84f18fbd0cb48534ba266f2ef19734fc5f3_prof);

        
        $__internal_189010fd6cca275d5b159d32df59e5795eb12d90afdd594c746dcec5624a133a->leave($__internal_189010fd6cca275d5b159d32df59e5795eb12d90afdd594c746dcec5624a133a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3640e459ba11cf0ac1c013f347be038507d98578682744b9030c427a8896cb8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3640e459ba11cf0ac1c013f347be038507d98578682744b9030c427a8896cb8b->enter($__internal_3640e459ba11cf0ac1c013f347be038507d98578682744b9030c427a8896cb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fd3a514f5dc7410b5f8ad8284a077a0a7193db9d91bbf3678e08e11aefb2f591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd3a514f5dc7410b5f8ad8284a077a0a7193db9d91bbf3678e08e11aefb2f591->enter($__internal_fd3a514f5dc7410b5f8ad8284a077a0a7193db9d91bbf3678e08e11aefb2f591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_fd3a514f5dc7410b5f8ad8284a077a0a7193db9d91bbf3678e08e11aefb2f591->leave($__internal_fd3a514f5dc7410b5f8ad8284a077a0a7193db9d91bbf3678e08e11aefb2f591_prof);

        
        $__internal_3640e459ba11cf0ac1c013f347be038507d98578682744b9030c427a8896cb8b->leave($__internal_3640e459ba11cf0ac1c013f347be038507d98578682744b9030c427a8896cb8b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
