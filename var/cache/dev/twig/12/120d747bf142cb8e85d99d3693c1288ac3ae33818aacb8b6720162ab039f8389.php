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
        $__internal_d477d3ff067ec85963198e6bfbe915ff1d9659cbdd7f0057926ae74421ab9569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d477d3ff067ec85963198e6bfbe915ff1d9659cbdd7f0057926ae74421ab9569->enter($__internal_d477d3ff067ec85963198e6bfbe915ff1d9659cbdd7f0057926ae74421ab9569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_c107942fb5c1b870b8272f812d986c2cd46cba46f48ea89599f7cc9046a64e22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c107942fb5c1b870b8272f812d986c2cd46cba46f48ea89599f7cc9046a64e22->enter($__internal_c107942fb5c1b870b8272f812d986c2cd46cba46f48ea89599f7cc9046a64e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d477d3ff067ec85963198e6bfbe915ff1d9659cbdd7f0057926ae74421ab9569->leave($__internal_d477d3ff067ec85963198e6bfbe915ff1d9659cbdd7f0057926ae74421ab9569_prof);

        
        $__internal_c107942fb5c1b870b8272f812d986c2cd46cba46f48ea89599f7cc9046a64e22->leave($__internal_c107942fb5c1b870b8272f812d986c2cd46cba46f48ea89599f7cc9046a64e22_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1d11df688a59c20f1cd7e78d041ec86f8bad9cba587941b0e627a50ea38340fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d11df688a59c20f1cd7e78d041ec86f8bad9cba587941b0e627a50ea38340fb->enter($__internal_1d11df688a59c20f1cd7e78d041ec86f8bad9cba587941b0e627a50ea38340fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5d692fba03590034bf2e252e08b6cf799f5f9395c8fbb20ba9333caab8030ac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d692fba03590034bf2e252e08b6cf799f5f9395c8fbb20ba9333caab8030ac5->enter($__internal_5d692fba03590034bf2e252e08b6cf799f5f9395c8fbb20ba9333caab8030ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5d692fba03590034bf2e252e08b6cf799f5f9395c8fbb20ba9333caab8030ac5->leave($__internal_5d692fba03590034bf2e252e08b6cf799f5f9395c8fbb20ba9333caab8030ac5_prof);

        
        $__internal_1d11df688a59c20f1cd7e78d041ec86f8bad9cba587941b0e627a50ea38340fb->leave($__internal_1d11df688a59c20f1cd7e78d041ec86f8bad9cba587941b0e627a50ea38340fb_prof);

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
