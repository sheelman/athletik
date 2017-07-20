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
        $__internal_08df3d5c0598eb8a4a88349de93d20d35aa8f6c4d9662a09990d34d7bcd3f133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08df3d5c0598eb8a4a88349de93d20d35aa8f6c4d9662a09990d34d7bcd3f133->enter($__internal_08df3d5c0598eb8a4a88349de93d20d35aa8f6c4d9662a09990d34d7bcd3f133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_2381cf9db85ae84f95839cc71d7dd0997a2be5f3f5d872fffbacf55d57492a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2381cf9db85ae84f95839cc71d7dd0997a2be5f3f5d872fffbacf55d57492a6d->enter($__internal_2381cf9db85ae84f95839cc71d7dd0997a2be5f3f5d872fffbacf55d57492a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_08df3d5c0598eb8a4a88349de93d20d35aa8f6c4d9662a09990d34d7bcd3f133->leave($__internal_08df3d5c0598eb8a4a88349de93d20d35aa8f6c4d9662a09990d34d7bcd3f133_prof);

        
        $__internal_2381cf9db85ae84f95839cc71d7dd0997a2be5f3f5d872fffbacf55d57492a6d->leave($__internal_2381cf9db85ae84f95839cc71d7dd0997a2be5f3f5d872fffbacf55d57492a6d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e5d03d2f0e58437b4c742a1c041d643ff8c2e118c56eaee93fb21cbf4e265756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5d03d2f0e58437b4c742a1c041d643ff8c2e118c56eaee93fb21cbf4e265756->enter($__internal_e5d03d2f0e58437b4c742a1c041d643ff8c2e118c56eaee93fb21cbf4e265756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fac6714517012b75fd230ace194095108290e0cf83dd4873db5dd3342f1874d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac6714517012b75fd230ace194095108290e0cf83dd4873db5dd3342f1874d2->enter($__internal_fac6714517012b75fd230ace194095108290e0cf83dd4873db5dd3342f1874d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fac6714517012b75fd230ace194095108290e0cf83dd4873db5dd3342f1874d2->leave($__internal_fac6714517012b75fd230ace194095108290e0cf83dd4873db5dd3342f1874d2_prof);

        
        $__internal_e5d03d2f0e58437b4c742a1c041d643ff8c2e118c56eaee93fb21cbf4e265756->leave($__internal_e5d03d2f0e58437b4c742a1c041d643ff8c2e118c56eaee93fb21cbf4e265756_prof);

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
