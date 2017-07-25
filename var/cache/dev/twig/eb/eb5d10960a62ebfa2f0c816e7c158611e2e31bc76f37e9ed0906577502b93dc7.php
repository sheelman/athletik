<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_0bc2379e88d5ab407cecaddbc7d12b46ee4e639db91441b4745b1ab2e1731368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d96270ad52ae8c01fc5ece465927253661bee8f017fc1f6b553652e6c575f80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d96270ad52ae8c01fc5ece465927253661bee8f017fc1f6b553652e6c575f80->enter($__internal_4d96270ad52ae8c01fc5ece465927253661bee8f017fc1f6b553652e6c575f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_f0bc1774efd18c7460d66553caf5446ec0e3b7e28dcd6bb3a3e829f03a869cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0bc1774efd18c7460d66553caf5446ec0e3b7e28dcd6bb3a3e829f03a869cbf->enter($__internal_f0bc1774efd18c7460d66553caf5446ec0e3b7e28dcd6bb3a3e829f03a869cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d96270ad52ae8c01fc5ece465927253661bee8f017fc1f6b553652e6c575f80->leave($__internal_4d96270ad52ae8c01fc5ece465927253661bee8f017fc1f6b553652e6c575f80_prof);

        
        $__internal_f0bc1774efd18c7460d66553caf5446ec0e3b7e28dcd6bb3a3e829f03a869cbf->leave($__internal_f0bc1774efd18c7460d66553caf5446ec0e3b7e28dcd6bb3a3e829f03a869cbf_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1b3aef47ed213d24eac4699fc532ab3b27c6bb45d0c714ceb6cf0b199296e985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b3aef47ed213d24eac4699fc532ab3b27c6bb45d0c714ceb6cf0b199296e985->enter($__internal_1b3aef47ed213d24eac4699fc532ab3b27c6bb45d0c714ceb6cf0b199296e985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_97a7fbdde9f2423236c3acb230b0291cd65f91e15f1e85318b80ff09b150196e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a7fbdde9f2423236c3acb230b0291cd65f91e15f1e85318b80ff09b150196e->enter($__internal_97a7fbdde9f2423236c3acb230b0291cd65f91e15f1e85318b80ff09b150196e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_97a7fbdde9f2423236c3acb230b0291cd65f91e15f1e85318b80ff09b150196e->leave($__internal_97a7fbdde9f2423236c3acb230b0291cd65f91e15f1e85318b80ff09b150196e_prof);

        
        $__internal_1b3aef47ed213d24eac4699fc532ab3b27c6bb45d0c714ceb6cf0b199296e985->leave($__internal_1b3aef47ed213d24eac4699fc532ab3b27c6bb45d0c714ceb6cf0b199296e985_prof);

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
        return new Twig_Source("{% extends \"default/index.html.twig\" %}

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
