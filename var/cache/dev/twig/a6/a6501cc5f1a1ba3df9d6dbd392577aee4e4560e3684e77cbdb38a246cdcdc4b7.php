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
        $__internal_2fa26c37e58fb12522504c0ddf5f45df3139b0c3a80dffa2e852055a910d3261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fa26c37e58fb12522504c0ddf5f45df3139b0c3a80dffa2e852055a910d3261->enter($__internal_2fa26c37e58fb12522504c0ddf5f45df3139b0c3a80dffa2e852055a910d3261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_209fe30491b53c451cd21d70ebdfc0b4865c5a466f8f7f01ab4c716097bcfbc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_209fe30491b53c451cd21d70ebdfc0b4865c5a466f8f7f01ab4c716097bcfbc7->enter($__internal_209fe30491b53c451cd21d70ebdfc0b4865c5a466f8f7f01ab4c716097bcfbc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2fa26c37e58fb12522504c0ddf5f45df3139b0c3a80dffa2e852055a910d3261->leave($__internal_2fa26c37e58fb12522504c0ddf5f45df3139b0c3a80dffa2e852055a910d3261_prof);

        
        $__internal_209fe30491b53c451cd21d70ebdfc0b4865c5a466f8f7f01ab4c716097bcfbc7->leave($__internal_209fe30491b53c451cd21d70ebdfc0b4865c5a466f8f7f01ab4c716097bcfbc7_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b2a201fee0fb6478cbd07f2e401a6fcfffbd84ca2d23ba97602005ebfc99e145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2a201fee0fb6478cbd07f2e401a6fcfffbd84ca2d23ba97602005ebfc99e145->enter($__internal_b2a201fee0fb6478cbd07f2e401a6fcfffbd84ca2d23ba97602005ebfc99e145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_d2b0762eb98352e9ae916dc440a56baf0ebd1f37ef1d3993a8941181ab5e3186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b0762eb98352e9ae916dc440a56baf0ebd1f37ef1d3993a8941181ab5e3186->enter($__internal_d2b0762eb98352e9ae916dc440a56baf0ebd1f37ef1d3993a8941181ab5e3186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_d2b0762eb98352e9ae916dc440a56baf0ebd1f37ef1d3993a8941181ab5e3186->leave($__internal_d2b0762eb98352e9ae916dc440a56baf0ebd1f37ef1d3993a8941181ab5e3186_prof);

        
        $__internal_b2a201fee0fb6478cbd07f2e401a6fcfffbd84ca2d23ba97602005ebfc99e145->leave($__internal_b2a201fee0fb6478cbd07f2e401a6fcfffbd84ca2d23ba97602005ebfc99e145_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_76d31d9f9231e21ef4703a27983ee1451eef47be1b798b8e4dabb03463fc4084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76d31d9f9231e21ef4703a27983ee1451eef47be1b798b8e4dabb03463fc4084->enter($__internal_76d31d9f9231e21ef4703a27983ee1451eef47be1b798b8e4dabb03463fc4084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_2ad1dc3fd69aa0fc1171fed787a0f8485acc1712f8bb3af72914387a083b5ed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad1dc3fd69aa0fc1171fed787a0f8485acc1712f8bb3af72914387a083b5ed8->enter($__internal_2ad1dc3fd69aa0fc1171fed787a0f8485acc1712f8bb3af72914387a083b5ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2ad1dc3fd69aa0fc1171fed787a0f8485acc1712f8bb3af72914387a083b5ed8->leave($__internal_2ad1dc3fd69aa0fc1171fed787a0f8485acc1712f8bb3af72914387a083b5ed8_prof);

        
        $__internal_76d31d9f9231e21ef4703a27983ee1451eef47be1b798b8e4dabb03463fc4084->leave($__internal_76d31d9f9231e21ef4703a27983ee1451eef47be1b798b8e4dabb03463fc4084_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_451deeb874ece311126c19e5a9a2b2daf3dac5071f574cedc9418780b1a22aaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_451deeb874ece311126c19e5a9a2b2daf3dac5071f574cedc9418780b1a22aaa->enter($__internal_451deeb874ece311126c19e5a9a2b2daf3dac5071f574cedc9418780b1a22aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_8572c501d5c0c5609b664dfc573af42934b1338dba0de6929361208dfbb67b1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8572c501d5c0c5609b664dfc573af42934b1338dba0de6929361208dfbb67b1f->enter($__internal_8572c501d5c0c5609b664dfc573af42934b1338dba0de6929361208dfbb67b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8572c501d5c0c5609b664dfc573af42934b1338dba0de6929361208dfbb67b1f->leave($__internal_8572c501d5c0c5609b664dfc573af42934b1338dba0de6929361208dfbb67b1f_prof);

        
        $__internal_451deeb874ece311126c19e5a9a2b2daf3dac5071f574cedc9418780b1a22aaa->leave($__internal_451deeb874ece311126c19e5a9a2b2daf3dac5071f574cedc9418780b1a22aaa_prof);

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
