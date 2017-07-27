<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_b97e0ee1936e42308c1b4cfc21d9ef7863adb5aa2609b6acfe380cb3592098d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_8b479bfaa8e78ba80adafd8eb9850c26a8e9392327d8e4a8d1d7c932654af7d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b479bfaa8e78ba80adafd8eb9850c26a8e9392327d8e4a8d1d7c932654af7d8->enter($__internal_8b479bfaa8e78ba80adafd8eb9850c26a8e9392327d8e4a8d1d7c932654af7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_16b3cd3d8606201a1895b7747b315c288e7cac85f5110643a5524802eb4b3f4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b3cd3d8606201a1895b7747b315c288e7cac85f5110643a5524802eb4b3f4b->enter($__internal_16b3cd3d8606201a1895b7747b315c288e7cac85f5110643a5524802eb4b3f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b479bfaa8e78ba80adafd8eb9850c26a8e9392327d8e4a8d1d7c932654af7d8->leave($__internal_8b479bfaa8e78ba80adafd8eb9850c26a8e9392327d8e4a8d1d7c932654af7d8_prof);

        
        $__internal_16b3cd3d8606201a1895b7747b315c288e7cac85f5110643a5524802eb4b3f4b->leave($__internal_16b3cd3d8606201a1895b7747b315c288e7cac85f5110643a5524802eb4b3f4b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_09ab71734666f2dfa7f4389101859954a0a0207c7bc8963313ff661ae7e4690c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09ab71734666f2dfa7f4389101859954a0a0207c7bc8963313ff661ae7e4690c->enter($__internal_09ab71734666f2dfa7f4389101859954a0a0207c7bc8963313ff661ae7e4690c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b15ad611cc2614f995b27d98495e9120e0cd2399771cf6643d7b44503367e165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b15ad611cc2614f995b27d98495e9120e0cd2399771cf6643d7b44503367e165->enter($__internal_b15ad611cc2614f995b27d98495e9120e0cd2399771cf6643d7b44503367e165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_b15ad611cc2614f995b27d98495e9120e0cd2399771cf6643d7b44503367e165->leave($__internal_b15ad611cc2614f995b27d98495e9120e0cd2399771cf6643d7b44503367e165_prof);

        
        $__internal_09ab71734666f2dfa7f4389101859954a0a0207c7bc8963313ff661ae7e4690c->leave($__internal_09ab71734666f2dfa7f4389101859954a0a0207c7bc8963313ff661ae7e4690c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
