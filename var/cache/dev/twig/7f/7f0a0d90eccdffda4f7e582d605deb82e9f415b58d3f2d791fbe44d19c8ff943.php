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
        $__internal_36d7efc9fc3013073e7bb0854262336d3d0f5322ad7d35fefedf958f00861693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36d7efc9fc3013073e7bb0854262336d3d0f5322ad7d35fefedf958f00861693->enter($__internal_36d7efc9fc3013073e7bb0854262336d3d0f5322ad7d35fefedf958f00861693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_9d45188722b4bf2e29785db2afedd21273c6ff57354e906b2c2bc4378d80e28b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d45188722b4bf2e29785db2afedd21273c6ff57354e906b2c2bc4378d80e28b->enter($__internal_9d45188722b4bf2e29785db2afedd21273c6ff57354e906b2c2bc4378d80e28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36d7efc9fc3013073e7bb0854262336d3d0f5322ad7d35fefedf958f00861693->leave($__internal_36d7efc9fc3013073e7bb0854262336d3d0f5322ad7d35fefedf958f00861693_prof);

        
        $__internal_9d45188722b4bf2e29785db2afedd21273c6ff57354e906b2c2bc4378d80e28b->leave($__internal_9d45188722b4bf2e29785db2afedd21273c6ff57354e906b2c2bc4378d80e28b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_28ede23bc692c424abfb612c9a48899a74689933e0a7311d9f42a71b6aa9c04b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28ede23bc692c424abfb612c9a48899a74689933e0a7311d9f42a71b6aa9c04b->enter($__internal_28ede23bc692c424abfb612c9a48899a74689933e0a7311d9f42a71b6aa9c04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fe49dde2fc8512fbc16adfc72b15315c7cf5b02847db2c1ab09ba8b99b8c95e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe49dde2fc8512fbc16adfc72b15315c7cf5b02847db2c1ab09ba8b99b8c95e2->enter($__internal_fe49dde2fc8512fbc16adfc72b15315c7cf5b02847db2c1ab09ba8b99b8c95e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_fe49dde2fc8512fbc16adfc72b15315c7cf5b02847db2c1ab09ba8b99b8c95e2->leave($__internal_fe49dde2fc8512fbc16adfc72b15315c7cf5b02847db2c1ab09ba8b99b8c95e2_prof);

        
        $__internal_28ede23bc692c424abfb612c9a48899a74689933e0a7311d9f42a71b6aa9c04b->leave($__internal_28ede23bc692c424abfb612c9a48899a74689933e0a7311d9f42a71b6aa9c04b_prof);

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
