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
        $__internal_c307eb62393455857bd3e33ec874c73dfa377a37ec1fa6660a610cf03bc53c5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c307eb62393455857bd3e33ec874c73dfa377a37ec1fa6660a610cf03bc53c5e->enter($__internal_c307eb62393455857bd3e33ec874c73dfa377a37ec1fa6660a610cf03bc53c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_f865836aaacfe377814525ce08f0f212fccc2ebddf83c458204869075724a717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f865836aaacfe377814525ce08f0f212fccc2ebddf83c458204869075724a717->enter($__internal_f865836aaacfe377814525ce08f0f212fccc2ebddf83c458204869075724a717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c307eb62393455857bd3e33ec874c73dfa377a37ec1fa6660a610cf03bc53c5e->leave($__internal_c307eb62393455857bd3e33ec874c73dfa377a37ec1fa6660a610cf03bc53c5e_prof);

        
        $__internal_f865836aaacfe377814525ce08f0f212fccc2ebddf83c458204869075724a717->leave($__internal_f865836aaacfe377814525ce08f0f212fccc2ebddf83c458204869075724a717_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_076d70e76643bd34cea9336dd46c4e84e57e3a5421b5e0c42aab09f83287aa9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_076d70e76643bd34cea9336dd46c4e84e57e3a5421b5e0c42aab09f83287aa9a->enter($__internal_076d70e76643bd34cea9336dd46c4e84e57e3a5421b5e0c42aab09f83287aa9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2b7cecc3296f5c0e6855a4dc68d79a1364e1df10920fa5085f8999c66f772e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b7cecc3296f5c0e6855a4dc68d79a1364e1df10920fa5085f8999c66f772e3f->enter($__internal_2b7cecc3296f5c0e6855a4dc68d79a1364e1df10920fa5085f8999c66f772e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2b7cecc3296f5c0e6855a4dc68d79a1364e1df10920fa5085f8999c66f772e3f->leave($__internal_2b7cecc3296f5c0e6855a4dc68d79a1364e1df10920fa5085f8999c66f772e3f_prof);

        
        $__internal_076d70e76643bd34cea9336dd46c4e84e57e3a5421b5e0c42aab09f83287aa9a->leave($__internal_076d70e76643bd34cea9336dd46c4e84e57e3a5421b5e0c42aab09f83287aa9a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d70103e88fdb137eea6de16c4fed1766b547f312692b1aa27a6bd5228001a16d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d70103e88fdb137eea6de16c4fed1766b547f312692b1aa27a6bd5228001a16d->enter($__internal_d70103e88fdb137eea6de16c4fed1766b547f312692b1aa27a6bd5228001a16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b53f9f2d2ea1e75de97bd08bfe124c5abd1ba60400c349255de57ae9abe5a12c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b53f9f2d2ea1e75de97bd08bfe124c5abd1ba60400c349255de57ae9abe5a12c->enter($__internal_b53f9f2d2ea1e75de97bd08bfe124c5abd1ba60400c349255de57ae9abe5a12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b53f9f2d2ea1e75de97bd08bfe124c5abd1ba60400c349255de57ae9abe5a12c->leave($__internal_b53f9f2d2ea1e75de97bd08bfe124c5abd1ba60400c349255de57ae9abe5a12c_prof);

        
        $__internal_d70103e88fdb137eea6de16c4fed1766b547f312692b1aa27a6bd5228001a16d->leave($__internal_d70103e88fdb137eea6de16c4fed1766b547f312692b1aa27a6bd5228001a16d_prof);

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
