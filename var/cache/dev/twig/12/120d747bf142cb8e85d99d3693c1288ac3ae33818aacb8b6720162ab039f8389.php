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
        $__internal_af82551d7f8175cf9ca8ca659c4cc6bdc211dd2979e5ef92f798e95b759d3d7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af82551d7f8175cf9ca8ca659c4cc6bdc211dd2979e5ef92f798e95b759d3d7b->enter($__internal_af82551d7f8175cf9ca8ca659c4cc6bdc211dd2979e5ef92f798e95b759d3d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_e37b4354a020c569dfdaf2780d32ef7027419daf2f19e89dff4597e669919d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37b4354a020c569dfdaf2780d32ef7027419daf2f19e89dff4597e669919d8e->enter($__internal_e37b4354a020c569dfdaf2780d32ef7027419daf2f19e89dff4597e669919d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_af82551d7f8175cf9ca8ca659c4cc6bdc211dd2979e5ef92f798e95b759d3d7b->leave($__internal_af82551d7f8175cf9ca8ca659c4cc6bdc211dd2979e5ef92f798e95b759d3d7b_prof);

        
        $__internal_e37b4354a020c569dfdaf2780d32ef7027419daf2f19e89dff4597e669919d8e->leave($__internal_e37b4354a020c569dfdaf2780d32ef7027419daf2f19e89dff4597e669919d8e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_15afc335529d96f84dfe2960faab8be91ebff638fdceb95b007bf09b12b4f5d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15afc335529d96f84dfe2960faab8be91ebff638fdceb95b007bf09b12b4f5d2->enter($__internal_15afc335529d96f84dfe2960faab8be91ebff638fdceb95b007bf09b12b4f5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_51082b8f9bfd5fc16698166460a990e481695b965632dad1055be8fb90c21922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51082b8f9bfd5fc16698166460a990e481695b965632dad1055be8fb90c21922->enter($__internal_51082b8f9bfd5fc16698166460a990e481695b965632dad1055be8fb90c21922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_51082b8f9bfd5fc16698166460a990e481695b965632dad1055be8fb90c21922->leave($__internal_51082b8f9bfd5fc16698166460a990e481695b965632dad1055be8fb90c21922_prof);

        
        $__internal_15afc335529d96f84dfe2960faab8be91ebff638fdceb95b007bf09b12b4f5d2->leave($__internal_15afc335529d96f84dfe2960faab8be91ebff638fdceb95b007bf09b12b4f5d2_prof);

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
