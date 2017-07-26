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
        $__internal_3376b8b55b66bc6ef64b1f9b8ca6bc3b9ada3aed721fda09a056eface1f8b429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3376b8b55b66bc6ef64b1f9b8ca6bc3b9ada3aed721fda09a056eface1f8b429->enter($__internal_3376b8b55b66bc6ef64b1f9b8ca6bc3b9ada3aed721fda09a056eface1f8b429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_2dad0d08822561fed2f0b78aeefdad55e9f09d6026e565b40a736607c9ebaf69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dad0d08822561fed2f0b78aeefdad55e9f09d6026e565b40a736607c9ebaf69->enter($__internal_2dad0d08822561fed2f0b78aeefdad55e9f09d6026e565b40a736607c9ebaf69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3376b8b55b66bc6ef64b1f9b8ca6bc3b9ada3aed721fda09a056eface1f8b429->leave($__internal_3376b8b55b66bc6ef64b1f9b8ca6bc3b9ada3aed721fda09a056eface1f8b429_prof);

        
        $__internal_2dad0d08822561fed2f0b78aeefdad55e9f09d6026e565b40a736607c9ebaf69->leave($__internal_2dad0d08822561fed2f0b78aeefdad55e9f09d6026e565b40a736607c9ebaf69_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e9fa9de38b44d603638fbac1698cb19a6d1f88f862a63c350358401cb9ceca26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9fa9de38b44d603638fbac1698cb19a6d1f88f862a63c350358401cb9ceca26->enter($__internal_e9fa9de38b44d603638fbac1698cb19a6d1f88f862a63c350358401cb9ceca26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3c2f9652059d5cdbc54ee642ad97e192d54772ede74caa034b8712a7ad183301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c2f9652059d5cdbc54ee642ad97e192d54772ede74caa034b8712a7ad183301->enter($__internal_3c2f9652059d5cdbc54ee642ad97e192d54772ede74caa034b8712a7ad183301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_3c2f9652059d5cdbc54ee642ad97e192d54772ede74caa034b8712a7ad183301->leave($__internal_3c2f9652059d5cdbc54ee642ad97e192d54772ede74caa034b8712a7ad183301_prof);

        
        $__internal_e9fa9de38b44d603638fbac1698cb19a6d1f88f862a63c350358401cb9ceca26->leave($__internal_e9fa9de38b44d603638fbac1698cb19a6d1f88f862a63c350358401cb9ceca26_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fdb7294d322088a7a4272768d387d41768d4cd799e5330951623026cb991999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fdb7294d322088a7a4272768d387d41768d4cd799e5330951623026cb991999->enter($__internal_6fdb7294d322088a7a4272768d387d41768d4cd799e5330951623026cb991999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8ea30814a36cd89ebfb249d7e97d513497a9c3cc618b9272b95f27c5ca63f95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ea30814a36cd89ebfb249d7e97d513497a9c3cc618b9272b95f27c5ca63f95->enter($__internal_b8ea30814a36cd89ebfb249d7e97d513497a9c3cc618b9272b95f27c5ca63f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b8ea30814a36cd89ebfb249d7e97d513497a9c3cc618b9272b95f27c5ca63f95->leave($__internal_b8ea30814a36cd89ebfb249d7e97d513497a9c3cc618b9272b95f27c5ca63f95_prof);

        
        $__internal_6fdb7294d322088a7a4272768d387d41768d4cd799e5330951623026cb991999->leave($__internal_6fdb7294d322088a7a4272768d387d41768d4cd799e5330951623026cb991999_prof);

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
