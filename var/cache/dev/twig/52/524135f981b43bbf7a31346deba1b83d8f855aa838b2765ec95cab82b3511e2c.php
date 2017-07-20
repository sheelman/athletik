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
        $__internal_06589c5a4104d143ff899c64c1461e24e621fa2d2875716776948f6751ba686b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06589c5a4104d143ff899c64c1461e24e621fa2d2875716776948f6751ba686b->enter($__internal_06589c5a4104d143ff899c64c1461e24e621fa2d2875716776948f6751ba686b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_780d7d80a8c217f9b14cd60014e822942eedc7cf2fe593f018bf04001f3c85fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_780d7d80a8c217f9b14cd60014e822942eedc7cf2fe593f018bf04001f3c85fd->enter($__internal_780d7d80a8c217f9b14cd60014e822942eedc7cf2fe593f018bf04001f3c85fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06589c5a4104d143ff899c64c1461e24e621fa2d2875716776948f6751ba686b->leave($__internal_06589c5a4104d143ff899c64c1461e24e621fa2d2875716776948f6751ba686b_prof);

        
        $__internal_780d7d80a8c217f9b14cd60014e822942eedc7cf2fe593f018bf04001f3c85fd->leave($__internal_780d7d80a8c217f9b14cd60014e822942eedc7cf2fe593f018bf04001f3c85fd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2fb34f9730e443ccdecfcf945440738a22ede30df56ad5313bc97bf99da6cd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2fb34f9730e443ccdecfcf945440738a22ede30df56ad5313bc97bf99da6cd6->enter($__internal_a2fb34f9730e443ccdecfcf945440738a22ede30df56ad5313bc97bf99da6cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bfe76e944dc2be4ab59b4be20963481fcc9d7a474ce7cce7ce2ba77598a813ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfe76e944dc2be4ab59b4be20963481fcc9d7a474ce7cce7ce2ba77598a813ea->enter($__internal_bfe76e944dc2be4ab59b4be20963481fcc9d7a474ce7cce7ce2ba77598a813ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bfe76e944dc2be4ab59b4be20963481fcc9d7a474ce7cce7ce2ba77598a813ea->leave($__internal_bfe76e944dc2be4ab59b4be20963481fcc9d7a474ce7cce7ce2ba77598a813ea_prof);

        
        $__internal_a2fb34f9730e443ccdecfcf945440738a22ede30df56ad5313bc97bf99da6cd6->leave($__internal_a2fb34f9730e443ccdecfcf945440738a22ede30df56ad5313bc97bf99da6cd6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_55e8cc84573db8fd6a525a07933a486a7bc075c34cdd4af024f791cf5879e37e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55e8cc84573db8fd6a525a07933a486a7bc075c34cdd4af024f791cf5879e37e->enter($__internal_55e8cc84573db8fd6a525a07933a486a7bc075c34cdd4af024f791cf5879e37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_359b1a103360018505785da3ff9289ee7c22f381ef25e62c2c823decc0493c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_359b1a103360018505785da3ff9289ee7c22f381ef25e62c2c823decc0493c78->enter($__internal_359b1a103360018505785da3ff9289ee7c22f381ef25e62c2c823decc0493c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_359b1a103360018505785da3ff9289ee7c22f381ef25e62c2c823decc0493c78->leave($__internal_359b1a103360018505785da3ff9289ee7c22f381ef25e62c2c823decc0493c78_prof);

        
        $__internal_55e8cc84573db8fd6a525a07933a486a7bc075c34cdd4af024f791cf5879e37e->leave($__internal_55e8cc84573db8fd6a525a07933a486a7bc075c34cdd4af024f791cf5879e37e_prof);

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
