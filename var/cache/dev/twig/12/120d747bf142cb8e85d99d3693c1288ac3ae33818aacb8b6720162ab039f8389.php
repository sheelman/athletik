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
        $__internal_2e7387170fb04f31afe1ef9406411ad45c30e63b006923b3a716af627a101f69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e7387170fb04f31afe1ef9406411ad45c30e63b006923b3a716af627a101f69->enter($__internal_2e7387170fb04f31afe1ef9406411ad45c30e63b006923b3a716af627a101f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_5527afd78ec7fc4e6ce21c214a21c74444e9ae002e580bcad99428e199d4f8a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5527afd78ec7fc4e6ce21c214a21c74444e9ae002e580bcad99428e199d4f8a3->enter($__internal_5527afd78ec7fc4e6ce21c214a21c74444e9ae002e580bcad99428e199d4f8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2e7387170fb04f31afe1ef9406411ad45c30e63b006923b3a716af627a101f69->leave($__internal_2e7387170fb04f31afe1ef9406411ad45c30e63b006923b3a716af627a101f69_prof);

        
        $__internal_5527afd78ec7fc4e6ce21c214a21c74444e9ae002e580bcad99428e199d4f8a3->leave($__internal_5527afd78ec7fc4e6ce21c214a21c74444e9ae002e580bcad99428e199d4f8a3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d907ce660bdf6c5cc8192b03bafccd22a4c9b5130288e0907648fe449b1ea607 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d907ce660bdf6c5cc8192b03bafccd22a4c9b5130288e0907648fe449b1ea607->enter($__internal_d907ce660bdf6c5cc8192b03bafccd22a4c9b5130288e0907648fe449b1ea607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c7008b241af3a8cd7443ce6ef01e905c97025f434260503e29ec0b82afd521b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7008b241af3a8cd7443ce6ef01e905c97025f434260503e29ec0b82afd521b7->enter($__internal_c7008b241af3a8cd7443ce6ef01e905c97025f434260503e29ec0b82afd521b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c7008b241af3a8cd7443ce6ef01e905c97025f434260503e29ec0b82afd521b7->leave($__internal_c7008b241af3a8cd7443ce6ef01e905c97025f434260503e29ec0b82afd521b7_prof);

        
        $__internal_d907ce660bdf6c5cc8192b03bafccd22a4c9b5130288e0907648fe449b1ea607->leave($__internal_d907ce660bdf6c5cc8192b03bafccd22a4c9b5130288e0907648fe449b1ea607_prof);

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
