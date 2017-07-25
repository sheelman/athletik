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
        $__internal_c3b931d826780605a22976b2c72511735ead7919a5feaa09d2fc8c070eece9ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3b931d826780605a22976b2c72511735ead7919a5feaa09d2fc8c070eece9ec->enter($__internal_c3b931d826780605a22976b2c72511735ead7919a5feaa09d2fc8c070eece9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_2b3369d5bd2a89877bbeef42ca25e56e8f194ffc2fb89d75738d356e724cf583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b3369d5bd2a89877bbeef42ca25e56e8f194ffc2fb89d75738d356e724cf583->enter($__internal_2b3369d5bd2a89877bbeef42ca25e56e8f194ffc2fb89d75738d356e724cf583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3b931d826780605a22976b2c72511735ead7919a5feaa09d2fc8c070eece9ec->leave($__internal_c3b931d826780605a22976b2c72511735ead7919a5feaa09d2fc8c070eece9ec_prof);

        
        $__internal_2b3369d5bd2a89877bbeef42ca25e56e8f194ffc2fb89d75738d356e724cf583->leave($__internal_2b3369d5bd2a89877bbeef42ca25e56e8f194ffc2fb89d75738d356e724cf583_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3b32eacfb6b97d2472460ef701b80850da016f886032584c10f5f5db25393490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b32eacfb6b97d2472460ef701b80850da016f886032584c10f5f5db25393490->enter($__internal_3b32eacfb6b97d2472460ef701b80850da016f886032584c10f5f5db25393490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c774954908f571b3719e0ac9c35ea6540997378e45e0a1732d083bd758daf79f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c774954908f571b3719e0ac9c35ea6540997378e45e0a1732d083bd758daf79f->enter($__internal_c774954908f571b3719e0ac9c35ea6540997378e45e0a1732d083bd758daf79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_c774954908f571b3719e0ac9c35ea6540997378e45e0a1732d083bd758daf79f->leave($__internal_c774954908f571b3719e0ac9c35ea6540997378e45e0a1732d083bd758daf79f_prof);

        
        $__internal_3b32eacfb6b97d2472460ef701b80850da016f886032584c10f5f5db25393490->leave($__internal_3b32eacfb6b97d2472460ef701b80850da016f886032584c10f5f5db25393490_prof);

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
