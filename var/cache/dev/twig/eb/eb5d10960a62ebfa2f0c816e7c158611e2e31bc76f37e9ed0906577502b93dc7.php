<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_0bc2379e88d5ab407cecaddbc7d12b46ee4e639db91441b4745b1ab2e1731368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c34fd8d3dee8792b66b0c822027cbc3ee9870fe8f09286b02aa1a37edc776d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c34fd8d3dee8792b66b0c822027cbc3ee9870fe8f09286b02aa1a37edc776d3->enter($__internal_3c34fd8d3dee8792b66b0c822027cbc3ee9870fe8f09286b02aa1a37edc776d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_af224d1b829e0b2dfb2dcd8550064b69744d521eaf86051a886f212185028111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af224d1b829e0b2dfb2dcd8550064b69744d521eaf86051a886f212185028111->enter($__internal_af224d1b829e0b2dfb2dcd8550064b69744d521eaf86051a886f212185028111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c34fd8d3dee8792b66b0c822027cbc3ee9870fe8f09286b02aa1a37edc776d3->leave($__internal_3c34fd8d3dee8792b66b0c822027cbc3ee9870fe8f09286b02aa1a37edc776d3_prof);

        
        $__internal_af224d1b829e0b2dfb2dcd8550064b69744d521eaf86051a886f212185028111->leave($__internal_af224d1b829e0b2dfb2dcd8550064b69744d521eaf86051a886f212185028111_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67ad7caff3ae8c8344d95e69a7c5eff887245ac6dfd22ec91425cc503e09eaf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67ad7caff3ae8c8344d95e69a7c5eff887245ac6dfd22ec91425cc503e09eaf2->enter($__internal_67ad7caff3ae8c8344d95e69a7c5eff887245ac6dfd22ec91425cc503e09eaf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9448948fbdd705abdfcfb6de64ef087c213c9ee2d4c90a9e0b342091194b6e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9448948fbdd705abdfcfb6de64ef087c213c9ee2d4c90a9e0b342091194b6e71->enter($__internal_9448948fbdd705abdfcfb6de64ef087c213c9ee2d4c90a9e0b342091194b6e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_9448948fbdd705abdfcfb6de64ef087c213c9ee2d4c90a9e0b342091194b6e71->leave($__internal_9448948fbdd705abdfcfb6de64ef087c213c9ee2d4c90a9e0b342091194b6e71_prof);

        
        $__internal_67ad7caff3ae8c8344d95e69a7c5eff887245ac6dfd22ec91425cc503e09eaf2->leave($__internal_67ad7caff3ae8c8344d95e69a7c5eff887245ac6dfd22ec91425cc503e09eaf2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"default/index.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
