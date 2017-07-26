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
        $__internal_bd73803a8d9a0b3ece1e10176f30d3d6af053d5289bceb98a0bf5171ad5f18c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd73803a8d9a0b3ece1e10176f30d3d6af053d5289bceb98a0bf5171ad5f18c9->enter($__internal_bd73803a8d9a0b3ece1e10176f30d3d6af053d5289bceb98a0bf5171ad5f18c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_d86e1cd891f54a483b8f38dc0bed17f8c01f62e479d79209e674fc83eb52524f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86e1cd891f54a483b8f38dc0bed17f8c01f62e479d79209e674fc83eb52524f->enter($__internal_d86e1cd891f54a483b8f38dc0bed17f8c01f62e479d79209e674fc83eb52524f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_bd73803a8d9a0b3ece1e10176f30d3d6af053d5289bceb98a0bf5171ad5f18c9->leave($__internal_bd73803a8d9a0b3ece1e10176f30d3d6af053d5289bceb98a0bf5171ad5f18c9_prof);

        
        $__internal_d86e1cd891f54a483b8f38dc0bed17f8c01f62e479d79209e674fc83eb52524f->leave($__internal_d86e1cd891f54a483b8f38dc0bed17f8c01f62e479d79209e674fc83eb52524f_prof);

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
