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
        $__internal_2d68a374efb10425f43769607aa995121f6d4046f8fcb859aafb2fa1f51ad98c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d68a374efb10425f43769607aa995121f6d4046f8fcb859aafb2fa1f51ad98c->enter($__internal_2d68a374efb10425f43769607aa995121f6d4046f8fcb859aafb2fa1f51ad98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_1dc6d7ee543c520af3cac0121d2f21a393c808ad11d2a182cb2d734a9be08f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc6d7ee543c520af3cac0121d2f21a393c808ad11d2a182cb2d734a9be08f81->enter($__internal_1dc6d7ee543c520af3cac0121d2f21a393c808ad11d2a182cb2d734a9be08f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d68a374efb10425f43769607aa995121f6d4046f8fcb859aafb2fa1f51ad98c->leave($__internal_2d68a374efb10425f43769607aa995121f6d4046f8fcb859aafb2fa1f51ad98c_prof);

        
        $__internal_1dc6d7ee543c520af3cac0121d2f21a393c808ad11d2a182cb2d734a9be08f81->leave($__internal_1dc6d7ee543c520af3cac0121d2f21a393c808ad11d2a182cb2d734a9be08f81_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df12a22ff54f63da7ce27839cd703d953d58d79e202baca315cc340aa46ae577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df12a22ff54f63da7ce27839cd703d953d58d79e202baca315cc340aa46ae577->enter($__internal_df12a22ff54f63da7ce27839cd703d953d58d79e202baca315cc340aa46ae577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_84f3057715879df0d376ef2bd39366ee97c9bd6de13e3f0a467966205827216f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f3057715879df0d376ef2bd39366ee97c9bd6de13e3f0a467966205827216f->enter($__internal_84f3057715879df0d376ef2bd39366ee97c9bd6de13e3f0a467966205827216f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_84f3057715879df0d376ef2bd39366ee97c9bd6de13e3f0a467966205827216f->leave($__internal_84f3057715879df0d376ef2bd39366ee97c9bd6de13e3f0a467966205827216f_prof);

        
        $__internal_df12a22ff54f63da7ce27839cd703d953d58d79e202baca315cc340aa46ae577->leave($__internal_df12a22ff54f63da7ce27839cd703d953d58d79e202baca315cc340aa46ae577_prof);

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
