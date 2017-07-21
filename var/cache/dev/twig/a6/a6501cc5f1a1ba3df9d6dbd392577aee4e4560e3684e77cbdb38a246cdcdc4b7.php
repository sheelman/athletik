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
        $__internal_c44d34c385db64d0286adf48a55655234466c6821cbe1ccdfa95a95f1d2d6ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c44d34c385db64d0286adf48a55655234466c6821cbe1ccdfa95a95f1d2d6ba9->enter($__internal_c44d34c385db64d0286adf48a55655234466c6821cbe1ccdfa95a95f1d2d6ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_9ce91a2bad8f2e2fdb744c1ca03a057372ca91418ef8bfbf1323cad1c749b55b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ce91a2bad8f2e2fdb744c1ca03a057372ca91418ef8bfbf1323cad1c749b55b->enter($__internal_9ce91a2bad8f2e2fdb744c1ca03a057372ca91418ef8bfbf1323cad1c749b55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c44d34c385db64d0286adf48a55655234466c6821cbe1ccdfa95a95f1d2d6ba9->leave($__internal_c44d34c385db64d0286adf48a55655234466c6821cbe1ccdfa95a95f1d2d6ba9_prof);

        
        $__internal_9ce91a2bad8f2e2fdb744c1ca03a057372ca91418ef8bfbf1323cad1c749b55b->leave($__internal_9ce91a2bad8f2e2fdb744c1ca03a057372ca91418ef8bfbf1323cad1c749b55b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f19d52af90b585a571e1cbf774cab93bad446deb72a40a0bd7796c46d10a3677 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f19d52af90b585a571e1cbf774cab93bad446deb72a40a0bd7796c46d10a3677->enter($__internal_f19d52af90b585a571e1cbf774cab93bad446deb72a40a0bd7796c46d10a3677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_9889b4a65c33af275641eb167e9220005f3e21b4109fd3f41a8eca9df0149ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9889b4a65c33af275641eb167e9220005f3e21b4109fd3f41a8eca9df0149ca3->enter($__internal_9889b4a65c33af275641eb167e9220005f3e21b4109fd3f41a8eca9df0149ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_9889b4a65c33af275641eb167e9220005f3e21b4109fd3f41a8eca9df0149ca3->leave($__internal_9889b4a65c33af275641eb167e9220005f3e21b4109fd3f41a8eca9df0149ca3_prof);

        
        $__internal_f19d52af90b585a571e1cbf774cab93bad446deb72a40a0bd7796c46d10a3677->leave($__internal_f19d52af90b585a571e1cbf774cab93bad446deb72a40a0bd7796c46d10a3677_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cf78cf2e04050f42b74b3aa8c16be385f300dbb41857eacea9377979ab56a52a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf78cf2e04050f42b74b3aa8c16be385f300dbb41857eacea9377979ab56a52a->enter($__internal_cf78cf2e04050f42b74b3aa8c16be385f300dbb41857eacea9377979ab56a52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_d0818a1262b24a0cb591f61deda1cad5a5e1d22a447142a321730bac59a43f33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0818a1262b24a0cb591f61deda1cad5a5e1d22a447142a321730bac59a43f33->enter($__internal_d0818a1262b24a0cb591f61deda1cad5a5e1d22a447142a321730bac59a43f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d0818a1262b24a0cb591f61deda1cad5a5e1d22a447142a321730bac59a43f33->leave($__internal_d0818a1262b24a0cb591f61deda1cad5a5e1d22a447142a321730bac59a43f33_prof);

        
        $__internal_cf78cf2e04050f42b74b3aa8c16be385f300dbb41857eacea9377979ab56a52a->leave($__internal_cf78cf2e04050f42b74b3aa8c16be385f300dbb41857eacea9377979ab56a52a_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6d72edd9a585a9812a1372d6c18bafd77f798367842c66bba4151a8a67fa8d9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d72edd9a585a9812a1372d6c18bafd77f798367842c66bba4151a8a67fa8d9e->enter($__internal_6d72edd9a585a9812a1372d6c18bafd77f798367842c66bba4151a8a67fa8d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_56057a105ec8e15fcda0940023abfbe0a2fd1fccd79b0094daafe2cd4b05bfab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56057a105ec8e15fcda0940023abfbe0a2fd1fccd79b0094daafe2cd4b05bfab->enter($__internal_56057a105ec8e15fcda0940023abfbe0a2fd1fccd79b0094daafe2cd4b05bfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_56057a105ec8e15fcda0940023abfbe0a2fd1fccd79b0094daafe2cd4b05bfab->leave($__internal_56057a105ec8e15fcda0940023abfbe0a2fd1fccd79b0094daafe2cd4b05bfab_prof);

        
        $__internal_6d72edd9a585a9812a1372d6c18bafd77f798367842c66bba4151a8a67fa8d9e->leave($__internal_6d72edd9a585a9812a1372d6c18bafd77f798367842c66bba4151a8a67fa8d9e_prof);

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
