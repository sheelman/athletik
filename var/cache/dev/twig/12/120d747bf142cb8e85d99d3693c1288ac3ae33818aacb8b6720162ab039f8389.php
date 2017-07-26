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
        $__internal_11fdc43c505a94e47e95ee503bbd15013f96bc5f278f5ef9f1ca91c2e9a001dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11fdc43c505a94e47e95ee503bbd15013f96bc5f278f5ef9f1ca91c2e9a001dc->enter($__internal_11fdc43c505a94e47e95ee503bbd15013f96bc5f278f5ef9f1ca91c2e9a001dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_43e6d5e73eeee42b50522ea1e166d1ebc945f37124fccf2843eaf57c46d1affd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43e6d5e73eeee42b50522ea1e166d1ebc945f37124fccf2843eaf57c46d1affd->enter($__internal_43e6d5e73eeee42b50522ea1e166d1ebc945f37124fccf2843eaf57c46d1affd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_11fdc43c505a94e47e95ee503bbd15013f96bc5f278f5ef9f1ca91c2e9a001dc->leave($__internal_11fdc43c505a94e47e95ee503bbd15013f96bc5f278f5ef9f1ca91c2e9a001dc_prof);

        
        $__internal_43e6d5e73eeee42b50522ea1e166d1ebc945f37124fccf2843eaf57c46d1affd->leave($__internal_43e6d5e73eeee42b50522ea1e166d1ebc945f37124fccf2843eaf57c46d1affd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7f03e01b1ef17f3cc957b9daa219ad9a9e887353249b2819a30569646eb0cd23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f03e01b1ef17f3cc957b9daa219ad9a9e887353249b2819a30569646eb0cd23->enter($__internal_7f03e01b1ef17f3cc957b9daa219ad9a9e887353249b2819a30569646eb0cd23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8ccdb368f4401d1f8270388591ce429f98a831506fac640493f763711df9372b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ccdb368f4401d1f8270388591ce429f98a831506fac640493f763711df9372b->enter($__internal_8ccdb368f4401d1f8270388591ce429f98a831506fac640493f763711df9372b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8ccdb368f4401d1f8270388591ce429f98a831506fac640493f763711df9372b->leave($__internal_8ccdb368f4401d1f8270388591ce429f98a831506fac640493f763711df9372b_prof);

        
        $__internal_7f03e01b1ef17f3cc957b9daa219ad9a9e887353249b2819a30569646eb0cd23->leave($__internal_7f03e01b1ef17f3cc957b9daa219ad9a9e887353249b2819a30569646eb0cd23_prof);

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
