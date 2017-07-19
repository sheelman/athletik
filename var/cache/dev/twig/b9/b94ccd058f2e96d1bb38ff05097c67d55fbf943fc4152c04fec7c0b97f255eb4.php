<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_9c73dd7088a3784e6baed922fef0174c312499d7da8fd69eb3463049c30a2a5a extends Twig_Template
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
        $__internal_124ef02216eefd8b6da9222015c5c5a517bfee6729ee02235599bb1112f44d15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_124ef02216eefd8b6da9222015c5c5a517bfee6729ee02235599bb1112f44d15->enter($__internal_124ef02216eefd8b6da9222015c5c5a517bfee6729ee02235599bb1112f44d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_4699d63559161504e1ae162e01c2732a25dd99a57e46eb4a058932851e00a5ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4699d63559161504e1ae162e01c2732a25dd99a57e46eb4a058932851e00a5ce->enter($__internal_4699d63559161504e1ae162e01c2732a25dd99a57e46eb4a058932851e00a5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_124ef02216eefd8b6da9222015c5c5a517bfee6729ee02235599bb1112f44d15->leave($__internal_124ef02216eefd8b6da9222015c5c5a517bfee6729ee02235599bb1112f44d15_prof);

        
        $__internal_4699d63559161504e1ae162e01c2732a25dd99a57e46eb4a058932851e00a5ce->leave($__internal_4699d63559161504e1ae162e01c2732a25dd99a57e46eb4a058932851e00a5ce_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f590a4e1e3b5584b7f02661ff7c7f8d46f0621602a22bba6e771ed867b4dc28a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f590a4e1e3b5584b7f02661ff7c7f8d46f0621602a22bba6e771ed867b4dc28a->enter($__internal_f590a4e1e3b5584b7f02661ff7c7f8d46f0621602a22bba6e771ed867b4dc28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fa17ae3c134bb1008e2a47e2581f67caf17bc71072af39c156f54d242f6a3775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa17ae3c134bb1008e2a47e2581f67caf17bc71072af39c156f54d242f6a3775->enter($__internal_fa17ae3c134bb1008e2a47e2581f67caf17bc71072af39c156f54d242f6a3775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fa17ae3c134bb1008e2a47e2581f67caf17bc71072af39c156f54d242f6a3775->leave($__internal_fa17ae3c134bb1008e2a47e2581f67caf17bc71072af39c156f54d242f6a3775_prof);

        
        $__internal_f590a4e1e3b5584b7f02661ff7c7f8d46f0621602a22bba6e771ed867b4dc28a->leave($__internal_f590a4e1e3b5584b7f02661ff7c7f8d46f0621602a22bba6e771ed867b4dc28a_prof);

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
", "FOSUserBundle:Registration:check_email.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
