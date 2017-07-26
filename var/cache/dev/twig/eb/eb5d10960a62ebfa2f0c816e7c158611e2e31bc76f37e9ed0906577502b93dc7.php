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
        $__internal_f0f3db3339d20e16fe8ba2aa5a72d5aa9bc3129e02b43446563e38f2a10510af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0f3db3339d20e16fe8ba2aa5a72d5aa9bc3129e02b43446563e38f2a10510af->enter($__internal_f0f3db3339d20e16fe8ba2aa5a72d5aa9bc3129e02b43446563e38f2a10510af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_5771f094ced16998c3e25cf78b685fe3a04bf48a4bf7490aadc6a78ab84bf297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5771f094ced16998c3e25cf78b685fe3a04bf48a4bf7490aadc6a78ab84bf297->enter($__internal_5771f094ced16998c3e25cf78b685fe3a04bf48a4bf7490aadc6a78ab84bf297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0f3db3339d20e16fe8ba2aa5a72d5aa9bc3129e02b43446563e38f2a10510af->leave($__internal_f0f3db3339d20e16fe8ba2aa5a72d5aa9bc3129e02b43446563e38f2a10510af_prof);

        
        $__internal_5771f094ced16998c3e25cf78b685fe3a04bf48a4bf7490aadc6a78ab84bf297->leave($__internal_5771f094ced16998c3e25cf78b685fe3a04bf48a4bf7490aadc6a78ab84bf297_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd997d29b1f5afa1a6b5ac11212b9c4407c65c60c458872114eb69a11661c7aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd997d29b1f5afa1a6b5ac11212b9c4407c65c60c458872114eb69a11661c7aa->enter($__internal_dd997d29b1f5afa1a6b5ac11212b9c4407c65c60c458872114eb69a11661c7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e2eafcaaaca63139611d7924b4b3cddd5946e4cebef4f22b55eb853f22820ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2eafcaaaca63139611d7924b4b3cddd5946e4cebef4f22b55eb853f22820ba4->enter($__internal_e2eafcaaaca63139611d7924b4b3cddd5946e4cebef4f22b55eb853f22820ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_e2eafcaaaca63139611d7924b4b3cddd5946e4cebef4f22b55eb853f22820ba4->leave($__internal_e2eafcaaaca63139611d7924b4b3cddd5946e4cebef4f22b55eb853f22820ba4_prof);

        
        $__internal_dd997d29b1f5afa1a6b5ac11212b9c4407c65c60c458872114eb69a11661c7aa->leave($__internal_dd997d29b1f5afa1a6b5ac11212b9c4407c65c60c458872114eb69a11661c7aa_prof);

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
