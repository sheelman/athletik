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
        $__internal_0fa1498f838e613221cf170ea6f84976eae3db06847d68b466b50fb2da6884b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fa1498f838e613221cf170ea6f84976eae3db06847d68b466b50fb2da6884b0->enter($__internal_0fa1498f838e613221cf170ea6f84976eae3db06847d68b466b50fb2da6884b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_adda36dec0a26d5474bc914f2cf91807f1999ae1a505aadb4352ecc83416424c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adda36dec0a26d5474bc914f2cf91807f1999ae1a505aadb4352ecc83416424c->enter($__internal_adda36dec0a26d5474bc914f2cf91807f1999ae1a505aadb4352ecc83416424c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_0fa1498f838e613221cf170ea6f84976eae3db06847d68b466b50fb2da6884b0->leave($__internal_0fa1498f838e613221cf170ea6f84976eae3db06847d68b466b50fb2da6884b0_prof);

        
        $__internal_adda36dec0a26d5474bc914f2cf91807f1999ae1a505aadb4352ecc83416424c->leave($__internal_adda36dec0a26d5474bc914f2cf91807f1999ae1a505aadb4352ecc83416424c_prof);

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
