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
        $__internal_f45d68254c26867e6f9da66c1a33b0a53b55f83a804258325c3eb6ab32bfe045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f45d68254c26867e6f9da66c1a33b0a53b55f83a804258325c3eb6ab32bfe045->enter($__internal_f45d68254c26867e6f9da66c1a33b0a53b55f83a804258325c3eb6ab32bfe045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_d1a7446e4a8c45a831746d25a1b55d2163336c52e58f8ffafb4222116ea1afd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a7446e4a8c45a831746d25a1b55d2163336c52e58f8ffafb4222116ea1afd4->enter($__internal_d1a7446e4a8c45a831746d25a1b55d2163336c52e58f8ffafb4222116ea1afd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f45d68254c26867e6f9da66c1a33b0a53b55f83a804258325c3eb6ab32bfe045->leave($__internal_f45d68254c26867e6f9da66c1a33b0a53b55f83a804258325c3eb6ab32bfe045_prof);

        
        $__internal_d1a7446e4a8c45a831746d25a1b55d2163336c52e58f8ffafb4222116ea1afd4->leave($__internal_d1a7446e4a8c45a831746d25a1b55d2163336c52e58f8ffafb4222116ea1afd4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b43c8cebddc41ef53802a8fac34b186ee3979e31dbe1476da97ce5f274bd1897 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b43c8cebddc41ef53802a8fac34b186ee3979e31dbe1476da97ce5f274bd1897->enter($__internal_b43c8cebddc41ef53802a8fac34b186ee3979e31dbe1476da97ce5f274bd1897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_443d8660d457e53e45659761b45f721a65cfc7e10a9f2778e93dc0b03842adbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443d8660d457e53e45659761b45f721a65cfc7e10a9f2778e93dc0b03842adbf->enter($__internal_443d8660d457e53e45659761b45f721a65cfc7e10a9f2778e93dc0b03842adbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_443d8660d457e53e45659761b45f721a65cfc7e10a9f2778e93dc0b03842adbf->leave($__internal_443d8660d457e53e45659761b45f721a65cfc7e10a9f2778e93dc0b03842adbf_prof);

        
        $__internal_b43c8cebddc41ef53802a8fac34b186ee3979e31dbe1476da97ce5f274bd1897->leave($__internal_b43c8cebddc41ef53802a8fac34b186ee3979e31dbe1476da97ce5f274bd1897_prof);

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
