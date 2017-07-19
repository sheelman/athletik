<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_34c3a0643dfc7d72a581e0e6090842eda852bb909c6261b5861c9eda5e28b623 extends Twig_Template
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
        $__internal_71f790ae60ec96b8fa2364e22d8a9a1ddf022e922705e6eee6f2d6eac2427172 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71f790ae60ec96b8fa2364e22d8a9a1ddf022e922705e6eee6f2d6eac2427172->enter($__internal_71f790ae60ec96b8fa2364e22d8a9a1ddf022e922705e6eee6f2d6eac2427172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_21daabb7df957328d809f5a9452e781baf480b16fbc7bcf350aefc84dff3d094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21daabb7df957328d809f5a9452e781baf480b16fbc7bcf350aefc84dff3d094->enter($__internal_21daabb7df957328d809f5a9452e781baf480b16fbc7bcf350aefc84dff3d094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_71f790ae60ec96b8fa2364e22d8a9a1ddf022e922705e6eee6f2d6eac2427172->leave($__internal_71f790ae60ec96b8fa2364e22d8a9a1ddf022e922705e6eee6f2d6eac2427172_prof);

        
        $__internal_21daabb7df957328d809f5a9452e781baf480b16fbc7bcf350aefc84dff3d094->leave($__internal_21daabb7df957328d809f5a9452e781baf480b16fbc7bcf350aefc84dff3d094_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4165ac8a8a403bc3fb1841d930232cbe797b771370f57929c928b1689a82b6f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4165ac8a8a403bc3fb1841d930232cbe797b771370f57929c928b1689a82b6f1->enter($__internal_4165ac8a8a403bc3fb1841d930232cbe797b771370f57929c928b1689a82b6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_0e8b04c8768ed138016da8b107216a8eb9ea654ce6c8d67dc8febc354bd0ecfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8b04c8768ed138016da8b107216a8eb9ea654ce6c8d67dc8febc354bd0ecfc->enter($__internal_0e8b04c8768ed138016da8b107216a8eb9ea654ce6c8d67dc8febc354bd0ecfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_0e8b04c8768ed138016da8b107216a8eb9ea654ce6c8d67dc8febc354bd0ecfc->leave($__internal_0e8b04c8768ed138016da8b107216a8eb9ea654ce6c8d67dc8febc354bd0ecfc_prof);

        
        $__internal_4165ac8a8a403bc3fb1841d930232cbe797b771370f57929c928b1689a82b6f1->leave($__internal_4165ac8a8a403bc3fb1841d930232cbe797b771370f57929c928b1689a82b6f1_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7cf0d6896c991d3b1ccca9eb9bdcbadc37013cc67230301effceb84e568c1948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cf0d6896c991d3b1ccca9eb9bdcbadc37013cc67230301effceb84e568c1948->enter($__internal_7cf0d6896c991d3b1ccca9eb9bdcbadc37013cc67230301effceb84e568c1948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_1d38806d602cfba12af98136c8c809b1c0db3b6c9e1d05d8dc287ea2a07afcf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d38806d602cfba12af98136c8c809b1c0db3b6c9e1d05d8dc287ea2a07afcf4->enter($__internal_1d38806d602cfba12af98136c8c809b1c0db3b6c9e1d05d8dc287ea2a07afcf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1d38806d602cfba12af98136c8c809b1c0db3b6c9e1d05d8dc287ea2a07afcf4->leave($__internal_1d38806d602cfba12af98136c8c809b1c0db3b6c9e1d05d8dc287ea2a07afcf4_prof);

        
        $__internal_7cf0d6896c991d3b1ccca9eb9bdcbadc37013cc67230301effceb84e568c1948->leave($__internal_7cf0d6896c991d3b1ccca9eb9bdcbadc37013cc67230301effceb84e568c1948_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_975e59d8c290f4a50ae632cadf1e1f1838db598b079379aca776490dfab5a4ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_975e59d8c290f4a50ae632cadf1e1f1838db598b079379aca776490dfab5a4ea->enter($__internal_975e59d8c290f4a50ae632cadf1e1f1838db598b079379aca776490dfab5a4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_8cf597feabd2f5e14c52499ef702c1e1104f7bf8322bf6e5b097b9dfe0bae660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf597feabd2f5e14c52499ef702c1e1104f7bf8322bf6e5b097b9dfe0bae660->enter($__internal_8cf597feabd2f5e14c52499ef702c1e1104f7bf8322bf6e5b097b9dfe0bae660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8cf597feabd2f5e14c52499ef702c1e1104f7bf8322bf6e5b097b9dfe0bae660->leave($__internal_8cf597feabd2f5e14c52499ef702c1e1104f7bf8322bf6e5b097b9dfe0bae660_prof);

        
        $__internal_975e59d8c290f4a50ae632cadf1e1f1838db598b079379aca776490dfab5a4ea->leave($__internal_975e59d8c290f4a50ae632cadf1e1f1838db598b079379aca776490dfab5a4ea_prof);

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
", "FOSUserBundle:Registration:email.txt.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
