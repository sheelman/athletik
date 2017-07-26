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
        $__internal_837d06cac6f47eb84164facc6e68f9432eb25f7ac2803f463c77ccfe79e70bd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_837d06cac6f47eb84164facc6e68f9432eb25f7ac2803f463c77ccfe79e70bd1->enter($__internal_837d06cac6f47eb84164facc6e68f9432eb25f7ac2803f463c77ccfe79e70bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_c3d176413bf42c0d6859797b1c523875e3ea2eff187dc09c0680adc6bee078e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d176413bf42c0d6859797b1c523875e3ea2eff187dc09c0680adc6bee078e7->enter($__internal_c3d176413bf42c0d6859797b1c523875e3ea2eff187dc09c0680adc6bee078e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_837d06cac6f47eb84164facc6e68f9432eb25f7ac2803f463c77ccfe79e70bd1->leave($__internal_837d06cac6f47eb84164facc6e68f9432eb25f7ac2803f463c77ccfe79e70bd1_prof);

        
        $__internal_c3d176413bf42c0d6859797b1c523875e3ea2eff187dc09c0680adc6bee078e7->leave($__internal_c3d176413bf42c0d6859797b1c523875e3ea2eff187dc09c0680adc6bee078e7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5dd05ba2601ef2855ad6d6b59f4c6a64164893b500f7b13f6a0f47de5f41aafb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dd05ba2601ef2855ad6d6b59f4c6a64164893b500f7b13f6a0f47de5f41aafb->enter($__internal_5dd05ba2601ef2855ad6d6b59f4c6a64164893b500f7b13f6a0f47de5f41aafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4fabbb840f6e08e0f41be575c665134f192685da2ada911a73c0831d17b3dfbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fabbb840f6e08e0f41be575c665134f192685da2ada911a73c0831d17b3dfbc->enter($__internal_4fabbb840f6e08e0f41be575c665134f192685da2ada911a73c0831d17b3dfbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4fabbb840f6e08e0f41be575c665134f192685da2ada911a73c0831d17b3dfbc->leave($__internal_4fabbb840f6e08e0f41be575c665134f192685da2ada911a73c0831d17b3dfbc_prof);

        
        $__internal_5dd05ba2601ef2855ad6d6b59f4c6a64164893b500f7b13f6a0f47de5f41aafb->leave($__internal_5dd05ba2601ef2855ad6d6b59f4c6a64164893b500f7b13f6a0f47de5f41aafb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dd7a4d1a3144baf31378796a961d2c3a2bde9e052da2c742e297281aa4118062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd7a4d1a3144baf31378796a961d2c3a2bde9e052da2c742e297281aa4118062->enter($__internal_dd7a4d1a3144baf31378796a961d2c3a2bde9e052da2c742e297281aa4118062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e39819f2efdb597daec37484572c56fbec9dccd94daf96fc4f4b0eade03e67ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e39819f2efdb597daec37484572c56fbec9dccd94daf96fc4f4b0eade03e67ae->enter($__internal_e39819f2efdb597daec37484572c56fbec9dccd94daf96fc4f4b0eade03e67ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e39819f2efdb597daec37484572c56fbec9dccd94daf96fc4f4b0eade03e67ae->leave($__internal_e39819f2efdb597daec37484572c56fbec9dccd94daf96fc4f4b0eade03e67ae_prof);

        
        $__internal_dd7a4d1a3144baf31378796a961d2c3a2bde9e052da2c742e297281aa4118062->leave($__internal_dd7a4d1a3144baf31378796a961d2c3a2bde9e052da2c742e297281aa4118062_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d6ce08d72a824eb4e819b6c4f60173b56267dbb5f67ddc4596b718f2e9468bc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6ce08d72a824eb4e819b6c4f60173b56267dbb5f67ddc4596b718f2e9468bc1->enter($__internal_d6ce08d72a824eb4e819b6c4f60173b56267dbb5f67ddc4596b718f2e9468bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_940068b93b929017d8351b0bf0b8f404b5455e69086ae7fe17f47911ec226ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_940068b93b929017d8351b0bf0b8f404b5455e69086ae7fe17f47911ec226ccc->enter($__internal_940068b93b929017d8351b0bf0b8f404b5455e69086ae7fe17f47911ec226ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_940068b93b929017d8351b0bf0b8f404b5455e69086ae7fe17f47911ec226ccc->leave($__internal_940068b93b929017d8351b0bf0b8f404b5455e69086ae7fe17f47911ec226ccc_prof);

        
        $__internal_d6ce08d72a824eb4e819b6c4f60173b56267dbb5f67ddc4596b718f2e9468bc1->leave($__internal_d6ce08d72a824eb4e819b6c4f60173b56267dbb5f67ddc4596b718f2e9468bc1_prof);

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
