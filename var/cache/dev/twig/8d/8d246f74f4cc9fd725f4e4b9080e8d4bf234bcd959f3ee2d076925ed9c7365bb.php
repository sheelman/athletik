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
        $__internal_14e78ab0efe2defbc577ec7d80d1eb267788e2822b91a160f2ff42c82da2c741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14e78ab0efe2defbc577ec7d80d1eb267788e2822b91a160f2ff42c82da2c741->enter($__internal_14e78ab0efe2defbc577ec7d80d1eb267788e2822b91a160f2ff42c82da2c741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_f74435cf4c1a172b3f92ad8ce41ff2872072df59582652c7a9ffc81e6b505652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f74435cf4c1a172b3f92ad8ce41ff2872072df59582652c7a9ffc81e6b505652->enter($__internal_f74435cf4c1a172b3f92ad8ce41ff2872072df59582652c7a9ffc81e6b505652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_14e78ab0efe2defbc577ec7d80d1eb267788e2822b91a160f2ff42c82da2c741->leave($__internal_14e78ab0efe2defbc577ec7d80d1eb267788e2822b91a160f2ff42c82da2c741_prof);

        
        $__internal_f74435cf4c1a172b3f92ad8ce41ff2872072df59582652c7a9ffc81e6b505652->leave($__internal_f74435cf4c1a172b3f92ad8ce41ff2872072df59582652c7a9ffc81e6b505652_prof);

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
