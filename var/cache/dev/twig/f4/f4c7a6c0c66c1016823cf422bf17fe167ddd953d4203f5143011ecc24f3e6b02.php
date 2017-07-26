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
        $__internal_f5b4722ec74c706f2d6ca1e5e856c27533fedff0ca1025e1699bbd70243a0f5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5b4722ec74c706f2d6ca1e5e856c27533fedff0ca1025e1699bbd70243a0f5e->enter($__internal_f5b4722ec74c706f2d6ca1e5e856c27533fedff0ca1025e1699bbd70243a0f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_a3614c50a645cba9f4e7ef4945f7f641ae434bb468f4c4d76ee0a00fdf5b4af9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3614c50a645cba9f4e7ef4945f7f641ae434bb468f4c4d76ee0a00fdf5b4af9->enter($__internal_a3614c50a645cba9f4e7ef4945f7f641ae434bb468f4c4d76ee0a00fdf5b4af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5b4722ec74c706f2d6ca1e5e856c27533fedff0ca1025e1699bbd70243a0f5e->leave($__internal_f5b4722ec74c706f2d6ca1e5e856c27533fedff0ca1025e1699bbd70243a0f5e_prof);

        
        $__internal_a3614c50a645cba9f4e7ef4945f7f641ae434bb468f4c4d76ee0a00fdf5b4af9->leave($__internal_a3614c50a645cba9f4e7ef4945f7f641ae434bb468f4c4d76ee0a00fdf5b4af9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a147089add0c4355fb3162de3f5798996d12695e621f6720fa78d7632fbca2a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a147089add0c4355fb3162de3f5798996d12695e621f6720fa78d7632fbca2a8->enter($__internal_a147089add0c4355fb3162de3f5798996d12695e621f6720fa78d7632fbca2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1613c4837feafbadc6db993aa567bcb42b09c3d4e9a3f27a64ac8f4b8d1f514b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1613c4837feafbadc6db993aa567bcb42b09c3d4e9a3f27a64ac8f4b8d1f514b->enter($__internal_1613c4837feafbadc6db993aa567bcb42b09c3d4e9a3f27a64ac8f4b8d1f514b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_1613c4837feafbadc6db993aa567bcb42b09c3d4e9a3f27a64ac8f4b8d1f514b->leave($__internal_1613c4837feafbadc6db993aa567bcb42b09c3d4e9a3f27a64ac8f4b8d1f514b_prof);

        
        $__internal_a147089add0c4355fb3162de3f5798996d12695e621f6720fa78d7632fbca2a8->leave($__internal_a147089add0c4355fb3162de3f5798996d12695e621f6720fa78d7632fbca2a8_prof);

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
