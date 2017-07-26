<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_c560977e18401a34ecd7186d332416c9d7348a919654ecc2feb311c4f7da4722 extends Twig_Template
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
        $__internal_ef9780553de04570e8e2fe1a3e4dae4d3ac4f627943f9c9a786de9a485dfb0ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef9780553de04570e8e2fe1a3e4dae4d3ac4f627943f9c9a786de9a485dfb0ac->enter($__internal_ef9780553de04570e8e2fe1a3e4dae4d3ac4f627943f9c9a786de9a485dfb0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_55f1016b8834d240e25252c6175993376591dfee13c2b3a025c98bcef775b095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55f1016b8834d240e25252c6175993376591dfee13c2b3a025c98bcef775b095->enter($__internal_55f1016b8834d240e25252c6175993376591dfee13c2b3a025c98bcef775b095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_ef9780553de04570e8e2fe1a3e4dae4d3ac4f627943f9c9a786de9a485dfb0ac->leave($__internal_ef9780553de04570e8e2fe1a3e4dae4d3ac4f627943f9c9a786de9a485dfb0ac_prof);

        
        $__internal_55f1016b8834d240e25252c6175993376591dfee13c2b3a025c98bcef775b095->leave($__internal_55f1016b8834d240e25252c6175993376591dfee13c2b3a025c98bcef775b095_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
