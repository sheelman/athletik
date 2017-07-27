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
        $__internal_ba9cc94a6d3a720a890ac4420332964c6a8fa2fa3b1b443c6cb7b9e782dedc9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba9cc94a6d3a720a890ac4420332964c6a8fa2fa3b1b443c6cb7b9e782dedc9f->enter($__internal_ba9cc94a6d3a720a890ac4420332964c6a8fa2fa3b1b443c6cb7b9e782dedc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_ce74d5a347150399f6db21f26d86ee3f26571dc57150a925ca707aaa93af131b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce74d5a347150399f6db21f26d86ee3f26571dc57150a925ca707aaa93af131b->enter($__internal_ce74d5a347150399f6db21f26d86ee3f26571dc57150a925ca707aaa93af131b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba9cc94a6d3a720a890ac4420332964c6a8fa2fa3b1b443c6cb7b9e782dedc9f->leave($__internal_ba9cc94a6d3a720a890ac4420332964c6a8fa2fa3b1b443c6cb7b9e782dedc9f_prof);

        
        $__internal_ce74d5a347150399f6db21f26d86ee3f26571dc57150a925ca707aaa93af131b->leave($__internal_ce74d5a347150399f6db21f26d86ee3f26571dc57150a925ca707aaa93af131b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a11d5217646f5d66f279b1308c972a167abc3569bd6805e62de1c3a92b1dd3bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a11d5217646f5d66f279b1308c972a167abc3569bd6805e62de1c3a92b1dd3bb->enter($__internal_a11d5217646f5d66f279b1308c972a167abc3569bd6805e62de1c3a92b1dd3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_be378924cbe8b937a72c5e4815f68e538ade87824b0a1705da1136237cc7b62f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be378924cbe8b937a72c5e4815f68e538ade87824b0a1705da1136237cc7b62f->enter($__internal_be378924cbe8b937a72c5e4815f68e538ade87824b0a1705da1136237cc7b62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_be378924cbe8b937a72c5e4815f68e538ade87824b0a1705da1136237cc7b62f->leave($__internal_be378924cbe8b937a72c5e4815f68e538ade87824b0a1705da1136237cc7b62f_prof);

        
        $__internal_a11d5217646f5d66f279b1308c972a167abc3569bd6805e62de1c3a92b1dd3bb->leave($__internal_a11d5217646f5d66f279b1308c972a167abc3569bd6805e62de1c3a92b1dd3bb_prof);

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
