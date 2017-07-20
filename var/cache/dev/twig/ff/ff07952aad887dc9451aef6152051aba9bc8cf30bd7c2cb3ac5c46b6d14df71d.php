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
        $__internal_6113db7df0521102b28605edc05a9a4442826c3b5cb52b8639d665d3f654ea69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6113db7df0521102b28605edc05a9a4442826c3b5cb52b8639d665d3f654ea69->enter($__internal_6113db7df0521102b28605edc05a9a4442826c3b5cb52b8639d665d3f654ea69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_0fe32e7857f920eaae9ec3630d029a73a507024fff89d54e1d0ed27e7fdbe56c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fe32e7857f920eaae9ec3630d029a73a507024fff89d54e1d0ed27e7fdbe56c->enter($__internal_0fe32e7857f920eaae9ec3630d029a73a507024fff89d54e1d0ed27e7fdbe56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6113db7df0521102b28605edc05a9a4442826c3b5cb52b8639d665d3f654ea69->leave($__internal_6113db7df0521102b28605edc05a9a4442826c3b5cb52b8639d665d3f654ea69_prof);

        
        $__internal_0fe32e7857f920eaae9ec3630d029a73a507024fff89d54e1d0ed27e7fdbe56c->leave($__internal_0fe32e7857f920eaae9ec3630d029a73a507024fff89d54e1d0ed27e7fdbe56c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_90c7b7f0b7fe586ef6506257c4b02ee47b74a9fbf119ed4991a39936bf392bfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90c7b7f0b7fe586ef6506257c4b02ee47b74a9fbf119ed4991a39936bf392bfe->enter($__internal_90c7b7f0b7fe586ef6506257c4b02ee47b74a9fbf119ed4991a39936bf392bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2dabf0ef769ba82ee8ded57905c956a97b95d53df86f33f61700d10e0ee0e7b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dabf0ef769ba82ee8ded57905c956a97b95d53df86f33f61700d10e0ee0e7b1->enter($__internal_2dabf0ef769ba82ee8ded57905c956a97b95d53df86f33f61700d10e0ee0e7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_2dabf0ef769ba82ee8ded57905c956a97b95d53df86f33f61700d10e0ee0e7b1->leave($__internal_2dabf0ef769ba82ee8ded57905c956a97b95d53df86f33f61700d10e0ee0e7b1_prof);

        
        $__internal_90c7b7f0b7fe586ef6506257c4b02ee47b74a9fbf119ed4991a39936bf392bfe->leave($__internal_90c7b7f0b7fe586ef6506257c4b02ee47b74a9fbf119ed4991a39936bf392bfe_prof);

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
