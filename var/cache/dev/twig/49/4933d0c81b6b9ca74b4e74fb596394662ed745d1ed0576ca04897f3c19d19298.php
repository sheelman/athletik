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
        $__internal_95e5fc85818f23e9c551e95142a7d048dc8fed8087b1bb5fd984f103c9f9e8a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95e5fc85818f23e9c551e95142a7d048dc8fed8087b1bb5fd984f103c9f9e8a2->enter($__internal_95e5fc85818f23e9c551e95142a7d048dc8fed8087b1bb5fd984f103c9f9e8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_b502693d383211adfb50dd174d79ee582924c08b32e18afff9b788b66e893124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b502693d383211adfb50dd174d79ee582924c08b32e18afff9b788b66e893124->enter($__internal_b502693d383211adfb50dd174d79ee582924c08b32e18afff9b788b66e893124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95e5fc85818f23e9c551e95142a7d048dc8fed8087b1bb5fd984f103c9f9e8a2->leave($__internal_95e5fc85818f23e9c551e95142a7d048dc8fed8087b1bb5fd984f103c9f9e8a2_prof);

        
        $__internal_b502693d383211adfb50dd174d79ee582924c08b32e18afff9b788b66e893124->leave($__internal_b502693d383211adfb50dd174d79ee582924c08b32e18afff9b788b66e893124_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a9da166de344d22b31dd37499a036a12dedfe96bb1bb623584d579ea84636e50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9da166de344d22b31dd37499a036a12dedfe96bb1bb623584d579ea84636e50->enter($__internal_a9da166de344d22b31dd37499a036a12dedfe96bb1bb623584d579ea84636e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5c1d43926ba2736c0ccb58ecaa772b59d022ff64bac0701dfad264a511824e44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c1d43926ba2736c0ccb58ecaa772b59d022ff64bac0701dfad264a511824e44->enter($__internal_5c1d43926ba2736c0ccb58ecaa772b59d022ff64bac0701dfad264a511824e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_5c1d43926ba2736c0ccb58ecaa772b59d022ff64bac0701dfad264a511824e44->leave($__internal_5c1d43926ba2736c0ccb58ecaa772b59d022ff64bac0701dfad264a511824e44_prof);

        
        $__internal_a9da166de344d22b31dd37499a036a12dedfe96bb1bb623584d579ea84636e50->leave($__internal_a9da166de344d22b31dd37499a036a12dedfe96bb1bb623584d579ea84636e50_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3164e07e8834018ce694085ec54c4d95c1cbe4e83a010a7447c87fbbc1b4a00b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3164e07e8834018ce694085ec54c4d95c1cbe4e83a010a7447c87fbbc1b4a00b->enter($__internal_3164e07e8834018ce694085ec54c4d95c1cbe4e83a010a7447c87fbbc1b4a00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89eaaf9950778865c0020eff7f4538d69bf0ac4bf80a2caef94b178f029765da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89eaaf9950778865c0020eff7f4538d69bf0ac4bf80a2caef94b178f029765da->enter($__internal_89eaaf9950778865c0020eff7f4538d69bf0ac4bf80a2caef94b178f029765da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_89eaaf9950778865c0020eff7f4538d69bf0ac4bf80a2caef94b178f029765da->leave($__internal_89eaaf9950778865c0020eff7f4538d69bf0ac4bf80a2caef94b178f029765da_prof);

        
        $__internal_3164e07e8834018ce694085ec54c4d95c1cbe4e83a010a7447c87fbbc1b4a00b->leave($__internal_3164e07e8834018ce694085ec54c4d95c1cbe4e83a010a7447c87fbbc1b4a00b_prof);

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
