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
        $__internal_63e61034638b989ed2643f7e20ab6f9b2bb3630ca953c16b4d06b8940283deb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63e61034638b989ed2643f7e20ab6f9b2bb3630ca953c16b4d06b8940283deb1->enter($__internal_63e61034638b989ed2643f7e20ab6f9b2bb3630ca953c16b4d06b8940283deb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_7f0abf83068a5721649cd454078a595c5462558b677c81c665cda1bee33f3612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0abf83068a5721649cd454078a595c5462558b677c81c665cda1bee33f3612->enter($__internal_7f0abf83068a5721649cd454078a595c5462558b677c81c665cda1bee33f3612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_63e61034638b989ed2643f7e20ab6f9b2bb3630ca953c16b4d06b8940283deb1->leave($__internal_63e61034638b989ed2643f7e20ab6f9b2bb3630ca953c16b4d06b8940283deb1_prof);

        
        $__internal_7f0abf83068a5721649cd454078a595c5462558b677c81c665cda1bee33f3612->leave($__internal_7f0abf83068a5721649cd454078a595c5462558b677c81c665cda1bee33f3612_prof);

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
