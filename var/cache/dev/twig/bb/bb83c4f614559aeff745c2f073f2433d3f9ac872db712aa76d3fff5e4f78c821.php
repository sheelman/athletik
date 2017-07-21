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
        $__internal_f3eb23495d8466050c865de09c36564b9a95da641fe957a0f11d8732e9dd2fe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3eb23495d8466050c865de09c36564b9a95da641fe957a0f11d8732e9dd2fe8->enter($__internal_f3eb23495d8466050c865de09c36564b9a95da641fe957a0f11d8732e9dd2fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_73aa1a99c50ea68c324c0245f15c463fd592aa555dd4e77f234b277a2328fe3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73aa1a99c50ea68c324c0245f15c463fd592aa555dd4e77f234b277a2328fe3a->enter($__internal_73aa1a99c50ea68c324c0245f15c463fd592aa555dd4e77f234b277a2328fe3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3eb23495d8466050c865de09c36564b9a95da641fe957a0f11d8732e9dd2fe8->leave($__internal_f3eb23495d8466050c865de09c36564b9a95da641fe957a0f11d8732e9dd2fe8_prof);

        
        $__internal_73aa1a99c50ea68c324c0245f15c463fd592aa555dd4e77f234b277a2328fe3a->leave($__internal_73aa1a99c50ea68c324c0245f15c463fd592aa555dd4e77f234b277a2328fe3a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e757dd21f246d7df0d494f5f5d4bce466dad6ac6d6d412a860bbb472b956b284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e757dd21f246d7df0d494f5f5d4bce466dad6ac6d6d412a860bbb472b956b284->enter($__internal_e757dd21f246d7df0d494f5f5d4bce466dad6ac6d6d412a860bbb472b956b284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_947d1504070b9e6203c36e65580d3142a3a3bb850d8946897ef235fdb5b4c91f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_947d1504070b9e6203c36e65580d3142a3a3bb850d8946897ef235fdb5b4c91f->enter($__internal_947d1504070b9e6203c36e65580d3142a3a3bb850d8946897ef235fdb5b4c91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_947d1504070b9e6203c36e65580d3142a3a3bb850d8946897ef235fdb5b4c91f->leave($__internal_947d1504070b9e6203c36e65580d3142a3a3bb850d8946897ef235fdb5b4c91f_prof);

        
        $__internal_e757dd21f246d7df0d494f5f5d4bce466dad6ac6d6d412a860bbb472b956b284->leave($__internal_e757dd21f246d7df0d494f5f5d4bce466dad6ac6d6d412a860bbb472b956b284_prof);

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
