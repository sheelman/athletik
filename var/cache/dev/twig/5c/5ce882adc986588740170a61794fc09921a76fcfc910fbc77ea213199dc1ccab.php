<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_ffeaf08c64677b5ab87c5401e6dfcfa86fc67b9713e02f3a984b122e7f542ce6 extends Twig_Template
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
        $__internal_b8befc519d0b7f7b69b6bf66882675bded414b3d1a9389bfc047dd1eaa9d5a20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8befc519d0b7f7b69b6bf66882675bded414b3d1a9389bfc047dd1eaa9d5a20->enter($__internal_b8befc519d0b7f7b69b6bf66882675bded414b3d1a9389bfc047dd1eaa9d5a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_8dfe8759d3625c1395a81689cbae1cf289de6fc1d1262f4506d935fb0c2bb598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dfe8759d3625c1395a81689cbae1cf289de6fc1d1262f4506d935fb0c2bb598->enter($__internal_8dfe8759d3625c1395a81689cbae1cf289de6fc1d1262f4506d935fb0c2bb598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b8befc519d0b7f7b69b6bf66882675bded414b3d1a9389bfc047dd1eaa9d5a20->leave($__internal_b8befc519d0b7f7b69b6bf66882675bded414b3d1a9389bfc047dd1eaa9d5a20_prof);

        
        $__internal_8dfe8759d3625c1395a81689cbae1cf289de6fc1d1262f4506d935fb0c2bb598->leave($__internal_8dfe8759d3625c1395a81689cbae1cf289de6fc1d1262f4506d935fb0c2bb598_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_dc15a9449ba2d7ee77578980199c54856da7aba7f375514308de87142216e494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc15a9449ba2d7ee77578980199c54856da7aba7f375514308de87142216e494->enter($__internal_dc15a9449ba2d7ee77578980199c54856da7aba7f375514308de87142216e494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_a5c104ffd5cbc5de338e3c11e64c59b3b64917009abc74e628720562169870df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c104ffd5cbc5de338e3c11e64c59b3b64917009abc74e628720562169870df->enter($__internal_a5c104ffd5cbc5de338e3c11e64c59b3b64917009abc74e628720562169870df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_a5c104ffd5cbc5de338e3c11e64c59b3b64917009abc74e628720562169870df->leave($__internal_a5c104ffd5cbc5de338e3c11e64c59b3b64917009abc74e628720562169870df_prof);

        
        $__internal_dc15a9449ba2d7ee77578980199c54856da7aba7f375514308de87142216e494->leave($__internal_dc15a9449ba2d7ee77578980199c54856da7aba7f375514308de87142216e494_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_886c09a72cf871e84539851868993c68ad0092296c8cfd1c65ab1b80d1fc5471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_886c09a72cf871e84539851868993c68ad0092296c8cfd1c65ab1b80d1fc5471->enter($__internal_886c09a72cf871e84539851868993c68ad0092296c8cfd1c65ab1b80d1fc5471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_36cf4732e624e1a93d516c7162902cfb612d13f7fd39d741a881176d300300ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36cf4732e624e1a93d516c7162902cfb612d13f7fd39d741a881176d300300ad->enter($__internal_36cf4732e624e1a93d516c7162902cfb612d13f7fd39d741a881176d300300ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_36cf4732e624e1a93d516c7162902cfb612d13f7fd39d741a881176d300300ad->leave($__internal_36cf4732e624e1a93d516c7162902cfb612d13f7fd39d741a881176d300300ad_prof);

        
        $__internal_886c09a72cf871e84539851868993c68ad0092296c8cfd1c65ab1b80d1fc5471->leave($__internal_886c09a72cf871e84539851868993c68ad0092296c8cfd1c65ab1b80d1fc5471_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4d3e541a1c087f2d4461d5aa51c78db08c3179040922f6432c53acf05c6c1129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d3e541a1c087f2d4461d5aa51c78db08c3179040922f6432c53acf05c6c1129->enter($__internal_4d3e541a1c087f2d4461d5aa51c78db08c3179040922f6432c53acf05c6c1129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_bf8df2973d20aefe3bddbbcb9dfd18bc0109b46f7580e3f7a680006a18b67f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8df2973d20aefe3bddbbcb9dfd18bc0109b46f7580e3f7a680006a18b67f4e->enter($__internal_bf8df2973d20aefe3bddbbcb9dfd18bc0109b46f7580e3f7a680006a18b67f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bf8df2973d20aefe3bddbbcb9dfd18bc0109b46f7580e3f7a680006a18b67f4e->leave($__internal_bf8df2973d20aefe3bddbbcb9dfd18bc0109b46f7580e3f7a680006a18b67f4e_prof);

        
        $__internal_4d3e541a1c087f2d4461d5aa51c78db08c3179040922f6432c53acf05c6c1129->leave($__internal_4d3e541a1c087f2d4461d5aa51c78db08c3179040922f6432c53acf05c6c1129_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
