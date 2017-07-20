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
        $__internal_a66a83011ab7e76dea058c41808dd3c19f17b4ea5e70c1732be3d55b0fa65018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a66a83011ab7e76dea058c41808dd3c19f17b4ea5e70c1732be3d55b0fa65018->enter($__internal_a66a83011ab7e76dea058c41808dd3c19f17b4ea5e70c1732be3d55b0fa65018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_6811f76fe2aada042d41bb31828051483b7a2e42de4ee7c267a0f0d17f3b7719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6811f76fe2aada042d41bb31828051483b7a2e42de4ee7c267a0f0d17f3b7719->enter($__internal_6811f76fe2aada042d41bb31828051483b7a2e42de4ee7c267a0f0d17f3b7719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a66a83011ab7e76dea058c41808dd3c19f17b4ea5e70c1732be3d55b0fa65018->leave($__internal_a66a83011ab7e76dea058c41808dd3c19f17b4ea5e70c1732be3d55b0fa65018_prof);

        
        $__internal_6811f76fe2aada042d41bb31828051483b7a2e42de4ee7c267a0f0d17f3b7719->leave($__internal_6811f76fe2aada042d41bb31828051483b7a2e42de4ee7c267a0f0d17f3b7719_prof);

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
