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
        $__internal_985161d0d64a9b71a3fb959a0d1a4ef746aec6bf89418f42dd7aa5b900706f47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_985161d0d64a9b71a3fb959a0d1a4ef746aec6bf89418f42dd7aa5b900706f47->enter($__internal_985161d0d64a9b71a3fb959a0d1a4ef746aec6bf89418f42dd7aa5b900706f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_644d56a00569f7b5194fa107d5aa9f7299fa71875a63d9a1d2bc9e11efb8a741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_644d56a00569f7b5194fa107d5aa9f7299fa71875a63d9a1d2bc9e11efb8a741->enter($__internal_644d56a00569f7b5194fa107d5aa9f7299fa71875a63d9a1d2bc9e11efb8a741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_985161d0d64a9b71a3fb959a0d1a4ef746aec6bf89418f42dd7aa5b900706f47->leave($__internal_985161d0d64a9b71a3fb959a0d1a4ef746aec6bf89418f42dd7aa5b900706f47_prof);

        
        $__internal_644d56a00569f7b5194fa107d5aa9f7299fa71875a63d9a1d2bc9e11efb8a741->leave($__internal_644d56a00569f7b5194fa107d5aa9f7299fa71875a63d9a1d2bc9e11efb8a741_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_81505e4e4c9f84fba01cdb3afc95dd885fe0c32314b49d97d9292d8ebe47a25d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81505e4e4c9f84fba01cdb3afc95dd885fe0c32314b49d97d9292d8ebe47a25d->enter($__internal_81505e4e4c9f84fba01cdb3afc95dd885fe0c32314b49d97d9292d8ebe47a25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_632e0707e0335a80948016c7bb1ccf63476d080fea3f6b9c853dde32e93dec2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_632e0707e0335a80948016c7bb1ccf63476d080fea3f6b9c853dde32e93dec2c->enter($__internal_632e0707e0335a80948016c7bb1ccf63476d080fea3f6b9c853dde32e93dec2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_632e0707e0335a80948016c7bb1ccf63476d080fea3f6b9c853dde32e93dec2c->leave($__internal_632e0707e0335a80948016c7bb1ccf63476d080fea3f6b9c853dde32e93dec2c_prof);

        
        $__internal_81505e4e4c9f84fba01cdb3afc95dd885fe0c32314b49d97d9292d8ebe47a25d->leave($__internal_81505e4e4c9f84fba01cdb3afc95dd885fe0c32314b49d97d9292d8ebe47a25d_prof);

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
