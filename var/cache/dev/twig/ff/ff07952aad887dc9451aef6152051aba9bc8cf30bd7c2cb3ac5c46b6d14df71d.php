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
        $__internal_48d1190c8a0b6a00d9319e82c03e0f652540da1c4e080929bf2597b2d4c91577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48d1190c8a0b6a00d9319e82c03e0f652540da1c4e080929bf2597b2d4c91577->enter($__internal_48d1190c8a0b6a00d9319e82c03e0f652540da1c4e080929bf2597b2d4c91577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_ef22ed4234b8c6c9cd81ec79dd792f94b7d76776741979a4dd92b8a7ba63cb1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef22ed4234b8c6c9cd81ec79dd792f94b7d76776741979a4dd92b8a7ba63cb1b->enter($__internal_ef22ed4234b8c6c9cd81ec79dd792f94b7d76776741979a4dd92b8a7ba63cb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48d1190c8a0b6a00d9319e82c03e0f652540da1c4e080929bf2597b2d4c91577->leave($__internal_48d1190c8a0b6a00d9319e82c03e0f652540da1c4e080929bf2597b2d4c91577_prof);

        
        $__internal_ef22ed4234b8c6c9cd81ec79dd792f94b7d76776741979a4dd92b8a7ba63cb1b->leave($__internal_ef22ed4234b8c6c9cd81ec79dd792f94b7d76776741979a4dd92b8a7ba63cb1b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_48a9b1e80a11b1d1f7cb0a37ba936910c922f0ce552ec32ead9f3145884e55a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48a9b1e80a11b1d1f7cb0a37ba936910c922f0ce552ec32ead9f3145884e55a4->enter($__internal_48a9b1e80a11b1d1f7cb0a37ba936910c922f0ce552ec32ead9f3145884e55a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ed521feae8e9d281390ece8fe2b4c82522a26a919b29796c420fe9b3a0c4f4d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed521feae8e9d281390ece8fe2b4c82522a26a919b29796c420fe9b3a0c4f4d2->enter($__internal_ed521feae8e9d281390ece8fe2b4c82522a26a919b29796c420fe9b3a0c4f4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_ed521feae8e9d281390ece8fe2b4c82522a26a919b29796c420fe9b3a0c4f4d2->leave($__internal_ed521feae8e9d281390ece8fe2b4c82522a26a919b29796c420fe9b3a0c4f4d2_prof);

        
        $__internal_48a9b1e80a11b1d1f7cb0a37ba936910c922f0ce552ec32ead9f3145884e55a4->leave($__internal_48a9b1e80a11b1d1f7cb0a37ba936910c922f0ce552ec32ead9f3145884e55a4_prof);

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
