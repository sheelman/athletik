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
        $__internal_cf05561910739f59d27212392c169f971613486448bc42e01cebb6132978402e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf05561910739f59d27212392c169f971613486448bc42e01cebb6132978402e->enter($__internal_cf05561910739f59d27212392c169f971613486448bc42e01cebb6132978402e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_2ba93e60781c098ea4448e1fb0ca74668f480fff4db98998eca77d8e5b74d0d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba93e60781c098ea4448e1fb0ca74668f480fff4db98998eca77d8e5b74d0d4->enter($__internal_2ba93e60781c098ea4448e1fb0ca74668f480fff4db98998eca77d8e5b74d0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_cf05561910739f59d27212392c169f971613486448bc42e01cebb6132978402e->leave($__internal_cf05561910739f59d27212392c169f971613486448bc42e01cebb6132978402e_prof);

        
        $__internal_2ba93e60781c098ea4448e1fb0ca74668f480fff4db98998eca77d8e5b74d0d4->leave($__internal_2ba93e60781c098ea4448e1fb0ca74668f480fff4db98998eca77d8e5b74d0d4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_eb61414165eb83571cebd537973bad658fc27f7f59312b66c07351ebcbf74bc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb61414165eb83571cebd537973bad658fc27f7f59312b66c07351ebcbf74bc7->enter($__internal_eb61414165eb83571cebd537973bad658fc27f7f59312b66c07351ebcbf74bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_ed2a00f2a8e24127f01cc31fcb39785c5a9f71cd12e5275f26e92a27af7fa416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed2a00f2a8e24127f01cc31fcb39785c5a9f71cd12e5275f26e92a27af7fa416->enter($__internal_ed2a00f2a8e24127f01cc31fcb39785c5a9f71cd12e5275f26e92a27af7fa416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_ed2a00f2a8e24127f01cc31fcb39785c5a9f71cd12e5275f26e92a27af7fa416->leave($__internal_ed2a00f2a8e24127f01cc31fcb39785c5a9f71cd12e5275f26e92a27af7fa416_prof);

        
        $__internal_eb61414165eb83571cebd537973bad658fc27f7f59312b66c07351ebcbf74bc7->leave($__internal_eb61414165eb83571cebd537973bad658fc27f7f59312b66c07351ebcbf74bc7_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8f80ca9d8f05733f46c1368bb9919aa9a36b433c68a84e65d3d8d5725ce7903a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f80ca9d8f05733f46c1368bb9919aa9a36b433c68a84e65d3d8d5725ce7903a->enter($__internal_8f80ca9d8f05733f46c1368bb9919aa9a36b433c68a84e65d3d8d5725ce7903a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_c1b3d3b3f751abede8d5f0274be8893074f92fde8f386d90054a205e15141e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b3d3b3f751abede8d5f0274be8893074f92fde8f386d90054a205e15141e27->enter($__internal_c1b3d3b3f751abede8d5f0274be8893074f92fde8f386d90054a205e15141e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c1b3d3b3f751abede8d5f0274be8893074f92fde8f386d90054a205e15141e27->leave($__internal_c1b3d3b3f751abede8d5f0274be8893074f92fde8f386d90054a205e15141e27_prof);

        
        $__internal_8f80ca9d8f05733f46c1368bb9919aa9a36b433c68a84e65d3d8d5725ce7903a->leave($__internal_8f80ca9d8f05733f46c1368bb9919aa9a36b433c68a84e65d3d8d5725ce7903a_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_66a05453e460787bababb0d392aed7fc07bfeb5a593e5fdfc1efd5736aecc444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66a05453e460787bababb0d392aed7fc07bfeb5a593e5fdfc1efd5736aecc444->enter($__internal_66a05453e460787bababb0d392aed7fc07bfeb5a593e5fdfc1efd5736aecc444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_b1492dc349bc8bacfa1834f291dbaea4cdf3612d0e6752032e7c6a42fdbf2a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1492dc349bc8bacfa1834f291dbaea4cdf3612d0e6752032e7c6a42fdbf2a30->enter($__internal_b1492dc349bc8bacfa1834f291dbaea4cdf3612d0e6752032e7c6a42fdbf2a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b1492dc349bc8bacfa1834f291dbaea4cdf3612d0e6752032e7c6a42fdbf2a30->leave($__internal_b1492dc349bc8bacfa1834f291dbaea4cdf3612d0e6752032e7c6a42fdbf2a30_prof);

        
        $__internal_66a05453e460787bababb0d392aed7fc07bfeb5a593e5fdfc1efd5736aecc444->leave($__internal_66a05453e460787bababb0d392aed7fc07bfeb5a593e5fdfc1efd5736aecc444_prof);

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
