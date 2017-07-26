<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_2c39c4421820dc1e8347a29f7666d686f01fcece53858328f2335e0ee7423cc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_3ab653dbfc1083d39d021db54d0c3a30429605a1793c56bb29fab990d711f67b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ab653dbfc1083d39d021db54d0c3a30429605a1793c56bb29fab990d711f67b->enter($__internal_3ab653dbfc1083d39d021db54d0c3a30429605a1793c56bb29fab990d711f67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_adc696dd153479d489614c43adde278b4e3e4ba2da49b999258857cffaac3b1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc696dd153479d489614c43adde278b4e3e4ba2da49b999258857cffaac3b1b->enter($__internal_adc696dd153479d489614c43adde278b4e3e4ba2da49b999258857cffaac3b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ab653dbfc1083d39d021db54d0c3a30429605a1793c56bb29fab990d711f67b->leave($__internal_3ab653dbfc1083d39d021db54d0c3a30429605a1793c56bb29fab990d711f67b_prof);

        
        $__internal_adc696dd153479d489614c43adde278b4e3e4ba2da49b999258857cffaac3b1b->leave($__internal_adc696dd153479d489614c43adde278b4e3e4ba2da49b999258857cffaac3b1b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4fcb0651f0af136a9dbd0a1e8971091ef6991ff7bdd37750e541241a1b9eb70e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fcb0651f0af136a9dbd0a1e8971091ef6991ff7bdd37750e541241a1b9eb70e->enter($__internal_4fcb0651f0af136a9dbd0a1e8971091ef6991ff7bdd37750e541241a1b9eb70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ecbd7cb01b55f33573ebfe6dc5477dc90353bf0d5c41bfdf24aabcbecf9468e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecbd7cb01b55f33573ebfe6dc5477dc90353bf0d5c41bfdf24aabcbecf9468e7->enter($__internal_ecbd7cb01b55f33573ebfe6dc5477dc90353bf0d5c41bfdf24aabcbecf9468e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_ecbd7cb01b55f33573ebfe6dc5477dc90353bf0d5c41bfdf24aabcbecf9468e7->leave($__internal_ecbd7cb01b55f33573ebfe6dc5477dc90353bf0d5c41bfdf24aabcbecf9468e7_prof);

        
        $__internal_4fcb0651f0af136a9dbd0a1e8971091ef6991ff7bdd37750e541241a1b9eb70e->leave($__internal_4fcb0651f0af136a9dbd0a1e8971091ef6991ff7bdd37750e541241a1b9eb70e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
