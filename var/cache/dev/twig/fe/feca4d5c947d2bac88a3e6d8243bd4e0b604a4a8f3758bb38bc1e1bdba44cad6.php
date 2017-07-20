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
        $__internal_7b01d85ca61f14efdb68c2a43757f778b99f9f6de34e8217072b2e848aed0bb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b01d85ca61f14efdb68c2a43757f778b99f9f6de34e8217072b2e848aed0bb1->enter($__internal_7b01d85ca61f14efdb68c2a43757f778b99f9f6de34e8217072b2e848aed0bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_a83b207e67c879b2291cfe502db68cb5f4def8d0d106bc1b7838984ebcb9deda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a83b207e67c879b2291cfe502db68cb5f4def8d0d106bc1b7838984ebcb9deda->enter($__internal_a83b207e67c879b2291cfe502db68cb5f4def8d0d106bc1b7838984ebcb9deda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_7b01d85ca61f14efdb68c2a43757f778b99f9f6de34e8217072b2e848aed0bb1->leave($__internal_7b01d85ca61f14efdb68c2a43757f778b99f9f6de34e8217072b2e848aed0bb1_prof);

        
        $__internal_a83b207e67c879b2291cfe502db68cb5f4def8d0d106bc1b7838984ebcb9deda->leave($__internal_a83b207e67c879b2291cfe502db68cb5f4def8d0d106bc1b7838984ebcb9deda_prof);

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
