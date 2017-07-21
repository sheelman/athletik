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
        $__internal_f23854576b8c6ff1c3f7b8ba1657462efd8e1190cfd166e8d8f927caa6a788ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f23854576b8c6ff1c3f7b8ba1657462efd8e1190cfd166e8d8f927caa6a788ea->enter($__internal_f23854576b8c6ff1c3f7b8ba1657462efd8e1190cfd166e8d8f927caa6a788ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_5dc3cc3e05323a63cf331e7f36c16f0b687b77883ead14d6b8fdc6c8b8083d76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dc3cc3e05323a63cf331e7f36c16f0b687b77883ead14d6b8fdc6c8b8083d76->enter($__internal_5dc3cc3e05323a63cf331e7f36c16f0b687b77883ead14d6b8fdc6c8b8083d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f23854576b8c6ff1c3f7b8ba1657462efd8e1190cfd166e8d8f927caa6a788ea->leave($__internal_f23854576b8c6ff1c3f7b8ba1657462efd8e1190cfd166e8d8f927caa6a788ea_prof);

        
        $__internal_5dc3cc3e05323a63cf331e7f36c16f0b687b77883ead14d6b8fdc6c8b8083d76->leave($__internal_5dc3cc3e05323a63cf331e7f36c16f0b687b77883ead14d6b8fdc6c8b8083d76_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b33f90352774783296a2fedbaaa178dccc6255dd822a8f8289d1e3686575f931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b33f90352774783296a2fedbaaa178dccc6255dd822a8f8289d1e3686575f931->enter($__internal_b33f90352774783296a2fedbaaa178dccc6255dd822a8f8289d1e3686575f931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bf7832c77185d715e2e33c2f6d47b1900587014fdd07c103f2f3b376dbd91e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf7832c77185d715e2e33c2f6d47b1900587014fdd07c103f2f3b376dbd91e5b->enter($__internal_bf7832c77185d715e2e33c2f6d47b1900587014fdd07c103f2f3b376dbd91e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_bf7832c77185d715e2e33c2f6d47b1900587014fdd07c103f2f3b376dbd91e5b->leave($__internal_bf7832c77185d715e2e33c2f6d47b1900587014fdd07c103f2f3b376dbd91e5b_prof);

        
        $__internal_b33f90352774783296a2fedbaaa178dccc6255dd822a8f8289d1e3686575f931->leave($__internal_b33f90352774783296a2fedbaaa178dccc6255dd822a8f8289d1e3686575f931_prof);

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
