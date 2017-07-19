<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_d2a768e8d244a97ac1918d04e896b3a8a41bffdfe8b3a479c42fa239c0c9fbac extends Twig_Template
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
        $__internal_9833cc4d3350e3ffee04bc9cf5da7951298d5e70e17647be7bbee4d747f77b92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9833cc4d3350e3ffee04bc9cf5da7951298d5e70e17647be7bbee4d747f77b92->enter($__internal_9833cc4d3350e3ffee04bc9cf5da7951298d5e70e17647be7bbee4d747f77b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_16de49a4ec767d82e2da6948d80957b438bd49c438d6002d1b62411edbe9a66d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16de49a4ec767d82e2da6948d80957b438bd49c438d6002d1b62411edbe9a66d->enter($__internal_16de49a4ec767d82e2da6948d80957b438bd49c438d6002d1b62411edbe9a66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9833cc4d3350e3ffee04bc9cf5da7951298d5e70e17647be7bbee4d747f77b92->leave($__internal_9833cc4d3350e3ffee04bc9cf5da7951298d5e70e17647be7bbee4d747f77b92_prof);

        
        $__internal_16de49a4ec767d82e2da6948d80957b438bd49c438d6002d1b62411edbe9a66d->leave($__internal_16de49a4ec767d82e2da6948d80957b438bd49c438d6002d1b62411edbe9a66d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2e1654cbad5713a09053473ce2feaa2e58bafccb7a107b3cb9e6133259fd400b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e1654cbad5713a09053473ce2feaa2e58bafccb7a107b3cb9e6133259fd400b->enter($__internal_2e1654cbad5713a09053473ce2feaa2e58bafccb7a107b3cb9e6133259fd400b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_f8e0154ac8f046535d80aa15c6705d8a437bf5e60e02b335bef7fa022083d397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e0154ac8f046535d80aa15c6705d8a437bf5e60e02b335bef7fa022083d397->enter($__internal_f8e0154ac8f046535d80aa15c6705d8a437bf5e60e02b335bef7fa022083d397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_f8e0154ac8f046535d80aa15c6705d8a437bf5e60e02b335bef7fa022083d397->leave($__internal_f8e0154ac8f046535d80aa15c6705d8a437bf5e60e02b335bef7fa022083d397_prof);

        
        $__internal_2e1654cbad5713a09053473ce2feaa2e58bafccb7a107b3cb9e6133259fd400b->leave($__internal_2e1654cbad5713a09053473ce2feaa2e58bafccb7a107b3cb9e6133259fd400b_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5a414a740b2b600a2a61e20e27237005db84d31398d247787f6479cca185409e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a414a740b2b600a2a61e20e27237005db84d31398d247787f6479cca185409e->enter($__internal_5a414a740b2b600a2a61e20e27237005db84d31398d247787f6479cca185409e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_97ae9a9c66b039f3d815196de9e961897f444cbc4ca6a1675889a9dc0d0ef4c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ae9a9c66b039f3d815196de9e961897f444cbc4ca6a1675889a9dc0d0ef4c7->enter($__internal_97ae9a9c66b039f3d815196de9e961897f444cbc4ca6a1675889a9dc0d0ef4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_97ae9a9c66b039f3d815196de9e961897f444cbc4ca6a1675889a9dc0d0ef4c7->leave($__internal_97ae9a9c66b039f3d815196de9e961897f444cbc4ca6a1675889a9dc0d0ef4c7_prof);

        
        $__internal_5a414a740b2b600a2a61e20e27237005db84d31398d247787f6479cca185409e->leave($__internal_5a414a740b2b600a2a61e20e27237005db84d31398d247787f6479cca185409e_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_36c73f2e696fa830e53abf29d87801edd89a76d5dbfd22a34694c363b5183610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36c73f2e696fa830e53abf29d87801edd89a76d5dbfd22a34694c363b5183610->enter($__internal_36c73f2e696fa830e53abf29d87801edd89a76d5dbfd22a34694c363b5183610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_e139fa48dc261565b8cc6b99c9d2861494b033502fcac171f3ed956bce90a046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e139fa48dc261565b8cc6b99c9d2861494b033502fcac171f3ed956bce90a046->enter($__internal_e139fa48dc261565b8cc6b99c9d2861494b033502fcac171f3ed956bce90a046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e139fa48dc261565b8cc6b99c9d2861494b033502fcac171f3ed956bce90a046->leave($__internal_e139fa48dc261565b8cc6b99c9d2861494b033502fcac171f3ed956bce90a046_prof);

        
        $__internal_36c73f2e696fa830e53abf29d87801edd89a76d5dbfd22a34694c363b5183610->leave($__internal_36c73f2e696fa830e53abf29d87801edd89a76d5dbfd22a34694c363b5183610_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
