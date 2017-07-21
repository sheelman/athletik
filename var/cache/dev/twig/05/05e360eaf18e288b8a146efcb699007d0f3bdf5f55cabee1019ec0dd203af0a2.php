<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_3d054e7b118a3d0a314b64636218744c7fdf1884da993bef329689c4ec8ac8ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cced12a259723655e2a21c4d955b7fe5a7e8ec5dcfa655fc784e49ed1f688619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cced12a259723655e2a21c4d955b7fe5a7e8ec5dcfa655fc784e49ed1f688619->enter($__internal_cced12a259723655e2a21c4d955b7fe5a7e8ec5dcfa655fc784e49ed1f688619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_f0f4dc477e43d133f6b374d9cc2490bf2d9229dc7f466d77256d11e09ad0f36d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f4dc477e43d133f6b374d9cc2490bf2d9229dc7f466d77256d11e09ad0f36d->enter($__internal_f0f4dc477e43d133f6b374d9cc2490bf2d9229dc7f466d77256d11e09ad0f36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cced12a259723655e2a21c4d955b7fe5a7e8ec5dcfa655fc784e49ed1f688619->leave($__internal_cced12a259723655e2a21c4d955b7fe5a7e8ec5dcfa655fc784e49ed1f688619_prof);

        
        $__internal_f0f4dc477e43d133f6b374d9cc2490bf2d9229dc7f466d77256d11e09ad0f36d->leave($__internal_f0f4dc477e43d133f6b374d9cc2490bf2d9229dc7f466d77256d11e09ad0f36d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6948f64572402731d7b01abefb84404928b3373b9f2e9fb662b9b32a33983e57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6948f64572402731d7b01abefb84404928b3373b9f2e9fb662b9b32a33983e57->enter($__internal_6948f64572402731d7b01abefb84404928b3373b9f2e9fb662b9b32a33983e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c7e36866c1d12d2424ce38701b31258faeb9d9c4847524b42b2bed7b8380e5bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e36866c1d12d2424ce38701b31258faeb9d9c4847524b42b2bed7b8380e5bf->enter($__internal_c7e36866c1d12d2424ce38701b31258faeb9d9c4847524b42b2bed7b8380e5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_c7e36866c1d12d2424ce38701b31258faeb9d9c4847524b42b2bed7b8380e5bf->leave($__internal_c7e36866c1d12d2424ce38701b31258faeb9d9c4847524b42b2bed7b8380e5bf_prof);

        
        $__internal_6948f64572402731d7b01abefb84404928b3373b9f2e9fb662b9b32a33983e57->leave($__internal_6948f64572402731d7b01abefb84404928b3373b9f2e9fb662b9b32a33983e57_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
        return new Twig_Source("{% extends \"default/index.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
