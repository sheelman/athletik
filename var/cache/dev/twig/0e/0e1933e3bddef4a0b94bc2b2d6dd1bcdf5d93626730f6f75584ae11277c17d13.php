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
        $__internal_b9581fd87af0ad74497b993bb6a1d03953590d1a21d2a2e87564a9d21d891493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9581fd87af0ad74497b993bb6a1d03953590d1a21d2a2e87564a9d21d891493->enter($__internal_b9581fd87af0ad74497b993bb6a1d03953590d1a21d2a2e87564a9d21d891493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_d36dd99b7a6981e641fd3356438704ddc0700a640ff63edafb8a234b2eef8dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36dd99b7a6981e641fd3356438704ddc0700a640ff63edafb8a234b2eef8dc9->enter($__internal_d36dd99b7a6981e641fd3356438704ddc0700a640ff63edafb8a234b2eef8dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9581fd87af0ad74497b993bb6a1d03953590d1a21d2a2e87564a9d21d891493->leave($__internal_b9581fd87af0ad74497b993bb6a1d03953590d1a21d2a2e87564a9d21d891493_prof);

        
        $__internal_d36dd99b7a6981e641fd3356438704ddc0700a640ff63edafb8a234b2eef8dc9->leave($__internal_d36dd99b7a6981e641fd3356438704ddc0700a640ff63edafb8a234b2eef8dc9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_596d14bbc699b595502f39164d22b6eafe6e607818d6ded9f8bbe8579f7550cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_596d14bbc699b595502f39164d22b6eafe6e607818d6ded9f8bbe8579f7550cc->enter($__internal_596d14bbc699b595502f39164d22b6eafe6e607818d6ded9f8bbe8579f7550cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_65891a6a2f5f5f7ff7c1ad5f8ac6a0500aa4cc27b026dcd0dfa431181b7f3c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65891a6a2f5f5f7ff7c1ad5f8ac6a0500aa4cc27b026dcd0dfa431181b7f3c6b->enter($__internal_65891a6a2f5f5f7ff7c1ad5f8ac6a0500aa4cc27b026dcd0dfa431181b7f3c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_65891a6a2f5f5f7ff7c1ad5f8ac6a0500aa4cc27b026dcd0dfa431181b7f3c6b->leave($__internal_65891a6a2f5f5f7ff7c1ad5f8ac6a0500aa4cc27b026dcd0dfa431181b7f3c6b_prof);

        
        $__internal_596d14bbc699b595502f39164d22b6eafe6e607818d6ded9f8bbe8579f7550cc->leave($__internal_596d14bbc699b595502f39164d22b6eafe6e607818d6ded9f8bbe8579f7550cc_prof);

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
