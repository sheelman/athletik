<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_124d9dd75c929b55d18962f6bf938051c898074126861dbd40238066259d66b2 extends Twig_Template
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
        $__internal_0df0523814b9817ad36795a0981c2890d6ed0687005d32d95d205bc1768a3a1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0df0523814b9817ad36795a0981c2890d6ed0687005d32d95d205bc1768a3a1d->enter($__internal_0df0523814b9817ad36795a0981c2890d6ed0687005d32d95d205bc1768a3a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_b792f307220c378e538441a9061a4d094d208e711613808bed6fdf6e6735a18e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b792f307220c378e538441a9061a4d094d208e711613808bed6fdf6e6735a18e->enter($__internal_b792f307220c378e538441a9061a4d094d208e711613808bed6fdf6e6735a18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_0df0523814b9817ad36795a0981c2890d6ed0687005d32d95d205bc1768a3a1d->leave($__internal_0df0523814b9817ad36795a0981c2890d6ed0687005d32d95d205bc1768a3a1d_prof);

        
        $__internal_b792f307220c378e538441a9061a4d094d208e711613808bed6fdf6e6735a18e->leave($__internal_b792f307220c378e538441a9061a4d094d208e711613808bed6fdf6e6735a18e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
