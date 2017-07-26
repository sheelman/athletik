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
        $__internal_d279cef5bdcb6536790b6fc3489f667556b6106081bc293ba91196d28c9d02d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d279cef5bdcb6536790b6fc3489f667556b6106081bc293ba91196d28c9d02d4->enter($__internal_d279cef5bdcb6536790b6fc3489f667556b6106081bc293ba91196d28c9d02d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_6349607406e031c4c988c1cc348bf2789b06f05b670e0ead7855484f102e8c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6349607406e031c4c988c1cc348bf2789b06f05b670e0ead7855484f102e8c0a->enter($__internal_6349607406e031c4c988c1cc348bf2789b06f05b670e0ead7855484f102e8c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d279cef5bdcb6536790b6fc3489f667556b6106081bc293ba91196d28c9d02d4->leave($__internal_d279cef5bdcb6536790b6fc3489f667556b6106081bc293ba91196d28c9d02d4_prof);

        
        $__internal_6349607406e031c4c988c1cc348bf2789b06f05b670e0ead7855484f102e8c0a->leave($__internal_6349607406e031c4c988c1cc348bf2789b06f05b670e0ead7855484f102e8c0a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b826c8fc4681a07a22e6a0e272ab49b2b349976c8481d5f493287f339c58fc42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b826c8fc4681a07a22e6a0e272ab49b2b349976c8481d5f493287f339c58fc42->enter($__internal_b826c8fc4681a07a22e6a0e272ab49b2b349976c8481d5f493287f339c58fc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b403b02a94d530560df71f8ff7e787a83145fe130e23a79b1e707a474ae972fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b403b02a94d530560df71f8ff7e787a83145fe130e23a79b1e707a474ae972fb->enter($__internal_b403b02a94d530560df71f8ff7e787a83145fe130e23a79b1e707a474ae972fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_b403b02a94d530560df71f8ff7e787a83145fe130e23a79b1e707a474ae972fb->leave($__internal_b403b02a94d530560df71f8ff7e787a83145fe130e23a79b1e707a474ae972fb_prof);

        
        $__internal_b826c8fc4681a07a22e6a0e272ab49b2b349976c8481d5f493287f339c58fc42->leave($__internal_b826c8fc4681a07a22e6a0e272ab49b2b349976c8481d5f493287f339c58fc42_prof);

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
