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
        $__internal_407f1a88cd4420f2612f8033bcd1f57917de16cb936ebd39174ca695ad985fc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_407f1a88cd4420f2612f8033bcd1f57917de16cb936ebd39174ca695ad985fc6->enter($__internal_407f1a88cd4420f2612f8033bcd1f57917de16cb936ebd39174ca695ad985fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_ee609de65dde7ab2314f9fa3b9f7ad7020c407761908a2e7bb66e38dfc6b8aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee609de65dde7ab2314f9fa3b9f7ad7020c407761908a2e7bb66e38dfc6b8aab->enter($__internal_ee609de65dde7ab2314f9fa3b9f7ad7020c407761908a2e7bb66e38dfc6b8aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_407f1a88cd4420f2612f8033bcd1f57917de16cb936ebd39174ca695ad985fc6->leave($__internal_407f1a88cd4420f2612f8033bcd1f57917de16cb936ebd39174ca695ad985fc6_prof);

        
        $__internal_ee609de65dde7ab2314f9fa3b9f7ad7020c407761908a2e7bb66e38dfc6b8aab->leave($__internal_ee609de65dde7ab2314f9fa3b9f7ad7020c407761908a2e7bb66e38dfc6b8aab_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_36fa004af5e37d2bfda4e13927bb6e0fb8292923acc35bcb169ec72c8a55f9b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36fa004af5e37d2bfda4e13927bb6e0fb8292923acc35bcb169ec72c8a55f9b8->enter($__internal_36fa004af5e37d2bfda4e13927bb6e0fb8292923acc35bcb169ec72c8a55f9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_367e281010f16eec7b555cbbe6ff71cc460e1a43098338cb56de8f9d68cf4d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_367e281010f16eec7b555cbbe6ff71cc460e1a43098338cb56de8f9d68cf4d67->enter($__internal_367e281010f16eec7b555cbbe6ff71cc460e1a43098338cb56de8f9d68cf4d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_367e281010f16eec7b555cbbe6ff71cc460e1a43098338cb56de8f9d68cf4d67->leave($__internal_367e281010f16eec7b555cbbe6ff71cc460e1a43098338cb56de8f9d68cf4d67_prof);

        
        $__internal_36fa004af5e37d2bfda4e13927bb6e0fb8292923acc35bcb169ec72c8a55f9b8->leave($__internal_36fa004af5e37d2bfda4e13927bb6e0fb8292923acc35bcb169ec72c8a55f9b8_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_650d6690e85a0bf7b449a9d4fe7c3b25c43430b23c1b27cb5af801caabf1f7c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_650d6690e85a0bf7b449a9d4fe7c3b25c43430b23c1b27cb5af801caabf1f7c8->enter($__internal_650d6690e85a0bf7b449a9d4fe7c3b25c43430b23c1b27cb5af801caabf1f7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_c69c1a7d4aa316a0ca74cdb42e1289a23e0048a22d7f685ecfbab3b752d5555b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69c1a7d4aa316a0ca74cdb42e1289a23e0048a22d7f685ecfbab3b752d5555b->enter($__internal_c69c1a7d4aa316a0ca74cdb42e1289a23e0048a22d7f685ecfbab3b752d5555b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c69c1a7d4aa316a0ca74cdb42e1289a23e0048a22d7f685ecfbab3b752d5555b->leave($__internal_c69c1a7d4aa316a0ca74cdb42e1289a23e0048a22d7f685ecfbab3b752d5555b_prof);

        
        $__internal_650d6690e85a0bf7b449a9d4fe7c3b25c43430b23c1b27cb5af801caabf1f7c8->leave($__internal_650d6690e85a0bf7b449a9d4fe7c3b25c43430b23c1b27cb5af801caabf1f7c8_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_91fb9618791c76e02cfbf4db59ccc7dc59ca26eeea61eca8a1d6a03864ff5df6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91fb9618791c76e02cfbf4db59ccc7dc59ca26eeea61eca8a1d6a03864ff5df6->enter($__internal_91fb9618791c76e02cfbf4db59ccc7dc59ca26eeea61eca8a1d6a03864ff5df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_bd8940dffc435be592ef474f83ab660489e2298858174406ad40f71583d425f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd8940dffc435be592ef474f83ab660489e2298858174406ad40f71583d425f5->enter($__internal_bd8940dffc435be592ef474f83ab660489e2298858174406ad40f71583d425f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bd8940dffc435be592ef474f83ab660489e2298858174406ad40f71583d425f5->leave($__internal_bd8940dffc435be592ef474f83ab660489e2298858174406ad40f71583d425f5_prof);

        
        $__internal_91fb9618791c76e02cfbf4db59ccc7dc59ca26eeea61eca8a1d6a03864ff5df6->leave($__internal_91fb9618791c76e02cfbf4db59ccc7dc59ca26eeea61eca8a1d6a03864ff5df6_prof);

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
