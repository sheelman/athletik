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
        $__internal_18901838c2c72767d288b926be19ad343cca6d8d44b80bd10ff7d1a9bf633f5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18901838c2c72767d288b926be19ad343cca6d8d44b80bd10ff7d1a9bf633f5c->enter($__internal_18901838c2c72767d288b926be19ad343cca6d8d44b80bd10ff7d1a9bf633f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_22a55075e4f74db680d8af1848508b18a788ff2d0c39dabccc844d7742cdd400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22a55075e4f74db680d8af1848508b18a788ff2d0c39dabccc844d7742cdd400->enter($__internal_22a55075e4f74db680d8af1848508b18a788ff2d0c39dabccc844d7742cdd400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_18901838c2c72767d288b926be19ad343cca6d8d44b80bd10ff7d1a9bf633f5c->leave($__internal_18901838c2c72767d288b926be19ad343cca6d8d44b80bd10ff7d1a9bf633f5c_prof);

        
        $__internal_22a55075e4f74db680d8af1848508b18a788ff2d0c39dabccc844d7742cdd400->leave($__internal_22a55075e4f74db680d8af1848508b18a788ff2d0c39dabccc844d7742cdd400_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_dfad8b1ee21670f46d4de8c0a277cc343abc8bb1906dbfbdfd4016d91ee614a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfad8b1ee21670f46d4de8c0a277cc343abc8bb1906dbfbdfd4016d91ee614a9->enter($__internal_dfad8b1ee21670f46d4de8c0a277cc343abc8bb1906dbfbdfd4016d91ee614a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_a67661487f95f1ea32cd29b3021257d70c56726b23d4a3153583a04e9552b60e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67661487f95f1ea32cd29b3021257d70c56726b23d4a3153583a04e9552b60e->enter($__internal_a67661487f95f1ea32cd29b3021257d70c56726b23d4a3153583a04e9552b60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_a67661487f95f1ea32cd29b3021257d70c56726b23d4a3153583a04e9552b60e->leave($__internal_a67661487f95f1ea32cd29b3021257d70c56726b23d4a3153583a04e9552b60e_prof);

        
        $__internal_dfad8b1ee21670f46d4de8c0a277cc343abc8bb1906dbfbdfd4016d91ee614a9->leave($__internal_dfad8b1ee21670f46d4de8c0a277cc343abc8bb1906dbfbdfd4016d91ee614a9_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0830c34ccfb604ed216ef00dfd67b34f6e593f504fa72ccf4ec9d864d0d9a597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0830c34ccfb604ed216ef00dfd67b34f6e593f504fa72ccf4ec9d864d0d9a597->enter($__internal_0830c34ccfb604ed216ef00dfd67b34f6e593f504fa72ccf4ec9d864d0d9a597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_21a222ddb142d735e3b5fbc0842fa96b05b912c287deb861d568a57bfce83e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a222ddb142d735e3b5fbc0842fa96b05b912c287deb861d568a57bfce83e6d->enter($__internal_21a222ddb142d735e3b5fbc0842fa96b05b912c287deb861d568a57bfce83e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_21a222ddb142d735e3b5fbc0842fa96b05b912c287deb861d568a57bfce83e6d->leave($__internal_21a222ddb142d735e3b5fbc0842fa96b05b912c287deb861d568a57bfce83e6d_prof);

        
        $__internal_0830c34ccfb604ed216ef00dfd67b34f6e593f504fa72ccf4ec9d864d0d9a597->leave($__internal_0830c34ccfb604ed216ef00dfd67b34f6e593f504fa72ccf4ec9d864d0d9a597_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4b6340b0c1510cb2a6ffac48c6311131755be48c89c3031711e2e4b079637c64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b6340b0c1510cb2a6ffac48c6311131755be48c89c3031711e2e4b079637c64->enter($__internal_4b6340b0c1510cb2a6ffac48c6311131755be48c89c3031711e2e4b079637c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_7a7494bd7acc616f87104eba8a7f4381ea3b44e9b4b64ede57c5f61a5ac348e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a7494bd7acc616f87104eba8a7f4381ea3b44e9b4b64ede57c5f61a5ac348e1->enter($__internal_7a7494bd7acc616f87104eba8a7f4381ea3b44e9b4b64ede57c5f61a5ac348e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7a7494bd7acc616f87104eba8a7f4381ea3b44e9b4b64ede57c5f61a5ac348e1->leave($__internal_7a7494bd7acc616f87104eba8a7f4381ea3b44e9b4b64ede57c5f61a5ac348e1_prof);

        
        $__internal_4b6340b0c1510cb2a6ffac48c6311131755be48c89c3031711e2e4b079637c64->leave($__internal_4b6340b0c1510cb2a6ffac48c6311131755be48c89c3031711e2e4b079637c64_prof);

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
