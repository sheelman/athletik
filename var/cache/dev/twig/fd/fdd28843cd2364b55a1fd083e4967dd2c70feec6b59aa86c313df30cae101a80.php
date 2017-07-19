<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_9a2149ac2c040d3388c79b803fca7cd9813f0477c1f0d35ecd25f1f3a45af415 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87899d73cf9b9480bb964e10f270bea8dda113d6358ba281ab6e9364bcb63492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87899d73cf9b9480bb964e10f270bea8dda113d6358ba281ab6e9364bcb63492->enter($__internal_87899d73cf9b9480bb964e10f270bea8dda113d6358ba281ab6e9364bcb63492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_bf8c8170be58c1d4d2907b3d8fa74e4227a2f8a890eaaa88ed15c1e13ef25ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8c8170be58c1d4d2907b3d8fa74e4227a2f8a890eaaa88ed15c1e13ef25ee6->enter($__internal_bf8c8170be58c1d4d2907b3d8fa74e4227a2f8a890eaaa88ed15c1e13ef25ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87899d73cf9b9480bb964e10f270bea8dda113d6358ba281ab6e9364bcb63492->leave($__internal_87899d73cf9b9480bb964e10f270bea8dda113d6358ba281ab6e9364bcb63492_prof);

        
        $__internal_bf8c8170be58c1d4d2907b3d8fa74e4227a2f8a890eaaa88ed15c1e13ef25ee6->leave($__internal_bf8c8170be58c1d4d2907b3d8fa74e4227a2f8a890eaaa88ed15c1e13ef25ee6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_68008cdc6683040d321a501a44886f81ecb5173f0a2708ab83cac9455500209b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68008cdc6683040d321a501a44886f81ecb5173f0a2708ab83cac9455500209b->enter($__internal_68008cdc6683040d321a501a44886f81ecb5173f0a2708ab83cac9455500209b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5b4c2fdb4bb45774dbd6d0af68176b4c8dd52be0a698b4ea4727ca69494049e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b4c2fdb4bb45774dbd6d0af68176b4c8dd52be0a698b4ea4727ca69494049e1->enter($__internal_5b4c2fdb4bb45774dbd6d0af68176b4c8dd52be0a698b4ea4727ca69494049e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_5b4c2fdb4bb45774dbd6d0af68176b4c8dd52be0a698b4ea4727ca69494049e1->leave($__internal_5b4c2fdb4bb45774dbd6d0af68176b4c8dd52be0a698b4ea4727ca69494049e1_prof);

        
        $__internal_68008cdc6683040d321a501a44886f81ecb5173f0a2708ab83cac9455500209b->leave($__internal_68008cdc6683040d321a501a44886f81ecb5173f0a2708ab83cac9455500209b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
