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
        $__internal_9e80d8dd666fb0113b1e24cab42fe52ab75904f88d7660f487eec446b24d46c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e80d8dd666fb0113b1e24cab42fe52ab75904f88d7660f487eec446b24d46c8->enter($__internal_9e80d8dd666fb0113b1e24cab42fe52ab75904f88d7660f487eec446b24d46c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_e221ffe8b01b1e1e9cc5c3ca7a8131bf56a8e11b3dc3bd76c5b380417b5ad722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e221ffe8b01b1e1e9cc5c3ca7a8131bf56a8e11b3dc3bd76c5b380417b5ad722->enter($__internal_e221ffe8b01b1e1e9cc5c3ca7a8131bf56a8e11b3dc3bd76c5b380417b5ad722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e80d8dd666fb0113b1e24cab42fe52ab75904f88d7660f487eec446b24d46c8->leave($__internal_9e80d8dd666fb0113b1e24cab42fe52ab75904f88d7660f487eec446b24d46c8_prof);

        
        $__internal_e221ffe8b01b1e1e9cc5c3ca7a8131bf56a8e11b3dc3bd76c5b380417b5ad722->leave($__internal_e221ffe8b01b1e1e9cc5c3ca7a8131bf56a8e11b3dc3bd76c5b380417b5ad722_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac0a0b2133f45d8c8ffdd1a96cdd5bf539c5a4fbdbc1bd9106d5d955ca80ea07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac0a0b2133f45d8c8ffdd1a96cdd5bf539c5a4fbdbc1bd9106d5d955ca80ea07->enter($__internal_ac0a0b2133f45d8c8ffdd1a96cdd5bf539c5a4fbdbc1bd9106d5d955ca80ea07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9ffab843b62f102ffeda5fd72b4d1cdcefab7367e35945b131eac1a6ae6df344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ffab843b62f102ffeda5fd72b4d1cdcefab7367e35945b131eac1a6ae6df344->enter($__internal_9ffab843b62f102ffeda5fd72b4d1cdcefab7367e35945b131eac1a6ae6df344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_9ffab843b62f102ffeda5fd72b4d1cdcefab7367e35945b131eac1a6ae6df344->leave($__internal_9ffab843b62f102ffeda5fd72b4d1cdcefab7367e35945b131eac1a6ae6df344_prof);

        
        $__internal_ac0a0b2133f45d8c8ffdd1a96cdd5bf539c5a4fbdbc1bd9106d5d955ca80ea07->leave($__internal_ac0a0b2133f45d8c8ffdd1a96cdd5bf539c5a4fbdbc1bd9106d5d955ca80ea07_prof);

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
