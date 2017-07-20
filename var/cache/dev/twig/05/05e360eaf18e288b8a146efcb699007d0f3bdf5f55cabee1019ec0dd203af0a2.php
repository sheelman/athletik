<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_3d054e7b118a3d0a314b64636218744c7fdf1884da993bef329689c4ec8ac8ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32485637f13a608342febc8aa4bf70b84a12c22a575e9528741792ff01665f01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32485637f13a608342febc8aa4bf70b84a12c22a575e9528741792ff01665f01->enter($__internal_32485637f13a608342febc8aa4bf70b84a12c22a575e9528741792ff01665f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_dd7892c6d816510d91de72475f78f8e9a864af0e0d6f6315ad9e8c29b5eb3c6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd7892c6d816510d91de72475f78f8e9a864af0e0d6f6315ad9e8c29b5eb3c6a->enter($__internal_dd7892c6d816510d91de72475f78f8e9a864af0e0d6f6315ad9e8c29b5eb3c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32485637f13a608342febc8aa4bf70b84a12c22a575e9528741792ff01665f01->leave($__internal_32485637f13a608342febc8aa4bf70b84a12c22a575e9528741792ff01665f01_prof);

        
        $__internal_dd7892c6d816510d91de72475f78f8e9a864af0e0d6f6315ad9e8c29b5eb3c6a->leave($__internal_dd7892c6d816510d91de72475f78f8e9a864af0e0d6f6315ad9e8c29b5eb3c6a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_21d4373768d1e0e0be900632adecb6c64e0bdf8ebb46b9983b5dbbc3cd946524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21d4373768d1e0e0be900632adecb6c64e0bdf8ebb46b9983b5dbbc3cd946524->enter($__internal_21d4373768d1e0e0be900632adecb6c64e0bdf8ebb46b9983b5dbbc3cd946524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_054ae1b80eadfd0b05c68a7055c268e03612909acdf03e5286151336cf521c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_054ae1b80eadfd0b05c68a7055c268e03612909acdf03e5286151336cf521c8e->enter($__internal_054ae1b80eadfd0b05c68a7055c268e03612909acdf03e5286151336cf521c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_054ae1b80eadfd0b05c68a7055c268e03612909acdf03e5286151336cf521c8e->leave($__internal_054ae1b80eadfd0b05c68a7055c268e03612909acdf03e5286151336cf521c8e_prof);

        
        $__internal_21d4373768d1e0e0be900632adecb6c64e0bdf8ebb46b9983b5dbbc3cd946524->leave($__internal_21d4373768d1e0e0be900632adecb6c64e0bdf8ebb46b9983b5dbbc3cd946524_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
        return new Twig_Source("{% extends \"default/index.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
