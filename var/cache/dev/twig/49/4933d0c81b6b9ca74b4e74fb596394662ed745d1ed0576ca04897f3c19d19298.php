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
        $__internal_b478467587457f17601691cc49cd189253c465419d555b3b9ab55cbdbaeb9a09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b478467587457f17601691cc49cd189253c465419d555b3b9ab55cbdbaeb9a09->enter($__internal_b478467587457f17601691cc49cd189253c465419d555b3b9ab55cbdbaeb9a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_9f82cd3270208a9c50b531512619d1231069b4ded78310a7480f81a401e289a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f82cd3270208a9c50b531512619d1231069b4ded78310a7480f81a401e289a2->enter($__internal_9f82cd3270208a9c50b531512619d1231069b4ded78310a7480f81a401e289a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b478467587457f17601691cc49cd189253c465419d555b3b9ab55cbdbaeb9a09->leave($__internal_b478467587457f17601691cc49cd189253c465419d555b3b9ab55cbdbaeb9a09_prof);

        
        $__internal_9f82cd3270208a9c50b531512619d1231069b4ded78310a7480f81a401e289a2->leave($__internal_9f82cd3270208a9c50b531512619d1231069b4ded78310a7480f81a401e289a2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_26f6c906018fed1ad48df76f1a69b9341b4f94050821f81d4b4d2b8161a9767b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26f6c906018fed1ad48df76f1a69b9341b4f94050821f81d4b4d2b8161a9767b->enter($__internal_26f6c906018fed1ad48df76f1a69b9341b4f94050821f81d4b4d2b8161a9767b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2e1a3818d1bc5682c3c41d7c86ee91877104d78e3f39dc49efa19093eabe92fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e1a3818d1bc5682c3c41d7c86ee91877104d78e3f39dc49efa19093eabe92fd->enter($__internal_2e1a3818d1bc5682c3c41d7c86ee91877104d78e3f39dc49efa19093eabe92fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_2e1a3818d1bc5682c3c41d7c86ee91877104d78e3f39dc49efa19093eabe92fd->leave($__internal_2e1a3818d1bc5682c3c41d7c86ee91877104d78e3f39dc49efa19093eabe92fd_prof);

        
        $__internal_26f6c906018fed1ad48df76f1a69b9341b4f94050821f81d4b4d2b8161a9767b->leave($__internal_26f6c906018fed1ad48df76f1a69b9341b4f94050821f81d4b4d2b8161a9767b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d98c9c6e68f446a3ab40f6c0671f5d76e241c748db5bd94bd1c18c926cdc4008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d98c9c6e68f446a3ab40f6c0671f5d76e241c748db5bd94bd1c18c926cdc4008->enter($__internal_d98c9c6e68f446a3ab40f6c0671f5d76e241c748db5bd94bd1c18c926cdc4008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39195eefc66e40bcbb29158d589fd4964be5f4dc980f4338102db7f17f4fcf4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39195eefc66e40bcbb29158d589fd4964be5f4dc980f4338102db7f17f4fcf4a->enter($__internal_39195eefc66e40bcbb29158d589fd4964be5f4dc980f4338102db7f17f4fcf4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_39195eefc66e40bcbb29158d589fd4964be5f4dc980f4338102db7f17f4fcf4a->leave($__internal_39195eefc66e40bcbb29158d589fd4964be5f4dc980f4338102db7f17f4fcf4a_prof);

        
        $__internal_d98c9c6e68f446a3ab40f6c0671f5d76e241c748db5bd94bd1c18c926cdc4008->leave($__internal_d98c9c6e68f446a3ab40f6c0671f5d76e241c748db5bd94bd1c18c926cdc4008_prof);

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
