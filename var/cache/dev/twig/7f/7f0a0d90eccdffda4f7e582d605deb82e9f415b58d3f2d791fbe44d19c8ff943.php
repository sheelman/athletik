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
        $__internal_c617372ff2850b98f11886cdaee30baa88fe74c612cc94ce53c210769e4d055e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c617372ff2850b98f11886cdaee30baa88fe74c612cc94ce53c210769e4d055e->enter($__internal_c617372ff2850b98f11886cdaee30baa88fe74c612cc94ce53c210769e4d055e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_1918343e61909802c3fc6f2011a0c329307d3439362700d40a5a4fce290a1831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1918343e61909802c3fc6f2011a0c329307d3439362700d40a5a4fce290a1831->enter($__internal_1918343e61909802c3fc6f2011a0c329307d3439362700d40a5a4fce290a1831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c617372ff2850b98f11886cdaee30baa88fe74c612cc94ce53c210769e4d055e->leave($__internal_c617372ff2850b98f11886cdaee30baa88fe74c612cc94ce53c210769e4d055e_prof);

        
        $__internal_1918343e61909802c3fc6f2011a0c329307d3439362700d40a5a4fce290a1831->leave($__internal_1918343e61909802c3fc6f2011a0c329307d3439362700d40a5a4fce290a1831_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_83fcbb04607c187d2b8bc6ab32e7fad0e8f8516bbf0039b09ec6701a180a7688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83fcbb04607c187d2b8bc6ab32e7fad0e8f8516bbf0039b09ec6701a180a7688->enter($__internal_83fcbb04607c187d2b8bc6ab32e7fad0e8f8516bbf0039b09ec6701a180a7688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_241657338ba957b4b1c50c5bbd5fcce3c263ea0fd3ff17df693adb233ae5bfe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_241657338ba957b4b1c50c5bbd5fcce3c263ea0fd3ff17df693adb233ae5bfe4->enter($__internal_241657338ba957b4b1c50c5bbd5fcce3c263ea0fd3ff17df693adb233ae5bfe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_241657338ba957b4b1c50c5bbd5fcce3c263ea0fd3ff17df693adb233ae5bfe4->leave($__internal_241657338ba957b4b1c50c5bbd5fcce3c263ea0fd3ff17df693adb233ae5bfe4_prof);

        
        $__internal_83fcbb04607c187d2b8bc6ab32e7fad0e8f8516bbf0039b09ec6701a180a7688->leave($__internal_83fcbb04607c187d2b8bc6ab32e7fad0e8f8516bbf0039b09ec6701a180a7688_prof);

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
