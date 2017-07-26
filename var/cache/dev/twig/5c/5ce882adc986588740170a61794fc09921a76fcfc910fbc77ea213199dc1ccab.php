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
        $__internal_d37565087d965b0e3d259a32c672c7fa7a662efe88fbf791fa99eaa89afdccc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d37565087d965b0e3d259a32c672c7fa7a662efe88fbf791fa99eaa89afdccc4->enter($__internal_d37565087d965b0e3d259a32c672c7fa7a662efe88fbf791fa99eaa89afdccc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_c098810e06bad5e8cab3f0fdf22f048ac6cef25e1f9070a8cf7882fac5fd1931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c098810e06bad5e8cab3f0fdf22f048ac6cef25e1f9070a8cf7882fac5fd1931->enter($__internal_c098810e06bad5e8cab3f0fdf22f048ac6cef25e1f9070a8cf7882fac5fd1931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d37565087d965b0e3d259a32c672c7fa7a662efe88fbf791fa99eaa89afdccc4->leave($__internal_d37565087d965b0e3d259a32c672c7fa7a662efe88fbf791fa99eaa89afdccc4_prof);

        
        $__internal_c098810e06bad5e8cab3f0fdf22f048ac6cef25e1f9070a8cf7882fac5fd1931->leave($__internal_c098810e06bad5e8cab3f0fdf22f048ac6cef25e1f9070a8cf7882fac5fd1931_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b670df430d7c586fc2c133c10df85189bc947d5e161c34b45a2747c4df435052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b670df430d7c586fc2c133c10df85189bc947d5e161c34b45a2747c4df435052->enter($__internal_b670df430d7c586fc2c133c10df85189bc947d5e161c34b45a2747c4df435052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_5ead89d2ffd965979fc4cb1fe549374ed0cb4c0d4545b0ba306171756db6edfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ead89d2ffd965979fc4cb1fe549374ed0cb4c0d4545b0ba306171756db6edfd->enter($__internal_5ead89d2ffd965979fc4cb1fe549374ed0cb4c0d4545b0ba306171756db6edfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_5ead89d2ffd965979fc4cb1fe549374ed0cb4c0d4545b0ba306171756db6edfd->leave($__internal_5ead89d2ffd965979fc4cb1fe549374ed0cb4c0d4545b0ba306171756db6edfd_prof);

        
        $__internal_b670df430d7c586fc2c133c10df85189bc947d5e161c34b45a2747c4df435052->leave($__internal_b670df430d7c586fc2c133c10df85189bc947d5e161c34b45a2747c4df435052_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_aea42c09decdba77e2dfe29cd7a7eeace1f4c96151be56e20802531867af88b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aea42c09decdba77e2dfe29cd7a7eeace1f4c96151be56e20802531867af88b4->enter($__internal_aea42c09decdba77e2dfe29cd7a7eeace1f4c96151be56e20802531867af88b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_bc4b2642c13d0ee4f78f91aa30bfa78ad49fb62749e42e61788b5ee0ec3a39b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc4b2642c13d0ee4f78f91aa30bfa78ad49fb62749e42e61788b5ee0ec3a39b3->enter($__internal_bc4b2642c13d0ee4f78f91aa30bfa78ad49fb62749e42e61788b5ee0ec3a39b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bc4b2642c13d0ee4f78f91aa30bfa78ad49fb62749e42e61788b5ee0ec3a39b3->leave($__internal_bc4b2642c13d0ee4f78f91aa30bfa78ad49fb62749e42e61788b5ee0ec3a39b3_prof);

        
        $__internal_aea42c09decdba77e2dfe29cd7a7eeace1f4c96151be56e20802531867af88b4->leave($__internal_aea42c09decdba77e2dfe29cd7a7eeace1f4c96151be56e20802531867af88b4_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c7cb7af95312a9d84c8c7a8ee7d72792fd27c7a66e03b22cabb105e0b761ebac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7cb7af95312a9d84c8c7a8ee7d72792fd27c7a66e03b22cabb105e0b761ebac->enter($__internal_c7cb7af95312a9d84c8c7a8ee7d72792fd27c7a66e03b22cabb105e0b761ebac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_06bcd7be5365c7f2e8a205436e677a3fd169cef80be93b0b6ea8115ccc4ea4f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06bcd7be5365c7f2e8a205436e677a3fd169cef80be93b0b6ea8115ccc4ea4f6->enter($__internal_06bcd7be5365c7f2e8a205436e677a3fd169cef80be93b0b6ea8115ccc4ea4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_06bcd7be5365c7f2e8a205436e677a3fd169cef80be93b0b6ea8115ccc4ea4f6->leave($__internal_06bcd7be5365c7f2e8a205436e677a3fd169cef80be93b0b6ea8115ccc4ea4f6_prof);

        
        $__internal_c7cb7af95312a9d84c8c7a8ee7d72792fd27c7a66e03b22cabb105e0b761ebac->leave($__internal_c7cb7af95312a9d84c8c7a8ee7d72792fd27c7a66e03b22cabb105e0b761ebac_prof);

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
