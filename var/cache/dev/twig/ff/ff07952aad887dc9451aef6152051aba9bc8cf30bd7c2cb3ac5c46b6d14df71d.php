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
        $__internal_87ff1216324270b7c9718e537cfa73db6c473a0986b53b2eb5e93c29c48eb8e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87ff1216324270b7c9718e537cfa73db6c473a0986b53b2eb5e93c29c48eb8e8->enter($__internal_87ff1216324270b7c9718e537cfa73db6c473a0986b53b2eb5e93c29c48eb8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_8cf3e519a4494376f1b8140f6678ccf505f9a72d1aa2608161623d9341cb3e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf3e519a4494376f1b8140f6678ccf505f9a72d1aa2608161623d9341cb3e5b->enter($__internal_8cf3e519a4494376f1b8140f6678ccf505f9a72d1aa2608161623d9341cb3e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87ff1216324270b7c9718e537cfa73db6c473a0986b53b2eb5e93c29c48eb8e8->leave($__internal_87ff1216324270b7c9718e537cfa73db6c473a0986b53b2eb5e93c29c48eb8e8_prof);

        
        $__internal_8cf3e519a4494376f1b8140f6678ccf505f9a72d1aa2608161623d9341cb3e5b->leave($__internal_8cf3e519a4494376f1b8140f6678ccf505f9a72d1aa2608161623d9341cb3e5b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_83320f3afbc4068207c1194be5c247295daeb6bf75c00bdb22a5c4fd1737d3a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83320f3afbc4068207c1194be5c247295daeb6bf75c00bdb22a5c4fd1737d3a0->enter($__internal_83320f3afbc4068207c1194be5c247295daeb6bf75c00bdb22a5c4fd1737d3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6f02564b11d8ecf78c5980818b707abf575fd795b36dd43cad4388c03c5d7c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f02564b11d8ecf78c5980818b707abf575fd795b36dd43cad4388c03c5d7c43->enter($__internal_6f02564b11d8ecf78c5980818b707abf575fd795b36dd43cad4388c03c5d7c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_6f02564b11d8ecf78c5980818b707abf575fd795b36dd43cad4388c03c5d7c43->leave($__internal_6f02564b11d8ecf78c5980818b707abf575fd795b36dd43cad4388c03c5d7c43_prof);

        
        $__internal_83320f3afbc4068207c1194be5c247295daeb6bf75c00bdb22a5c4fd1737d3a0->leave($__internal_83320f3afbc4068207c1194be5c247295daeb6bf75c00bdb22a5c4fd1737d3a0_prof);

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
