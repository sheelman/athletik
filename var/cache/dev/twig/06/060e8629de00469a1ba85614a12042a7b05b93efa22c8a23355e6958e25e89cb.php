<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_614c1e1b88ad81b345c13f857551ab4266d5bd0fabf982ce0daf35c5406d3055 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_f407d3c24e70c6c5550be79b3f868bfc1d95ec3f2549073e4ec0133be670795e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f407d3c24e70c6c5550be79b3f868bfc1d95ec3f2549073e4ec0133be670795e->enter($__internal_f407d3c24e70c6c5550be79b3f868bfc1d95ec3f2549073e4ec0133be670795e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_a8bdc38c58fe5969123c24459bc76f787883ff0ead4199ab756184ccdf6022e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8bdc38c58fe5969123c24459bc76f787883ff0ead4199ab756184ccdf6022e4->enter($__internal_a8bdc38c58fe5969123c24459bc76f787883ff0ead4199ab756184ccdf6022e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f407d3c24e70c6c5550be79b3f868bfc1d95ec3f2549073e4ec0133be670795e->leave($__internal_f407d3c24e70c6c5550be79b3f868bfc1d95ec3f2549073e4ec0133be670795e_prof);

        
        $__internal_a8bdc38c58fe5969123c24459bc76f787883ff0ead4199ab756184ccdf6022e4->leave($__internal_a8bdc38c58fe5969123c24459bc76f787883ff0ead4199ab756184ccdf6022e4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ee4ae10ee8c039440aa73e56a9b56d061e2a7680c87c8b8805ed3143eda4025f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee4ae10ee8c039440aa73e56a9b56d061e2a7680c87c8b8805ed3143eda4025f->enter($__internal_ee4ae10ee8c039440aa73e56a9b56d061e2a7680c87c8b8805ed3143eda4025f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a392cbdec11485c99c5b7983ee65510781f9dee77a814e772076eeb48e11f57e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a392cbdec11485c99c5b7983ee65510781f9dee77a814e772076eeb48e11f57e->enter($__internal_a392cbdec11485c99c5b7983ee65510781f9dee77a814e772076eeb48e11f57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_a392cbdec11485c99c5b7983ee65510781f9dee77a814e772076eeb48e11f57e->leave($__internal_a392cbdec11485c99c5b7983ee65510781f9dee77a814e772076eeb48e11f57e_prof);

        
        $__internal_ee4ae10ee8c039440aa73e56a9b56d061e2a7680c87c8b8805ed3143eda4025f->leave($__internal_ee4ae10ee8c039440aa73e56a9b56d061e2a7680c87c8b8805ed3143eda4025f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
