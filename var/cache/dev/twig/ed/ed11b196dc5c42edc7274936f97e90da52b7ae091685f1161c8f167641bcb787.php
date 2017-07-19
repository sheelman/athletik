<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_674099ca901fd8c9ca9d64eee22cba8aeb1e939a3f260cf57c0421b1596fe5d7 extends Twig_Template
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
        $__internal_c6474029d55cac0cdc5ba83a3424c2bd809b9d2d5cb93ccd598100c5cdcd9aaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6474029d55cac0cdc5ba83a3424c2bd809b9d2d5cb93ccd598100c5cdcd9aaf->enter($__internal_c6474029d55cac0cdc5ba83a3424c2bd809b9d2d5cb93ccd598100c5cdcd9aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_91e0a087f1ffc673090135a9f286ed1186c39995918e4e75348922ff7511bb87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e0a087f1ffc673090135a9f286ed1186c39995918e4e75348922ff7511bb87->enter($__internal_91e0a087f1ffc673090135a9f286ed1186c39995918e4e75348922ff7511bb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6474029d55cac0cdc5ba83a3424c2bd809b9d2d5cb93ccd598100c5cdcd9aaf->leave($__internal_c6474029d55cac0cdc5ba83a3424c2bd809b9d2d5cb93ccd598100c5cdcd9aaf_prof);

        
        $__internal_91e0a087f1ffc673090135a9f286ed1186c39995918e4e75348922ff7511bb87->leave($__internal_91e0a087f1ffc673090135a9f286ed1186c39995918e4e75348922ff7511bb87_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2854fa419769df6424f6968257e6825035dc93a0349ac805112030cafc2ca322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2854fa419769df6424f6968257e6825035dc93a0349ac805112030cafc2ca322->enter($__internal_2854fa419769df6424f6968257e6825035dc93a0349ac805112030cafc2ca322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f8eff2c9315ffd4240cbbc45d33cb273219704e1bc7fe19206767755a3b23b34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8eff2c9315ffd4240cbbc45d33cb273219704e1bc7fe19206767755a3b23b34->enter($__internal_f8eff2c9315ffd4240cbbc45d33cb273219704e1bc7fe19206767755a3b23b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_f8eff2c9315ffd4240cbbc45d33cb273219704e1bc7fe19206767755a3b23b34->leave($__internal_f8eff2c9315ffd4240cbbc45d33cb273219704e1bc7fe19206767755a3b23b34_prof);

        
        $__internal_2854fa419769df6424f6968257e6825035dc93a0349ac805112030cafc2ca322->leave($__internal_2854fa419769df6424f6968257e6825035dc93a0349ac805112030cafc2ca322_prof);

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
", "FOSUserBundle:Profile:edit.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
