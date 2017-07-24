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
        $__internal_d5226c46272faa3d4d4cbd57ecdb567b2c8896a89d2ab70a4c1826756e7af284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5226c46272faa3d4d4cbd57ecdb567b2c8896a89d2ab70a4c1826756e7af284->enter($__internal_d5226c46272faa3d4d4cbd57ecdb567b2c8896a89d2ab70a4c1826756e7af284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_51190a35959b2843e867eae9f04b9516f00756d83efc43ccfebcdb71a7fd5365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51190a35959b2843e867eae9f04b9516f00756d83efc43ccfebcdb71a7fd5365->enter($__internal_51190a35959b2843e867eae9f04b9516f00756d83efc43ccfebcdb71a7fd5365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5226c46272faa3d4d4cbd57ecdb567b2c8896a89d2ab70a4c1826756e7af284->leave($__internal_d5226c46272faa3d4d4cbd57ecdb567b2c8896a89d2ab70a4c1826756e7af284_prof);

        
        $__internal_51190a35959b2843e867eae9f04b9516f00756d83efc43ccfebcdb71a7fd5365->leave($__internal_51190a35959b2843e867eae9f04b9516f00756d83efc43ccfebcdb71a7fd5365_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_425e50e5acee940d1efae5237d8a9469125236b5c85b78ddf305fb81d8f90e8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_425e50e5acee940d1efae5237d8a9469125236b5c85b78ddf305fb81d8f90e8c->enter($__internal_425e50e5acee940d1efae5237d8a9469125236b5c85b78ddf305fb81d8f90e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_494abd4e45c7f2774bd9030d139eaa8c95cd7d07df6d1ee1e29c09edcfac4760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_494abd4e45c7f2774bd9030d139eaa8c95cd7d07df6d1ee1e29c09edcfac4760->enter($__internal_494abd4e45c7f2774bd9030d139eaa8c95cd7d07df6d1ee1e29c09edcfac4760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_494abd4e45c7f2774bd9030d139eaa8c95cd7d07df6d1ee1e29c09edcfac4760->leave($__internal_494abd4e45c7f2774bd9030d139eaa8c95cd7d07df6d1ee1e29c09edcfac4760_prof);

        
        $__internal_425e50e5acee940d1efae5237d8a9469125236b5c85b78ddf305fb81d8f90e8c->leave($__internal_425e50e5acee940d1efae5237d8a9469125236b5c85b78ddf305fb81d8f90e8c_prof);

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
