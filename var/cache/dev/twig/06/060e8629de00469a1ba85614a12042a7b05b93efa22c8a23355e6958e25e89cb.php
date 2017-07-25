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
        $__internal_04f07c1bf87586bf35567206ef0402c0a586ad3e1b6329443676cd720c17540b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04f07c1bf87586bf35567206ef0402c0a586ad3e1b6329443676cd720c17540b->enter($__internal_04f07c1bf87586bf35567206ef0402c0a586ad3e1b6329443676cd720c17540b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_d00818e6efc41018d7939a84ca2e3b342b599fbbc3d54a22e102d76a01ef1bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00818e6efc41018d7939a84ca2e3b342b599fbbc3d54a22e102d76a01ef1bbe->enter($__internal_d00818e6efc41018d7939a84ca2e3b342b599fbbc3d54a22e102d76a01ef1bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04f07c1bf87586bf35567206ef0402c0a586ad3e1b6329443676cd720c17540b->leave($__internal_04f07c1bf87586bf35567206ef0402c0a586ad3e1b6329443676cd720c17540b_prof);

        
        $__internal_d00818e6efc41018d7939a84ca2e3b342b599fbbc3d54a22e102d76a01ef1bbe->leave($__internal_d00818e6efc41018d7939a84ca2e3b342b599fbbc3d54a22e102d76a01ef1bbe_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e5fb8f28df6c027b64caaa132bf508f23332c2e6a176ddc7daf908e1effe5df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e5fb8f28df6c027b64caaa132bf508f23332c2e6a176ddc7daf908e1effe5df->enter($__internal_8e5fb8f28df6c027b64caaa132bf508f23332c2e6a176ddc7daf908e1effe5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_823e8d62160a33e08edc20b879fc739190a3d56a9d1059f2c2738d42f984eb2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823e8d62160a33e08edc20b879fc739190a3d56a9d1059f2c2738d42f984eb2f->enter($__internal_823e8d62160a33e08edc20b879fc739190a3d56a9d1059f2c2738d42f984eb2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_823e8d62160a33e08edc20b879fc739190a3d56a9d1059f2c2738d42f984eb2f->leave($__internal_823e8d62160a33e08edc20b879fc739190a3d56a9d1059f2c2738d42f984eb2f_prof);

        
        $__internal_8e5fb8f28df6c027b64caaa132bf508f23332c2e6a176ddc7daf908e1effe5df->leave($__internal_8e5fb8f28df6c027b64caaa132bf508f23332c2e6a176ddc7daf908e1effe5df_prof);

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
