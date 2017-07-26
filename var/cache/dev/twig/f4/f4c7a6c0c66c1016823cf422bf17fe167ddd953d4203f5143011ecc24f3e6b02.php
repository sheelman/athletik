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
        $__internal_9f7a20299ef5faae87c6c3959e84ec350f48537e25f019eb9e1f1566c569e92c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f7a20299ef5faae87c6c3959e84ec350f48537e25f019eb9e1f1566c569e92c->enter($__internal_9f7a20299ef5faae87c6c3959e84ec350f48537e25f019eb9e1f1566c569e92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_c79ac35962f020acd6ef0727ebfd357d72388a6f3a7cd8b4da1a313546179198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c79ac35962f020acd6ef0727ebfd357d72388a6f3a7cd8b4da1a313546179198->enter($__internal_c79ac35962f020acd6ef0727ebfd357d72388a6f3a7cd8b4da1a313546179198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f7a20299ef5faae87c6c3959e84ec350f48537e25f019eb9e1f1566c569e92c->leave($__internal_9f7a20299ef5faae87c6c3959e84ec350f48537e25f019eb9e1f1566c569e92c_prof);

        
        $__internal_c79ac35962f020acd6ef0727ebfd357d72388a6f3a7cd8b4da1a313546179198->leave($__internal_c79ac35962f020acd6ef0727ebfd357d72388a6f3a7cd8b4da1a313546179198_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cf332803482418f957f77753f0501503fff23de9b64fc85954a078edb16317c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf332803482418f957f77753f0501503fff23de9b64fc85954a078edb16317c5->enter($__internal_cf332803482418f957f77753f0501503fff23de9b64fc85954a078edb16317c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_255ea4d198c6bd96bd381afe54091fa4c6ec3829a3d4cfa335021cfa4a0a7397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_255ea4d198c6bd96bd381afe54091fa4c6ec3829a3d4cfa335021cfa4a0a7397->enter($__internal_255ea4d198c6bd96bd381afe54091fa4c6ec3829a3d4cfa335021cfa4a0a7397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_255ea4d198c6bd96bd381afe54091fa4c6ec3829a3d4cfa335021cfa4a0a7397->leave($__internal_255ea4d198c6bd96bd381afe54091fa4c6ec3829a3d4cfa335021cfa4a0a7397_prof);

        
        $__internal_cf332803482418f957f77753f0501503fff23de9b64fc85954a078edb16317c5->leave($__internal_cf332803482418f957f77753f0501503fff23de9b64fc85954a078edb16317c5_prof);

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
