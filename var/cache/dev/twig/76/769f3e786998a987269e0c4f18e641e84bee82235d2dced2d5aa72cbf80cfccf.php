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
        $__internal_237eac6462ec6e4fe916845290a01c0bced41c2198b3685b4100bba9fd553665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_237eac6462ec6e4fe916845290a01c0bced41c2198b3685b4100bba9fd553665->enter($__internal_237eac6462ec6e4fe916845290a01c0bced41c2198b3685b4100bba9fd553665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_bb72e470ef8c06fb016c2860d0be1fa0cb4dfc1fc7e1ee87902a139dd01ee08c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb72e470ef8c06fb016c2860d0be1fa0cb4dfc1fc7e1ee87902a139dd01ee08c->enter($__internal_bb72e470ef8c06fb016c2860d0be1fa0cb4dfc1fc7e1ee87902a139dd01ee08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_237eac6462ec6e4fe916845290a01c0bced41c2198b3685b4100bba9fd553665->leave($__internal_237eac6462ec6e4fe916845290a01c0bced41c2198b3685b4100bba9fd553665_prof);

        
        $__internal_bb72e470ef8c06fb016c2860d0be1fa0cb4dfc1fc7e1ee87902a139dd01ee08c->leave($__internal_bb72e470ef8c06fb016c2860d0be1fa0cb4dfc1fc7e1ee87902a139dd01ee08c_prof);

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
