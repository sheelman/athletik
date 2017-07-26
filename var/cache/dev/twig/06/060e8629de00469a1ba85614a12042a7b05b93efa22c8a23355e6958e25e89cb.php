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
        $__internal_abca1720bfa2219e235574af060d479655f8c412e455c88a4fe56acdeae1427e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abca1720bfa2219e235574af060d479655f8c412e455c88a4fe56acdeae1427e->enter($__internal_abca1720bfa2219e235574af060d479655f8c412e455c88a4fe56acdeae1427e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_d9d39bf02b734092b081934876e04d10cd1dc7fa5e6eb81e5ba056e9a1d85536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d39bf02b734092b081934876e04d10cd1dc7fa5e6eb81e5ba056e9a1d85536->enter($__internal_d9d39bf02b734092b081934876e04d10cd1dc7fa5e6eb81e5ba056e9a1d85536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abca1720bfa2219e235574af060d479655f8c412e455c88a4fe56acdeae1427e->leave($__internal_abca1720bfa2219e235574af060d479655f8c412e455c88a4fe56acdeae1427e_prof);

        
        $__internal_d9d39bf02b734092b081934876e04d10cd1dc7fa5e6eb81e5ba056e9a1d85536->leave($__internal_d9d39bf02b734092b081934876e04d10cd1dc7fa5e6eb81e5ba056e9a1d85536_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d13be956757f78c259a06e95c285f27437a7af06544b703fa7d05b46bd045721 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d13be956757f78c259a06e95c285f27437a7af06544b703fa7d05b46bd045721->enter($__internal_d13be956757f78c259a06e95c285f27437a7af06544b703fa7d05b46bd045721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7839ae46d04377ce2faf560e89be76bdca22e02ae57c380520a8ef5cfcb663b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7839ae46d04377ce2faf560e89be76bdca22e02ae57c380520a8ef5cfcb663b4->enter($__internal_7839ae46d04377ce2faf560e89be76bdca22e02ae57c380520a8ef5cfcb663b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_7839ae46d04377ce2faf560e89be76bdca22e02ae57c380520a8ef5cfcb663b4->leave($__internal_7839ae46d04377ce2faf560e89be76bdca22e02ae57c380520a8ef5cfcb663b4_prof);

        
        $__internal_d13be956757f78c259a06e95c285f27437a7af06544b703fa7d05b46bd045721->leave($__internal_d13be956757f78c259a06e95c285f27437a7af06544b703fa7d05b46bd045721_prof);

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
