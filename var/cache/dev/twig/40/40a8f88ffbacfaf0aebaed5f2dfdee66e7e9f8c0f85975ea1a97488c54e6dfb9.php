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
        $__internal_36fbe61b7635184c255a294a77a8eb99137c4797d8e745885ae7a1889994dc1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36fbe61b7635184c255a294a77a8eb99137c4797d8e745885ae7a1889994dc1f->enter($__internal_36fbe61b7635184c255a294a77a8eb99137c4797d8e745885ae7a1889994dc1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_947cc56f24947d9d515b5045f66bac2db16076a6f3378f0c808239ca4c4d5f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_947cc56f24947d9d515b5045f66bac2db16076a6f3378f0c808239ca4c4d5f19->enter($__internal_947cc56f24947d9d515b5045f66bac2db16076a6f3378f0c808239ca4c4d5f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36fbe61b7635184c255a294a77a8eb99137c4797d8e745885ae7a1889994dc1f->leave($__internal_36fbe61b7635184c255a294a77a8eb99137c4797d8e745885ae7a1889994dc1f_prof);

        
        $__internal_947cc56f24947d9d515b5045f66bac2db16076a6f3378f0c808239ca4c4d5f19->leave($__internal_947cc56f24947d9d515b5045f66bac2db16076a6f3378f0c808239ca4c4d5f19_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b1f8415f5cc8129aca63c254cbe4441fa1cb8223a324a193e7be942a36226eb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1f8415f5cc8129aca63c254cbe4441fa1cb8223a324a193e7be942a36226eb8->enter($__internal_b1f8415f5cc8129aca63c254cbe4441fa1cb8223a324a193e7be942a36226eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4e68fa7b158e28c0faad630b2bc9ad35f1efa59f1abb281e67d0b8374e7cc3d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e68fa7b158e28c0faad630b2bc9ad35f1efa59f1abb281e67d0b8374e7cc3d4->enter($__internal_4e68fa7b158e28c0faad630b2bc9ad35f1efa59f1abb281e67d0b8374e7cc3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4e68fa7b158e28c0faad630b2bc9ad35f1efa59f1abb281e67d0b8374e7cc3d4->leave($__internal_4e68fa7b158e28c0faad630b2bc9ad35f1efa59f1abb281e67d0b8374e7cc3d4_prof);

        
        $__internal_b1f8415f5cc8129aca63c254cbe4441fa1cb8223a324a193e7be942a36226eb8->leave($__internal_b1f8415f5cc8129aca63c254cbe4441fa1cb8223a324a193e7be942a36226eb8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_33b2027ea9200ad702e89f8b147b43dd27f1edb2417c32543016b8fa9e66b2de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33b2027ea9200ad702e89f8b147b43dd27f1edb2417c32543016b8fa9e66b2de->enter($__internal_33b2027ea9200ad702e89f8b147b43dd27f1edb2417c32543016b8fa9e66b2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_12c6cb58cb4f884e93c9811a46bfa95f566f6f1985aeedf2967ce60520a21241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12c6cb58cb4f884e93c9811a46bfa95f566f6f1985aeedf2967ce60520a21241->enter($__internal_12c6cb58cb4f884e93c9811a46bfa95f566f6f1985aeedf2967ce60520a21241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_12c6cb58cb4f884e93c9811a46bfa95f566f6f1985aeedf2967ce60520a21241->leave($__internal_12c6cb58cb4f884e93c9811a46bfa95f566f6f1985aeedf2967ce60520a21241_prof);

        
        $__internal_33b2027ea9200ad702e89f8b147b43dd27f1edb2417c32543016b8fa9e66b2de->leave($__internal_33b2027ea9200ad702e89f8b147b43dd27f1edb2417c32543016b8fa9e66b2de_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c1b3f89b6fa905922f6fafdd738744358824c855e8dfa675b71398fff0051af1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1b3f89b6fa905922f6fafdd738744358824c855e8dfa675b71398fff0051af1->enter($__internal_c1b3f89b6fa905922f6fafdd738744358824c855e8dfa675b71398fff0051af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b00ade1e4290475672f413324ccb0e46c57d44d3255d928119ecae37ebbf1299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b00ade1e4290475672f413324ccb0e46c57d44d3255d928119ecae37ebbf1299->enter($__internal_b00ade1e4290475672f413324ccb0e46c57d44d3255d928119ecae37ebbf1299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b00ade1e4290475672f413324ccb0e46c57d44d3255d928119ecae37ebbf1299->leave($__internal_b00ade1e4290475672f413324ccb0e46c57d44d3255d928119ecae37ebbf1299_prof);

        
        $__internal_c1b3f89b6fa905922f6fafdd738744358824c855e8dfa675b71398fff0051af1->leave($__internal_c1b3f89b6fa905922f6fafdd738744358824c855e8dfa675b71398fff0051af1_prof);

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
