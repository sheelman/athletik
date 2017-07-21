<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c73a916adef90294612b3e613cdcdd32c28385911d292c192a5857bfa5acb0c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d2d0693eb5fe2bf8f1ecbae958007bbd35b57c63f8551c0e4a324acd82087f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d2d0693eb5fe2bf8f1ecbae958007bbd35b57c63f8551c0e4a324acd82087f0->enter($__internal_7d2d0693eb5fe2bf8f1ecbae958007bbd35b57c63f8551c0e4a324acd82087f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_40b3e1781865dcf1ff2335faffed7d37808a8078db37fd7d2615511ae3a87b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40b3e1781865dcf1ff2335faffed7d37808a8078db37fd7d2615511ae3a87b98->enter($__internal_40b3e1781865dcf1ff2335faffed7d37808a8078db37fd7d2615511ae3a87b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d2d0693eb5fe2bf8f1ecbae958007bbd35b57c63f8551c0e4a324acd82087f0->leave($__internal_7d2d0693eb5fe2bf8f1ecbae958007bbd35b57c63f8551c0e4a324acd82087f0_prof);

        
        $__internal_40b3e1781865dcf1ff2335faffed7d37808a8078db37fd7d2615511ae3a87b98->leave($__internal_40b3e1781865dcf1ff2335faffed7d37808a8078db37fd7d2615511ae3a87b98_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_43c80b0aba2b135dce9e875b0397f2b7925fc397dea87a3097adbbd3724eac87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c80b0aba2b135dce9e875b0397f2b7925fc397dea87a3097adbbd3724eac87->enter($__internal_43c80b0aba2b135dce9e875b0397f2b7925fc397dea87a3097adbbd3724eac87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2c375011fed453237e21fb1e5ced08a9d3b3704d63c63e90d67d5570129d579d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c375011fed453237e21fb1e5ced08a9d3b3704d63c63e90d67d5570129d579d->enter($__internal_2c375011fed453237e21fb1e5ced08a9d3b3704d63c63e90d67d5570129d579d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_2c375011fed453237e21fb1e5ced08a9d3b3704d63c63e90d67d5570129d579d->leave($__internal_2c375011fed453237e21fb1e5ced08a9d3b3704d63c63e90d67d5570129d579d_prof);

        
        $__internal_43c80b0aba2b135dce9e875b0397f2b7925fc397dea87a3097adbbd3724eac87->leave($__internal_43c80b0aba2b135dce9e875b0397f2b7925fc397dea87a3097adbbd3724eac87_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_53b4e250d0dab89af944a969acddc150b41bb8cf9fb319533f499dd09d7a6503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b4e250d0dab89af944a969acddc150b41bb8cf9fb319533f499dd09d7a6503->enter($__internal_53b4e250d0dab89af944a969acddc150b41bb8cf9fb319533f499dd09d7a6503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4de36945f5bf54416d9cf530480e1ef317cd6606296150854bf8e94a88d2bcbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de36945f5bf54416d9cf530480e1ef317cd6606296150854bf8e94a88d2bcbe->enter($__internal_4de36945f5bf54416d9cf530480e1ef317cd6606296150854bf8e94a88d2bcbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_4de36945f5bf54416d9cf530480e1ef317cd6606296150854bf8e94a88d2bcbe->leave($__internal_4de36945f5bf54416d9cf530480e1ef317cd6606296150854bf8e94a88d2bcbe_prof);

        
        $__internal_53b4e250d0dab89af944a969acddc150b41bb8cf9fb319533f499dd09d7a6503->leave($__internal_53b4e250d0dab89af944a969acddc150b41bb8cf9fb319533f499dd09d7a6503_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
