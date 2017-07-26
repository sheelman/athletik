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
        $__internal_311cdd7f47b4cc321bc99c5ac1a40e21dc22109d65dfff20559d2509568f2565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_311cdd7f47b4cc321bc99c5ac1a40e21dc22109d65dfff20559d2509568f2565->enter($__internal_311cdd7f47b4cc321bc99c5ac1a40e21dc22109d65dfff20559d2509568f2565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_b86a94c98edcaf3dff188f451a07339b7d9740c6da1a24452ec9259913e6706d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b86a94c98edcaf3dff188f451a07339b7d9740c6da1a24452ec9259913e6706d->enter($__internal_b86a94c98edcaf3dff188f451a07339b7d9740c6da1a24452ec9259913e6706d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_311cdd7f47b4cc321bc99c5ac1a40e21dc22109d65dfff20559d2509568f2565->leave($__internal_311cdd7f47b4cc321bc99c5ac1a40e21dc22109d65dfff20559d2509568f2565_prof);

        
        $__internal_b86a94c98edcaf3dff188f451a07339b7d9740c6da1a24452ec9259913e6706d->leave($__internal_b86a94c98edcaf3dff188f451a07339b7d9740c6da1a24452ec9259913e6706d_prof);

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
