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
        $__internal_2780f15cff76c30c428a6d1bd392275e4be40599a0bd3740003478d596bc7da9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2780f15cff76c30c428a6d1bd392275e4be40599a0bd3740003478d596bc7da9->enter($__internal_2780f15cff76c30c428a6d1bd392275e4be40599a0bd3740003478d596bc7da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_5cc2df8bea6a231917ebd529028613db033c873067a33e17d5631ce133186f14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cc2df8bea6a231917ebd529028613db033c873067a33e17d5631ce133186f14->enter($__internal_5cc2df8bea6a231917ebd529028613db033c873067a33e17d5631ce133186f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2780f15cff76c30c428a6d1bd392275e4be40599a0bd3740003478d596bc7da9->leave($__internal_2780f15cff76c30c428a6d1bd392275e4be40599a0bd3740003478d596bc7da9_prof);

        
        $__internal_5cc2df8bea6a231917ebd529028613db033c873067a33e17d5631ce133186f14->leave($__internal_5cc2df8bea6a231917ebd529028613db033c873067a33e17d5631ce133186f14_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a3dd0564ed7abd42369112f23b9c66fc7f547af0e9e3b6dec6cd6844322bb0a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3dd0564ed7abd42369112f23b9c66fc7f547af0e9e3b6dec6cd6844322bb0a0->enter($__internal_a3dd0564ed7abd42369112f23b9c66fc7f547af0e9e3b6dec6cd6844322bb0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1de7a0cd9fc1bbfc833fba8fbe8dab7a9d676f70a689d994babdcbe70de67980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1de7a0cd9fc1bbfc833fba8fbe8dab7a9d676f70a689d994babdcbe70de67980->enter($__internal_1de7a0cd9fc1bbfc833fba8fbe8dab7a9d676f70a689d994babdcbe70de67980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_1de7a0cd9fc1bbfc833fba8fbe8dab7a9d676f70a689d994babdcbe70de67980->leave($__internal_1de7a0cd9fc1bbfc833fba8fbe8dab7a9d676f70a689d994babdcbe70de67980_prof);

        
        $__internal_a3dd0564ed7abd42369112f23b9c66fc7f547af0e9e3b6dec6cd6844322bb0a0->leave($__internal_a3dd0564ed7abd42369112f23b9c66fc7f547af0e9e3b6dec6cd6844322bb0a0_prof);

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
