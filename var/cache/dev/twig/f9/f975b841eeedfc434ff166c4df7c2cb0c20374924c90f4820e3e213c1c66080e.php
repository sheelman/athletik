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
        $__internal_06336d1c3a3becba1e3ebfac63e8d80c7f0fe01b0da130256383d045c245f399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06336d1c3a3becba1e3ebfac63e8d80c7f0fe01b0da130256383d045c245f399->enter($__internal_06336d1c3a3becba1e3ebfac63e8d80c7f0fe01b0da130256383d045c245f399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_8f6884d7e95b9315cbe17f9d28c10d0b6083f356d52bf8cab6ea1bf4759149b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f6884d7e95b9315cbe17f9d28c10d0b6083f356d52bf8cab6ea1bf4759149b3->enter($__internal_8f6884d7e95b9315cbe17f9d28c10d0b6083f356d52bf8cab6ea1bf4759149b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06336d1c3a3becba1e3ebfac63e8d80c7f0fe01b0da130256383d045c245f399->leave($__internal_06336d1c3a3becba1e3ebfac63e8d80c7f0fe01b0da130256383d045c245f399_prof);

        
        $__internal_8f6884d7e95b9315cbe17f9d28c10d0b6083f356d52bf8cab6ea1bf4759149b3->leave($__internal_8f6884d7e95b9315cbe17f9d28c10d0b6083f356d52bf8cab6ea1bf4759149b3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4e2b80dce90080c139926092e90b3382d4bbf0da0fa2a8e03f953b0aa2ced1f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e2b80dce90080c139926092e90b3382d4bbf0da0fa2a8e03f953b0aa2ced1f6->enter($__internal_4e2b80dce90080c139926092e90b3382d4bbf0da0fa2a8e03f953b0aa2ced1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_017bbe7259dccb16070476466f7370e603f3c3a0faae246d6f4e7d658351fb7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_017bbe7259dccb16070476466f7370e603f3c3a0faae246d6f4e7d658351fb7f->enter($__internal_017bbe7259dccb16070476466f7370e603f3c3a0faae246d6f4e7d658351fb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_017bbe7259dccb16070476466f7370e603f3c3a0faae246d6f4e7d658351fb7f->leave($__internal_017bbe7259dccb16070476466f7370e603f3c3a0faae246d6f4e7d658351fb7f_prof);

        
        $__internal_4e2b80dce90080c139926092e90b3382d4bbf0da0fa2a8e03f953b0aa2ced1f6->leave($__internal_4e2b80dce90080c139926092e90b3382d4bbf0da0fa2a8e03f953b0aa2ced1f6_prof);

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
