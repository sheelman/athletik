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
        $__internal_6fec46eadce4c950d726dcaa3e4aae54614a9a7dbc4f1b9be25a4537037791fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fec46eadce4c950d726dcaa3e4aae54614a9a7dbc4f1b9be25a4537037791fb->enter($__internal_6fec46eadce4c950d726dcaa3e4aae54614a9a7dbc4f1b9be25a4537037791fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_c2a2ae42d5c5a4c8ae2862ea3fb899d0af236bc0f391e17d9c0cfbeb3f15aa20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a2ae42d5c5a4c8ae2862ea3fb899d0af236bc0f391e17d9c0cfbeb3f15aa20->enter($__internal_c2a2ae42d5c5a4c8ae2862ea3fb899d0af236bc0f391e17d9c0cfbeb3f15aa20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_6fec46eadce4c950d726dcaa3e4aae54614a9a7dbc4f1b9be25a4537037791fb->leave($__internal_6fec46eadce4c950d726dcaa3e4aae54614a9a7dbc4f1b9be25a4537037791fb_prof);

        
        $__internal_c2a2ae42d5c5a4c8ae2862ea3fb899d0af236bc0f391e17d9c0cfbeb3f15aa20->leave($__internal_c2a2ae42d5c5a4c8ae2862ea3fb899d0af236bc0f391e17d9c0cfbeb3f15aa20_prof);

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
