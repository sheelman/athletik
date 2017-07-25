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
        $__internal_8826a0a97e8625f502aa43ffb97494b928d3de9f58bbef3a2a2c8c08a21da121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8826a0a97e8625f502aa43ffb97494b928d3de9f58bbef3a2a2c8c08a21da121->enter($__internal_8826a0a97e8625f502aa43ffb97494b928d3de9f58bbef3a2a2c8c08a21da121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_814672e9ca05a261d7a1bdf01c91d644362a1ffc3549f6e205532a45f4a5e538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_814672e9ca05a261d7a1bdf01c91d644362a1ffc3549f6e205532a45f4a5e538->enter($__internal_814672e9ca05a261d7a1bdf01c91d644362a1ffc3549f6e205532a45f4a5e538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8826a0a97e8625f502aa43ffb97494b928d3de9f58bbef3a2a2c8c08a21da121->leave($__internal_8826a0a97e8625f502aa43ffb97494b928d3de9f58bbef3a2a2c8c08a21da121_prof);

        
        $__internal_814672e9ca05a261d7a1bdf01c91d644362a1ffc3549f6e205532a45f4a5e538->leave($__internal_814672e9ca05a261d7a1bdf01c91d644362a1ffc3549f6e205532a45f4a5e538_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_986907ea4926a44faaf409df236560e8c42b704ab9fd6cbc1598b29c8b3d6382 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_986907ea4926a44faaf409df236560e8c42b704ab9fd6cbc1598b29c8b3d6382->enter($__internal_986907ea4926a44faaf409df236560e8c42b704ab9fd6cbc1598b29c8b3d6382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b7872a525eeddb813fc9ba56fe406fc79daa28c306ed2738009cd97631bc42da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7872a525eeddb813fc9ba56fe406fc79daa28c306ed2738009cd97631bc42da->enter($__internal_b7872a525eeddb813fc9ba56fe406fc79daa28c306ed2738009cd97631bc42da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_b7872a525eeddb813fc9ba56fe406fc79daa28c306ed2738009cd97631bc42da->leave($__internal_b7872a525eeddb813fc9ba56fe406fc79daa28c306ed2738009cd97631bc42da_prof);

        
        $__internal_986907ea4926a44faaf409df236560e8c42b704ab9fd6cbc1598b29c8b3d6382->leave($__internal_986907ea4926a44faaf409df236560e8c42b704ab9fd6cbc1598b29c8b3d6382_prof);

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
