<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3279dbcdca5c0aeeab86c3495066d40ec56322e772c432abca5b353e54e515c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_cf90e8c1dbf4775689dbc0244d0b1ac581f59f01d87ae98a0ef8df7acbcd5e13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf90e8c1dbf4775689dbc0244d0b1ac581f59f01d87ae98a0ef8df7acbcd5e13->enter($__internal_cf90e8c1dbf4775689dbc0244d0b1ac581f59f01d87ae98a0ef8df7acbcd5e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_5628d75de1113110370b3b366f31b0135ad03dc2d7f62fc57dc7bf2ebf2b98be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5628d75de1113110370b3b366f31b0135ad03dc2d7f62fc57dc7bf2ebf2b98be->enter($__internal_5628d75de1113110370b3b366f31b0135ad03dc2d7f62fc57dc7bf2ebf2b98be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf90e8c1dbf4775689dbc0244d0b1ac581f59f01d87ae98a0ef8df7acbcd5e13->leave($__internal_cf90e8c1dbf4775689dbc0244d0b1ac581f59f01d87ae98a0ef8df7acbcd5e13_prof);

        
        $__internal_5628d75de1113110370b3b366f31b0135ad03dc2d7f62fc57dc7bf2ebf2b98be->leave($__internal_5628d75de1113110370b3b366f31b0135ad03dc2d7f62fc57dc7bf2ebf2b98be_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0da678bbe98d4011184730ff4a3da2a1af9c1bf2fd8b816644920227a2978100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0da678bbe98d4011184730ff4a3da2a1af9c1bf2fd8b816644920227a2978100->enter($__internal_0da678bbe98d4011184730ff4a3da2a1af9c1bf2fd8b816644920227a2978100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d3868f7e07cd675fc6ffb0e4d87b28ed975a527368fb29dffa57b43a85ba19dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3868f7e07cd675fc6ffb0e4d87b28ed975a527368fb29dffa57b43a85ba19dc->enter($__internal_d3868f7e07cd675fc6ffb0e4d87b28ed975a527368fb29dffa57b43a85ba19dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_d3868f7e07cd675fc6ffb0e4d87b28ed975a527368fb29dffa57b43a85ba19dc->leave($__internal_d3868f7e07cd675fc6ffb0e4d87b28ed975a527368fb29dffa57b43a85ba19dc_prof);

        
        $__internal_0da678bbe98d4011184730ff4a3da2a1af9c1bf2fd8b816644920227a2978100->leave($__internal_0da678bbe98d4011184730ff4a3da2a1af9c1bf2fd8b816644920227a2978100_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
