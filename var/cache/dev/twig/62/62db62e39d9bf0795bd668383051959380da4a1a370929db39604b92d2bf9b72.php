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
        $__internal_c9540457972c7ad7cbf54ad2ef191d23b3aa800cc1e97ef4ad7fd7465a3418fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9540457972c7ad7cbf54ad2ef191d23b3aa800cc1e97ef4ad7fd7465a3418fd->enter($__internal_c9540457972c7ad7cbf54ad2ef191d23b3aa800cc1e97ef4ad7fd7465a3418fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_cd2b4dd8f67f6aae5eb6abf8593f0e43fa114abe3307c96607f94afe2ff74c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd2b4dd8f67f6aae5eb6abf8593f0e43fa114abe3307c96607f94afe2ff74c94->enter($__internal_cd2b4dd8f67f6aae5eb6abf8593f0e43fa114abe3307c96607f94afe2ff74c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c9540457972c7ad7cbf54ad2ef191d23b3aa800cc1e97ef4ad7fd7465a3418fd->leave($__internal_c9540457972c7ad7cbf54ad2ef191d23b3aa800cc1e97ef4ad7fd7465a3418fd_prof);

        
        $__internal_cd2b4dd8f67f6aae5eb6abf8593f0e43fa114abe3307c96607f94afe2ff74c94->leave($__internal_cd2b4dd8f67f6aae5eb6abf8593f0e43fa114abe3307c96607f94afe2ff74c94_prof);

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
