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
        $__internal_48279a4bceac6e5c4c0b4b10aa98dc3f498e2649c4a2a842c92949c8c1b27af7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48279a4bceac6e5c4c0b4b10aa98dc3f498e2649c4a2a842c92949c8c1b27af7->enter($__internal_48279a4bceac6e5c4c0b4b10aa98dc3f498e2649c4a2a842c92949c8c1b27af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_1b62893f137edd86a79ba5aa86b3ad0bd56e9bb25691614a8a5b8d5afaa4e3d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b62893f137edd86a79ba5aa86b3ad0bd56e9bb25691614a8a5b8d5afaa4e3d4->enter($__internal_1b62893f137edd86a79ba5aa86b3ad0bd56e9bb25691614a8a5b8d5afaa4e3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48279a4bceac6e5c4c0b4b10aa98dc3f498e2649c4a2a842c92949c8c1b27af7->leave($__internal_48279a4bceac6e5c4c0b4b10aa98dc3f498e2649c4a2a842c92949c8c1b27af7_prof);

        
        $__internal_1b62893f137edd86a79ba5aa86b3ad0bd56e9bb25691614a8a5b8d5afaa4e3d4->leave($__internal_1b62893f137edd86a79ba5aa86b3ad0bd56e9bb25691614a8a5b8d5afaa4e3d4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e539221d829c474a9d723e171b5302619dac8a42a8f2bd3eb7261f5aba13f1b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e539221d829c474a9d723e171b5302619dac8a42a8f2bd3eb7261f5aba13f1b9->enter($__internal_e539221d829c474a9d723e171b5302619dac8a42a8f2bd3eb7261f5aba13f1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c67cbcd184f555e4d111d138825c0e71cc96127333c416bfdb7b54ea32574d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67cbcd184f555e4d111d138825c0e71cc96127333c416bfdb7b54ea32574d25->enter($__internal_c67cbcd184f555e4d111d138825c0e71cc96127333c416bfdb7b54ea32574d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_c67cbcd184f555e4d111d138825c0e71cc96127333c416bfdb7b54ea32574d25->leave($__internal_c67cbcd184f555e4d111d138825c0e71cc96127333c416bfdb7b54ea32574d25_prof);

        
        $__internal_e539221d829c474a9d723e171b5302619dac8a42a8f2bd3eb7261f5aba13f1b9->leave($__internal_e539221d829c474a9d723e171b5302619dac8a42a8f2bd3eb7261f5aba13f1b9_prof);

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
