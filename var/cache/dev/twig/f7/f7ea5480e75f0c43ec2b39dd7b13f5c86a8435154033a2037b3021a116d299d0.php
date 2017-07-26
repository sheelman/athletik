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
        $__internal_ec5a14087ca9e4e70a0f6dac31fd2d6ab7c1e2de3e608710faedc2f997f82a71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec5a14087ca9e4e70a0f6dac31fd2d6ab7c1e2de3e608710faedc2f997f82a71->enter($__internal_ec5a14087ca9e4e70a0f6dac31fd2d6ab7c1e2de3e608710faedc2f997f82a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_6c6e61a392ec76b7e90c5e01c02a6a57201db07f5effa3f28adc71c425daad8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c6e61a392ec76b7e90c5e01c02a6a57201db07f5effa3f28adc71c425daad8d->enter($__internal_6c6e61a392ec76b7e90c5e01c02a6a57201db07f5effa3f28adc71c425daad8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec5a14087ca9e4e70a0f6dac31fd2d6ab7c1e2de3e608710faedc2f997f82a71->leave($__internal_ec5a14087ca9e4e70a0f6dac31fd2d6ab7c1e2de3e608710faedc2f997f82a71_prof);

        
        $__internal_6c6e61a392ec76b7e90c5e01c02a6a57201db07f5effa3f28adc71c425daad8d->leave($__internal_6c6e61a392ec76b7e90c5e01c02a6a57201db07f5effa3f28adc71c425daad8d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9bac11758c397b0fc1449fe18cbdd5bb8a50deb93dde722740b9b967ac4b5b35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bac11758c397b0fc1449fe18cbdd5bb8a50deb93dde722740b9b967ac4b5b35->enter($__internal_9bac11758c397b0fc1449fe18cbdd5bb8a50deb93dde722740b9b967ac4b5b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_435ba4f1124cd6f27ce5b15f0a87ae8ac44fdf02389dfc87a15378e3d92b745a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_435ba4f1124cd6f27ce5b15f0a87ae8ac44fdf02389dfc87a15378e3d92b745a->enter($__internal_435ba4f1124cd6f27ce5b15f0a87ae8ac44fdf02389dfc87a15378e3d92b745a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_435ba4f1124cd6f27ce5b15f0a87ae8ac44fdf02389dfc87a15378e3d92b745a->leave($__internal_435ba4f1124cd6f27ce5b15f0a87ae8ac44fdf02389dfc87a15378e3d92b745a_prof);

        
        $__internal_9bac11758c397b0fc1449fe18cbdd5bb8a50deb93dde722740b9b967ac4b5b35->leave($__internal_9bac11758c397b0fc1449fe18cbdd5bb8a50deb93dde722740b9b967ac4b5b35_prof);

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
