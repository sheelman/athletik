<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_4e540f3812fcd25533c70884c2c679309efa0efa5dc560bb4bbc05c57dfc7ec6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8628470de05be7af4e734c29758f25ae3c4c76d706c37e9ec04522cce06dec11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8628470de05be7af4e734c29758f25ae3c4c76d706c37e9ec04522cce06dec11->enter($__internal_8628470de05be7af4e734c29758f25ae3c4c76d706c37e9ec04522cce06dec11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_8b4cd8ce96fb6592fbff4a8881585f1ec6a63b192b0236999759faf5da7d2540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b4cd8ce96fb6592fbff4a8881585f1ec6a63b192b0236999759faf5da7d2540->enter($__internal_8b4cd8ce96fb6592fbff4a8881585f1ec6a63b192b0236999759faf5da7d2540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8628470de05be7af4e734c29758f25ae3c4c76d706c37e9ec04522cce06dec11->leave($__internal_8628470de05be7af4e734c29758f25ae3c4c76d706c37e9ec04522cce06dec11_prof);

        
        $__internal_8b4cd8ce96fb6592fbff4a8881585f1ec6a63b192b0236999759faf5da7d2540->leave($__internal_8b4cd8ce96fb6592fbff4a8881585f1ec6a63b192b0236999759faf5da7d2540_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_26f5b2a544639087354e2d9bde3b98150ea11f473399653e448730f2651851a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26f5b2a544639087354e2d9bde3b98150ea11f473399653e448730f2651851a8->enter($__internal_26f5b2a544639087354e2d9bde3b98150ea11f473399653e448730f2651851a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f1e88ff6bcfbd54545ef84f8629bc3fe099c93703b68995b49d8275fbafa4be1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e88ff6bcfbd54545ef84f8629bc3fe099c93703b68995b49d8275fbafa4be1->enter($__internal_f1e88ff6bcfbd54545ef84f8629bc3fe099c93703b68995b49d8275fbafa4be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_f1e88ff6bcfbd54545ef84f8629bc3fe099c93703b68995b49d8275fbafa4be1->leave($__internal_f1e88ff6bcfbd54545ef84f8629bc3fe099c93703b68995b49d8275fbafa4be1_prof);

        
        $__internal_26f5b2a544639087354e2d9bde3b98150ea11f473399653e448730f2651851a8->leave($__internal_26f5b2a544639087354e2d9bde3b98150ea11f473399653e448730f2651851a8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
