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
        $__internal_5036a1f0c788757334a74e7f082ce1fdcf1acbddddb21ad53e88af6d6dfd90ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5036a1f0c788757334a74e7f082ce1fdcf1acbddddb21ad53e88af6d6dfd90ac->enter($__internal_5036a1f0c788757334a74e7f082ce1fdcf1acbddddb21ad53e88af6d6dfd90ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_e7db4c52eca369925295354684fee802b0af92df4cc6115a1a08f3d38320fcf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7db4c52eca369925295354684fee802b0af92df4cc6115a1a08f3d38320fcf7->enter($__internal_e7db4c52eca369925295354684fee802b0af92df4cc6115a1a08f3d38320fcf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5036a1f0c788757334a74e7f082ce1fdcf1acbddddb21ad53e88af6d6dfd90ac->leave($__internal_5036a1f0c788757334a74e7f082ce1fdcf1acbddddb21ad53e88af6d6dfd90ac_prof);

        
        $__internal_e7db4c52eca369925295354684fee802b0af92df4cc6115a1a08f3d38320fcf7->leave($__internal_e7db4c52eca369925295354684fee802b0af92df4cc6115a1a08f3d38320fcf7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a023e7b26e7c5d627d79a2581cc121f9c8e4e7cdf06592cb9e4dc1eec4e1389b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a023e7b26e7c5d627d79a2581cc121f9c8e4e7cdf06592cb9e4dc1eec4e1389b->enter($__internal_a023e7b26e7c5d627d79a2581cc121f9c8e4e7cdf06592cb9e4dc1eec4e1389b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ce0b98cecd97c23ac2a5d5eb9889c2f92a33e95812f42f27e21a7f1f970f1fbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce0b98cecd97c23ac2a5d5eb9889c2f92a33e95812f42f27e21a7f1f970f1fbf->enter($__internal_ce0b98cecd97c23ac2a5d5eb9889c2f92a33e95812f42f27e21a7f1f970f1fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ce0b98cecd97c23ac2a5d5eb9889c2f92a33e95812f42f27e21a7f1f970f1fbf->leave($__internal_ce0b98cecd97c23ac2a5d5eb9889c2f92a33e95812f42f27e21a7f1f970f1fbf_prof);

        
        $__internal_a023e7b26e7c5d627d79a2581cc121f9c8e4e7cdf06592cb9e4dc1eec4e1389b->leave($__internal_a023e7b26e7c5d627d79a2581cc121f9c8e4e7cdf06592cb9e4dc1eec4e1389b_prof);

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
