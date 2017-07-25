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
        $__internal_599acc27a6da3b9abf4a1f0546842347963acd6a514a0edf380c71dddf248bc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_599acc27a6da3b9abf4a1f0546842347963acd6a514a0edf380c71dddf248bc1->enter($__internal_599acc27a6da3b9abf4a1f0546842347963acd6a514a0edf380c71dddf248bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_7db058aae88f757e08db69b64b85ca8a737be73ebace757c0d3cedca16a989d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db058aae88f757e08db69b64b85ca8a737be73ebace757c0d3cedca16a989d0->enter($__internal_7db058aae88f757e08db69b64b85ca8a737be73ebace757c0d3cedca16a989d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_599acc27a6da3b9abf4a1f0546842347963acd6a514a0edf380c71dddf248bc1->leave($__internal_599acc27a6da3b9abf4a1f0546842347963acd6a514a0edf380c71dddf248bc1_prof);

        
        $__internal_7db058aae88f757e08db69b64b85ca8a737be73ebace757c0d3cedca16a989d0->leave($__internal_7db058aae88f757e08db69b64b85ca8a737be73ebace757c0d3cedca16a989d0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_048c4a122dd80e9bf5163049b37fa2f3932348fbcb6f290f5f2273c0e4fb5e66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_048c4a122dd80e9bf5163049b37fa2f3932348fbcb6f290f5f2273c0e4fb5e66->enter($__internal_048c4a122dd80e9bf5163049b37fa2f3932348fbcb6f290f5f2273c0e4fb5e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_915d2b0239ce70d59ed3658539258f506bcae487b090ff9a6f628622cf919b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_915d2b0239ce70d59ed3658539258f506bcae487b090ff9a6f628622cf919b3a->enter($__internal_915d2b0239ce70d59ed3658539258f506bcae487b090ff9a6f628622cf919b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_915d2b0239ce70d59ed3658539258f506bcae487b090ff9a6f628622cf919b3a->leave($__internal_915d2b0239ce70d59ed3658539258f506bcae487b090ff9a6f628622cf919b3a_prof);

        
        $__internal_048c4a122dd80e9bf5163049b37fa2f3932348fbcb6f290f5f2273c0e4fb5e66->leave($__internal_048c4a122dd80e9bf5163049b37fa2f3932348fbcb6f290f5f2273c0e4fb5e66_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_274be7c0227823414ca3639d0dbe83804d38ed580dc150ac5170ae85f9f3af0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_274be7c0227823414ca3639d0dbe83804d38ed580dc150ac5170ae85f9f3af0c->enter($__internal_274be7c0227823414ca3639d0dbe83804d38ed580dc150ac5170ae85f9f3af0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_787a86f4ad712628bd1b3a7f68fdf0a6d8aacbf066e75894ae7d884887f5714a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787a86f4ad712628bd1b3a7f68fdf0a6d8aacbf066e75894ae7d884887f5714a->enter($__internal_787a86f4ad712628bd1b3a7f68fdf0a6d8aacbf066e75894ae7d884887f5714a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_787a86f4ad712628bd1b3a7f68fdf0a6d8aacbf066e75894ae7d884887f5714a->leave($__internal_787a86f4ad712628bd1b3a7f68fdf0a6d8aacbf066e75894ae7d884887f5714a_prof);

        
        $__internal_274be7c0227823414ca3639d0dbe83804d38ed580dc150ac5170ae85f9f3af0c->leave($__internal_274be7c0227823414ca3639d0dbe83804d38ed580dc150ac5170ae85f9f3af0c_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b0e01b1bf72061740695c7cf421584a2278fb4d7b183247e18c65c764ac21a14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0e01b1bf72061740695c7cf421584a2278fb4d7b183247e18c65c764ac21a14->enter($__internal_b0e01b1bf72061740695c7cf421584a2278fb4d7b183247e18c65c764ac21a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_d677250ac0e8c98058910fa3eb372125ab018e40bacd2d7488603caa36cc71d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d677250ac0e8c98058910fa3eb372125ab018e40bacd2d7488603caa36cc71d3->enter($__internal_d677250ac0e8c98058910fa3eb372125ab018e40bacd2d7488603caa36cc71d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d677250ac0e8c98058910fa3eb372125ab018e40bacd2d7488603caa36cc71d3->leave($__internal_d677250ac0e8c98058910fa3eb372125ab018e40bacd2d7488603caa36cc71d3_prof);

        
        $__internal_b0e01b1bf72061740695c7cf421584a2278fb4d7b183247e18c65c764ac21a14->leave($__internal_b0e01b1bf72061740695c7cf421584a2278fb4d7b183247e18c65c764ac21a14_prof);

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
