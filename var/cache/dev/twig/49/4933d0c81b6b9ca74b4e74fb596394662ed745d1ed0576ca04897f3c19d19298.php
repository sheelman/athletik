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
        $__internal_a0925b051128b8b75f3ff2e824f96b22878ffa2a074823c34da8c4607b9992a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0925b051128b8b75f3ff2e824f96b22878ffa2a074823c34da8c4607b9992a7->enter($__internal_a0925b051128b8b75f3ff2e824f96b22878ffa2a074823c34da8c4607b9992a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_9262d76121d179e585be0f892f16c040429d986d6d6ac493864edbe31bdfe367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9262d76121d179e585be0f892f16c040429d986d6d6ac493864edbe31bdfe367->enter($__internal_9262d76121d179e585be0f892f16c040429d986d6d6ac493864edbe31bdfe367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0925b051128b8b75f3ff2e824f96b22878ffa2a074823c34da8c4607b9992a7->leave($__internal_a0925b051128b8b75f3ff2e824f96b22878ffa2a074823c34da8c4607b9992a7_prof);

        
        $__internal_9262d76121d179e585be0f892f16c040429d986d6d6ac493864edbe31bdfe367->leave($__internal_9262d76121d179e585be0f892f16c040429d986d6d6ac493864edbe31bdfe367_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ca17f4d60a53142ed601ba4b36e09d8cae5325a86037b1227591f39fded664fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca17f4d60a53142ed601ba4b36e09d8cae5325a86037b1227591f39fded664fc->enter($__internal_ca17f4d60a53142ed601ba4b36e09d8cae5325a86037b1227591f39fded664fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c015029ece1110dc368e7b12be5a667f49f6bce08a2dc8a612f7b762677484f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c015029ece1110dc368e7b12be5a667f49f6bce08a2dc8a612f7b762677484f8->enter($__internal_c015029ece1110dc368e7b12be5a667f49f6bce08a2dc8a612f7b762677484f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c015029ece1110dc368e7b12be5a667f49f6bce08a2dc8a612f7b762677484f8->leave($__internal_c015029ece1110dc368e7b12be5a667f49f6bce08a2dc8a612f7b762677484f8_prof);

        
        $__internal_ca17f4d60a53142ed601ba4b36e09d8cae5325a86037b1227591f39fded664fc->leave($__internal_ca17f4d60a53142ed601ba4b36e09d8cae5325a86037b1227591f39fded664fc_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8472f4de6f002d69007ee9b2cdda164ee77d931653a497885cb73c7148e13cd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8472f4de6f002d69007ee9b2cdda164ee77d931653a497885cb73c7148e13cd9->enter($__internal_8472f4de6f002d69007ee9b2cdda164ee77d931653a497885cb73c7148e13cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c5fd94ac3cebefce252f6ddfd35155fc4b6a9bf38d251381a20239909073dac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5fd94ac3cebefce252f6ddfd35155fc4b6a9bf38d251381a20239909073dac5->enter($__internal_c5fd94ac3cebefce252f6ddfd35155fc4b6a9bf38d251381a20239909073dac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c5fd94ac3cebefce252f6ddfd35155fc4b6a9bf38d251381a20239909073dac5->leave($__internal_c5fd94ac3cebefce252f6ddfd35155fc4b6a9bf38d251381a20239909073dac5_prof);

        
        $__internal_8472f4de6f002d69007ee9b2cdda164ee77d931653a497885cb73c7148e13cd9->leave($__internal_8472f4de6f002d69007ee9b2cdda164ee77d931653a497885cb73c7148e13cd9_prof);

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
