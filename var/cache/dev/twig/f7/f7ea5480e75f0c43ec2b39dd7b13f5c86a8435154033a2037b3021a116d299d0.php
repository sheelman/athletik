<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_b97e0ee1936e42308c1b4cfc21d9ef7863adb5aa2609b6acfe380cb3592098d2 extends Twig_Template
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
        $__internal_3fdca5683f440742b0f2cd7c9ee34831f189704805c2b7d8dc29da136e11a528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fdca5683f440742b0f2cd7c9ee34831f189704805c2b7d8dc29da136e11a528->enter($__internal_3fdca5683f440742b0f2cd7c9ee34831f189704805c2b7d8dc29da136e11a528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_9f27d9623bc886982c09c2c8a7acbe572caf3469791009cbb362126380ea80b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f27d9623bc886982c09c2c8a7acbe572caf3469791009cbb362126380ea80b7->enter($__internal_9f27d9623bc886982c09c2c8a7acbe572caf3469791009cbb362126380ea80b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fdca5683f440742b0f2cd7c9ee34831f189704805c2b7d8dc29da136e11a528->leave($__internal_3fdca5683f440742b0f2cd7c9ee34831f189704805c2b7d8dc29da136e11a528_prof);

        
        $__internal_9f27d9623bc886982c09c2c8a7acbe572caf3469791009cbb362126380ea80b7->leave($__internal_9f27d9623bc886982c09c2c8a7acbe572caf3469791009cbb362126380ea80b7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_abec0021b8cabbe112be38a99070831ca0a9d6dde39317bd046250476dcdaf19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abec0021b8cabbe112be38a99070831ca0a9d6dde39317bd046250476dcdaf19->enter($__internal_abec0021b8cabbe112be38a99070831ca0a9d6dde39317bd046250476dcdaf19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_eca5588eb8880e3a54cb4fe9b287c2f8ffd6cea9481d7f188aa96fe93fba9362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca5588eb8880e3a54cb4fe9b287c2f8ffd6cea9481d7f188aa96fe93fba9362->enter($__internal_eca5588eb8880e3a54cb4fe9b287c2f8ffd6cea9481d7f188aa96fe93fba9362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_eca5588eb8880e3a54cb4fe9b287c2f8ffd6cea9481d7f188aa96fe93fba9362->leave($__internal_eca5588eb8880e3a54cb4fe9b287c2f8ffd6cea9481d7f188aa96fe93fba9362_prof);

        
        $__internal_abec0021b8cabbe112be38a99070831ca0a9d6dde39317bd046250476dcdaf19->leave($__internal_abec0021b8cabbe112be38a99070831ca0a9d6dde39317bd046250476dcdaf19_prof);

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
", "FOSUserBundle:Group:new.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
