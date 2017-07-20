<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f8c53001f996025442ffe815cd24038a5ae766c38b20237b25564d8efeba1dfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_7ba5d15279a4f877808d113d6e3dfaf2b403b170879661448fe65862228a59d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba5d15279a4f877808d113d6e3dfaf2b403b170879661448fe65862228a59d6->enter($__internal_7ba5d15279a4f877808d113d6e3dfaf2b403b170879661448fe65862228a59d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_177d5d83beb8b41cb479f8cacfc9ac32d10306431dcfa67049502c7c17d7ca0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177d5d83beb8b41cb479f8cacfc9ac32d10306431dcfa67049502c7c17d7ca0a->enter($__internal_177d5d83beb8b41cb479f8cacfc9ac32d10306431dcfa67049502c7c17d7ca0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ba5d15279a4f877808d113d6e3dfaf2b403b170879661448fe65862228a59d6->leave($__internal_7ba5d15279a4f877808d113d6e3dfaf2b403b170879661448fe65862228a59d6_prof);

        
        $__internal_177d5d83beb8b41cb479f8cacfc9ac32d10306431dcfa67049502c7c17d7ca0a->leave($__internal_177d5d83beb8b41cb479f8cacfc9ac32d10306431dcfa67049502c7c17d7ca0a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3ffa55ebc3697b0e6ec5d62451b4373440e358d73b686acc726c921b05de36a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ffa55ebc3697b0e6ec5d62451b4373440e358d73b686acc726c921b05de36a0->enter($__internal_3ffa55ebc3697b0e6ec5d62451b4373440e358d73b686acc726c921b05de36a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d10513a3232229e863b92f51cdb604f45759e8c2096c741531a9c9c15e8aaacc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10513a3232229e863b92f51cdb604f45759e8c2096c741531a9c9c15e8aaacc->enter($__internal_d10513a3232229e863b92f51cdb604f45759e8c2096c741531a9c9c15e8aaacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_d10513a3232229e863b92f51cdb604f45759e8c2096c741531a9c9c15e8aaacc->leave($__internal_d10513a3232229e863b92f51cdb604f45759e8c2096c741531a9c9c15e8aaacc_prof);

        
        $__internal_3ffa55ebc3697b0e6ec5d62451b4373440e358d73b686acc726c921b05de36a0->leave($__internal_3ffa55ebc3697b0e6ec5d62451b4373440e358d73b686acc726c921b05de36a0_prof);

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
        return new Twig_Source("{% extends \"default/index.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
