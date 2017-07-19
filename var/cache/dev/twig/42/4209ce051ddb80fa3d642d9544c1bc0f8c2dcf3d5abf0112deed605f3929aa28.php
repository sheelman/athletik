<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_c6d98632d4052ab5d69d8296de4d5a45bccb0c9aad8d3dc088a13097861e3386 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_925ccd488c088cb696290af9f511349780945f6821df00cfc739764597bd5278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_925ccd488c088cb696290af9f511349780945f6821df00cfc739764597bd5278->enter($__internal_925ccd488c088cb696290af9f511349780945f6821df00cfc739764597bd5278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_0c447f8983fe4500db4aea9255553d068ede80be21b6db97375b2c926101d53d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c447f8983fe4500db4aea9255553d068ede80be21b6db97375b2c926101d53d->enter($__internal_0c447f8983fe4500db4aea9255553d068ede80be21b6db97375b2c926101d53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_925ccd488c088cb696290af9f511349780945f6821df00cfc739764597bd5278->leave($__internal_925ccd488c088cb696290af9f511349780945f6821df00cfc739764597bd5278_prof);

        
        $__internal_0c447f8983fe4500db4aea9255553d068ede80be21b6db97375b2c926101d53d->leave($__internal_0c447f8983fe4500db4aea9255553d068ede80be21b6db97375b2c926101d53d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae12ab2e4668729dc99cdb38b00b67016fc4e90b505d98d8cfd5f7f82f5452d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae12ab2e4668729dc99cdb38b00b67016fc4e90b505d98d8cfd5f7f82f5452d0->enter($__internal_ae12ab2e4668729dc99cdb38b00b67016fc4e90b505d98d8cfd5f7f82f5452d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_47e2e6bbdfbd07a1bee3c917b40b71f02a10f04ef4139a2c41b3ce73faa7c257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47e2e6bbdfbd07a1bee3c917b40b71f02a10f04ef4139a2c41b3ce73faa7c257->enter($__internal_47e2e6bbdfbd07a1bee3c917b40b71f02a10f04ef4139a2c41b3ce73faa7c257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_47e2e6bbdfbd07a1bee3c917b40b71f02a10f04ef4139a2c41b3ce73faa7c257->leave($__internal_47e2e6bbdfbd07a1bee3c917b40b71f02a10f04ef4139a2c41b3ce73faa7c257_prof);

        
        $__internal_ae12ab2e4668729dc99cdb38b00b67016fc4e90b505d98d8cfd5f7f82f5452d0->leave($__internal_ae12ab2e4668729dc99cdb38b00b67016fc4e90b505d98d8cfd5f7f82f5452d0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
