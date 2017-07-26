<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_e956ffa00a4d4e43ca666274a70e1663a40ea87bc391df2b915829aad1e97516 extends Twig_Template
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
        $__internal_f4bf1ee64f9ca893fbe57cc1b052888fc27c728a16d696fc7c81bbc08dfd3a59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4bf1ee64f9ca893fbe57cc1b052888fc27c728a16d696fc7c81bbc08dfd3a59->enter($__internal_f4bf1ee64f9ca893fbe57cc1b052888fc27c728a16d696fc7c81bbc08dfd3a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_2226ee87e147d12967e6cc60f175d46ad14d718881ba82389ac61f405687bfb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2226ee87e147d12967e6cc60f175d46ad14d718881ba82389ac61f405687bfb8->enter($__internal_2226ee87e147d12967e6cc60f175d46ad14d718881ba82389ac61f405687bfb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f4bf1ee64f9ca893fbe57cc1b052888fc27c728a16d696fc7c81bbc08dfd3a59->leave($__internal_f4bf1ee64f9ca893fbe57cc1b052888fc27c728a16d696fc7c81bbc08dfd3a59_prof);

        
        $__internal_2226ee87e147d12967e6cc60f175d46ad14d718881ba82389ac61f405687bfb8->leave($__internal_2226ee87e147d12967e6cc60f175d46ad14d718881ba82389ac61f405687bfb8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e5cb9c06f05c3f43bb06fce702a6d6e6eef6c77176bc116a083a45c90f50d81c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5cb9c06f05c3f43bb06fce702a6d6e6eef6c77176bc116a083a45c90f50d81c->enter($__internal_e5cb9c06f05c3f43bb06fce702a6d6e6eef6c77176bc116a083a45c90f50d81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_50f0548bf98a65ad8406cf23d1fedbc99ced2c5a460a365b052bf57af3e672f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f0548bf98a65ad8406cf23d1fedbc99ced2c5a460a365b052bf57af3e672f3->enter($__internal_50f0548bf98a65ad8406cf23d1fedbc99ced2c5a460a365b052bf57af3e672f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_50f0548bf98a65ad8406cf23d1fedbc99ced2c5a460a365b052bf57af3e672f3->leave($__internal_50f0548bf98a65ad8406cf23d1fedbc99ced2c5a460a365b052bf57af3e672f3_prof);

        
        $__internal_e5cb9c06f05c3f43bb06fce702a6d6e6eef6c77176bc116a083a45c90f50d81c->leave($__internal_e5cb9c06f05c3f43bb06fce702a6d6e6eef6c77176bc116a083a45c90f50d81c_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_85cc6966102b270a12b1110a8d2fd10df1334194a07991a3078db830b8933dd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85cc6966102b270a12b1110a8d2fd10df1334194a07991a3078db830b8933dd1->enter($__internal_85cc6966102b270a12b1110a8d2fd10df1334194a07991a3078db830b8933dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_abad1db2ad6ae74f1c7970fcf72f78eb4c83ab75f329e41e9ed42eef1ffb3c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abad1db2ad6ae74f1c7970fcf72f78eb4c83ab75f329e41e9ed42eef1ffb3c18->enter($__internal_abad1db2ad6ae74f1c7970fcf72f78eb4c83ab75f329e41e9ed42eef1ffb3c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_abad1db2ad6ae74f1c7970fcf72f78eb4c83ab75f329e41e9ed42eef1ffb3c18->leave($__internal_abad1db2ad6ae74f1c7970fcf72f78eb4c83ab75f329e41e9ed42eef1ffb3c18_prof);

        
        $__internal_85cc6966102b270a12b1110a8d2fd10df1334194a07991a3078db830b8933dd1->leave($__internal_85cc6966102b270a12b1110a8d2fd10df1334194a07991a3078db830b8933dd1_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f686210e42838c6e9c07f056fbeee84c79b1a418bdc6ab3a1b4a0d8bad9cd6b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f686210e42838c6e9c07f056fbeee84c79b1a418bdc6ab3a1b4a0d8bad9cd6b1->enter($__internal_f686210e42838c6e9c07f056fbeee84c79b1a418bdc6ab3a1b4a0d8bad9cd6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_4f32ce62d2aaf84773d1ac82a40545d1e129a4c36710a4f33b0e5642adcdd867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f32ce62d2aaf84773d1ac82a40545d1e129a4c36710a4f33b0e5642adcdd867->enter($__internal_4f32ce62d2aaf84773d1ac82a40545d1e129a4c36710a4f33b0e5642adcdd867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4f32ce62d2aaf84773d1ac82a40545d1e129a4c36710a4f33b0e5642adcdd867->leave($__internal_4f32ce62d2aaf84773d1ac82a40545d1e129a4c36710a4f33b0e5642adcdd867_prof);

        
        $__internal_f686210e42838c6e9c07f056fbeee84c79b1a418bdc6ab3a1b4a0d8bad9cd6b1->leave($__internal_f686210e42838c6e9c07f056fbeee84c79b1a418bdc6ab3a1b4a0d8bad9cd6b1_prof);

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
", "FOSUserBundle:Resetting:email.txt.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
