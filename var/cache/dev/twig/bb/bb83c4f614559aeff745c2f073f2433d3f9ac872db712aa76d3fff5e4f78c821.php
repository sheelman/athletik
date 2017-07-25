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
        $__internal_05659b538d9993fb743b7261e4375cbdb795c84ee91e683cf73af668dac0116f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05659b538d9993fb743b7261e4375cbdb795c84ee91e683cf73af668dac0116f->enter($__internal_05659b538d9993fb743b7261e4375cbdb795c84ee91e683cf73af668dac0116f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_18f6db10b4c6766859bd75414d24b788c65cf28c09969303fff298d87e07a364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f6db10b4c6766859bd75414d24b788c65cf28c09969303fff298d87e07a364->enter($__internal_18f6db10b4c6766859bd75414d24b788c65cf28c09969303fff298d87e07a364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05659b538d9993fb743b7261e4375cbdb795c84ee91e683cf73af668dac0116f->leave($__internal_05659b538d9993fb743b7261e4375cbdb795c84ee91e683cf73af668dac0116f_prof);

        
        $__internal_18f6db10b4c6766859bd75414d24b788c65cf28c09969303fff298d87e07a364->leave($__internal_18f6db10b4c6766859bd75414d24b788c65cf28c09969303fff298d87e07a364_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_15a75a482456776d5fd407b9eb7db0ff3083e76df4d7374a79c9de5c4ceb6098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15a75a482456776d5fd407b9eb7db0ff3083e76df4d7374a79c9de5c4ceb6098->enter($__internal_15a75a482456776d5fd407b9eb7db0ff3083e76df4d7374a79c9de5c4ceb6098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ba0f81a7700b7cf75e6bea2809c1d0dd3b3c3d93800ec66adeb0d453b25ca813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba0f81a7700b7cf75e6bea2809c1d0dd3b3c3d93800ec66adeb0d453b25ca813->enter($__internal_ba0f81a7700b7cf75e6bea2809c1d0dd3b3c3d93800ec66adeb0d453b25ca813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_ba0f81a7700b7cf75e6bea2809c1d0dd3b3c3d93800ec66adeb0d453b25ca813->leave($__internal_ba0f81a7700b7cf75e6bea2809c1d0dd3b3c3d93800ec66adeb0d453b25ca813_prof);

        
        $__internal_15a75a482456776d5fd407b9eb7db0ff3083e76df4d7374a79c9de5c4ceb6098->leave($__internal_15a75a482456776d5fd407b9eb7db0ff3083e76df4d7374a79c9de5c4ceb6098_prof);

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
