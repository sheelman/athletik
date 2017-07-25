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
        $__internal_7faeed1adb0b01586686be61544d8157e073830100e05f3a8de45e56b2a0984a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7faeed1adb0b01586686be61544d8157e073830100e05f3a8de45e56b2a0984a->enter($__internal_7faeed1adb0b01586686be61544d8157e073830100e05f3a8de45e56b2a0984a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_dddd574972f8d64d8541f1b69ad749afa7bd268618881adb799477c3259388f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dddd574972f8d64d8541f1b69ad749afa7bd268618881adb799477c3259388f4->enter($__internal_dddd574972f8d64d8541f1b69ad749afa7bd268618881adb799477c3259388f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7faeed1adb0b01586686be61544d8157e073830100e05f3a8de45e56b2a0984a->leave($__internal_7faeed1adb0b01586686be61544d8157e073830100e05f3a8de45e56b2a0984a_prof);

        
        $__internal_dddd574972f8d64d8541f1b69ad749afa7bd268618881adb799477c3259388f4->leave($__internal_dddd574972f8d64d8541f1b69ad749afa7bd268618881adb799477c3259388f4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_dc174fba0c987fdf5b5f0ab83c5787222cbd8bc674d91ee107288e0f5fbe0b92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc174fba0c987fdf5b5f0ab83c5787222cbd8bc674d91ee107288e0f5fbe0b92->enter($__internal_dc174fba0c987fdf5b5f0ab83c5787222cbd8bc674d91ee107288e0f5fbe0b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_5b75b243e86ddf948cb140d5dfcf101301604793b169c967a2cfae17997875b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b75b243e86ddf948cb140d5dfcf101301604793b169c967a2cfae17997875b2->enter($__internal_5b75b243e86ddf948cb140d5dfcf101301604793b169c967a2cfae17997875b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_5b75b243e86ddf948cb140d5dfcf101301604793b169c967a2cfae17997875b2->leave($__internal_5b75b243e86ddf948cb140d5dfcf101301604793b169c967a2cfae17997875b2_prof);

        
        $__internal_dc174fba0c987fdf5b5f0ab83c5787222cbd8bc674d91ee107288e0f5fbe0b92->leave($__internal_dc174fba0c987fdf5b5f0ab83c5787222cbd8bc674d91ee107288e0f5fbe0b92_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_21568fbe0b381b1be8370736708f2468a3b20d55b683b689247d9365279a1e65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21568fbe0b381b1be8370736708f2468a3b20d55b683b689247d9365279a1e65->enter($__internal_21568fbe0b381b1be8370736708f2468a3b20d55b683b689247d9365279a1e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_d6f39688177701d1ccf1fcc0b12fedb22fb8877993ac537b15711d0904106638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6f39688177701d1ccf1fcc0b12fedb22fb8877993ac537b15711d0904106638->enter($__internal_d6f39688177701d1ccf1fcc0b12fedb22fb8877993ac537b15711d0904106638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d6f39688177701d1ccf1fcc0b12fedb22fb8877993ac537b15711d0904106638->leave($__internal_d6f39688177701d1ccf1fcc0b12fedb22fb8877993ac537b15711d0904106638_prof);

        
        $__internal_21568fbe0b381b1be8370736708f2468a3b20d55b683b689247d9365279a1e65->leave($__internal_21568fbe0b381b1be8370736708f2468a3b20d55b683b689247d9365279a1e65_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9eef2f7012a3987de64ef242ecee7551527edcdc8cb7fb8c7dee9efc6dfc979f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eef2f7012a3987de64ef242ecee7551527edcdc8cb7fb8c7dee9efc6dfc979f->enter($__internal_9eef2f7012a3987de64ef242ecee7551527edcdc8cb7fb8c7dee9efc6dfc979f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_ab63a5237be0403e45023eb55ea491f4afeb5c746792681e3286f09c94338c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab63a5237be0403e45023eb55ea491f4afeb5c746792681e3286f09c94338c96->enter($__internal_ab63a5237be0403e45023eb55ea491f4afeb5c746792681e3286f09c94338c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ab63a5237be0403e45023eb55ea491f4afeb5c746792681e3286f09c94338c96->leave($__internal_ab63a5237be0403e45023eb55ea491f4afeb5c746792681e3286f09c94338c96_prof);

        
        $__internal_9eef2f7012a3987de64ef242ecee7551527edcdc8cb7fb8c7dee9efc6dfc979f->leave($__internal_9eef2f7012a3987de64ef242ecee7551527edcdc8cb7fb8c7dee9efc6dfc979f_prof);

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
