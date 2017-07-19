<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_c4f59bb411bf08e47a2b47008f757a48f67e5e529f28980527914954ca778905 extends Twig_Template
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
        $__internal_cd984af96432fb12fd6aaed58a5679d3a820ff9a2f9fea8123385ee23e513aab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd984af96432fb12fd6aaed58a5679d3a820ff9a2f9fea8123385ee23e513aab->enter($__internal_cd984af96432fb12fd6aaed58a5679d3a820ff9a2f9fea8123385ee23e513aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_28aa8f353025eba9d357ff5f561b8778096a5dbdff84c53325484d1309411e39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28aa8f353025eba9d357ff5f561b8778096a5dbdff84c53325484d1309411e39->enter($__internal_28aa8f353025eba9d357ff5f561b8778096a5dbdff84c53325484d1309411e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd984af96432fb12fd6aaed58a5679d3a820ff9a2f9fea8123385ee23e513aab->leave($__internal_cd984af96432fb12fd6aaed58a5679d3a820ff9a2f9fea8123385ee23e513aab_prof);

        
        $__internal_28aa8f353025eba9d357ff5f561b8778096a5dbdff84c53325484d1309411e39->leave($__internal_28aa8f353025eba9d357ff5f561b8778096a5dbdff84c53325484d1309411e39_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fd0b100ba563327d9c94caa9beb8e83859ae4aeb4af7510fed17f09035d7ef51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd0b100ba563327d9c94caa9beb8e83859ae4aeb4af7510fed17f09035d7ef51->enter($__internal_fd0b100ba563327d9c94caa9beb8e83859ae4aeb4af7510fed17f09035d7ef51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2ad4f4fae08fb584950c5eb52a6f4777d1fe88d1c7d14cb2ced90acd70c4d149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad4f4fae08fb584950c5eb52a6f4777d1fe88d1c7d14cb2ced90acd70c4d149->enter($__internal_2ad4f4fae08fb584950c5eb52a6f4777d1fe88d1c7d14cb2ced90acd70c4d149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_2ad4f4fae08fb584950c5eb52a6f4777d1fe88d1c7d14cb2ced90acd70c4d149->leave($__internal_2ad4f4fae08fb584950c5eb52a6f4777d1fe88d1c7d14cb2ced90acd70c4d149_prof);

        
        $__internal_fd0b100ba563327d9c94caa9beb8e83859ae4aeb4af7510fed17f09035d7ef51->leave($__internal_fd0b100ba563327d9c94caa9beb8e83859ae4aeb4af7510fed17f09035d7ef51_prof);

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
", "FOSUserBundle:Group:edit.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
