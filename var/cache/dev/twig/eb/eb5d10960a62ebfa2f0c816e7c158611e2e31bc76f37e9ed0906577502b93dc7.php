<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_0bc2379e88d5ab407cecaddbc7d12b46ee4e639db91441b4745b1ab2e1731368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed45cdb964acfffecfd05e942c64ddd1187f290883521ca5ae91eaf98103e3d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed45cdb964acfffecfd05e942c64ddd1187f290883521ca5ae91eaf98103e3d8->enter($__internal_ed45cdb964acfffecfd05e942c64ddd1187f290883521ca5ae91eaf98103e3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_2dc376e608a4f95605275f9ce6b57854fe7d148542ed71de5cef948cd482fadd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc376e608a4f95605275f9ce6b57854fe7d148542ed71de5cef948cd482fadd->enter($__internal_2dc376e608a4f95605275f9ce6b57854fe7d148542ed71de5cef948cd482fadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed45cdb964acfffecfd05e942c64ddd1187f290883521ca5ae91eaf98103e3d8->leave($__internal_ed45cdb964acfffecfd05e942c64ddd1187f290883521ca5ae91eaf98103e3d8_prof);

        
        $__internal_2dc376e608a4f95605275f9ce6b57854fe7d148542ed71de5cef948cd482fadd->leave($__internal_2dc376e608a4f95605275f9ce6b57854fe7d148542ed71de5cef948cd482fadd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_61e4eb111e2bc93c38c55de7bcbd00a2138c740d8c79fba36c7dd0e2a21ece8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61e4eb111e2bc93c38c55de7bcbd00a2138c740d8c79fba36c7dd0e2a21ece8c->enter($__internal_61e4eb111e2bc93c38c55de7bcbd00a2138c740d8c79fba36c7dd0e2a21ece8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3d8ec3a79033025d0f40e087a8995c2055ec86094160ca4c28943d6d99ae846c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d8ec3a79033025d0f40e087a8995c2055ec86094160ca4c28943d6d99ae846c->enter($__internal_3d8ec3a79033025d0f40e087a8995c2055ec86094160ca4c28943d6d99ae846c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_3d8ec3a79033025d0f40e087a8995c2055ec86094160ca4c28943d6d99ae846c->leave($__internal_3d8ec3a79033025d0f40e087a8995c2055ec86094160ca4c28943d6d99ae846c_prof);

        
        $__internal_61e4eb111e2bc93c38c55de7bcbd00a2138c740d8c79fba36c7dd0e2a21ece8c->leave($__internal_61e4eb111e2bc93c38c55de7bcbd00a2138c740d8c79fba36c7dd0e2a21ece8c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
        return new Twig_Source("{% extends \"default/index.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
