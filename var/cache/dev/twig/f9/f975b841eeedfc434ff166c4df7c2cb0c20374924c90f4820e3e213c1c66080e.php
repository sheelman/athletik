<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_de2859ca3238d90e83a7291214aad0e2709ea62674f0a1942384c94ff4afdd1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_617e8917df769d9362b0298979dc5ff727ce1bcdb8796b95d0fd3786b42a37ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_617e8917df769d9362b0298979dc5ff727ce1bcdb8796b95d0fd3786b42a37ac->enter($__internal_617e8917df769d9362b0298979dc5ff727ce1bcdb8796b95d0fd3786b42a37ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_8c1005429b59e1f87a64585ed77766ba5894d603c338cbc4f6e1f0377cf3ffe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c1005429b59e1f87a64585ed77766ba5894d603c338cbc4f6e1f0377cf3ffe3->enter($__internal_8c1005429b59e1f87a64585ed77766ba5894d603c338cbc4f6e1f0377cf3ffe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_617e8917df769d9362b0298979dc5ff727ce1bcdb8796b95d0fd3786b42a37ac->leave($__internal_617e8917df769d9362b0298979dc5ff727ce1bcdb8796b95d0fd3786b42a37ac_prof);

        
        $__internal_8c1005429b59e1f87a64585ed77766ba5894d603c338cbc4f6e1f0377cf3ffe3->leave($__internal_8c1005429b59e1f87a64585ed77766ba5894d603c338cbc4f6e1f0377cf3ffe3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3cf2ae7099599e534f710f9d11306d6de4b8e160f80e3febf76adf74d285d5f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cf2ae7099599e534f710f9d11306d6de4b8e160f80e3febf76adf74d285d5f4->enter($__internal_3cf2ae7099599e534f710f9d11306d6de4b8e160f80e3febf76adf74d285d5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_be0127d97c26389b5763827a682a690a68b8652a75075857aad0e7ccf4bb562c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0127d97c26389b5763827a682a690a68b8652a75075857aad0e7ccf4bb562c->enter($__internal_be0127d97c26389b5763827a682a690a68b8652a75075857aad0e7ccf4bb562c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_be0127d97c26389b5763827a682a690a68b8652a75075857aad0e7ccf4bb562c->leave($__internal_be0127d97c26389b5763827a682a690a68b8652a75075857aad0e7ccf4bb562c_prof);

        
        $__internal_3cf2ae7099599e534f710f9d11306d6de4b8e160f80e3febf76adf74d285d5f4->leave($__internal_3cf2ae7099599e534f710f9d11306d6de4b8e160f80e3febf76adf74d285d5f4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
