<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_6a312865dff10bc0533f3c37be125a17e91023579d9711e8d478be100cd8c786 extends Twig_Template
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
        $__internal_61eacd6b237687fd5314dc39b985f3cc0513ae5b9eaaac7e6bb230ba4526f1ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61eacd6b237687fd5314dc39b985f3cc0513ae5b9eaaac7e6bb230ba4526f1ab->enter($__internal_61eacd6b237687fd5314dc39b985f3cc0513ae5b9eaaac7e6bb230ba4526f1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_06355e12dec10f61e2677600421935568adc15297cba5ddc20307ba44c24884d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06355e12dec10f61e2677600421935568adc15297cba5ddc20307ba44c24884d->enter($__internal_06355e12dec10f61e2677600421935568adc15297cba5ddc20307ba44c24884d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_61eacd6b237687fd5314dc39b985f3cc0513ae5b9eaaac7e6bb230ba4526f1ab->leave($__internal_61eacd6b237687fd5314dc39b985f3cc0513ae5b9eaaac7e6bb230ba4526f1ab_prof);

        
        $__internal_06355e12dec10f61e2677600421935568adc15297cba5ddc20307ba44c24884d->leave($__internal_06355e12dec10f61e2677600421935568adc15297cba5ddc20307ba44c24884d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
