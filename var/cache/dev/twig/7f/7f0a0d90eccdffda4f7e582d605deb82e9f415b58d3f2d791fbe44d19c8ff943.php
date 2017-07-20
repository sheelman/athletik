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
        $__internal_188f6db5fa5c674f0243917c35c558ce7602855654d474d9e080dfa7a2aff1be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_188f6db5fa5c674f0243917c35c558ce7602855654d474d9e080dfa7a2aff1be->enter($__internal_188f6db5fa5c674f0243917c35c558ce7602855654d474d9e080dfa7a2aff1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_115afc53c2c207515a4ecff857e83349da4ee2e360b74a95267dd56b18adf185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115afc53c2c207515a4ecff857e83349da4ee2e360b74a95267dd56b18adf185->enter($__internal_115afc53c2c207515a4ecff857e83349da4ee2e360b74a95267dd56b18adf185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_188f6db5fa5c674f0243917c35c558ce7602855654d474d9e080dfa7a2aff1be->leave($__internal_188f6db5fa5c674f0243917c35c558ce7602855654d474d9e080dfa7a2aff1be_prof);

        
        $__internal_115afc53c2c207515a4ecff857e83349da4ee2e360b74a95267dd56b18adf185->leave($__internal_115afc53c2c207515a4ecff857e83349da4ee2e360b74a95267dd56b18adf185_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_93404d980f67f33f74822e28aac39dd7d92a460dd347871077110c3f93ac3c6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93404d980f67f33f74822e28aac39dd7d92a460dd347871077110c3f93ac3c6b->enter($__internal_93404d980f67f33f74822e28aac39dd7d92a460dd347871077110c3f93ac3c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b794505f509c2098cc1ae79b7da63211afb06b67a43ac39a905e5ba933c00fce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b794505f509c2098cc1ae79b7da63211afb06b67a43ac39a905e5ba933c00fce->enter($__internal_b794505f509c2098cc1ae79b7da63211afb06b67a43ac39a905e5ba933c00fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_b794505f509c2098cc1ae79b7da63211afb06b67a43ac39a905e5ba933c00fce->leave($__internal_b794505f509c2098cc1ae79b7da63211afb06b67a43ac39a905e5ba933c00fce_prof);

        
        $__internal_93404d980f67f33f74822e28aac39dd7d92a460dd347871077110c3f93ac3c6b->leave($__internal_93404d980f67f33f74822e28aac39dd7d92a460dd347871077110c3f93ac3c6b_prof);

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
