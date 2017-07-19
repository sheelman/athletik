<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_f423f2843e5d1c0d130d905c1bed80167d69872a5c423eb802e4ec14d12432ea extends Twig_Template
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
        $__internal_221a8025a4b43c119064afe11a1b8695394ec51e6868d091632c3d476ef75569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_221a8025a4b43c119064afe11a1b8695394ec51e6868d091632c3d476ef75569->enter($__internal_221a8025a4b43c119064afe11a1b8695394ec51e6868d091632c3d476ef75569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_ca5f55610b8f5821a4f2a11a1d42c9a5939691da34042f311b51606ad119b924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca5f55610b8f5821a4f2a11a1d42c9a5939691da34042f311b51606ad119b924->enter($__internal_ca5f55610b8f5821a4f2a11a1d42c9a5939691da34042f311b51606ad119b924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_221a8025a4b43c119064afe11a1b8695394ec51e6868d091632c3d476ef75569->leave($__internal_221a8025a4b43c119064afe11a1b8695394ec51e6868d091632c3d476ef75569_prof);

        
        $__internal_ca5f55610b8f5821a4f2a11a1d42c9a5939691da34042f311b51606ad119b924->leave($__internal_ca5f55610b8f5821a4f2a11a1d42c9a5939691da34042f311b51606ad119b924_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f1793fd7e1598ee2995f04ff4b770ebdf2d4b25ab476fa8f9fc3cb377bbc14c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f1793fd7e1598ee2995f04ff4b770ebdf2d4b25ab476fa8f9fc3cb377bbc14c->enter($__internal_3f1793fd7e1598ee2995f04ff4b770ebdf2d4b25ab476fa8f9fc3cb377bbc14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_537441475be5af5bcd6f2679e83d2a6c6da3f836193dc3cd94e65b6feb54b961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_537441475be5af5bcd6f2679e83d2a6c6da3f836193dc3cd94e65b6feb54b961->enter($__internal_537441475be5af5bcd6f2679e83d2a6c6da3f836193dc3cd94e65b6feb54b961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_537441475be5af5bcd6f2679e83d2a6c6da3f836193dc3cd94e65b6feb54b961->leave($__internal_537441475be5af5bcd6f2679e83d2a6c6da3f836193dc3cd94e65b6feb54b961_prof);

        
        $__internal_3f1793fd7e1598ee2995f04ff4b770ebdf2d4b25ab476fa8f9fc3cb377bbc14c->leave($__internal_3f1793fd7e1598ee2995f04ff4b770ebdf2d4b25ab476fa8f9fc3cb377bbc14c_prof);

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
", "FOSUserBundle:Resetting:request.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
