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
        $__internal_b0a1eeeb87d88f6ef34e680eb5202f6d4e832de6f2d0711de566eeee8e20b97b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a1eeeb87d88f6ef34e680eb5202f6d4e832de6f2d0711de566eeee8e20b97b->enter($__internal_b0a1eeeb87d88f6ef34e680eb5202f6d4e832de6f2d0711de566eeee8e20b97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_456597ae8955f5f741d73278423ed7e59d7b4a7957af88f77cc02af068ba639e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_456597ae8955f5f741d73278423ed7e59d7b4a7957af88f77cc02af068ba639e->enter($__internal_456597ae8955f5f741d73278423ed7e59d7b4a7957af88f77cc02af068ba639e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b0a1eeeb87d88f6ef34e680eb5202f6d4e832de6f2d0711de566eeee8e20b97b->leave($__internal_b0a1eeeb87d88f6ef34e680eb5202f6d4e832de6f2d0711de566eeee8e20b97b_prof);

        
        $__internal_456597ae8955f5f741d73278423ed7e59d7b4a7957af88f77cc02af068ba639e->leave($__internal_456597ae8955f5f741d73278423ed7e59d7b4a7957af88f77cc02af068ba639e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9bb6b7b0636bcb1c2672e886c9c54402713c651db70e9b45b8ca4bcb8def8375 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bb6b7b0636bcb1c2672e886c9c54402713c651db70e9b45b8ca4bcb8def8375->enter($__internal_9bb6b7b0636bcb1c2672e886c9c54402713c651db70e9b45b8ca4bcb8def8375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_2a1f28bd7af52fbfd6d7fb7f45ef8285bddef54c8c3c6ccfb3419a1ce7a33029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a1f28bd7af52fbfd6d7fb7f45ef8285bddef54c8c3c6ccfb3419a1ce7a33029->enter($__internal_2a1f28bd7af52fbfd6d7fb7f45ef8285bddef54c8c3c6ccfb3419a1ce7a33029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_2a1f28bd7af52fbfd6d7fb7f45ef8285bddef54c8c3c6ccfb3419a1ce7a33029->leave($__internal_2a1f28bd7af52fbfd6d7fb7f45ef8285bddef54c8c3c6ccfb3419a1ce7a33029_prof);

        
        $__internal_9bb6b7b0636bcb1c2672e886c9c54402713c651db70e9b45b8ca4bcb8def8375->leave($__internal_9bb6b7b0636bcb1c2672e886c9c54402713c651db70e9b45b8ca4bcb8def8375_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e91359fe09044759f0523fdd636d43d5cb76f95eac9323225e6b757764804741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e91359fe09044759f0523fdd636d43d5cb76f95eac9323225e6b757764804741->enter($__internal_e91359fe09044759f0523fdd636d43d5cb76f95eac9323225e6b757764804741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_addc66f890ccd51100b24dd16469d85fc8f8b28282d9310476f56467370a86c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_addc66f890ccd51100b24dd16469d85fc8f8b28282d9310476f56467370a86c0->enter($__internal_addc66f890ccd51100b24dd16469d85fc8f8b28282d9310476f56467370a86c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_addc66f890ccd51100b24dd16469d85fc8f8b28282d9310476f56467370a86c0->leave($__internal_addc66f890ccd51100b24dd16469d85fc8f8b28282d9310476f56467370a86c0_prof);

        
        $__internal_e91359fe09044759f0523fdd636d43d5cb76f95eac9323225e6b757764804741->leave($__internal_e91359fe09044759f0523fdd636d43d5cb76f95eac9323225e6b757764804741_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_46aee0f131c39c67cfdfd87f4a32b325529cd2975badc4add45c6b3f33c8c21d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46aee0f131c39c67cfdfd87f4a32b325529cd2975badc4add45c6b3f33c8c21d->enter($__internal_46aee0f131c39c67cfdfd87f4a32b325529cd2975badc4add45c6b3f33c8c21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_9273483773a11a73b0f8149429217a7f330147c813f6b02ea84f9c362953a6c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9273483773a11a73b0f8149429217a7f330147c813f6b02ea84f9c362953a6c4->enter($__internal_9273483773a11a73b0f8149429217a7f330147c813f6b02ea84f9c362953a6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9273483773a11a73b0f8149429217a7f330147c813f6b02ea84f9c362953a6c4->leave($__internal_9273483773a11a73b0f8149429217a7f330147c813f6b02ea84f9c362953a6c4_prof);

        
        $__internal_46aee0f131c39c67cfdfd87f4a32b325529cd2975badc4add45c6b3f33c8c21d->leave($__internal_46aee0f131c39c67cfdfd87f4a32b325529cd2975badc4add45c6b3f33c8c21d_prof);

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
