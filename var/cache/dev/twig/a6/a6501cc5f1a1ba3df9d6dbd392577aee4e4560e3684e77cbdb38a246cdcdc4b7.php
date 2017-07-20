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
        $__internal_50dc07a3559b021ab81efffc2e8bc0eca7e1e40a48c1e143eaa9a0b327eafeb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50dc07a3559b021ab81efffc2e8bc0eca7e1e40a48c1e143eaa9a0b327eafeb3->enter($__internal_50dc07a3559b021ab81efffc2e8bc0eca7e1e40a48c1e143eaa9a0b327eafeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_b1e36ed57f5a1551e0c06b96be588f26c243ba2e7f72aa8d431beb59a1b35473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e36ed57f5a1551e0c06b96be588f26c243ba2e7f72aa8d431beb59a1b35473->enter($__internal_b1e36ed57f5a1551e0c06b96be588f26c243ba2e7f72aa8d431beb59a1b35473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_50dc07a3559b021ab81efffc2e8bc0eca7e1e40a48c1e143eaa9a0b327eafeb3->leave($__internal_50dc07a3559b021ab81efffc2e8bc0eca7e1e40a48c1e143eaa9a0b327eafeb3_prof);

        
        $__internal_b1e36ed57f5a1551e0c06b96be588f26c243ba2e7f72aa8d431beb59a1b35473->leave($__internal_b1e36ed57f5a1551e0c06b96be588f26c243ba2e7f72aa8d431beb59a1b35473_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_29bb27fc43710b475f52078e4e4d6a02adaeabab0d66c0051ac37ed714066f62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29bb27fc43710b475f52078e4e4d6a02adaeabab0d66c0051ac37ed714066f62->enter($__internal_29bb27fc43710b475f52078e4e4d6a02adaeabab0d66c0051ac37ed714066f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_e616e55593153964c6d75412f27d026efaec7a9d7574bd842d59a1d13fa45e72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e616e55593153964c6d75412f27d026efaec7a9d7574bd842d59a1d13fa45e72->enter($__internal_e616e55593153964c6d75412f27d026efaec7a9d7574bd842d59a1d13fa45e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_e616e55593153964c6d75412f27d026efaec7a9d7574bd842d59a1d13fa45e72->leave($__internal_e616e55593153964c6d75412f27d026efaec7a9d7574bd842d59a1d13fa45e72_prof);

        
        $__internal_29bb27fc43710b475f52078e4e4d6a02adaeabab0d66c0051ac37ed714066f62->leave($__internal_29bb27fc43710b475f52078e4e4d6a02adaeabab0d66c0051ac37ed714066f62_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8f7182e81f74afdc079363c43fa3c5d9e860b1d9e2f1af5c08ca297116eaee6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f7182e81f74afdc079363c43fa3c5d9e860b1d9e2f1af5c08ca297116eaee6e->enter($__internal_8f7182e81f74afdc079363c43fa3c5d9e860b1d9e2f1af5c08ca297116eaee6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_ab94fe7c24613b80bbfa857f6e891eae9276816d9fcc08979afade07bcbe0834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab94fe7c24613b80bbfa857f6e891eae9276816d9fcc08979afade07bcbe0834->enter($__internal_ab94fe7c24613b80bbfa857f6e891eae9276816d9fcc08979afade07bcbe0834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ab94fe7c24613b80bbfa857f6e891eae9276816d9fcc08979afade07bcbe0834->leave($__internal_ab94fe7c24613b80bbfa857f6e891eae9276816d9fcc08979afade07bcbe0834_prof);

        
        $__internal_8f7182e81f74afdc079363c43fa3c5d9e860b1d9e2f1af5c08ca297116eaee6e->leave($__internal_8f7182e81f74afdc079363c43fa3c5d9e860b1d9e2f1af5c08ca297116eaee6e_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_677f30c915b6415340005849078b901dc396c245f00ab2bf6b5c75c77823a4c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_677f30c915b6415340005849078b901dc396c245f00ab2bf6b5c75c77823a4c2->enter($__internal_677f30c915b6415340005849078b901dc396c245f00ab2bf6b5c75c77823a4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_c99bacd4135bcf65eb44c1061a34634a093c8c309531f55491fe28d570dd0a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c99bacd4135bcf65eb44c1061a34634a093c8c309531f55491fe28d570dd0a4a->enter($__internal_c99bacd4135bcf65eb44c1061a34634a093c8c309531f55491fe28d570dd0a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c99bacd4135bcf65eb44c1061a34634a093c8c309531f55491fe28d570dd0a4a->leave($__internal_c99bacd4135bcf65eb44c1061a34634a093c8c309531f55491fe28d570dd0a4a_prof);

        
        $__internal_677f30c915b6415340005849078b901dc396c245f00ab2bf6b5c75c77823a4c2->leave($__internal_677f30c915b6415340005849078b901dc396c245f00ab2bf6b5c75c77823a4c2_prof);

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
