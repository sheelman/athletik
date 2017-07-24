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
        $__internal_b07f260e8a44491914a2ef8e3fd65128dd4dea12dba57fde81f8092252ad2c3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b07f260e8a44491914a2ef8e3fd65128dd4dea12dba57fde81f8092252ad2c3c->enter($__internal_b07f260e8a44491914a2ef8e3fd65128dd4dea12dba57fde81f8092252ad2c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_39707dead1b5fc9542e391eb06048204a1846b9993d2b66767962aa1f400fc69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39707dead1b5fc9542e391eb06048204a1846b9993d2b66767962aa1f400fc69->enter($__internal_39707dead1b5fc9542e391eb06048204a1846b9993d2b66767962aa1f400fc69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b07f260e8a44491914a2ef8e3fd65128dd4dea12dba57fde81f8092252ad2c3c->leave($__internal_b07f260e8a44491914a2ef8e3fd65128dd4dea12dba57fde81f8092252ad2c3c_prof);

        
        $__internal_39707dead1b5fc9542e391eb06048204a1846b9993d2b66767962aa1f400fc69->leave($__internal_39707dead1b5fc9542e391eb06048204a1846b9993d2b66767962aa1f400fc69_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_191a5830057863b3888e696cf9958779690131726ac9c217ae7c3d56fb2d47b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_191a5830057863b3888e696cf9958779690131726ac9c217ae7c3d56fb2d47b2->enter($__internal_191a5830057863b3888e696cf9958779690131726ac9c217ae7c3d56fb2d47b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_743dbb88c37a6150ba057a7875e05a57ea5877aac4a8d6175448472185847c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743dbb88c37a6150ba057a7875e05a57ea5877aac4a8d6175448472185847c4c->enter($__internal_743dbb88c37a6150ba057a7875e05a57ea5877aac4a8d6175448472185847c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_743dbb88c37a6150ba057a7875e05a57ea5877aac4a8d6175448472185847c4c->leave($__internal_743dbb88c37a6150ba057a7875e05a57ea5877aac4a8d6175448472185847c4c_prof);

        
        $__internal_191a5830057863b3888e696cf9958779690131726ac9c217ae7c3d56fb2d47b2->leave($__internal_191a5830057863b3888e696cf9958779690131726ac9c217ae7c3d56fb2d47b2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab802ef6a3446de6e4c6dc86e9ade52ee73ff8d2d02b387a149d6df080efdac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab802ef6a3446de6e4c6dc86e9ade52ee73ff8d2d02b387a149d6df080efdac5->enter($__internal_ab802ef6a3446de6e4c6dc86e9ade52ee73ff8d2d02b387a149d6df080efdac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_145877bf58b7084e8f2bfd5992827b159e07263ff5a838924abb7f3b0ba8e446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_145877bf58b7084e8f2bfd5992827b159e07263ff5a838924abb7f3b0ba8e446->enter($__internal_145877bf58b7084e8f2bfd5992827b159e07263ff5a838924abb7f3b0ba8e446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_145877bf58b7084e8f2bfd5992827b159e07263ff5a838924abb7f3b0ba8e446->leave($__internal_145877bf58b7084e8f2bfd5992827b159e07263ff5a838924abb7f3b0ba8e446_prof);

        
        $__internal_ab802ef6a3446de6e4c6dc86e9ade52ee73ff8d2d02b387a149d6df080efdac5->leave($__internal_ab802ef6a3446de6e4c6dc86e9ade52ee73ff8d2d02b387a149d6df080efdac5_prof);

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
