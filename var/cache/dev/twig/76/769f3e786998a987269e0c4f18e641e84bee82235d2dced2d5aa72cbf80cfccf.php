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
        $__internal_9df5f6aa9729d0f276cb902ba0281b221d7bbd9386534199ca19a80f8f707a65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9df5f6aa9729d0f276cb902ba0281b221d7bbd9386534199ca19a80f8f707a65->enter($__internal_9df5f6aa9729d0f276cb902ba0281b221d7bbd9386534199ca19a80f8f707a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_e353d3ce6e3415cea0549380fa3a8704f3db9bc56bfd2dbbaae1d94d7d1e3f49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e353d3ce6e3415cea0549380fa3a8704f3db9bc56bfd2dbbaae1d94d7d1e3f49->enter($__internal_e353d3ce6e3415cea0549380fa3a8704f3db9bc56bfd2dbbaae1d94d7d1e3f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_9df5f6aa9729d0f276cb902ba0281b221d7bbd9386534199ca19a80f8f707a65->leave($__internal_9df5f6aa9729d0f276cb902ba0281b221d7bbd9386534199ca19a80f8f707a65_prof);

        
        $__internal_e353d3ce6e3415cea0549380fa3a8704f3db9bc56bfd2dbbaae1d94d7d1e3f49->leave($__internal_e353d3ce6e3415cea0549380fa3a8704f3db9bc56bfd2dbbaae1d94d7d1e3f49_prof);

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
