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
        $__internal_2a4f45895a3a97542938eafab25f7ad710209da7d8d579464a54dfa689521b6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a4f45895a3a97542938eafab25f7ad710209da7d8d579464a54dfa689521b6c->enter($__internal_2a4f45895a3a97542938eafab25f7ad710209da7d8d579464a54dfa689521b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_2065d8238e15fe684853e48574a721bc5f44f9320ad630e83da1bceacb89e50f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2065d8238e15fe684853e48574a721bc5f44f9320ad630e83da1bceacb89e50f->enter($__internal_2065d8238e15fe684853e48574a721bc5f44f9320ad630e83da1bceacb89e50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a4f45895a3a97542938eafab25f7ad710209da7d8d579464a54dfa689521b6c->leave($__internal_2a4f45895a3a97542938eafab25f7ad710209da7d8d579464a54dfa689521b6c_prof);

        
        $__internal_2065d8238e15fe684853e48574a721bc5f44f9320ad630e83da1bceacb89e50f->leave($__internal_2065d8238e15fe684853e48574a721bc5f44f9320ad630e83da1bceacb89e50f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ecda0cd393560a5aa03a7a7708b969c15f54f8622af58021bd54224ecfee997f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecda0cd393560a5aa03a7a7708b969c15f54f8622af58021bd54224ecfee997f->enter($__internal_ecda0cd393560a5aa03a7a7708b969c15f54f8622af58021bd54224ecfee997f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4d513ba68d95521f721fc376f4abbca60a8f49548278cd740684c2248a90ed7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d513ba68d95521f721fc376f4abbca60a8f49548278cd740684c2248a90ed7d->enter($__internal_4d513ba68d95521f721fc376f4abbca60a8f49548278cd740684c2248a90ed7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4d513ba68d95521f721fc376f4abbca60a8f49548278cd740684c2248a90ed7d->leave($__internal_4d513ba68d95521f721fc376f4abbca60a8f49548278cd740684c2248a90ed7d_prof);

        
        $__internal_ecda0cd393560a5aa03a7a7708b969c15f54f8622af58021bd54224ecfee997f->leave($__internal_ecda0cd393560a5aa03a7a7708b969c15f54f8622af58021bd54224ecfee997f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5f0a898dca45de22174c237991e8422d8166e3dcfdb57494523cae1cc5f09ba4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f0a898dca45de22174c237991e8422d8166e3dcfdb57494523cae1cc5f09ba4->enter($__internal_5f0a898dca45de22174c237991e8422d8166e3dcfdb57494523cae1cc5f09ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4e28c8ca88801aedcc7cf000f9b3ab8a27ebe69da5f5b374e41fc5a780b5617b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e28c8ca88801aedcc7cf000f9b3ab8a27ebe69da5f5b374e41fc5a780b5617b->enter($__internal_4e28c8ca88801aedcc7cf000f9b3ab8a27ebe69da5f5b374e41fc5a780b5617b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4e28c8ca88801aedcc7cf000f9b3ab8a27ebe69da5f5b374e41fc5a780b5617b->leave($__internal_4e28c8ca88801aedcc7cf000f9b3ab8a27ebe69da5f5b374e41fc5a780b5617b_prof);

        
        $__internal_5f0a898dca45de22174c237991e8422d8166e3dcfdb57494523cae1cc5f09ba4->leave($__internal_5f0a898dca45de22174c237991e8422d8166e3dcfdb57494523cae1cc5f09ba4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f2e08169c78ab4805c62f3755f15fb254754657e4381350a0d404f8f39a0e93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f2e08169c78ab4805c62f3755f15fb254754657e4381350a0d404f8f39a0e93->enter($__internal_6f2e08169c78ab4805c62f3755f15fb254754657e4381350a0d404f8f39a0e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_38e87f823fafe5eddff4d9c7c20e5ea276d8fcb8670a1ca9a99b2ae7cfe27624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e87f823fafe5eddff4d9c7c20e5ea276d8fcb8670a1ca9a99b2ae7cfe27624->enter($__internal_38e87f823fafe5eddff4d9c7c20e5ea276d8fcb8670a1ca9a99b2ae7cfe27624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_38e87f823fafe5eddff4d9c7c20e5ea276d8fcb8670a1ca9a99b2ae7cfe27624->leave($__internal_38e87f823fafe5eddff4d9c7c20e5ea276d8fcb8670a1ca9a99b2ae7cfe27624_prof);

        
        $__internal_6f2e08169c78ab4805c62f3755f15fb254754657e4381350a0d404f8f39a0e93->leave($__internal_6f2e08169c78ab4805c62f3755f15fb254754657e4381350a0d404f8f39a0e93_prof);

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
