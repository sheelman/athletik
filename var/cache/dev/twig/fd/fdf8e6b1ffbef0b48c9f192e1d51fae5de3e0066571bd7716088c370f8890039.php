<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_713bbb5e16b849ce5bd8dd57cec0b7b80f2f680090a8e9668cd9a5a7707f0a55 extends Twig_Template
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
        $__internal_c741aab61a2670f471aa8e3f674ac4de5b4ff4b031c8ca3b4ad47782fd4a0303 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c741aab61a2670f471aa8e3f674ac4de5b4ff4b031c8ca3b4ad47782fd4a0303->enter($__internal_c741aab61a2670f471aa8e3f674ac4de5b4ff4b031c8ca3b4ad47782fd4a0303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_5fb65e0e9ebb888276669ea2b196b524f864467441385050ecd31a0260aa05c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb65e0e9ebb888276669ea2b196b524f864467441385050ecd31a0260aa05c1->enter($__internal_5fb65e0e9ebb888276669ea2b196b524f864467441385050ecd31a0260aa05c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_c741aab61a2670f471aa8e3f674ac4de5b4ff4b031c8ca3b4ad47782fd4a0303->leave($__internal_c741aab61a2670f471aa8e3f674ac4de5b4ff4b031c8ca3b4ad47782fd4a0303_prof);

        
        $__internal_5fb65e0e9ebb888276669ea2b196b524f864467441385050ecd31a0260aa05c1->leave($__internal_5fb65e0e9ebb888276669ea2b196b524f864467441385050ecd31a0260aa05c1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
