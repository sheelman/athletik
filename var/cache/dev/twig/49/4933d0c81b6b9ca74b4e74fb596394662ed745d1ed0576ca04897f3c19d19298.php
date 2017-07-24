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
        $__internal_44dd6f7311ffe3cb58b88c88848030526d79aee93feb186b4ce3297df2c01e72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44dd6f7311ffe3cb58b88c88848030526d79aee93feb186b4ce3297df2c01e72->enter($__internal_44dd6f7311ffe3cb58b88c88848030526d79aee93feb186b4ce3297df2c01e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_d98cd02b6071f04f934c794ac8729fbe20429547653436abf4f20e63dd6d5009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98cd02b6071f04f934c794ac8729fbe20429547653436abf4f20e63dd6d5009->enter($__internal_d98cd02b6071f04f934c794ac8729fbe20429547653436abf4f20e63dd6d5009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44dd6f7311ffe3cb58b88c88848030526d79aee93feb186b4ce3297df2c01e72->leave($__internal_44dd6f7311ffe3cb58b88c88848030526d79aee93feb186b4ce3297df2c01e72_prof);

        
        $__internal_d98cd02b6071f04f934c794ac8729fbe20429547653436abf4f20e63dd6d5009->leave($__internal_d98cd02b6071f04f934c794ac8729fbe20429547653436abf4f20e63dd6d5009_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_500b56d04ba13079c0087fa3cec7080be3a0a03773df322347f274aee46ccbdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_500b56d04ba13079c0087fa3cec7080be3a0a03773df322347f274aee46ccbdd->enter($__internal_500b56d04ba13079c0087fa3cec7080be3a0a03773df322347f274aee46ccbdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_45e99138d79eac84acb970b255ee60439183cca42e21dba93cbce4d8e9c29539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45e99138d79eac84acb970b255ee60439183cca42e21dba93cbce4d8e9c29539->enter($__internal_45e99138d79eac84acb970b255ee60439183cca42e21dba93cbce4d8e9c29539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_45e99138d79eac84acb970b255ee60439183cca42e21dba93cbce4d8e9c29539->leave($__internal_45e99138d79eac84acb970b255ee60439183cca42e21dba93cbce4d8e9c29539_prof);

        
        $__internal_500b56d04ba13079c0087fa3cec7080be3a0a03773df322347f274aee46ccbdd->leave($__internal_500b56d04ba13079c0087fa3cec7080be3a0a03773df322347f274aee46ccbdd_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_42ef6062df9daeb233e30046865f194d994fda24c735a012703125d96efba2bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42ef6062df9daeb233e30046865f194d994fda24c735a012703125d96efba2bd->enter($__internal_42ef6062df9daeb233e30046865f194d994fda24c735a012703125d96efba2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f3a7d897c1f0a8df16d658334f7a59a60f9de8c3c62106a9f18d380d1ba2cac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a7d897c1f0a8df16d658334f7a59a60f9de8c3c62106a9f18d380d1ba2cac1->enter($__internal_f3a7d897c1f0a8df16d658334f7a59a60f9de8c3c62106a9f18d380d1ba2cac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f3a7d897c1f0a8df16d658334f7a59a60f9de8c3c62106a9f18d380d1ba2cac1->leave($__internal_f3a7d897c1f0a8df16d658334f7a59a60f9de8c3c62106a9f18d380d1ba2cac1_prof);

        
        $__internal_42ef6062df9daeb233e30046865f194d994fda24c735a012703125d96efba2bd->leave($__internal_42ef6062df9daeb233e30046865f194d994fda24c735a012703125d96efba2bd_prof);

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
