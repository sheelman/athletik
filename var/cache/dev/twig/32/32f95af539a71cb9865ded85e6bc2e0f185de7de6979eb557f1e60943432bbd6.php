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
        $__internal_9834f9e63b2ed41756f53ee2033f74cb800854ff21a1d07ddda77cf60d06a659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9834f9e63b2ed41756f53ee2033f74cb800854ff21a1d07ddda77cf60d06a659->enter($__internal_9834f9e63b2ed41756f53ee2033f74cb800854ff21a1d07ddda77cf60d06a659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_5ceb2aacc0c06f18a6fadfbee9914f9b28b0df7d2255f797c066c81e312ab79e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ceb2aacc0c06f18a6fadfbee9914f9b28b0df7d2255f797c066c81e312ab79e->enter($__internal_5ceb2aacc0c06f18a6fadfbee9914f9b28b0df7d2255f797c066c81e312ab79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9834f9e63b2ed41756f53ee2033f74cb800854ff21a1d07ddda77cf60d06a659->leave($__internal_9834f9e63b2ed41756f53ee2033f74cb800854ff21a1d07ddda77cf60d06a659_prof);

        
        $__internal_5ceb2aacc0c06f18a6fadfbee9914f9b28b0df7d2255f797c066c81e312ab79e->leave($__internal_5ceb2aacc0c06f18a6fadfbee9914f9b28b0df7d2255f797c066c81e312ab79e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b603cd5f3d2bc3fd2bd51e647f522504c0be627375a4c5d9ba23275623f47fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b603cd5f3d2bc3fd2bd51e647f522504c0be627375a4c5d9ba23275623f47fd->enter($__internal_6b603cd5f3d2bc3fd2bd51e647f522504c0be627375a4c5d9ba23275623f47fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e54f40073d96b6bf8d8f624c96468366b1024078883f00d2330973ae735932a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e54f40073d96b6bf8d8f624c96468366b1024078883f00d2330973ae735932a8->enter($__internal_e54f40073d96b6bf8d8f624c96468366b1024078883f00d2330973ae735932a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_e54f40073d96b6bf8d8f624c96468366b1024078883f00d2330973ae735932a8->leave($__internal_e54f40073d96b6bf8d8f624c96468366b1024078883f00d2330973ae735932a8_prof);

        
        $__internal_6b603cd5f3d2bc3fd2bd51e647f522504c0be627375a4c5d9ba23275623f47fd->leave($__internal_6b603cd5f3d2bc3fd2bd51e647f522504c0be627375a4c5d9ba23275623f47fd_prof);

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
