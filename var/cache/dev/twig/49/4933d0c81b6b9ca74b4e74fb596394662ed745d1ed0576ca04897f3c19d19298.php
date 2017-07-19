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
        $__internal_245bfa0266a9212bc445032caffb61230b89dfdaef73c49122189fdafe25b805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_245bfa0266a9212bc445032caffb61230b89dfdaef73c49122189fdafe25b805->enter($__internal_245bfa0266a9212bc445032caffb61230b89dfdaef73c49122189fdafe25b805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_fe910dad976ad966f1f879c268013e8ecb3e318f4fdee40f1596172412f4b6ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe910dad976ad966f1f879c268013e8ecb3e318f4fdee40f1596172412f4b6ca->enter($__internal_fe910dad976ad966f1f879c268013e8ecb3e318f4fdee40f1596172412f4b6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_245bfa0266a9212bc445032caffb61230b89dfdaef73c49122189fdafe25b805->leave($__internal_245bfa0266a9212bc445032caffb61230b89dfdaef73c49122189fdafe25b805_prof);

        
        $__internal_fe910dad976ad966f1f879c268013e8ecb3e318f4fdee40f1596172412f4b6ca->leave($__internal_fe910dad976ad966f1f879c268013e8ecb3e318f4fdee40f1596172412f4b6ca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8282663bab1c707d0633cc27e961abcb0092e94b71dafe5f5de740dcde37b1fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8282663bab1c707d0633cc27e961abcb0092e94b71dafe5f5de740dcde37b1fa->enter($__internal_8282663bab1c707d0633cc27e961abcb0092e94b71dafe5f5de740dcde37b1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f7276438afacf14a5d4d486daa386f80917c19bb4fdec63f40fb1535df7ccc3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7276438afacf14a5d4d486daa386f80917c19bb4fdec63f40fb1535df7ccc3a->enter($__internal_f7276438afacf14a5d4d486daa386f80917c19bb4fdec63f40fb1535df7ccc3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f7276438afacf14a5d4d486daa386f80917c19bb4fdec63f40fb1535df7ccc3a->leave($__internal_f7276438afacf14a5d4d486daa386f80917c19bb4fdec63f40fb1535df7ccc3a_prof);

        
        $__internal_8282663bab1c707d0633cc27e961abcb0092e94b71dafe5f5de740dcde37b1fa->leave($__internal_8282663bab1c707d0633cc27e961abcb0092e94b71dafe5f5de740dcde37b1fa_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4a03ecf6aa2face428667e6d6933b612daa475ef54e61e757b199d43df96a4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4a03ecf6aa2face428667e6d6933b612daa475ef54e61e757b199d43df96a4e->enter($__internal_c4a03ecf6aa2face428667e6d6933b612daa475ef54e61e757b199d43df96a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_735f5a014274c59050e84a495489aeb97aa3a23faf4aa7e85793d11f52e0ffa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_735f5a014274c59050e84a495489aeb97aa3a23faf4aa7e85793d11f52e0ffa2->enter($__internal_735f5a014274c59050e84a495489aeb97aa3a23faf4aa7e85793d11f52e0ffa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_735f5a014274c59050e84a495489aeb97aa3a23faf4aa7e85793d11f52e0ffa2->leave($__internal_735f5a014274c59050e84a495489aeb97aa3a23faf4aa7e85793d11f52e0ffa2_prof);

        
        $__internal_c4a03ecf6aa2face428667e6d6933b612daa475ef54e61e757b199d43df96a4e->leave($__internal_c4a03ecf6aa2face428667e6d6933b612daa475ef54e61e757b199d43df96a4e_prof);

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
