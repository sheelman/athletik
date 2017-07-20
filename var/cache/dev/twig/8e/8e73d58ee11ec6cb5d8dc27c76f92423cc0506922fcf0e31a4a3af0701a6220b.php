<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_4e540f3812fcd25533c70884c2c679309efa0efa5dc560bb4bbc05c57dfc7ec6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_2c511199973e1b9b6a72371701a25168dc69135fc4e8807919530ed3ad27740a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c511199973e1b9b6a72371701a25168dc69135fc4e8807919530ed3ad27740a->enter($__internal_2c511199973e1b9b6a72371701a25168dc69135fc4e8807919530ed3ad27740a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_d7c812efce1bf77b8baf10524374ca5d87f3a4cf348332716e1582dd13a8015b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c812efce1bf77b8baf10524374ca5d87f3a4cf348332716e1582dd13a8015b->enter($__internal_d7c812efce1bf77b8baf10524374ca5d87f3a4cf348332716e1582dd13a8015b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c511199973e1b9b6a72371701a25168dc69135fc4e8807919530ed3ad27740a->leave($__internal_2c511199973e1b9b6a72371701a25168dc69135fc4e8807919530ed3ad27740a_prof);

        
        $__internal_d7c812efce1bf77b8baf10524374ca5d87f3a4cf348332716e1582dd13a8015b->leave($__internal_d7c812efce1bf77b8baf10524374ca5d87f3a4cf348332716e1582dd13a8015b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2da54ab69557f67a59bda39fface029e2ddeaba750e20bac70fad2ae3df9df79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2da54ab69557f67a59bda39fface029e2ddeaba750e20bac70fad2ae3df9df79->enter($__internal_2da54ab69557f67a59bda39fface029e2ddeaba750e20bac70fad2ae3df9df79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fcc33a89bb2b8a45c6ed9be2591cc133f43b57838429ac5f196408d4853102dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc33a89bb2b8a45c6ed9be2591cc133f43b57838429ac5f196408d4853102dd->enter($__internal_fcc33a89bb2b8a45c6ed9be2591cc133f43b57838429ac5f196408d4853102dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_fcc33a89bb2b8a45c6ed9be2591cc133f43b57838429ac5f196408d4853102dd->leave($__internal_fcc33a89bb2b8a45c6ed9be2591cc133f43b57838429ac5f196408d4853102dd_prof);

        
        $__internal_2da54ab69557f67a59bda39fface029e2ddeaba750e20bac70fad2ae3df9df79->leave($__internal_2da54ab69557f67a59bda39fface029e2ddeaba750e20bac70fad2ae3df9df79_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
