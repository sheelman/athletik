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
        $__internal_ffa77c200ae21bbe8e37dc804d83357df25b3ac247b42ee4f64c93c88e66fe6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffa77c200ae21bbe8e37dc804d83357df25b3ac247b42ee4f64c93c88e66fe6c->enter($__internal_ffa77c200ae21bbe8e37dc804d83357df25b3ac247b42ee4f64c93c88e66fe6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_fb68829a5467703c4af5abc777a8da26ad7e11fb115166074c8a9f5f33e9609d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb68829a5467703c4af5abc777a8da26ad7e11fb115166074c8a9f5f33e9609d->enter($__internal_fb68829a5467703c4af5abc777a8da26ad7e11fb115166074c8a9f5f33e9609d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_ffa77c200ae21bbe8e37dc804d83357df25b3ac247b42ee4f64c93c88e66fe6c->leave($__internal_ffa77c200ae21bbe8e37dc804d83357df25b3ac247b42ee4f64c93c88e66fe6c_prof);

        
        $__internal_fb68829a5467703c4af5abc777a8da26ad7e11fb115166074c8a9f5f33e9609d->leave($__internal_fb68829a5467703c4af5abc777a8da26ad7e11fb115166074c8a9f5f33e9609d_prof);

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
