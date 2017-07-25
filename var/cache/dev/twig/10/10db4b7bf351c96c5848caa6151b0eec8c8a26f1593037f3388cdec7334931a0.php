<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f8c53001f996025442ffe815cd24038a5ae766c38b20237b25564d8efeba1dfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_e73771f5a67bddda336ec461d18b81ce79559e36d8df27f5e8ad88764fd52162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e73771f5a67bddda336ec461d18b81ce79559e36d8df27f5e8ad88764fd52162->enter($__internal_e73771f5a67bddda336ec461d18b81ce79559e36d8df27f5e8ad88764fd52162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_5091f75e087eaa13d8b3117de67fcde9f72ea3b92a8a0d8e7f217ac168f53839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5091f75e087eaa13d8b3117de67fcde9f72ea3b92a8a0d8e7f217ac168f53839->enter($__internal_5091f75e087eaa13d8b3117de67fcde9f72ea3b92a8a0d8e7f217ac168f53839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e73771f5a67bddda336ec461d18b81ce79559e36d8df27f5e8ad88764fd52162->leave($__internal_e73771f5a67bddda336ec461d18b81ce79559e36d8df27f5e8ad88764fd52162_prof);

        
        $__internal_5091f75e087eaa13d8b3117de67fcde9f72ea3b92a8a0d8e7f217ac168f53839->leave($__internal_5091f75e087eaa13d8b3117de67fcde9f72ea3b92a8a0d8e7f217ac168f53839_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8c9a464558bf32a860c68dd03b0751c5012ba526969562ec3ecee19441e62a16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c9a464558bf32a860c68dd03b0751c5012ba526969562ec3ecee19441e62a16->enter($__internal_8c9a464558bf32a860c68dd03b0751c5012ba526969562ec3ecee19441e62a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_daf4fa87b20d32216924b6859bfb93128d96279200922c4ed531a65635ff8fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daf4fa87b20d32216924b6859bfb93128d96279200922c4ed531a65635ff8fa9->enter($__internal_daf4fa87b20d32216924b6859bfb93128d96279200922c4ed531a65635ff8fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_daf4fa87b20d32216924b6859bfb93128d96279200922c4ed531a65635ff8fa9->leave($__internal_daf4fa87b20d32216924b6859bfb93128d96279200922c4ed531a65635ff8fa9_prof);

        
        $__internal_8c9a464558bf32a860c68dd03b0751c5012ba526969562ec3ecee19441e62a16->leave($__internal_8c9a464558bf32a860c68dd03b0751c5012ba526969562ec3ecee19441e62a16_prof);

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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
