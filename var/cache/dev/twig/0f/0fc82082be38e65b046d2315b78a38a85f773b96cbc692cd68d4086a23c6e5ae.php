<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_8cd5dabb7cddbd7f59e9a5b25cf09cec64bc1b5497841330beb92929706f1da8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_fff1c7e768003d661b2c457e111445575e15ff97ab23dd46987171bf83315fc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fff1c7e768003d661b2c457e111445575e15ff97ab23dd46987171bf83315fc4->enter($__internal_fff1c7e768003d661b2c457e111445575e15ff97ab23dd46987171bf83315fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_3c8044295c5d63f4925c0deb9ecf0461cc092d27a51d7fc71abd26948a7a7e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c8044295c5d63f4925c0deb9ecf0461cc092d27a51d7fc71abd26948a7a7e9f->enter($__internal_3c8044295c5d63f4925c0deb9ecf0461cc092d27a51d7fc71abd26948a7a7e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fff1c7e768003d661b2c457e111445575e15ff97ab23dd46987171bf83315fc4->leave($__internal_fff1c7e768003d661b2c457e111445575e15ff97ab23dd46987171bf83315fc4_prof);

        
        $__internal_3c8044295c5d63f4925c0deb9ecf0461cc092d27a51d7fc71abd26948a7a7e9f->leave($__internal_3c8044295c5d63f4925c0deb9ecf0461cc092d27a51d7fc71abd26948a7a7e9f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b7cdf2d9c28b5f8c3e6c509ecafc513bf605ddcc51c65c5267591911d3d83283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7cdf2d9c28b5f8c3e6c509ecafc513bf605ddcc51c65c5267591911d3d83283->enter($__internal_b7cdf2d9c28b5f8c3e6c509ecafc513bf605ddcc51c65c5267591911d3d83283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a3211adcd065e8616a171e4c9b1db4de61f5c62dd2965fbb6022cf67546a091b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3211adcd065e8616a171e4c9b1db4de61f5c62dd2965fbb6022cf67546a091b->enter($__internal_a3211adcd065e8616a171e4c9b1db4de61f5c62dd2965fbb6022cf67546a091b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_a3211adcd065e8616a171e4c9b1db4de61f5c62dd2965fbb6022cf67546a091b->leave($__internal_a3211adcd065e8616a171e4c9b1db4de61f5c62dd2965fbb6022cf67546a091b_prof);

        
        $__internal_b7cdf2d9c28b5f8c3e6c509ecafc513bf605ddcc51c65c5267591911d3d83283->leave($__internal_b7cdf2d9c28b5f8c3e6c509ecafc513bf605ddcc51c65c5267591911d3d83283_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
