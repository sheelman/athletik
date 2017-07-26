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
        $__internal_a2e72ecf2887aa86ab9c60a8a7b30b6657193994044b924536a6db6040287c7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2e72ecf2887aa86ab9c60a8a7b30b6657193994044b924536a6db6040287c7e->enter($__internal_a2e72ecf2887aa86ab9c60a8a7b30b6657193994044b924536a6db6040287c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_cfed005f34efb5358974e8d25fcdffbf2f1517e4b7ee56de47e66504e49f25e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfed005f34efb5358974e8d25fcdffbf2f1517e4b7ee56de47e66504e49f25e3->enter($__internal_cfed005f34efb5358974e8d25fcdffbf2f1517e4b7ee56de47e66504e49f25e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2e72ecf2887aa86ab9c60a8a7b30b6657193994044b924536a6db6040287c7e->leave($__internal_a2e72ecf2887aa86ab9c60a8a7b30b6657193994044b924536a6db6040287c7e_prof);

        
        $__internal_cfed005f34efb5358974e8d25fcdffbf2f1517e4b7ee56de47e66504e49f25e3->leave($__internal_cfed005f34efb5358974e8d25fcdffbf2f1517e4b7ee56de47e66504e49f25e3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_658f2e26a786b4b6141833dffc673e410ba17f0b6415dec89c5c4796f5d807e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_658f2e26a786b4b6141833dffc673e410ba17f0b6415dec89c5c4796f5d807e3->enter($__internal_658f2e26a786b4b6141833dffc673e410ba17f0b6415dec89c5c4796f5d807e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0cfb7f09a86e265deb3ec5a8c51be0018b1cd990170f59b5a3f592e49e21152f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cfb7f09a86e265deb3ec5a8c51be0018b1cd990170f59b5a3f592e49e21152f->enter($__internal_0cfb7f09a86e265deb3ec5a8c51be0018b1cd990170f59b5a3f592e49e21152f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_0cfb7f09a86e265deb3ec5a8c51be0018b1cd990170f59b5a3f592e49e21152f->leave($__internal_0cfb7f09a86e265deb3ec5a8c51be0018b1cd990170f59b5a3f592e49e21152f_prof);

        
        $__internal_658f2e26a786b4b6141833dffc673e410ba17f0b6415dec89c5c4796f5d807e3->leave($__internal_658f2e26a786b4b6141833dffc673e410ba17f0b6415dec89c5c4796f5d807e3_prof);

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
