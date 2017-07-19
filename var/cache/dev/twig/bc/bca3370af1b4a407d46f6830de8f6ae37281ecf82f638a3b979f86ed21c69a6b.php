<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_8da44bcdea30fb3bce82794837dbb5297a9a1ca912ab6945a5c0372627a7abcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_17405ad4f0f4c8db2452684bde701c0082192c5352a69ae910e6b0b4afb0233e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17405ad4f0f4c8db2452684bde701c0082192c5352a69ae910e6b0b4afb0233e->enter($__internal_17405ad4f0f4c8db2452684bde701c0082192c5352a69ae910e6b0b4afb0233e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_e192769b4857fbc4a0ea142826c44fa1a2a4324051a4778f9849719c4ce848bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e192769b4857fbc4a0ea142826c44fa1a2a4324051a4778f9849719c4ce848bc->enter($__internal_e192769b4857fbc4a0ea142826c44fa1a2a4324051a4778f9849719c4ce848bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17405ad4f0f4c8db2452684bde701c0082192c5352a69ae910e6b0b4afb0233e->leave($__internal_17405ad4f0f4c8db2452684bde701c0082192c5352a69ae910e6b0b4afb0233e_prof);

        
        $__internal_e192769b4857fbc4a0ea142826c44fa1a2a4324051a4778f9849719c4ce848bc->leave($__internal_e192769b4857fbc4a0ea142826c44fa1a2a4324051a4778f9849719c4ce848bc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8b7123705d3a99c4baa8466a2dd7030c9085fa2222e05a5d79057c3601d6195a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b7123705d3a99c4baa8466a2dd7030c9085fa2222e05a5d79057c3601d6195a->enter($__internal_8b7123705d3a99c4baa8466a2dd7030c9085fa2222e05a5d79057c3601d6195a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_70df913c7c526074379a6d2ba4e8cf47a4fb45dbfbe8cc541d9359dd317f5a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70df913c7c526074379a6d2ba4e8cf47a4fb45dbfbe8cc541d9359dd317f5a66->enter($__internal_70df913c7c526074379a6d2ba4e8cf47a4fb45dbfbe8cc541d9359dd317f5a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_70df913c7c526074379a6d2ba4e8cf47a4fb45dbfbe8cc541d9359dd317f5a66->leave($__internal_70df913c7c526074379a6d2ba4e8cf47a4fb45dbfbe8cc541d9359dd317f5a66_prof);

        
        $__internal_8b7123705d3a99c4baa8466a2dd7030c9085fa2222e05a5d79057c3601d6195a->leave($__internal_8b7123705d3a99c4baa8466a2dd7030c9085fa2222e05a5d79057c3601d6195a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
