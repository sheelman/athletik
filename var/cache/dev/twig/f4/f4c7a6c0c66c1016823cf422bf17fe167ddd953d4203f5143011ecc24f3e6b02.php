<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_95beef668053696dc4eb9e06df3dc5e3c358e58b637154d9399b55d8d67fff66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_89ca1f9c328fcf5232a3e215b00048ee8c0b016966cbde4f2849a4c432e7e491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89ca1f9c328fcf5232a3e215b00048ee8c0b016966cbde4f2849a4c432e7e491->enter($__internal_89ca1f9c328fcf5232a3e215b00048ee8c0b016966cbde4f2849a4c432e7e491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_b590e13f5c047918e9b9c7cdc9d48dbd20fe0a70ddc6d6590b5a1e933270b666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b590e13f5c047918e9b9c7cdc9d48dbd20fe0a70ddc6d6590b5a1e933270b666->enter($__internal_b590e13f5c047918e9b9c7cdc9d48dbd20fe0a70ddc6d6590b5a1e933270b666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89ca1f9c328fcf5232a3e215b00048ee8c0b016966cbde4f2849a4c432e7e491->leave($__internal_89ca1f9c328fcf5232a3e215b00048ee8c0b016966cbde4f2849a4c432e7e491_prof);

        
        $__internal_b590e13f5c047918e9b9c7cdc9d48dbd20fe0a70ddc6d6590b5a1e933270b666->leave($__internal_b590e13f5c047918e9b9c7cdc9d48dbd20fe0a70ddc6d6590b5a1e933270b666_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_967fd9f8e2e9549cfa66cf8798b92e8a2d7c6fd84deeb3addc041b21c1681ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_967fd9f8e2e9549cfa66cf8798b92e8a2d7c6fd84deeb3addc041b21c1681ad3->enter($__internal_967fd9f8e2e9549cfa66cf8798b92e8a2d7c6fd84deeb3addc041b21c1681ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_73c97a63235d4e931b062dc9b33ede3660eaab1ad0c212394bd2dbd820d6ae67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c97a63235d4e931b062dc9b33ede3660eaab1ad0c212394bd2dbd820d6ae67->enter($__internal_73c97a63235d4e931b062dc9b33ede3660eaab1ad0c212394bd2dbd820d6ae67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_73c97a63235d4e931b062dc9b33ede3660eaab1ad0c212394bd2dbd820d6ae67->leave($__internal_73c97a63235d4e931b062dc9b33ede3660eaab1ad0c212394bd2dbd820d6ae67_prof);

        
        $__internal_967fd9f8e2e9549cfa66cf8798b92e8a2d7c6fd84deeb3addc041b21c1681ad3->leave($__internal_967fd9f8e2e9549cfa66cf8798b92e8a2d7c6fd84deeb3addc041b21c1681ad3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
