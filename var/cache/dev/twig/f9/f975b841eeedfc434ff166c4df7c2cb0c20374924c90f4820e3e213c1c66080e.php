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
        $__internal_47b5b05d858d88ea00e0897e696d4c410aa65d86c5efa64b87308a38c4d3b2c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47b5b05d858d88ea00e0897e696d4c410aa65d86c5efa64b87308a38c4d3b2c9->enter($__internal_47b5b05d858d88ea00e0897e696d4c410aa65d86c5efa64b87308a38c4d3b2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_e61c810cdd6bc9de991da397c883ebe028428ccee840e13b675613828e4f8ebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e61c810cdd6bc9de991da397c883ebe028428ccee840e13b675613828e4f8ebd->enter($__internal_e61c810cdd6bc9de991da397c883ebe028428ccee840e13b675613828e4f8ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47b5b05d858d88ea00e0897e696d4c410aa65d86c5efa64b87308a38c4d3b2c9->leave($__internal_47b5b05d858d88ea00e0897e696d4c410aa65d86c5efa64b87308a38c4d3b2c9_prof);

        
        $__internal_e61c810cdd6bc9de991da397c883ebe028428ccee840e13b675613828e4f8ebd->leave($__internal_e61c810cdd6bc9de991da397c883ebe028428ccee840e13b675613828e4f8ebd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da28bd424cb185c319f1b1d77b38b67bd8bc9b5f23a778822de4a4d1de21d0db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da28bd424cb185c319f1b1d77b38b67bd8bc9b5f23a778822de4a4d1de21d0db->enter($__internal_da28bd424cb185c319f1b1d77b38b67bd8bc9b5f23a778822de4a4d1de21d0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_05aa132d4f85247d7437c2ff2930bb193b0625b103785bc707d18f75224f6ed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05aa132d4f85247d7437c2ff2930bb193b0625b103785bc707d18f75224f6ed3->enter($__internal_05aa132d4f85247d7437c2ff2930bb193b0625b103785bc707d18f75224f6ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_05aa132d4f85247d7437c2ff2930bb193b0625b103785bc707d18f75224f6ed3->leave($__internal_05aa132d4f85247d7437c2ff2930bb193b0625b103785bc707d18f75224f6ed3_prof);

        
        $__internal_da28bd424cb185c319f1b1d77b38b67bd8bc9b5f23a778822de4a4d1de21d0db->leave($__internal_da28bd424cb185c319f1b1d77b38b67bd8bc9b5f23a778822de4a4d1de21d0db_prof);

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
