<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_95beef668053696dc4eb9e06df3dc5e3c358e58b637154d9399b55d8d67fff66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_0b05fb731996c030606aa04fbfa2968f730d4fce362c38a018ae9b892c5de6d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b05fb731996c030606aa04fbfa2968f730d4fce362c38a018ae9b892c5de6d7->enter($__internal_0b05fb731996c030606aa04fbfa2968f730d4fce362c38a018ae9b892c5de6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_f63861637737fda4d16da7f13b3c565ef4ce6fa79633f04c927dad7dae09df28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f63861637737fda4d16da7f13b3c565ef4ce6fa79633f04c927dad7dae09df28->enter($__internal_f63861637737fda4d16da7f13b3c565ef4ce6fa79633f04c927dad7dae09df28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b05fb731996c030606aa04fbfa2968f730d4fce362c38a018ae9b892c5de6d7->leave($__internal_0b05fb731996c030606aa04fbfa2968f730d4fce362c38a018ae9b892c5de6d7_prof);

        
        $__internal_f63861637737fda4d16da7f13b3c565ef4ce6fa79633f04c927dad7dae09df28->leave($__internal_f63861637737fda4d16da7f13b3c565ef4ce6fa79633f04c927dad7dae09df28_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f926b7d048245a1c3572c5c06ca9fe13743444e6f73d24865c27b80ee7495293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f926b7d048245a1c3572c5c06ca9fe13743444e6f73d24865c27b80ee7495293->enter($__internal_f926b7d048245a1c3572c5c06ca9fe13743444e6f73d24865c27b80ee7495293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4911419152275e029bb95cca659e557e175a79d48bdc999a529c876a04951fc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4911419152275e029bb95cca659e557e175a79d48bdc999a529c876a04951fc2->enter($__internal_4911419152275e029bb95cca659e557e175a79d48bdc999a529c876a04951fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_4911419152275e029bb95cca659e557e175a79d48bdc999a529c876a04951fc2->leave($__internal_4911419152275e029bb95cca659e557e175a79d48bdc999a529c876a04951fc2_prof);

        
        $__internal_f926b7d048245a1c3572c5c06ca9fe13743444e6f73d24865c27b80ee7495293->leave($__internal_f926b7d048245a1c3572c5c06ca9fe13743444e6f73d24865c27b80ee7495293_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
