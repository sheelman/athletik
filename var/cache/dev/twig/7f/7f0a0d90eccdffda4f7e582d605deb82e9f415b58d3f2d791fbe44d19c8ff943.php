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
        $__internal_e2363ae17fd1776380db9875452c68bec60f8b76273d600f597fbe2f34a0b9a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2363ae17fd1776380db9875452c68bec60f8b76273d600f597fbe2f34a0b9a1->enter($__internal_e2363ae17fd1776380db9875452c68bec60f8b76273d600f597fbe2f34a0b9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_d1ad91fe5dbfa0b6a2722ab070aad4540acaf18e8d4598bc3177c4dcd8075b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ad91fe5dbfa0b6a2722ab070aad4540acaf18e8d4598bc3177c4dcd8075b6c->enter($__internal_d1ad91fe5dbfa0b6a2722ab070aad4540acaf18e8d4598bc3177c4dcd8075b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2363ae17fd1776380db9875452c68bec60f8b76273d600f597fbe2f34a0b9a1->leave($__internal_e2363ae17fd1776380db9875452c68bec60f8b76273d600f597fbe2f34a0b9a1_prof);

        
        $__internal_d1ad91fe5dbfa0b6a2722ab070aad4540acaf18e8d4598bc3177c4dcd8075b6c->leave($__internal_d1ad91fe5dbfa0b6a2722ab070aad4540acaf18e8d4598bc3177c4dcd8075b6c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be87f5216dff6388f8a0e755087ee860f16a67cc6a04c260b6a047270c91d428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be87f5216dff6388f8a0e755087ee860f16a67cc6a04c260b6a047270c91d428->enter($__internal_be87f5216dff6388f8a0e755087ee860f16a67cc6a04c260b6a047270c91d428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e9bf8662846a114d3175a4fbfa1532e4f59388fc7b712544416236f4be305926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9bf8662846a114d3175a4fbfa1532e4f59388fc7b712544416236f4be305926->enter($__internal_e9bf8662846a114d3175a4fbfa1532e4f59388fc7b712544416236f4be305926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_e9bf8662846a114d3175a4fbfa1532e4f59388fc7b712544416236f4be305926->leave($__internal_e9bf8662846a114d3175a4fbfa1532e4f59388fc7b712544416236f4be305926_prof);

        
        $__internal_be87f5216dff6388f8a0e755087ee860f16a67cc6a04c260b6a047270c91d428->leave($__internal_be87f5216dff6388f8a0e755087ee860f16a67cc6a04c260b6a047270c91d428_prof);

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
