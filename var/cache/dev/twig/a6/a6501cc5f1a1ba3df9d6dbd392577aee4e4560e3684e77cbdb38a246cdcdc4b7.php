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
        $__internal_e3c592d64d9a5a6a8938d589c959ae09fc171b62aada976de914fbd9043af260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3c592d64d9a5a6a8938d589c959ae09fc171b62aada976de914fbd9043af260->enter($__internal_e3c592d64d9a5a6a8938d589c959ae09fc171b62aada976de914fbd9043af260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_3c67940c0b9be95b91be7ee6347a0c50aa8befba28c00138d8faef51852a2d09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c67940c0b9be95b91be7ee6347a0c50aa8befba28c00138d8faef51852a2d09->enter($__internal_3c67940c0b9be95b91be7ee6347a0c50aa8befba28c00138d8faef51852a2d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e3c592d64d9a5a6a8938d589c959ae09fc171b62aada976de914fbd9043af260->leave($__internal_e3c592d64d9a5a6a8938d589c959ae09fc171b62aada976de914fbd9043af260_prof);

        
        $__internal_3c67940c0b9be95b91be7ee6347a0c50aa8befba28c00138d8faef51852a2d09->leave($__internal_3c67940c0b9be95b91be7ee6347a0c50aa8befba28c00138d8faef51852a2d09_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_14373c25dc2c1d3915599992245820af963f0331eb26dca9dc99aa96613e9d6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14373c25dc2c1d3915599992245820af963f0331eb26dca9dc99aa96613e9d6a->enter($__internal_14373c25dc2c1d3915599992245820af963f0331eb26dca9dc99aa96613e9d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_3be9919bda1736738eae27025386b32e9904602877088c3a76290c72d8641e85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be9919bda1736738eae27025386b32e9904602877088c3a76290c72d8641e85->enter($__internal_3be9919bda1736738eae27025386b32e9904602877088c3a76290c72d8641e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_3be9919bda1736738eae27025386b32e9904602877088c3a76290c72d8641e85->leave($__internal_3be9919bda1736738eae27025386b32e9904602877088c3a76290c72d8641e85_prof);

        
        $__internal_14373c25dc2c1d3915599992245820af963f0331eb26dca9dc99aa96613e9d6a->leave($__internal_14373c25dc2c1d3915599992245820af963f0331eb26dca9dc99aa96613e9d6a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b331a9983dc29e7e703a97bbb28aac600d63a4fb0507589db68c671b53ef7987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b331a9983dc29e7e703a97bbb28aac600d63a4fb0507589db68c671b53ef7987->enter($__internal_b331a9983dc29e7e703a97bbb28aac600d63a4fb0507589db68c671b53ef7987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_1f0572c2db6bbffededd12587a1e5971724f8e7933c4ddc3994fe56949ec5094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f0572c2db6bbffededd12587a1e5971724f8e7933c4ddc3994fe56949ec5094->enter($__internal_1f0572c2db6bbffededd12587a1e5971724f8e7933c4ddc3994fe56949ec5094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1f0572c2db6bbffededd12587a1e5971724f8e7933c4ddc3994fe56949ec5094->leave($__internal_1f0572c2db6bbffededd12587a1e5971724f8e7933c4ddc3994fe56949ec5094_prof);

        
        $__internal_b331a9983dc29e7e703a97bbb28aac600d63a4fb0507589db68c671b53ef7987->leave($__internal_b331a9983dc29e7e703a97bbb28aac600d63a4fb0507589db68c671b53ef7987_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_343abd2bf3a4cc64c1c639f687d8456b62f6b97d849a89482612f31bec70b693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_343abd2bf3a4cc64c1c639f687d8456b62f6b97d849a89482612f31bec70b693->enter($__internal_343abd2bf3a4cc64c1c639f687d8456b62f6b97d849a89482612f31bec70b693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_4880fae467255a1d0c10c5c9be2fb07700d5eb13c3880702ef86ccf115bcc0b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4880fae467255a1d0c10c5c9be2fb07700d5eb13c3880702ef86ccf115bcc0b6->enter($__internal_4880fae467255a1d0c10c5c9be2fb07700d5eb13c3880702ef86ccf115bcc0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4880fae467255a1d0c10c5c9be2fb07700d5eb13c3880702ef86ccf115bcc0b6->leave($__internal_4880fae467255a1d0c10c5c9be2fb07700d5eb13c3880702ef86ccf115bcc0b6_prof);

        
        $__internal_343abd2bf3a4cc64c1c639f687d8456b62f6b97d849a89482612f31bec70b693->leave($__internal_343abd2bf3a4cc64c1c639f687d8456b62f6b97d849a89482612f31bec70b693_prof);

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
