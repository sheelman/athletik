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
        $__internal_09cf055f96b90af11b4babcdaaa349139d1039523ff86503e2ae31871d3aeaf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09cf055f96b90af11b4babcdaaa349139d1039523ff86503e2ae31871d3aeaf9->enter($__internal_09cf055f96b90af11b4babcdaaa349139d1039523ff86503e2ae31871d3aeaf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_6c3b1c9ffa0a05971a43ef86c37f4d2e172b502b37acc7e57928c342cc00dc1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c3b1c9ffa0a05971a43ef86c37f4d2e172b502b37acc7e57928c342cc00dc1f->enter($__internal_6c3b1c9ffa0a05971a43ef86c37f4d2e172b502b37acc7e57928c342cc00dc1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09cf055f96b90af11b4babcdaaa349139d1039523ff86503e2ae31871d3aeaf9->leave($__internal_09cf055f96b90af11b4babcdaaa349139d1039523ff86503e2ae31871d3aeaf9_prof);

        
        $__internal_6c3b1c9ffa0a05971a43ef86c37f4d2e172b502b37acc7e57928c342cc00dc1f->leave($__internal_6c3b1c9ffa0a05971a43ef86c37f4d2e172b502b37acc7e57928c342cc00dc1f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a90bc6cdd9f78f14315a8185bf4e69c377a25d10ee77c79492423f02b844ad41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a90bc6cdd9f78f14315a8185bf4e69c377a25d10ee77c79492423f02b844ad41->enter($__internal_a90bc6cdd9f78f14315a8185bf4e69c377a25d10ee77c79492423f02b844ad41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7d3d06a18f30e106a819dad1a5a3df6c0d472ef23c0c867d62e3ea38e50c0ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3d06a18f30e106a819dad1a5a3df6c0d472ef23c0c867d62e3ea38e50c0ec7->enter($__internal_7d3d06a18f30e106a819dad1a5a3df6c0d472ef23c0c867d62e3ea38e50c0ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7d3d06a18f30e106a819dad1a5a3df6c0d472ef23c0c867d62e3ea38e50c0ec7->leave($__internal_7d3d06a18f30e106a819dad1a5a3df6c0d472ef23c0c867d62e3ea38e50c0ec7_prof);

        
        $__internal_a90bc6cdd9f78f14315a8185bf4e69c377a25d10ee77c79492423f02b844ad41->leave($__internal_a90bc6cdd9f78f14315a8185bf4e69c377a25d10ee77c79492423f02b844ad41_prof);

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
