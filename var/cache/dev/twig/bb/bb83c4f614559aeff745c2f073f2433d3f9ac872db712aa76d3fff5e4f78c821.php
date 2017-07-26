<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_3b82c32df29cb8437f0bec2cd0de737ae8339e8af7d21a8f808365f7f195251c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_275dd2509577acbef1567185896ebc1a739c261249b33d4c46b896424bd57db0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_275dd2509577acbef1567185896ebc1a739c261249b33d4c46b896424bd57db0->enter($__internal_275dd2509577acbef1567185896ebc1a739c261249b33d4c46b896424bd57db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_8f642a5200831eab9844fa202a01a42480c55dbae51e4419b07e3f0567bf295d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f642a5200831eab9844fa202a01a42480c55dbae51e4419b07e3f0567bf295d->enter($__internal_8f642a5200831eab9844fa202a01a42480c55dbae51e4419b07e3f0567bf295d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_275dd2509577acbef1567185896ebc1a739c261249b33d4c46b896424bd57db0->leave($__internal_275dd2509577acbef1567185896ebc1a739c261249b33d4c46b896424bd57db0_prof);

        
        $__internal_8f642a5200831eab9844fa202a01a42480c55dbae51e4419b07e3f0567bf295d->leave($__internal_8f642a5200831eab9844fa202a01a42480c55dbae51e4419b07e3f0567bf295d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4e66e96696123dd10200c6d5408b72264fa5302c09fcd4091b863e3b9732ea82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e66e96696123dd10200c6d5408b72264fa5302c09fcd4091b863e3b9732ea82->enter($__internal_4e66e96696123dd10200c6d5408b72264fa5302c09fcd4091b863e3b9732ea82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_17085ad685c20fd9bafa0c06d9427aee5189a86d3a88cbac9fc71352202f5b83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17085ad685c20fd9bafa0c06d9427aee5189a86d3a88cbac9fc71352202f5b83->enter($__internal_17085ad685c20fd9bafa0c06d9427aee5189a86d3a88cbac9fc71352202f5b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_17085ad685c20fd9bafa0c06d9427aee5189a86d3a88cbac9fc71352202f5b83->leave($__internal_17085ad685c20fd9bafa0c06d9427aee5189a86d3a88cbac9fc71352202f5b83_prof);

        
        $__internal_4e66e96696123dd10200c6d5408b72264fa5302c09fcd4091b863e3b9732ea82->leave($__internal_4e66e96696123dd10200c6d5408b72264fa5302c09fcd4091b863e3b9732ea82_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
