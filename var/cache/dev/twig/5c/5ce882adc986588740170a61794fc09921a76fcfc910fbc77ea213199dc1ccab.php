<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_ffeaf08c64677b5ab87c5401e6dfcfa86fc67b9713e02f3a984b122e7f542ce6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63f83d5ed1d3776a50b37287b45b9e93ae85019040dff4b142285616e2c69149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63f83d5ed1d3776a50b37287b45b9e93ae85019040dff4b142285616e2c69149->enter($__internal_63f83d5ed1d3776a50b37287b45b9e93ae85019040dff4b142285616e2c69149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_4ca2131c45cf75177462f32d399a9afd5f1a4610e14a2dc79a2a5b52fa5e7d14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca2131c45cf75177462f32d399a9afd5f1a4610e14a2dc79a2a5b52fa5e7d14->enter($__internal_4ca2131c45cf75177462f32d399a9afd5f1a4610e14a2dc79a2a5b52fa5e7d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_63f83d5ed1d3776a50b37287b45b9e93ae85019040dff4b142285616e2c69149->leave($__internal_63f83d5ed1d3776a50b37287b45b9e93ae85019040dff4b142285616e2c69149_prof);

        
        $__internal_4ca2131c45cf75177462f32d399a9afd5f1a4610e14a2dc79a2a5b52fa5e7d14->leave($__internal_4ca2131c45cf75177462f32d399a9afd5f1a4610e14a2dc79a2a5b52fa5e7d14_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d4564fb6e7d1b2e0a550614410de1b483cfcfde4881284d8f12e163c7b7b0d65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4564fb6e7d1b2e0a550614410de1b483cfcfde4881284d8f12e163c7b7b0d65->enter($__internal_d4564fb6e7d1b2e0a550614410de1b483cfcfde4881284d8f12e163c7b7b0d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_821c6009381c656c2896445ed0560f5f1233810fe9928ddff9fcaff433ca083d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_821c6009381c656c2896445ed0560f5f1233810fe9928ddff9fcaff433ca083d->enter($__internal_821c6009381c656c2896445ed0560f5f1233810fe9928ddff9fcaff433ca083d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_821c6009381c656c2896445ed0560f5f1233810fe9928ddff9fcaff433ca083d->leave($__internal_821c6009381c656c2896445ed0560f5f1233810fe9928ddff9fcaff433ca083d_prof);

        
        $__internal_d4564fb6e7d1b2e0a550614410de1b483cfcfde4881284d8f12e163c7b7b0d65->leave($__internal_d4564fb6e7d1b2e0a550614410de1b483cfcfde4881284d8f12e163c7b7b0d65_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6c5adc8852fd9e9c321dc3009701763a90bfdff4c04e0c1fad9ca37b31a67c69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c5adc8852fd9e9c321dc3009701763a90bfdff4c04e0c1fad9ca37b31a67c69->enter($__internal_6c5adc8852fd9e9c321dc3009701763a90bfdff4c04e0c1fad9ca37b31a67c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_74a19e6d89959a84508c95a3c103e7e762a93218fa20e1995860377d96235ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74a19e6d89959a84508c95a3c103e7e762a93218fa20e1995860377d96235ddd->enter($__internal_74a19e6d89959a84508c95a3c103e7e762a93218fa20e1995860377d96235ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_74a19e6d89959a84508c95a3c103e7e762a93218fa20e1995860377d96235ddd->leave($__internal_74a19e6d89959a84508c95a3c103e7e762a93218fa20e1995860377d96235ddd_prof);

        
        $__internal_6c5adc8852fd9e9c321dc3009701763a90bfdff4c04e0c1fad9ca37b31a67c69->leave($__internal_6c5adc8852fd9e9c321dc3009701763a90bfdff4c04e0c1fad9ca37b31a67c69_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3d2b6e888893121f30ff2846bcdd1c4d4feafb2e0ba3f2bd3ab016d6855c37cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d2b6e888893121f30ff2846bcdd1c4d4feafb2e0ba3f2bd3ab016d6855c37cc->enter($__internal_3d2b6e888893121f30ff2846bcdd1c4d4feafb2e0ba3f2bd3ab016d6855c37cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_6f574f5fbdbbc208e3abc41f07d16776d138bae981d884c316ce56029acfae1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f574f5fbdbbc208e3abc41f07d16776d138bae981d884c316ce56029acfae1c->enter($__internal_6f574f5fbdbbc208e3abc41f07d16776d138bae981d884c316ce56029acfae1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6f574f5fbdbbc208e3abc41f07d16776d138bae981d884c316ce56029acfae1c->leave($__internal_6f574f5fbdbbc208e3abc41f07d16776d138bae981d884c316ce56029acfae1c_prof);

        
        $__internal_3d2b6e888893121f30ff2846bcdd1c4d4feafb2e0ba3f2bd3ab016d6855c37cc->leave($__internal_3d2b6e888893121f30ff2846bcdd1c4d4feafb2e0ba3f2bd3ab016d6855c37cc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
