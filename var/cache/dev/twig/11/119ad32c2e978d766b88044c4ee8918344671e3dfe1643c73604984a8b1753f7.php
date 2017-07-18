<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_8d4b7eb359beabde00363abfa54c222061db4d8d8c81bd7a4ac54fff0458b344 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_5329356c0aa326226ceb720d099344f2aa8635762ba154a83c8006fcf7a7ccc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5329356c0aa326226ceb720d099344f2aa8635762ba154a83c8006fcf7a7ccc1->enter($__internal_5329356c0aa326226ceb720d099344f2aa8635762ba154a83c8006fcf7a7ccc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_1add975a615320b7793c50e429b692292ba43cccb08e3d48570ab6177213acc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1add975a615320b7793c50e429b692292ba43cccb08e3d48570ab6177213acc1->enter($__internal_1add975a615320b7793c50e429b692292ba43cccb08e3d48570ab6177213acc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5329356c0aa326226ceb720d099344f2aa8635762ba154a83c8006fcf7a7ccc1->leave($__internal_5329356c0aa326226ceb720d099344f2aa8635762ba154a83c8006fcf7a7ccc1_prof);

        
        $__internal_1add975a615320b7793c50e429b692292ba43cccb08e3d48570ab6177213acc1->leave($__internal_1add975a615320b7793c50e429b692292ba43cccb08e3d48570ab6177213acc1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a33c9589bffb54974211cf4863d2fb715803649423eaf8d909a9f1c58c205c4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a33c9589bffb54974211cf4863d2fb715803649423eaf8d909a9f1c58c205c4a->enter($__internal_a33c9589bffb54974211cf4863d2fb715803649423eaf8d909a9f1c58c205c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_999f2b74aa89406e771fb2728aa7ebc41544a2c4f1fd3c4a1d160f4478347a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_999f2b74aa89406e771fb2728aa7ebc41544a2c4f1fd3c4a1d160f4478347a95->enter($__internal_999f2b74aa89406e771fb2728aa7ebc41544a2c4f1fd3c4a1d160f4478347a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_999f2b74aa89406e771fb2728aa7ebc41544a2c4f1fd3c4a1d160f4478347a95->leave($__internal_999f2b74aa89406e771fb2728aa7ebc41544a2c4f1fd3c4a1d160f4478347a95_prof);

        
        $__internal_a33c9589bffb54974211cf4863d2fb715803649423eaf8d909a9f1c58c205c4a->leave($__internal_a33c9589bffb54974211cf4863d2fb715803649423eaf8d909a9f1c58c205c4a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
