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
        $__internal_62f5148ea99b542b25d908bc4dcb298e2892ce292660c62393f506d81da79f98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62f5148ea99b542b25d908bc4dcb298e2892ce292660c62393f506d81da79f98->enter($__internal_62f5148ea99b542b25d908bc4dcb298e2892ce292660c62393f506d81da79f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_20ab2fdf14de90003906408fe014e83a7d76a0fba883853575eb0af16f9a6674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ab2fdf14de90003906408fe014e83a7d76a0fba883853575eb0af16f9a6674->enter($__internal_20ab2fdf14de90003906408fe014e83a7d76a0fba883853575eb0af16f9a6674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_62f5148ea99b542b25d908bc4dcb298e2892ce292660c62393f506d81da79f98->leave($__internal_62f5148ea99b542b25d908bc4dcb298e2892ce292660c62393f506d81da79f98_prof);

        
        $__internal_20ab2fdf14de90003906408fe014e83a7d76a0fba883853575eb0af16f9a6674->leave($__internal_20ab2fdf14de90003906408fe014e83a7d76a0fba883853575eb0af16f9a6674_prof);

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
