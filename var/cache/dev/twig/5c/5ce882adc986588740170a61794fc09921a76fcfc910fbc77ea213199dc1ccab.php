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
        $__internal_7d3d504b4d5322c54a4e8161848a91336fbc8a165a86f6ab57af94968712e244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d3d504b4d5322c54a4e8161848a91336fbc8a165a86f6ab57af94968712e244->enter($__internal_7d3d504b4d5322c54a4e8161848a91336fbc8a165a86f6ab57af94968712e244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_a405a73f41a63647c2fdbef00ba13390e35956db32fe43335c202337e4b3fcca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a405a73f41a63647c2fdbef00ba13390e35956db32fe43335c202337e4b3fcca->enter($__internal_a405a73f41a63647c2fdbef00ba13390e35956db32fe43335c202337e4b3fcca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7d3d504b4d5322c54a4e8161848a91336fbc8a165a86f6ab57af94968712e244->leave($__internal_7d3d504b4d5322c54a4e8161848a91336fbc8a165a86f6ab57af94968712e244_prof);

        
        $__internal_a405a73f41a63647c2fdbef00ba13390e35956db32fe43335c202337e4b3fcca->leave($__internal_a405a73f41a63647c2fdbef00ba13390e35956db32fe43335c202337e4b3fcca_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a9f3b5b0f43ceb44eb5a0efb137d465294d19f969370df710153c4e4ae4591de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9f3b5b0f43ceb44eb5a0efb137d465294d19f969370df710153c4e4ae4591de->enter($__internal_a9f3b5b0f43ceb44eb5a0efb137d465294d19f969370df710153c4e4ae4591de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_bca349df094a6844d88f53f18ba326346417636ba327c7801118c3e4c96a3d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bca349df094a6844d88f53f18ba326346417636ba327c7801118c3e4c96a3d73->enter($__internal_bca349df094a6844d88f53f18ba326346417636ba327c7801118c3e4c96a3d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_bca349df094a6844d88f53f18ba326346417636ba327c7801118c3e4c96a3d73->leave($__internal_bca349df094a6844d88f53f18ba326346417636ba327c7801118c3e4c96a3d73_prof);

        
        $__internal_a9f3b5b0f43ceb44eb5a0efb137d465294d19f969370df710153c4e4ae4591de->leave($__internal_a9f3b5b0f43ceb44eb5a0efb137d465294d19f969370df710153c4e4ae4591de_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ebd1d178634290ecca166882791f1766c7429d6a2d28bf7d5dc7f700ba56344c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd1d178634290ecca166882791f1766c7429d6a2d28bf7d5dc7f700ba56344c->enter($__internal_ebd1d178634290ecca166882791f1766c7429d6a2d28bf7d5dc7f700ba56344c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_353d8bb28f08cdeab8fd68e05a5546b3259bc97ad493478d6f01bd436692a1d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_353d8bb28f08cdeab8fd68e05a5546b3259bc97ad493478d6f01bd436692a1d6->enter($__internal_353d8bb28f08cdeab8fd68e05a5546b3259bc97ad493478d6f01bd436692a1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_353d8bb28f08cdeab8fd68e05a5546b3259bc97ad493478d6f01bd436692a1d6->leave($__internal_353d8bb28f08cdeab8fd68e05a5546b3259bc97ad493478d6f01bd436692a1d6_prof);

        
        $__internal_ebd1d178634290ecca166882791f1766c7429d6a2d28bf7d5dc7f700ba56344c->leave($__internal_ebd1d178634290ecca166882791f1766c7429d6a2d28bf7d5dc7f700ba56344c_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_807bc74cceb51c8cec950761ec513020ef2731e57dee4f449a130002b937e2ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_807bc74cceb51c8cec950761ec513020ef2731e57dee4f449a130002b937e2ee->enter($__internal_807bc74cceb51c8cec950761ec513020ef2731e57dee4f449a130002b937e2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_90654f1dbe196379594023371418df61dd3b44feae5996febe3f65eee5cf515d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90654f1dbe196379594023371418df61dd3b44feae5996febe3f65eee5cf515d->enter($__internal_90654f1dbe196379594023371418df61dd3b44feae5996febe3f65eee5cf515d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_90654f1dbe196379594023371418df61dd3b44feae5996febe3f65eee5cf515d->leave($__internal_90654f1dbe196379594023371418df61dd3b44feae5996febe3f65eee5cf515d_prof);

        
        $__internal_807bc74cceb51c8cec950761ec513020ef2731e57dee4f449a130002b937e2ee->leave($__internal_807bc74cceb51c8cec950761ec513020ef2731e57dee4f449a130002b937e2ee_prof);

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
