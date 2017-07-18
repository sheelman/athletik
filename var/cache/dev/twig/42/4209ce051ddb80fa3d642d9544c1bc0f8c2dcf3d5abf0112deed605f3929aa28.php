<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_c6d98632d4052ab5d69d8296de4d5a45bccb0c9aad8d3dc088a13097861e3386 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_0aaf7fadabb68e9c7d9f20776939b357ba2692d0f661a17307bc5bfbe23283d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aaf7fadabb68e9c7d9f20776939b357ba2692d0f661a17307bc5bfbe23283d8->enter($__internal_0aaf7fadabb68e9c7d9f20776939b357ba2692d0f661a17307bc5bfbe23283d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_6182cf31f32470af310f3f49dc0d8466ddd0d0a50e68a92d5dad4a69caff11a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6182cf31f32470af310f3f49dc0d8466ddd0d0a50e68a92d5dad4a69caff11a3->enter($__internal_6182cf31f32470af310f3f49dc0d8466ddd0d0a50e68a92d5dad4a69caff11a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0aaf7fadabb68e9c7d9f20776939b357ba2692d0f661a17307bc5bfbe23283d8->leave($__internal_0aaf7fadabb68e9c7d9f20776939b357ba2692d0f661a17307bc5bfbe23283d8_prof);

        
        $__internal_6182cf31f32470af310f3f49dc0d8466ddd0d0a50e68a92d5dad4a69caff11a3->leave($__internal_6182cf31f32470af310f3f49dc0d8466ddd0d0a50e68a92d5dad4a69caff11a3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_501cd82663800fbdd0e7f91c0b5ff10d506aca9dda9aae3349bdb5d56eaa086e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_501cd82663800fbdd0e7f91c0b5ff10d506aca9dda9aae3349bdb5d56eaa086e->enter($__internal_501cd82663800fbdd0e7f91c0b5ff10d506aca9dda9aae3349bdb5d56eaa086e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2bd0e7458f529e073575b4ad392c67d1c73c41ed94690907f4a218603c4a44a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bd0e7458f529e073575b4ad392c67d1c73c41ed94690907f4a218603c4a44a5->enter($__internal_2bd0e7458f529e073575b4ad392c67d1c73c41ed94690907f4a218603c4a44a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_2bd0e7458f529e073575b4ad392c67d1c73c41ed94690907f4a218603c4a44a5->leave($__internal_2bd0e7458f529e073575b4ad392c67d1c73c41ed94690907f4a218603c4a44a5_prof);

        
        $__internal_501cd82663800fbdd0e7f91c0b5ff10d506aca9dda9aae3349bdb5d56eaa086e->leave($__internal_501cd82663800fbdd0e7f91c0b5ff10d506aca9dda9aae3349bdb5d56eaa086e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
