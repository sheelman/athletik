<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_3b82c32df29cb8437f0bec2cd0de737ae8339e8af7d21a8f808365f7f195251c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_a84dfee7b0f0ff110765c81db69c45c74acb0f5a011bd15860f85b3da5f4c893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a84dfee7b0f0ff110765c81db69c45c74acb0f5a011bd15860f85b3da5f4c893->enter($__internal_a84dfee7b0f0ff110765c81db69c45c74acb0f5a011bd15860f85b3da5f4c893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_6132bcca4702396797c16a7525259023b9f809adc3977f44bdabca2e61904e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6132bcca4702396797c16a7525259023b9f809adc3977f44bdabca2e61904e1e->enter($__internal_6132bcca4702396797c16a7525259023b9f809adc3977f44bdabca2e61904e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a84dfee7b0f0ff110765c81db69c45c74acb0f5a011bd15860f85b3da5f4c893->leave($__internal_a84dfee7b0f0ff110765c81db69c45c74acb0f5a011bd15860f85b3da5f4c893_prof);

        
        $__internal_6132bcca4702396797c16a7525259023b9f809adc3977f44bdabca2e61904e1e->leave($__internal_6132bcca4702396797c16a7525259023b9f809adc3977f44bdabca2e61904e1e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de411e17d8961b6d00167856932139074a27e041e031adee01e7bb7e5bd13b1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de411e17d8961b6d00167856932139074a27e041e031adee01e7bb7e5bd13b1e->enter($__internal_de411e17d8961b6d00167856932139074a27e041e031adee01e7bb7e5bd13b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cb9ce4aa71c4b8971364a25f876df206373a0e864db717a1ebe2640bfc0ad0d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb9ce4aa71c4b8971364a25f876df206373a0e864db717a1ebe2640bfc0ad0d3->enter($__internal_cb9ce4aa71c4b8971364a25f876df206373a0e864db717a1ebe2640bfc0ad0d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_cb9ce4aa71c4b8971364a25f876df206373a0e864db717a1ebe2640bfc0ad0d3->leave($__internal_cb9ce4aa71c4b8971364a25f876df206373a0e864db717a1ebe2640bfc0ad0d3_prof);

        
        $__internal_de411e17d8961b6d00167856932139074a27e041e031adee01e7bb7e5bd13b1e->leave($__internal_de411e17d8961b6d00167856932139074a27e041e031adee01e7bb7e5bd13b1e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
