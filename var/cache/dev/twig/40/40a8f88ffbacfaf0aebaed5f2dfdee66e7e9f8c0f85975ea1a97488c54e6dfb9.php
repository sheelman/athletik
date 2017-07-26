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
        $__internal_b8b2be6003072dcf8bf6b74a2f33544f555a96c033b22a49553f123d256b954c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8b2be6003072dcf8bf6b74a2f33544f555a96c033b22a49553f123d256b954c->enter($__internal_b8b2be6003072dcf8bf6b74a2f33544f555a96c033b22a49553f123d256b954c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_05c80a84b19cc13f98a1d0b81c17d5db7f60adc7f2419e5fefffa2958c11a71d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c80a84b19cc13f98a1d0b81c17d5db7f60adc7f2419e5fefffa2958c11a71d->enter($__internal_05c80a84b19cc13f98a1d0b81c17d5db7f60adc7f2419e5fefffa2958c11a71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8b2be6003072dcf8bf6b74a2f33544f555a96c033b22a49553f123d256b954c->leave($__internal_b8b2be6003072dcf8bf6b74a2f33544f555a96c033b22a49553f123d256b954c_prof);

        
        $__internal_05c80a84b19cc13f98a1d0b81c17d5db7f60adc7f2419e5fefffa2958c11a71d->leave($__internal_05c80a84b19cc13f98a1d0b81c17d5db7f60adc7f2419e5fefffa2958c11a71d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5864a8722c521d161ca1d87af86c05858368c1eccac143502e28a4a515e65d26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5864a8722c521d161ca1d87af86c05858368c1eccac143502e28a4a515e65d26->enter($__internal_5864a8722c521d161ca1d87af86c05858368c1eccac143502e28a4a515e65d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5d57248536f3a2e93af818af689c04da5f2ec3b8d2d1b598afd06afad465ea87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d57248536f3a2e93af818af689c04da5f2ec3b8d2d1b598afd06afad465ea87->enter($__internal_5d57248536f3a2e93af818af689c04da5f2ec3b8d2d1b598afd06afad465ea87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5d57248536f3a2e93af818af689c04da5f2ec3b8d2d1b598afd06afad465ea87->leave($__internal_5d57248536f3a2e93af818af689c04da5f2ec3b8d2d1b598afd06afad465ea87_prof);

        
        $__internal_5864a8722c521d161ca1d87af86c05858368c1eccac143502e28a4a515e65d26->leave($__internal_5864a8722c521d161ca1d87af86c05858368c1eccac143502e28a4a515e65d26_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e86348ffa515845857725fae96a3cbd95bc2e10b274bd44cbe5c7ab4bf08a69e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e86348ffa515845857725fae96a3cbd95bc2e10b274bd44cbe5c7ab4bf08a69e->enter($__internal_e86348ffa515845857725fae96a3cbd95bc2e10b274bd44cbe5c7ab4bf08a69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_565878f5ef2d84ee759262929811580e6335251e1a4bbc6a8633b0edd9ab17d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_565878f5ef2d84ee759262929811580e6335251e1a4bbc6a8633b0edd9ab17d2->enter($__internal_565878f5ef2d84ee759262929811580e6335251e1a4bbc6a8633b0edd9ab17d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_565878f5ef2d84ee759262929811580e6335251e1a4bbc6a8633b0edd9ab17d2->leave($__internal_565878f5ef2d84ee759262929811580e6335251e1a4bbc6a8633b0edd9ab17d2_prof);

        
        $__internal_e86348ffa515845857725fae96a3cbd95bc2e10b274bd44cbe5c7ab4bf08a69e->leave($__internal_e86348ffa515845857725fae96a3cbd95bc2e10b274bd44cbe5c7ab4bf08a69e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e7b0789f2a807ac5df4e31bcc91c692b6bf6cd8b809ab343dcf2cdc87e823ae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7b0789f2a807ac5df4e31bcc91c692b6bf6cd8b809ab343dcf2cdc87e823ae3->enter($__internal_e7b0789f2a807ac5df4e31bcc91c692b6bf6cd8b809ab343dcf2cdc87e823ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_81bb44acd5527d004e4625b92c6d789c6686535ff7e3ed5afdc3d15eec2325cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81bb44acd5527d004e4625b92c6d789c6686535ff7e3ed5afdc3d15eec2325cb->enter($__internal_81bb44acd5527d004e4625b92c6d789c6686535ff7e3ed5afdc3d15eec2325cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_81bb44acd5527d004e4625b92c6d789c6686535ff7e3ed5afdc3d15eec2325cb->leave($__internal_81bb44acd5527d004e4625b92c6d789c6686535ff7e3ed5afdc3d15eec2325cb_prof);

        
        $__internal_e7b0789f2a807ac5df4e31bcc91c692b6bf6cd8b809ab343dcf2cdc87e823ae3->leave($__internal_e7b0789f2a807ac5df4e31bcc91c692b6bf6cd8b809ab343dcf2cdc87e823ae3_prof);

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
