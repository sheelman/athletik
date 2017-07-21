<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a00bf4f88228b1ec5522c70360d13db011d58739c8d38fcac066988f4fd688a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a00bf4f88228b1ec5522c70360d13db011d58739c8d38fcac066988f4fd688a6->enter($__internal_a00bf4f88228b1ec5522c70360d13db011d58739c8d38fcac066988f4fd688a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_ccc34698f615be0ad832fa810222d197715dba95dcdfdbb55b2790c4b8c81d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccc34698f615be0ad832fa810222d197715dba95dcdfdbb55b2790c4b8c81d66->enter($__internal_ccc34698f615be0ad832fa810222d197715dba95dcdfdbb55b2790c4b8c81d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a00bf4f88228b1ec5522c70360d13db011d58739c8d38fcac066988f4fd688a6->leave($__internal_a00bf4f88228b1ec5522c70360d13db011d58739c8d38fcac066988f4fd688a6_prof);

        
        $__internal_ccc34698f615be0ad832fa810222d197715dba95dcdfdbb55b2790c4b8c81d66->leave($__internal_ccc34698f615be0ad832fa810222d197715dba95dcdfdbb55b2790c4b8c81d66_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_07d3cbe82941204d15a06594a2a1ef00c396ea0c172737bec30d2660f754b321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07d3cbe82941204d15a06594a2a1ef00c396ea0c172737bec30d2660f754b321->enter($__internal_07d3cbe82941204d15a06594a2a1ef00c396ea0c172737bec30d2660f754b321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9bdfd461bb1472e454a870da7a831df45dfbcee796109df7e1f0efeeba2f2b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bdfd461bb1472e454a870da7a831df45dfbcee796109df7e1f0efeeba2f2b2d->enter($__internal_9bdfd461bb1472e454a870da7a831df45dfbcee796109df7e1f0efeeba2f2b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9bdfd461bb1472e454a870da7a831df45dfbcee796109df7e1f0efeeba2f2b2d->leave($__internal_9bdfd461bb1472e454a870da7a831df45dfbcee796109df7e1f0efeeba2f2b2d_prof);

        
        $__internal_07d3cbe82941204d15a06594a2a1ef00c396ea0c172737bec30d2660f754b321->leave($__internal_07d3cbe82941204d15a06594a2a1ef00c396ea0c172737bec30d2660f754b321_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d23d4a39716e92254bcadfd45f331cd110ccc8ca3651f5bbd2c3a7cfe28042bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d23d4a39716e92254bcadfd45f331cd110ccc8ca3651f5bbd2c3a7cfe28042bb->enter($__internal_d23d4a39716e92254bcadfd45f331cd110ccc8ca3651f5bbd2c3a7cfe28042bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e65332757cd7075ff5f3afb37f0a412cdc4879b29f02837407ee03b141d03f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e65332757cd7075ff5f3afb37f0a412cdc4879b29f02837407ee03b141d03f56->enter($__internal_e65332757cd7075ff5f3afb37f0a412cdc4879b29f02837407ee03b141d03f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e65332757cd7075ff5f3afb37f0a412cdc4879b29f02837407ee03b141d03f56->leave($__internal_e65332757cd7075ff5f3afb37f0a412cdc4879b29f02837407ee03b141d03f56_prof);

        
        $__internal_d23d4a39716e92254bcadfd45f331cd110ccc8ca3651f5bbd2c3a7cfe28042bb->leave($__internal_d23d4a39716e92254bcadfd45f331cd110ccc8ca3651f5bbd2c3a7cfe28042bb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f470e1de229f3bffa63e68d4b070ee4dcdfabf249cb95c26d4e05a962c64c1df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f470e1de229f3bffa63e68d4b070ee4dcdfabf249cb95c26d4e05a962c64c1df->enter($__internal_f470e1de229f3bffa63e68d4b070ee4dcdfabf249cb95c26d4e05a962c64c1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cdb93d85e3ae22d02bee898c3510b0dfc23dc9805706f1746a5a4285c0fce5ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdb93d85e3ae22d02bee898c3510b0dfc23dc9805706f1746a5a4285c0fce5ed->enter($__internal_cdb93d85e3ae22d02bee898c3510b0dfc23dc9805706f1746a5a4285c0fce5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_cdb93d85e3ae22d02bee898c3510b0dfc23dc9805706f1746a5a4285c0fce5ed->leave($__internal_cdb93d85e3ae22d02bee898c3510b0dfc23dc9805706f1746a5a4285c0fce5ed_prof);

        
        $__internal_f470e1de229f3bffa63e68d4b070ee4dcdfabf249cb95c26d4e05a962c64c1df->leave($__internal_f470e1de229f3bffa63e68d4b070ee4dcdfabf249cb95c26d4e05a962c64c1df_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
