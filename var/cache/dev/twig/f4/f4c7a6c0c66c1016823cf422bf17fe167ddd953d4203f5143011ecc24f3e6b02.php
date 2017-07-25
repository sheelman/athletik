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
        $__internal_de10531531894297929a82fc3f4669d3e7b132ede71a11dd035542c90105e512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de10531531894297929a82fc3f4669d3e7b132ede71a11dd035542c90105e512->enter($__internal_de10531531894297929a82fc3f4669d3e7b132ede71a11dd035542c90105e512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_266a9550f04986888282239b0d161f5a0bb4fe545ff7fcf14ab842011fab972f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_266a9550f04986888282239b0d161f5a0bb4fe545ff7fcf14ab842011fab972f->enter($__internal_266a9550f04986888282239b0d161f5a0bb4fe545ff7fcf14ab842011fab972f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de10531531894297929a82fc3f4669d3e7b132ede71a11dd035542c90105e512->leave($__internal_de10531531894297929a82fc3f4669d3e7b132ede71a11dd035542c90105e512_prof);

        
        $__internal_266a9550f04986888282239b0d161f5a0bb4fe545ff7fcf14ab842011fab972f->leave($__internal_266a9550f04986888282239b0d161f5a0bb4fe545ff7fcf14ab842011fab972f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cdd4c7e5218b148b080915da7d9a0cdfdc6ad1cc1f390ac16db72d32e4c3639e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdd4c7e5218b148b080915da7d9a0cdfdc6ad1cc1f390ac16db72d32e4c3639e->enter($__internal_cdd4c7e5218b148b080915da7d9a0cdfdc6ad1cc1f390ac16db72d32e4c3639e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_32a06e2f2f6374a9b797436d7c6675bcb2e6715c0fee0e43afab5d1b15f096b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32a06e2f2f6374a9b797436d7c6675bcb2e6715c0fee0e43afab5d1b15f096b6->enter($__internal_32a06e2f2f6374a9b797436d7c6675bcb2e6715c0fee0e43afab5d1b15f096b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_32a06e2f2f6374a9b797436d7c6675bcb2e6715c0fee0e43afab5d1b15f096b6->leave($__internal_32a06e2f2f6374a9b797436d7c6675bcb2e6715c0fee0e43afab5d1b15f096b6_prof);

        
        $__internal_cdd4c7e5218b148b080915da7d9a0cdfdc6ad1cc1f390ac16db72d32e4c3639e->leave($__internal_cdd4c7e5218b148b080915da7d9a0cdfdc6ad1cc1f390ac16db72d32e4c3639e_prof);

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
