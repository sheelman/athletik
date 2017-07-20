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
        $__internal_b0772b3f791100b3a563c2db1eaac019394e47cd261bdd5df0ae9f1b76fd1efa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0772b3f791100b3a563c2db1eaac019394e47cd261bdd5df0ae9f1b76fd1efa->enter($__internal_b0772b3f791100b3a563c2db1eaac019394e47cd261bdd5df0ae9f1b76fd1efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_f99035f911d1d3b807dc837b5f00e2d4061e9dfbd9100cc2aa3369523dfa6c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f99035f911d1d3b807dc837b5f00e2d4061e9dfbd9100cc2aa3369523dfa6c4e->enter($__internal_f99035f911d1d3b807dc837b5f00e2d4061e9dfbd9100cc2aa3369523dfa6c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0772b3f791100b3a563c2db1eaac019394e47cd261bdd5df0ae9f1b76fd1efa->leave($__internal_b0772b3f791100b3a563c2db1eaac019394e47cd261bdd5df0ae9f1b76fd1efa_prof);

        
        $__internal_f99035f911d1d3b807dc837b5f00e2d4061e9dfbd9100cc2aa3369523dfa6c4e->leave($__internal_f99035f911d1d3b807dc837b5f00e2d4061e9dfbd9100cc2aa3369523dfa6c4e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f80b9f8626d1753a4cb806124f2a4bf5e32695cf3115508d104a175a22f4310f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f80b9f8626d1753a4cb806124f2a4bf5e32695cf3115508d104a175a22f4310f->enter($__internal_f80b9f8626d1753a4cb806124f2a4bf5e32695cf3115508d104a175a22f4310f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4f804c7fc2dccc1bff5b7b1ce11a1a3e5a60b8635f6098bfcdac136ad5977e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f804c7fc2dccc1bff5b7b1ce11a1a3e5a60b8635f6098bfcdac136ad5977e3c->enter($__internal_4f804c7fc2dccc1bff5b7b1ce11a1a3e5a60b8635f6098bfcdac136ad5977e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4f804c7fc2dccc1bff5b7b1ce11a1a3e5a60b8635f6098bfcdac136ad5977e3c->leave($__internal_4f804c7fc2dccc1bff5b7b1ce11a1a3e5a60b8635f6098bfcdac136ad5977e3c_prof);

        
        $__internal_f80b9f8626d1753a4cb806124f2a4bf5e32695cf3115508d104a175a22f4310f->leave($__internal_f80b9f8626d1753a4cb806124f2a4bf5e32695cf3115508d104a175a22f4310f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5140733a0f18820419aff740d80c7a25f1f36d513292335f5790838549c4b4bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5140733a0f18820419aff740d80c7a25f1f36d513292335f5790838549c4b4bb->enter($__internal_5140733a0f18820419aff740d80c7a25f1f36d513292335f5790838549c4b4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_795a8ec41038437d99d1890e0c33488ffa1502af8bc57e54a8a67e53dd28161c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_795a8ec41038437d99d1890e0c33488ffa1502af8bc57e54a8a67e53dd28161c->enter($__internal_795a8ec41038437d99d1890e0c33488ffa1502af8bc57e54a8a67e53dd28161c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_795a8ec41038437d99d1890e0c33488ffa1502af8bc57e54a8a67e53dd28161c->leave($__internal_795a8ec41038437d99d1890e0c33488ffa1502af8bc57e54a8a67e53dd28161c_prof);

        
        $__internal_5140733a0f18820419aff740d80c7a25f1f36d513292335f5790838549c4b4bb->leave($__internal_5140733a0f18820419aff740d80c7a25f1f36d513292335f5790838549c4b4bb_prof);

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
