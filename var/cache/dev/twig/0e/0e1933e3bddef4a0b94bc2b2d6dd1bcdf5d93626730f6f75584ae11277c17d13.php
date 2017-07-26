<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_2c39c4421820dc1e8347a29f7666d686f01fcece53858328f2335e0ee7423cc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_0bd0e4b6a51d2ce413f8bdab823604a64cfd4a89d2448a6f5496d8b6c9086d2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bd0e4b6a51d2ce413f8bdab823604a64cfd4a89d2448a6f5496d8b6c9086d2d->enter($__internal_0bd0e4b6a51d2ce413f8bdab823604a64cfd4a89d2448a6f5496d8b6c9086d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_8442a4361c8c2a3b7ea36122139fd46d8917c6e03d13e0511f60a5c40e66bfda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8442a4361c8c2a3b7ea36122139fd46d8917c6e03d13e0511f60a5c40e66bfda->enter($__internal_8442a4361c8c2a3b7ea36122139fd46d8917c6e03d13e0511f60a5c40e66bfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bd0e4b6a51d2ce413f8bdab823604a64cfd4a89d2448a6f5496d8b6c9086d2d->leave($__internal_0bd0e4b6a51d2ce413f8bdab823604a64cfd4a89d2448a6f5496d8b6c9086d2d_prof);

        
        $__internal_8442a4361c8c2a3b7ea36122139fd46d8917c6e03d13e0511f60a5c40e66bfda->leave($__internal_8442a4361c8c2a3b7ea36122139fd46d8917c6e03d13e0511f60a5c40e66bfda_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a5cce5f5249cb4feba32ed2131d977a92f6af7c5e8b283873cc12de4e6a08123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5cce5f5249cb4feba32ed2131d977a92f6af7c5e8b283873cc12de4e6a08123->enter($__internal_a5cce5f5249cb4feba32ed2131d977a92f6af7c5e8b283873cc12de4e6a08123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ea5f2d2714e6d8db10f4ee2401167364ede33e7798180a713de6fd9a94098134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea5f2d2714e6d8db10f4ee2401167364ede33e7798180a713de6fd9a94098134->enter($__internal_ea5f2d2714e6d8db10f4ee2401167364ede33e7798180a713de6fd9a94098134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_ea5f2d2714e6d8db10f4ee2401167364ede33e7798180a713de6fd9a94098134->leave($__internal_ea5f2d2714e6d8db10f4ee2401167364ede33e7798180a713de6fd9a94098134_prof);

        
        $__internal_a5cce5f5249cb4feba32ed2131d977a92f6af7c5e8b283873cc12de4e6a08123->leave($__internal_a5cce5f5249cb4feba32ed2131d977a92f6af7c5e8b283873cc12de4e6a08123_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
