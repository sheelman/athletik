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
        $__internal_910213590d546a2b3d25b9add15639aa6d3a84ef382901bfd6961483affff05e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_910213590d546a2b3d25b9add15639aa6d3a84ef382901bfd6961483affff05e->enter($__internal_910213590d546a2b3d25b9add15639aa6d3a84ef382901bfd6961483affff05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_27cb51c437a1f80584cef3f173a149a9f0d13498292c315a7cd9e249e39b0239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27cb51c437a1f80584cef3f173a149a9f0d13498292c315a7cd9e249e39b0239->enter($__internal_27cb51c437a1f80584cef3f173a149a9f0d13498292c315a7cd9e249e39b0239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_910213590d546a2b3d25b9add15639aa6d3a84ef382901bfd6961483affff05e->leave($__internal_910213590d546a2b3d25b9add15639aa6d3a84ef382901bfd6961483affff05e_prof);

        
        $__internal_27cb51c437a1f80584cef3f173a149a9f0d13498292c315a7cd9e249e39b0239->leave($__internal_27cb51c437a1f80584cef3f173a149a9f0d13498292c315a7cd9e249e39b0239_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b45b2c898210379f28627b2d25707093fec0085bfdcef7d143db62c0da8c9ac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b45b2c898210379f28627b2d25707093fec0085bfdcef7d143db62c0da8c9ac8->enter($__internal_b45b2c898210379f28627b2d25707093fec0085bfdcef7d143db62c0da8c9ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d9b9d8f5488f6f84b3d794235c780436cc1fd308a0b6c1e2a1a3a7e5f310099c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b9d8f5488f6f84b3d794235c780436cc1fd308a0b6c1e2a1a3a7e5f310099c->enter($__internal_d9b9d8f5488f6f84b3d794235c780436cc1fd308a0b6c1e2a1a3a7e5f310099c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_d9b9d8f5488f6f84b3d794235c780436cc1fd308a0b6c1e2a1a3a7e5f310099c->leave($__internal_d9b9d8f5488f6f84b3d794235c780436cc1fd308a0b6c1e2a1a3a7e5f310099c_prof);

        
        $__internal_b45b2c898210379f28627b2d25707093fec0085bfdcef7d143db62c0da8c9ac8->leave($__internal_b45b2c898210379f28627b2d25707093fec0085bfdcef7d143db62c0da8c9ac8_prof);

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
