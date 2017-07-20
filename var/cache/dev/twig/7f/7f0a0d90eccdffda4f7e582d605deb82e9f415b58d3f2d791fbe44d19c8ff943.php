<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3279dbcdca5c0aeeab86c3495066d40ec56322e772c432abca5b353e54e515c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_256c767c1d7d644feb3fc4f0fa75a92094d068ef2017cb3bc6de671784dafc20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_256c767c1d7d644feb3fc4f0fa75a92094d068ef2017cb3bc6de671784dafc20->enter($__internal_256c767c1d7d644feb3fc4f0fa75a92094d068ef2017cb3bc6de671784dafc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_74b31b9687ba8c6230b70aee9410c7be20a5bb2a0b807b37285e79a8c280e7e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74b31b9687ba8c6230b70aee9410c7be20a5bb2a0b807b37285e79a8c280e7e8->enter($__internal_74b31b9687ba8c6230b70aee9410c7be20a5bb2a0b807b37285e79a8c280e7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_256c767c1d7d644feb3fc4f0fa75a92094d068ef2017cb3bc6de671784dafc20->leave($__internal_256c767c1d7d644feb3fc4f0fa75a92094d068ef2017cb3bc6de671784dafc20_prof);

        
        $__internal_74b31b9687ba8c6230b70aee9410c7be20a5bb2a0b807b37285e79a8c280e7e8->leave($__internal_74b31b9687ba8c6230b70aee9410c7be20a5bb2a0b807b37285e79a8c280e7e8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_33020343c2c4fcec559e7aeea767540dfea5b6091a344b1389133d8338c2877e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33020343c2c4fcec559e7aeea767540dfea5b6091a344b1389133d8338c2877e->enter($__internal_33020343c2c4fcec559e7aeea767540dfea5b6091a344b1389133d8338c2877e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_154d8a1f60377bee32a2ac23ebae24ab0f172a9040c3eda0de6d3f49ff6419f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154d8a1f60377bee32a2ac23ebae24ab0f172a9040c3eda0de6d3f49ff6419f6->enter($__internal_154d8a1f60377bee32a2ac23ebae24ab0f172a9040c3eda0de6d3f49ff6419f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_154d8a1f60377bee32a2ac23ebae24ab0f172a9040c3eda0de6d3f49ff6419f6->leave($__internal_154d8a1f60377bee32a2ac23ebae24ab0f172a9040c3eda0de6d3f49ff6419f6_prof);

        
        $__internal_33020343c2c4fcec559e7aeea767540dfea5b6091a344b1389133d8338c2877e->leave($__internal_33020343c2c4fcec559e7aeea767540dfea5b6091a344b1389133d8338c2877e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
