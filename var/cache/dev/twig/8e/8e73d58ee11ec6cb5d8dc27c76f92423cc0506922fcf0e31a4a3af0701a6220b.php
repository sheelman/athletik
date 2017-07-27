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
        $__internal_5c3f3b14e66efdf1c1cfdbcdb117a10273e2726356546ced689b7a1a779d04fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c3f3b14e66efdf1c1cfdbcdb117a10273e2726356546ced689b7a1a779d04fe->enter($__internal_5c3f3b14e66efdf1c1cfdbcdb117a10273e2726356546ced689b7a1a779d04fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_043335e8fff6a5eff7873b5ff5ed6d22dd96483eafab93810bb24077197ec7ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_043335e8fff6a5eff7873b5ff5ed6d22dd96483eafab93810bb24077197ec7ed->enter($__internal_043335e8fff6a5eff7873b5ff5ed6d22dd96483eafab93810bb24077197ec7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c3f3b14e66efdf1c1cfdbcdb117a10273e2726356546ced689b7a1a779d04fe->leave($__internal_5c3f3b14e66efdf1c1cfdbcdb117a10273e2726356546ced689b7a1a779d04fe_prof);

        
        $__internal_043335e8fff6a5eff7873b5ff5ed6d22dd96483eafab93810bb24077197ec7ed->leave($__internal_043335e8fff6a5eff7873b5ff5ed6d22dd96483eafab93810bb24077197ec7ed_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2d51a2f18ac2ce5fe563e6632a1f6293d6a8fd5fe9b1088f3041c2fb67c50935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d51a2f18ac2ce5fe563e6632a1f6293d6a8fd5fe9b1088f3041c2fb67c50935->enter($__internal_2d51a2f18ac2ce5fe563e6632a1f6293d6a8fd5fe9b1088f3041c2fb67c50935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0da61ea5e00da8ad84057a6fdb1f2fb47b731fb3447707cd453116481ad40126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da61ea5e00da8ad84057a6fdb1f2fb47b731fb3447707cd453116481ad40126->enter($__internal_0da61ea5e00da8ad84057a6fdb1f2fb47b731fb3447707cd453116481ad40126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_0da61ea5e00da8ad84057a6fdb1f2fb47b731fb3447707cd453116481ad40126->leave($__internal_0da61ea5e00da8ad84057a6fdb1f2fb47b731fb3447707cd453116481ad40126_prof);

        
        $__internal_2d51a2f18ac2ce5fe563e6632a1f6293d6a8fd5fe9b1088f3041c2fb67c50935->leave($__internal_2d51a2f18ac2ce5fe563e6632a1f6293d6a8fd5fe9b1088f3041c2fb67c50935_prof);

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
