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
        $__internal_c7a427356678465c0db1cf51c36c3c109baf2bbda32c5a7ae472c12fd51dfd0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7a427356678465c0db1cf51c36c3c109baf2bbda32c5a7ae472c12fd51dfd0b->enter($__internal_c7a427356678465c0db1cf51c36c3c109baf2bbda32c5a7ae472c12fd51dfd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_4a2af637ceea7bc7824827d30a497cca78de388fb8cf4909ef3101f58e7f7273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2af637ceea7bc7824827d30a497cca78de388fb8cf4909ef3101f58e7f7273->enter($__internal_4a2af637ceea7bc7824827d30a497cca78de388fb8cf4909ef3101f58e7f7273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7a427356678465c0db1cf51c36c3c109baf2bbda32c5a7ae472c12fd51dfd0b->leave($__internal_c7a427356678465c0db1cf51c36c3c109baf2bbda32c5a7ae472c12fd51dfd0b_prof);

        
        $__internal_4a2af637ceea7bc7824827d30a497cca78de388fb8cf4909ef3101f58e7f7273->leave($__internal_4a2af637ceea7bc7824827d30a497cca78de388fb8cf4909ef3101f58e7f7273_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b095c9c147263002abf83f366d3c1a75de9fa4f383a83d939c13bc176f3d57a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b095c9c147263002abf83f366d3c1a75de9fa4f383a83d939c13bc176f3d57a5->enter($__internal_b095c9c147263002abf83f366d3c1a75de9fa4f383a83d939c13bc176f3d57a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f43da7548f0583025a7caf5e4fef1c59f2bdf783a14da92de145bde0e85c6a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f43da7548f0583025a7caf5e4fef1c59f2bdf783a14da92de145bde0e85c6a7c->enter($__internal_f43da7548f0583025a7caf5e4fef1c59f2bdf783a14da92de145bde0e85c6a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_f43da7548f0583025a7caf5e4fef1c59f2bdf783a14da92de145bde0e85c6a7c->leave($__internal_f43da7548f0583025a7caf5e4fef1c59f2bdf783a14da92de145bde0e85c6a7c_prof);

        
        $__internal_b095c9c147263002abf83f366d3c1a75de9fa4f383a83d939c13bc176f3d57a5->leave($__internal_b095c9c147263002abf83f366d3c1a75de9fa4f383a83d939c13bc176f3d57a5_prof);

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
