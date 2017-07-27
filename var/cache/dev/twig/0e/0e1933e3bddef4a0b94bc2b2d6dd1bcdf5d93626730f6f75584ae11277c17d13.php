<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_2c39c4421820dc1e8347a29f7666d686f01fcece53858328f2335e0ee7423cc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_39837641bc978c2db4a916017464a34c3abf41d83b5bb6f1502910a92084d523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39837641bc978c2db4a916017464a34c3abf41d83b5bb6f1502910a92084d523->enter($__internal_39837641bc978c2db4a916017464a34c3abf41d83b5bb6f1502910a92084d523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_db6dd1c94f6acde844c27e5f8439e8e484051a28845b00bb71c921dfe9ab7ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6dd1c94f6acde844c27e5f8439e8e484051a28845b00bb71c921dfe9ab7ec7->enter($__internal_db6dd1c94f6acde844c27e5f8439e8e484051a28845b00bb71c921dfe9ab7ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39837641bc978c2db4a916017464a34c3abf41d83b5bb6f1502910a92084d523->leave($__internal_39837641bc978c2db4a916017464a34c3abf41d83b5bb6f1502910a92084d523_prof);

        
        $__internal_db6dd1c94f6acde844c27e5f8439e8e484051a28845b00bb71c921dfe9ab7ec7->leave($__internal_db6dd1c94f6acde844c27e5f8439e8e484051a28845b00bb71c921dfe9ab7ec7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_839bc7fb03286af82fcb2b2464fa78662468f258cb06fefa47cea72701eabda8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_839bc7fb03286af82fcb2b2464fa78662468f258cb06fefa47cea72701eabda8->enter($__internal_839bc7fb03286af82fcb2b2464fa78662468f258cb06fefa47cea72701eabda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_30e3452f5770287fcd6c89d9e522d0ffae1687b00153a2126d4fb03ae599e2c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e3452f5770287fcd6c89d9e522d0ffae1687b00153a2126d4fb03ae599e2c5->enter($__internal_30e3452f5770287fcd6c89d9e522d0ffae1687b00153a2126d4fb03ae599e2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_30e3452f5770287fcd6c89d9e522d0ffae1687b00153a2126d4fb03ae599e2c5->leave($__internal_30e3452f5770287fcd6c89d9e522d0ffae1687b00153a2126d4fb03ae599e2c5_prof);

        
        $__internal_839bc7fb03286af82fcb2b2464fa78662468f258cb06fefa47cea72701eabda8->leave($__internal_839bc7fb03286af82fcb2b2464fa78662468f258cb06fefa47cea72701eabda8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
