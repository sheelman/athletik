<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_93118fb6bc1274613201be4cdc7253afc21076f73a2c45def85101ac51dfe1bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_78c2adb5c465d3d81dd84331a0893892e66fc21172cb5e71b1cf68bca6be11c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c2adb5c465d3d81dd84331a0893892e66fc21172cb5e71b1cf68bca6be11c5->enter($__internal_78c2adb5c465d3d81dd84331a0893892e66fc21172cb5e71b1cf68bca6be11c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_15c281b99e94335e11035c5f6747716bf2f7112bda0a377c80932f00b8322db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c281b99e94335e11035c5f6747716bf2f7112bda0a377c80932f00b8322db8->enter($__internal_15c281b99e94335e11035c5f6747716bf2f7112bda0a377c80932f00b8322db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78c2adb5c465d3d81dd84331a0893892e66fc21172cb5e71b1cf68bca6be11c5->leave($__internal_78c2adb5c465d3d81dd84331a0893892e66fc21172cb5e71b1cf68bca6be11c5_prof);

        
        $__internal_15c281b99e94335e11035c5f6747716bf2f7112bda0a377c80932f00b8322db8->leave($__internal_15c281b99e94335e11035c5f6747716bf2f7112bda0a377c80932f00b8322db8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72d9211dafcdc4bf9a12579fbd1f8b2642fcb2c3c363567233458e3c387ec09e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72d9211dafcdc4bf9a12579fbd1f8b2642fcb2c3c363567233458e3c387ec09e->enter($__internal_72d9211dafcdc4bf9a12579fbd1f8b2642fcb2c3c363567233458e3c387ec09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e8ccd74f6802b9515bb7487b391f6449089076108634b32eebff9f221c3ff0d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ccd74f6802b9515bb7487b391f6449089076108634b32eebff9f221c3ff0d8->enter($__internal_e8ccd74f6802b9515bb7487b391f6449089076108634b32eebff9f221c3ff0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_e8ccd74f6802b9515bb7487b391f6449089076108634b32eebff9f221c3ff0d8->leave($__internal_e8ccd74f6802b9515bb7487b391f6449089076108634b32eebff9f221c3ff0d8_prof);

        
        $__internal_72d9211dafcdc4bf9a12579fbd1f8b2642fcb2c3c363567233458e3c387ec09e->leave($__internal_72d9211dafcdc4bf9a12579fbd1f8b2642fcb2c3c363567233458e3c387ec09e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
