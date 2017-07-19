<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_f8c53001f996025442ffe815cd24038a5ae766c38b20237b25564d8efeba1dfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_db6539d9492518bbd630f5ceaf719b715b50089a69d5baac9e5ab9b522785736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db6539d9492518bbd630f5ceaf719b715b50089a69d5baac9e5ab9b522785736->enter($__internal_db6539d9492518bbd630f5ceaf719b715b50089a69d5baac9e5ab9b522785736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_7c7a8493cee61979203fa9ab5022384f0dd4021786349c6d8c3e20c388aa2d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c7a8493cee61979203fa9ab5022384f0dd4021786349c6d8c3e20c388aa2d3c->enter($__internal_7c7a8493cee61979203fa9ab5022384f0dd4021786349c6d8c3e20c388aa2d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db6539d9492518bbd630f5ceaf719b715b50089a69d5baac9e5ab9b522785736->leave($__internal_db6539d9492518bbd630f5ceaf719b715b50089a69d5baac9e5ab9b522785736_prof);

        
        $__internal_7c7a8493cee61979203fa9ab5022384f0dd4021786349c6d8c3e20c388aa2d3c->leave($__internal_7c7a8493cee61979203fa9ab5022384f0dd4021786349c6d8c3e20c388aa2d3c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e77698878ca9b1e8cd9feeaedb127fad828b375961f976b8fd79f4c78fce4d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e77698878ca9b1e8cd9feeaedb127fad828b375961f976b8fd79f4c78fce4d2->enter($__internal_3e77698878ca9b1e8cd9feeaedb127fad828b375961f976b8fd79f4c78fce4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_291cc003f79ee2b73168d9caa13c625ca6282a768326eb75c9b271fcdea7d887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_291cc003f79ee2b73168d9caa13c625ca6282a768326eb75c9b271fcdea7d887->enter($__internal_291cc003f79ee2b73168d9caa13c625ca6282a768326eb75c9b271fcdea7d887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_291cc003f79ee2b73168d9caa13c625ca6282a768326eb75c9b271fcdea7d887->leave($__internal_291cc003f79ee2b73168d9caa13c625ca6282a768326eb75c9b271fcdea7d887_prof);

        
        $__internal_3e77698878ca9b1e8cd9feeaedb127fad828b375961f976b8fd79f4c78fce4d2->leave($__internal_3e77698878ca9b1e8cd9feeaedb127fad828b375961f976b8fd79f4c78fce4d2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
", "@FOSUser/Registration/register.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
