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
        $__internal_1347d30e758239a3b4f1fbefdda27935875d1e5731a511998734d69dc0032f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1347d30e758239a3b4f1fbefdda27935875d1e5731a511998734d69dc0032f4e->enter($__internal_1347d30e758239a3b4f1fbefdda27935875d1e5731a511998734d69dc0032f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_60bb4a74065a603f890b9d7f6085fb9c198b02ec844a1e673b67c8952b2fd969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60bb4a74065a603f890b9d7f6085fb9c198b02ec844a1e673b67c8952b2fd969->enter($__internal_60bb4a74065a603f890b9d7f6085fb9c198b02ec844a1e673b67c8952b2fd969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1347d30e758239a3b4f1fbefdda27935875d1e5731a511998734d69dc0032f4e->leave($__internal_1347d30e758239a3b4f1fbefdda27935875d1e5731a511998734d69dc0032f4e_prof);

        
        $__internal_60bb4a74065a603f890b9d7f6085fb9c198b02ec844a1e673b67c8952b2fd969->leave($__internal_60bb4a74065a603f890b9d7f6085fb9c198b02ec844a1e673b67c8952b2fd969_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3f61a62fd717375f18c6d0b124ea46cce078c9abd6193f14b84c89b6230ff0db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f61a62fd717375f18c6d0b124ea46cce078c9abd6193f14b84c89b6230ff0db->enter($__internal_3f61a62fd717375f18c6d0b124ea46cce078c9abd6193f14b84c89b6230ff0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c7a3ddbbb7336f849011686e3442c4845280d76e2790beda87ad7801dda026a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7a3ddbbb7336f849011686e3442c4845280d76e2790beda87ad7801dda026a0->enter($__internal_c7a3ddbbb7336f849011686e3442c4845280d76e2790beda87ad7801dda026a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c7a3ddbbb7336f849011686e3442c4845280d76e2790beda87ad7801dda026a0->leave($__internal_c7a3ddbbb7336f849011686e3442c4845280d76e2790beda87ad7801dda026a0_prof);

        
        $__internal_3f61a62fd717375f18c6d0b124ea46cce078c9abd6193f14b84c89b6230ff0db->leave($__internal_3f61a62fd717375f18c6d0b124ea46cce078c9abd6193f14b84c89b6230ff0db_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_974b89dfa5c3fad4e4e318a3f3932de298d53b42efe19ffd47bf0a6058b6b50c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_974b89dfa5c3fad4e4e318a3f3932de298d53b42efe19ffd47bf0a6058b6b50c->enter($__internal_974b89dfa5c3fad4e4e318a3f3932de298d53b42efe19ffd47bf0a6058b6b50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1fb7977c074e05d4edc99d26d6373e3e2b4ddbbe34936b4fdbc01125aa8fb2db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb7977c074e05d4edc99d26d6373e3e2b4ddbbe34936b4fdbc01125aa8fb2db->enter($__internal_1fb7977c074e05d4edc99d26d6373e3e2b4ddbbe34936b4fdbc01125aa8fb2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1fb7977c074e05d4edc99d26d6373e3e2b4ddbbe34936b4fdbc01125aa8fb2db->leave($__internal_1fb7977c074e05d4edc99d26d6373e3e2b4ddbbe34936b4fdbc01125aa8fb2db_prof);

        
        $__internal_974b89dfa5c3fad4e4e318a3f3932de298d53b42efe19ffd47bf0a6058b6b50c->leave($__internal_974b89dfa5c3fad4e4e318a3f3932de298d53b42efe19ffd47bf0a6058b6b50c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_59fe72cf82e50e678a7c3a901f07ead482b4d83a61a023bd4d9455adcccdda4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59fe72cf82e50e678a7c3a901f07ead482b4d83a61a023bd4d9455adcccdda4b->enter($__internal_59fe72cf82e50e678a7c3a901f07ead482b4d83a61a023bd4d9455adcccdda4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c3ac01907bfb745859d19322a3c2df96b5461a9afb7f6acb076f083fb150c797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ac01907bfb745859d19322a3c2df96b5461a9afb7f6acb076f083fb150c797->enter($__internal_c3ac01907bfb745859d19322a3c2df96b5461a9afb7f6acb076f083fb150c797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c3ac01907bfb745859d19322a3c2df96b5461a9afb7f6acb076f083fb150c797->leave($__internal_c3ac01907bfb745859d19322a3c2df96b5461a9afb7f6acb076f083fb150c797_prof);

        
        $__internal_59fe72cf82e50e678a7c3a901f07ead482b4d83a61a023bd4d9455adcccdda4b->leave($__internal_59fe72cf82e50e678a7c3a901f07ead482b4d83a61a023bd4d9455adcccdda4b_prof);

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
