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
        $__internal_3e51f5c6741fc7e64431a1fb02472c4edc71ceda7315ac3f66a09e786081a881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e51f5c6741fc7e64431a1fb02472c4edc71ceda7315ac3f66a09e786081a881->enter($__internal_3e51f5c6741fc7e64431a1fb02472c4edc71ceda7315ac3f66a09e786081a881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_a670ce4f3fe7cb74ba6428899334b44d7c90f709d7b99e7564dbcf8ddb9c4f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a670ce4f3fe7cb74ba6428899334b44d7c90f709d7b99e7564dbcf8ddb9c4f87->enter($__internal_a670ce4f3fe7cb74ba6428899334b44d7c90f709d7b99e7564dbcf8ddb9c4f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e51f5c6741fc7e64431a1fb02472c4edc71ceda7315ac3f66a09e786081a881->leave($__internal_3e51f5c6741fc7e64431a1fb02472c4edc71ceda7315ac3f66a09e786081a881_prof);

        
        $__internal_a670ce4f3fe7cb74ba6428899334b44d7c90f709d7b99e7564dbcf8ddb9c4f87->leave($__internal_a670ce4f3fe7cb74ba6428899334b44d7c90f709d7b99e7564dbcf8ddb9c4f87_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cf3ffc1d0090a26689d0ce30d9f17ddabf2096632827d35028cda905bb39a4b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf3ffc1d0090a26689d0ce30d9f17ddabf2096632827d35028cda905bb39a4b9->enter($__internal_cf3ffc1d0090a26689d0ce30d9f17ddabf2096632827d35028cda905bb39a4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_78f5a1122ae0afaf78bf595074764d16ec567750cae2fa3b8e6e646da8193054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78f5a1122ae0afaf78bf595074764d16ec567750cae2fa3b8e6e646da8193054->enter($__internal_78f5a1122ae0afaf78bf595074764d16ec567750cae2fa3b8e6e646da8193054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_78f5a1122ae0afaf78bf595074764d16ec567750cae2fa3b8e6e646da8193054->leave($__internal_78f5a1122ae0afaf78bf595074764d16ec567750cae2fa3b8e6e646da8193054_prof);

        
        $__internal_cf3ffc1d0090a26689d0ce30d9f17ddabf2096632827d35028cda905bb39a4b9->leave($__internal_cf3ffc1d0090a26689d0ce30d9f17ddabf2096632827d35028cda905bb39a4b9_prof);

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
