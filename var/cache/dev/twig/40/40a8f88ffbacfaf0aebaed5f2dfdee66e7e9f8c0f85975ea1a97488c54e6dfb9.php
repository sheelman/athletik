<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_32fdce28d902822cdf120bbeb45dfa198ac5b6f9bb3594e6d1849b1f576cda07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32fdce28d902822cdf120bbeb45dfa198ac5b6f9bb3594e6d1849b1f576cda07->enter($__internal_32fdce28d902822cdf120bbeb45dfa198ac5b6f9bb3594e6d1849b1f576cda07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_39c081d37a5c3ece1f083806e734b7757ed3b67f624870bcb1a54be0105830c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c081d37a5c3ece1f083806e734b7757ed3b67f624870bcb1a54be0105830c0->enter($__internal_39c081d37a5c3ece1f083806e734b7757ed3b67f624870bcb1a54be0105830c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32fdce28d902822cdf120bbeb45dfa198ac5b6f9bb3594e6d1849b1f576cda07->leave($__internal_32fdce28d902822cdf120bbeb45dfa198ac5b6f9bb3594e6d1849b1f576cda07_prof);

        
        $__internal_39c081d37a5c3ece1f083806e734b7757ed3b67f624870bcb1a54be0105830c0->leave($__internal_39c081d37a5c3ece1f083806e734b7757ed3b67f624870bcb1a54be0105830c0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9f3521ea4ef8d3846ec3b33aaaf7cbcba04e6ebbad34cd4647bbba76b0eb5be0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f3521ea4ef8d3846ec3b33aaaf7cbcba04e6ebbad34cd4647bbba76b0eb5be0->enter($__internal_9f3521ea4ef8d3846ec3b33aaaf7cbcba04e6ebbad34cd4647bbba76b0eb5be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_366cd6fcb5cbb6fb5cd2aea0925c95a631f3e09637ad144f45aa18fc15e27018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366cd6fcb5cbb6fb5cd2aea0925c95a631f3e09637ad144f45aa18fc15e27018->enter($__internal_366cd6fcb5cbb6fb5cd2aea0925c95a631f3e09637ad144f45aa18fc15e27018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_366cd6fcb5cbb6fb5cd2aea0925c95a631f3e09637ad144f45aa18fc15e27018->leave($__internal_366cd6fcb5cbb6fb5cd2aea0925c95a631f3e09637ad144f45aa18fc15e27018_prof);

        
        $__internal_9f3521ea4ef8d3846ec3b33aaaf7cbcba04e6ebbad34cd4647bbba76b0eb5be0->leave($__internal_9f3521ea4ef8d3846ec3b33aaaf7cbcba04e6ebbad34cd4647bbba76b0eb5be0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ac22aac8869062c673630b2d02e26975b0a99d20f2c355e0fa21ab825f1175ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac22aac8869062c673630b2d02e26975b0a99d20f2c355e0fa21ab825f1175ef->enter($__internal_ac22aac8869062c673630b2d02e26975b0a99d20f2c355e0fa21ab825f1175ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_68645fea54607e5ec47089e911860293f05d8533b6b81686709ba3ee932eb012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68645fea54607e5ec47089e911860293f05d8533b6b81686709ba3ee932eb012->enter($__internal_68645fea54607e5ec47089e911860293f05d8533b6b81686709ba3ee932eb012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_68645fea54607e5ec47089e911860293f05d8533b6b81686709ba3ee932eb012->leave($__internal_68645fea54607e5ec47089e911860293f05d8533b6b81686709ba3ee932eb012_prof);

        
        $__internal_ac22aac8869062c673630b2d02e26975b0a99d20f2c355e0fa21ab825f1175ef->leave($__internal_ac22aac8869062c673630b2d02e26975b0a99d20f2c355e0fa21ab825f1175ef_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6d91c6fb857422c142b1cb7fbed6fb2fea7a04b8026315a236832487122cc90c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d91c6fb857422c142b1cb7fbed6fb2fea7a04b8026315a236832487122cc90c->enter($__internal_6d91c6fb857422c142b1cb7fbed6fb2fea7a04b8026315a236832487122cc90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f5f1d65c833d6a19b255299afc00422fdad4129059eb17d6edc112df518ad0a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f1d65c833d6a19b255299afc00422fdad4129059eb17d6edc112df518ad0a4->enter($__internal_f5f1d65c833d6a19b255299afc00422fdad4129059eb17d6edc112df518ad0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f5f1d65c833d6a19b255299afc00422fdad4129059eb17d6edc112df518ad0a4->leave($__internal_f5f1d65c833d6a19b255299afc00422fdad4129059eb17d6edc112df518ad0a4_prof);

        
        $__internal_6d91c6fb857422c142b1cb7fbed6fb2fea7a04b8026315a236832487122cc90c->leave($__internal_6d91c6fb857422c142b1cb7fbed6fb2fea7a04b8026315a236832487122cc90c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
