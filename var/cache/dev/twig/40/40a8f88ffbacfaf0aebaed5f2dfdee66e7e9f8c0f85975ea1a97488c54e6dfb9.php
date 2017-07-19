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
        $__internal_0a069b3d79adfd3c38b0a8758330f9187b033865d789e8cf1646528906cd4d82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a069b3d79adfd3c38b0a8758330f9187b033865d789e8cf1646528906cd4d82->enter($__internal_0a069b3d79adfd3c38b0a8758330f9187b033865d789e8cf1646528906cd4d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_ad91bdd6648df80d49e047123194b16d19d5909fc5049a847694695c5e6e3029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad91bdd6648df80d49e047123194b16d19d5909fc5049a847694695c5e6e3029->enter($__internal_ad91bdd6648df80d49e047123194b16d19d5909fc5049a847694695c5e6e3029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a069b3d79adfd3c38b0a8758330f9187b033865d789e8cf1646528906cd4d82->leave($__internal_0a069b3d79adfd3c38b0a8758330f9187b033865d789e8cf1646528906cd4d82_prof);

        
        $__internal_ad91bdd6648df80d49e047123194b16d19d5909fc5049a847694695c5e6e3029->leave($__internal_ad91bdd6648df80d49e047123194b16d19d5909fc5049a847694695c5e6e3029_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bd849abd1ea3db3e57c4de7e992d77f26a330960982017f0845a647c54325b59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd849abd1ea3db3e57c4de7e992d77f26a330960982017f0845a647c54325b59->enter($__internal_bd849abd1ea3db3e57c4de7e992d77f26a330960982017f0845a647c54325b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_804a25ce3a390601fe08842690af3a8d5dedfe960c65176ce5e2ec5a35ada323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804a25ce3a390601fe08842690af3a8d5dedfe960c65176ce5e2ec5a35ada323->enter($__internal_804a25ce3a390601fe08842690af3a8d5dedfe960c65176ce5e2ec5a35ada323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_804a25ce3a390601fe08842690af3a8d5dedfe960c65176ce5e2ec5a35ada323->leave($__internal_804a25ce3a390601fe08842690af3a8d5dedfe960c65176ce5e2ec5a35ada323_prof);

        
        $__internal_bd849abd1ea3db3e57c4de7e992d77f26a330960982017f0845a647c54325b59->leave($__internal_bd849abd1ea3db3e57c4de7e992d77f26a330960982017f0845a647c54325b59_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ca31a0c645a026973688cd416e6edb5e9e353bcccbacf94bf83ee6716986d077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca31a0c645a026973688cd416e6edb5e9e353bcccbacf94bf83ee6716986d077->enter($__internal_ca31a0c645a026973688cd416e6edb5e9e353bcccbacf94bf83ee6716986d077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_49960b83e73cc90921788900ab8cc56d0e518f7eeb47aea17f4d79b802aa9051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49960b83e73cc90921788900ab8cc56d0e518f7eeb47aea17f4d79b802aa9051->enter($__internal_49960b83e73cc90921788900ab8cc56d0e518f7eeb47aea17f4d79b802aa9051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_49960b83e73cc90921788900ab8cc56d0e518f7eeb47aea17f4d79b802aa9051->leave($__internal_49960b83e73cc90921788900ab8cc56d0e518f7eeb47aea17f4d79b802aa9051_prof);

        
        $__internal_ca31a0c645a026973688cd416e6edb5e9e353bcccbacf94bf83ee6716986d077->leave($__internal_ca31a0c645a026973688cd416e6edb5e9e353bcccbacf94bf83ee6716986d077_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_931d42ec8427ae5923db4677e7c8147318659257e01e41812aabbd695a42cab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_931d42ec8427ae5923db4677e7c8147318659257e01e41812aabbd695a42cab3->enter($__internal_931d42ec8427ae5923db4677e7c8147318659257e01e41812aabbd695a42cab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e52dc02880b02e1bba0d0a19241591b868cc2f133c2d1b54eb340e68119043e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e52dc02880b02e1bba0d0a19241591b868cc2f133c2d1b54eb340e68119043e5->enter($__internal_e52dc02880b02e1bba0d0a19241591b868cc2f133c2d1b54eb340e68119043e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e52dc02880b02e1bba0d0a19241591b868cc2f133c2d1b54eb340e68119043e5->leave($__internal_e52dc02880b02e1bba0d0a19241591b868cc2f133c2d1b54eb340e68119043e5_prof);

        
        $__internal_931d42ec8427ae5923db4677e7c8147318659257e01e41812aabbd695a42cab3->leave($__internal_931d42ec8427ae5923db4677e7c8147318659257e01e41812aabbd695a42cab3_prof);

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
