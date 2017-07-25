<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3279dbcdca5c0aeeab86c3495066d40ec56322e772c432abca5b353e54e515c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_1f236e4819bce653bdb21f1be53522261db940cde7371aa716dbaa2156761567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f236e4819bce653bdb21f1be53522261db940cde7371aa716dbaa2156761567->enter($__internal_1f236e4819bce653bdb21f1be53522261db940cde7371aa716dbaa2156761567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_59fd6248c3f5db7ab86ae060a4b1ca9ebc0ee7c3285da8928b7eba0b49d5b09b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59fd6248c3f5db7ab86ae060a4b1ca9ebc0ee7c3285da8928b7eba0b49d5b09b->enter($__internal_59fd6248c3f5db7ab86ae060a4b1ca9ebc0ee7c3285da8928b7eba0b49d5b09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f236e4819bce653bdb21f1be53522261db940cde7371aa716dbaa2156761567->leave($__internal_1f236e4819bce653bdb21f1be53522261db940cde7371aa716dbaa2156761567_prof);

        
        $__internal_59fd6248c3f5db7ab86ae060a4b1ca9ebc0ee7c3285da8928b7eba0b49d5b09b->leave($__internal_59fd6248c3f5db7ab86ae060a4b1ca9ebc0ee7c3285da8928b7eba0b49d5b09b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4765e0b0760f803ec8c36af7e2d6024ee8a9ec5af822e54c869dc2e12f37dbfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4765e0b0760f803ec8c36af7e2d6024ee8a9ec5af822e54c869dc2e12f37dbfc->enter($__internal_4765e0b0760f803ec8c36af7e2d6024ee8a9ec5af822e54c869dc2e12f37dbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3ffa141cb06b2f52f05457d2850ffefe88e6e620e3ad4ea8985efbe44eb5b049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ffa141cb06b2f52f05457d2850ffefe88e6e620e3ad4ea8985efbe44eb5b049->enter($__internal_3ffa141cb06b2f52f05457d2850ffefe88e6e620e3ad4ea8985efbe44eb5b049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_3ffa141cb06b2f52f05457d2850ffefe88e6e620e3ad4ea8985efbe44eb5b049->leave($__internal_3ffa141cb06b2f52f05457d2850ffefe88e6e620e3ad4ea8985efbe44eb5b049_prof);

        
        $__internal_4765e0b0760f803ec8c36af7e2d6024ee8a9ec5af822e54c869dc2e12f37dbfc->leave($__internal_4765e0b0760f803ec8c36af7e2d6024ee8a9ec5af822e54c869dc2e12f37dbfc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
