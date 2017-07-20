<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0946aa9808eb3669f4271ee15f43e945b9013509a84b464884d1fbc4440d7f5d extends Twig_Template
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
        $__internal_96a619fcb7a1d26ce12ee35c0109d93b9024daed5285ff969a8783d10f96cfe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96a619fcb7a1d26ce12ee35c0109d93b9024daed5285ff969a8783d10f96cfe0->enter($__internal_96a619fcb7a1d26ce12ee35c0109d93b9024daed5285ff969a8783d10f96cfe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_817635857d25ce7e9747bcaf00b069b79cc460f9adf895a04f1f6b853e919a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_817635857d25ce7e9747bcaf00b069b79cc460f9adf895a04f1f6b853e919a2d->enter($__internal_817635857d25ce7e9747bcaf00b069b79cc460f9adf895a04f1f6b853e919a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_96a619fcb7a1d26ce12ee35c0109d93b9024daed5285ff969a8783d10f96cfe0->leave($__internal_96a619fcb7a1d26ce12ee35c0109d93b9024daed5285ff969a8783d10f96cfe0_prof);

        
        $__internal_817635857d25ce7e9747bcaf00b069b79cc460f9adf895a04f1f6b853e919a2d->leave($__internal_817635857d25ce7e9747bcaf00b069b79cc460f9adf895a04f1f6b853e919a2d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
