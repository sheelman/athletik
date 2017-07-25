<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_71e9dcbef320040219a1db1e2fb8b698e8c8d462086ee2564e2982396dc53d5e extends Twig_Template
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
        $__internal_4927a657f74245ff18c27e064b0d97843e3951bbf0f0b62f2eb12c5b73e6b6f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4927a657f74245ff18c27e064b0d97843e3951bbf0f0b62f2eb12c5b73e6b6f4->enter($__internal_4927a657f74245ff18c27e064b0d97843e3951bbf0f0b62f2eb12c5b73e6b6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_06e3ec054e5cd16cd8ccc60e0196d9d7cca56505c4f435a42e6415743656fb86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06e3ec054e5cd16cd8ccc60e0196d9d7cca56505c4f435a42e6415743656fb86->enter($__internal_06e3ec054e5cd16cd8ccc60e0196d9d7cca56505c4f435a42e6415743656fb86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_4927a657f74245ff18c27e064b0d97843e3951bbf0f0b62f2eb12c5b73e6b6f4->leave($__internal_4927a657f74245ff18c27e064b0d97843e3951bbf0f0b62f2eb12c5b73e6b6f4_prof);

        
        $__internal_06e3ec054e5cd16cd8ccc60e0196d9d7cca56505c4f435a42e6415743656fb86->leave($__internal_06e3ec054e5cd16cd8ccc60e0196d9d7cca56505c4f435a42e6415743656fb86_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
