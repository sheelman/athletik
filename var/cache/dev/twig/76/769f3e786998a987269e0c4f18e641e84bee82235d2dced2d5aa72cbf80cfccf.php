<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_955cc17dfa719928ac111330d7ce96faccd6f0e26aba2e98b93882afbcaf683f extends Twig_Template
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
        $__internal_920a6d39cece72abf1f0d39a7546707e6cbed9192a2322d57cf4d76fdc9505f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_920a6d39cece72abf1f0d39a7546707e6cbed9192a2322d57cf4d76fdc9505f2->enter($__internal_920a6d39cece72abf1f0d39a7546707e6cbed9192a2322d57cf4d76fdc9505f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_0f2c8a0053e6c7c89241cfc04d21fe8f93b9f7bdd3e07bf3f395b0927cbea0fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f2c8a0053e6c7c89241cfc04d21fe8f93b9f7bdd3e07bf3f395b0927cbea0fc->enter($__internal_0f2c8a0053e6c7c89241cfc04d21fe8f93b9f7bdd3e07bf3f395b0927cbea0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_920a6d39cece72abf1f0d39a7546707e6cbed9192a2322d57cf4d76fdc9505f2->leave($__internal_920a6d39cece72abf1f0d39a7546707e6cbed9192a2322d57cf4d76fdc9505f2_prof);

        
        $__internal_0f2c8a0053e6c7c89241cfc04d21fe8f93b9f7bdd3e07bf3f395b0927cbea0fc->leave($__internal_0f2c8a0053e6c7c89241cfc04d21fe8f93b9f7bdd3e07bf3f395b0927cbea0fc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
