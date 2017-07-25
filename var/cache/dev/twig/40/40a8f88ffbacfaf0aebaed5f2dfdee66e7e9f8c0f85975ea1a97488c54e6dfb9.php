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
        $__internal_818a64244a29ec4dfc5b0fe2514f609686cbe224250d165e829dc8298e7f652e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_818a64244a29ec4dfc5b0fe2514f609686cbe224250d165e829dc8298e7f652e->enter($__internal_818a64244a29ec4dfc5b0fe2514f609686cbe224250d165e829dc8298e7f652e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_8bb091fa147fb4b56bb7bef8f50ea7da477f28f25329001adbaaf4fc4a66d715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb091fa147fb4b56bb7bef8f50ea7da477f28f25329001adbaaf4fc4a66d715->enter($__internal_8bb091fa147fb4b56bb7bef8f50ea7da477f28f25329001adbaaf4fc4a66d715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_818a64244a29ec4dfc5b0fe2514f609686cbe224250d165e829dc8298e7f652e->leave($__internal_818a64244a29ec4dfc5b0fe2514f609686cbe224250d165e829dc8298e7f652e_prof);

        
        $__internal_8bb091fa147fb4b56bb7bef8f50ea7da477f28f25329001adbaaf4fc4a66d715->leave($__internal_8bb091fa147fb4b56bb7bef8f50ea7da477f28f25329001adbaaf4fc4a66d715_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0375c09e532cb5ed63c282531d148883616fb68c649feee01d85b0cd480c8112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0375c09e532cb5ed63c282531d148883616fb68c649feee01d85b0cd480c8112->enter($__internal_0375c09e532cb5ed63c282531d148883616fb68c649feee01d85b0cd480c8112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ff5f3dbdd39adc138745b8de7c67dd7ba39365bd636cf0b9ead7bd229884c17c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff5f3dbdd39adc138745b8de7c67dd7ba39365bd636cf0b9ead7bd229884c17c->enter($__internal_ff5f3dbdd39adc138745b8de7c67dd7ba39365bd636cf0b9ead7bd229884c17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ff5f3dbdd39adc138745b8de7c67dd7ba39365bd636cf0b9ead7bd229884c17c->leave($__internal_ff5f3dbdd39adc138745b8de7c67dd7ba39365bd636cf0b9ead7bd229884c17c_prof);

        
        $__internal_0375c09e532cb5ed63c282531d148883616fb68c649feee01d85b0cd480c8112->leave($__internal_0375c09e532cb5ed63c282531d148883616fb68c649feee01d85b0cd480c8112_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d9f36a02c2596fce770552848a7dc30fd8ddd487959f8a29df0a6b8b080036c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9f36a02c2596fce770552848a7dc30fd8ddd487959f8a29df0a6b8b080036c8->enter($__internal_d9f36a02c2596fce770552848a7dc30fd8ddd487959f8a29df0a6b8b080036c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8389aca81a6bb1444daf4dc96b22b89f899054d2b5672a9b7a4bd80c71a8d040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8389aca81a6bb1444daf4dc96b22b89f899054d2b5672a9b7a4bd80c71a8d040->enter($__internal_8389aca81a6bb1444daf4dc96b22b89f899054d2b5672a9b7a4bd80c71a8d040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8389aca81a6bb1444daf4dc96b22b89f899054d2b5672a9b7a4bd80c71a8d040->leave($__internal_8389aca81a6bb1444daf4dc96b22b89f899054d2b5672a9b7a4bd80c71a8d040_prof);

        
        $__internal_d9f36a02c2596fce770552848a7dc30fd8ddd487959f8a29df0a6b8b080036c8->leave($__internal_d9f36a02c2596fce770552848a7dc30fd8ddd487959f8a29df0a6b8b080036c8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_211b9053a90147ac902b23d54cef7af36605b711029baf16b1b31b467f86cc4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_211b9053a90147ac902b23d54cef7af36605b711029baf16b1b31b467f86cc4c->enter($__internal_211b9053a90147ac902b23d54cef7af36605b711029baf16b1b31b467f86cc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b0224169fdcfc5ce4b6449371b875b7aa74c762ab14caa6d05aea38e5693950c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0224169fdcfc5ce4b6449371b875b7aa74c762ab14caa6d05aea38e5693950c->enter($__internal_b0224169fdcfc5ce4b6449371b875b7aa74c762ab14caa6d05aea38e5693950c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b0224169fdcfc5ce4b6449371b875b7aa74c762ab14caa6d05aea38e5693950c->leave($__internal_b0224169fdcfc5ce4b6449371b875b7aa74c762ab14caa6d05aea38e5693950c_prof);

        
        $__internal_211b9053a90147ac902b23d54cef7af36605b711029baf16b1b31b467f86cc4c->leave($__internal_211b9053a90147ac902b23d54cef7af36605b711029baf16b1b31b467f86cc4c_prof);

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
