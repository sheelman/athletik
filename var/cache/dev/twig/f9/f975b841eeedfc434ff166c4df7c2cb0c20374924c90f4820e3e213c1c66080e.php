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
        $__internal_4bf0bcca823f14465b5bc7e98860c3bbf73da92b1d79992e0c37e8ef70d6ae1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bf0bcca823f14465b5bc7e98860c3bbf73da92b1d79992e0c37e8ef70d6ae1d->enter($__internal_4bf0bcca823f14465b5bc7e98860c3bbf73da92b1d79992e0c37e8ef70d6ae1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_3cbe8b5b48af738fe06c975c340b0b85cb88a8617ce68c9f23fd2453e59a062e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cbe8b5b48af738fe06c975c340b0b85cb88a8617ce68c9f23fd2453e59a062e->enter($__internal_3cbe8b5b48af738fe06c975c340b0b85cb88a8617ce68c9f23fd2453e59a062e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bf0bcca823f14465b5bc7e98860c3bbf73da92b1d79992e0c37e8ef70d6ae1d->leave($__internal_4bf0bcca823f14465b5bc7e98860c3bbf73da92b1d79992e0c37e8ef70d6ae1d_prof);

        
        $__internal_3cbe8b5b48af738fe06c975c340b0b85cb88a8617ce68c9f23fd2453e59a062e->leave($__internal_3cbe8b5b48af738fe06c975c340b0b85cb88a8617ce68c9f23fd2453e59a062e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_87e2a4e395f273c95f35f889f89e71f8ab28c78683f87e39955063c55d35ae98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87e2a4e395f273c95f35f889f89e71f8ab28c78683f87e39955063c55d35ae98->enter($__internal_87e2a4e395f273c95f35f889f89e71f8ab28c78683f87e39955063c55d35ae98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7415ddf05622e3f55ab8e557d8e2ce76c38643f4845c1def422d6b49f505f032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7415ddf05622e3f55ab8e557d8e2ce76c38643f4845c1def422d6b49f505f032->enter($__internal_7415ddf05622e3f55ab8e557d8e2ce76c38643f4845c1def422d6b49f505f032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_7415ddf05622e3f55ab8e557d8e2ce76c38643f4845c1def422d6b49f505f032->leave($__internal_7415ddf05622e3f55ab8e557d8e2ce76c38643f4845c1def422d6b49f505f032_prof);

        
        $__internal_87e2a4e395f273c95f35f889f89e71f8ab28c78683f87e39955063c55d35ae98->leave($__internal_87e2a4e395f273c95f35f889f89e71f8ab28c78683f87e39955063c55d35ae98_prof);

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
