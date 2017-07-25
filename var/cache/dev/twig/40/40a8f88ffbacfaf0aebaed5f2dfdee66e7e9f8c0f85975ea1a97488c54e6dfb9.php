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
        $__internal_981e87980707a8273fa5f37b6f87ebbb2651e3d8e175192704f8f68b729ab9bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_981e87980707a8273fa5f37b6f87ebbb2651e3d8e175192704f8f68b729ab9bc->enter($__internal_981e87980707a8273fa5f37b6f87ebbb2651e3d8e175192704f8f68b729ab9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_728ca71b7bc604e71a594723706c8fef89e42a6d734e61c3867db0c4959dc496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_728ca71b7bc604e71a594723706c8fef89e42a6d734e61c3867db0c4959dc496->enter($__internal_728ca71b7bc604e71a594723706c8fef89e42a6d734e61c3867db0c4959dc496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_981e87980707a8273fa5f37b6f87ebbb2651e3d8e175192704f8f68b729ab9bc->leave($__internal_981e87980707a8273fa5f37b6f87ebbb2651e3d8e175192704f8f68b729ab9bc_prof);

        
        $__internal_728ca71b7bc604e71a594723706c8fef89e42a6d734e61c3867db0c4959dc496->leave($__internal_728ca71b7bc604e71a594723706c8fef89e42a6d734e61c3867db0c4959dc496_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3201cc07beb486064832a3e00c71eb3279d9b0faece93c6e2aeae29f8e7eb078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3201cc07beb486064832a3e00c71eb3279d9b0faece93c6e2aeae29f8e7eb078->enter($__internal_3201cc07beb486064832a3e00c71eb3279d9b0faece93c6e2aeae29f8e7eb078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e4f0e59611802aca0c7ba4c2fcedd41af7956cb80a7a2935fd979b1eb42b9daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f0e59611802aca0c7ba4c2fcedd41af7956cb80a7a2935fd979b1eb42b9daf->enter($__internal_e4f0e59611802aca0c7ba4c2fcedd41af7956cb80a7a2935fd979b1eb42b9daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e4f0e59611802aca0c7ba4c2fcedd41af7956cb80a7a2935fd979b1eb42b9daf->leave($__internal_e4f0e59611802aca0c7ba4c2fcedd41af7956cb80a7a2935fd979b1eb42b9daf_prof);

        
        $__internal_3201cc07beb486064832a3e00c71eb3279d9b0faece93c6e2aeae29f8e7eb078->leave($__internal_3201cc07beb486064832a3e00c71eb3279d9b0faece93c6e2aeae29f8e7eb078_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c4bd604596a2b5960efd969eee71147a2128d25ca4e78a79bc99352140f1ec74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4bd604596a2b5960efd969eee71147a2128d25ca4e78a79bc99352140f1ec74->enter($__internal_c4bd604596a2b5960efd969eee71147a2128d25ca4e78a79bc99352140f1ec74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9e2e56542c38118b3002eab8cfc32d910a49a9e383edea2ad60d2b2c8270483d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e2e56542c38118b3002eab8cfc32d910a49a9e383edea2ad60d2b2c8270483d->enter($__internal_9e2e56542c38118b3002eab8cfc32d910a49a9e383edea2ad60d2b2c8270483d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9e2e56542c38118b3002eab8cfc32d910a49a9e383edea2ad60d2b2c8270483d->leave($__internal_9e2e56542c38118b3002eab8cfc32d910a49a9e383edea2ad60d2b2c8270483d_prof);

        
        $__internal_c4bd604596a2b5960efd969eee71147a2128d25ca4e78a79bc99352140f1ec74->leave($__internal_c4bd604596a2b5960efd969eee71147a2128d25ca4e78a79bc99352140f1ec74_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_70e788899856d770674495f603d62fa791e73e5261cee7317c222a12e5a6c406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70e788899856d770674495f603d62fa791e73e5261cee7317c222a12e5a6c406->enter($__internal_70e788899856d770674495f603d62fa791e73e5261cee7317c222a12e5a6c406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_852d9773825907d968ba1c74e517b9cdc312052b60aac84db7e1051ec5004d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_852d9773825907d968ba1c74e517b9cdc312052b60aac84db7e1051ec5004d98->enter($__internal_852d9773825907d968ba1c74e517b9cdc312052b60aac84db7e1051ec5004d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_852d9773825907d968ba1c74e517b9cdc312052b60aac84db7e1051ec5004d98->leave($__internal_852d9773825907d968ba1c74e517b9cdc312052b60aac84db7e1051ec5004d98_prof);

        
        $__internal_70e788899856d770674495f603d62fa791e73e5261cee7317c222a12e5a6c406->leave($__internal_70e788899856d770674495f603d62fa791e73e5261cee7317c222a12e5a6c406_prof);

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
