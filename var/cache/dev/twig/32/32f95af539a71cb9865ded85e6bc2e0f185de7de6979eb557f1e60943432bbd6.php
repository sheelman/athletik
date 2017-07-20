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
        $__internal_9ff552d9e03229f47652d3c9ea0db503aa6c44cbfc6b269fdae017f240cea432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ff552d9e03229f47652d3c9ea0db503aa6c44cbfc6b269fdae017f240cea432->enter($__internal_9ff552d9e03229f47652d3c9ea0db503aa6c44cbfc6b269fdae017f240cea432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_844d19805dbe95d6b628d59fec8a1e08851288414f754cb6f40dd85bf563bd9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_844d19805dbe95d6b628d59fec8a1e08851288414f754cb6f40dd85bf563bd9f->enter($__internal_844d19805dbe95d6b628d59fec8a1e08851288414f754cb6f40dd85bf563bd9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ff552d9e03229f47652d3c9ea0db503aa6c44cbfc6b269fdae017f240cea432->leave($__internal_9ff552d9e03229f47652d3c9ea0db503aa6c44cbfc6b269fdae017f240cea432_prof);

        
        $__internal_844d19805dbe95d6b628d59fec8a1e08851288414f754cb6f40dd85bf563bd9f->leave($__internal_844d19805dbe95d6b628d59fec8a1e08851288414f754cb6f40dd85bf563bd9f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0d988f7f8f782a6e388e289240ffc438436ef88d4717f6a891e5f6167daedbba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d988f7f8f782a6e388e289240ffc438436ef88d4717f6a891e5f6167daedbba->enter($__internal_0d988f7f8f782a6e388e289240ffc438436ef88d4717f6a891e5f6167daedbba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b4eaeeef175b6d0594e3bfa9ebcf4f806be4aa8bc9fe7bf5e77e8ce660a163b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4eaeeef175b6d0594e3bfa9ebcf4f806be4aa8bc9fe7bf5e77e8ce660a163b8->enter($__internal_b4eaeeef175b6d0594e3bfa9ebcf4f806be4aa8bc9fe7bf5e77e8ce660a163b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b4eaeeef175b6d0594e3bfa9ebcf4f806be4aa8bc9fe7bf5e77e8ce660a163b8->leave($__internal_b4eaeeef175b6d0594e3bfa9ebcf4f806be4aa8bc9fe7bf5e77e8ce660a163b8_prof);

        
        $__internal_0d988f7f8f782a6e388e289240ffc438436ef88d4717f6a891e5f6167daedbba->leave($__internal_0d988f7f8f782a6e388e289240ffc438436ef88d4717f6a891e5f6167daedbba_prof);

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
