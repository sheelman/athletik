<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_8cf4ee99b467970b4e888fd93f7769d1f846b4d6133688821280d0a0701d7f20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_145742ed92796b2dad21dde4d134a9c8895efd94f35d5f60000335b8a14be508 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_145742ed92796b2dad21dde4d134a9c8895efd94f35d5f60000335b8a14be508->enter($__internal_145742ed92796b2dad21dde4d134a9c8895efd94f35d5f60000335b8a14be508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_dadd1fe644732798cffb9e96e424c5f974e480cb69a01516bb20f69525b7d085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dadd1fe644732798cffb9e96e424c5f974e480cb69a01516bb20f69525b7d085->enter($__internal_dadd1fe644732798cffb9e96e424c5f974e480cb69a01516bb20f69525b7d085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_145742ed92796b2dad21dde4d134a9c8895efd94f35d5f60000335b8a14be508->leave($__internal_145742ed92796b2dad21dde4d134a9c8895efd94f35d5f60000335b8a14be508_prof);

        
        $__internal_dadd1fe644732798cffb9e96e424c5f974e480cb69a01516bb20f69525b7d085->leave($__internal_dadd1fe644732798cffb9e96e424c5f974e480cb69a01516bb20f69525b7d085_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7940ab8c82ccbe13456dcb8f94f975f8a29fbf3cf1e4255e1657d1c4da3a91f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7940ab8c82ccbe13456dcb8f94f975f8a29fbf3cf1e4255e1657d1c4da3a91f8->enter($__internal_7940ab8c82ccbe13456dcb8f94f975f8a29fbf3cf1e4255e1657d1c4da3a91f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5125e5a46a3cebf1f5122ed9f907985aa37e677cea729d79c8730b363c010cf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5125e5a46a3cebf1f5122ed9f907985aa37e677cea729d79c8730b363c010cf2->enter($__internal_5125e5a46a3cebf1f5122ed9f907985aa37e677cea729d79c8730b363c010cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_5125e5a46a3cebf1f5122ed9f907985aa37e677cea729d79c8730b363c010cf2->leave($__internal_5125e5a46a3cebf1f5122ed9f907985aa37e677cea729d79c8730b363c010cf2_prof);

        
        $__internal_7940ab8c82ccbe13456dcb8f94f975f8a29fbf3cf1e4255e1657d1c4da3a91f8->leave($__internal_7940ab8c82ccbe13456dcb8f94f975f8a29fbf3cf1e4255e1657d1c4da3a91f8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
