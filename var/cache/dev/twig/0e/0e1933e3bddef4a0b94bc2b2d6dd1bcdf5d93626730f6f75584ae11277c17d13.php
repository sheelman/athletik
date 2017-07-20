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
        $__internal_08e74ccd5a4c7fb87da22afdad10913344e46a0e9a3d10d9627b2832e72d8f6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08e74ccd5a4c7fb87da22afdad10913344e46a0e9a3d10d9627b2832e72d8f6e->enter($__internal_08e74ccd5a4c7fb87da22afdad10913344e46a0e9a3d10d9627b2832e72d8f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_5a1f98e21b044c0d8607fb174462c1edabd6ea8d80dd2325e048ca05cfac3eb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1f98e21b044c0d8607fb174462c1edabd6ea8d80dd2325e048ca05cfac3eb6->enter($__internal_5a1f98e21b044c0d8607fb174462c1edabd6ea8d80dd2325e048ca05cfac3eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08e74ccd5a4c7fb87da22afdad10913344e46a0e9a3d10d9627b2832e72d8f6e->leave($__internal_08e74ccd5a4c7fb87da22afdad10913344e46a0e9a3d10d9627b2832e72d8f6e_prof);

        
        $__internal_5a1f98e21b044c0d8607fb174462c1edabd6ea8d80dd2325e048ca05cfac3eb6->leave($__internal_5a1f98e21b044c0d8607fb174462c1edabd6ea8d80dd2325e048ca05cfac3eb6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_688963745caac4b2832f9db6383427254ecbd5eb92ee7b556d484a1b9164c9ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_688963745caac4b2832f9db6383427254ecbd5eb92ee7b556d484a1b9164c9ab->enter($__internal_688963745caac4b2832f9db6383427254ecbd5eb92ee7b556d484a1b9164c9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c59ef725fae4e190b5a152ae5821000722a6103ab77c4ba850d0939cee210a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c59ef725fae4e190b5a152ae5821000722a6103ab77c4ba850d0939cee210a03->enter($__internal_c59ef725fae4e190b5a152ae5821000722a6103ab77c4ba850d0939cee210a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_c59ef725fae4e190b5a152ae5821000722a6103ab77c4ba850d0939cee210a03->leave($__internal_c59ef725fae4e190b5a152ae5821000722a6103ab77c4ba850d0939cee210a03_prof);

        
        $__internal_688963745caac4b2832f9db6383427254ecbd5eb92ee7b556d484a1b9164c9ab->leave($__internal_688963745caac4b2832f9db6383427254ecbd5eb92ee7b556d484a1b9164c9ab_prof);

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
