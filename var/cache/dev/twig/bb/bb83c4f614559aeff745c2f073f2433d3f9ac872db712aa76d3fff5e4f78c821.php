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
        $__internal_d5a099c080a09555aba4f472644dcbc6967ab421f5f2691b213af5d21585896e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5a099c080a09555aba4f472644dcbc6967ab421f5f2691b213af5d21585896e->enter($__internal_d5a099c080a09555aba4f472644dcbc6967ab421f5f2691b213af5d21585896e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_067323edbf5375327a1720b2faab40a73b03a0b4c75a2ccd65612c97d8008fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_067323edbf5375327a1720b2faab40a73b03a0b4c75a2ccd65612c97d8008fb7->enter($__internal_067323edbf5375327a1720b2faab40a73b03a0b4c75a2ccd65612c97d8008fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5a099c080a09555aba4f472644dcbc6967ab421f5f2691b213af5d21585896e->leave($__internal_d5a099c080a09555aba4f472644dcbc6967ab421f5f2691b213af5d21585896e_prof);

        
        $__internal_067323edbf5375327a1720b2faab40a73b03a0b4c75a2ccd65612c97d8008fb7->leave($__internal_067323edbf5375327a1720b2faab40a73b03a0b4c75a2ccd65612c97d8008fb7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bbab1acd9951662412d730e6fa09f36a73c8331fc7be84e3bb2c840e00fb7385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbab1acd9951662412d730e6fa09f36a73c8331fc7be84e3bb2c840e00fb7385->enter($__internal_bbab1acd9951662412d730e6fa09f36a73c8331fc7be84e3bb2c840e00fb7385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_34b76f4103dad5bd45e24b418bdd78ba550eea7cc749149c924f0f5aa7f29204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b76f4103dad5bd45e24b418bdd78ba550eea7cc749149c924f0f5aa7f29204->enter($__internal_34b76f4103dad5bd45e24b418bdd78ba550eea7cc749149c924f0f5aa7f29204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_34b76f4103dad5bd45e24b418bdd78ba550eea7cc749149c924f0f5aa7f29204->leave($__internal_34b76f4103dad5bd45e24b418bdd78ba550eea7cc749149c924f0f5aa7f29204_prof);

        
        $__internal_bbab1acd9951662412d730e6fa09f36a73c8331fc7be84e3bb2c840e00fb7385->leave($__internal_bbab1acd9951662412d730e6fa09f36a73c8331fc7be84e3bb2c840e00fb7385_prof);

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
