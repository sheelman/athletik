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
        $__internal_a1b512e23342986f458241cedd2e371058d5260f37cea75117a4d981c538c5db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1b512e23342986f458241cedd2e371058d5260f37cea75117a4d981c538c5db->enter($__internal_a1b512e23342986f458241cedd2e371058d5260f37cea75117a4d981c538c5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_2cdbdda8c10e5376e086f88de52ba2f2fa761eff95e62d4d3d91dcaa1f397c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cdbdda8c10e5376e086f88de52ba2f2fa761eff95e62d4d3d91dcaa1f397c36->enter($__internal_2cdbdda8c10e5376e086f88de52ba2f2fa761eff95e62d4d3d91dcaa1f397c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1b512e23342986f458241cedd2e371058d5260f37cea75117a4d981c538c5db->leave($__internal_a1b512e23342986f458241cedd2e371058d5260f37cea75117a4d981c538c5db_prof);

        
        $__internal_2cdbdda8c10e5376e086f88de52ba2f2fa761eff95e62d4d3d91dcaa1f397c36->leave($__internal_2cdbdda8c10e5376e086f88de52ba2f2fa761eff95e62d4d3d91dcaa1f397c36_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab66c5061f0236e70edb86bff13b3dd93446b2c0817fb68b5d326a4e2b7274fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab66c5061f0236e70edb86bff13b3dd93446b2c0817fb68b5d326a4e2b7274fb->enter($__internal_ab66c5061f0236e70edb86bff13b3dd93446b2c0817fb68b5d326a4e2b7274fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1ebb3b651629a3038721d29fb8142d7b7c5c0c89d916a4c14cc61020cd400ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ebb3b651629a3038721d29fb8142d7b7c5c0c89d916a4c14cc61020cd400ffe->enter($__internal_1ebb3b651629a3038721d29fb8142d7b7c5c0c89d916a4c14cc61020cd400ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_1ebb3b651629a3038721d29fb8142d7b7c5c0c89d916a4c14cc61020cd400ffe->leave($__internal_1ebb3b651629a3038721d29fb8142d7b7c5c0c89d916a4c14cc61020cd400ffe_prof);

        
        $__internal_ab66c5061f0236e70edb86bff13b3dd93446b2c0817fb68b5d326a4e2b7274fb->leave($__internal_ab66c5061f0236e70edb86bff13b3dd93446b2c0817fb68b5d326a4e2b7274fb_prof);

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
