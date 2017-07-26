<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_2c9ad4f1404f05ebfd2e19f1c722221f359290941177d29c1c236ec2741a614d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_74ca7f88b8b825a7650b904789ddf2cc95921edeadf02c8b30ea99ad851d5899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74ca7f88b8b825a7650b904789ddf2cc95921edeadf02c8b30ea99ad851d5899->enter($__internal_74ca7f88b8b825a7650b904789ddf2cc95921edeadf02c8b30ea99ad851d5899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_35c997d7fb3b26f3d428d15e715a72da154640729fee0fadc1ca6729976ed93a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c997d7fb3b26f3d428d15e715a72da154640729fee0fadc1ca6729976ed93a->enter($__internal_35c997d7fb3b26f3d428d15e715a72da154640729fee0fadc1ca6729976ed93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74ca7f88b8b825a7650b904789ddf2cc95921edeadf02c8b30ea99ad851d5899->leave($__internal_74ca7f88b8b825a7650b904789ddf2cc95921edeadf02c8b30ea99ad851d5899_prof);

        
        $__internal_35c997d7fb3b26f3d428d15e715a72da154640729fee0fadc1ca6729976ed93a->leave($__internal_35c997d7fb3b26f3d428d15e715a72da154640729fee0fadc1ca6729976ed93a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_19a4ef718013e0261e33920de1775973a3f076602351821e57ba01c891c57bcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19a4ef718013e0261e33920de1775973a3f076602351821e57ba01c891c57bcb->enter($__internal_19a4ef718013e0261e33920de1775973a3f076602351821e57ba01c891c57bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dc9693058f8e8c1316859bc027549c14162e071601cb0fdfbe92b0ae9b254800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc9693058f8e8c1316859bc027549c14162e071601cb0fdfbe92b0ae9b254800->enter($__internal_dc9693058f8e8c1316859bc027549c14162e071601cb0fdfbe92b0ae9b254800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_dc9693058f8e8c1316859bc027549c14162e071601cb0fdfbe92b0ae9b254800->leave($__internal_dc9693058f8e8c1316859bc027549c14162e071601cb0fdfbe92b0ae9b254800_prof);

        
        $__internal_19a4ef718013e0261e33920de1775973a3f076602351821e57ba01c891c57bcb->leave($__internal_19a4ef718013e0261e33920de1775973a3f076602351821e57ba01c891c57bcb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
