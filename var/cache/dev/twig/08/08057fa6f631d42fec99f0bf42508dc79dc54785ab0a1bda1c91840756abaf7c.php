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
        $__internal_042e52fe7430de2aa3c98d66f02e0d614d0d2ba0253f7e9d612add1ed087b8a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_042e52fe7430de2aa3c98d66f02e0d614d0d2ba0253f7e9d612add1ed087b8a1->enter($__internal_042e52fe7430de2aa3c98d66f02e0d614d0d2ba0253f7e9d612add1ed087b8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_4c7b5ebe4eccf249fcba40951b538b066b469adc4e3e0695fb4bb6d54d7ec543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c7b5ebe4eccf249fcba40951b538b066b469adc4e3e0695fb4bb6d54d7ec543->enter($__internal_4c7b5ebe4eccf249fcba40951b538b066b469adc4e3e0695fb4bb6d54d7ec543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_042e52fe7430de2aa3c98d66f02e0d614d0d2ba0253f7e9d612add1ed087b8a1->leave($__internal_042e52fe7430de2aa3c98d66f02e0d614d0d2ba0253f7e9d612add1ed087b8a1_prof);

        
        $__internal_4c7b5ebe4eccf249fcba40951b538b066b469adc4e3e0695fb4bb6d54d7ec543->leave($__internal_4c7b5ebe4eccf249fcba40951b538b066b469adc4e3e0695fb4bb6d54d7ec543_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_85c984a6cc65469d056e55859c9eaa7b963f023806f71a9491fa6a73b0898d3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c984a6cc65469d056e55859c9eaa7b963f023806f71a9491fa6a73b0898d3b->enter($__internal_85c984a6cc65469d056e55859c9eaa7b963f023806f71a9491fa6a73b0898d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d17756b6922b4a0968d5fe49a2da8e1e16f3a75236a4f90d48af2cd56d8a9488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17756b6922b4a0968d5fe49a2da8e1e16f3a75236a4f90d48af2cd56d8a9488->enter($__internal_d17756b6922b4a0968d5fe49a2da8e1e16f3a75236a4f90d48af2cd56d8a9488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d17756b6922b4a0968d5fe49a2da8e1e16f3a75236a4f90d48af2cd56d8a9488->leave($__internal_d17756b6922b4a0968d5fe49a2da8e1e16f3a75236a4f90d48af2cd56d8a9488_prof);

        
        $__internal_85c984a6cc65469d056e55859c9eaa7b963f023806f71a9491fa6a73b0898d3b->leave($__internal_85c984a6cc65469d056e55859c9eaa7b963f023806f71a9491fa6a73b0898d3b_prof);

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
