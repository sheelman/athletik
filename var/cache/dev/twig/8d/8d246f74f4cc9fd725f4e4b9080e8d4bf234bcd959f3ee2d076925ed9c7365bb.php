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
        $__internal_05604fc909e951dd99fe3d794600d97e5ddbd7d12ee80523e16855ef79cf4ddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05604fc909e951dd99fe3d794600d97e5ddbd7d12ee80523e16855ef79cf4ddc->enter($__internal_05604fc909e951dd99fe3d794600d97e5ddbd7d12ee80523e16855ef79cf4ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_c244e82ab1cbc04df6bf9976b4b65c4f3208f199b29a362cae8bd8c3196f9381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c244e82ab1cbc04df6bf9976b4b65c4f3208f199b29a362cae8bd8c3196f9381->enter($__internal_c244e82ab1cbc04df6bf9976b4b65c4f3208f199b29a362cae8bd8c3196f9381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_05604fc909e951dd99fe3d794600d97e5ddbd7d12ee80523e16855ef79cf4ddc->leave($__internal_05604fc909e951dd99fe3d794600d97e5ddbd7d12ee80523e16855ef79cf4ddc_prof);

        
        $__internal_c244e82ab1cbc04df6bf9976b4b65c4f3208f199b29a362cae8bd8c3196f9381->leave($__internal_c244e82ab1cbc04df6bf9976b4b65c4f3208f199b29a362cae8bd8c3196f9381_prof);

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
