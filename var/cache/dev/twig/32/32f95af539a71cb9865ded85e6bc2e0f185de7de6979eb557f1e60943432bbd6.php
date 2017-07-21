<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_93118fb6bc1274613201be4cdc7253afc21076f73a2c45def85101ac51dfe1bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_05f4080c23d8262683063ffa60c365f1e9c9c303b84b07036c721555269adb4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05f4080c23d8262683063ffa60c365f1e9c9c303b84b07036c721555269adb4e->enter($__internal_05f4080c23d8262683063ffa60c365f1e9c9c303b84b07036c721555269adb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_d87a46d5047b77c341b70853443b66862825de0d1f1e4341da49f63e2933c58a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d87a46d5047b77c341b70853443b66862825de0d1f1e4341da49f63e2933c58a->enter($__internal_d87a46d5047b77c341b70853443b66862825de0d1f1e4341da49f63e2933c58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05f4080c23d8262683063ffa60c365f1e9c9c303b84b07036c721555269adb4e->leave($__internal_05f4080c23d8262683063ffa60c365f1e9c9c303b84b07036c721555269adb4e_prof);

        
        $__internal_d87a46d5047b77c341b70853443b66862825de0d1f1e4341da49f63e2933c58a->leave($__internal_d87a46d5047b77c341b70853443b66862825de0d1f1e4341da49f63e2933c58a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d3e2ecdf0ebda46826b3f360830b0fb786dfbaf233b7eca30afe7b362f12f255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3e2ecdf0ebda46826b3f360830b0fb786dfbaf233b7eca30afe7b362f12f255->enter($__internal_d3e2ecdf0ebda46826b3f360830b0fb786dfbaf233b7eca30afe7b362f12f255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_52847428da7cb60607a0fd2b25963affdbad592c57597ba65c0fe735a211181e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52847428da7cb60607a0fd2b25963affdbad592c57597ba65c0fe735a211181e->enter($__internal_52847428da7cb60607a0fd2b25963affdbad592c57597ba65c0fe735a211181e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_52847428da7cb60607a0fd2b25963affdbad592c57597ba65c0fe735a211181e->leave($__internal_52847428da7cb60607a0fd2b25963affdbad592c57597ba65c0fe735a211181e_prof);

        
        $__internal_d3e2ecdf0ebda46826b3f360830b0fb786dfbaf233b7eca30afe7b362f12f255->leave($__internal_d3e2ecdf0ebda46826b3f360830b0fb786dfbaf233b7eca30afe7b362f12f255_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
