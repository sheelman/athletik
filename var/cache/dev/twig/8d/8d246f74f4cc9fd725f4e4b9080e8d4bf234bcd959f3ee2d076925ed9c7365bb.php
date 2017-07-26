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
        $__internal_a233879726abfcfeaf70bc29d8a69090ab7a54b1825936035af89ebd1e6cea2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a233879726abfcfeaf70bc29d8a69090ab7a54b1825936035af89ebd1e6cea2c->enter($__internal_a233879726abfcfeaf70bc29d8a69090ab7a54b1825936035af89ebd1e6cea2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_5359d96428eb18f54e6fd9f5b82aa5910b5366600dcdf8849d55a28334caf5a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5359d96428eb18f54e6fd9f5b82aa5910b5366600dcdf8849d55a28334caf5a3->enter($__internal_5359d96428eb18f54e6fd9f5b82aa5910b5366600dcdf8849d55a28334caf5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a233879726abfcfeaf70bc29d8a69090ab7a54b1825936035af89ebd1e6cea2c->leave($__internal_a233879726abfcfeaf70bc29d8a69090ab7a54b1825936035af89ebd1e6cea2c_prof);

        
        $__internal_5359d96428eb18f54e6fd9f5b82aa5910b5366600dcdf8849d55a28334caf5a3->leave($__internal_5359d96428eb18f54e6fd9f5b82aa5910b5366600dcdf8849d55a28334caf5a3_prof);

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
