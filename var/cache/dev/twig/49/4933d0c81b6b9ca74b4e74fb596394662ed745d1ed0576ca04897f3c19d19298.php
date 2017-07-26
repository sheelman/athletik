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
        $__internal_2b7e2308eb706c45ad1249c20cce83a7852ecd147c6b2769e5f81805c294e82e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b7e2308eb706c45ad1249c20cce83a7852ecd147c6b2769e5f81805c294e82e->enter($__internal_2b7e2308eb706c45ad1249c20cce83a7852ecd147c6b2769e5f81805c294e82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_d779b5dd7c0f1891a323d4944aafa70010f2ce53a5042b4cc23eb2de1cde61ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d779b5dd7c0f1891a323d4944aafa70010f2ce53a5042b4cc23eb2de1cde61ab->enter($__internal_d779b5dd7c0f1891a323d4944aafa70010f2ce53a5042b4cc23eb2de1cde61ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b7e2308eb706c45ad1249c20cce83a7852ecd147c6b2769e5f81805c294e82e->leave($__internal_2b7e2308eb706c45ad1249c20cce83a7852ecd147c6b2769e5f81805c294e82e_prof);

        
        $__internal_d779b5dd7c0f1891a323d4944aafa70010f2ce53a5042b4cc23eb2de1cde61ab->leave($__internal_d779b5dd7c0f1891a323d4944aafa70010f2ce53a5042b4cc23eb2de1cde61ab_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aed7ac63112b176028fd65af7e7b68b834f802d1afc39eaf1e68ee5c57b81c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed7ac63112b176028fd65af7e7b68b834f802d1afc39eaf1e68ee5c57b81c34->enter($__internal_aed7ac63112b176028fd65af7e7b68b834f802d1afc39eaf1e68ee5c57b81c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7beb4cb20e87c4ce9a3c9d4d84913368569d3e7bbb0887b33252b4d8f21d0a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7beb4cb20e87c4ce9a3c9d4d84913368569d3e7bbb0887b33252b4d8f21d0a59->enter($__internal_7beb4cb20e87c4ce9a3c9d4d84913368569d3e7bbb0887b33252b4d8f21d0a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_7beb4cb20e87c4ce9a3c9d4d84913368569d3e7bbb0887b33252b4d8f21d0a59->leave($__internal_7beb4cb20e87c4ce9a3c9d4d84913368569d3e7bbb0887b33252b4d8f21d0a59_prof);

        
        $__internal_aed7ac63112b176028fd65af7e7b68b834f802d1afc39eaf1e68ee5c57b81c34->leave($__internal_aed7ac63112b176028fd65af7e7b68b834f802d1afc39eaf1e68ee5c57b81c34_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_be569ff77d7a4183f59c225a4ae5ff20ae9d47f31f9f6cf052c67df57990e93e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be569ff77d7a4183f59c225a4ae5ff20ae9d47f31f9f6cf052c67df57990e93e->enter($__internal_be569ff77d7a4183f59c225a4ae5ff20ae9d47f31f9f6cf052c67df57990e93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e342b30746f7ac688ff89349a94a520b04057ba5bc997f615a05cb51f7dbfb68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e342b30746f7ac688ff89349a94a520b04057ba5bc997f615a05cb51f7dbfb68->enter($__internal_e342b30746f7ac688ff89349a94a520b04057ba5bc997f615a05cb51f7dbfb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e342b30746f7ac688ff89349a94a520b04057ba5bc997f615a05cb51f7dbfb68->leave($__internal_e342b30746f7ac688ff89349a94a520b04057ba5bc997f615a05cb51f7dbfb68_prof);

        
        $__internal_be569ff77d7a4183f59c225a4ae5ff20ae9d47f31f9f6cf052c67df57990e93e->leave($__internal_be569ff77d7a4183f59c225a4ae5ff20ae9d47f31f9f6cf052c67df57990e93e_prof);

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
