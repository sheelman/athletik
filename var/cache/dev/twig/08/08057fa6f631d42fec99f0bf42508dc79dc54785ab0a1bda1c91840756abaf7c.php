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
        $__internal_d4fe6d6b9f37e8676ae6f2d0895eea33416feb5d32ebe5381ee765c411f62d2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4fe6d6b9f37e8676ae6f2d0895eea33416feb5d32ebe5381ee765c411f62d2b->enter($__internal_d4fe6d6b9f37e8676ae6f2d0895eea33416feb5d32ebe5381ee765c411f62d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_93973c85f6c288c742e672a8526fb4bbf5ec0e5b18b447a1c061a525b92bcf73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93973c85f6c288c742e672a8526fb4bbf5ec0e5b18b447a1c061a525b92bcf73->enter($__internal_93973c85f6c288c742e672a8526fb4bbf5ec0e5b18b447a1c061a525b92bcf73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4fe6d6b9f37e8676ae6f2d0895eea33416feb5d32ebe5381ee765c411f62d2b->leave($__internal_d4fe6d6b9f37e8676ae6f2d0895eea33416feb5d32ebe5381ee765c411f62d2b_prof);

        
        $__internal_93973c85f6c288c742e672a8526fb4bbf5ec0e5b18b447a1c061a525b92bcf73->leave($__internal_93973c85f6c288c742e672a8526fb4bbf5ec0e5b18b447a1c061a525b92bcf73_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_edce5d2f727d486e94c6a9ffebcec8d66875eeeab55888bf6a8ff27d292237ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edce5d2f727d486e94c6a9ffebcec8d66875eeeab55888bf6a8ff27d292237ed->enter($__internal_edce5d2f727d486e94c6a9ffebcec8d66875eeeab55888bf6a8ff27d292237ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d95c4adb4f5450dd19a887c65b4c1a3c6a79b71c6a243d14d8f5e9bad30db98b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d95c4adb4f5450dd19a887c65b4c1a3c6a79b71c6a243d14d8f5e9bad30db98b->enter($__internal_d95c4adb4f5450dd19a887c65b4c1a3c6a79b71c6a243d14d8f5e9bad30db98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d95c4adb4f5450dd19a887c65b4c1a3c6a79b71c6a243d14d8f5e9bad30db98b->leave($__internal_d95c4adb4f5450dd19a887c65b4c1a3c6a79b71c6a243d14d8f5e9bad30db98b_prof);

        
        $__internal_edce5d2f727d486e94c6a9ffebcec8d66875eeeab55888bf6a8ff27d292237ed->leave($__internal_edce5d2f727d486e94c6a9ffebcec8d66875eeeab55888bf6a8ff27d292237ed_prof);

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
