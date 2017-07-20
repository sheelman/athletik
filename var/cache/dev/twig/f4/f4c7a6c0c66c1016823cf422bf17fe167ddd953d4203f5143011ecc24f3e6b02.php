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
        $__internal_93a63ca1a7b2cb357e67758e4658da830426b45b80db944a02dd456fed1a413d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93a63ca1a7b2cb357e67758e4658da830426b45b80db944a02dd456fed1a413d->enter($__internal_93a63ca1a7b2cb357e67758e4658da830426b45b80db944a02dd456fed1a413d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_23db63300ef96c74852314ea5c9286e6e372109a93be6c0512d861f5ab94e00c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23db63300ef96c74852314ea5c9286e6e372109a93be6c0512d861f5ab94e00c->enter($__internal_23db63300ef96c74852314ea5c9286e6e372109a93be6c0512d861f5ab94e00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93a63ca1a7b2cb357e67758e4658da830426b45b80db944a02dd456fed1a413d->leave($__internal_93a63ca1a7b2cb357e67758e4658da830426b45b80db944a02dd456fed1a413d_prof);

        
        $__internal_23db63300ef96c74852314ea5c9286e6e372109a93be6c0512d861f5ab94e00c->leave($__internal_23db63300ef96c74852314ea5c9286e6e372109a93be6c0512d861f5ab94e00c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_044be341ea5aca646400c091a80642ec2d1ef3b101cf522b66ccb7fcc93dc07b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_044be341ea5aca646400c091a80642ec2d1ef3b101cf522b66ccb7fcc93dc07b->enter($__internal_044be341ea5aca646400c091a80642ec2d1ef3b101cf522b66ccb7fcc93dc07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7788884c530522972e300960e2e30f705a151ad26360d26d23de0f5a00a9f2d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7788884c530522972e300960e2e30f705a151ad26360d26d23de0f5a00a9f2d8->enter($__internal_7788884c530522972e300960e2e30f705a151ad26360d26d23de0f5a00a9f2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_7788884c530522972e300960e2e30f705a151ad26360d26d23de0f5a00a9f2d8->leave($__internal_7788884c530522972e300960e2e30f705a151ad26360d26d23de0f5a00a9f2d8_prof);

        
        $__internal_044be341ea5aca646400c091a80642ec2d1ef3b101cf522b66ccb7fcc93dc07b->leave($__internal_044be341ea5aca646400c091a80642ec2d1ef3b101cf522b66ccb7fcc93dc07b_prof);

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
