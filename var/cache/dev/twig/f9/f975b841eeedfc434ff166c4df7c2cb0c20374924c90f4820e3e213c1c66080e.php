<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_de2859ca3238d90e83a7291214aad0e2709ea62674f0a1942384c94ff4afdd1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_340c23dbcb3b007d0d1f5efc08d2fd3fafdc4100573b1c9991b8be0f74e7a526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_340c23dbcb3b007d0d1f5efc08d2fd3fafdc4100573b1c9991b8be0f74e7a526->enter($__internal_340c23dbcb3b007d0d1f5efc08d2fd3fafdc4100573b1c9991b8be0f74e7a526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_93a755223ba183fc764ce3d9ac027b08287dd20f20e77c4fd436dc7a4c3f718a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93a755223ba183fc764ce3d9ac027b08287dd20f20e77c4fd436dc7a4c3f718a->enter($__internal_93a755223ba183fc764ce3d9ac027b08287dd20f20e77c4fd436dc7a4c3f718a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_340c23dbcb3b007d0d1f5efc08d2fd3fafdc4100573b1c9991b8be0f74e7a526->leave($__internal_340c23dbcb3b007d0d1f5efc08d2fd3fafdc4100573b1c9991b8be0f74e7a526_prof);

        
        $__internal_93a755223ba183fc764ce3d9ac027b08287dd20f20e77c4fd436dc7a4c3f718a->leave($__internal_93a755223ba183fc764ce3d9ac027b08287dd20f20e77c4fd436dc7a4c3f718a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_02e8444781337e14664999f2c4b7b76fd9836837a64cad8b538e0dcd4d4f3355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02e8444781337e14664999f2c4b7b76fd9836837a64cad8b538e0dcd4d4f3355->enter($__internal_02e8444781337e14664999f2c4b7b76fd9836837a64cad8b538e0dcd4d4f3355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7ea267a5d6205cc9eb5e6c9016de47f83741f18c45fc44f2d1d8cc02d1f40983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea267a5d6205cc9eb5e6c9016de47f83741f18c45fc44f2d1d8cc02d1f40983->enter($__internal_7ea267a5d6205cc9eb5e6c9016de47f83741f18c45fc44f2d1d8cc02d1f40983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_7ea267a5d6205cc9eb5e6c9016de47f83741f18c45fc44f2d1d8cc02d1f40983->leave($__internal_7ea267a5d6205cc9eb5e6c9016de47f83741f18c45fc44f2d1d8cc02d1f40983_prof);

        
        $__internal_02e8444781337e14664999f2c4b7b76fd9836837a64cad8b538e0dcd4d4f3355->leave($__internal_02e8444781337e14664999f2c4b7b76fd9836837a64cad8b538e0dcd4d4f3355_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
