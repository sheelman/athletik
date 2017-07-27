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
        $__internal_f03ccac9ee8c38063a6ca16d1d969291e87a295c2d2cb3f85a15d2a3886b88ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f03ccac9ee8c38063a6ca16d1d969291e87a295c2d2cb3f85a15d2a3886b88ec->enter($__internal_f03ccac9ee8c38063a6ca16d1d969291e87a295c2d2cb3f85a15d2a3886b88ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_8bbb6cc21306adb2bf1d6bbf7d6b0670fa5c90e67449bf8650121631468c1890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bbb6cc21306adb2bf1d6bbf7d6b0670fa5c90e67449bf8650121631468c1890->enter($__internal_8bbb6cc21306adb2bf1d6bbf7d6b0670fa5c90e67449bf8650121631468c1890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f03ccac9ee8c38063a6ca16d1d969291e87a295c2d2cb3f85a15d2a3886b88ec->leave($__internal_f03ccac9ee8c38063a6ca16d1d969291e87a295c2d2cb3f85a15d2a3886b88ec_prof);

        
        $__internal_8bbb6cc21306adb2bf1d6bbf7d6b0670fa5c90e67449bf8650121631468c1890->leave($__internal_8bbb6cc21306adb2bf1d6bbf7d6b0670fa5c90e67449bf8650121631468c1890_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_431450e28f8202fd997a9c4b79932d00369474ed7c8696203df4a146168a692a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_431450e28f8202fd997a9c4b79932d00369474ed7c8696203df4a146168a692a->enter($__internal_431450e28f8202fd997a9c4b79932d00369474ed7c8696203df4a146168a692a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f41ebaecfb4c2efc3b206eb7bf960dca8d3dd6959487cb8bb0332e0776b59c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f41ebaecfb4c2efc3b206eb7bf960dca8d3dd6959487cb8bb0332e0776b59c68->enter($__internal_f41ebaecfb4c2efc3b206eb7bf960dca8d3dd6959487cb8bb0332e0776b59c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_f41ebaecfb4c2efc3b206eb7bf960dca8d3dd6959487cb8bb0332e0776b59c68->leave($__internal_f41ebaecfb4c2efc3b206eb7bf960dca8d3dd6959487cb8bb0332e0776b59c68_prof);

        
        $__internal_431450e28f8202fd997a9c4b79932d00369474ed7c8696203df4a146168a692a->leave($__internal_431450e28f8202fd997a9c4b79932d00369474ed7c8696203df4a146168a692a_prof);

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
