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
        $__internal_f3ab04b401db5dfd6d1ddf5a5d4e1eb19718886d6bc960171176a90671d7c97e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3ab04b401db5dfd6d1ddf5a5d4e1eb19718886d6bc960171176a90671d7c97e->enter($__internal_f3ab04b401db5dfd6d1ddf5a5d4e1eb19718886d6bc960171176a90671d7c97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_8de195bbf023b6ba9d7b7e93c8e28cedceca986f9f8d608999ac20ffb7a09a2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de195bbf023b6ba9d7b7e93c8e28cedceca986f9f8d608999ac20ffb7a09a2f->enter($__internal_8de195bbf023b6ba9d7b7e93c8e28cedceca986f9f8d608999ac20ffb7a09a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_f3ab04b401db5dfd6d1ddf5a5d4e1eb19718886d6bc960171176a90671d7c97e->leave($__internal_f3ab04b401db5dfd6d1ddf5a5d4e1eb19718886d6bc960171176a90671d7c97e_prof);

        
        $__internal_8de195bbf023b6ba9d7b7e93c8e28cedceca986f9f8d608999ac20ffb7a09a2f->leave($__internal_8de195bbf023b6ba9d7b7e93c8e28cedceca986f9f8d608999ac20ffb7a09a2f_prof);

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
