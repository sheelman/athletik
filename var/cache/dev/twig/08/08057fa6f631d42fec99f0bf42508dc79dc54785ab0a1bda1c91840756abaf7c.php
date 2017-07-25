<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_12dfc22914f0f4944e88d2e33b6943043bf4cf57ee81602cccc77d68a299198e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2d95e4a747a4f11b7583bcfd9b9b4b85a481716757e22a39f455384beda93d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2d95e4a747a4f11b7583bcfd9b9b4b85a481716757e22a39f455384beda93d8->enter($__internal_b2d95e4a747a4f11b7583bcfd9b9b4b85a481716757e22a39f455384beda93d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_7aa4bab73a25787bb356406454a00140193bfe401fdfe8b2d840815f7fe8be95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa4bab73a25787bb356406454a00140193bfe401fdfe8b2d840815f7fe8be95->enter($__internal_7aa4bab73a25787bb356406454a00140193bfe401fdfe8b2d840815f7fe8be95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2d95e4a747a4f11b7583bcfd9b9b4b85a481716757e22a39f455384beda93d8->leave($__internal_b2d95e4a747a4f11b7583bcfd9b9b4b85a481716757e22a39f455384beda93d8_prof);

        
        $__internal_7aa4bab73a25787bb356406454a00140193bfe401fdfe8b2d840815f7fe8be95->leave($__internal_7aa4bab73a25787bb356406454a00140193bfe401fdfe8b2d840815f7fe8be95_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d112ee082030f001f88418eeb6e7f5c245ce8610331a6edfcedae67404159af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d112ee082030f001f88418eeb6e7f5c245ce8610331a6edfcedae67404159af->enter($__internal_7d112ee082030f001f88418eeb6e7f5c245ce8610331a6edfcedae67404159af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8c8e7a1ce2ec3002b6a7f6d1884d04b4fc2340bb6d507336e454002d7c1daf38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8e7a1ce2ec3002b6a7f6d1884d04b4fc2340bb6d507336e454002d7c1daf38->enter($__internal_8c8e7a1ce2ec3002b6a7f6d1884d04b4fc2340bb6d507336e454002d7c1daf38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8c8e7a1ce2ec3002b6a7f6d1884d04b4fc2340bb6d507336e454002d7c1daf38->leave($__internal_8c8e7a1ce2ec3002b6a7f6d1884d04b4fc2340bb6d507336e454002d7c1daf38_prof);

        
        $__internal_7d112ee082030f001f88418eeb6e7f5c245ce8610331a6edfcedae67404159af->leave($__internal_7d112ee082030f001f88418eeb6e7f5c245ce8610331a6edfcedae67404159af_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
