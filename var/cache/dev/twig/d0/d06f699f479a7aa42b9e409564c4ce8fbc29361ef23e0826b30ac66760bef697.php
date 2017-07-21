<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_62a5956d27be800285f7a5cc5492913f39af5affd3bd9bf00af6b589b57c192d extends Twig_Template
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
        $__internal_cb7391cde266c26144ffb40819404c4f794c6adc342ca6e66f8bf044271be15c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb7391cde266c26144ffb40819404c4f794c6adc342ca6e66f8bf044271be15c->enter($__internal_cb7391cde266c26144ffb40819404c4f794c6adc342ca6e66f8bf044271be15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_36b2cee6d790731e43f14223c460e29a65edc5bbcc3ed584a4d88b927f60ca23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36b2cee6d790731e43f14223c460e29a65edc5bbcc3ed584a4d88b927f60ca23->enter($__internal_36b2cee6d790731e43f14223c460e29a65edc5bbcc3ed584a4d88b927f60ca23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_cb7391cde266c26144ffb40819404c4f794c6adc342ca6e66f8bf044271be15c->leave($__internal_cb7391cde266c26144ffb40819404c4f794c6adc342ca6e66f8bf044271be15c_prof);

        
        $__internal_36b2cee6d790731e43f14223c460e29a65edc5bbcc3ed584a4d88b927f60ca23->leave($__internal_36b2cee6d790731e43f14223c460e29a65edc5bbcc3ed584a4d88b927f60ca23_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
