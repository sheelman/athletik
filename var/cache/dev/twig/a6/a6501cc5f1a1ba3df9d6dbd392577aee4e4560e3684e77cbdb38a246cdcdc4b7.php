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
        $__internal_45c10825d4ead93e4952d2367231326a41dfec2a98bf2ba887cafd2b75d1793b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45c10825d4ead93e4952d2367231326a41dfec2a98bf2ba887cafd2b75d1793b->enter($__internal_45c10825d4ead93e4952d2367231326a41dfec2a98bf2ba887cafd2b75d1793b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_5fdf909abe1de679e30e8ffe21f01c75ea4668a977d5596493e15d66bc129c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fdf909abe1de679e30e8ffe21f01c75ea4668a977d5596493e15d66bc129c34->enter($__internal_5fdf909abe1de679e30e8ffe21f01c75ea4668a977d5596493e15d66bc129c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_45c10825d4ead93e4952d2367231326a41dfec2a98bf2ba887cafd2b75d1793b->leave($__internal_45c10825d4ead93e4952d2367231326a41dfec2a98bf2ba887cafd2b75d1793b_prof);

        
        $__internal_5fdf909abe1de679e30e8ffe21f01c75ea4668a977d5596493e15d66bc129c34->leave($__internal_5fdf909abe1de679e30e8ffe21f01c75ea4668a977d5596493e15d66bc129c34_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8cd7baea544b39231405d66c351b9bec9eb9e584330863838fd17138945ee962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cd7baea544b39231405d66c351b9bec9eb9e584330863838fd17138945ee962->enter($__internal_8cd7baea544b39231405d66c351b9bec9eb9e584330863838fd17138945ee962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_ac3e4cb1884faf5e19f47dd6aec9f4d9bd233c9318e5b142c3552815c3951b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac3e4cb1884faf5e19f47dd6aec9f4d9bd233c9318e5b142c3552815c3951b82->enter($__internal_ac3e4cb1884faf5e19f47dd6aec9f4d9bd233c9318e5b142c3552815c3951b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_ac3e4cb1884faf5e19f47dd6aec9f4d9bd233c9318e5b142c3552815c3951b82->leave($__internal_ac3e4cb1884faf5e19f47dd6aec9f4d9bd233c9318e5b142c3552815c3951b82_prof);

        
        $__internal_8cd7baea544b39231405d66c351b9bec9eb9e584330863838fd17138945ee962->leave($__internal_8cd7baea544b39231405d66c351b9bec9eb9e584330863838fd17138945ee962_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7e80cac5176d8271cf3f51bb893a9c72c7c1dc5cd2659853b9e13800268694ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e80cac5176d8271cf3f51bb893a9c72c7c1dc5cd2659853b9e13800268694ed->enter($__internal_7e80cac5176d8271cf3f51bb893a9c72c7c1dc5cd2659853b9e13800268694ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_ef9aca7b6ec219b3edeea108fa5c2864fd9461df81f451989dbd67b79e5a27f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9aca7b6ec219b3edeea108fa5c2864fd9461df81f451989dbd67b79e5a27f8->enter($__internal_ef9aca7b6ec219b3edeea108fa5c2864fd9461df81f451989dbd67b79e5a27f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ef9aca7b6ec219b3edeea108fa5c2864fd9461df81f451989dbd67b79e5a27f8->leave($__internal_ef9aca7b6ec219b3edeea108fa5c2864fd9461df81f451989dbd67b79e5a27f8_prof);

        
        $__internal_7e80cac5176d8271cf3f51bb893a9c72c7c1dc5cd2659853b9e13800268694ed->leave($__internal_7e80cac5176d8271cf3f51bb893a9c72c7c1dc5cd2659853b9e13800268694ed_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_71ff3f89abc8d5703802a9473e1535c0df94c1a84e2e8d5f6bb6424807e7fbff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71ff3f89abc8d5703802a9473e1535c0df94c1a84e2e8d5f6bb6424807e7fbff->enter($__internal_71ff3f89abc8d5703802a9473e1535c0df94c1a84e2e8d5f6bb6424807e7fbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_f0ef655b3b01d38c8bb398b84101a78b26a35fb41afd0e48112258b8435eb12a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ef655b3b01d38c8bb398b84101a78b26a35fb41afd0e48112258b8435eb12a->enter($__internal_f0ef655b3b01d38c8bb398b84101a78b26a35fb41afd0e48112258b8435eb12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f0ef655b3b01d38c8bb398b84101a78b26a35fb41afd0e48112258b8435eb12a->leave($__internal_f0ef655b3b01d38c8bb398b84101a78b26a35fb41afd0e48112258b8435eb12a_prof);

        
        $__internal_71ff3f89abc8d5703802a9473e1535c0df94c1a84e2e8d5f6bb6424807e7fbff->leave($__internal_71ff3f89abc8d5703802a9473e1535c0df94c1a84e2e8d5f6bb6424807e7fbff_prof);

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
