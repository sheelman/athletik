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
        $__internal_e5328b9f7939710d2d3b54544b1c57b86bda012dcfca3826441abc10cae81200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5328b9f7939710d2d3b54544b1c57b86bda012dcfca3826441abc10cae81200->enter($__internal_e5328b9f7939710d2d3b54544b1c57b86bda012dcfca3826441abc10cae81200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_a4981a0f0436342fb4faf8d6512897b1c98daf05a3b8b57dc2a39b4682e263c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4981a0f0436342fb4faf8d6512897b1c98daf05a3b8b57dc2a39b4682e263c7->enter($__internal_a4981a0f0436342fb4faf8d6512897b1c98daf05a3b8b57dc2a39b4682e263c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5328b9f7939710d2d3b54544b1c57b86bda012dcfca3826441abc10cae81200->leave($__internal_e5328b9f7939710d2d3b54544b1c57b86bda012dcfca3826441abc10cae81200_prof);

        
        $__internal_a4981a0f0436342fb4faf8d6512897b1c98daf05a3b8b57dc2a39b4682e263c7->leave($__internal_a4981a0f0436342fb4faf8d6512897b1c98daf05a3b8b57dc2a39b4682e263c7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1593f00e464c80f4bf1108b86356f564bdb34ae9c28ef6be7a000e931443f3b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1593f00e464c80f4bf1108b86356f564bdb34ae9c28ef6be7a000e931443f3b6->enter($__internal_1593f00e464c80f4bf1108b86356f564bdb34ae9c28ef6be7a000e931443f3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f5912d95c368fb968d64e8f3a629774f3387194ff2c3399988c7ef95f8f0c99e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5912d95c368fb968d64e8f3a629774f3387194ff2c3399988c7ef95f8f0c99e->enter($__internal_f5912d95c368fb968d64e8f3a629774f3387194ff2c3399988c7ef95f8f0c99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f5912d95c368fb968d64e8f3a629774f3387194ff2c3399988c7ef95f8f0c99e->leave($__internal_f5912d95c368fb968d64e8f3a629774f3387194ff2c3399988c7ef95f8f0c99e_prof);

        
        $__internal_1593f00e464c80f4bf1108b86356f564bdb34ae9c28ef6be7a000e931443f3b6->leave($__internal_1593f00e464c80f4bf1108b86356f564bdb34ae9c28ef6be7a000e931443f3b6_prof);

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
