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
        $__internal_19562e47c4cb2ae0cdb3684da86daf6954a2b5ccf065ebd7532c2216cc72f28b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19562e47c4cb2ae0cdb3684da86daf6954a2b5ccf065ebd7532c2216cc72f28b->enter($__internal_19562e47c4cb2ae0cdb3684da86daf6954a2b5ccf065ebd7532c2216cc72f28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_7bf6d270a3ed580e25fa3994e5f62672ce562dfc7bb3b68f6423f582437f240b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf6d270a3ed580e25fa3994e5f62672ce562dfc7bb3b68f6423f582437f240b->enter($__internal_7bf6d270a3ed580e25fa3994e5f62672ce562dfc7bb3b68f6423f582437f240b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_19562e47c4cb2ae0cdb3684da86daf6954a2b5ccf065ebd7532c2216cc72f28b->leave($__internal_19562e47c4cb2ae0cdb3684da86daf6954a2b5ccf065ebd7532c2216cc72f28b_prof);

        
        $__internal_7bf6d270a3ed580e25fa3994e5f62672ce562dfc7bb3b68f6423f582437f240b->leave($__internal_7bf6d270a3ed580e25fa3994e5f62672ce562dfc7bb3b68f6423f582437f240b_prof);

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
