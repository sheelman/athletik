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
        $__internal_ac7c2be19b532e060fa49e7fd2f4304cb407c612157db9d8fba1664f952238ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac7c2be19b532e060fa49e7fd2f4304cb407c612157db9d8fba1664f952238ce->enter($__internal_ac7c2be19b532e060fa49e7fd2f4304cb407c612157db9d8fba1664f952238ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_b8c732ee2468a6a3fcd5f253817275bafaff0e65ae0540f7a6837a44629c83ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c732ee2468a6a3fcd5f253817275bafaff0e65ae0540f7a6837a44629c83ac->enter($__internal_b8c732ee2468a6a3fcd5f253817275bafaff0e65ae0540f7a6837a44629c83ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ac7c2be19b532e060fa49e7fd2f4304cb407c612157db9d8fba1664f952238ce->leave($__internal_ac7c2be19b532e060fa49e7fd2f4304cb407c612157db9d8fba1664f952238ce_prof);

        
        $__internal_b8c732ee2468a6a3fcd5f253817275bafaff0e65ae0540f7a6837a44629c83ac->leave($__internal_b8c732ee2468a6a3fcd5f253817275bafaff0e65ae0540f7a6837a44629c83ac_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7d82474352c32ebebfb99e49802a7f22064a94fafc60e9cf0c7b5c121b51debe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d82474352c32ebebfb99e49802a7f22064a94fafc60e9cf0c7b5c121b51debe->enter($__internal_7d82474352c32ebebfb99e49802a7f22064a94fafc60e9cf0c7b5c121b51debe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_15404f08a1ff559b5a82dc6f726294c0394a3f25cdb45cc32e58dd47763a8259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15404f08a1ff559b5a82dc6f726294c0394a3f25cdb45cc32e58dd47763a8259->enter($__internal_15404f08a1ff559b5a82dc6f726294c0394a3f25cdb45cc32e58dd47763a8259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_15404f08a1ff559b5a82dc6f726294c0394a3f25cdb45cc32e58dd47763a8259->leave($__internal_15404f08a1ff559b5a82dc6f726294c0394a3f25cdb45cc32e58dd47763a8259_prof);

        
        $__internal_7d82474352c32ebebfb99e49802a7f22064a94fafc60e9cf0c7b5c121b51debe->leave($__internal_7d82474352c32ebebfb99e49802a7f22064a94fafc60e9cf0c7b5c121b51debe_prof);

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
