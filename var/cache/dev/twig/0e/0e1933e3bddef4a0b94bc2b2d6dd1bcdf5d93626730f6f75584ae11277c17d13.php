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
        $__internal_8c9ac85332a9b88d89da6bdd016d1b2849a34fada450c69fabebe84e3a49c61a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c9ac85332a9b88d89da6bdd016d1b2849a34fada450c69fabebe84e3a49c61a->enter($__internal_8c9ac85332a9b88d89da6bdd016d1b2849a34fada450c69fabebe84e3a49c61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_f3a0548c9de0bf00a813b730621cc9ddee74f23309686e659925034bff40a141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a0548c9de0bf00a813b730621cc9ddee74f23309686e659925034bff40a141->enter($__internal_f3a0548c9de0bf00a813b730621cc9ddee74f23309686e659925034bff40a141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c9ac85332a9b88d89da6bdd016d1b2849a34fada450c69fabebe84e3a49c61a->leave($__internal_8c9ac85332a9b88d89da6bdd016d1b2849a34fada450c69fabebe84e3a49c61a_prof);

        
        $__internal_f3a0548c9de0bf00a813b730621cc9ddee74f23309686e659925034bff40a141->leave($__internal_f3a0548c9de0bf00a813b730621cc9ddee74f23309686e659925034bff40a141_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_634e1b1a97faae455ac9058b435e56d56bf94a990ea415a3914e325744fac891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_634e1b1a97faae455ac9058b435e56d56bf94a990ea415a3914e325744fac891->enter($__internal_634e1b1a97faae455ac9058b435e56d56bf94a990ea415a3914e325744fac891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_34c15f21e15f191b9e2d61dc9866022e15dea1017ceaeea35d399031ba5ad0d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c15f21e15f191b9e2d61dc9866022e15dea1017ceaeea35d399031ba5ad0d5->enter($__internal_34c15f21e15f191b9e2d61dc9866022e15dea1017ceaeea35d399031ba5ad0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_34c15f21e15f191b9e2d61dc9866022e15dea1017ceaeea35d399031ba5ad0d5->leave($__internal_34c15f21e15f191b9e2d61dc9866022e15dea1017ceaeea35d399031ba5ad0d5_prof);

        
        $__internal_634e1b1a97faae455ac9058b435e56d56bf94a990ea415a3914e325744fac891->leave($__internal_634e1b1a97faae455ac9058b435e56d56bf94a990ea415a3914e325744fac891_prof);

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
