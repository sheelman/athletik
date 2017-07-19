<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_a5c8d6d4c9dddecdabcaebb193989c6d212e511f40565b9d9d4f7ac5db97348e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_0fbd39b009211d9cdc8839d7b8cf314bb2299c6585f3060032840ccbc171c7c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fbd39b009211d9cdc8839d7b8cf314bb2299c6585f3060032840ccbc171c7c3->enter($__internal_0fbd39b009211d9cdc8839d7b8cf314bb2299c6585f3060032840ccbc171c7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_1d4d9055dbd14cecf12e335149f44d436735999bcb57cad984be49e88435341f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d4d9055dbd14cecf12e335149f44d436735999bcb57cad984be49e88435341f->enter($__internal_1d4d9055dbd14cecf12e335149f44d436735999bcb57cad984be49e88435341f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fbd39b009211d9cdc8839d7b8cf314bb2299c6585f3060032840ccbc171c7c3->leave($__internal_0fbd39b009211d9cdc8839d7b8cf314bb2299c6585f3060032840ccbc171c7c3_prof);

        
        $__internal_1d4d9055dbd14cecf12e335149f44d436735999bcb57cad984be49e88435341f->leave($__internal_1d4d9055dbd14cecf12e335149f44d436735999bcb57cad984be49e88435341f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_efcbc6fd99f194acdb018d7bd2de959797f926454e1aaaf9921eb30f520ace3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efcbc6fd99f194acdb018d7bd2de959797f926454e1aaaf9921eb30f520ace3a->enter($__internal_efcbc6fd99f194acdb018d7bd2de959797f926454e1aaaf9921eb30f520ace3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ba25d565501573c689a2e3a52d420386a453871d6dfd8197067f727c695bbe78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba25d565501573c689a2e3a52d420386a453871d6dfd8197067f727c695bbe78->enter($__internal_ba25d565501573c689a2e3a52d420386a453871d6dfd8197067f727c695bbe78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_ba25d565501573c689a2e3a52d420386a453871d6dfd8197067f727c695bbe78->leave($__internal_ba25d565501573c689a2e3a52d420386a453871d6dfd8197067f727c695bbe78_prof);

        
        $__internal_efcbc6fd99f194acdb018d7bd2de959797f926454e1aaaf9921eb30f520ace3a->leave($__internal_efcbc6fd99f194acdb018d7bd2de959797f926454e1aaaf9921eb30f520ace3a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
