<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_5c8e5e128e6626d47f0b56deb7b86d811267c1cae6af4d2e1dec9934ffcbaf55 extends Twig_Template
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
        $__internal_06e8a3b821e1c57bda774eccf96ad6924b860f110cb2b2b1f0f4bbf7f5787514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e8a3b821e1c57bda774eccf96ad6924b860f110cb2b2b1f0f4bbf7f5787514->enter($__internal_06e8a3b821e1c57bda774eccf96ad6924b860f110cb2b2b1f0f4bbf7f5787514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_6ed86a3d745e525dda273a81a5700fae48ca8c4e51b44132d62669ffc0ea1d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed86a3d745e525dda273a81a5700fae48ca8c4e51b44132d62669ffc0ea1d65->enter($__internal_6ed86a3d745e525dda273a81a5700fae48ca8c4e51b44132d62669ffc0ea1d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_06e8a3b821e1c57bda774eccf96ad6924b860f110cb2b2b1f0f4bbf7f5787514->leave($__internal_06e8a3b821e1c57bda774eccf96ad6924b860f110cb2b2b1f0f4bbf7f5787514_prof);

        
        $__internal_6ed86a3d745e525dda273a81a5700fae48ca8c4e51b44132d62669ffc0ea1d65->leave($__internal_6ed86a3d745e525dda273a81a5700fae48ca8c4e51b44132d62669ffc0ea1d65_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
