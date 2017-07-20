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
        $__internal_6ebf95f711b4f3626b77b1646e639e11f4226fba113df535bcfcd3b08183a071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ebf95f711b4f3626b77b1646e639e11f4226fba113df535bcfcd3b08183a071->enter($__internal_6ebf95f711b4f3626b77b1646e639e11f4226fba113df535bcfcd3b08183a071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_e97ede0fa402f8d439261b39e224e5e4c1d36c56fbbe1698baae32adcaa2bad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97ede0fa402f8d439261b39e224e5e4c1d36c56fbbe1698baae32adcaa2bad1->enter($__internal_e97ede0fa402f8d439261b39e224e5e4c1d36c56fbbe1698baae32adcaa2bad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ebf95f711b4f3626b77b1646e639e11f4226fba113df535bcfcd3b08183a071->leave($__internal_6ebf95f711b4f3626b77b1646e639e11f4226fba113df535bcfcd3b08183a071_prof);

        
        $__internal_e97ede0fa402f8d439261b39e224e5e4c1d36c56fbbe1698baae32adcaa2bad1->leave($__internal_e97ede0fa402f8d439261b39e224e5e4c1d36c56fbbe1698baae32adcaa2bad1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8a9e0536d72685ab658db6af10ce9cbd232f2b620f8b7f0fa06d05f53f5bbe41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a9e0536d72685ab658db6af10ce9cbd232f2b620f8b7f0fa06d05f53f5bbe41->enter($__internal_8a9e0536d72685ab658db6af10ce9cbd232f2b620f8b7f0fa06d05f53f5bbe41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e5b177c77b2209b22d82c877b8d4d2e0abe0fa643cffef6e66bd67b3fc310c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b177c77b2209b22d82c877b8d4d2e0abe0fa643cffef6e66bd67b3fc310c69->enter($__internal_e5b177c77b2209b22d82c877b8d4d2e0abe0fa643cffef6e66bd67b3fc310c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e5b177c77b2209b22d82c877b8d4d2e0abe0fa643cffef6e66bd67b3fc310c69->leave($__internal_e5b177c77b2209b22d82c877b8d4d2e0abe0fa643cffef6e66bd67b3fc310c69_prof);

        
        $__internal_8a9e0536d72685ab658db6af10ce9cbd232f2b620f8b7f0fa06d05f53f5bbe41->leave($__internal_8a9e0536d72685ab658db6af10ce9cbd232f2b620f8b7f0fa06d05f53f5bbe41_prof);

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
