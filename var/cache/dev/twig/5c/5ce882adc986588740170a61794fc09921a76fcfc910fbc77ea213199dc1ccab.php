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
        $__internal_d34c4b3c0a498314b978d01308f698a405a3e01586d442bcd63ff3309506a695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d34c4b3c0a498314b978d01308f698a405a3e01586d442bcd63ff3309506a695->enter($__internal_d34c4b3c0a498314b978d01308f698a405a3e01586d442bcd63ff3309506a695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_d3eaba282a52266d12be48c34d72ca1924abf58290b1d95d70a909774662d821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3eaba282a52266d12be48c34d72ca1924abf58290b1d95d70a909774662d821->enter($__internal_d3eaba282a52266d12be48c34d72ca1924abf58290b1d95d70a909774662d821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d34c4b3c0a498314b978d01308f698a405a3e01586d442bcd63ff3309506a695->leave($__internal_d34c4b3c0a498314b978d01308f698a405a3e01586d442bcd63ff3309506a695_prof);

        
        $__internal_d3eaba282a52266d12be48c34d72ca1924abf58290b1d95d70a909774662d821->leave($__internal_d3eaba282a52266d12be48c34d72ca1924abf58290b1d95d70a909774662d821_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d4e24e5834a82e6669522ae335441d2a285264505b023421cddf0739e5862697 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4e24e5834a82e6669522ae335441d2a285264505b023421cddf0739e5862697->enter($__internal_d4e24e5834a82e6669522ae335441d2a285264505b023421cddf0739e5862697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_8d01e8a62f1211c8f421bf781566c98704731a8633c418229d1faf927825629c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d01e8a62f1211c8f421bf781566c98704731a8633c418229d1faf927825629c->enter($__internal_8d01e8a62f1211c8f421bf781566c98704731a8633c418229d1faf927825629c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_8d01e8a62f1211c8f421bf781566c98704731a8633c418229d1faf927825629c->leave($__internal_8d01e8a62f1211c8f421bf781566c98704731a8633c418229d1faf927825629c_prof);

        
        $__internal_d4e24e5834a82e6669522ae335441d2a285264505b023421cddf0739e5862697->leave($__internal_d4e24e5834a82e6669522ae335441d2a285264505b023421cddf0739e5862697_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d8818887164713aad59ffe13ed4200bdf9834645789ab1c8df47ea8bfe5d1782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8818887164713aad59ffe13ed4200bdf9834645789ab1c8df47ea8bfe5d1782->enter($__internal_d8818887164713aad59ffe13ed4200bdf9834645789ab1c8df47ea8bfe5d1782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_14aea4601db99a88c7e80392610324d2d8a23458b58c0e3e192d59beb217a1ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14aea4601db99a88c7e80392610324d2d8a23458b58c0e3e192d59beb217a1ff->enter($__internal_14aea4601db99a88c7e80392610324d2d8a23458b58c0e3e192d59beb217a1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_14aea4601db99a88c7e80392610324d2d8a23458b58c0e3e192d59beb217a1ff->leave($__internal_14aea4601db99a88c7e80392610324d2d8a23458b58c0e3e192d59beb217a1ff_prof);

        
        $__internal_d8818887164713aad59ffe13ed4200bdf9834645789ab1c8df47ea8bfe5d1782->leave($__internal_d8818887164713aad59ffe13ed4200bdf9834645789ab1c8df47ea8bfe5d1782_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f6115c0c53b029f710712652892f88e3a590867e3062f61ba6cc794fe343bb35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6115c0c53b029f710712652892f88e3a590867e3062f61ba6cc794fe343bb35->enter($__internal_f6115c0c53b029f710712652892f88e3a590867e3062f61ba6cc794fe343bb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_c4057dabf32529b5bd5981dce5bb4c59ea101e0aee69bf0e8d47ea09f26c1ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4057dabf32529b5bd5981dce5bb4c59ea101e0aee69bf0e8d47ea09f26c1ad6->enter($__internal_c4057dabf32529b5bd5981dce5bb4c59ea101e0aee69bf0e8d47ea09f26c1ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c4057dabf32529b5bd5981dce5bb4c59ea101e0aee69bf0e8d47ea09f26c1ad6->leave($__internal_c4057dabf32529b5bd5981dce5bb4c59ea101e0aee69bf0e8d47ea09f26c1ad6_prof);

        
        $__internal_f6115c0c53b029f710712652892f88e3a590867e3062f61ba6cc794fe343bb35->leave($__internal_f6115c0c53b029f710712652892f88e3a590867e3062f61ba6cc794fe343bb35_prof);

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
