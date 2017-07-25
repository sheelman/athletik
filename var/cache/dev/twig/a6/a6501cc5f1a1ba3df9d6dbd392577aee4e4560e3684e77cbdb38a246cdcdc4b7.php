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
        $__internal_58668b8de1e298859215c51db90a4662e1375d788d6272f442f336d2192856da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58668b8de1e298859215c51db90a4662e1375d788d6272f442f336d2192856da->enter($__internal_58668b8de1e298859215c51db90a4662e1375d788d6272f442f336d2192856da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_e789e57f1f82230c17a6fb228cff086e1a60acf067c3313bd491b68d4fd56910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e789e57f1f82230c17a6fb228cff086e1a60acf067c3313bd491b68d4fd56910->enter($__internal_e789e57f1f82230c17a6fb228cff086e1a60acf067c3313bd491b68d4fd56910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_58668b8de1e298859215c51db90a4662e1375d788d6272f442f336d2192856da->leave($__internal_58668b8de1e298859215c51db90a4662e1375d788d6272f442f336d2192856da_prof);

        
        $__internal_e789e57f1f82230c17a6fb228cff086e1a60acf067c3313bd491b68d4fd56910->leave($__internal_e789e57f1f82230c17a6fb228cff086e1a60acf067c3313bd491b68d4fd56910_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5e526e1431301e502f0f8ed9ff6e6c3b9c4bafafd5a51b34abb73408854edc1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e526e1431301e502f0f8ed9ff6e6c3b9c4bafafd5a51b34abb73408854edc1a->enter($__internal_5e526e1431301e502f0f8ed9ff6e6c3b9c4bafafd5a51b34abb73408854edc1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_bd3c96412a3b11c0d808d209c7c8ccaed7bf590533585ad7a3907f19ebde079e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3c96412a3b11c0d808d209c7c8ccaed7bf590533585ad7a3907f19ebde079e->enter($__internal_bd3c96412a3b11c0d808d209c7c8ccaed7bf590533585ad7a3907f19ebde079e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_bd3c96412a3b11c0d808d209c7c8ccaed7bf590533585ad7a3907f19ebde079e->leave($__internal_bd3c96412a3b11c0d808d209c7c8ccaed7bf590533585ad7a3907f19ebde079e_prof);

        
        $__internal_5e526e1431301e502f0f8ed9ff6e6c3b9c4bafafd5a51b34abb73408854edc1a->leave($__internal_5e526e1431301e502f0f8ed9ff6e6c3b9c4bafafd5a51b34abb73408854edc1a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d611bc827420d06e58e6c934fc7d9dd56e86ab7b0d1ccb6a14997e0a63e3db18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d611bc827420d06e58e6c934fc7d9dd56e86ab7b0d1ccb6a14997e0a63e3db18->enter($__internal_d611bc827420d06e58e6c934fc7d9dd56e86ab7b0d1ccb6a14997e0a63e3db18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_358fb2af05d4b19adf6ca9222543a51c7579e967ac00f4319b5c9a405307dc61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_358fb2af05d4b19adf6ca9222543a51c7579e967ac00f4319b5c9a405307dc61->enter($__internal_358fb2af05d4b19adf6ca9222543a51c7579e967ac00f4319b5c9a405307dc61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_358fb2af05d4b19adf6ca9222543a51c7579e967ac00f4319b5c9a405307dc61->leave($__internal_358fb2af05d4b19adf6ca9222543a51c7579e967ac00f4319b5c9a405307dc61_prof);

        
        $__internal_d611bc827420d06e58e6c934fc7d9dd56e86ab7b0d1ccb6a14997e0a63e3db18->leave($__internal_d611bc827420d06e58e6c934fc7d9dd56e86ab7b0d1ccb6a14997e0a63e3db18_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_494c935343a161282d0c94cfeb9ef50637ed3fe873aed9a942c146be402228dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_494c935343a161282d0c94cfeb9ef50637ed3fe873aed9a942c146be402228dd->enter($__internal_494c935343a161282d0c94cfeb9ef50637ed3fe873aed9a942c146be402228dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_5ed98bebe44d1c3809f90bb44d206b6c69a632d12b9b7b2bcf23ecda357e5c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed98bebe44d1c3809f90bb44d206b6c69a632d12b9b7b2bcf23ecda357e5c33->enter($__internal_5ed98bebe44d1c3809f90bb44d206b6c69a632d12b9b7b2bcf23ecda357e5c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5ed98bebe44d1c3809f90bb44d206b6c69a632d12b9b7b2bcf23ecda357e5c33->leave($__internal_5ed98bebe44d1c3809f90bb44d206b6c69a632d12b9b7b2bcf23ecda357e5c33_prof);

        
        $__internal_494c935343a161282d0c94cfeb9ef50637ed3fe873aed9a942c146be402228dd->leave($__internal_494c935343a161282d0c94cfeb9ef50637ed3fe873aed9a942c146be402228dd_prof);

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
