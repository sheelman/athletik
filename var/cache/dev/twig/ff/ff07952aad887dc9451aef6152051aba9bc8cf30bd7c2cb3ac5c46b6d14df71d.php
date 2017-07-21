<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_2c9ad4f1404f05ebfd2e19f1c722221f359290941177d29c1c236ec2741a614d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_0a6013e3fb407955a6525a08ead0eceb57fb43149ea6aa711be7a158f69c624f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a6013e3fb407955a6525a08ead0eceb57fb43149ea6aa711be7a158f69c624f->enter($__internal_0a6013e3fb407955a6525a08ead0eceb57fb43149ea6aa711be7a158f69c624f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_39bb9ed9e3a69e0475ded7d95b7af5e01ad278e290c2aa3438db86f7965d417f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39bb9ed9e3a69e0475ded7d95b7af5e01ad278e290c2aa3438db86f7965d417f->enter($__internal_39bb9ed9e3a69e0475ded7d95b7af5e01ad278e290c2aa3438db86f7965d417f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a6013e3fb407955a6525a08ead0eceb57fb43149ea6aa711be7a158f69c624f->leave($__internal_0a6013e3fb407955a6525a08ead0eceb57fb43149ea6aa711be7a158f69c624f_prof);

        
        $__internal_39bb9ed9e3a69e0475ded7d95b7af5e01ad278e290c2aa3438db86f7965d417f->leave($__internal_39bb9ed9e3a69e0475ded7d95b7af5e01ad278e290c2aa3438db86f7965d417f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5deede4ddbdad857efa3e93971edfeaa7adc25927498c019f6ac0b16fa6aeb25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5deede4ddbdad857efa3e93971edfeaa7adc25927498c019f6ac0b16fa6aeb25->enter($__internal_5deede4ddbdad857efa3e93971edfeaa7adc25927498c019f6ac0b16fa6aeb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_45503ecf38478972fb332bde25e4de4c19d8070e363f16e44d7cf70ac67ba0d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45503ecf38478972fb332bde25e4de4c19d8070e363f16e44d7cf70ac67ba0d9->enter($__internal_45503ecf38478972fb332bde25e4de4c19d8070e363f16e44d7cf70ac67ba0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_45503ecf38478972fb332bde25e4de4c19d8070e363f16e44d7cf70ac67ba0d9->leave($__internal_45503ecf38478972fb332bde25e4de4c19d8070e363f16e44d7cf70ac67ba0d9_prof);

        
        $__internal_5deede4ddbdad857efa3e93971edfeaa7adc25927498c019f6ac0b16fa6aeb25->leave($__internal_5deede4ddbdad857efa3e93971edfeaa7adc25927498c019f6ac0b16fa6aeb25_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
