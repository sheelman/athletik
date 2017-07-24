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
        $__internal_cba6412c797ee12a0001131fafb23a9556c957c9e49620f736ddd9f46b34ab8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cba6412c797ee12a0001131fafb23a9556c957c9e49620f736ddd9f46b34ab8c->enter($__internal_cba6412c797ee12a0001131fafb23a9556c957c9e49620f736ddd9f46b34ab8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_9acd05879a35e2073bd15a058c2b04ce8e61008fdb566bea96ed4e586b56227c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9acd05879a35e2073bd15a058c2b04ce8e61008fdb566bea96ed4e586b56227c->enter($__internal_9acd05879a35e2073bd15a058c2b04ce8e61008fdb566bea96ed4e586b56227c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cba6412c797ee12a0001131fafb23a9556c957c9e49620f736ddd9f46b34ab8c->leave($__internal_cba6412c797ee12a0001131fafb23a9556c957c9e49620f736ddd9f46b34ab8c_prof);

        
        $__internal_9acd05879a35e2073bd15a058c2b04ce8e61008fdb566bea96ed4e586b56227c->leave($__internal_9acd05879a35e2073bd15a058c2b04ce8e61008fdb566bea96ed4e586b56227c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_95bea6bd1b9f39cb9f1b390e2bc53e3eb6cfa1b648a0a5e464a3422ffec79518 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95bea6bd1b9f39cb9f1b390e2bc53e3eb6cfa1b648a0a5e464a3422ffec79518->enter($__internal_95bea6bd1b9f39cb9f1b390e2bc53e3eb6cfa1b648a0a5e464a3422ffec79518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8cdaed773b9fa0079f27f9739a633229bf53751ecee04e1aba78edf96f5c0932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cdaed773b9fa0079f27f9739a633229bf53751ecee04e1aba78edf96f5c0932->enter($__internal_8cdaed773b9fa0079f27f9739a633229bf53751ecee04e1aba78edf96f5c0932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_8cdaed773b9fa0079f27f9739a633229bf53751ecee04e1aba78edf96f5c0932->leave($__internal_8cdaed773b9fa0079f27f9739a633229bf53751ecee04e1aba78edf96f5c0932_prof);

        
        $__internal_95bea6bd1b9f39cb9f1b390e2bc53e3eb6cfa1b648a0a5e464a3422ffec79518->leave($__internal_95bea6bd1b9f39cb9f1b390e2bc53e3eb6cfa1b648a0a5e464a3422ffec79518_prof);

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
