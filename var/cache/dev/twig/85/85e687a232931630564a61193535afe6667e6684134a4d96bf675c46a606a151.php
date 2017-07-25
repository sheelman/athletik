<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_58f482e80d81a8d82618b132a63d527961c6902fb254e84dcaf76cf1bb6dc008 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31911e0c2395a91c92ab01d1457a58b0ae303eafac22f98726ba04b44ccfb65a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31911e0c2395a91c92ab01d1457a58b0ae303eafac22f98726ba04b44ccfb65a->enter($__internal_31911e0c2395a91c92ab01d1457a58b0ae303eafac22f98726ba04b44ccfb65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_2235a0dc804e09565bf824c676dae039d1efb4ccfbffac6ad5de8cec6a8f3026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2235a0dc804e09565bf824c676dae039d1efb4ccfbffac6ad5de8cec6a8f3026->enter($__internal_2235a0dc804e09565bf824c676dae039d1efb4ccfbffac6ad5de8cec6a8f3026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_31911e0c2395a91c92ab01d1457a58b0ae303eafac22f98726ba04b44ccfb65a->leave($__internal_31911e0c2395a91c92ab01d1457a58b0ae303eafac22f98726ba04b44ccfb65a_prof);

        
        $__internal_2235a0dc804e09565bf824c676dae039d1efb4ccfbffac6ad5de8cec6a8f3026->leave($__internal_2235a0dc804e09565bf824c676dae039d1efb4ccfbffac6ad5de8cec6a8f3026_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
