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
        $__internal_24103aca309c936ae9810f52eb428e72073a7ad2b1d8bd54abb7bcf36e7bb418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24103aca309c936ae9810f52eb428e72073a7ad2b1d8bd54abb7bcf36e7bb418->enter($__internal_24103aca309c936ae9810f52eb428e72073a7ad2b1d8bd54abb7bcf36e7bb418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_cac99f525227d8cc3dd30cd83a50ed0cf26b7121d4ff451a57d2eded6ae7531b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac99f525227d8cc3dd30cd83a50ed0cf26b7121d4ff451a57d2eded6ae7531b->enter($__internal_cac99f525227d8cc3dd30cd83a50ed0cf26b7121d4ff451a57d2eded6ae7531b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_24103aca309c936ae9810f52eb428e72073a7ad2b1d8bd54abb7bcf36e7bb418->leave($__internal_24103aca309c936ae9810f52eb428e72073a7ad2b1d8bd54abb7bcf36e7bb418_prof);

        
        $__internal_cac99f525227d8cc3dd30cd83a50ed0cf26b7121d4ff451a57d2eded6ae7531b->leave($__internal_cac99f525227d8cc3dd30cd83a50ed0cf26b7121d4ff451a57d2eded6ae7531b_prof);

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
