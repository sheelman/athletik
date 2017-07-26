<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_62a5956d27be800285f7a5cc5492913f39af5affd3bd9bf00af6b589b57c192d extends Twig_Template
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
        $__internal_c894a1266ce06fd3d1ed62352defdabef580df77648357c3a3caf2acf75b9db0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c894a1266ce06fd3d1ed62352defdabef580df77648357c3a3caf2acf75b9db0->enter($__internal_c894a1266ce06fd3d1ed62352defdabef580df77648357c3a3caf2acf75b9db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_cf572c7fc3a4f44e522c96b0219a386768207d0b5267ed3f911e10125469d2d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf572c7fc3a4f44e522c96b0219a386768207d0b5267ed3f911e10125469d2d3->enter($__internal_cf572c7fc3a4f44e522c96b0219a386768207d0b5267ed3f911e10125469d2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_c894a1266ce06fd3d1ed62352defdabef580df77648357c3a3caf2acf75b9db0->leave($__internal_c894a1266ce06fd3d1ed62352defdabef580df77648357c3a3caf2acf75b9db0_prof);

        
        $__internal_cf572c7fc3a4f44e522c96b0219a386768207d0b5267ed3f911e10125469d2d3->leave($__internal_cf572c7fc3a4f44e522c96b0219a386768207d0b5267ed3f911e10125469d2d3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
