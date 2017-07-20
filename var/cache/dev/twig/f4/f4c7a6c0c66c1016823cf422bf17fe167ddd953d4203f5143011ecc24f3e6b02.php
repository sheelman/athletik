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
        $__internal_1cd0b1c67f5b96da12ef39e067a71c80865e895693b68e21e04a300386219a7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cd0b1c67f5b96da12ef39e067a71c80865e895693b68e21e04a300386219a7d->enter($__internal_1cd0b1c67f5b96da12ef39e067a71c80865e895693b68e21e04a300386219a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_8611a278c3c08b4af986e0a317a517056ef8ee7a2aad88b30721c09f678887b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8611a278c3c08b4af986e0a317a517056ef8ee7a2aad88b30721c09f678887b3->enter($__internal_8611a278c3c08b4af986e0a317a517056ef8ee7a2aad88b30721c09f678887b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cd0b1c67f5b96da12ef39e067a71c80865e895693b68e21e04a300386219a7d->leave($__internal_1cd0b1c67f5b96da12ef39e067a71c80865e895693b68e21e04a300386219a7d_prof);

        
        $__internal_8611a278c3c08b4af986e0a317a517056ef8ee7a2aad88b30721c09f678887b3->leave($__internal_8611a278c3c08b4af986e0a317a517056ef8ee7a2aad88b30721c09f678887b3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_907d8b3df4c61665e88f8e1811115f534466f414c0c5a905a50199ac1497cab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_907d8b3df4c61665e88f8e1811115f534466f414c0c5a905a50199ac1497cab8->enter($__internal_907d8b3df4c61665e88f8e1811115f534466f414c0c5a905a50199ac1497cab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_590173f66aeac262ed4038c0d38fcbe2befcb48a6ff9ec6e7f930e44e50f1370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_590173f66aeac262ed4038c0d38fcbe2befcb48a6ff9ec6e7f930e44e50f1370->enter($__internal_590173f66aeac262ed4038c0d38fcbe2befcb48a6ff9ec6e7f930e44e50f1370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_590173f66aeac262ed4038c0d38fcbe2befcb48a6ff9ec6e7f930e44e50f1370->leave($__internal_590173f66aeac262ed4038c0d38fcbe2befcb48a6ff9ec6e7f930e44e50f1370_prof);

        
        $__internal_907d8b3df4c61665e88f8e1811115f534466f414c0c5a905a50199ac1497cab8->leave($__internal_907d8b3df4c61665e88f8e1811115f534466f414c0c5a905a50199ac1497cab8_prof);

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
