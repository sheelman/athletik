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
        $__internal_79b36b5a654349a542e3949622e74a005000adf2b7590de9603c890418cce880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79b36b5a654349a542e3949622e74a005000adf2b7590de9603c890418cce880->enter($__internal_79b36b5a654349a542e3949622e74a005000adf2b7590de9603c890418cce880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_98d27f04a443982ace1128c81e8e360a90927f7a92885c0014a8f553aa61e979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98d27f04a443982ace1128c81e8e360a90927f7a92885c0014a8f553aa61e979->enter($__internal_98d27f04a443982ace1128c81e8e360a90927f7a92885c0014a8f553aa61e979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79b36b5a654349a542e3949622e74a005000adf2b7590de9603c890418cce880->leave($__internal_79b36b5a654349a542e3949622e74a005000adf2b7590de9603c890418cce880_prof);

        
        $__internal_98d27f04a443982ace1128c81e8e360a90927f7a92885c0014a8f553aa61e979->leave($__internal_98d27f04a443982ace1128c81e8e360a90927f7a92885c0014a8f553aa61e979_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c7ecbd7e11e3ab5d16055400e61874d7661904a387d8c0f515e86513396f3334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7ecbd7e11e3ab5d16055400e61874d7661904a387d8c0f515e86513396f3334->enter($__internal_c7ecbd7e11e3ab5d16055400e61874d7661904a387d8c0f515e86513396f3334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_424189bdcdd6a1c06c13cd664af3aee43adf3951e6792aaf21facdf9da49e188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_424189bdcdd6a1c06c13cd664af3aee43adf3951e6792aaf21facdf9da49e188->enter($__internal_424189bdcdd6a1c06c13cd664af3aee43adf3951e6792aaf21facdf9da49e188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_424189bdcdd6a1c06c13cd664af3aee43adf3951e6792aaf21facdf9da49e188->leave($__internal_424189bdcdd6a1c06c13cd664af3aee43adf3951e6792aaf21facdf9da49e188_prof);

        
        $__internal_c7ecbd7e11e3ab5d16055400e61874d7661904a387d8c0f515e86513396f3334->leave($__internal_c7ecbd7e11e3ab5d16055400e61874d7661904a387d8c0f515e86513396f3334_prof);

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
