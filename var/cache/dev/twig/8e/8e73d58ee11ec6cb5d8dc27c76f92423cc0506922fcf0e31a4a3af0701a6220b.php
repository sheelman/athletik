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
        $__internal_c383bd591221db92a159cb1d8d4217337054f3849e6c65e9f39df3e615cc4849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c383bd591221db92a159cb1d8d4217337054f3849e6c65e9f39df3e615cc4849->enter($__internal_c383bd591221db92a159cb1d8d4217337054f3849e6c65e9f39df3e615cc4849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_2649d2afb30174c4f73159b71fd14d74cc3bc65dd894b60c7c88a042cbd4e1e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2649d2afb30174c4f73159b71fd14d74cc3bc65dd894b60c7c88a042cbd4e1e1->enter($__internal_2649d2afb30174c4f73159b71fd14d74cc3bc65dd894b60c7c88a042cbd4e1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c383bd591221db92a159cb1d8d4217337054f3849e6c65e9f39df3e615cc4849->leave($__internal_c383bd591221db92a159cb1d8d4217337054f3849e6c65e9f39df3e615cc4849_prof);

        
        $__internal_2649d2afb30174c4f73159b71fd14d74cc3bc65dd894b60c7c88a042cbd4e1e1->leave($__internal_2649d2afb30174c4f73159b71fd14d74cc3bc65dd894b60c7c88a042cbd4e1e1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f8c7b1e49f9baf91d7ea31212cabd77e565b6836b32630aa0e53b346f212fe1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c7b1e49f9baf91d7ea31212cabd77e565b6836b32630aa0e53b346f212fe1e->enter($__internal_f8c7b1e49f9baf91d7ea31212cabd77e565b6836b32630aa0e53b346f212fe1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8e9929f90f9df6e2a3dca9e301582f81b2f9752467ae49ae2f67561e347a4ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e9929f90f9df6e2a3dca9e301582f81b2f9752467ae49ae2f67561e347a4ba7->enter($__internal_8e9929f90f9df6e2a3dca9e301582f81b2f9752467ae49ae2f67561e347a4ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_8e9929f90f9df6e2a3dca9e301582f81b2f9752467ae49ae2f67561e347a4ba7->leave($__internal_8e9929f90f9df6e2a3dca9e301582f81b2f9752467ae49ae2f67561e347a4ba7_prof);

        
        $__internal_f8c7b1e49f9baf91d7ea31212cabd77e565b6836b32630aa0e53b346f212fe1e->leave($__internal_f8c7b1e49f9baf91d7ea31212cabd77e565b6836b32630aa0e53b346f212fe1e_prof);

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
