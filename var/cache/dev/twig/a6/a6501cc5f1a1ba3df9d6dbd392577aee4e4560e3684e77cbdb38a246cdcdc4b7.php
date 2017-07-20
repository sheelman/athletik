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
        $__internal_413739d24bbac7fef95e314a1499a55b622910cf04d5e428e63b8a801772ea51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_413739d24bbac7fef95e314a1499a55b622910cf04d5e428e63b8a801772ea51->enter($__internal_413739d24bbac7fef95e314a1499a55b622910cf04d5e428e63b8a801772ea51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_94db141ec9c7d73988a5dbbad0a447d3cfd6c22e92ccf2fc8b80b81e36cfb33c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94db141ec9c7d73988a5dbbad0a447d3cfd6c22e92ccf2fc8b80b81e36cfb33c->enter($__internal_94db141ec9c7d73988a5dbbad0a447d3cfd6c22e92ccf2fc8b80b81e36cfb33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_413739d24bbac7fef95e314a1499a55b622910cf04d5e428e63b8a801772ea51->leave($__internal_413739d24bbac7fef95e314a1499a55b622910cf04d5e428e63b8a801772ea51_prof);

        
        $__internal_94db141ec9c7d73988a5dbbad0a447d3cfd6c22e92ccf2fc8b80b81e36cfb33c->leave($__internal_94db141ec9c7d73988a5dbbad0a447d3cfd6c22e92ccf2fc8b80b81e36cfb33c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3216e3342dada51610e8766aebfd9e694c2bd1c105b6dfbb60c316852540a571 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3216e3342dada51610e8766aebfd9e694c2bd1c105b6dfbb60c316852540a571->enter($__internal_3216e3342dada51610e8766aebfd9e694c2bd1c105b6dfbb60c316852540a571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_3963e2cc804e3f43ef95062e50bd28f65c2ff65f5a92fc6df6feb4a8231c2fa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3963e2cc804e3f43ef95062e50bd28f65c2ff65f5a92fc6df6feb4a8231c2fa0->enter($__internal_3963e2cc804e3f43ef95062e50bd28f65c2ff65f5a92fc6df6feb4a8231c2fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_3963e2cc804e3f43ef95062e50bd28f65c2ff65f5a92fc6df6feb4a8231c2fa0->leave($__internal_3963e2cc804e3f43ef95062e50bd28f65c2ff65f5a92fc6df6feb4a8231c2fa0_prof);

        
        $__internal_3216e3342dada51610e8766aebfd9e694c2bd1c105b6dfbb60c316852540a571->leave($__internal_3216e3342dada51610e8766aebfd9e694c2bd1c105b6dfbb60c316852540a571_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5728f8bb330e20c7b89a3e0b49cedf1e92b2be74115081f63b248bf3825135e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5728f8bb330e20c7b89a3e0b49cedf1e92b2be74115081f63b248bf3825135e6->enter($__internal_5728f8bb330e20c7b89a3e0b49cedf1e92b2be74115081f63b248bf3825135e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_811482dd1d5c0a8e855515025e1dda0c0cd6f993923028fe3735e91a27d8c23b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811482dd1d5c0a8e855515025e1dda0c0cd6f993923028fe3735e91a27d8c23b->enter($__internal_811482dd1d5c0a8e855515025e1dda0c0cd6f993923028fe3735e91a27d8c23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_811482dd1d5c0a8e855515025e1dda0c0cd6f993923028fe3735e91a27d8c23b->leave($__internal_811482dd1d5c0a8e855515025e1dda0c0cd6f993923028fe3735e91a27d8c23b_prof);

        
        $__internal_5728f8bb330e20c7b89a3e0b49cedf1e92b2be74115081f63b248bf3825135e6->leave($__internal_5728f8bb330e20c7b89a3e0b49cedf1e92b2be74115081f63b248bf3825135e6_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_bd2c25d4da6be406e7d72a2cc4af0df3441a066d8f927b3ecb59ab77272a9d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd2c25d4da6be406e7d72a2cc4af0df3441a066d8f927b3ecb59ab77272a9d8c->enter($__internal_bd2c25d4da6be406e7d72a2cc4af0df3441a066d8f927b3ecb59ab77272a9d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_bce133be223bb8854866a0293b6c536ccebc630b6244809dbb2da1e7e0ae8f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce133be223bb8854866a0293b6c536ccebc630b6244809dbb2da1e7e0ae8f43->enter($__internal_bce133be223bb8854866a0293b6c536ccebc630b6244809dbb2da1e7e0ae8f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bce133be223bb8854866a0293b6c536ccebc630b6244809dbb2da1e7e0ae8f43->leave($__internal_bce133be223bb8854866a0293b6c536ccebc630b6244809dbb2da1e7e0ae8f43_prof);

        
        $__internal_bd2c25d4da6be406e7d72a2cc4af0df3441a066d8f927b3ecb59ab77272a9d8c->leave($__internal_bd2c25d4da6be406e7d72a2cc4af0df3441a066d8f927b3ecb59ab77272a9d8c_prof);

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
