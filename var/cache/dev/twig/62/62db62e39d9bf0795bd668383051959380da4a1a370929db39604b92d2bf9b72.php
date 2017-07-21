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
        $__internal_a6a7d70016aff733204e44a28d2c7e7e89e1dfb2e6f9351aaa2ac3df42a81b76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6a7d70016aff733204e44a28d2c7e7e89e1dfb2e6f9351aaa2ac3df42a81b76->enter($__internal_a6a7d70016aff733204e44a28d2c7e7e89e1dfb2e6f9351aaa2ac3df42a81b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_8974ead1560b7f5a479155ef468e4166c584179e0e7151003f021b7eb92222dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8974ead1560b7f5a479155ef468e4166c584179e0e7151003f021b7eb92222dd->enter($__internal_8974ead1560b7f5a479155ef468e4166c584179e0e7151003f021b7eb92222dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a6a7d70016aff733204e44a28d2c7e7e89e1dfb2e6f9351aaa2ac3df42a81b76->leave($__internal_a6a7d70016aff733204e44a28d2c7e7e89e1dfb2e6f9351aaa2ac3df42a81b76_prof);

        
        $__internal_8974ead1560b7f5a479155ef468e4166c584179e0e7151003f021b7eb92222dd->leave($__internal_8974ead1560b7f5a479155ef468e4166c584179e0e7151003f021b7eb92222dd_prof);

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
