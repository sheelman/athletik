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
        $__internal_0c5c703e1e9050470223152335eb3604a68a2a0a5b0fbf21274f338dd91731a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c5c703e1e9050470223152335eb3604a68a2a0a5b0fbf21274f338dd91731a5->enter($__internal_0c5c703e1e9050470223152335eb3604a68a2a0a5b0fbf21274f338dd91731a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_816427c46615d1397a57bca142eab8f44b80bc404572f6e1b6d1edda9a4e3387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_816427c46615d1397a57bca142eab8f44b80bc404572f6e1b6d1edda9a4e3387->enter($__internal_816427c46615d1397a57bca142eab8f44b80bc404572f6e1b6d1edda9a4e3387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0c5c703e1e9050470223152335eb3604a68a2a0a5b0fbf21274f338dd91731a5->leave($__internal_0c5c703e1e9050470223152335eb3604a68a2a0a5b0fbf21274f338dd91731a5_prof);

        
        $__internal_816427c46615d1397a57bca142eab8f44b80bc404572f6e1b6d1edda9a4e3387->leave($__internal_816427c46615d1397a57bca142eab8f44b80bc404572f6e1b6d1edda9a4e3387_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7256c16d653cb95ef4b9c7bfe5f3eb364a6faad304e8c167d6bcd9fad0fff418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7256c16d653cb95ef4b9c7bfe5f3eb364a6faad304e8c167d6bcd9fad0fff418->enter($__internal_7256c16d653cb95ef4b9c7bfe5f3eb364a6faad304e8c167d6bcd9fad0fff418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_fc6df8957750d63b1110c104c90ad10b64ef7f56f3de88ad2cf0f5abf2ad4e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc6df8957750d63b1110c104c90ad10b64ef7f56f3de88ad2cf0f5abf2ad4e8f->enter($__internal_fc6df8957750d63b1110c104c90ad10b64ef7f56f3de88ad2cf0f5abf2ad4e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_fc6df8957750d63b1110c104c90ad10b64ef7f56f3de88ad2cf0f5abf2ad4e8f->leave($__internal_fc6df8957750d63b1110c104c90ad10b64ef7f56f3de88ad2cf0f5abf2ad4e8f_prof);

        
        $__internal_7256c16d653cb95ef4b9c7bfe5f3eb364a6faad304e8c167d6bcd9fad0fff418->leave($__internal_7256c16d653cb95ef4b9c7bfe5f3eb364a6faad304e8c167d6bcd9fad0fff418_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_48805b7fd5690c8d74e4c03abbe039102431bb979c9227a23e668403d586e7e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48805b7fd5690c8d74e4c03abbe039102431bb979c9227a23e668403d586e7e5->enter($__internal_48805b7fd5690c8d74e4c03abbe039102431bb979c9227a23e668403d586e7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_44d277f06a2e521653052bd037abe63dd4baa7c32e342ede396477726033d3c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d277f06a2e521653052bd037abe63dd4baa7c32e342ede396477726033d3c5->enter($__internal_44d277f06a2e521653052bd037abe63dd4baa7c32e342ede396477726033d3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_44d277f06a2e521653052bd037abe63dd4baa7c32e342ede396477726033d3c5->leave($__internal_44d277f06a2e521653052bd037abe63dd4baa7c32e342ede396477726033d3c5_prof);

        
        $__internal_48805b7fd5690c8d74e4c03abbe039102431bb979c9227a23e668403d586e7e5->leave($__internal_48805b7fd5690c8d74e4c03abbe039102431bb979c9227a23e668403d586e7e5_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a3fe86473b1144c747e087e748e9cedbed24b6e45a3ae9f933bea259199d6a38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3fe86473b1144c747e087e748e9cedbed24b6e45a3ae9f933bea259199d6a38->enter($__internal_a3fe86473b1144c747e087e748e9cedbed24b6e45a3ae9f933bea259199d6a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_c3f1a788c1a4f142ce74ca678e105af97899af0b5abd630cf2648354b5b0db76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3f1a788c1a4f142ce74ca678e105af97899af0b5abd630cf2648354b5b0db76->enter($__internal_c3f1a788c1a4f142ce74ca678e105af97899af0b5abd630cf2648354b5b0db76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c3f1a788c1a4f142ce74ca678e105af97899af0b5abd630cf2648354b5b0db76->leave($__internal_c3f1a788c1a4f142ce74ca678e105af97899af0b5abd630cf2648354b5b0db76_prof);

        
        $__internal_a3fe86473b1144c747e087e748e9cedbed24b6e45a3ae9f933bea259199d6a38->leave($__internal_a3fe86473b1144c747e087e748e9cedbed24b6e45a3ae9f933bea259199d6a38_prof);

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
