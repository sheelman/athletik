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
        $__internal_3d19d19875f943f03b8962b32f6b9615ce47409b589e96106731d2bc083a0c42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d19d19875f943f03b8962b32f6b9615ce47409b589e96106731d2bc083a0c42->enter($__internal_3d19d19875f943f03b8962b32f6b9615ce47409b589e96106731d2bc083a0c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_2ec77b80b629f771a2e1410bb6cdea2b2798c63bca8be9c1e721f06c3964323a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ec77b80b629f771a2e1410bb6cdea2b2798c63bca8be9c1e721f06c3964323a->enter($__internal_2ec77b80b629f771a2e1410bb6cdea2b2798c63bca8be9c1e721f06c3964323a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d19d19875f943f03b8962b32f6b9615ce47409b589e96106731d2bc083a0c42->leave($__internal_3d19d19875f943f03b8962b32f6b9615ce47409b589e96106731d2bc083a0c42_prof);

        
        $__internal_2ec77b80b629f771a2e1410bb6cdea2b2798c63bca8be9c1e721f06c3964323a->leave($__internal_2ec77b80b629f771a2e1410bb6cdea2b2798c63bca8be9c1e721f06c3964323a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53474e1b4e7a1d8b8a2b8f35bf6ffecedcd978c2d8acb2b9b3ea3d2445b38107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53474e1b4e7a1d8b8a2b8f35bf6ffecedcd978c2d8acb2b9b3ea3d2445b38107->enter($__internal_53474e1b4e7a1d8b8a2b8f35bf6ffecedcd978c2d8acb2b9b3ea3d2445b38107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9c0c0255c5ef99ea86de9f19c1393db4b431a6044e855579dd276053b1eee15c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c0c0255c5ef99ea86de9f19c1393db4b431a6044e855579dd276053b1eee15c->enter($__internal_9c0c0255c5ef99ea86de9f19c1393db4b431a6044e855579dd276053b1eee15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_9c0c0255c5ef99ea86de9f19c1393db4b431a6044e855579dd276053b1eee15c->leave($__internal_9c0c0255c5ef99ea86de9f19c1393db4b431a6044e855579dd276053b1eee15c_prof);

        
        $__internal_53474e1b4e7a1d8b8a2b8f35bf6ffecedcd978c2d8acb2b9b3ea3d2445b38107->leave($__internal_53474e1b4e7a1d8b8a2b8f35bf6ffecedcd978c2d8acb2b9b3ea3d2445b38107_prof);

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
