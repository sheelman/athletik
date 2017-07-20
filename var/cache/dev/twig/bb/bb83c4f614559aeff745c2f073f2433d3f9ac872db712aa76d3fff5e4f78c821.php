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
        $__internal_af68593487c995f67a3087aadbfa6188ca5086f3457e9dcdb305f968df24ca32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af68593487c995f67a3087aadbfa6188ca5086f3457e9dcdb305f968df24ca32->enter($__internal_af68593487c995f67a3087aadbfa6188ca5086f3457e9dcdb305f968df24ca32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_1ec762b464d76e69515d52ba06e7a69c0b4e8a5c04705e764706bad12ba8e01c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec762b464d76e69515d52ba06e7a69c0b4e8a5c04705e764706bad12ba8e01c->enter($__internal_1ec762b464d76e69515d52ba06e7a69c0b4e8a5c04705e764706bad12ba8e01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af68593487c995f67a3087aadbfa6188ca5086f3457e9dcdb305f968df24ca32->leave($__internal_af68593487c995f67a3087aadbfa6188ca5086f3457e9dcdb305f968df24ca32_prof);

        
        $__internal_1ec762b464d76e69515d52ba06e7a69c0b4e8a5c04705e764706bad12ba8e01c->leave($__internal_1ec762b464d76e69515d52ba06e7a69c0b4e8a5c04705e764706bad12ba8e01c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3257da63974eeae5509aedc7c02686942ab86f1476334d7d12acd5d186eed014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3257da63974eeae5509aedc7c02686942ab86f1476334d7d12acd5d186eed014->enter($__internal_3257da63974eeae5509aedc7c02686942ab86f1476334d7d12acd5d186eed014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_aa7e3e06c8f6e9bff7d2958b5cc9c315292812b211da079ad2d60290a3e1fc0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7e3e06c8f6e9bff7d2958b5cc9c315292812b211da079ad2d60290a3e1fc0d->enter($__internal_aa7e3e06c8f6e9bff7d2958b5cc9c315292812b211da079ad2d60290a3e1fc0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_aa7e3e06c8f6e9bff7d2958b5cc9c315292812b211da079ad2d60290a3e1fc0d->leave($__internal_aa7e3e06c8f6e9bff7d2958b5cc9c315292812b211da079ad2d60290a3e1fc0d_prof);

        
        $__internal_3257da63974eeae5509aedc7c02686942ab86f1476334d7d12acd5d186eed014->leave($__internal_3257da63974eeae5509aedc7c02686942ab86f1476334d7d12acd5d186eed014_prof);

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
