<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_e956ffa00a4d4e43ca666274a70e1663a40ea87bc391df2b915829aad1e97516 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_145272b1d8f28e18af3e9c379598d63e20d8909e92d76c217c10a18531b782f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_145272b1d8f28e18af3e9c379598d63e20d8909e92d76c217c10a18531b782f9->enter($__internal_145272b1d8f28e18af3e9c379598d63e20d8909e92d76c217c10a18531b782f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_b3dcc32f71785b823190bc233598fc38c0aa8221fc40c974ef9bc26cf9077e54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3dcc32f71785b823190bc233598fc38c0aa8221fc40c974ef9bc26cf9077e54->enter($__internal_b3dcc32f71785b823190bc233598fc38c0aa8221fc40c974ef9bc26cf9077e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_145272b1d8f28e18af3e9c379598d63e20d8909e92d76c217c10a18531b782f9->leave($__internal_145272b1d8f28e18af3e9c379598d63e20d8909e92d76c217c10a18531b782f9_prof);

        
        $__internal_b3dcc32f71785b823190bc233598fc38c0aa8221fc40c974ef9bc26cf9077e54->leave($__internal_b3dcc32f71785b823190bc233598fc38c0aa8221fc40c974ef9bc26cf9077e54_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_50450414655ffd14f5e155a8c1069801921f2b275abfb954133c5c4b4e120865 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50450414655ffd14f5e155a8c1069801921f2b275abfb954133c5c4b4e120865->enter($__internal_50450414655ffd14f5e155a8c1069801921f2b275abfb954133c5c4b4e120865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_4e5d49d28f9b16e96f963242a0c0560590e7fdcdf4af15055403eeac86f9b40e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e5d49d28f9b16e96f963242a0c0560590e7fdcdf4af15055403eeac86f9b40e->enter($__internal_4e5d49d28f9b16e96f963242a0c0560590e7fdcdf4af15055403eeac86f9b40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_4e5d49d28f9b16e96f963242a0c0560590e7fdcdf4af15055403eeac86f9b40e->leave($__internal_4e5d49d28f9b16e96f963242a0c0560590e7fdcdf4af15055403eeac86f9b40e_prof);

        
        $__internal_50450414655ffd14f5e155a8c1069801921f2b275abfb954133c5c4b4e120865->leave($__internal_50450414655ffd14f5e155a8c1069801921f2b275abfb954133c5c4b4e120865_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_536ae6f4b37b3a25d013773553292924f09b7b3671d0a9ab25f96fabbca50fc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_536ae6f4b37b3a25d013773553292924f09b7b3671d0a9ab25f96fabbca50fc9->enter($__internal_536ae6f4b37b3a25d013773553292924f09b7b3671d0a9ab25f96fabbca50fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_01f3307684280e86f3d4515137b030c556bb610b7f914d1fd157de81af4335cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01f3307684280e86f3d4515137b030c556bb610b7f914d1fd157de81af4335cc->enter($__internal_01f3307684280e86f3d4515137b030c556bb610b7f914d1fd157de81af4335cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_01f3307684280e86f3d4515137b030c556bb610b7f914d1fd157de81af4335cc->leave($__internal_01f3307684280e86f3d4515137b030c556bb610b7f914d1fd157de81af4335cc_prof);

        
        $__internal_536ae6f4b37b3a25d013773553292924f09b7b3671d0a9ab25f96fabbca50fc9->leave($__internal_536ae6f4b37b3a25d013773553292924f09b7b3671d0a9ab25f96fabbca50fc9_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_46d71f8206b6295aa3b0c09f945e246234baee370a82f00ce6fddb52ee97d45e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46d71f8206b6295aa3b0c09f945e246234baee370a82f00ce6fddb52ee97d45e->enter($__internal_46d71f8206b6295aa3b0c09f945e246234baee370a82f00ce6fddb52ee97d45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_b6b9c0148e192234be8d4b9c952854f6534aae8563460a20cd4d0b91cbeb5e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6b9c0148e192234be8d4b9c952854f6534aae8563460a20cd4d0b91cbeb5e88->enter($__internal_b6b9c0148e192234be8d4b9c952854f6534aae8563460a20cd4d0b91cbeb5e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b6b9c0148e192234be8d4b9c952854f6534aae8563460a20cd4d0b91cbeb5e88->leave($__internal_b6b9c0148e192234be8d4b9c952854f6534aae8563460a20cd4d0b91cbeb5e88_prof);

        
        $__internal_46d71f8206b6295aa3b0c09f945e246234baee370a82f00ce6fddb52ee97d45e->leave($__internal_46d71f8206b6295aa3b0c09f945e246234baee370a82f00ce6fddb52ee97d45e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
