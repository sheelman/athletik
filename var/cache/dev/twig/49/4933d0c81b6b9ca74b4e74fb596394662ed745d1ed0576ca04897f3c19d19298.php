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
        $__internal_2f00402b07fe7994aca897c575ae2dee6026ee67caadaadd8daa8e362500178f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f00402b07fe7994aca897c575ae2dee6026ee67caadaadd8daa8e362500178f->enter($__internal_2f00402b07fe7994aca897c575ae2dee6026ee67caadaadd8daa8e362500178f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_21a45aa2a1f890fc366c68a5bcdd432bde9080e8b5e2e1ae1a735d5d823dddad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a45aa2a1f890fc366c68a5bcdd432bde9080e8b5e2e1ae1a735d5d823dddad->enter($__internal_21a45aa2a1f890fc366c68a5bcdd432bde9080e8b5e2e1ae1a735d5d823dddad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f00402b07fe7994aca897c575ae2dee6026ee67caadaadd8daa8e362500178f->leave($__internal_2f00402b07fe7994aca897c575ae2dee6026ee67caadaadd8daa8e362500178f_prof);

        
        $__internal_21a45aa2a1f890fc366c68a5bcdd432bde9080e8b5e2e1ae1a735d5d823dddad->leave($__internal_21a45aa2a1f890fc366c68a5bcdd432bde9080e8b5e2e1ae1a735d5d823dddad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9023777a10435973ec919bd6ee683e8ed67cb803f0dc730232069f569d270a42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9023777a10435973ec919bd6ee683e8ed67cb803f0dc730232069f569d270a42->enter($__internal_9023777a10435973ec919bd6ee683e8ed67cb803f0dc730232069f569d270a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_41d80057de22913a575e5510d7d861fed40cc618a1152485c2ab4d5132958aa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41d80057de22913a575e5510d7d861fed40cc618a1152485c2ab4d5132958aa4->enter($__internal_41d80057de22913a575e5510d7d861fed40cc618a1152485c2ab4d5132958aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_41d80057de22913a575e5510d7d861fed40cc618a1152485c2ab4d5132958aa4->leave($__internal_41d80057de22913a575e5510d7d861fed40cc618a1152485c2ab4d5132958aa4_prof);

        
        $__internal_9023777a10435973ec919bd6ee683e8ed67cb803f0dc730232069f569d270a42->leave($__internal_9023777a10435973ec919bd6ee683e8ed67cb803f0dc730232069f569d270a42_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cab57b57dc5ea6433c90cbd382706d5fee0884a028b33b6bc2404e6447e24fdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cab57b57dc5ea6433c90cbd382706d5fee0884a028b33b6bc2404e6447e24fdd->enter($__internal_cab57b57dc5ea6433c90cbd382706d5fee0884a028b33b6bc2404e6447e24fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a75f361c931b7a9f302c1c35db22ae11e5b4fcd429dca0a0fc19763add075d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a75f361c931b7a9f302c1c35db22ae11e5b4fcd429dca0a0fc19763add075d75->enter($__internal_a75f361c931b7a9f302c1c35db22ae11e5b4fcd429dca0a0fc19763add075d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a75f361c931b7a9f302c1c35db22ae11e5b4fcd429dca0a0fc19763add075d75->leave($__internal_a75f361c931b7a9f302c1c35db22ae11e5b4fcd429dca0a0fc19763add075d75_prof);

        
        $__internal_cab57b57dc5ea6433c90cbd382706d5fee0884a028b33b6bc2404e6447e24fdd->leave($__internal_cab57b57dc5ea6433c90cbd382706d5fee0884a028b33b6bc2404e6447e24fdd_prof);

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
