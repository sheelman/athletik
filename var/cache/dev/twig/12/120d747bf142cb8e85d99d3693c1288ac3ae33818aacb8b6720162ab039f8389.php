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
        $__internal_084dc036205862bb92c26ffb989b9c3ebd8a531f1935390258aa85d079f0f77b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_084dc036205862bb92c26ffb989b9c3ebd8a531f1935390258aa85d079f0f77b->enter($__internal_084dc036205862bb92c26ffb989b9c3ebd8a531f1935390258aa85d079f0f77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_b2b97a0fe3b860e305881ee762572ce3179259894809e2e993cd61c7b664f160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2b97a0fe3b860e305881ee762572ce3179259894809e2e993cd61c7b664f160->enter($__internal_b2b97a0fe3b860e305881ee762572ce3179259894809e2e993cd61c7b664f160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_084dc036205862bb92c26ffb989b9c3ebd8a531f1935390258aa85d079f0f77b->leave($__internal_084dc036205862bb92c26ffb989b9c3ebd8a531f1935390258aa85d079f0f77b_prof);

        
        $__internal_b2b97a0fe3b860e305881ee762572ce3179259894809e2e993cd61c7b664f160->leave($__internal_b2b97a0fe3b860e305881ee762572ce3179259894809e2e993cd61c7b664f160_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_115ab6bb146922d10f617a0bb2003d64daf2359d1349ea2dea16e0169f69fc47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_115ab6bb146922d10f617a0bb2003d64daf2359d1349ea2dea16e0169f69fc47->enter($__internal_115ab6bb146922d10f617a0bb2003d64daf2359d1349ea2dea16e0169f69fc47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e54aa517de6706c26100f1db339b8373b8d91049622f3b19dc714be1ac9e61f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e54aa517de6706c26100f1db339b8373b8d91049622f3b19dc714be1ac9e61f5->enter($__internal_e54aa517de6706c26100f1db339b8373b8d91049622f3b19dc714be1ac9e61f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e54aa517de6706c26100f1db339b8373b8d91049622f3b19dc714be1ac9e61f5->leave($__internal_e54aa517de6706c26100f1db339b8373b8d91049622f3b19dc714be1ac9e61f5_prof);

        
        $__internal_115ab6bb146922d10f617a0bb2003d64daf2359d1349ea2dea16e0169f69fc47->leave($__internal_115ab6bb146922d10f617a0bb2003d64daf2359d1349ea2dea16e0169f69fc47_prof);

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
