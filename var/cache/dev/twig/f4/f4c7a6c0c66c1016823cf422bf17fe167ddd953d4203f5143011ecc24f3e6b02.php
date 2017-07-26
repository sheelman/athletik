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
        $__internal_81098a38e68b0914cae909c260fc9b3e29d707d1c340530ff8163430aebc7b8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81098a38e68b0914cae909c260fc9b3e29d707d1c340530ff8163430aebc7b8e->enter($__internal_81098a38e68b0914cae909c260fc9b3e29d707d1c340530ff8163430aebc7b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_421824f30861205b2080f38eb9bfe27b2573109963d13db74892bcc05cbc3ed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_421824f30861205b2080f38eb9bfe27b2573109963d13db74892bcc05cbc3ed4->enter($__internal_421824f30861205b2080f38eb9bfe27b2573109963d13db74892bcc05cbc3ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81098a38e68b0914cae909c260fc9b3e29d707d1c340530ff8163430aebc7b8e->leave($__internal_81098a38e68b0914cae909c260fc9b3e29d707d1c340530ff8163430aebc7b8e_prof);

        
        $__internal_421824f30861205b2080f38eb9bfe27b2573109963d13db74892bcc05cbc3ed4->leave($__internal_421824f30861205b2080f38eb9bfe27b2573109963d13db74892bcc05cbc3ed4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_190e30d98969483823961a2b6128057a27eb118674fe51e49f649c4d4aa859dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_190e30d98969483823961a2b6128057a27eb118674fe51e49f649c4d4aa859dc->enter($__internal_190e30d98969483823961a2b6128057a27eb118674fe51e49f649c4d4aa859dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7184af696f0d0c76fe1e7c2fa94f9fc26d3db561671e971e62f44cd9384980ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7184af696f0d0c76fe1e7c2fa94f9fc26d3db561671e971e62f44cd9384980ad->enter($__internal_7184af696f0d0c76fe1e7c2fa94f9fc26d3db561671e971e62f44cd9384980ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_7184af696f0d0c76fe1e7c2fa94f9fc26d3db561671e971e62f44cd9384980ad->leave($__internal_7184af696f0d0c76fe1e7c2fa94f9fc26d3db561671e971e62f44cd9384980ad_prof);

        
        $__internal_190e30d98969483823961a2b6128057a27eb118674fe51e49f649c4d4aa859dc->leave($__internal_190e30d98969483823961a2b6128057a27eb118674fe51e49f649c4d4aa859dc_prof);

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
