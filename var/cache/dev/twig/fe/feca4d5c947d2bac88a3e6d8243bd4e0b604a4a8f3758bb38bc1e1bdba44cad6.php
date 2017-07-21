<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_71e9dcbef320040219a1db1e2fb8b698e8c8d462086ee2564e2982396dc53d5e extends Twig_Template
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
        $__internal_9f8e9943cb7370cc08d992c748445c8dfa9ed6e2c113461a8702e036075c5fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f8e9943cb7370cc08d992c748445c8dfa9ed6e2c113461a8702e036075c5fa2->enter($__internal_9f8e9943cb7370cc08d992c748445c8dfa9ed6e2c113461a8702e036075c5fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_93851a5f9f1ea8407f6c878bad50601382cf52ebec1be3f1f2d695d76fe5f9bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93851a5f9f1ea8407f6c878bad50601382cf52ebec1be3f1f2d695d76fe5f9bf->enter($__internal_93851a5f9f1ea8407f6c878bad50601382cf52ebec1be3f1f2d695d76fe5f9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_9f8e9943cb7370cc08d992c748445c8dfa9ed6e2c113461a8702e036075c5fa2->leave($__internal_9f8e9943cb7370cc08d992c748445c8dfa9ed6e2c113461a8702e036075c5fa2_prof);

        
        $__internal_93851a5f9f1ea8407f6c878bad50601382cf52ebec1be3f1f2d695d76fe5f9bf->leave($__internal_93851a5f9f1ea8407f6c878bad50601382cf52ebec1be3f1f2d695d76fe5f9bf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
