<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0946aa9808eb3669f4271ee15f43e945b9013509a84b464884d1fbc4440d7f5d extends Twig_Template
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
        $__internal_9319349da2c8fe3199d6e2f6e7dccf5ae229d37bdd15aacfec7a648bf2ad39c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9319349da2c8fe3199d6e2f6e7dccf5ae229d37bdd15aacfec7a648bf2ad39c2->enter($__internal_9319349da2c8fe3199d6e2f6e7dccf5ae229d37bdd15aacfec7a648bf2ad39c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_7d822ebdf147028b5119a0839e69a3cdc905f47b9bd0437cd4f4d97c99f122ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d822ebdf147028b5119a0839e69a3cdc905f47b9bd0437cd4f4d97c99f122ce->enter($__internal_7d822ebdf147028b5119a0839e69a3cdc905f47b9bd0437cd4f4d97c99f122ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_9319349da2c8fe3199d6e2f6e7dccf5ae229d37bdd15aacfec7a648bf2ad39c2->leave($__internal_9319349da2c8fe3199d6e2f6e7dccf5ae229d37bdd15aacfec7a648bf2ad39c2_prof);

        
        $__internal_7d822ebdf147028b5119a0839e69a3cdc905f47b9bd0437cd4f4d97c99f122ce->leave($__internal_7d822ebdf147028b5119a0839e69a3cdc905f47b9bd0437cd4f4d97c99f122ce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
