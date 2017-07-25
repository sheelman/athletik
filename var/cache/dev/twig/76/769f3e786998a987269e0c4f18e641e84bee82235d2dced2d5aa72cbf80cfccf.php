<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_955cc17dfa719928ac111330d7ce96faccd6f0e26aba2e98b93882afbcaf683f extends Twig_Template
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
        $__internal_1fbdfaec06647f5ea8f0da0fad932ba2f75bb74a564f1c449d86e7a63d19ae85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fbdfaec06647f5ea8f0da0fad932ba2f75bb74a564f1c449d86e7a63d19ae85->enter($__internal_1fbdfaec06647f5ea8f0da0fad932ba2f75bb74a564f1c449d86e7a63d19ae85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_15e1d002a0f20fdaa66d0d45e95c9053c1f19098b99dc3db3c73f3ea1c34c0d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e1d002a0f20fdaa66d0d45e95c9053c1f19098b99dc3db3c73f3ea1c34c0d2->enter($__internal_15e1d002a0f20fdaa66d0d45e95c9053c1f19098b99dc3db3c73f3ea1c34c0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_1fbdfaec06647f5ea8f0da0fad932ba2f75bb74a564f1c449d86e7a63d19ae85->leave($__internal_1fbdfaec06647f5ea8f0da0fad932ba2f75bb74a564f1c449d86e7a63d19ae85_prof);

        
        $__internal_15e1d002a0f20fdaa66d0d45e95c9053c1f19098b99dc3db3c73f3ea1c34c0d2->leave($__internal_15e1d002a0f20fdaa66d0d45e95c9053c1f19098b99dc3db3c73f3ea1c34c0d2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
