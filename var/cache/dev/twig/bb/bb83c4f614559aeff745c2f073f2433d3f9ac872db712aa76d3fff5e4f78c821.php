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
        $__internal_1c3820b523567a49f3c621a12c20628d3722dd464ef87afeaf5437e36685b14b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c3820b523567a49f3c621a12c20628d3722dd464ef87afeaf5437e36685b14b->enter($__internal_1c3820b523567a49f3c621a12c20628d3722dd464ef87afeaf5437e36685b14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_f1dcb4ff686bf9b7c932c28f1dbaac6566564b12793b5929166ecc3076881f2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1dcb4ff686bf9b7c932c28f1dbaac6566564b12793b5929166ecc3076881f2d->enter($__internal_f1dcb4ff686bf9b7c932c28f1dbaac6566564b12793b5929166ecc3076881f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c3820b523567a49f3c621a12c20628d3722dd464ef87afeaf5437e36685b14b->leave($__internal_1c3820b523567a49f3c621a12c20628d3722dd464ef87afeaf5437e36685b14b_prof);

        
        $__internal_f1dcb4ff686bf9b7c932c28f1dbaac6566564b12793b5929166ecc3076881f2d->leave($__internal_f1dcb4ff686bf9b7c932c28f1dbaac6566564b12793b5929166ecc3076881f2d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20afc327fdce3409cf9daf047270395245654ca9859047b0eddb44a845c659d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20afc327fdce3409cf9daf047270395245654ca9859047b0eddb44a845c659d8->enter($__internal_20afc327fdce3409cf9daf047270395245654ca9859047b0eddb44a845c659d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f060646d4b8b47759b470efe309dfe75696c14645d7422b79e0b5b1d4fc6cf75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f060646d4b8b47759b470efe309dfe75696c14645d7422b79e0b5b1d4fc6cf75->enter($__internal_f060646d4b8b47759b470efe309dfe75696c14645d7422b79e0b5b1d4fc6cf75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_f060646d4b8b47759b470efe309dfe75696c14645d7422b79e0b5b1d4fc6cf75->leave($__internal_f060646d4b8b47759b470efe309dfe75696c14645d7422b79e0b5b1d4fc6cf75_prof);

        
        $__internal_20afc327fdce3409cf9daf047270395245654ca9859047b0eddb44a845c659d8->leave($__internal_20afc327fdce3409cf9daf047270395245654ca9859047b0eddb44a845c659d8_prof);

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
