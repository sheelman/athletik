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
        $__internal_9b7bc5979b16fc638b7a11cdf3cf384cac80969f461c2c551f4217870abe5aa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b7bc5979b16fc638b7a11cdf3cf384cac80969f461c2c551f4217870abe5aa8->enter($__internal_9b7bc5979b16fc638b7a11cdf3cf384cac80969f461c2c551f4217870abe5aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_0988c67ff6684338ad0625faad11dd3054dec94604242699f81c08fdd52aa6d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0988c67ff6684338ad0625faad11dd3054dec94604242699f81c08fdd52aa6d9->enter($__internal_0988c67ff6684338ad0625faad11dd3054dec94604242699f81c08fdd52aa6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b7bc5979b16fc638b7a11cdf3cf384cac80969f461c2c551f4217870abe5aa8->leave($__internal_9b7bc5979b16fc638b7a11cdf3cf384cac80969f461c2c551f4217870abe5aa8_prof);

        
        $__internal_0988c67ff6684338ad0625faad11dd3054dec94604242699f81c08fdd52aa6d9->leave($__internal_0988c67ff6684338ad0625faad11dd3054dec94604242699f81c08fdd52aa6d9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4cdccee3e3f17bb40f2053bb7fe1041d225a83acfdc4e3cd06cd0423aa79e3b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cdccee3e3f17bb40f2053bb7fe1041d225a83acfdc4e3cd06cd0423aa79e3b2->enter($__internal_4cdccee3e3f17bb40f2053bb7fe1041d225a83acfdc4e3cd06cd0423aa79e3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f97e0716102bca3829a3e5a191849fd8902d44021b5c9cef1be85c234e65fed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f97e0716102bca3829a3e5a191849fd8902d44021b5c9cef1be85c234e65fed0->enter($__internal_f97e0716102bca3829a3e5a191849fd8902d44021b5c9cef1be85c234e65fed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f97e0716102bca3829a3e5a191849fd8902d44021b5c9cef1be85c234e65fed0->leave($__internal_f97e0716102bca3829a3e5a191849fd8902d44021b5c9cef1be85c234e65fed0_prof);

        
        $__internal_4cdccee3e3f17bb40f2053bb7fe1041d225a83acfdc4e3cd06cd0423aa79e3b2->leave($__internal_4cdccee3e3f17bb40f2053bb7fe1041d225a83acfdc4e3cd06cd0423aa79e3b2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0770f703aff1e8310164d2e81e3002ec41b58cd9d59599246b22ce9642e7b922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0770f703aff1e8310164d2e81e3002ec41b58cd9d59599246b22ce9642e7b922->enter($__internal_0770f703aff1e8310164d2e81e3002ec41b58cd9d59599246b22ce9642e7b922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_897cc0f8f0550517a8b9b8582b70de69ec31f41d9efcd6581766b3362d65e283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_897cc0f8f0550517a8b9b8582b70de69ec31f41d9efcd6581766b3362d65e283->enter($__internal_897cc0f8f0550517a8b9b8582b70de69ec31f41d9efcd6581766b3362d65e283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_897cc0f8f0550517a8b9b8582b70de69ec31f41d9efcd6581766b3362d65e283->leave($__internal_897cc0f8f0550517a8b9b8582b70de69ec31f41d9efcd6581766b3362d65e283_prof);

        
        $__internal_0770f703aff1e8310164d2e81e3002ec41b58cd9d59599246b22ce9642e7b922->leave($__internal_0770f703aff1e8310164d2e81e3002ec41b58cd9d59599246b22ce9642e7b922_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4cc81b14a5e2f7789f00be4ca9cb59a6d9a8e0e9e60cb112d7f0613c1f965ab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cc81b14a5e2f7789f00be4ca9cb59a6d9a8e0e9e60cb112d7f0613c1f965ab3->enter($__internal_4cc81b14a5e2f7789f00be4ca9cb59a6d9a8e0e9e60cb112d7f0613c1f965ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f5398754b732445f811acfd51ef48e1d18f9e4243ae92f04e99e12d9649d4466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5398754b732445f811acfd51ef48e1d18f9e4243ae92f04e99e12d9649d4466->enter($__internal_f5398754b732445f811acfd51ef48e1d18f9e4243ae92f04e99e12d9649d4466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f5398754b732445f811acfd51ef48e1d18f9e4243ae92f04e99e12d9649d4466->leave($__internal_f5398754b732445f811acfd51ef48e1d18f9e4243ae92f04e99e12d9649d4466_prof);

        
        $__internal_4cc81b14a5e2f7789f00be4ca9cb59a6d9a8e0e9e60cb112d7f0613c1f965ab3->leave($__internal_4cc81b14a5e2f7789f00be4ca9cb59a6d9a8e0e9e60cb112d7f0613c1f965ab3_prof);

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
