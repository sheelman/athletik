<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_701dcdd97d37dad2e87d66c4193097c3165f41f9a0e608fa8208817dd4d44b31 extends Twig_Template
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
        $__internal_c8e424fd19ef9e7677b94abd0c4929a8d378a21144e2ebc3160e2a67c3147e6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8e424fd19ef9e7677b94abd0c4929a8d378a21144e2ebc3160e2a67c3147e6e->enter($__internal_c8e424fd19ef9e7677b94abd0c4929a8d378a21144e2ebc3160e2a67c3147e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_fa151af76892d8e1bcab9547b38c9dd653abdab09314589927c68979c3f49077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa151af76892d8e1bcab9547b38c9dd653abdab09314589927c68979c3f49077->enter($__internal_fa151af76892d8e1bcab9547b38c9dd653abdab09314589927c68979c3f49077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c8e424fd19ef9e7677b94abd0c4929a8d378a21144e2ebc3160e2a67c3147e6e->leave($__internal_c8e424fd19ef9e7677b94abd0c4929a8d378a21144e2ebc3160e2a67c3147e6e_prof);

        
        $__internal_fa151af76892d8e1bcab9547b38c9dd653abdab09314589927c68979c3f49077->leave($__internal_fa151af76892d8e1bcab9547b38c9dd653abdab09314589927c68979c3f49077_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
