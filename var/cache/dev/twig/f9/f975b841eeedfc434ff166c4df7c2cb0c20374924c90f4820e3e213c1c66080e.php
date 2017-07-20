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
        $__internal_a1045d205475a5e208bdb39125c1a05df808f233054481aac5ba0c2a47c6d236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1045d205475a5e208bdb39125c1a05df808f233054481aac5ba0c2a47c6d236->enter($__internal_a1045d205475a5e208bdb39125c1a05df808f233054481aac5ba0c2a47c6d236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_2ae188890f788402dba17dd85b9766a5958851265a57f83eac050d4c77240b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ae188890f788402dba17dd85b9766a5958851265a57f83eac050d4c77240b4b->enter($__internal_2ae188890f788402dba17dd85b9766a5958851265a57f83eac050d4c77240b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1045d205475a5e208bdb39125c1a05df808f233054481aac5ba0c2a47c6d236->leave($__internal_a1045d205475a5e208bdb39125c1a05df808f233054481aac5ba0c2a47c6d236_prof);

        
        $__internal_2ae188890f788402dba17dd85b9766a5958851265a57f83eac050d4c77240b4b->leave($__internal_2ae188890f788402dba17dd85b9766a5958851265a57f83eac050d4c77240b4b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b23e65a5df408c25bd8255875bfb0a4a9af5992b216e0c18bd01bdf3b61c7db7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b23e65a5df408c25bd8255875bfb0a4a9af5992b216e0c18bd01bdf3b61c7db7->enter($__internal_b23e65a5df408c25bd8255875bfb0a4a9af5992b216e0c18bd01bdf3b61c7db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d8a3b7f3262bdaa20a4878b9e98bea8ea1a11084355d97b12230b2087ef63282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a3b7f3262bdaa20a4878b9e98bea8ea1a11084355d97b12230b2087ef63282->enter($__internal_d8a3b7f3262bdaa20a4878b9e98bea8ea1a11084355d97b12230b2087ef63282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_d8a3b7f3262bdaa20a4878b9e98bea8ea1a11084355d97b12230b2087ef63282->leave($__internal_d8a3b7f3262bdaa20a4878b9e98bea8ea1a11084355d97b12230b2087ef63282_prof);

        
        $__internal_b23e65a5df408c25bd8255875bfb0a4a9af5992b216e0c18bd01bdf3b61c7db7->leave($__internal_b23e65a5df408c25bd8255875bfb0a4a9af5992b216e0c18bd01bdf3b61c7db7_prof);

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
