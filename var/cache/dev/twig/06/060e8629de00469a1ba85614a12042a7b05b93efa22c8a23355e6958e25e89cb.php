<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_614c1e1b88ad81b345c13f857551ab4266d5bd0fabf982ce0daf35c5406d3055 extends Twig_Template
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
        $__internal_3a079efd7c20bf262585ed6a98c35dca19abde069f8ce9e9d1d434fc34eaf02e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a079efd7c20bf262585ed6a98c35dca19abde069f8ce9e9d1d434fc34eaf02e->enter($__internal_3a079efd7c20bf262585ed6a98c35dca19abde069f8ce9e9d1d434fc34eaf02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_57f018e7c504a3d669f8f6c977e4f45acd59f55ebfb1f366acc2b3ff2604a0de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f018e7c504a3d669f8f6c977e4f45acd59f55ebfb1f366acc2b3ff2604a0de->enter($__internal_57f018e7c504a3d669f8f6c977e4f45acd59f55ebfb1f366acc2b3ff2604a0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a079efd7c20bf262585ed6a98c35dca19abde069f8ce9e9d1d434fc34eaf02e->leave($__internal_3a079efd7c20bf262585ed6a98c35dca19abde069f8ce9e9d1d434fc34eaf02e_prof);

        
        $__internal_57f018e7c504a3d669f8f6c977e4f45acd59f55ebfb1f366acc2b3ff2604a0de->leave($__internal_57f018e7c504a3d669f8f6c977e4f45acd59f55ebfb1f366acc2b3ff2604a0de_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e9ddcf078be36af5113fe1157dbd6b0a07ee1aabe17933edb532ee7e36ef5f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e9ddcf078be36af5113fe1157dbd6b0a07ee1aabe17933edb532ee7e36ef5f3->enter($__internal_1e9ddcf078be36af5113fe1157dbd6b0a07ee1aabe17933edb532ee7e36ef5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0a95e93a4fbd38a05710947227c322e17d6e9095a0e0fb294b903fdd9b2fa142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a95e93a4fbd38a05710947227c322e17d6e9095a0e0fb294b903fdd9b2fa142->enter($__internal_0a95e93a4fbd38a05710947227c322e17d6e9095a0e0fb294b903fdd9b2fa142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_0a95e93a4fbd38a05710947227c322e17d6e9095a0e0fb294b903fdd9b2fa142->leave($__internal_0a95e93a4fbd38a05710947227c322e17d6e9095a0e0fb294b903fdd9b2fa142_prof);

        
        $__internal_1e9ddcf078be36af5113fe1157dbd6b0a07ee1aabe17933edb532ee7e36ef5f3->leave($__internal_1e9ddcf078be36af5113fe1157dbd6b0a07ee1aabe17933edb532ee7e36ef5f3_prof);

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
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
