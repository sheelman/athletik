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
        $__internal_d505c4e85ea89ff42454f40f8c79203352998877280ff1b4504d4c7d7a45a94c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d505c4e85ea89ff42454f40f8c79203352998877280ff1b4504d4c7d7a45a94c->enter($__internal_d505c4e85ea89ff42454f40f8c79203352998877280ff1b4504d4c7d7a45a94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_8b658cb4dc2962689bf4ec4ab9c5441bab0a7756221456bfaff6159b16e4bbbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b658cb4dc2962689bf4ec4ab9c5441bab0a7756221456bfaff6159b16e4bbbb->enter($__internal_8b658cb4dc2962689bf4ec4ab9c5441bab0a7756221456bfaff6159b16e4bbbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_d505c4e85ea89ff42454f40f8c79203352998877280ff1b4504d4c7d7a45a94c->leave($__internal_d505c4e85ea89ff42454f40f8c79203352998877280ff1b4504d4c7d7a45a94c_prof);

        
        $__internal_8b658cb4dc2962689bf4ec4ab9c5441bab0a7756221456bfaff6159b16e4bbbb->leave($__internal_8b658cb4dc2962689bf4ec4ab9c5441bab0a7756221456bfaff6159b16e4bbbb_prof);

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
