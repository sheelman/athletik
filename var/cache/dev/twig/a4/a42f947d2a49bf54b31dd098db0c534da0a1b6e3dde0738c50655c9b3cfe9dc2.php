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
        $__internal_4c756ddb441c2d365662ec402390ba1fec5b18aa1f70d7215a0cc61ffc81a7e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c756ddb441c2d365662ec402390ba1fec5b18aa1f70d7215a0cc61ffc81a7e4->enter($__internal_4c756ddb441c2d365662ec402390ba1fec5b18aa1f70d7215a0cc61ffc81a7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_00feff14c17593c513e6d6947569e0bf77660f4ac11e2a35fef6e68edb8075af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00feff14c17593c513e6d6947569e0bf77660f4ac11e2a35fef6e68edb8075af->enter($__internal_00feff14c17593c513e6d6947569e0bf77660f4ac11e2a35fef6e68edb8075af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_4c756ddb441c2d365662ec402390ba1fec5b18aa1f70d7215a0cc61ffc81a7e4->leave($__internal_4c756ddb441c2d365662ec402390ba1fec5b18aa1f70d7215a0cc61ffc81a7e4_prof);

        
        $__internal_00feff14c17593c513e6d6947569e0bf77660f4ac11e2a35fef6e68edb8075af->leave($__internal_00feff14c17593c513e6d6947569e0bf77660f4ac11e2a35fef6e68edb8075af_prof);

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
