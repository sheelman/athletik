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
        $__internal_0e09b2c55a1869212f8704dab7afeb203e9c9eeec97ebf57d9005a756cd61b68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e09b2c55a1869212f8704dab7afeb203e9c9eeec97ebf57d9005a756cd61b68->enter($__internal_0e09b2c55a1869212f8704dab7afeb203e9c9eeec97ebf57d9005a756cd61b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_7111f74102d69f453a18cf3b04eabf42d536f579caee7868583ea08ee34138a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7111f74102d69f453a18cf3b04eabf42d536f579caee7868583ea08ee34138a3->enter($__internal_7111f74102d69f453a18cf3b04eabf42d536f579caee7868583ea08ee34138a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e09b2c55a1869212f8704dab7afeb203e9c9eeec97ebf57d9005a756cd61b68->leave($__internal_0e09b2c55a1869212f8704dab7afeb203e9c9eeec97ebf57d9005a756cd61b68_prof);

        
        $__internal_7111f74102d69f453a18cf3b04eabf42d536f579caee7868583ea08ee34138a3->leave($__internal_7111f74102d69f453a18cf3b04eabf42d536f579caee7868583ea08ee34138a3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b393e18566b71914c37a11cd3895b39bd4f2a3d57818966e915f1ed760ff4236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b393e18566b71914c37a11cd3895b39bd4f2a3d57818966e915f1ed760ff4236->enter($__internal_b393e18566b71914c37a11cd3895b39bd4f2a3d57818966e915f1ed760ff4236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_978a434de98dd7e5b0d46d96c62f3bd76f973355d9d69bc47da89ed52a352990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_978a434de98dd7e5b0d46d96c62f3bd76f973355d9d69bc47da89ed52a352990->enter($__internal_978a434de98dd7e5b0d46d96c62f3bd76f973355d9d69bc47da89ed52a352990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_978a434de98dd7e5b0d46d96c62f3bd76f973355d9d69bc47da89ed52a352990->leave($__internal_978a434de98dd7e5b0d46d96c62f3bd76f973355d9d69bc47da89ed52a352990_prof);

        
        $__internal_b393e18566b71914c37a11cd3895b39bd4f2a3d57818966e915f1ed760ff4236->leave($__internal_b393e18566b71914c37a11cd3895b39bd4f2a3d57818966e915f1ed760ff4236_prof);

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
