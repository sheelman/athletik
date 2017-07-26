<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_02d845a49bdd57a4be066814fe8a9768b23f387ad2777b19ef633ba46046768f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30e20e9bccf842f4e9998dd305ea0ced99bf3fde3968c4598e9cbe5b741bbc6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30e20e9bccf842f4e9998dd305ea0ced99bf3fde3968c4598e9cbe5b741bbc6d->enter($__internal_30e20e9bccf842f4e9998dd305ea0ced99bf3fde3968c4598e9cbe5b741bbc6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_730feb62dad0011729f92eddacecc23cdd1d8a0877d906ffa96b74b1f7e1e04d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_730feb62dad0011729f92eddacecc23cdd1d8a0877d906ffa96b74b1f7e1e04d->enter($__internal_730feb62dad0011729f92eddacecc23cdd1d8a0877d906ffa96b74b1f7e1e04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30e20e9bccf842f4e9998dd305ea0ced99bf3fde3968c4598e9cbe5b741bbc6d->leave($__internal_30e20e9bccf842f4e9998dd305ea0ced99bf3fde3968c4598e9cbe5b741bbc6d_prof);

        
        $__internal_730feb62dad0011729f92eddacecc23cdd1d8a0877d906ffa96b74b1f7e1e04d->leave($__internal_730feb62dad0011729f92eddacecc23cdd1d8a0877d906ffa96b74b1f7e1e04d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9af759389ef1ef5b4817e15c212f95c61c981be0914922006f22934578d951cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9af759389ef1ef5b4817e15c212f95c61c981be0914922006f22934578d951cb->enter($__internal_9af759389ef1ef5b4817e15c212f95c61c981be0914922006f22934578d951cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_048dc86092c2fa7dabe53a66be266e47877cb2c24d473d1d0d13840cebaefd2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_048dc86092c2fa7dabe53a66be266e47877cb2c24d473d1d0d13840cebaefd2a->enter($__internal_048dc86092c2fa7dabe53a66be266e47877cb2c24d473d1d0d13840cebaefd2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_048dc86092c2fa7dabe53a66be266e47877cb2c24d473d1d0d13840cebaefd2a->leave($__internal_048dc86092c2fa7dabe53a66be266e47877cb2c24d473d1d0d13840cebaefd2a_prof);

        
        $__internal_9af759389ef1ef5b4817e15c212f95c61c981be0914922006f22934578d951cb->leave($__internal_9af759389ef1ef5b4817e15c212f95c61c981be0914922006f22934578d951cb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a06b761d1a929dd9f307f50f2ad19d811ffc238d735ec2977bf145a2edb4c460 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a06b761d1a929dd9f307f50f2ad19d811ffc238d735ec2977bf145a2edb4c460->enter($__internal_a06b761d1a929dd9f307f50f2ad19d811ffc238d735ec2977bf145a2edb4c460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4bb886c4ab022cc86b71ebdcecddad87768f9b90441a51251f2d0211bbfbd641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb886c4ab022cc86b71ebdcecddad87768f9b90441a51251f2d0211bbfbd641->enter($__internal_4bb886c4ab022cc86b71ebdcecddad87768f9b90441a51251f2d0211bbfbd641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_4bb886c4ab022cc86b71ebdcecddad87768f9b90441a51251f2d0211bbfbd641->leave($__internal_4bb886c4ab022cc86b71ebdcecddad87768f9b90441a51251f2d0211bbfbd641_prof);

        
        $__internal_a06b761d1a929dd9f307f50f2ad19d811ffc238d735ec2977bf145a2edb4c460->leave($__internal_a06b761d1a929dd9f307f50f2ad19d811ffc238d735ec2977bf145a2edb4c460_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
