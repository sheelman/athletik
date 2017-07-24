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
        $__internal_254e3790d0b1b8edf49fd80571ddf46035f6270816494768d4e57ee16bbac949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_254e3790d0b1b8edf49fd80571ddf46035f6270816494768d4e57ee16bbac949->enter($__internal_254e3790d0b1b8edf49fd80571ddf46035f6270816494768d4e57ee16bbac949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_7f1b0a88f8de2f7cc326ec34885373e0aa748fdb2575b0a2d6bb9dfa23a2a9d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f1b0a88f8de2f7cc326ec34885373e0aa748fdb2575b0a2d6bb9dfa23a2a9d1->enter($__internal_7f1b0a88f8de2f7cc326ec34885373e0aa748fdb2575b0a2d6bb9dfa23a2a9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_254e3790d0b1b8edf49fd80571ddf46035f6270816494768d4e57ee16bbac949->leave($__internal_254e3790d0b1b8edf49fd80571ddf46035f6270816494768d4e57ee16bbac949_prof);

        
        $__internal_7f1b0a88f8de2f7cc326ec34885373e0aa748fdb2575b0a2d6bb9dfa23a2a9d1->leave($__internal_7f1b0a88f8de2f7cc326ec34885373e0aa748fdb2575b0a2d6bb9dfa23a2a9d1_prof);

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
