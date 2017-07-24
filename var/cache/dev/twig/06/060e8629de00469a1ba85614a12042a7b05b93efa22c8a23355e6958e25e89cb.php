<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_614c1e1b88ad81b345c13f857551ab4266d5bd0fabf982ce0daf35c5406d3055 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_b1ba6b044230701d34588b11e03011b10896b284c68327e0788103a1c1424816 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ba6b044230701d34588b11e03011b10896b284c68327e0788103a1c1424816->enter($__internal_b1ba6b044230701d34588b11e03011b10896b284c68327e0788103a1c1424816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_b6e762127fc5fde9b3b4483249ba67a89191416fabad1a67ca9b2ca389ab52b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6e762127fc5fde9b3b4483249ba67a89191416fabad1a67ca9b2ca389ab52b4->enter($__internal_b6e762127fc5fde9b3b4483249ba67a89191416fabad1a67ca9b2ca389ab52b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1ba6b044230701d34588b11e03011b10896b284c68327e0788103a1c1424816->leave($__internal_b1ba6b044230701d34588b11e03011b10896b284c68327e0788103a1c1424816_prof);

        
        $__internal_b6e762127fc5fde9b3b4483249ba67a89191416fabad1a67ca9b2ca389ab52b4->leave($__internal_b6e762127fc5fde9b3b4483249ba67a89191416fabad1a67ca9b2ca389ab52b4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa17f23b8cc1efe5a199f8ad3d8f99b76df8d63f868a1a33ac3dfc9568107558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa17f23b8cc1efe5a199f8ad3d8f99b76df8d63f868a1a33ac3dfc9568107558->enter($__internal_fa17f23b8cc1efe5a199f8ad3d8f99b76df8d63f868a1a33ac3dfc9568107558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_512e7d60d64dace0f2270adbe30546af92352c37d611ac1668fe7ec02237383a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512e7d60d64dace0f2270adbe30546af92352c37d611ac1668fe7ec02237383a->enter($__internal_512e7d60d64dace0f2270adbe30546af92352c37d611ac1668fe7ec02237383a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_512e7d60d64dace0f2270adbe30546af92352c37d611ac1668fe7ec02237383a->leave($__internal_512e7d60d64dace0f2270adbe30546af92352c37d611ac1668fe7ec02237383a_prof);

        
        $__internal_fa17f23b8cc1efe5a199f8ad3d8f99b76df8d63f868a1a33ac3dfc9568107558->leave($__internal_fa17f23b8cc1efe5a199f8ad3d8f99b76df8d63f868a1a33ac3dfc9568107558_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
