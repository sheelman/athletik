<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_3b82c32df29cb8437f0bec2cd0de737ae8339e8af7d21a8f808365f7f195251c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_50c2edae47b7da7f138e14fcb5abcbe5b640809cb7e965440eefb81ed7c3b682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50c2edae47b7da7f138e14fcb5abcbe5b640809cb7e965440eefb81ed7c3b682->enter($__internal_50c2edae47b7da7f138e14fcb5abcbe5b640809cb7e965440eefb81ed7c3b682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_d4237ab7f09fd92e36125d0d78eeba037f4e9d0efd139b856e98a8d7a4361eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4237ab7f09fd92e36125d0d78eeba037f4e9d0efd139b856e98a8d7a4361eae->enter($__internal_d4237ab7f09fd92e36125d0d78eeba037f4e9d0efd139b856e98a8d7a4361eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50c2edae47b7da7f138e14fcb5abcbe5b640809cb7e965440eefb81ed7c3b682->leave($__internal_50c2edae47b7da7f138e14fcb5abcbe5b640809cb7e965440eefb81ed7c3b682_prof);

        
        $__internal_d4237ab7f09fd92e36125d0d78eeba037f4e9d0efd139b856e98a8d7a4361eae->leave($__internal_d4237ab7f09fd92e36125d0d78eeba037f4e9d0efd139b856e98a8d7a4361eae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c469029e9ea877de7c338579a10053b792700d1b1f95fb529c0d48bcd43e4ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c469029e9ea877de7c338579a10053b792700d1b1f95fb529c0d48bcd43e4ab->enter($__internal_6c469029e9ea877de7c338579a10053b792700d1b1f95fb529c0d48bcd43e4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_de8b20da660669f6e3b859898b514fd2161ce63637d0abf3453dcd9cab6ebd8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de8b20da660669f6e3b859898b514fd2161ce63637d0abf3453dcd9cab6ebd8b->enter($__internal_de8b20da660669f6e3b859898b514fd2161ce63637d0abf3453dcd9cab6ebd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_de8b20da660669f6e3b859898b514fd2161ce63637d0abf3453dcd9cab6ebd8b->leave($__internal_de8b20da660669f6e3b859898b514fd2161ce63637d0abf3453dcd9cab6ebd8b_prof);

        
        $__internal_6c469029e9ea877de7c338579a10053b792700d1b1f95fb529c0d48bcd43e4ab->leave($__internal_6c469029e9ea877de7c338579a10053b792700d1b1f95fb529c0d48bcd43e4ab_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
