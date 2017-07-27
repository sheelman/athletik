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
        $__internal_95d420ad696113f4d91e293abed6c30cb461223395ab6cc7acc0db422ce24cbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95d420ad696113f4d91e293abed6c30cb461223395ab6cc7acc0db422ce24cbb->enter($__internal_95d420ad696113f4d91e293abed6c30cb461223395ab6cc7acc0db422ce24cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_11b7888c9085b8eca11c60cf6d1ac269e48d8e8ca09e6151694e1b2e1670f3c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11b7888c9085b8eca11c60cf6d1ac269e48d8e8ca09e6151694e1b2e1670f3c7->enter($__internal_11b7888c9085b8eca11c60cf6d1ac269e48d8e8ca09e6151694e1b2e1670f3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95d420ad696113f4d91e293abed6c30cb461223395ab6cc7acc0db422ce24cbb->leave($__internal_95d420ad696113f4d91e293abed6c30cb461223395ab6cc7acc0db422ce24cbb_prof);

        
        $__internal_11b7888c9085b8eca11c60cf6d1ac269e48d8e8ca09e6151694e1b2e1670f3c7->leave($__internal_11b7888c9085b8eca11c60cf6d1ac269e48d8e8ca09e6151694e1b2e1670f3c7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fb189a9a06038f87d0fffaf3a1ef3041d00134773416b7633b1191d00e253661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb189a9a06038f87d0fffaf3a1ef3041d00134773416b7633b1191d00e253661->enter($__internal_fb189a9a06038f87d0fffaf3a1ef3041d00134773416b7633b1191d00e253661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fd07cf5ee1d2e3437ec1538b9e04b1f1292895adc9ef2723ac467706d925bb23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd07cf5ee1d2e3437ec1538b9e04b1f1292895adc9ef2723ac467706d925bb23->enter($__internal_fd07cf5ee1d2e3437ec1538b9e04b1f1292895adc9ef2723ac467706d925bb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_fd07cf5ee1d2e3437ec1538b9e04b1f1292895adc9ef2723ac467706d925bb23->leave($__internal_fd07cf5ee1d2e3437ec1538b9e04b1f1292895adc9ef2723ac467706d925bb23_prof);

        
        $__internal_fb189a9a06038f87d0fffaf3a1ef3041d00134773416b7633b1191d00e253661->leave($__internal_fb189a9a06038f87d0fffaf3a1ef3041d00134773416b7633b1191d00e253661_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a2a5cec03003f968a1ce2e3362c4609a836ba7246a9fd304cc82486253ccc13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a2a5cec03003f968a1ce2e3362c4609a836ba7246a9fd304cc82486253ccc13->enter($__internal_4a2a5cec03003f968a1ce2e3362c4609a836ba7246a9fd304cc82486253ccc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_40b1d03bc52074e60333e1787a514d318732f6f03dc090e8ae2c16837098933e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40b1d03bc52074e60333e1787a514d318732f6f03dc090e8ae2c16837098933e->enter($__internal_40b1d03bc52074e60333e1787a514d318732f6f03dc090e8ae2c16837098933e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_40b1d03bc52074e60333e1787a514d318732f6f03dc090e8ae2c16837098933e->leave($__internal_40b1d03bc52074e60333e1787a514d318732f6f03dc090e8ae2c16837098933e_prof);

        
        $__internal_4a2a5cec03003f968a1ce2e3362c4609a836ba7246a9fd304cc82486253ccc13->leave($__internal_4a2a5cec03003f968a1ce2e3362c4609a836ba7246a9fd304cc82486253ccc13_prof);

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
