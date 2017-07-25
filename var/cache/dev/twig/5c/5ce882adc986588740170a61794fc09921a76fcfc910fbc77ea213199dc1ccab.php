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
        $__internal_8670ed8d183c8110216a5e06bde678ab49c90b9f67159c17f2ee6a144cf36e8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8670ed8d183c8110216a5e06bde678ab49c90b9f67159c17f2ee6a144cf36e8c->enter($__internal_8670ed8d183c8110216a5e06bde678ab49c90b9f67159c17f2ee6a144cf36e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_bc0fdda3b49954cfedd4e78a54f42473230a46c31b421b7ca62d41e3dfc2322d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc0fdda3b49954cfedd4e78a54f42473230a46c31b421b7ca62d41e3dfc2322d->enter($__internal_bc0fdda3b49954cfedd4e78a54f42473230a46c31b421b7ca62d41e3dfc2322d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8670ed8d183c8110216a5e06bde678ab49c90b9f67159c17f2ee6a144cf36e8c->leave($__internal_8670ed8d183c8110216a5e06bde678ab49c90b9f67159c17f2ee6a144cf36e8c_prof);

        
        $__internal_bc0fdda3b49954cfedd4e78a54f42473230a46c31b421b7ca62d41e3dfc2322d->leave($__internal_bc0fdda3b49954cfedd4e78a54f42473230a46c31b421b7ca62d41e3dfc2322d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8722bd9342126affe7c829782b7523ae5695d46da769290605f21cb5e3dba32b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8722bd9342126affe7c829782b7523ae5695d46da769290605f21cb5e3dba32b->enter($__internal_8722bd9342126affe7c829782b7523ae5695d46da769290605f21cb5e3dba32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_0976f9585bcffc7a4d294e6092997d6f73d29a8e4ee771ceb91e9f8d5cbf5066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0976f9585bcffc7a4d294e6092997d6f73d29a8e4ee771ceb91e9f8d5cbf5066->enter($__internal_0976f9585bcffc7a4d294e6092997d6f73d29a8e4ee771ceb91e9f8d5cbf5066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_0976f9585bcffc7a4d294e6092997d6f73d29a8e4ee771ceb91e9f8d5cbf5066->leave($__internal_0976f9585bcffc7a4d294e6092997d6f73d29a8e4ee771ceb91e9f8d5cbf5066_prof);

        
        $__internal_8722bd9342126affe7c829782b7523ae5695d46da769290605f21cb5e3dba32b->leave($__internal_8722bd9342126affe7c829782b7523ae5695d46da769290605f21cb5e3dba32b_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3e59f2776de0523e24f4b4490c4ddee904cc81a06e8221f5e8b756bd500031b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e59f2776de0523e24f4b4490c4ddee904cc81a06e8221f5e8b756bd500031b8->enter($__internal_3e59f2776de0523e24f4b4490c4ddee904cc81a06e8221f5e8b756bd500031b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_52344f2071293ebbf843df23e6ab1badbed25ae3b0db3c8f810ed6ca7cfb25eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52344f2071293ebbf843df23e6ab1badbed25ae3b0db3c8f810ed6ca7cfb25eb->enter($__internal_52344f2071293ebbf843df23e6ab1badbed25ae3b0db3c8f810ed6ca7cfb25eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_52344f2071293ebbf843df23e6ab1badbed25ae3b0db3c8f810ed6ca7cfb25eb->leave($__internal_52344f2071293ebbf843df23e6ab1badbed25ae3b0db3c8f810ed6ca7cfb25eb_prof);

        
        $__internal_3e59f2776de0523e24f4b4490c4ddee904cc81a06e8221f5e8b756bd500031b8->leave($__internal_3e59f2776de0523e24f4b4490c4ddee904cc81a06e8221f5e8b756bd500031b8_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ed217ffa43474a41588c159e1531800bbcc5809ae9ddcd02f1bb3dd3d125063a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed217ffa43474a41588c159e1531800bbcc5809ae9ddcd02f1bb3dd3d125063a->enter($__internal_ed217ffa43474a41588c159e1531800bbcc5809ae9ddcd02f1bb3dd3d125063a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_dc3e33594dec02a8b9c44edc6a0aa3b5f1a07058c0ca78d6e12a529f735fe76b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc3e33594dec02a8b9c44edc6a0aa3b5f1a07058c0ca78d6e12a529f735fe76b->enter($__internal_dc3e33594dec02a8b9c44edc6a0aa3b5f1a07058c0ca78d6e12a529f735fe76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dc3e33594dec02a8b9c44edc6a0aa3b5f1a07058c0ca78d6e12a529f735fe76b->leave($__internal_dc3e33594dec02a8b9c44edc6a0aa3b5f1a07058c0ca78d6e12a529f735fe76b_prof);

        
        $__internal_ed217ffa43474a41588c159e1531800bbcc5809ae9ddcd02f1bb3dd3d125063a->leave($__internal_ed217ffa43474a41588c159e1531800bbcc5809ae9ddcd02f1bb3dd3d125063a_prof);

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
