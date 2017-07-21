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
        $__internal_9a7ebdc3223667aba24790e33c609a682597ef19226654ca2c0e87ad96753239 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a7ebdc3223667aba24790e33c609a682597ef19226654ca2c0e87ad96753239->enter($__internal_9a7ebdc3223667aba24790e33c609a682597ef19226654ca2c0e87ad96753239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_57effb639e4c81999e3be5719a72eddbaaf441e2196fd45eb8821ca5abe6a98c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57effb639e4c81999e3be5719a72eddbaaf441e2196fd45eb8821ca5abe6a98c->enter($__internal_57effb639e4c81999e3be5719a72eddbaaf441e2196fd45eb8821ca5abe6a98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9a7ebdc3223667aba24790e33c609a682597ef19226654ca2c0e87ad96753239->leave($__internal_9a7ebdc3223667aba24790e33c609a682597ef19226654ca2c0e87ad96753239_prof);

        
        $__internal_57effb639e4c81999e3be5719a72eddbaaf441e2196fd45eb8821ca5abe6a98c->leave($__internal_57effb639e4c81999e3be5719a72eddbaaf441e2196fd45eb8821ca5abe6a98c_prof);

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
