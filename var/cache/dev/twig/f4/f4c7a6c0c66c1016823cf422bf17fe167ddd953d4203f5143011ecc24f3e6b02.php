<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_95beef668053696dc4eb9e06df3dc5e3c358e58b637154d9399b55d8d67fff66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_0dca768f486647a38af1ae69ccc67b33bcfd0184223074655ed0e122351c2db5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dca768f486647a38af1ae69ccc67b33bcfd0184223074655ed0e122351c2db5->enter($__internal_0dca768f486647a38af1ae69ccc67b33bcfd0184223074655ed0e122351c2db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_508042d640d767fa24c555bdd8080de09dd2c8109390fd40b4a055de1733b974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_508042d640d767fa24c555bdd8080de09dd2c8109390fd40b4a055de1733b974->enter($__internal_508042d640d767fa24c555bdd8080de09dd2c8109390fd40b4a055de1733b974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dca768f486647a38af1ae69ccc67b33bcfd0184223074655ed0e122351c2db5->leave($__internal_0dca768f486647a38af1ae69ccc67b33bcfd0184223074655ed0e122351c2db5_prof);

        
        $__internal_508042d640d767fa24c555bdd8080de09dd2c8109390fd40b4a055de1733b974->leave($__internal_508042d640d767fa24c555bdd8080de09dd2c8109390fd40b4a055de1733b974_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_554ab373c14395aef648b60a8719c062824cf5759be2c1aa45ef01c32c289b88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_554ab373c14395aef648b60a8719c062824cf5759be2c1aa45ef01c32c289b88->enter($__internal_554ab373c14395aef648b60a8719c062824cf5759be2c1aa45ef01c32c289b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3e4316aff92189ebac450da3e02e10705e695f85d8deb7dd8c79d1a03af6eb94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e4316aff92189ebac450da3e02e10705e695f85d8deb7dd8c79d1a03af6eb94->enter($__internal_3e4316aff92189ebac450da3e02e10705e695f85d8deb7dd8c79d1a03af6eb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_3e4316aff92189ebac450da3e02e10705e695f85d8deb7dd8c79d1a03af6eb94->leave($__internal_3e4316aff92189ebac450da3e02e10705e695f85d8deb7dd8c79d1a03af6eb94_prof);

        
        $__internal_554ab373c14395aef648b60a8719c062824cf5759be2c1aa45ef01c32c289b88->leave($__internal_554ab373c14395aef648b60a8719c062824cf5759be2c1aa45ef01c32c289b88_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
