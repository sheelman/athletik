<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f8c53001f996025442ffe815cd24038a5ae766c38b20237b25564d8efeba1dfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_faea56d9c945b2d8c3f05efe2744d07c6c71a1c7b3d463b9f739fe381967cec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faea56d9c945b2d8c3f05efe2744d07c6c71a1c7b3d463b9f739fe381967cec6->enter($__internal_faea56d9c945b2d8c3f05efe2744d07c6c71a1c7b3d463b9f739fe381967cec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_5a1543d09cbfbd5ea3257ef282d2bd6d8c6b06325646ec9ea9b0cbcfb5ed6757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1543d09cbfbd5ea3257ef282d2bd6d8c6b06325646ec9ea9b0cbcfb5ed6757->enter($__internal_5a1543d09cbfbd5ea3257ef282d2bd6d8c6b06325646ec9ea9b0cbcfb5ed6757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_faea56d9c945b2d8c3f05efe2744d07c6c71a1c7b3d463b9f739fe381967cec6->leave($__internal_faea56d9c945b2d8c3f05efe2744d07c6c71a1c7b3d463b9f739fe381967cec6_prof);

        
        $__internal_5a1543d09cbfbd5ea3257ef282d2bd6d8c6b06325646ec9ea9b0cbcfb5ed6757->leave($__internal_5a1543d09cbfbd5ea3257ef282d2bd6d8c6b06325646ec9ea9b0cbcfb5ed6757_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9beb03a2777a7b7a92c692401da9a237d642256f8b4516eb818f23fc53fa295c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9beb03a2777a7b7a92c692401da9a237d642256f8b4516eb818f23fc53fa295c->enter($__internal_9beb03a2777a7b7a92c692401da9a237d642256f8b4516eb818f23fc53fa295c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ce3f5dbc6a918e823087d09246ff46e3ae1072b550c1e050976839936f1acba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce3f5dbc6a918e823087d09246ff46e3ae1072b550c1e050976839936f1acba9->enter($__internal_ce3f5dbc6a918e823087d09246ff46e3ae1072b550c1e050976839936f1acba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_ce3f5dbc6a918e823087d09246ff46e3ae1072b550c1e050976839936f1acba9->leave($__internal_ce3f5dbc6a918e823087d09246ff46e3ae1072b550c1e050976839936f1acba9_prof);

        
        $__internal_9beb03a2777a7b7a92c692401da9a237d642256f8b4516eb818f23fc53fa295c->leave($__internal_9beb03a2777a7b7a92c692401da9a237d642256f8b4516eb818f23fc53fa295c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
        return new Twig_Source("{% extends \"default/index.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
