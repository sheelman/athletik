<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_23258d24abe9c8bbbb0610c03898c8c281600ce981b68160704042a1027f84ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_ec4d313481b6e3c4bcf1ca17e4a41dacf174415c6d248b5322423dd3107f08b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec4d313481b6e3c4bcf1ca17e4a41dacf174415c6d248b5322423dd3107f08b2->enter($__internal_ec4d313481b6e3c4bcf1ca17e4a41dacf174415c6d248b5322423dd3107f08b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_47a93042fe23c2deeca6d7c61dbf2f7bbd30c5be4caa25138870279c66af669a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a93042fe23c2deeca6d7c61dbf2f7bbd30c5be4caa25138870279c66af669a->enter($__internal_47a93042fe23c2deeca6d7c61dbf2f7bbd30c5be4caa25138870279c66af669a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec4d313481b6e3c4bcf1ca17e4a41dacf174415c6d248b5322423dd3107f08b2->leave($__internal_ec4d313481b6e3c4bcf1ca17e4a41dacf174415c6d248b5322423dd3107f08b2_prof);

        
        $__internal_47a93042fe23c2deeca6d7c61dbf2f7bbd30c5be4caa25138870279c66af669a->leave($__internal_47a93042fe23c2deeca6d7c61dbf2f7bbd30c5be4caa25138870279c66af669a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d31b97460355b22335fd55611530b9e110d30d9c785e76644cd1e2b46f2fa90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d31b97460355b22335fd55611530b9e110d30d9c785e76644cd1e2b46f2fa90->enter($__internal_4d31b97460355b22335fd55611530b9e110d30d9c785e76644cd1e2b46f2fa90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c291518ced60577ff7612730b0c2ad82219590ea2478022cb3e47840e1225b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c291518ced60577ff7612730b0c2ad82219590ea2478022cb3e47840e1225b75->enter($__internal_c291518ced60577ff7612730b0c2ad82219590ea2478022cb3e47840e1225b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_c291518ced60577ff7612730b0c2ad82219590ea2478022cb3e47840e1225b75->leave($__internal_c291518ced60577ff7612730b0c2ad82219590ea2478022cb3e47840e1225b75_prof);

        
        $__internal_4d31b97460355b22335fd55611530b9e110d30d9c785e76644cd1e2b46f2fa90->leave($__internal_4d31b97460355b22335fd55611530b9e110d30d9c785e76644cd1e2b46f2fa90_prof);

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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
