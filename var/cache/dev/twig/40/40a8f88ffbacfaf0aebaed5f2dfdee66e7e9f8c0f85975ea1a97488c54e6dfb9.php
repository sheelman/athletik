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
        $__internal_d3e4df146f8303bc54f70c88b26050259408d95ffedbcb6d4cf98b00de98642f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3e4df146f8303bc54f70c88b26050259408d95ffedbcb6d4cf98b00de98642f->enter($__internal_d3e4df146f8303bc54f70c88b26050259408d95ffedbcb6d4cf98b00de98642f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_5f607bd1e27f986fbc1b2fbdc1acb945a90d8eb5884a7e9a5945ae519e47de43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f607bd1e27f986fbc1b2fbdc1acb945a90d8eb5884a7e9a5945ae519e47de43->enter($__internal_5f607bd1e27f986fbc1b2fbdc1acb945a90d8eb5884a7e9a5945ae519e47de43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3e4df146f8303bc54f70c88b26050259408d95ffedbcb6d4cf98b00de98642f->leave($__internal_d3e4df146f8303bc54f70c88b26050259408d95ffedbcb6d4cf98b00de98642f_prof);

        
        $__internal_5f607bd1e27f986fbc1b2fbdc1acb945a90d8eb5884a7e9a5945ae519e47de43->leave($__internal_5f607bd1e27f986fbc1b2fbdc1acb945a90d8eb5884a7e9a5945ae519e47de43_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8df95e65c072a3e71c4923e089a69468a82a88dbdbfa6d98c698a5a20ba30423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8df95e65c072a3e71c4923e089a69468a82a88dbdbfa6d98c698a5a20ba30423->enter($__internal_8df95e65c072a3e71c4923e089a69468a82a88dbdbfa6d98c698a5a20ba30423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_609824d639825b848f153f6d7b49abc7b4f25af96df71e51c29d032b356242f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_609824d639825b848f153f6d7b49abc7b4f25af96df71e51c29d032b356242f3->enter($__internal_609824d639825b848f153f6d7b49abc7b4f25af96df71e51c29d032b356242f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_609824d639825b848f153f6d7b49abc7b4f25af96df71e51c29d032b356242f3->leave($__internal_609824d639825b848f153f6d7b49abc7b4f25af96df71e51c29d032b356242f3_prof);

        
        $__internal_8df95e65c072a3e71c4923e089a69468a82a88dbdbfa6d98c698a5a20ba30423->leave($__internal_8df95e65c072a3e71c4923e089a69468a82a88dbdbfa6d98c698a5a20ba30423_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_41bde18b16d5cecddda537029d8c3aeb712c45900af93cec37597bb8fd3ce33b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41bde18b16d5cecddda537029d8c3aeb712c45900af93cec37597bb8fd3ce33b->enter($__internal_41bde18b16d5cecddda537029d8c3aeb712c45900af93cec37597bb8fd3ce33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6a8203bfae904b9e37aac97fbfed79299b5bae5c499847aa778b24fc7d02cfd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a8203bfae904b9e37aac97fbfed79299b5bae5c499847aa778b24fc7d02cfd8->enter($__internal_6a8203bfae904b9e37aac97fbfed79299b5bae5c499847aa778b24fc7d02cfd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_6a8203bfae904b9e37aac97fbfed79299b5bae5c499847aa778b24fc7d02cfd8->leave($__internal_6a8203bfae904b9e37aac97fbfed79299b5bae5c499847aa778b24fc7d02cfd8_prof);

        
        $__internal_41bde18b16d5cecddda537029d8c3aeb712c45900af93cec37597bb8fd3ce33b->leave($__internal_41bde18b16d5cecddda537029d8c3aeb712c45900af93cec37597bb8fd3ce33b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6907a937dfe28a50bda06ba7ecb733618132a31432c16457c3e3b39632b7c526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6907a937dfe28a50bda06ba7ecb733618132a31432c16457c3e3b39632b7c526->enter($__internal_6907a937dfe28a50bda06ba7ecb733618132a31432c16457c3e3b39632b7c526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_287923459e128196e581967f70d94da9c645cfe7cf11d7a7e09fe8e043543e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_287923459e128196e581967f70d94da9c645cfe7cf11d7a7e09fe8e043543e43->enter($__internal_287923459e128196e581967f70d94da9c645cfe7cf11d7a7e09fe8e043543e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_287923459e128196e581967f70d94da9c645cfe7cf11d7a7e09fe8e043543e43->leave($__internal_287923459e128196e581967f70d94da9c645cfe7cf11d7a7e09fe8e043543e43_prof);

        
        $__internal_6907a937dfe28a50bda06ba7ecb733618132a31432c16457c3e3b39632b7c526->leave($__internal_6907a937dfe28a50bda06ba7ecb733618132a31432c16457c3e3b39632b7c526_prof);

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
