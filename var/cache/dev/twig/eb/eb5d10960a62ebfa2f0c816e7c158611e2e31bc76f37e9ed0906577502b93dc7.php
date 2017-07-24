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
        $__internal_17e4c2eeecee003e634b6ec4550ee45cc0bdf62c54121a035d7f78032034a8c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17e4c2eeecee003e634b6ec4550ee45cc0bdf62c54121a035d7f78032034a8c0->enter($__internal_17e4c2eeecee003e634b6ec4550ee45cc0bdf62c54121a035d7f78032034a8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_dfef6b66f04bd2c0f5e19a569e7bedce7a022828b414376c7bf2242edc8899e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfef6b66f04bd2c0f5e19a569e7bedce7a022828b414376c7bf2242edc8899e4->enter($__internal_dfef6b66f04bd2c0f5e19a569e7bedce7a022828b414376c7bf2242edc8899e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17e4c2eeecee003e634b6ec4550ee45cc0bdf62c54121a035d7f78032034a8c0->leave($__internal_17e4c2eeecee003e634b6ec4550ee45cc0bdf62c54121a035d7f78032034a8c0_prof);

        
        $__internal_dfef6b66f04bd2c0f5e19a569e7bedce7a022828b414376c7bf2242edc8899e4->leave($__internal_dfef6b66f04bd2c0f5e19a569e7bedce7a022828b414376c7bf2242edc8899e4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb1ff769a1943ded930b005b57cbd4954121c0215f3f8e5dc24137531a10aedf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb1ff769a1943ded930b005b57cbd4954121c0215f3f8e5dc24137531a10aedf->enter($__internal_bb1ff769a1943ded930b005b57cbd4954121c0215f3f8e5dc24137531a10aedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1ab929e171c19bc410e5abd2e833b3928f0ea247815222d76c78409af60fb6a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab929e171c19bc410e5abd2e833b3928f0ea247815222d76c78409af60fb6a9->enter($__internal_1ab929e171c19bc410e5abd2e833b3928f0ea247815222d76c78409af60fb6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_1ab929e171c19bc410e5abd2e833b3928f0ea247815222d76c78409af60fb6a9->leave($__internal_1ab929e171c19bc410e5abd2e833b3928f0ea247815222d76c78409af60fb6a9_prof);

        
        $__internal_bb1ff769a1943ded930b005b57cbd4954121c0215f3f8e5dc24137531a10aedf->leave($__internal_bb1ff769a1943ded930b005b57cbd4954121c0215f3f8e5dc24137531a10aedf_prof);

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
