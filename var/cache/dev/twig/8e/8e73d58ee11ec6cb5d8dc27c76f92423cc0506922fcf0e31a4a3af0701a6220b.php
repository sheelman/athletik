<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_4e540f3812fcd25533c70884c2c679309efa0efa5dc560bb4bbc05c57dfc7ec6 extends Twig_Template
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
        $__internal_4a149cb7a5ee92ddc5f44b049ffbe0ae42563f0a9ddcd046476cf0561623fa59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a149cb7a5ee92ddc5f44b049ffbe0ae42563f0a9ddcd046476cf0561623fa59->enter($__internal_4a149cb7a5ee92ddc5f44b049ffbe0ae42563f0a9ddcd046476cf0561623fa59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_c8583d913e11952fe1e00e5b38253712cb1df7210805b18422ca7e66c15cdbb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8583d913e11952fe1e00e5b38253712cb1df7210805b18422ca7e66c15cdbb9->enter($__internal_c8583d913e11952fe1e00e5b38253712cb1df7210805b18422ca7e66c15cdbb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a149cb7a5ee92ddc5f44b049ffbe0ae42563f0a9ddcd046476cf0561623fa59->leave($__internal_4a149cb7a5ee92ddc5f44b049ffbe0ae42563f0a9ddcd046476cf0561623fa59_prof);

        
        $__internal_c8583d913e11952fe1e00e5b38253712cb1df7210805b18422ca7e66c15cdbb9->leave($__internal_c8583d913e11952fe1e00e5b38253712cb1df7210805b18422ca7e66c15cdbb9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_af91f076a882f40a86e29632d403cde2f338dd5d151d859dc301d4a1e5c39dbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af91f076a882f40a86e29632d403cde2f338dd5d151d859dc301d4a1e5c39dbc->enter($__internal_af91f076a882f40a86e29632d403cde2f338dd5d151d859dc301d4a1e5c39dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cb2711dd61d4d199a5a2e356261d1f1d2d615ef5a8d4c61fa0a2bb72dead6d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb2711dd61d4d199a5a2e356261d1f1d2d615ef5a8d4c61fa0a2bb72dead6d18->enter($__internal_cb2711dd61d4d199a5a2e356261d1f1d2d615ef5a8d4c61fa0a2bb72dead6d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_cb2711dd61d4d199a5a2e356261d1f1d2d615ef5a8d4c61fa0a2bb72dead6d18->leave($__internal_cb2711dd61d4d199a5a2e356261d1f1d2d615ef5a8d4c61fa0a2bb72dead6d18_prof);

        
        $__internal_af91f076a882f40a86e29632d403cde2f338dd5d151d859dc301d4a1e5c39dbc->leave($__internal_af91f076a882f40a86e29632d403cde2f338dd5d151d859dc301d4a1e5c39dbc_prof);

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
", "FOSUserBundle:Resetting:request.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
