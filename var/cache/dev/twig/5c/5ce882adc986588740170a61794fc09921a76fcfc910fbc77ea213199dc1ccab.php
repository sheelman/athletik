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
        $__internal_127049784e235d440798930bedcc89f9d94c68dc9e84b3c3b8ec85748be3bc3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_127049784e235d440798930bedcc89f9d94c68dc9e84b3c3b8ec85748be3bc3f->enter($__internal_127049784e235d440798930bedcc89f9d94c68dc9e84b3c3b8ec85748be3bc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_96d92b4d7658e277ee9199b197b40e23d1dc407f46687f5db61c571e77394ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96d92b4d7658e277ee9199b197b40e23d1dc407f46687f5db61c571e77394ba3->enter($__internal_96d92b4d7658e277ee9199b197b40e23d1dc407f46687f5db61c571e77394ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_127049784e235d440798930bedcc89f9d94c68dc9e84b3c3b8ec85748be3bc3f->leave($__internal_127049784e235d440798930bedcc89f9d94c68dc9e84b3c3b8ec85748be3bc3f_prof);

        
        $__internal_96d92b4d7658e277ee9199b197b40e23d1dc407f46687f5db61c571e77394ba3->leave($__internal_96d92b4d7658e277ee9199b197b40e23d1dc407f46687f5db61c571e77394ba3_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_da406d5a284aa201a495af525de7661c3a324626958728f7322c1a43a3c7ab9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da406d5a284aa201a495af525de7661c3a324626958728f7322c1a43a3c7ab9f->enter($__internal_da406d5a284aa201a495af525de7661c3a324626958728f7322c1a43a3c7ab9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_5b5bf614629e61bf99007d98f86d36f9be63efcf9990c6da770c6ccdcb9fbdd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5bf614629e61bf99007d98f86d36f9be63efcf9990c6da770c6ccdcb9fbdd6->enter($__internal_5b5bf614629e61bf99007d98f86d36f9be63efcf9990c6da770c6ccdcb9fbdd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_5b5bf614629e61bf99007d98f86d36f9be63efcf9990c6da770c6ccdcb9fbdd6->leave($__internal_5b5bf614629e61bf99007d98f86d36f9be63efcf9990c6da770c6ccdcb9fbdd6_prof);

        
        $__internal_da406d5a284aa201a495af525de7661c3a324626958728f7322c1a43a3c7ab9f->leave($__internal_da406d5a284aa201a495af525de7661c3a324626958728f7322c1a43a3c7ab9f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e31e00685a398f6ad75bb356afaad9fbccf5059332e2f772ff95ab5279e6626e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e31e00685a398f6ad75bb356afaad9fbccf5059332e2f772ff95ab5279e6626e->enter($__internal_e31e00685a398f6ad75bb356afaad9fbccf5059332e2f772ff95ab5279e6626e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_299590aef99049b90e9afe6a7109df579ac59498fa501b3aa86c57f6ca5e68c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_299590aef99049b90e9afe6a7109df579ac59498fa501b3aa86c57f6ca5e68c2->enter($__internal_299590aef99049b90e9afe6a7109df579ac59498fa501b3aa86c57f6ca5e68c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_299590aef99049b90e9afe6a7109df579ac59498fa501b3aa86c57f6ca5e68c2->leave($__internal_299590aef99049b90e9afe6a7109df579ac59498fa501b3aa86c57f6ca5e68c2_prof);

        
        $__internal_e31e00685a398f6ad75bb356afaad9fbccf5059332e2f772ff95ab5279e6626e->leave($__internal_e31e00685a398f6ad75bb356afaad9fbccf5059332e2f772ff95ab5279e6626e_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2326c6cc8c41da3458d7326932200b31ffcb417618e789fc9d2959bfffb7242b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2326c6cc8c41da3458d7326932200b31ffcb417618e789fc9d2959bfffb7242b->enter($__internal_2326c6cc8c41da3458d7326932200b31ffcb417618e789fc9d2959bfffb7242b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_bf280d29696baade8a2c220035888395adcf7808692be869eb4d66e19fd649b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf280d29696baade8a2c220035888395adcf7808692be869eb4d66e19fd649b8->enter($__internal_bf280d29696baade8a2c220035888395adcf7808692be869eb4d66e19fd649b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bf280d29696baade8a2c220035888395adcf7808692be869eb4d66e19fd649b8->leave($__internal_bf280d29696baade8a2c220035888395adcf7808692be869eb4d66e19fd649b8_prof);

        
        $__internal_2326c6cc8c41da3458d7326932200b31ffcb417618e789fc9d2959bfffb7242b->leave($__internal_2326c6cc8c41da3458d7326932200b31ffcb417618e789fc9d2959bfffb7242b_prof);

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
