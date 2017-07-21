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
        $__internal_a8edcb2fcab11db46bc04a9e0de65939524b2b356c173e14802db47cddfbba2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8edcb2fcab11db46bc04a9e0de65939524b2b356c173e14802db47cddfbba2f->enter($__internal_a8edcb2fcab11db46bc04a9e0de65939524b2b356c173e14802db47cddfbba2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_a30c84058655f2d20a17302a5d0f9ee4a25ce9b8973363f73a2fa29393c92b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a30c84058655f2d20a17302a5d0f9ee4a25ce9b8973363f73a2fa29393c92b5f->enter($__internal_a30c84058655f2d20a17302a5d0f9ee4a25ce9b8973363f73a2fa29393c92b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8edcb2fcab11db46bc04a9e0de65939524b2b356c173e14802db47cddfbba2f->leave($__internal_a8edcb2fcab11db46bc04a9e0de65939524b2b356c173e14802db47cddfbba2f_prof);

        
        $__internal_a30c84058655f2d20a17302a5d0f9ee4a25ce9b8973363f73a2fa29393c92b5f->leave($__internal_a30c84058655f2d20a17302a5d0f9ee4a25ce9b8973363f73a2fa29393c92b5f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_218e62a267cc4a1e6ad7b0dd75507734dedbbb2bd6b1763ceaab4f118384dc6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_218e62a267cc4a1e6ad7b0dd75507734dedbbb2bd6b1763ceaab4f118384dc6b->enter($__internal_218e62a267cc4a1e6ad7b0dd75507734dedbbb2bd6b1763ceaab4f118384dc6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a4c5569bf581a10e71e1144f180599a30f669a5e1222a476193a993a7a99ddf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4c5569bf581a10e71e1144f180599a30f669a5e1222a476193a993a7a99ddf6->enter($__internal_a4c5569bf581a10e71e1144f180599a30f669a5e1222a476193a993a7a99ddf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_a4c5569bf581a10e71e1144f180599a30f669a5e1222a476193a993a7a99ddf6->leave($__internal_a4c5569bf581a10e71e1144f180599a30f669a5e1222a476193a993a7a99ddf6_prof);

        
        $__internal_218e62a267cc4a1e6ad7b0dd75507734dedbbb2bd6b1763ceaab4f118384dc6b->leave($__internal_218e62a267cc4a1e6ad7b0dd75507734dedbbb2bd6b1763ceaab4f118384dc6b_prof);

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
