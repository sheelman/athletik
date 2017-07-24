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
        $__internal_98f6e4c43651e7aae84c56a33ed5507611e7ace78b574a583ed3f3f585211b65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98f6e4c43651e7aae84c56a33ed5507611e7ace78b574a583ed3f3f585211b65->enter($__internal_98f6e4c43651e7aae84c56a33ed5507611e7ace78b574a583ed3f3f585211b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_2a3f9d7dd4fb72ce179e114e0f8e54f54c81009ab90eddda37d3cd2b2817d7d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a3f9d7dd4fb72ce179e114e0f8e54f54c81009ab90eddda37d3cd2b2817d7d0->enter($__internal_2a3f9d7dd4fb72ce179e114e0f8e54f54c81009ab90eddda37d3cd2b2817d7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_98f6e4c43651e7aae84c56a33ed5507611e7ace78b574a583ed3f3f585211b65->leave($__internal_98f6e4c43651e7aae84c56a33ed5507611e7ace78b574a583ed3f3f585211b65_prof);

        
        $__internal_2a3f9d7dd4fb72ce179e114e0f8e54f54c81009ab90eddda37d3cd2b2817d7d0->leave($__internal_2a3f9d7dd4fb72ce179e114e0f8e54f54c81009ab90eddda37d3cd2b2817d7d0_prof);

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
