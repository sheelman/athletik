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
        $__internal_6f5d843cd027013db418a0bedb36dae5a7353945a2106bc887690d758916f8c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f5d843cd027013db418a0bedb36dae5a7353945a2106bc887690d758916f8c2->enter($__internal_6f5d843cd027013db418a0bedb36dae5a7353945a2106bc887690d758916f8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_5618415d09e92e2e9a8a8007fda4cec709b9d89eda78229be7f1305f5fde6e0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5618415d09e92e2e9a8a8007fda4cec709b9d89eda78229be7f1305f5fde6e0d->enter($__internal_5618415d09e92e2e9a8a8007fda4cec709b9d89eda78229be7f1305f5fde6e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6f5d843cd027013db418a0bedb36dae5a7353945a2106bc887690d758916f8c2->leave($__internal_6f5d843cd027013db418a0bedb36dae5a7353945a2106bc887690d758916f8c2_prof);

        
        $__internal_5618415d09e92e2e9a8a8007fda4cec709b9d89eda78229be7f1305f5fde6e0d->leave($__internal_5618415d09e92e2e9a8a8007fda4cec709b9d89eda78229be7f1305f5fde6e0d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fdb2c2e91e34f540d4f24981d5c2b524da87626e761d1013ad919db21c638819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdb2c2e91e34f540d4f24981d5c2b524da87626e761d1013ad919db21c638819->enter($__internal_fdb2c2e91e34f540d4f24981d5c2b524da87626e761d1013ad919db21c638819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a43c88a09ca44aad5402b19611e5f739fc444da42eeecb67931c6058ae412dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43c88a09ca44aad5402b19611e5f739fc444da42eeecb67931c6058ae412dcb->enter($__internal_a43c88a09ca44aad5402b19611e5f739fc444da42eeecb67931c6058ae412dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a43c88a09ca44aad5402b19611e5f739fc444da42eeecb67931c6058ae412dcb->leave($__internal_a43c88a09ca44aad5402b19611e5f739fc444da42eeecb67931c6058ae412dcb_prof);

        
        $__internal_fdb2c2e91e34f540d4f24981d5c2b524da87626e761d1013ad919db21c638819->leave($__internal_fdb2c2e91e34f540d4f24981d5c2b524da87626e761d1013ad919db21c638819_prof);

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
