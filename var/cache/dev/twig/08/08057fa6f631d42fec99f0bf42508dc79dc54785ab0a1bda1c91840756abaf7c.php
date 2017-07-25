<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_12dfc22914f0f4944e88d2e33b6943043bf4cf57ee81602cccc77d68a299198e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_d24b481efd3716674f757cb3f0025ef16a25353d7342a91a502f2f68d8a19546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d24b481efd3716674f757cb3f0025ef16a25353d7342a91a502f2f68d8a19546->enter($__internal_d24b481efd3716674f757cb3f0025ef16a25353d7342a91a502f2f68d8a19546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_ffc66379fd5c419673b8b0d67fd9da6387db709451314a7b5f2411896c851945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc66379fd5c419673b8b0d67fd9da6387db709451314a7b5f2411896c851945->enter($__internal_ffc66379fd5c419673b8b0d67fd9da6387db709451314a7b5f2411896c851945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d24b481efd3716674f757cb3f0025ef16a25353d7342a91a502f2f68d8a19546->leave($__internal_d24b481efd3716674f757cb3f0025ef16a25353d7342a91a502f2f68d8a19546_prof);

        
        $__internal_ffc66379fd5c419673b8b0d67fd9da6387db709451314a7b5f2411896c851945->leave($__internal_ffc66379fd5c419673b8b0d67fd9da6387db709451314a7b5f2411896c851945_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3547d98be8dfe70caf89ffa2820e9d548593482f00b5dbf2b072fde8d9459fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3547d98be8dfe70caf89ffa2820e9d548593482f00b5dbf2b072fde8d9459fb->enter($__internal_e3547d98be8dfe70caf89ffa2820e9d548593482f00b5dbf2b072fde8d9459fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a8db05f9c7876b1cb89e0ce1f73a9eb62be602656154da2bd5cdde519d9d4480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8db05f9c7876b1cb89e0ce1f73a9eb62be602656154da2bd5cdde519d9d4480->enter($__internal_a8db05f9c7876b1cb89e0ce1f73a9eb62be602656154da2bd5cdde519d9d4480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a8db05f9c7876b1cb89e0ce1f73a9eb62be602656154da2bd5cdde519d9d4480->leave($__internal_a8db05f9c7876b1cb89e0ce1f73a9eb62be602656154da2bd5cdde519d9d4480_prof);

        
        $__internal_e3547d98be8dfe70caf89ffa2820e9d548593482f00b5dbf2b072fde8d9459fb->leave($__internal_e3547d98be8dfe70caf89ffa2820e9d548593482f00b5dbf2b072fde8d9459fb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
