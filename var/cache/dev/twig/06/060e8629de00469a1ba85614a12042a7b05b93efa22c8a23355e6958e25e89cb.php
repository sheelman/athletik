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
        $__internal_f46bea5615201269e8b2dfd3e755106f7769b32e2d47319e2bf8120a047871e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f46bea5615201269e8b2dfd3e755106f7769b32e2d47319e2bf8120a047871e5->enter($__internal_f46bea5615201269e8b2dfd3e755106f7769b32e2d47319e2bf8120a047871e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_9f6a37e9226b50bff69f01e57018ffb97d68ed460dbf6fb8fae5446fe9149a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6a37e9226b50bff69f01e57018ffb97d68ed460dbf6fb8fae5446fe9149a4a->enter($__internal_9f6a37e9226b50bff69f01e57018ffb97d68ed460dbf6fb8fae5446fe9149a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f46bea5615201269e8b2dfd3e755106f7769b32e2d47319e2bf8120a047871e5->leave($__internal_f46bea5615201269e8b2dfd3e755106f7769b32e2d47319e2bf8120a047871e5_prof);

        
        $__internal_9f6a37e9226b50bff69f01e57018ffb97d68ed460dbf6fb8fae5446fe9149a4a->leave($__internal_9f6a37e9226b50bff69f01e57018ffb97d68ed460dbf6fb8fae5446fe9149a4a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_deb7eb0845679844d9a48043745b5968814f7e2cd34fc71aff480240ea6bab09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deb7eb0845679844d9a48043745b5968814f7e2cd34fc71aff480240ea6bab09->enter($__internal_deb7eb0845679844d9a48043745b5968814f7e2cd34fc71aff480240ea6bab09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ab62d4759ac5e8ce7af8ed96d1643c129159048369e190599523882fabfd062b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab62d4759ac5e8ce7af8ed96d1643c129159048369e190599523882fabfd062b->enter($__internal_ab62d4759ac5e8ce7af8ed96d1643c129159048369e190599523882fabfd062b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_ab62d4759ac5e8ce7af8ed96d1643c129159048369e190599523882fabfd062b->leave($__internal_ab62d4759ac5e8ce7af8ed96d1643c129159048369e190599523882fabfd062b_prof);

        
        $__internal_deb7eb0845679844d9a48043745b5968814f7e2cd34fc71aff480240ea6bab09->leave($__internal_deb7eb0845679844d9a48043745b5968814f7e2cd34fc71aff480240ea6bab09_prof);

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
