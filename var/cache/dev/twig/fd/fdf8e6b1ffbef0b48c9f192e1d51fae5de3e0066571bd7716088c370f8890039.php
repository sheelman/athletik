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
        $__internal_960375f9c542969285077fce0c79a1218cec554c516545fa87658bc1d45c03fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_960375f9c542969285077fce0c79a1218cec554c516545fa87658bc1d45c03fb->enter($__internal_960375f9c542969285077fce0c79a1218cec554c516545fa87658bc1d45c03fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_dfb3536b714fe7dae72991f5eea863b46d95ee5297c1fdc110f1bd99b12c9484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfb3536b714fe7dae72991f5eea863b46d95ee5297c1fdc110f1bd99b12c9484->enter($__internal_dfb3536b714fe7dae72991f5eea863b46d95ee5297c1fdc110f1bd99b12c9484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_960375f9c542969285077fce0c79a1218cec554c516545fa87658bc1d45c03fb->leave($__internal_960375f9c542969285077fce0c79a1218cec554c516545fa87658bc1d45c03fb_prof);

        
        $__internal_dfb3536b714fe7dae72991f5eea863b46d95ee5297c1fdc110f1bd99b12c9484->leave($__internal_dfb3536b714fe7dae72991f5eea863b46d95ee5297c1fdc110f1bd99b12c9484_prof);

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
