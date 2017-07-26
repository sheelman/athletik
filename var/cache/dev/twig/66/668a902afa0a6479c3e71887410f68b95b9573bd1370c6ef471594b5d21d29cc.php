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
        $__internal_4bc7515a510f4648c8d95d3537838b2721f6edcd40e45be30777cc6c94119558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bc7515a510f4648c8d95d3537838b2721f6edcd40e45be30777cc6c94119558->enter($__internal_4bc7515a510f4648c8d95d3537838b2721f6edcd40e45be30777cc6c94119558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_a33914ef58ceb8a67b3593f78547d83ec1b14238f4280a4dc24f67b7d0d5c362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33914ef58ceb8a67b3593f78547d83ec1b14238f4280a4dc24f67b7d0d5c362->enter($__internal_a33914ef58ceb8a67b3593f78547d83ec1b14238f4280a4dc24f67b7d0d5c362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_4bc7515a510f4648c8d95d3537838b2721f6edcd40e45be30777cc6c94119558->leave($__internal_4bc7515a510f4648c8d95d3537838b2721f6edcd40e45be30777cc6c94119558_prof);

        
        $__internal_a33914ef58ceb8a67b3593f78547d83ec1b14238f4280a4dc24f67b7d0d5c362->leave($__internal_a33914ef58ceb8a67b3593f78547d83ec1b14238f4280a4dc24f67b7d0d5c362_prof);

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
