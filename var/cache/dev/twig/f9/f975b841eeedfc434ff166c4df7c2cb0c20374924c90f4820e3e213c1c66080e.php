<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_de2859ca3238d90e83a7291214aad0e2709ea62674f0a1942384c94ff4afdd1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_31d268de25fa65c5fdd830e2274984194e7a38b61d0526fa4cfa3534c20c44de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31d268de25fa65c5fdd830e2274984194e7a38b61d0526fa4cfa3534c20c44de->enter($__internal_31d268de25fa65c5fdd830e2274984194e7a38b61d0526fa4cfa3534c20c44de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_8ea4687cf45cd157f3daee6d454aa896336ff60bdfc5797fa44d00d47b130480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea4687cf45cd157f3daee6d454aa896336ff60bdfc5797fa44d00d47b130480->enter($__internal_8ea4687cf45cd157f3daee6d454aa896336ff60bdfc5797fa44d00d47b130480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31d268de25fa65c5fdd830e2274984194e7a38b61d0526fa4cfa3534c20c44de->leave($__internal_31d268de25fa65c5fdd830e2274984194e7a38b61d0526fa4cfa3534c20c44de_prof);

        
        $__internal_8ea4687cf45cd157f3daee6d454aa896336ff60bdfc5797fa44d00d47b130480->leave($__internal_8ea4687cf45cd157f3daee6d454aa896336ff60bdfc5797fa44d00d47b130480_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_06b53e886eba07f3d0e2c7dd14c5fe3abfa5e2ae52e5465a0294b5fdcfaf9ce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06b53e886eba07f3d0e2c7dd14c5fe3abfa5e2ae52e5465a0294b5fdcfaf9ce8->enter($__internal_06b53e886eba07f3d0e2c7dd14c5fe3abfa5e2ae52e5465a0294b5fdcfaf9ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_805550ad470db461c87efc20e29a4502e0200cb47129017831a8dbf394590e03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_805550ad470db461c87efc20e29a4502e0200cb47129017831a8dbf394590e03->enter($__internal_805550ad470db461c87efc20e29a4502e0200cb47129017831a8dbf394590e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_805550ad470db461c87efc20e29a4502e0200cb47129017831a8dbf394590e03->leave($__internal_805550ad470db461c87efc20e29a4502e0200cb47129017831a8dbf394590e03_prof);

        
        $__internal_06b53e886eba07f3d0e2c7dd14c5fe3abfa5e2ae52e5465a0294b5fdcfaf9ce8->leave($__internal_06b53e886eba07f3d0e2c7dd14c5fe3abfa5e2ae52e5465a0294b5fdcfaf9ce8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
