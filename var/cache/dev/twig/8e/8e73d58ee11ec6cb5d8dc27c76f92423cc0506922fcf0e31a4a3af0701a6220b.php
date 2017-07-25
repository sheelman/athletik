<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_4e540f3812fcd25533c70884c2c679309efa0efa5dc560bb4bbc05c57dfc7ec6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_2f718f504f58eacb36d02481f004ad24302f35abb9d3453589e61ea809992ee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f718f504f58eacb36d02481f004ad24302f35abb9d3453589e61ea809992ee4->enter($__internal_2f718f504f58eacb36d02481f004ad24302f35abb9d3453589e61ea809992ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_fa3ba343f1abc54ce79e6658f4549f6d6a80589af07a38205e3eed13dda84ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa3ba343f1abc54ce79e6658f4549f6d6a80589af07a38205e3eed13dda84ae6->enter($__internal_fa3ba343f1abc54ce79e6658f4549f6d6a80589af07a38205e3eed13dda84ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f718f504f58eacb36d02481f004ad24302f35abb9d3453589e61ea809992ee4->leave($__internal_2f718f504f58eacb36d02481f004ad24302f35abb9d3453589e61ea809992ee4_prof);

        
        $__internal_fa3ba343f1abc54ce79e6658f4549f6d6a80589af07a38205e3eed13dda84ae6->leave($__internal_fa3ba343f1abc54ce79e6658f4549f6d6a80589af07a38205e3eed13dda84ae6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e67d247dd1752d051565489ae2c347ed56691c2dac4b17640017c41caa4b5eda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e67d247dd1752d051565489ae2c347ed56691c2dac4b17640017c41caa4b5eda->enter($__internal_e67d247dd1752d051565489ae2c347ed56691c2dac4b17640017c41caa4b5eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a587509f59e6b131d3e365ea55455c6ca8529cc36e21035900c5bdaa59e75ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a587509f59e6b131d3e365ea55455c6ca8529cc36e21035900c5bdaa59e75ca6->enter($__internal_a587509f59e6b131d3e365ea55455c6ca8529cc36e21035900c5bdaa59e75ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_a587509f59e6b131d3e365ea55455c6ca8529cc36e21035900c5bdaa59e75ca6->leave($__internal_a587509f59e6b131d3e365ea55455c6ca8529cc36e21035900c5bdaa59e75ca6_prof);

        
        $__internal_e67d247dd1752d051565489ae2c347ed56691c2dac4b17640017c41caa4b5eda->leave($__internal_e67d247dd1752d051565489ae2c347ed56691c2dac4b17640017c41caa4b5eda_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
