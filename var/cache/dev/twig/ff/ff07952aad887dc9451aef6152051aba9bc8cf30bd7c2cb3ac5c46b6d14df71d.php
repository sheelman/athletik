<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_2c9ad4f1404f05ebfd2e19f1c722221f359290941177d29c1c236ec2741a614d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_249270b09ed2dc8415db55a8220bc018387600d4ee8ef95808e77da0bc2ef4f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_249270b09ed2dc8415db55a8220bc018387600d4ee8ef95808e77da0bc2ef4f5->enter($__internal_249270b09ed2dc8415db55a8220bc018387600d4ee8ef95808e77da0bc2ef4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_98ac87cb844eea363ccdfec27bc1412ac1f6f0a199046a269ac1ad6da309f2a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ac87cb844eea363ccdfec27bc1412ac1f6f0a199046a269ac1ad6da309f2a2->enter($__internal_98ac87cb844eea363ccdfec27bc1412ac1f6f0a199046a269ac1ad6da309f2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_249270b09ed2dc8415db55a8220bc018387600d4ee8ef95808e77da0bc2ef4f5->leave($__internal_249270b09ed2dc8415db55a8220bc018387600d4ee8ef95808e77da0bc2ef4f5_prof);

        
        $__internal_98ac87cb844eea363ccdfec27bc1412ac1f6f0a199046a269ac1ad6da309f2a2->leave($__internal_98ac87cb844eea363ccdfec27bc1412ac1f6f0a199046a269ac1ad6da309f2a2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_af4f95f108f2dd144e553c888c7a7f6560bef1920a2c7953e4c30bde79cdda6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af4f95f108f2dd144e553c888c7a7f6560bef1920a2c7953e4c30bde79cdda6f->enter($__internal_af4f95f108f2dd144e553c888c7a7f6560bef1920a2c7953e4c30bde79cdda6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_570c70b36026d09940e2d7206ee728bb654a1f3d011bcdf3f1b57e4553165004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_570c70b36026d09940e2d7206ee728bb654a1f3d011bcdf3f1b57e4553165004->enter($__internal_570c70b36026d09940e2d7206ee728bb654a1f3d011bcdf3f1b57e4553165004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_570c70b36026d09940e2d7206ee728bb654a1f3d011bcdf3f1b57e4553165004->leave($__internal_570c70b36026d09940e2d7206ee728bb654a1f3d011bcdf3f1b57e4553165004_prof);

        
        $__internal_af4f95f108f2dd144e553c888c7a7f6560bef1920a2c7953e4c30bde79cdda6f->leave($__internal_af4f95f108f2dd144e553c888c7a7f6560bef1920a2c7953e4c30bde79cdda6f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
