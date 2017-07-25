<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_701dcdd97d37dad2e87d66c4193097c3165f41f9a0e608fa8208817dd4d44b31 extends Twig_Template
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
        $__internal_48156714c66e3b4b1b91faf2e03f0a1a2f04bdb9def17a129fda8046040cc259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48156714c66e3b4b1b91faf2e03f0a1a2f04bdb9def17a129fda8046040cc259->enter($__internal_48156714c66e3b4b1b91faf2e03f0a1a2f04bdb9def17a129fda8046040cc259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_ee5624c6e7912f3a1e28ba86517bfda536d3cf7e16dfd492f6b7fc3e5713fb5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee5624c6e7912f3a1e28ba86517bfda536d3cf7e16dfd492f6b7fc3e5713fb5a->enter($__internal_ee5624c6e7912f3a1e28ba86517bfda536d3cf7e16dfd492f6b7fc3e5713fb5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_48156714c66e3b4b1b91faf2e03f0a1a2f04bdb9def17a129fda8046040cc259->leave($__internal_48156714c66e3b4b1b91faf2e03f0a1a2f04bdb9def17a129fda8046040cc259_prof);

        
        $__internal_ee5624c6e7912f3a1e28ba86517bfda536d3cf7e16dfd492f6b7fc3e5713fb5a->leave($__internal_ee5624c6e7912f3a1e28ba86517bfda536d3cf7e16dfd492f6b7fc3e5713fb5a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
