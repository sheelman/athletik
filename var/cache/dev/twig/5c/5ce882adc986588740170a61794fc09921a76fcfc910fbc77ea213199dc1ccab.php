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
        $__internal_68eb9c80e1a167fc590dfc319020395ecf6d493df25ddb6d980d70b679f8e208 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68eb9c80e1a167fc590dfc319020395ecf6d493df25ddb6d980d70b679f8e208->enter($__internal_68eb9c80e1a167fc590dfc319020395ecf6d493df25ddb6d980d70b679f8e208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_57d6fd91f78e696ac3e2fbaa4a66734a5fa4130e89056d63daa2964c3d5447dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57d6fd91f78e696ac3e2fbaa4a66734a5fa4130e89056d63daa2964c3d5447dd->enter($__internal_57d6fd91f78e696ac3e2fbaa4a66734a5fa4130e89056d63daa2964c3d5447dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_68eb9c80e1a167fc590dfc319020395ecf6d493df25ddb6d980d70b679f8e208->leave($__internal_68eb9c80e1a167fc590dfc319020395ecf6d493df25ddb6d980d70b679f8e208_prof);

        
        $__internal_57d6fd91f78e696ac3e2fbaa4a66734a5fa4130e89056d63daa2964c3d5447dd->leave($__internal_57d6fd91f78e696ac3e2fbaa4a66734a5fa4130e89056d63daa2964c3d5447dd_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d9204784c21f690c801caefcf4363be7fd7f28a43ae0784658b82c15c1f4c1a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9204784c21f690c801caefcf4363be7fd7f28a43ae0784658b82c15c1f4c1a1->enter($__internal_d9204784c21f690c801caefcf4363be7fd7f28a43ae0784658b82c15c1f4c1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_4d4a947ce67e54d270faa734f96acb5251daa7bbb54f1d83e9ca0cb40ae3a491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d4a947ce67e54d270faa734f96acb5251daa7bbb54f1d83e9ca0cb40ae3a491->enter($__internal_4d4a947ce67e54d270faa734f96acb5251daa7bbb54f1d83e9ca0cb40ae3a491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_4d4a947ce67e54d270faa734f96acb5251daa7bbb54f1d83e9ca0cb40ae3a491->leave($__internal_4d4a947ce67e54d270faa734f96acb5251daa7bbb54f1d83e9ca0cb40ae3a491_prof);

        
        $__internal_d9204784c21f690c801caefcf4363be7fd7f28a43ae0784658b82c15c1f4c1a1->leave($__internal_d9204784c21f690c801caefcf4363be7fd7f28a43ae0784658b82c15c1f4c1a1_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d29e5e02807052869c7907b7c86fc0965195d51e55fd5a0f8018c291844cee5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d29e5e02807052869c7907b7c86fc0965195d51e55fd5a0f8018c291844cee5b->enter($__internal_d29e5e02807052869c7907b7c86fc0965195d51e55fd5a0f8018c291844cee5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_d1385a5b79fb0e2750f4718e9c85efd0890aa414f69485a39348a6a034b97f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1385a5b79fb0e2750f4718e9c85efd0890aa414f69485a39348a6a034b97f7f->enter($__internal_d1385a5b79fb0e2750f4718e9c85efd0890aa414f69485a39348a6a034b97f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d1385a5b79fb0e2750f4718e9c85efd0890aa414f69485a39348a6a034b97f7f->leave($__internal_d1385a5b79fb0e2750f4718e9c85efd0890aa414f69485a39348a6a034b97f7f_prof);

        
        $__internal_d29e5e02807052869c7907b7c86fc0965195d51e55fd5a0f8018c291844cee5b->leave($__internal_d29e5e02807052869c7907b7c86fc0965195d51e55fd5a0f8018c291844cee5b_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f7a8fbaab397a1d83666189cdcbc8822b0cb55fa51474f069d3b13114d9ed75a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7a8fbaab397a1d83666189cdcbc8822b0cb55fa51474f069d3b13114d9ed75a->enter($__internal_f7a8fbaab397a1d83666189cdcbc8822b0cb55fa51474f069d3b13114d9ed75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_9e76d0d2f57fb03ab01dda0feda99956b539828f74e3c83c965a83679948588f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e76d0d2f57fb03ab01dda0feda99956b539828f74e3c83c965a83679948588f->enter($__internal_9e76d0d2f57fb03ab01dda0feda99956b539828f74e3c83c965a83679948588f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9e76d0d2f57fb03ab01dda0feda99956b539828f74e3c83c965a83679948588f->leave($__internal_9e76d0d2f57fb03ab01dda0feda99956b539828f74e3c83c965a83679948588f_prof);

        
        $__internal_f7a8fbaab397a1d83666189cdcbc8822b0cb55fa51474f069d3b13114d9ed75a->leave($__internal_f7a8fbaab397a1d83666189cdcbc8822b0cb55fa51474f069d3b13114d9ed75a_prof);

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
