<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_3d054e7b118a3d0a314b64636218744c7fdf1884da993bef329689c4ec8ac8ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_9111360d36ad9be035d36fad362752e59c671adee7a6455da3b5772903108e4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9111360d36ad9be035d36fad362752e59c671adee7a6455da3b5772903108e4b->enter($__internal_9111360d36ad9be035d36fad362752e59c671adee7a6455da3b5772903108e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_37c521901ffe75108b0555739a6cb2332b5376ba9d8e58880ba414a618b04a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c521901ffe75108b0555739a6cb2332b5376ba9d8e58880ba414a618b04a2b->enter($__internal_37c521901ffe75108b0555739a6cb2332b5376ba9d8e58880ba414a618b04a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9111360d36ad9be035d36fad362752e59c671adee7a6455da3b5772903108e4b->leave($__internal_9111360d36ad9be035d36fad362752e59c671adee7a6455da3b5772903108e4b_prof);

        
        $__internal_37c521901ffe75108b0555739a6cb2332b5376ba9d8e58880ba414a618b04a2b->leave($__internal_37c521901ffe75108b0555739a6cb2332b5376ba9d8e58880ba414a618b04a2b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_515f23bab392ca57f400e055a1877899fcaf8e8e0e8d4619e39f4ddd6b00d9e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_515f23bab392ca57f400e055a1877899fcaf8e8e0e8d4619e39f4ddd6b00d9e4->enter($__internal_515f23bab392ca57f400e055a1877899fcaf8e8e0e8d4619e39f4ddd6b00d9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_df5566920980322cd7605486a72a025ad5c62a157277b7a57fd78b48fd33f989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df5566920980322cd7605486a72a025ad5c62a157277b7a57fd78b48fd33f989->enter($__internal_df5566920980322cd7605486a72a025ad5c62a157277b7a57fd78b48fd33f989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_df5566920980322cd7605486a72a025ad5c62a157277b7a57fd78b48fd33f989->leave($__internal_df5566920980322cd7605486a72a025ad5c62a157277b7a57fd78b48fd33f989_prof);

        
        $__internal_515f23bab392ca57f400e055a1877899fcaf8e8e0e8d4619e39f4ddd6b00d9e4->leave($__internal_515f23bab392ca57f400e055a1877899fcaf8e8e0e8d4619e39f4ddd6b00d9e4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
