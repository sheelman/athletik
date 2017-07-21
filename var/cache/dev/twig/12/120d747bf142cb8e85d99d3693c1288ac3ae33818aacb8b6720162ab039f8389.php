<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2d53362d5fd36a3d30e2f56b1c274010097ef26b923f47ddb38f1001b86b65b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ecea678633b1f5ceb6382b34c241ca53ec7d4637d570713f47150725b50f343b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecea678633b1f5ceb6382b34c241ca53ec7d4637d570713f47150725b50f343b->enter($__internal_ecea678633b1f5ceb6382b34c241ca53ec7d4637d570713f47150725b50f343b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_792d9f223c935f7f700a723b7efd448182d4af669f807e47e2d0f8faa9eb63f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_792d9f223c935f7f700a723b7efd448182d4af669f807e47e2d0f8faa9eb63f9->enter($__internal_792d9f223c935f7f700a723b7efd448182d4af669f807e47e2d0f8faa9eb63f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ecea678633b1f5ceb6382b34c241ca53ec7d4637d570713f47150725b50f343b->leave($__internal_ecea678633b1f5ceb6382b34c241ca53ec7d4637d570713f47150725b50f343b_prof);

        
        $__internal_792d9f223c935f7f700a723b7efd448182d4af669f807e47e2d0f8faa9eb63f9->leave($__internal_792d9f223c935f7f700a723b7efd448182d4af669f807e47e2d0f8faa9eb63f9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d8385d66c4028490fd97f3f21dd2cb9bd85fc1bd0df823d74e6697bde42f1d56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8385d66c4028490fd97f3f21dd2cb9bd85fc1bd0df823d74e6697bde42f1d56->enter($__internal_d8385d66c4028490fd97f3f21dd2cb9bd85fc1bd0df823d74e6697bde42f1d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_21c40a97e2f60cf6e2d6aa71aefc72b474fdbabc116758da3e503046a3766e98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c40a97e2f60cf6e2d6aa71aefc72b474fdbabc116758da3e503046a3766e98->enter($__internal_21c40a97e2f60cf6e2d6aa71aefc72b474fdbabc116758da3e503046a3766e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_21c40a97e2f60cf6e2d6aa71aefc72b474fdbabc116758da3e503046a3766e98->leave($__internal_21c40a97e2f60cf6e2d6aa71aefc72b474fdbabc116758da3e503046a3766e98_prof);

        
        $__internal_d8385d66c4028490fd97f3f21dd2cb9bd85fc1bd0df823d74e6697bde42f1d56->leave($__internal_d8385d66c4028490fd97f3f21dd2cb9bd85fc1bd0df823d74e6697bde42f1d56_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
