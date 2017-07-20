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
        $__internal_8490fd5adec26805241a9eca776758c5edd1d5683cce590fbbbc9543e84944cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8490fd5adec26805241a9eca776758c5edd1d5683cce590fbbbc9543e84944cd->enter($__internal_8490fd5adec26805241a9eca776758c5edd1d5683cce590fbbbc9543e84944cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_3a625c45b0b2dce8bf0e1877d8f1734cfc0a6cb48851a694e0a0a5f8aa645a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a625c45b0b2dce8bf0e1877d8f1734cfc0a6cb48851a694e0a0a5f8aa645a2e->enter($__internal_3a625c45b0b2dce8bf0e1877d8f1734cfc0a6cb48851a694e0a0a5f8aa645a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_8490fd5adec26805241a9eca776758c5edd1d5683cce590fbbbc9543e84944cd->leave($__internal_8490fd5adec26805241a9eca776758c5edd1d5683cce590fbbbc9543e84944cd_prof);

        
        $__internal_3a625c45b0b2dce8bf0e1877d8f1734cfc0a6cb48851a694e0a0a5f8aa645a2e->leave($__internal_3a625c45b0b2dce8bf0e1877d8f1734cfc0a6cb48851a694e0a0a5f8aa645a2e_prof);

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
