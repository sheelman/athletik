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
        $__internal_35b71dcf9df60f9b07e2f8b41497bf89a50a5e99de1e7bc1c2f7e6de02b60a41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35b71dcf9df60f9b07e2f8b41497bf89a50a5e99de1e7bc1c2f7e6de02b60a41->enter($__internal_35b71dcf9df60f9b07e2f8b41497bf89a50a5e99de1e7bc1c2f7e6de02b60a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_a679137f1ebdb32782aaa38513113bd683ce8e019e18f5d64b4a91ac8fccb964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a679137f1ebdb32782aaa38513113bd683ce8e019e18f5d64b4a91ac8fccb964->enter($__internal_a679137f1ebdb32782aaa38513113bd683ce8e019e18f5d64b4a91ac8fccb964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35b71dcf9df60f9b07e2f8b41497bf89a50a5e99de1e7bc1c2f7e6de02b60a41->leave($__internal_35b71dcf9df60f9b07e2f8b41497bf89a50a5e99de1e7bc1c2f7e6de02b60a41_prof);

        
        $__internal_a679137f1ebdb32782aaa38513113bd683ce8e019e18f5d64b4a91ac8fccb964->leave($__internal_a679137f1ebdb32782aaa38513113bd683ce8e019e18f5d64b4a91ac8fccb964_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_326c791ebe6985d4d591c2a2dc22845bea7a00c3de6ec0c3f3efb9ca79058e1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_326c791ebe6985d4d591c2a2dc22845bea7a00c3de6ec0c3f3efb9ca79058e1c->enter($__internal_326c791ebe6985d4d591c2a2dc22845bea7a00c3de6ec0c3f3efb9ca79058e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aecbcd3b71276d31eb761b2ff3d8f37e874bd350f1d74d9e61e8e6a0d2a4f8e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aecbcd3b71276d31eb761b2ff3d8f37e874bd350f1d74d9e61e8e6a0d2a4f8e5->enter($__internal_aecbcd3b71276d31eb761b2ff3d8f37e874bd350f1d74d9e61e8e6a0d2a4f8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_aecbcd3b71276d31eb761b2ff3d8f37e874bd350f1d74d9e61e8e6a0d2a4f8e5->leave($__internal_aecbcd3b71276d31eb761b2ff3d8f37e874bd350f1d74d9e61e8e6a0d2a4f8e5_prof);

        
        $__internal_326c791ebe6985d4d591c2a2dc22845bea7a00c3de6ec0c3f3efb9ca79058e1c->leave($__internal_326c791ebe6985d4d591c2a2dc22845bea7a00c3de6ec0c3f3efb9ca79058e1c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b306853a9c6287942b9b261e2eed70e227558a2a50c464470f4797020d63e0e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b306853a9c6287942b9b261e2eed70e227558a2a50c464470f4797020d63e0e5->enter($__internal_b306853a9c6287942b9b261e2eed70e227558a2a50c464470f4797020d63e0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fb1111a2d25cc40cbe949719bb684a2089b9b3c8a8401d5bf0540353216e84c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb1111a2d25cc40cbe949719bb684a2089b9b3c8a8401d5bf0540353216e84c8->enter($__internal_fb1111a2d25cc40cbe949719bb684a2089b9b3c8a8401d5bf0540353216e84c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_fb1111a2d25cc40cbe949719bb684a2089b9b3c8a8401d5bf0540353216e84c8->leave($__internal_fb1111a2d25cc40cbe949719bb684a2089b9b3c8a8401d5bf0540353216e84c8_prof);

        
        $__internal_b306853a9c6287942b9b261e2eed70e227558a2a50c464470f4797020d63e0e5->leave($__internal_b306853a9c6287942b9b261e2eed70e227558a2a50c464470f4797020d63e0e5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_128855184e29e3dbd312ad0977786799cddadb4b2216f82bf67f28589030e568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_128855184e29e3dbd312ad0977786799cddadb4b2216f82bf67f28589030e568->enter($__internal_128855184e29e3dbd312ad0977786799cddadb4b2216f82bf67f28589030e568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_83d1e5edb7a762e258bc26dbe701001f34898788c11691b55da5df9764190a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d1e5edb7a762e258bc26dbe701001f34898788c11691b55da5df9764190a39->enter($__internal_83d1e5edb7a762e258bc26dbe701001f34898788c11691b55da5df9764190a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_83d1e5edb7a762e258bc26dbe701001f34898788c11691b55da5df9764190a39->leave($__internal_83d1e5edb7a762e258bc26dbe701001f34898788c11691b55da5df9764190a39_prof);

        
        $__internal_128855184e29e3dbd312ad0977786799cddadb4b2216f82bf67f28589030e568->leave($__internal_128855184e29e3dbd312ad0977786799cddadb4b2216f82bf67f28589030e568_prof);

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
