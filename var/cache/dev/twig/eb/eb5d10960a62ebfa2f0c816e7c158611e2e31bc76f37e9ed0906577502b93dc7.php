<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_0bc2379e88d5ab407cecaddbc7d12b46ee4e639db91441b4745b1ab2e1731368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50a9c3e92f9081495214d781347a8ece3440f88627d7dc19e0dfc43719513988 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50a9c3e92f9081495214d781347a8ece3440f88627d7dc19e0dfc43719513988->enter($__internal_50a9c3e92f9081495214d781347a8ece3440f88627d7dc19e0dfc43719513988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_6ca63bb22e4afabc24e68f3688d9cb4302e5b2e09f58249a78ce86249daf6838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca63bb22e4afabc24e68f3688d9cb4302e5b2e09f58249a78ce86249daf6838->enter($__internal_6ca63bb22e4afabc24e68f3688d9cb4302e5b2e09f58249a78ce86249daf6838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50a9c3e92f9081495214d781347a8ece3440f88627d7dc19e0dfc43719513988->leave($__internal_50a9c3e92f9081495214d781347a8ece3440f88627d7dc19e0dfc43719513988_prof);

        
        $__internal_6ca63bb22e4afabc24e68f3688d9cb4302e5b2e09f58249a78ce86249daf6838->leave($__internal_6ca63bb22e4afabc24e68f3688d9cb4302e5b2e09f58249a78ce86249daf6838_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c328fef8b61d2ac4f13d795469c21e30440d98d9b2e535a5023d81a2274647b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c328fef8b61d2ac4f13d795469c21e30440d98d9b2e535a5023d81a2274647b->enter($__internal_6c328fef8b61d2ac4f13d795469c21e30440d98d9b2e535a5023d81a2274647b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_992ec9eec5f95e680c777d983c7ec549cedf0dca4776226f41f0278510466170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_992ec9eec5f95e680c777d983c7ec549cedf0dca4776226f41f0278510466170->enter($__internal_992ec9eec5f95e680c777d983c7ec549cedf0dca4776226f41f0278510466170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_992ec9eec5f95e680c777d983c7ec549cedf0dca4776226f41f0278510466170->leave($__internal_992ec9eec5f95e680c777d983c7ec549cedf0dca4776226f41f0278510466170_prof);

        
        $__internal_6c328fef8b61d2ac4f13d795469c21e30440d98d9b2e535a5023d81a2274647b->leave($__internal_6c328fef8b61d2ac4f13d795469c21e30440d98d9b2e535a5023d81a2274647b_prof);

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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

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
