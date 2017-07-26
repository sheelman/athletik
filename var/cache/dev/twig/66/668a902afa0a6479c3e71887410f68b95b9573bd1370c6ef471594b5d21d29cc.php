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
        $__internal_db46a00022f1cfbd11d5ce1d796b0e983fbe25500b9f4d2dd21102004aad497a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db46a00022f1cfbd11d5ce1d796b0e983fbe25500b9f4d2dd21102004aad497a->enter($__internal_db46a00022f1cfbd11d5ce1d796b0e983fbe25500b9f4d2dd21102004aad497a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_25859b0c9e7ca27a59532f2840a8562714b30bf9d5c279a58811ea3ac58e0a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25859b0c9e7ca27a59532f2840a8562714b30bf9d5c279a58811ea3ac58e0a24->enter($__internal_25859b0c9e7ca27a59532f2840a8562714b30bf9d5c279a58811ea3ac58e0a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_db46a00022f1cfbd11d5ce1d796b0e983fbe25500b9f4d2dd21102004aad497a->leave($__internal_db46a00022f1cfbd11d5ce1d796b0e983fbe25500b9f4d2dd21102004aad497a_prof);

        
        $__internal_25859b0c9e7ca27a59532f2840a8562714b30bf9d5c279a58811ea3ac58e0a24->leave($__internal_25859b0c9e7ca27a59532f2840a8562714b30bf9d5c279a58811ea3ac58e0a24_prof);

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
