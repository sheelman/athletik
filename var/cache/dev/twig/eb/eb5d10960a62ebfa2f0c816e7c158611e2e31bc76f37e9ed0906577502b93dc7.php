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
        $__internal_3bd3fc3ae027e022c3bf28431141bab49a39f6a5d0fe6941db06c3bc02c3906c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bd3fc3ae027e022c3bf28431141bab49a39f6a5d0fe6941db06c3bc02c3906c->enter($__internal_3bd3fc3ae027e022c3bf28431141bab49a39f6a5d0fe6941db06c3bc02c3906c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_715df6267376ee7055d988e2e592a3a4f5d1cac0c2bf8c408a9469b02ac0d7e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_715df6267376ee7055d988e2e592a3a4f5d1cac0c2bf8c408a9469b02ac0d7e2->enter($__internal_715df6267376ee7055d988e2e592a3a4f5d1cac0c2bf8c408a9469b02ac0d7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bd3fc3ae027e022c3bf28431141bab49a39f6a5d0fe6941db06c3bc02c3906c->leave($__internal_3bd3fc3ae027e022c3bf28431141bab49a39f6a5d0fe6941db06c3bc02c3906c_prof);

        
        $__internal_715df6267376ee7055d988e2e592a3a4f5d1cac0c2bf8c408a9469b02ac0d7e2->leave($__internal_715df6267376ee7055d988e2e592a3a4f5d1cac0c2bf8c408a9469b02ac0d7e2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc6c4836a08e68d2c6153b2ad605ac89ce92acbc50c465ee87cbfd12c4d0ed6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc6c4836a08e68d2c6153b2ad605ac89ce92acbc50c465ee87cbfd12c4d0ed6b->enter($__internal_dc6c4836a08e68d2c6153b2ad605ac89ce92acbc50c465ee87cbfd12c4d0ed6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_80e16bb85f9d42716bce2e7a2eff3b77983693eb83b998d4fad5dd6c96ecdbc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80e16bb85f9d42716bce2e7a2eff3b77983693eb83b998d4fad5dd6c96ecdbc3->enter($__internal_80e16bb85f9d42716bce2e7a2eff3b77983693eb83b998d4fad5dd6c96ecdbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_80e16bb85f9d42716bce2e7a2eff3b77983693eb83b998d4fad5dd6c96ecdbc3->leave($__internal_80e16bb85f9d42716bce2e7a2eff3b77983693eb83b998d4fad5dd6c96ecdbc3_prof);

        
        $__internal_dc6c4836a08e68d2c6153b2ad605ac89ce92acbc50c465ee87cbfd12c4d0ed6b->leave($__internal_dc6c4836a08e68d2c6153b2ad605ac89ce92acbc50c465ee87cbfd12c4d0ed6b_prof);

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
