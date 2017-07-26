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
        $__internal_69d7d18d58ffc6f6d9d686c56fed7a02b8db3ba75a570c623aaaa9f761d6fbb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69d7d18d58ffc6f6d9d686c56fed7a02b8db3ba75a570c623aaaa9f761d6fbb4->enter($__internal_69d7d18d58ffc6f6d9d686c56fed7a02b8db3ba75a570c623aaaa9f761d6fbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_013ac408ea6daff8c83bf32915eeb107f8e2b0b2598477491cb5e419ae8e0ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_013ac408ea6daff8c83bf32915eeb107f8e2b0b2598477491cb5e419ae8e0ae2->enter($__internal_013ac408ea6daff8c83bf32915eeb107f8e2b0b2598477491cb5e419ae8e0ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69d7d18d58ffc6f6d9d686c56fed7a02b8db3ba75a570c623aaaa9f761d6fbb4->leave($__internal_69d7d18d58ffc6f6d9d686c56fed7a02b8db3ba75a570c623aaaa9f761d6fbb4_prof);

        
        $__internal_013ac408ea6daff8c83bf32915eeb107f8e2b0b2598477491cb5e419ae8e0ae2->leave($__internal_013ac408ea6daff8c83bf32915eeb107f8e2b0b2598477491cb5e419ae8e0ae2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4716f0171873797da59415af590ca9a99e36283e98d3eeddbedd63258d33fb0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4716f0171873797da59415af590ca9a99e36283e98d3eeddbedd63258d33fb0f->enter($__internal_4716f0171873797da59415af590ca9a99e36283e98d3eeddbedd63258d33fb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_877d4f6872cae31ca6f6fe8f6608615f64dd6cc62b7339c341c3a20bd66e181b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_877d4f6872cae31ca6f6fe8f6608615f64dd6cc62b7339c341c3a20bd66e181b->enter($__internal_877d4f6872cae31ca6f6fe8f6608615f64dd6cc62b7339c341c3a20bd66e181b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_877d4f6872cae31ca6f6fe8f6608615f64dd6cc62b7339c341c3a20bd66e181b->leave($__internal_877d4f6872cae31ca6f6fe8f6608615f64dd6cc62b7339c341c3a20bd66e181b_prof);

        
        $__internal_4716f0171873797da59415af590ca9a99e36283e98d3eeddbedd63258d33fb0f->leave($__internal_4716f0171873797da59415af590ca9a99e36283e98d3eeddbedd63258d33fb0f_prof);

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
