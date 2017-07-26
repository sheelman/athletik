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
        $__internal_58b453781f45ce3ed6684117fad9256a3c319e567d338b72ab42d85f5a84b272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58b453781f45ce3ed6684117fad9256a3c319e567d338b72ab42d85f5a84b272->enter($__internal_58b453781f45ce3ed6684117fad9256a3c319e567d338b72ab42d85f5a84b272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_b87eba592b1b5a6df5b79401291243d82fe419b3862e524b3f1bdf17710b4f48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b87eba592b1b5a6df5b79401291243d82fe419b3862e524b3f1bdf17710b4f48->enter($__internal_b87eba592b1b5a6df5b79401291243d82fe419b3862e524b3f1bdf17710b4f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58b453781f45ce3ed6684117fad9256a3c319e567d338b72ab42d85f5a84b272->leave($__internal_58b453781f45ce3ed6684117fad9256a3c319e567d338b72ab42d85f5a84b272_prof);

        
        $__internal_b87eba592b1b5a6df5b79401291243d82fe419b3862e524b3f1bdf17710b4f48->leave($__internal_b87eba592b1b5a6df5b79401291243d82fe419b3862e524b3f1bdf17710b4f48_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_142ccec5508f6cb2105b930f8cf185dc74da2486f478b78a30fa6d85b439e09f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_142ccec5508f6cb2105b930f8cf185dc74da2486f478b78a30fa6d85b439e09f->enter($__internal_142ccec5508f6cb2105b930f8cf185dc74da2486f478b78a30fa6d85b439e09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cffbcfb743d0ffc73ec845b2421c11dbd7db913582972527b168bd88feb50120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cffbcfb743d0ffc73ec845b2421c11dbd7db913582972527b168bd88feb50120->enter($__internal_cffbcfb743d0ffc73ec845b2421c11dbd7db913582972527b168bd88feb50120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cffbcfb743d0ffc73ec845b2421c11dbd7db913582972527b168bd88feb50120->leave($__internal_cffbcfb743d0ffc73ec845b2421c11dbd7db913582972527b168bd88feb50120_prof);

        
        $__internal_142ccec5508f6cb2105b930f8cf185dc74da2486f478b78a30fa6d85b439e09f->leave($__internal_142ccec5508f6cb2105b930f8cf185dc74da2486f478b78a30fa6d85b439e09f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bac8b3a62991fd920982f28d601152e39835cd9849a598c86547957f1cd9f871 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bac8b3a62991fd920982f28d601152e39835cd9849a598c86547957f1cd9f871->enter($__internal_bac8b3a62991fd920982f28d601152e39835cd9849a598c86547957f1cd9f871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d21b268df2df4dadbc8063e8f03cfa20153467fc238b86703792a454cd3fed9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d21b268df2df4dadbc8063e8f03cfa20153467fc238b86703792a454cd3fed9d->enter($__internal_d21b268df2df4dadbc8063e8f03cfa20153467fc238b86703792a454cd3fed9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d21b268df2df4dadbc8063e8f03cfa20153467fc238b86703792a454cd3fed9d->leave($__internal_d21b268df2df4dadbc8063e8f03cfa20153467fc238b86703792a454cd3fed9d_prof);

        
        $__internal_bac8b3a62991fd920982f28d601152e39835cd9849a598c86547957f1cd9f871->leave($__internal_bac8b3a62991fd920982f28d601152e39835cd9849a598c86547957f1cd9f871_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c39b7b84aed6fe52f0c0c20d02043faf57a098ced6204388261ef23179982998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c39b7b84aed6fe52f0c0c20d02043faf57a098ced6204388261ef23179982998->enter($__internal_c39b7b84aed6fe52f0c0c20d02043faf57a098ced6204388261ef23179982998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fcbc0e4a383f8eaaa72c13fbb75ae5f103243a68e19e634e225db95f1cd3e98b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcbc0e4a383f8eaaa72c13fbb75ae5f103243a68e19e634e225db95f1cd3e98b->enter($__internal_fcbc0e4a383f8eaaa72c13fbb75ae5f103243a68e19e634e225db95f1cd3e98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_fcbc0e4a383f8eaaa72c13fbb75ae5f103243a68e19e634e225db95f1cd3e98b->leave($__internal_fcbc0e4a383f8eaaa72c13fbb75ae5f103243a68e19e634e225db95f1cd3e98b_prof);

        
        $__internal_c39b7b84aed6fe52f0c0c20d02043faf57a098ced6204388261ef23179982998->leave($__internal_c39b7b84aed6fe52f0c0c20d02043faf57a098ced6204388261ef23179982998_prof);

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
