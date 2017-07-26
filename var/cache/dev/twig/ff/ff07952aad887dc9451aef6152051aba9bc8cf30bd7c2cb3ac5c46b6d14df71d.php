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
        $__internal_8fc88b1290fd73204cbb95629a1a7fe22846a0daa2d3ed1e02d55f5423288507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fc88b1290fd73204cbb95629a1a7fe22846a0daa2d3ed1e02d55f5423288507->enter($__internal_8fc88b1290fd73204cbb95629a1a7fe22846a0daa2d3ed1e02d55f5423288507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_2b40d04264d82e54768b7c8ae0d37290e61a7027362b524ac8ba42f5036968bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b40d04264d82e54768b7c8ae0d37290e61a7027362b524ac8ba42f5036968bd->enter($__internal_2b40d04264d82e54768b7c8ae0d37290e61a7027362b524ac8ba42f5036968bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fc88b1290fd73204cbb95629a1a7fe22846a0daa2d3ed1e02d55f5423288507->leave($__internal_8fc88b1290fd73204cbb95629a1a7fe22846a0daa2d3ed1e02d55f5423288507_prof);

        
        $__internal_2b40d04264d82e54768b7c8ae0d37290e61a7027362b524ac8ba42f5036968bd->leave($__internal_2b40d04264d82e54768b7c8ae0d37290e61a7027362b524ac8ba42f5036968bd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b56a2659960670b33ea667189c0952fc6993905146a3ae105421298398b3b39b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b56a2659960670b33ea667189c0952fc6993905146a3ae105421298398b3b39b->enter($__internal_b56a2659960670b33ea667189c0952fc6993905146a3ae105421298398b3b39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7c6441db312055175d50ef06ea6759533c01215a72b9c0eab76080e6e2d80262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c6441db312055175d50ef06ea6759533c01215a72b9c0eab76080e6e2d80262->enter($__internal_7c6441db312055175d50ef06ea6759533c01215a72b9c0eab76080e6e2d80262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_7c6441db312055175d50ef06ea6759533c01215a72b9c0eab76080e6e2d80262->leave($__internal_7c6441db312055175d50ef06ea6759533c01215a72b9c0eab76080e6e2d80262_prof);

        
        $__internal_b56a2659960670b33ea667189c0952fc6993905146a3ae105421298398b3b39b->leave($__internal_b56a2659960670b33ea667189c0952fc6993905146a3ae105421298398b3b39b_prof);

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
