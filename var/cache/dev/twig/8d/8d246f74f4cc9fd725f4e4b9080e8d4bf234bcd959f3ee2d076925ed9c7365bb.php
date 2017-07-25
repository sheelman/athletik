<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_f6217e166b994556adba263301db96e59c16bbb339fedd6cb1926679508bc20e extends Twig_Template
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
        $__internal_eb0a311941826a8debc392e2a1ffc4d299ab147a660e73d852cd03ff8d62b285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb0a311941826a8debc392e2a1ffc4d299ab147a660e73d852cd03ff8d62b285->enter($__internal_eb0a311941826a8debc392e2a1ffc4d299ab147a660e73d852cd03ff8d62b285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_b6f875f4a53de26ff27107a94499a4b166330044304e174743cc1d68f0a2ee59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6f875f4a53de26ff27107a94499a4b166330044304e174743cc1d68f0a2ee59->enter($__internal_b6f875f4a53de26ff27107a94499a4b166330044304e174743cc1d68f0a2ee59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_eb0a311941826a8debc392e2a1ffc4d299ab147a660e73d852cd03ff8d62b285->leave($__internal_eb0a311941826a8debc392e2a1ffc4d299ab147a660e73d852cd03ff8d62b285_prof);

        
        $__internal_b6f875f4a53de26ff27107a94499a4b166330044304e174743cc1d68f0a2ee59->leave($__internal_b6f875f4a53de26ff27107a94499a4b166330044304e174743cc1d68f0a2ee59_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
