<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_02d845a49bdd57a4be066814fe8a9768b23f387ad2777b19ef633ba46046768f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cab5c76098c413cabac36e5edad5f44600484c533e386df5ecb4024799ca5224 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cab5c76098c413cabac36e5edad5f44600484c533e386df5ecb4024799ca5224->enter($__internal_cab5c76098c413cabac36e5edad5f44600484c533e386df5ecb4024799ca5224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_f94682b8c679bf08d2385c028cdc89717ec1622ce9eb0556859eee50840cd533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f94682b8c679bf08d2385c028cdc89717ec1622ce9eb0556859eee50840cd533->enter($__internal_f94682b8c679bf08d2385c028cdc89717ec1622ce9eb0556859eee50840cd533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cab5c76098c413cabac36e5edad5f44600484c533e386df5ecb4024799ca5224->leave($__internal_cab5c76098c413cabac36e5edad5f44600484c533e386df5ecb4024799ca5224_prof);

        
        $__internal_f94682b8c679bf08d2385c028cdc89717ec1622ce9eb0556859eee50840cd533->leave($__internal_f94682b8c679bf08d2385c028cdc89717ec1622ce9eb0556859eee50840cd533_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0c44e502d0100324827590731dc4d54ffe435c2501172ecbcd0e31eab76c411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0c44e502d0100324827590731dc4d54ffe435c2501172ecbcd0e31eab76c411->enter($__internal_a0c44e502d0100324827590731dc4d54ffe435c2501172ecbcd0e31eab76c411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ede0d23a06d51714bbdb3d3dd8520b23fe92a42638f4e6fca07c2aaf7fb1d4c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede0d23a06d51714bbdb3d3dd8520b23fe92a42638f4e6fca07c2aaf7fb1d4c8->enter($__internal_ede0d23a06d51714bbdb3d3dd8520b23fe92a42638f4e6fca07c2aaf7fb1d4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ede0d23a06d51714bbdb3d3dd8520b23fe92a42638f4e6fca07c2aaf7fb1d4c8->leave($__internal_ede0d23a06d51714bbdb3d3dd8520b23fe92a42638f4e6fca07c2aaf7fb1d4c8_prof);

        
        $__internal_a0c44e502d0100324827590731dc4d54ffe435c2501172ecbcd0e31eab76c411->leave($__internal_a0c44e502d0100324827590731dc4d54ffe435c2501172ecbcd0e31eab76c411_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_29f833206d2db6123b538716893604b088d41ce6da627c55dd0b7542eaeb5f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29f833206d2db6123b538716893604b088d41ce6da627c55dd0b7542eaeb5f90->enter($__internal_29f833206d2db6123b538716893604b088d41ce6da627c55dd0b7542eaeb5f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_103aae334fe65e01b32a9dbdcddc437db8229d5467d9cf40b3249aa05d9239aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103aae334fe65e01b32a9dbdcddc437db8229d5467d9cf40b3249aa05d9239aa->enter($__internal_103aae334fe65e01b32a9dbdcddc437db8229d5467d9cf40b3249aa05d9239aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_103aae334fe65e01b32a9dbdcddc437db8229d5467d9cf40b3249aa05d9239aa->leave($__internal_103aae334fe65e01b32a9dbdcddc437db8229d5467d9cf40b3249aa05d9239aa_prof);

        
        $__internal_29f833206d2db6123b538716893604b088d41ce6da627c55dd0b7542eaeb5f90->leave($__internal_29f833206d2db6123b538716893604b088d41ce6da627c55dd0b7542eaeb5f90_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
