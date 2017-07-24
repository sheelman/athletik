<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f8c53001f996025442ffe815cd24038a5ae766c38b20237b25564d8efeba1dfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_e89e9c960480c26cf81a673e3a4e0c0a37ca003f9ffa88d664fd7a656b1e1b95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e89e9c960480c26cf81a673e3a4e0c0a37ca003f9ffa88d664fd7a656b1e1b95->enter($__internal_e89e9c960480c26cf81a673e3a4e0c0a37ca003f9ffa88d664fd7a656b1e1b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_8a4b684ed56ba34100a4867a53037e6b5d8008d8e5767ea499a271e5ab2b37ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a4b684ed56ba34100a4867a53037e6b5d8008d8e5767ea499a271e5ab2b37ac->enter($__internal_8a4b684ed56ba34100a4867a53037e6b5d8008d8e5767ea499a271e5ab2b37ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e89e9c960480c26cf81a673e3a4e0c0a37ca003f9ffa88d664fd7a656b1e1b95->leave($__internal_e89e9c960480c26cf81a673e3a4e0c0a37ca003f9ffa88d664fd7a656b1e1b95_prof);

        
        $__internal_8a4b684ed56ba34100a4867a53037e6b5d8008d8e5767ea499a271e5ab2b37ac->leave($__internal_8a4b684ed56ba34100a4867a53037e6b5d8008d8e5767ea499a271e5ab2b37ac_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_54adc9b63b8ee137e6e102eb878f48aad78d9f9ed3846d7c60d6cd53f9295854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54adc9b63b8ee137e6e102eb878f48aad78d9f9ed3846d7c60d6cd53f9295854->enter($__internal_54adc9b63b8ee137e6e102eb878f48aad78d9f9ed3846d7c60d6cd53f9295854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_acccaf90843af22232811718d56bd62b35820f3b7c1e6bdff2b91a3c1b8e89fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acccaf90843af22232811718d56bd62b35820f3b7c1e6bdff2b91a3c1b8e89fe->enter($__internal_acccaf90843af22232811718d56bd62b35820f3b7c1e6bdff2b91a3c1b8e89fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_acccaf90843af22232811718d56bd62b35820f3b7c1e6bdff2b91a3c1b8e89fe->leave($__internal_acccaf90843af22232811718d56bd62b35820f3b7c1e6bdff2b91a3c1b8e89fe_prof);

        
        $__internal_54adc9b63b8ee137e6e102eb878f48aad78d9f9ed3846d7c60d6cd53f9295854->leave($__internal_54adc9b63b8ee137e6e102eb878f48aad78d9f9ed3846d7c60d6cd53f9295854_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
