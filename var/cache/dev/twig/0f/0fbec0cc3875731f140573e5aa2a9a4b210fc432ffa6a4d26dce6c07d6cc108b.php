<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e59fc2b9c19e389f46347b3b05c1dd31ace3e7d79b3c828c0e5b6929e6fc4712 extends Twig_Template
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
        $__internal_4cc6c24cc031a7dc189a1d5e1b9043ed14ca491fc83a6f9b7a321161e603fabb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cc6c24cc031a7dc189a1d5e1b9043ed14ca491fc83a6f9b7a321161e603fabb->enter($__internal_4cc6c24cc031a7dc189a1d5e1b9043ed14ca491fc83a6f9b7a321161e603fabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_9dc4fc4ae8fa8299e1657c70ed7723a23a86f08a8d6faa350d5bd21644f7b552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc4fc4ae8fa8299e1657c70ed7723a23a86f08a8d6faa350d5bd21644f7b552->enter($__internal_9dc4fc4ae8fa8299e1657c70ed7723a23a86f08a8d6faa350d5bd21644f7b552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_4cc6c24cc031a7dc189a1d5e1b9043ed14ca491fc83a6f9b7a321161e603fabb->leave($__internal_4cc6c24cc031a7dc189a1d5e1b9043ed14ca491fc83a6f9b7a321161e603fabb_prof);

        
        $__internal_9dc4fc4ae8fa8299e1657c70ed7723a23a86f08a8d6faa350d5bd21644f7b552->leave($__internal_9dc4fc4ae8fa8299e1657c70ed7723a23a86f08a8d6faa350d5bd21644f7b552_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
