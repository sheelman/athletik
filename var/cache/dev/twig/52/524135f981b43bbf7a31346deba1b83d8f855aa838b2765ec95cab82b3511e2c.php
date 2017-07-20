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
        $__internal_a0ec2697fe933a5de9502cb0d30efa9026277b6ebebf7bf0a3ca6198d7b743c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0ec2697fe933a5de9502cb0d30efa9026277b6ebebf7bf0a3ca6198d7b743c0->enter($__internal_a0ec2697fe933a5de9502cb0d30efa9026277b6ebebf7bf0a3ca6198d7b743c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_280a2d162266ca0a8226aee79e3cef71c4c20ce4be4c1eac7718daf48c10d878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_280a2d162266ca0a8226aee79e3cef71c4c20ce4be4c1eac7718daf48c10d878->enter($__internal_280a2d162266ca0a8226aee79e3cef71c4c20ce4be4c1eac7718daf48c10d878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0ec2697fe933a5de9502cb0d30efa9026277b6ebebf7bf0a3ca6198d7b743c0->leave($__internal_a0ec2697fe933a5de9502cb0d30efa9026277b6ebebf7bf0a3ca6198d7b743c0_prof);

        
        $__internal_280a2d162266ca0a8226aee79e3cef71c4c20ce4be4c1eac7718daf48c10d878->leave($__internal_280a2d162266ca0a8226aee79e3cef71c4c20ce4be4c1eac7718daf48c10d878_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b1b2c52dea80da6bd42de711f1b28b352bd93c7c4b3f239c2c19089054311cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b1b2c52dea80da6bd42de711f1b28b352bd93c7c4b3f239c2c19089054311cc->enter($__internal_8b1b2c52dea80da6bd42de711f1b28b352bd93c7c4b3f239c2c19089054311cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1a1203b017219f2bfeca1f8cac0a96be659863056e05b12c102b0b0929fbc238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a1203b017219f2bfeca1f8cac0a96be659863056e05b12c102b0b0929fbc238->enter($__internal_1a1203b017219f2bfeca1f8cac0a96be659863056e05b12c102b0b0929fbc238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1a1203b017219f2bfeca1f8cac0a96be659863056e05b12c102b0b0929fbc238->leave($__internal_1a1203b017219f2bfeca1f8cac0a96be659863056e05b12c102b0b0929fbc238_prof);

        
        $__internal_8b1b2c52dea80da6bd42de711f1b28b352bd93c7c4b3f239c2c19089054311cc->leave($__internal_8b1b2c52dea80da6bd42de711f1b28b352bd93c7c4b3f239c2c19089054311cc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d76f7a46402afbced09c65d5c0a263716a9cff924c2cd0b6dd8bdd2cf870692 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d76f7a46402afbced09c65d5c0a263716a9cff924c2cd0b6dd8bdd2cf870692->enter($__internal_9d76f7a46402afbced09c65d5c0a263716a9cff924c2cd0b6dd8bdd2cf870692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ee029406ee25b41ec5ceec0db8448a44a0593c963b84753d94c8e07ea51d6bcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee029406ee25b41ec5ceec0db8448a44a0593c963b84753d94c8e07ea51d6bcf->enter($__internal_ee029406ee25b41ec5ceec0db8448a44a0593c963b84753d94c8e07ea51d6bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ee029406ee25b41ec5ceec0db8448a44a0593c963b84753d94c8e07ea51d6bcf->leave($__internal_ee029406ee25b41ec5ceec0db8448a44a0593c963b84753d94c8e07ea51d6bcf_prof);

        
        $__internal_9d76f7a46402afbced09c65d5c0a263716a9cff924c2cd0b6dd8bdd2cf870692->leave($__internal_9d76f7a46402afbced09c65d5c0a263716a9cff924c2cd0b6dd8bdd2cf870692_prof);

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
