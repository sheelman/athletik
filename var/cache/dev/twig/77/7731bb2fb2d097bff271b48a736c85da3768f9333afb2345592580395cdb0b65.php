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
        $__internal_606191b3ba7403e360e1d75747414dc8ce87f511e3a3a46c2f001295f2a69c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_606191b3ba7403e360e1d75747414dc8ce87f511e3a3a46c2f001295f2a69c96->enter($__internal_606191b3ba7403e360e1d75747414dc8ce87f511e3a3a46c2f001295f2a69c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_e374b58ffa4e73139b5abdbb812ba534f75c38520cd61e6814ade3b7e3971f3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e374b58ffa4e73139b5abdbb812ba534f75c38520cd61e6814ade3b7e3971f3d->enter($__internal_e374b58ffa4e73139b5abdbb812ba534f75c38520cd61e6814ade3b7e3971f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_606191b3ba7403e360e1d75747414dc8ce87f511e3a3a46c2f001295f2a69c96->leave($__internal_606191b3ba7403e360e1d75747414dc8ce87f511e3a3a46c2f001295f2a69c96_prof);

        
        $__internal_e374b58ffa4e73139b5abdbb812ba534f75c38520cd61e6814ade3b7e3971f3d->leave($__internal_e374b58ffa4e73139b5abdbb812ba534f75c38520cd61e6814ade3b7e3971f3d_prof);

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
