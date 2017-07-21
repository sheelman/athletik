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
        $__internal_34bd1d992c4568a6d5298dfe82cdd6f88ff4d7b3611cea2d2cf43130e5ae7160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34bd1d992c4568a6d5298dfe82cdd6f88ff4d7b3611cea2d2cf43130e5ae7160->enter($__internal_34bd1d992c4568a6d5298dfe82cdd6f88ff4d7b3611cea2d2cf43130e5ae7160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_8456f761771efc70d2cc17e6f8f74f9f9825d6b97a74de8a0c5533e141ef3751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8456f761771efc70d2cc17e6f8f74f9f9825d6b97a74de8a0c5533e141ef3751->enter($__internal_8456f761771efc70d2cc17e6f8f74f9f9825d6b97a74de8a0c5533e141ef3751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34bd1d992c4568a6d5298dfe82cdd6f88ff4d7b3611cea2d2cf43130e5ae7160->leave($__internal_34bd1d992c4568a6d5298dfe82cdd6f88ff4d7b3611cea2d2cf43130e5ae7160_prof);

        
        $__internal_8456f761771efc70d2cc17e6f8f74f9f9825d6b97a74de8a0c5533e141ef3751->leave($__internal_8456f761771efc70d2cc17e6f8f74f9f9825d6b97a74de8a0c5533e141ef3751_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae98534f9cecfb88ce082a407ec93193dd9890247564a0d6bf2b0eab2ea0e06a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae98534f9cecfb88ce082a407ec93193dd9890247564a0d6bf2b0eab2ea0e06a->enter($__internal_ae98534f9cecfb88ce082a407ec93193dd9890247564a0d6bf2b0eab2ea0e06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_eb4b4ab0b2c5c39d1663755bc84140f3d6903bcde67e0d7faa6cf9b3112cccf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb4b4ab0b2c5c39d1663755bc84140f3d6903bcde67e0d7faa6cf9b3112cccf7->enter($__internal_eb4b4ab0b2c5c39d1663755bc84140f3d6903bcde67e0d7faa6cf9b3112cccf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_eb4b4ab0b2c5c39d1663755bc84140f3d6903bcde67e0d7faa6cf9b3112cccf7->leave($__internal_eb4b4ab0b2c5c39d1663755bc84140f3d6903bcde67e0d7faa6cf9b3112cccf7_prof);

        
        $__internal_ae98534f9cecfb88ce082a407ec93193dd9890247564a0d6bf2b0eab2ea0e06a->leave($__internal_ae98534f9cecfb88ce082a407ec93193dd9890247564a0d6bf2b0eab2ea0e06a_prof);

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
