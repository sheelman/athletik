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
        $__internal_59ec439fd7fe183b84b8a83e8b1c1a07c8389bebb16ac99601ae1802634c6299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59ec439fd7fe183b84b8a83e8b1c1a07c8389bebb16ac99601ae1802634c6299->enter($__internal_59ec439fd7fe183b84b8a83e8b1c1a07c8389bebb16ac99601ae1802634c6299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_319802e384fbd1f4ba315307c4f8fe8dd9d34e95025ed68e5d3a3d17bbd10cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319802e384fbd1f4ba315307c4f8fe8dd9d34e95025ed68e5d3a3d17bbd10cf7->enter($__internal_319802e384fbd1f4ba315307c4f8fe8dd9d34e95025ed68e5d3a3d17bbd10cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_59ec439fd7fe183b84b8a83e8b1c1a07c8389bebb16ac99601ae1802634c6299->leave($__internal_59ec439fd7fe183b84b8a83e8b1c1a07c8389bebb16ac99601ae1802634c6299_prof);

        
        $__internal_319802e384fbd1f4ba315307c4f8fe8dd9d34e95025ed68e5d3a3d17bbd10cf7->leave($__internal_319802e384fbd1f4ba315307c4f8fe8dd9d34e95025ed68e5d3a3d17bbd10cf7_prof);

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
