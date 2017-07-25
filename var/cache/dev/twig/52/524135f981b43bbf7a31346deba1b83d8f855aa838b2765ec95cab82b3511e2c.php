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
        $__internal_a87329c0eb00a5c855c4fe3fbd87592d688265d95901df05931ba49d3b42cdaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a87329c0eb00a5c855c4fe3fbd87592d688265d95901df05931ba49d3b42cdaf->enter($__internal_a87329c0eb00a5c855c4fe3fbd87592d688265d95901df05931ba49d3b42cdaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_1009b04bb641eaad0988dd1a24ace341f4133d185c4ae1089040e0304ec3887d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1009b04bb641eaad0988dd1a24ace341f4133d185c4ae1089040e0304ec3887d->enter($__internal_1009b04bb641eaad0988dd1a24ace341f4133d185c4ae1089040e0304ec3887d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a87329c0eb00a5c855c4fe3fbd87592d688265d95901df05931ba49d3b42cdaf->leave($__internal_a87329c0eb00a5c855c4fe3fbd87592d688265d95901df05931ba49d3b42cdaf_prof);

        
        $__internal_1009b04bb641eaad0988dd1a24ace341f4133d185c4ae1089040e0304ec3887d->leave($__internal_1009b04bb641eaad0988dd1a24ace341f4133d185c4ae1089040e0304ec3887d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbfcff63be214e0560b600738d74174fe3fdc1c1039138f0cc7cc1a821f07f05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbfcff63be214e0560b600738d74174fe3fdc1c1039138f0cc7cc1a821f07f05->enter($__internal_dbfcff63be214e0560b600738d74174fe3fdc1c1039138f0cc7cc1a821f07f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fff666400cde3f39742dc47b126b3a83740e415d9f2a1dd9ef0268f1aa8b8ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fff666400cde3f39742dc47b126b3a83740e415d9f2a1dd9ef0268f1aa8b8ca1->enter($__internal_fff666400cde3f39742dc47b126b3a83740e415d9f2a1dd9ef0268f1aa8b8ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fff666400cde3f39742dc47b126b3a83740e415d9f2a1dd9ef0268f1aa8b8ca1->leave($__internal_fff666400cde3f39742dc47b126b3a83740e415d9f2a1dd9ef0268f1aa8b8ca1_prof);

        
        $__internal_dbfcff63be214e0560b600738d74174fe3fdc1c1039138f0cc7cc1a821f07f05->leave($__internal_dbfcff63be214e0560b600738d74174fe3fdc1c1039138f0cc7cc1a821f07f05_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5e1fbc4ccc58a12c098ef2efb7da81ee8888b48ae34f7a3e4582219bcd4187f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5e1fbc4ccc58a12c098ef2efb7da81ee8888b48ae34f7a3e4582219bcd4187f->enter($__internal_d5e1fbc4ccc58a12c098ef2efb7da81ee8888b48ae34f7a3e4582219bcd4187f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f45811dfd710906c61b78adb5475c85a31082e81f3998d7ca5c8ac6a27f2fe93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f45811dfd710906c61b78adb5475c85a31082e81f3998d7ca5c8ac6a27f2fe93->enter($__internal_f45811dfd710906c61b78adb5475c85a31082e81f3998d7ca5c8ac6a27f2fe93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f45811dfd710906c61b78adb5475c85a31082e81f3998d7ca5c8ac6a27f2fe93->leave($__internal_f45811dfd710906c61b78adb5475c85a31082e81f3998d7ca5c8ac6a27f2fe93_prof);

        
        $__internal_d5e1fbc4ccc58a12c098ef2efb7da81ee8888b48ae34f7a3e4582219bcd4187f->leave($__internal_d5e1fbc4ccc58a12c098ef2efb7da81ee8888b48ae34f7a3e4582219bcd4187f_prof);

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
