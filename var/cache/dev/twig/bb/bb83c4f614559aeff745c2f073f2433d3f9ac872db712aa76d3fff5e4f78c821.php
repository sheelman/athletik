<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_3b82c32df29cb8437f0bec2cd0de737ae8339e8af7d21a8f808365f7f195251c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_cf1a218b1997670df81099a6e23e28d54b974fd9da199f34f65ccab7855dc62d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf1a218b1997670df81099a6e23e28d54b974fd9da199f34f65ccab7855dc62d->enter($__internal_cf1a218b1997670df81099a6e23e28d54b974fd9da199f34f65ccab7855dc62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_11012bdd05954cda0b018d8446ddf4b47261b04910e7cd603452ea016138d42d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11012bdd05954cda0b018d8446ddf4b47261b04910e7cd603452ea016138d42d->enter($__internal_11012bdd05954cda0b018d8446ddf4b47261b04910e7cd603452ea016138d42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf1a218b1997670df81099a6e23e28d54b974fd9da199f34f65ccab7855dc62d->leave($__internal_cf1a218b1997670df81099a6e23e28d54b974fd9da199f34f65ccab7855dc62d_prof);

        
        $__internal_11012bdd05954cda0b018d8446ddf4b47261b04910e7cd603452ea016138d42d->leave($__internal_11012bdd05954cda0b018d8446ddf4b47261b04910e7cd603452ea016138d42d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6fb0961a0c71ab2218e8273d67759a7c9d351ba49fb170f7316c1b4bf91d1a8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fb0961a0c71ab2218e8273d67759a7c9d351ba49fb170f7316c1b4bf91d1a8c->enter($__internal_6fb0961a0c71ab2218e8273d67759a7c9d351ba49fb170f7316c1b4bf91d1a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5cb12e26e07f855eb516b4fbb32cf12b4bbd855b54791fe82a5d2fd14f4d0cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb12e26e07f855eb516b4fbb32cf12b4bbd855b54791fe82a5d2fd14f4d0cc1->enter($__internal_5cb12e26e07f855eb516b4fbb32cf12b4bbd855b54791fe82a5d2fd14f4d0cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_5cb12e26e07f855eb516b4fbb32cf12b4bbd855b54791fe82a5d2fd14f4d0cc1->leave($__internal_5cb12e26e07f855eb516b4fbb32cf12b4bbd855b54791fe82a5d2fd14f4d0cc1_prof);

        
        $__internal_6fb0961a0c71ab2218e8273d67759a7c9d351ba49fb170f7316c1b4bf91d1a8c->leave($__internal_6fb0961a0c71ab2218e8273d67759a7c9d351ba49fb170f7316c1b4bf91d1a8c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
