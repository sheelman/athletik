<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_0bc2379e88d5ab407cecaddbc7d12b46ee4e639db91441b4745b1ab2e1731368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_2ea7398507242c742acd50cd54dbd45f97c0de2fe9c398ddfd8ef1a51453e0fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ea7398507242c742acd50cd54dbd45f97c0de2fe9c398ddfd8ef1a51453e0fa->enter($__internal_2ea7398507242c742acd50cd54dbd45f97c0de2fe9c398ddfd8ef1a51453e0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_0c66e43f2cd87ed356024e1f572e1fdbd7544f0cceaa0000d8714737ed2f004b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c66e43f2cd87ed356024e1f572e1fdbd7544f0cceaa0000d8714737ed2f004b->enter($__internal_0c66e43f2cd87ed356024e1f572e1fdbd7544f0cceaa0000d8714737ed2f004b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ea7398507242c742acd50cd54dbd45f97c0de2fe9c398ddfd8ef1a51453e0fa->leave($__internal_2ea7398507242c742acd50cd54dbd45f97c0de2fe9c398ddfd8ef1a51453e0fa_prof);

        
        $__internal_0c66e43f2cd87ed356024e1f572e1fdbd7544f0cceaa0000d8714737ed2f004b->leave($__internal_0c66e43f2cd87ed356024e1f572e1fdbd7544f0cceaa0000d8714737ed2f004b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d51c4da79bb149e20e9740bf6b14b498f282525a7d88799204c6f01f5b59091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d51c4da79bb149e20e9740bf6b14b498f282525a7d88799204c6f01f5b59091->enter($__internal_8d51c4da79bb149e20e9740bf6b14b498f282525a7d88799204c6f01f5b59091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7ff97522033b02bdaa99251bb9a1bf39d8c5fc1e9372f1b68aeb17e0566c5fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ff97522033b02bdaa99251bb9a1bf39d8c5fc1e9372f1b68aeb17e0566c5fab->enter($__internal_7ff97522033b02bdaa99251bb9a1bf39d8c5fc1e9372f1b68aeb17e0566c5fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_7ff97522033b02bdaa99251bb9a1bf39d8c5fc1e9372f1b68aeb17e0566c5fab->leave($__internal_7ff97522033b02bdaa99251bb9a1bf39d8c5fc1e9372f1b68aeb17e0566c5fab_prof);

        
        $__internal_8d51c4da79bb149e20e9740bf6b14b498f282525a7d88799204c6f01f5b59091->leave($__internal_8d51c4da79bb149e20e9740bf6b14b498f282525a7d88799204c6f01f5b59091_prof);

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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

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
