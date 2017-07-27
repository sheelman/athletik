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
        $__internal_0196ea61b03c8a955397a73b5ed143bdb229ab3f699e23f5cd285879391baf98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0196ea61b03c8a955397a73b5ed143bdb229ab3f699e23f5cd285879391baf98->enter($__internal_0196ea61b03c8a955397a73b5ed143bdb229ab3f699e23f5cd285879391baf98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_8ab7ec88a9363de379103dff8406abef19c27cf434a5e35196effad1d8d245cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ab7ec88a9363de379103dff8406abef19c27cf434a5e35196effad1d8d245cd->enter($__internal_8ab7ec88a9363de379103dff8406abef19c27cf434a5e35196effad1d8d245cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0196ea61b03c8a955397a73b5ed143bdb229ab3f699e23f5cd285879391baf98->leave($__internal_0196ea61b03c8a955397a73b5ed143bdb229ab3f699e23f5cd285879391baf98_prof);

        
        $__internal_8ab7ec88a9363de379103dff8406abef19c27cf434a5e35196effad1d8d245cd->leave($__internal_8ab7ec88a9363de379103dff8406abef19c27cf434a5e35196effad1d8d245cd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_944707cd05b6f6e52c25779b33f85c142f404876e3159f2b4522bb80e707ce58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_944707cd05b6f6e52c25779b33f85c142f404876e3159f2b4522bb80e707ce58->enter($__internal_944707cd05b6f6e52c25779b33f85c142f404876e3159f2b4522bb80e707ce58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e5129aa23df08331dea1a467d3924078cbee917384e81fc6c562486ae5ad4190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5129aa23df08331dea1a467d3924078cbee917384e81fc6c562486ae5ad4190->enter($__internal_e5129aa23df08331dea1a467d3924078cbee917384e81fc6c562486ae5ad4190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_e5129aa23df08331dea1a467d3924078cbee917384e81fc6c562486ae5ad4190->leave($__internal_e5129aa23df08331dea1a467d3924078cbee917384e81fc6c562486ae5ad4190_prof);

        
        $__internal_944707cd05b6f6e52c25779b33f85c142f404876e3159f2b4522bb80e707ce58->leave($__internal_944707cd05b6f6e52c25779b33f85c142f404876e3159f2b4522bb80e707ce58_prof);

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
