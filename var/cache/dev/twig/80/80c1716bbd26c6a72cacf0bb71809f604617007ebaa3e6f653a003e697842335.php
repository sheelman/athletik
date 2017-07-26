<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_14ab2d7c696c7d32414ade94c06ef05d852ea5ec6e8abab7c33d8ddb1d0e29cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_773cdee46cfe6bf24923a9fc40ae0ce2c9f5ff8509ea2cb83e36cd8894220883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_773cdee46cfe6bf24923a9fc40ae0ce2c9f5ff8509ea2cb83e36cd8894220883->enter($__internal_773cdee46cfe6bf24923a9fc40ae0ce2c9f5ff8509ea2cb83e36cd8894220883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_2d5297483964fc994b53a89a77b10ad8ef3bb685b670095c659b8fac0345d585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d5297483964fc994b53a89a77b10ad8ef3bb685b670095c659b8fac0345d585->enter($__internal_2d5297483964fc994b53a89a77b10ad8ef3bb685b670095c659b8fac0345d585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_773cdee46cfe6bf24923a9fc40ae0ce2c9f5ff8509ea2cb83e36cd8894220883->leave($__internal_773cdee46cfe6bf24923a9fc40ae0ce2c9f5ff8509ea2cb83e36cd8894220883_prof);

        
        $__internal_2d5297483964fc994b53a89a77b10ad8ef3bb685b670095c659b8fac0345d585->leave($__internal_2d5297483964fc994b53a89a77b10ad8ef3bb685b670095c659b8fac0345d585_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_271741e73389c1cf910349ce0cc0884351f93d4c5e8527371ffa02806bd2dabb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_271741e73389c1cf910349ce0cc0884351f93d4c5e8527371ffa02806bd2dabb->enter($__internal_271741e73389c1cf910349ce0cc0884351f93d4c5e8527371ffa02806bd2dabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c625b4f5a7999742cefaa2d80d456068ba1b34660ca81aba1fe209f45bc37542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c625b4f5a7999742cefaa2d80d456068ba1b34660ca81aba1fe209f45bc37542->enter($__internal_c625b4f5a7999742cefaa2d80d456068ba1b34660ca81aba1fe209f45bc37542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_c625b4f5a7999742cefaa2d80d456068ba1b34660ca81aba1fe209f45bc37542->leave($__internal_c625b4f5a7999742cefaa2d80d456068ba1b34660ca81aba1fe209f45bc37542_prof);

        
        $__internal_271741e73389c1cf910349ce0cc0884351f93d4c5e8527371ffa02806bd2dabb->leave($__internal_271741e73389c1cf910349ce0cc0884351f93d4c5e8527371ffa02806bd2dabb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
