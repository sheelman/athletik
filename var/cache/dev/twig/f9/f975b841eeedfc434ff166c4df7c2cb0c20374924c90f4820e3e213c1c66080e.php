<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_de2859ca3238d90e83a7291214aad0e2709ea62674f0a1942384c94ff4afdd1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_e99de09b1660c4f2aa0fd8b35197ec52068b2e23f33bca7290979dff48618b54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e99de09b1660c4f2aa0fd8b35197ec52068b2e23f33bca7290979dff48618b54->enter($__internal_e99de09b1660c4f2aa0fd8b35197ec52068b2e23f33bca7290979dff48618b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_6cdc6fa7d7395cb57334e40a3d2e758b4298b75cf64c2538db5d7dc27695b17f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cdc6fa7d7395cb57334e40a3d2e758b4298b75cf64c2538db5d7dc27695b17f->enter($__internal_6cdc6fa7d7395cb57334e40a3d2e758b4298b75cf64c2538db5d7dc27695b17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e99de09b1660c4f2aa0fd8b35197ec52068b2e23f33bca7290979dff48618b54->leave($__internal_e99de09b1660c4f2aa0fd8b35197ec52068b2e23f33bca7290979dff48618b54_prof);

        
        $__internal_6cdc6fa7d7395cb57334e40a3d2e758b4298b75cf64c2538db5d7dc27695b17f->leave($__internal_6cdc6fa7d7395cb57334e40a3d2e758b4298b75cf64c2538db5d7dc27695b17f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4a3915a99dca36b13348f401c8c4b1b63e1eafd4ae8cba023aca91481f4dde83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a3915a99dca36b13348f401c8c4b1b63e1eafd4ae8cba023aca91481f4dde83->enter($__internal_4a3915a99dca36b13348f401c8c4b1b63e1eafd4ae8cba023aca91481f4dde83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_66785e4617e70c66d931e3482aa21f0eadd9c96f9d4c7822b0bc01787b901c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66785e4617e70c66d931e3482aa21f0eadd9c96f9d4c7822b0bc01787b901c3c->enter($__internal_66785e4617e70c66d931e3482aa21f0eadd9c96f9d4c7822b0bc01787b901c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_66785e4617e70c66d931e3482aa21f0eadd9c96f9d4c7822b0bc01787b901c3c->leave($__internal_66785e4617e70c66d931e3482aa21f0eadd9c96f9d4c7822b0bc01787b901c3c_prof);

        
        $__internal_4a3915a99dca36b13348f401c8c4b1b63e1eafd4ae8cba023aca91481f4dde83->leave($__internal_4a3915a99dca36b13348f401c8c4b1b63e1eafd4ae8cba023aca91481f4dde83_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
