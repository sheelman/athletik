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
        $__internal_8c2f5830ab6573dddf88faff4af83a7c32db4be71cfc583ec7f9b5ce0e65b98c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c2f5830ab6573dddf88faff4af83a7c32db4be71cfc583ec7f9b5ce0e65b98c->enter($__internal_8c2f5830ab6573dddf88faff4af83a7c32db4be71cfc583ec7f9b5ce0e65b98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_e0c352eee5808e8f1bc92acb70b0bde4a23c897b956163235f0d609dfadefbe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c352eee5808e8f1bc92acb70b0bde4a23c897b956163235f0d609dfadefbe8->enter($__internal_e0c352eee5808e8f1bc92acb70b0bde4a23c897b956163235f0d609dfadefbe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8c2f5830ab6573dddf88faff4af83a7c32db4be71cfc583ec7f9b5ce0e65b98c->leave($__internal_8c2f5830ab6573dddf88faff4af83a7c32db4be71cfc583ec7f9b5ce0e65b98c_prof);

        
        $__internal_e0c352eee5808e8f1bc92acb70b0bde4a23c897b956163235f0d609dfadefbe8->leave($__internal_e0c352eee5808e8f1bc92acb70b0bde4a23c897b956163235f0d609dfadefbe8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d481f278e2b4b7d5e70a9b94b9c5266ddb870f179c1428b80f6ceb6a3ab66d39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d481f278e2b4b7d5e70a9b94b9c5266ddb870f179c1428b80f6ceb6a3ab66d39->enter($__internal_d481f278e2b4b7d5e70a9b94b9c5266ddb870f179c1428b80f6ceb6a3ab66d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_44358c0628972005cbd288af9a2ab387c4a77949cfcb0c1e23e3522d92ec8a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44358c0628972005cbd288af9a2ab387c4a77949cfcb0c1e23e3522d92ec8a4c->enter($__internal_44358c0628972005cbd288af9a2ab387c4a77949cfcb0c1e23e3522d92ec8a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_44358c0628972005cbd288af9a2ab387c4a77949cfcb0c1e23e3522d92ec8a4c->leave($__internal_44358c0628972005cbd288af9a2ab387c4a77949cfcb0c1e23e3522d92ec8a4c_prof);

        
        $__internal_d481f278e2b4b7d5e70a9b94b9c5266ddb870f179c1428b80f6ceb6a3ab66d39->leave($__internal_d481f278e2b4b7d5e70a9b94b9c5266ddb870f179c1428b80f6ceb6a3ab66d39_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3a3a85325ccb0a4b02fe5fe1b233b3fd30483807e923a5239e78edc1a444a8cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a3a85325ccb0a4b02fe5fe1b233b3fd30483807e923a5239e78edc1a444a8cc->enter($__internal_3a3a85325ccb0a4b02fe5fe1b233b3fd30483807e923a5239e78edc1a444a8cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_ebfecbfc5193ca3fafd37055b7d5e69fa1c1c1c2fe43ddb9ff8709e0539f4b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebfecbfc5193ca3fafd37055b7d5e69fa1c1c1c2fe43ddb9ff8709e0539f4b6b->enter($__internal_ebfecbfc5193ca3fafd37055b7d5e69fa1c1c1c2fe43ddb9ff8709e0539f4b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ebfecbfc5193ca3fafd37055b7d5e69fa1c1c1c2fe43ddb9ff8709e0539f4b6b->leave($__internal_ebfecbfc5193ca3fafd37055b7d5e69fa1c1c1c2fe43ddb9ff8709e0539f4b6b_prof);

        
        $__internal_3a3a85325ccb0a4b02fe5fe1b233b3fd30483807e923a5239e78edc1a444a8cc->leave($__internal_3a3a85325ccb0a4b02fe5fe1b233b3fd30483807e923a5239e78edc1a444a8cc_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cae124a5f3aa126c1a38d8b1c4f85e490a53f5a007a606d3d72a2aa818c6924f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cae124a5f3aa126c1a38d8b1c4f85e490a53f5a007a606d3d72a2aa818c6924f->enter($__internal_cae124a5f3aa126c1a38d8b1c4f85e490a53f5a007a606d3d72a2aa818c6924f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_772335ae0b4cd87fea5e68f4a19b62f3ee8439acef2799a1c384a67539d59463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772335ae0b4cd87fea5e68f4a19b62f3ee8439acef2799a1c384a67539d59463->enter($__internal_772335ae0b4cd87fea5e68f4a19b62f3ee8439acef2799a1c384a67539d59463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_772335ae0b4cd87fea5e68f4a19b62f3ee8439acef2799a1c384a67539d59463->leave($__internal_772335ae0b4cd87fea5e68f4a19b62f3ee8439acef2799a1c384a67539d59463_prof);

        
        $__internal_cae124a5f3aa126c1a38d8b1c4f85e490a53f5a007a606d3d72a2aa818c6924f->leave($__internal_cae124a5f3aa126c1a38d8b1c4f85e490a53f5a007a606d3d72a2aa818c6924f_prof);

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
