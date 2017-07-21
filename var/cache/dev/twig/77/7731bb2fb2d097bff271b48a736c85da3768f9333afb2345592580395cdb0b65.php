<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_124d9dd75c929b55d18962f6bf938051c898074126861dbd40238066259d66b2 extends Twig_Template
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
        $__internal_a4e10a65d6715649be7ead36fcd26b147cfdf4becdb1935da1e1428a9aa4c537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4e10a65d6715649be7ead36fcd26b147cfdf4becdb1935da1e1428a9aa4c537->enter($__internal_a4e10a65d6715649be7ead36fcd26b147cfdf4becdb1935da1e1428a9aa4c537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_3a500a393a17bcd61b11d80851bfebeffc479fc6a887ac8026bc858a6ec03852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a500a393a17bcd61b11d80851bfebeffc479fc6a887ac8026bc858a6ec03852->enter($__internal_3a500a393a17bcd61b11d80851bfebeffc479fc6a887ac8026bc858a6ec03852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_a4e10a65d6715649be7ead36fcd26b147cfdf4becdb1935da1e1428a9aa4c537->leave($__internal_a4e10a65d6715649be7ead36fcd26b147cfdf4becdb1935da1e1428a9aa4c537_prof);

        
        $__internal_3a500a393a17bcd61b11d80851bfebeffc479fc6a887ac8026bc858a6ec03852->leave($__internal_3a500a393a17bcd61b11d80851bfebeffc479fc6a887ac8026bc858a6ec03852_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
