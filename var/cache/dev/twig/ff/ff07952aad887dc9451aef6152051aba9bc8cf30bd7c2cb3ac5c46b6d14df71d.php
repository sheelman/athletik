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
        $__internal_cd8314e0ad3a21025754b6e7d6d55a3ae56c4aabea3cb99a4c807717978aff00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd8314e0ad3a21025754b6e7d6d55a3ae56c4aabea3cb99a4c807717978aff00->enter($__internal_cd8314e0ad3a21025754b6e7d6d55a3ae56c4aabea3cb99a4c807717978aff00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_c7a5c3a6bffb4812119480d588ac3418b7d7b6e3ec4a9e3f61b18bdc73401c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7a5c3a6bffb4812119480d588ac3418b7d7b6e3ec4a9e3f61b18bdc73401c0c->enter($__internal_c7a5c3a6bffb4812119480d588ac3418b7d7b6e3ec4a9e3f61b18bdc73401c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd8314e0ad3a21025754b6e7d6d55a3ae56c4aabea3cb99a4c807717978aff00->leave($__internal_cd8314e0ad3a21025754b6e7d6d55a3ae56c4aabea3cb99a4c807717978aff00_prof);

        
        $__internal_c7a5c3a6bffb4812119480d588ac3418b7d7b6e3ec4a9e3f61b18bdc73401c0c->leave($__internal_c7a5c3a6bffb4812119480d588ac3418b7d7b6e3ec4a9e3f61b18bdc73401c0c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2db245da27ea096cea7ba272326b62e80f42e98ffefc2623343a96fba4a10f69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2db245da27ea096cea7ba272326b62e80f42e98ffefc2623343a96fba4a10f69->enter($__internal_2db245da27ea096cea7ba272326b62e80f42e98ffefc2623343a96fba4a10f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a4cdb941e0ef6285cee6b0ee6f64c0944538c23fcb592862e88c1a82af705145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4cdb941e0ef6285cee6b0ee6f64c0944538c23fcb592862e88c1a82af705145->enter($__internal_a4cdb941e0ef6285cee6b0ee6f64c0944538c23fcb592862e88c1a82af705145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_a4cdb941e0ef6285cee6b0ee6f64c0944538c23fcb592862e88c1a82af705145->leave($__internal_a4cdb941e0ef6285cee6b0ee6f64c0944538c23fcb592862e88c1a82af705145_prof);

        
        $__internal_2db245da27ea096cea7ba272326b62e80f42e98ffefc2623343a96fba4a10f69->leave($__internal_2db245da27ea096cea7ba272326b62e80f42e98ffefc2623343a96fba4a10f69_prof);

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
